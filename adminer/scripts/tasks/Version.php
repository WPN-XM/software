<?php

/**
 * WPИ-XM Server Stack
 * Copyright © 2010 - 2016 Jens A. Koch <jakoch@web.de>
 * http://wpn-xm.org/
 *
 * This source file is subject to the terms of the MIT license.
 * For full copyright and license information, view the bundled LICENSE file.
 */

namespace WPNXM\Software\Adminer\Task;

use WPNXM\TaskRunner\TaskBase;

class Version extends TaskBase
{    
    public function __construct($file)
    {
        $this->file = $file;
    }

    public function __invoke()
    {
        $file = WPNXM_DIR . $this->file;

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
}