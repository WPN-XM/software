<?php

/**
 * WPИ-XM Server Stack - https://wpn-xm.org/
 *
 * Copyright © 2010 - 2017 Jens A. Koch <jakoch@web.de>
 *
 * This source file is subject to the terms of the MIT license.
 * For full copyright and license information, view the bundled LICENSE file.
 */

namespace WPNXM\Software\ApacheBenchmark\Task;

use WPNXM\TaskRunner\TaskBase;

class Restore extends TaskBase
{

    public function __invoke()
    {
        echo __CLASS__ . ' invoked';
    }
}