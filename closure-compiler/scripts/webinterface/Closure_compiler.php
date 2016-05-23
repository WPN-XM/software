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
 * WPN-XM Webinterface - Class for Google Closure Compiler
 */
class Closure_compiler extends SoftwareBase
{
    public $name = 'Google Closure Compiler';

    public $registryName = 'closure-compiler';

    public $installationFolder = /* WPNXM_ROOT . */ '\bin\closure-compiler';

    public $files = [
        '\bin\closure-compiler\closure-compiler.exe',
    ];

    public function __invoke()
    {
        echo __CLASS__ . ' invoked';
    }
}