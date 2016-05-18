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
 * WPN-XM Webinterface - Class for NodeJS x64
 */
class Node_x64 extends SoftwareBase
{
    public $name = 'NodeJS x64';

    public $registryName = 'node-x64';

    public $installationFolder = /* WPNXM_ROOT . */ '\bin\node';

    public $files = [
        '\bin\node\node-x64.exe',
    ];

    public function __invoke()
    {
        echo __CLASS__ . ' invoked';
    }
}