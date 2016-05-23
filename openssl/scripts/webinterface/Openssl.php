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
 * WPN-XM Webinterface - Class for OpenSSL (32-bit)
 */
class Openssl extends SoftwareBase
{
    public $name = 'OpenSSL (32-bit)';

    public $registryName = 'openssl';

    public $installationFolder = /* WPNXM_ROOT . */ '\bin\openssl';

    public $files = [
        '\bin\openssl\openssl.exe',
    ];

    public function __invoke()
    {
        echo __CLASS__ . ' invoked';
    }
}