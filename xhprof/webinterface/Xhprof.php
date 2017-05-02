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
 * WPN-XM Webinterface - Class for XHGUI for PHP Extension XHProf
 */
class Xhprof extends SoftwareBase
{
    public $name = 'XHGUI for PHP Extension XHProf';

    public $registryName = 'xhprof';

    public $installationFolder = /* WPNXM_ROOT . */ '\bin\xhprof';

    public $files = [
        '\bin\xhprof\xhprof.exe',
    ];

    public function __invoke()
    {
        echo __CLASS__ . ' invoked';
    }
}