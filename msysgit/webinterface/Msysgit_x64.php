<?php

/**
 * WPИ-XM Server Stack
 * Copyright © 2010 - 2017 Jens A. Koch <jakoch@web.de>
 * http://wpn-xm.org/
 *
 * This source file is subject to the terms of the MIT license.
 * For full copyright and license information, view the bundled LICENSE file.
 */

namespace WPNXM\Webinterface\Software;

use WPNXM\Webinterface\SoftwareBase;

/**
 * WPN-XM Webinterface - Class for Git for Windows x64
 */
class Msysgit_x64 extends SoftwareBase
{
    public $name = 'Git for Windows x64';

    public $registryName = 'msysgit-x64';

    public $installationFolder = /* WPNXM_ROOT . */ '\bin\msysgit';

    public $files = [
        '\bin\msysgit\msysgit-x64.exe',
    ];

    public function __invoke()
    {
        echo __CLASS__ . ' invoked';
    }
}