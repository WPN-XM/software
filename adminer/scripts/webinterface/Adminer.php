<?php

/**
 * WPИ-XM Server Stack
 * Copyright © 2010 - 2017 Jens A. Koch <jakoch@web.de>
 * http://wpn-xm.org/
 *
 * This source file is subject to the terms of the MIT license.
 * For full copyright and license information, view the bundled LICENSE file.
 */

namespace WPNXM\Webinterface\Software;

use WPNXM\Webinterface\SoftwareBase;
use WPNXM\Software\Adminer\Task\Version;

/**
 * WPN-XM Webinterface - Class for Adminer
 */
class Adminer extends SoftwareBase
{
    public $name = 'Adminer';

    public $registryName = 'adminer';

    public $installationFolder = /* WPNXM_ROOT . */ '\www\adminer';

    public $files = [
        '\www\tools\adminer\adminer.php',
    ];

    public function __invoke()
    {
        echo __CLASS__ . ' invoked';
    }
    
    /**
     * Returns PHP Version.
     *
     * @return string PHP Version
     */
    public function getVersion()
    {
        if ($this->isInstalled() === false) {
            return 'not installed';
        }

        $file = WPNXM_DIR . $this->files[0];

        $version = new Version($file);

        return $version;
    }

    public static function getLink()
    {
        // is adminer installed?
        if (is_dir(WPNXM_WWW_DIR.'tools/adminer') === true) {
            return '<a href="'.WPNXM_ROOT.'tools/adminer/adminer.php?server=localhost&amp;username=root">Adminer</a>';
        }
    }

}