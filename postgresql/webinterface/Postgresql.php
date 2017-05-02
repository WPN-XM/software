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
 * WPN-XM Webinterface - Class for PostgreSQL x86
 */
class Postgresql extends SoftwareBase
{
    public $name = 'PostgreSQL x86';

    public $registryName = 'postgresql';

    public $installationFolder = /* WPNXM_ROOT . */ '\bin\postgresql';

    public $files = [
        '\bin\postgresql\postgresql.exe',
    ];

    public function __invoke()
    {
        echo __CLASS__ . ' invoked';
    }
}