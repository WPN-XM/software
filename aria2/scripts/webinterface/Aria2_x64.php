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
 * WPN-XM Webinterface - Class for aria2 x64
 */
class Aria2_x64 extends SoftwareBase
{
    public $name = 'aria2 x64';

    public $registryName = 'aria2-x64';

    public $installationFolder = /* WPNXM_ROOT . */ '\bin\aria2';

    public $files = [
        '\bin\aria2\aria2-x64.exe',
    ];

    public function __invoke()
    {
        echo __CLASS__ . ' invoked';
    }
}