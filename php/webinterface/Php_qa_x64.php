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
 * WPN-XM Webinterface - Class for PHP QA x64
 */
class Php_qa_x64 extends SoftwareBase
{
    public $name = 'PHP QA x64';

    public $registryName = 'php-qa-x64';

    public $installationFolder = /* WPNXM_ROOT . */ '\bin\php';

    public $files = [
        '\bin\php\php-qa-x64.exe',
    ];

    public function __invoke()
    {
        echo __CLASS__ . ' invoked';
    }
}