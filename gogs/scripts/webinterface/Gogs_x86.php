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
 * WPN-XM Webinterface - Class for Go Git Service x86
 */
class Gogs_x86 extends SoftwareBase
{
    public $name = 'Go Git Service x86';

    public $registryName = 'gogs-x86';

    public $installationFolder = /* WPNXM_ROOT . */ '\bin\gogs';

    public $files = [
        '\bin\gogs\gogs-x86.exe',
    ];

    public function __invoke()
    {
        echo __CLASS__ . ' invoked';
    }
}