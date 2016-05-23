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
 * WPN-XM Webinterface - Class for RoboMongo
 */
class Robomongo extends SoftwareBase
{
    public $name = 'RoboMongo';

    public $registryName = 'robomongo';

    public $installationFolder = /* WPNXM_ROOT . */ '\bin\robomongo';

    public $files = [
        '\bin\robomongo\robomongo.exe',
    ];

    public function __invoke()
    {
        echo __CLASS__ . ' invoked';
    }
}