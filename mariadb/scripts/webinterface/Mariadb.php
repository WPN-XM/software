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
 * WPN-XM Webinterface - Class for MariaDB x86
 */
class Mariadb extends SoftwareBase
{
    public $name = 'MariaDB x86';

    public $registryName = 'mariadb';

    public $installationFolder = /* WPNXM_ROOT . */ '\bin\mariadb';

    public $files = [
        '\bin\mariadb\mariadb.exe',
    ];

    public function __invoke()
    {
        echo __CLASS__ . ' invoked';
    }
}