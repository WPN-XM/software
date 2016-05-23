<?php

/**
 * WPИ-XM Server Stack
 * Copyright © 2010 - 2016 Jens A. Koch <jakoch@web.de>
 * http://wpn-xm.org/
 *
 * This source file is subject to the terms of the MIT license.
 * For full copyright and license information, view the bundled LICENSE file.
 */

namespace WPNXM\Webinterface\Software;

/**
 * WPN-XM Webinterface - Class for MariaDB x86
 */
class Mariadb extends SoftwareBase
{
    public $name = 'MariaDB x86';

    public $registryName = 'mariadb';

    public $installationFolder = '\bin\mariadb';

    public $files = [
        '\bin\mariadb\my.ini',
        '\bin\mariadb\bin\mysqld.exe',
    ];

    public $configFile = '\bin\mariadb\my.cnf';

    public function __invoke()
    {
        echo __CLASS__ . ' invoked';
    }

    /**
     * Returns MariaDB Version.
     *
     * @return string MariaDB Version
     */
    public function getVersion()
    {
        # fail safe, for unconfigured php.ini files
        if (!function_exists('mysqli_connect')) {
            return \Webinterface\Helper\Serverstack::printExclamationMark('The PHP Extension "mysqli" is required.');
        }

        $connection = @mysqli_connect('localhost', 'root', $this->getPassword());

        if (false === $connection) {
            return \Webinterface\Helper\Serverstack::printExclamationMark(
               sprintf(
                   'MariaDB Connection not possible. Access denied. Check credentials. Error: "%s"',
                   mysqli_connect_error()
               )
           );
        }
        // fetch server_info, e.g. "5.5.5-10.1.0-MariaDB" and drop the last part
        $version = str_replace('-MariaDB', '', $connection->server_info);
        $connection->close();

        return $version;
    }

    public function getPassword()
    {
        $ini = new \Webinterface\Helper\INIReaderWriter(WPNXM_INI);

        return $ini->get('MariaDB', 'password');
    }

    /**
     * Resets the MariaDB Password
     *
     * The procedure is described in:
     * http://dev.mysql.com/doc/mysql-windows-excerpt/5.0/en/resetting-permissions-windows.html
     */
    public function setPassword($password)
    {
        // commands
        $stop_mariadb            = 'taskkill /f /IM mysqld.exe 1>nul 2>nul';
        $mysqld_exe              = WPNXM_BIN.'mariadb\bin\mysqld.exe';
        $start_mariadb_change_pw = $mysqld_exe.' --defaults-file='.WPNXM_BIN.'\bin\\\mariadb\\\my.ini --init-file='.WPNXM_BIN.'\bin\\\mariadb\\\init_passwd_change.txt';
        $start_mariadb_normal    = $mysqld_exe.' --defaults-file='.WPNXM_BIN.'\bin\\\mariadb\\\my.ini';

        // create the init-file with the password update query
        file_put_contents(
            WPNXM_DIR.'\bin\mariadb\init_passwd_change.txt',
            "UPDATE mysql.user SET PASSWORD=PASSWORD('$password') WHERE User='root';\nFLUSH PRIVILEGES;"
        );

        // write new password to wpn-xm ini
        $ini = new \Webinterface\Helper\INIReaderWriter(WPNXM_INI);
        $ini->set('mariadb', 'password', $password);
        $ini->write();

        // stop mysqld and execute the init-file, then restart
        exec($stop_mariadb);
        exec($start_mariadb_change_pw);
        sleep(2);
        exec($stop_mariadb);
        exec($start_mariadb_normal);

        unlink(WPNXM_DIR.'\bin\mariadb\init_passwd_change.txt');

        // test connection with new password
        $connection = new \mysqli('localhost', 'root', $password, 'mysql');

        if (mysqli_connect_errno()) {
            $response = '<div class="alert alert-danger">Database Connection with new password FAILED.';
            $response .= '(MySQL ["'.mysqli_connect_errno().'"]"'.mysqli_connect_error().'")</div>';
        } else {
            $response = '<div class="alert alert-success">Password changed SUCCESSFULLY.</div>';
        }

        $connection->close();
        unset($connection);

        return $response;
    }

    public function getDataDir()
    {
        $myini_array = file(WPNXM_DIR.$this->configFile);

        $array               = preg_grep('/^datadir/', $myini_array);
        $key_datadir         = key($array);
        $mysql_datadir_array = explode('"', $myini_array[$key_datadir]);
        $mysql_datadir       = str_replace('/', '\\', $mysql_datadir_array[1]);

        return $mysql_datadir;
    }
}