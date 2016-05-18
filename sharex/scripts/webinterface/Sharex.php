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
 * WPN-XM Webinterface - Class for ShareX
 */
class Sharex extends SoftwareBase
{
    public $name = 'ShareX';

    public $registryName = 'sharex';

    public $installationFolder = /* WPNXM_ROOT . */ '\bin\sharex';

    public $files = [
        '\bin\sharex\sharex.exe',
    ];

    public function __invoke()
    {
        echo __CLASS__ . ' invoked';
    }
}