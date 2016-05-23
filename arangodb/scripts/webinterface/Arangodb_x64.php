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
 * WPN-XM Webinterface - Class for ArangoDB
 */
class Arangodb_x64 extends SoftwareBase
{
    public $name = 'ArangoDB';

    public $registryName = 'arangodb-x64';

    public $installationFolder = /* WPNXM_ROOT . */ '\bin\arangodb';

    public $files = [
        '\bin\arangodb\arangodb-x64.exe',
    ];

    public function __invoke()
    {
        echo __CLASS__ . ' invoked';
    }
}