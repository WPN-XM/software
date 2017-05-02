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
 * WPN-XM Webinterface - Class for WPN-XM Server Control Panel x86_64
 */
class Wpnxm_scp_x64 extends SoftwareBase
{
    public $name = 'WPN-XM Server Control Panel x86_64';

    public $registryName = 'wpnxm-scp-x64';

    public $installationFolder = /* WPNXM_ROOT . */ '\bin\wpnxm';

    public $files = [
        '\bin\wpnxm\wpnxm-scp-x64.exe',
    ];

    public function __invoke()
    {
        echo __CLASS__ . ' invoked';
    }
}