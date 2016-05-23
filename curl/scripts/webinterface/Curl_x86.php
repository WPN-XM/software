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
 * WPN-XM Webinterface - Class for cURL x86
 */
class Curl_x86 extends SoftwareBase
{
    public $name = 'cURL x86';

    public $registryName = 'curl-x86';

    public $installationFolder = /* WPNXM_ROOT . */ '\bin\curl';

    public $files = [
        '\bin\curl\curl-x86.exe',
    ];

    public function __invoke()
    {
        echo __CLASS__ . ' invoked';
    }
}