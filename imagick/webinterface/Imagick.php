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
 * WPN-XM Webinterface - Class for Imagick x86
 */
class Imagick extends SoftwareBase
{
    public $name = 'Imagick x86';

    public $registryName = 'imagick';

    public $installationFolder = /* WPNXM_ROOT . */ '\bin\imagick';

    public $files = [
        '\bin\imagick\imagick.exe',
    ];

    public function __invoke()
    {
        echo __CLASS__ . ' invoked';
    }
}