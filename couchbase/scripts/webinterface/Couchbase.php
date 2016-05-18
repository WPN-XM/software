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
 * WPN-XM Webinterface - Class for Couchbase x86
 */
class Couchbase extends SoftwareBase
{
    public $name = 'Couchbase x86';

    public $registryName = 'couchbase';

    public $installationFolder = /* WPNXM_ROOT . */ '\bin\couchbase';

    public $files = [
        '\bin\couchbase\couchbase.exe',
    ];

    public function __invoke()
    {
        echo __CLASS__ . ' invoked';
    }
}