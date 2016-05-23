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

use WPNXM\Webinterface\SoftwareBase;

/**
 * WPN-XM Webinterface - Class for XDebug
 */
class PHPExt_XDebug extends SoftwareBase
{
    public $name = 'XDebug';

    public $registryName = 'phpext_xdebug';

    public $type = 'PHP Extension';

    public $installationFolder = '\bin\php\ext';

    public $files = [
        '\bin\php\ext\php_xdebug.dll',
    ];

    public $configFile = '\bin\php\php.ini';

    /**
     * Returns Xdebug Version.
     *
     * @return string Xdebug Version
     */
    public function getVersion()
    {
        $xdebug_version = 'false';
        $phpinfo        = \Webinterface\Helper\PHPInfo::getPHPInfo(true);

        // Check phpinfo content for Xdebug as Zend Extension
        if (preg_match('/with\sXdebug\sv([0-9.rcdevalphabeta-]+),/', $phpinfo, $matches)) {
            $xdebug_version = $matches[1];
        }

        return $xdebug_version;
    }

    public static function getXDebugExtensionType()
    {
        $phpinfo = \Webinterface\Helper\PHPInfo::getPHPInfo(true);

        // Check phpinfo content for Xdebug as Zend Extension
        if (preg_match('/with\sXdebug\sv([0-9.rcdevalphabeta-]+),/', $phpinfo, $matches)) {
            return 'Zend Extension';
        }

        // Check phpinfo content for Xdebug as normal PHP extension
        if (preg_match('/xdebug support/', $phpinfo, $matches)) {
            return 'PHP Extension';
        }

        return ':( XDebug not loaded.';
    }

    public function disable()
    {
        // remove xdebug php extension
        $o = new PHPExtensionManager;
        $o->disable('xdebug');

        // restart php daemon
        Serverstack::restartDaemon('php');

        //echo 'Xdebug disabled.';
        header('Location: '.WPNXM_WEBINTERFACE_ROOT.'index.php?page=overview');
    }

    public function enable()
    {
        // add xdebug php extension
        $o = new PHPExtensionManager;
        $o->enable('xdebug');

        // restart php daemon
        Serverstack::restartDaemon('php');

        //echo 'Xdebug enabled.';
        header('Location: '.WPNXM_WEBINTERFACE_ROOT.'index.php?page=overview');
    }

    public static function isProfilerActive()
    {
        return ini_get('xdebug.profiler_enable');
    }
}
