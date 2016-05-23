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
 * WPN-XM Webinterface - Class for WPN-XM Benchmark
 */
class Wpnxm_benchmark extends SoftwareBase
{
    public $name = 'WPN-XM Benchmark';

    public $registryName = 'wpnxm-benchmark';

    public $installationFolder = /* WPNXM_ROOT . */ '\bin\wpnxm-benchmark';

    public $files = [
        '\bin\wpnxm-benchmark\wpnxm-benchmark.exe',
    ];

    public function __invoke()
    {
        echo __CLASS__ . ' invoked';
    }
}