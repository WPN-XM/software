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
 * WPN-XM Webinterface - Class for Fake Sendmail
 */
class Sendmail extends SoftwareBase
{
    public $name = 'Fake Sendmail';

    public $registryName = 'sendmail';

    public $installationFolder = /* WPNXM_ROOT . */ '\bin\sendmail';

    public $files = [
        '\bin\sendmail\sendmail.exe',
    ];

    public function __invoke()
    {
        echo __CLASS__ . ' invoked';
    }
}