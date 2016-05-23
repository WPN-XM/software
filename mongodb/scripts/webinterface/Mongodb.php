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
 * WPN-XM Webinterface - Class for MongoDB
 */
class Mongodb extends SoftwareBase
{
    public $name = 'MongoDB';

    public $installationFolder = '\bin\mongodb';

    public $files = [
        '\bin\mongodb\mongodb.conf',
        '\bin\mongodb\bin\mongod.exe',
    ];

    public $configFile = '\bin\mongodb\mongodb.conf';

    public function __invoke()
    {
        echo __CLASS__ . ' invoked';
    }

    public function getVersion()
    {
        if ($this->isInstalled() === false) {
            return 'not installed';
        }

        if (!extension_loaded('mongo')) {
            return \WPNXM\Webinterface\Helper\Serverstack::printExclamationMark(
                'The PHP Extension "Mongo" is required.'
            );
        }

        try {
            $m = new \MongoClient();

            //require admin privilege
            $db = $m->admin;

            //$mongodb_info = $db->command(['buildinfo' => true]);
            //$mongodb_version = $mongodb_info['version'];

            // this returns an array with the keys "retval","ok"
            $mongodb_version = $db->execute('return db.version()');
        } catch (\MongoConnectionException $e) {
            return \WPNXM\Webinterface\Helper\Serverstack::printExclamationMark(
                    $e->getMessage().'. Please wake the daemon.'
            );
        }

        return $mongodb_version['retval'];
    }

    public function getPassword()
    {
        $ini = new \Webinterface\Helper\INIReaderWriter(WPNXM_INI);

        return $ini->get('MongoDB', 'password');
    }

    public function setPassword($password)
    {
        return 'Not implemented, yet.';
    }
}