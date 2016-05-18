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

    public $installationFolder = /* WPNXM_ROOT . */ '\bin\nginx';

    public $files = [
        '\bin\nginx\nginx.exe',
    ];

    public function __invoke()
    {
        echo __CLASS__ . ' invoked';
    }
}