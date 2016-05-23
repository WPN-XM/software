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
 * WPN-XM Webinterface - Class for PEAR
 */
class Pear extends SoftwareBase
{
    public $name = 'PEAR';

    public $registryName = 'PEAR';

    public $installationFolder = '\bin\php\PEAR';

    /**
     * Returns PHP Version.
     *
     * @return string PHP Version
     */
    public function getVersion()
    {
        // load and parse a PEAR file to get the version, alternative to "pear.bat -V"
        $file = WPNXM_BIN.'php\PEAR\pear\PEAR\Autoloader.php';

        # fail safe, if PEAR not installed
        if (is_file($file) === false) {
            return \Webinterface\Helper\Serverstack::printExclamationMark('The PHP Extension "mysqli" is required.');
        }

        $maxLines = 60; // read only the first few lines of the file

        $file_handle = fopen($file, 'r');

        for ($i = 1; $i < $maxLines && !feof($file_handle); $i++) {
            $line_of_text = fgetcsv($file_handle, 1024);
            if (strpos($line_of_text[0], '@version')) {
                // lets grab the version from the phpdoc tag
                preg_match('/\/* @version[\s]+Release: (\d+.\d+.\d+)/', $line_of_text[0], $matches);
            }
        }
        fclose($file_handle);

        return $versions = $matches[1];
    }

    public function __invoke()
    {
        echo __CLASS__ . ' invoked';
    }
}