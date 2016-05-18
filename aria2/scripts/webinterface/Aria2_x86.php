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
 * WPN-XM Webinterface - Class for aria2 x86
 */
class Aria2_x86 extends SoftwareBase
{
    public $name = 'aria2 x86';

    public $registryName = 'aria2-x86';

    public $installationFolder = /* WPNXM_ROOT . */ '\bin\aria2';

    public $files = [
        '\bin\aria2\aria2-x86.exe',
    ];

    public function __invoke()
    {
        echo __CLASS__ . ' invoked';
    }
}