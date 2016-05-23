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
 * WPN-XM Webinterface - Class for PHP QA x86
 */
class Php_qa extends SoftwareBase
{
    public $name = 'PHP QA x86';

    public $registryName = 'php-qa';

    public $installationFolder = /* WPNXM_ROOT . */ '\bin\php-qa';

    public $files = [
        '\bin\php-qa\php-qa.exe',
    ];

    public function __invoke()
    {
        echo __CLASS__ . ' invoked';
    }
}