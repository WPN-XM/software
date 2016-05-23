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
 * WPN-XM Webinterface - Class for RethinkDB
 */
class Rethinkdb_x64 extends SoftwareBase
{
    public $name = 'RethinkDB';

    public $registryName = 'rethinkdb-x64';

    public $installationFolder = /* WPNXM_ROOT . */ '\bin\rethinkdb';

    public $files = [
        '\bin\rethinkdb\rethinkdb-x64.exe',
    ];

    public function __invoke()
    {
        echo __CLASS__ . ' invoked';
    }
}