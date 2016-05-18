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
 * WPN-XM Webinterface - Class for phpMemcachedAdmin
 */
class Phpmemcachedadmin extends SoftwareBase
{
    public $name = 'phpMemcachedAdmin';

    public $registryName = 'phpmemcachedadmin';

    public $installationFolder = /* WPNXM_ROOT . */ '\bin\phpmemcachedadmin';

    public $files = [
        '\bin\phpmemcachedadmin\phpmemcachedadmin.exe',
    ];

    public function __invoke()
    {
        echo __CLASS__ . ' invoked';
    }
}