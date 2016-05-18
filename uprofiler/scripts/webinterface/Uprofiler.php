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
 * WPN-XM Webinterface - Class for uProfiler GUI
 */
class Uprofiler extends SoftwareBase
{
    public $name = 'uProfiler GUI';

    public $registryName = 'uprofiler';

    public $installationFolder = /* WPNXM_ROOT . */ '\bin\uprofiler';

    public $files = [
        '\bin\uprofiler\uprofiler.exe',
    ];

    public function __invoke()
    {
        echo __CLASS__ . ' invoked';
    }
}