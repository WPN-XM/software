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
 * WPN-XM Webinterface - Class for cURL x64
 */
class Curl_x64 extends SoftwareBase
{
    public $name = 'cURL x64';

    public $registryName = 'curl-x64';

    public $installationFolder = /* WPNXM_ROOT . */ '\bin\curl';

    public $files = [
        '\bin\curl\curl-x64.exe',
    ];

    public function __invoke()
    {
        echo __CLASS__ . ' invoked';
    }
}