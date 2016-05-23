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
 * WPN-XM Webinterface - Class for XHGUI for PHP Extension XHProf
 */
class Xhprof extends SoftwareBase
{
    public $name = 'XHProf';

    public $registryName = 'xhprof';

    public $installationFolder = '\www\tools\xhprof';

    public $files = [
        '\www\tools\xhprof\package.xml',
        '\www\tools\xhprof\xhprof_html\index.php',
    ];

    public function __invoke()
    {
        echo __CLASS__ . ' invoked';
    }

    /**
     * Returns Version.
     *
     * @return string Version
     */
    public function getVersion()
    {
        if (!is_file(WPNXM_DIR.$this->files[0])) {
            return 'not installed';
        }

        $xml = simplexml_load_file(WPNXM_DIR.$this->files[0]);

        return $xml->version->release;
    }
}