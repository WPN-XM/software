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
 * WPN-XM Webinterface - Class for Neo4j x64
 */
class Neo4j_x64 extends SoftwareBase
{
    public $name = 'Neo4j x64';

    public $registryName = 'neo4j-x64';

    public $installationFolder = /* WPNXM_ROOT . */ '\bin\neo4j';

    public $files = [
        '\bin\neo4j\neo4j-x64.exe',
    ];

    public function __invoke()
    {
        echo __CLASS__ . ' invoked';
    }
}