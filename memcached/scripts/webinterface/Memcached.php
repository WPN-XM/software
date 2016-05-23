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
 * WPN-XM Webinterface - Class for Memcached
 */
class Memcached extends SoftwareBase
{
    public $name = 'Memcached';

    public $registryName = 'memcached';

    public $installationFolder = '\bin\memcached';

    public $files = [
        '\bin\memcached\memcached.exe',
        '\bin\memcached\pthreadGC2.dll',
    ];

    public function __invoke()
    {
        echo __CLASS__ . ' invoked';
    }

    /**
     * Returns memcached Version.
     *
     * @return string memcached Version
     */
    public function getVersion()
    {
        if ($this->isInstalled() === false) {
            return 'not installed';
        }

        if (extension_loaded('memcache') === false) {
            return \Webinterface\Helper\Serverstack::printExclamationMark(
                'The PHP Extension "memcache" is required.'
            );
        }

        // hardcoded for now
        $server = 'localhost';
        $port   = 11211;

        $memcache = new \Memcache;
        $memcache->addServer($server, $port);

        $version   = @$memcache->getVersion();
        $available = (bool) $version;

        if ($available && @$memcache->connect($server, $port)) {
            return $version;
        } else {
            return \Webinterface\Helper\Serverstack::printExclamationMark(
                'Please wake the Memcache daemon.'
            );
        }
    }

    public function getPassword()
    {
        $ini = new \Webinterface\Helper\INIReaderWriter(WPNXM_INI);

        return $ini->get('MariaDB', 'password');
    }

    public function disable()
    {
        // kill running memcached daemon
        Serverstack::stopDaemon('memcached');

        // remove memcached php extension
        // note: extension name is "memcache", daemon name is "memcached"
        $o = new PHPExtensionManager;
        $o->enable('memcache');

        // restart php daemon
        Serverstack::startDaemon('memcached');

        Serverstack::restartDaemon('php');

        //header('Msg: Memcached disabled.');
        header('Location: '.WPNXM_WEBINTERFACE_ROOT.'index.php?page=overview');
    }

    public function enable()
    {
        // add memcached php extension
        // note: extension name is "memcache", daemon name is "memcached"
        $o = new PHPExtensionManager;
        $o->enable('memcache');

        // restart php daemon
        Serverstack::restartDaemon('php');

        // start memcached daemon
        Serverstack::startDaemon('memcached');

        //echo 'Memcached enabled.';
        header('Location: '.WPNXM_WEBINTERFACE_ROOT.'index.php?page=overview');
    }
}