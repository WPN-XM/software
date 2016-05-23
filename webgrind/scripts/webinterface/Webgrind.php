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
 * WPN-XM Webinterface - Class for Webgrind
 */
class Webgrind extends SoftwareBase
{
public $name = 'Webgrind';

    public $registryName = 'webgrind';

    public $installationFolder =  '\www\tools\webgrind';

    public $files = [
        '\www\tools\webgrind\config.php',
        '\www\tools\webgrind\index.php',
    ];

    public function getVersion()
    {
        if ($this->isInstalled() === false) {
            return 'not installed';
        }

        $file = WPNXM_DIR.$this->files[1];

        $maxLines = 10; // read only the first few lines of the file

        $file_handle = fopen($file, 'r');

        for ($i = 0; $i < $maxLines && !feof($file_handle); $i++) {
            $line = fgets($file_handle, 1024);
            // lets grab the version from this line:
            // static $webgrindVersion = '1.0';
            preg_match("#webgrindVersion = '(.*)'#", $line, $matches);

            if (isset($matches[0])) {
                break;
            }
        }
        fclose($file_handle);

        return $matches[1];
    }

    /**
     * Set the storage and profiler data folder to "webgrind/config.php".
     * The default folder is the php.ini value of "xdebug.profiler_output_dir".
     */
    public static function setProfilerDataDir($dir = '')
    {
        if ($dir === '') {
            $dir = ini_get('xdebug.profiler_output_dir');
        }

        $file = WPNXM_WWW_DIR.'webgrind/config.php';
        $out  = '';

        $handle = @fopen($file, 'r');
        if ($handle) {
            $line = 0;
            while (!feof($handle)) {
                $line++;
                $linebuffer = fgets($handle);
                // set storage dir by replacing line 19
                if ($line === 19) {
                    $linebuffer = '    static $storageDir = \''.$dir."'\n";
                    continue;
                }
                // set profiler dir by replacing line 20
                if ($line === 20) {
                    $linebuffer = '    static $profilerDir = \''.$dir."'\n";
                    continue;
                }
                $out .= $linebuffer;
            }
        }
        fclose($handle);

        return (bool) file_put_contents($file, $out);
    }

    public function __invoke()
    {
        echo __CLASS__ . ' invoked';
    }

    
}