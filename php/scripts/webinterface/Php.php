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
 * WPN-XM Webinterface - Class for PHP x86
 */
class Php extends SoftwareBase
{
    public $name = 'PHP x86';

    public $registryName = 'php';

    public $installationFolder = '\bin\php';

    public $files = [
        '\bin\php\php.ini',
        '\bin\php\php.exe',
    ];

    public $configFile = '\bin\php\php.ini';

    public function __invoke()
    {
        echo __CLASS__ . ' invoked';
    }

    /**
     * Returns PHP Version.
     *
     * @return string PHP Version
     */
    public function getVersion()
    {
        return PHP_VERSION;
    }

    public static function getPHPExtensionDirectory()
    {
        $phpinfo = \Webinterface\Helper\PHPInfo::getPHPInfo(true);

        $extensionDir = '';

        if (preg_match('/extension_dir([ =>\t]*)([^ =>\t]+)/', $phpinfo, $matches)) {
            $extensionDir = $matches[2];
        }

        return $extensionDir;
    }
}