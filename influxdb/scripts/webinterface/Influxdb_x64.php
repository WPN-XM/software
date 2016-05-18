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
 * WPN-XM Webinterface - Class for InfluxDb x64
 */
class Influxdb_x64 extends SoftwareBase
{
    public $name = 'InfluxDb x64';

    public $registryName = 'influxdb-x64';

    public $installationFolder = /* WPNXM_ROOT . */ '\bin\influxdb';

    public $files = [
        '\bin\influxdb\influxdb-x64.exe',
    ];

    public function __invoke()
    {
        echo __CLASS__ . ' invoked';
    }
}