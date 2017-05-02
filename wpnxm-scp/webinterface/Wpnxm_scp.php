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
 * WPN-XM Webinterface - Class for WPN-XM Server Control Panel x86
 */
class Wpnxm_scp extends SoftwareBase
{
    public $name = 'WPN-XM Server Control Panel x86';

    public $registryName = 'wpnxm-scp';

    public $installationFolder = /* WPNXM_ROOT . */ '\bin\wpnxm-scp';

    public $files = [
        '\bin\wpnxm-scp\wpnxm-scp.exe',
    ];

    public function __invoke()
    {
        echo __CLASS__ . ' invoked';
    }
}