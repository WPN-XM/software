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
 * WPN-XM Webinterface - Class for Sphinx Search x86
 */
class Sphinx extends SoftwareBase
{
    public $name = 'Sphinx Search x86';

    public $registryName = 'sphinx';

    public $installationFolder = /* WPNXM_ROOT . */ '\bin\sphinx';

    public $files = [
        '\bin\sphinx\sphinx.exe',
    ];

    public function __invoke()
    {
        echo __CLASS__ . ' invoked';
    }
}