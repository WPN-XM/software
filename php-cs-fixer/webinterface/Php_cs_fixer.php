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
 * WPN-XM Webinterface - Class for PHP CS Fixer
 */
class Php_cs_fixer extends SoftwareBase
{
    public $name = 'PHP CS Fixer';

    public $registryName = 'php-cs-fixer';

    public $installationFolder = /* WPNXM_ROOT . */ '\bin\php-cs-fixer';

    public $files = [
        '\bin\php-cs-fixer\php-cs-fixer.exe',
    ];

    public function __invoke()
    {
        echo __CLASS__ . ' invoked';
    }
}