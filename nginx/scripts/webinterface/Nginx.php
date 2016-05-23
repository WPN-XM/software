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
 * WPN-XM Webinterface - Class for Nginx
 */
class Nginx extends SoftwareBase
{
    public $name = 'Nginx';

    public $registryName = 'nginx';

    public $installationFolder = '\bin\nginx';

    public $files = [
        '\bin\nginx\conf\nginx.conf',
        '\bin\nginx\bin\nginx.exe',
    ];

    public $configFile = '\bin\nginx\conf\nginx.conf';

    public function __invoke()
    {
        echo __CLASS__ . ' invoked';
    }

    /**
     * Returns Version.
     *
     * @return string Version
     */
    public function getVersion()
    {
        if (strpos($_SERVER['SERVER_SOFTWARE'], 'Apache') !== false) {
            return \Webinterface\Helper\Serverstack::printExclamationMark('Traitor - you are using Apache!');
        }

        if (strpos($_SERVER['SERVER_SOFTWARE'], 'Development Server') !== false) {
            return \Webinterface\Helper\Serverstack::printExclamationMark('The webinterface is served via the embedded PHP Development Server!');
        }

        return substr($_SERVER['SERVER_SOFTWARE'], 6);
    }

    public function install()
    {
        $this->unzip($file, $installationFolder);
    }
}