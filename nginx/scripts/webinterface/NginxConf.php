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

class Config
{
    public $nginxConfigFile = WPNXM_BIN.'\nginx\conf\nginx.conf';

    public function isAllowedOnlyLocalAccess()
    {
        $config = $this->readNginxConfig();

        if (preg_match('/(^\s+)(listen)\s+(\d+\.\d+\.\d+\.\d+\:80\;)/m', $config)) {
            return true; //
        }

        if (preg_match('/(^\s+)(listen\s+80\;)/m', $config)) {
            return false; // allowAccessFromAnyComputer
        }

        throw new \Exception('nginx.conf error. Restore the access directives block.');
    }

    public function allowAccessFromAnyComputer()
    {
        $config = $this->readNginxConfig();

        // comment - access from localhost only
        $config = preg_replace('/(^\s+)(listen)\s+(\d+\.\d+\.\d+\.\d+\:80\;)/m', '\1# \2       \3', $config);
        $config = preg_replace('/(^\s+)(server_name\s+localhost\;)/m', '\1# \2', $config);

        // uncomment - allow access to the server from outside
        $config = preg_replace('/(^\s+)#\s(listen\s+80\;)/m', '\1\2', $config);
        $config = preg_replace('/(^\s+)#\s(server_name\s+_\;)/m', '\1\2', $config);

        $this->writeNginxConfig($config);
    }

    public function allowOnlyLocalAccess()
    {
        $config = $this->readNginxConfig();

        // comment - allow access to the server from outside
        $config = preg_replace('/(^\s+)(listen\s+80\;)/m', '\1# \2', $config);
        $config = preg_replace('/(^\s+)(server_name\s+_\;)/m', '\1# \2', $config);

        // uncomment - access from localhost only
        $config = preg_replace('/(^\s+)#\s(listen)\s+(\d+\.\d+\.\d+\.\d+\:80\;)/m', '\1\2       \3', $config);
        $config = preg_replace('/(^\s+)#\s(server_name\s+localhost\;)/m', '\1\2', $config);

        $this->writeNginxConfig($config);
    }

    public function readNginxConfig()
    {
        return file_get_contents($this->nginxConfigFile);
    }

    public function writeNginxConfig($data)
    {
        return (bool) file_put_contents($this->nginxConfigFile, $data);
    }
}