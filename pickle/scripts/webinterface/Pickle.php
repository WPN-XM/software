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
 * WPN-XM Webinterface - Class for pickle
 */
class Pickle extends SoftwareBase
{
    public $name                = 'Pickle';
    public $registryName        = 'pickle';
    public $installationFolder  = '\bin\pickle';
    public $files               = '\bin\pickle\pickle.phar';
    
    public function __invoke()
    {
        echo __CLASS__ . ' invoked';
    }

    public function getVersion()
    {
        return 'Not implemented, yet.';
    }
}