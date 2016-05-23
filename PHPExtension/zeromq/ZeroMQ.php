<?php

/**
 * WPИ-XM Server Stack
 * Copyright © 2010 - 2016 Jens A. Koch <jakoch@web.de>
 * http://wpn-xm.org/
 *
 * This source file is subject to the terms of the MIT license.
 * For full copyright and license information, view the bundled LICENSE file.
 */

namespace WPNXM\Webinterface\Software\PHPExtension;

use WPNXM\Webinterface\Software\SoftwareBase;

class ZeroMQ extends SoftwareBase
{
    public $name = 'ZeroMQ';
    public $registryName = 'phpext_zmq';
    public $type = 'PHP Extension';

    public function getVersion()
    {
        if (extension_loaded('zmq') === false) {
            return \WPNXM\Webinterface\Helper\Serverstack::printExclamationMark(
                'Not implemented yet!'
            );
        }
    }
}
