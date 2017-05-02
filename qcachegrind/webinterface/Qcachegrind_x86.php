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
 * WPN-XM Webinterface - Class for QCacheGrind x86
 */
class Qcachegrind_x86 extends SoftwareBase
{
    public $name = 'QCacheGrind x86';

    public $registryName = 'qcachegrind-x86';

    public $installationFolder = /* WPNXM_ROOT . */ '\bin\qcachegrind';

    public $files = [
        '\bin\qcachegrind\qcachegrind-x86.exe',
    ];

    public function __invoke()
    {
        echo __CLASS__ . ' invoked';
    }
}