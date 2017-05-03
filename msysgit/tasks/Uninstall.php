<?php

/**
 * WPИ-XM Server Stack - https://wpn-xm.org/
 *
 * Copyright © 2010 - 2017 Jens A. Koch <jakoch@web.de>
 *
 * This source file is subject to the terms of the MIT license.
 * For full copyright and license information, view the bundled LICENSE file.
 */

namespace WPNXM\Software\Msysgit\Task;

use WPNXM\TaskRunner\TaskBase;

class Uninstall extends TaskBase
{

    public function __invoke()
    {
        echo __CLASS__ . ' invoked';
    }
}