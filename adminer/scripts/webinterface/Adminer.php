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

        $file = WPNXM_DIR.$this->files[0];

        $maxLines = 8; // read only the first few lines of the file

        $file_handle = fopen($file, 'r');

        for ($i = 0; $i < $maxLines && !feof($file_handle); $i++) {
            $line = fgets($file_handle, 1024);
            // lets grab the version from the phpdoc tag
            preg_match('/\* \@version (\d+.\d+.\d+)/', $line, $matches);

            if (isset($matches[0])) {
                break;
            }
        }
        fclose($file_handle);

        return $matches[1];
    }

    public static function getLink()
    {
        // is adminer installed?
        if (is_dir(WPNXM_WWW_DIR.'tools/adminer') === true) {
            return '<a href="'.WPNXM_ROOT.'tools/adminer/adminer.php?server=localhost&amp;username=root">Adminer</a>';
        }
    }

}