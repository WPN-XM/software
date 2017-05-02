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
 * WPN-XM Webinterface - Class for HeidiSQL
 */
class Heidisql extends SoftwareBase
{
    public $name = 'HeidiSQL';

    public $registryName = 'heidisql';

    public $installationFolder = /* WPNXM_ROOT . */ '\bin\heidisql';

    public $files = [
        '\bin\heidisql\heidisql.exe',
    ];

    public function __invoke()
    {
        echo __CLASS__ . ' invoked';
    }
}