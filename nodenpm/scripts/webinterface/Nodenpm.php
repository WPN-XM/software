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
 * WPN-XM Webinterface - Class for NodeNPM
 */
class Nodenpm extends SoftwareBase
{
    public $name = 'NodeNPM';

    public $registryName = 'nodenpm';

    public $installationFolder = /* WPNXM_ROOT . */ '\bin\nodenpm';

    public $files = [
        '\bin\nodenpm\nodenpm.exe',
    ];

    public function __invoke()
    {
        echo __CLASS__ . ' invoked';
    }
}