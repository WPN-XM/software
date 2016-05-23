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
 * WPN-XM Webinterface - Class for Sphinx Search x64
 */
class Sphinx_x64 extends SoftwareBase
{
    public $name = 'Sphinx Search x64';

    public $registryName = 'sphinx-x64';

    public $installationFolder = /* WPNXM_ROOT . */ '\bin\sphinx';

    public $files = [
        '\bin\sphinx\sphinx-x64.exe',
    ];

    public function __invoke()
    {
        echo __CLASS__ . ' invoked';
    }
}