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
 * WPN-XM Webinterface - Class for Apache Benchmark (ab)
 */
class Apache_benchmark extends SoftwareBase
{
    public $name = 'Apache Benchmark (ab)';

    public $registryName = 'apache-benchmark';

    public $installationFolder = /* WPNXM_ROOT . */ '\bin\apache-benchmark';

    public $files = [
        '\bin\apache-benchmark\apache-benchmark.exe',
    ];

    public function __invoke()
    {
        echo __CLASS__ . ' invoked';
    }
}