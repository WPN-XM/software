# Software Assets of the WPN-XM Server Stack

[![Latest Stable Version](https://poser.pugx.org/WPN-XM/software/version.png)](https://packagist.org/packages/WPN-XM/software)
[![Total Downloads](https://poser.pugx.org/WPN-XM/software/d/total.png)](https://packagist.org/packages/WPN-XM/software)
[![Build Status](https://travis-ci.org/WPN-XM/software.png)](https://travis-ci.org/WPN-XM/software) [![License](https://poser.pugx.org/WPN-XM/software/license.png)](https://packagist.org/packages/WPN-XM/software)

The repository contains recipes for configuration and management of third-party software components. 

This monolithic repository is fetched during the creation of the installers. 

It ships configs, scripts and additional files to configure and manage an installed component.

This enables us to 
  - include configs for the software assets into the offline installers to configure them out-of-the-box,
  - to include the CLI tasks for the management of the installed software
  - to include webinterface support to allow a web-based administration and management of components.
  
### Monorepo to MultiRepo: https://github.com/wpnxm-software

Each software asset folder is a Composer folder. 

We use a `git subtree split` strategy to split out the software asset folders into one-way read-only subtree split repositories. 

This enables to update the configuration and management scripts of a software asset after it's installation or update easily using Composer.

You find the individual packages here: https://github.com/wpnxm-software

## Structure

Each folder consist of the following top-level files and folders:
- a `readme.adoc`,
- a `manifest.json` config file,
- a `composer.json` file,
- the folders `files`, `configs`, `tasks` and `webinterface`.

    nginx/
      files/
      configs/
      tasks/
      webinterface/
      composer.json
      manifest.json
      readme.adoc
      
## `manifest.json`

The `manifest.json` file contents identify a software asset in the context of the WPN-XM Server Stack.

The keys are used:

- `name` - Nice Name of the software
- `website` - URL to official website
- `description` - description of the software
- `category` - (optional) category of the software
- `tags` - (optional) one or multiple tags 
- `logo` - (optional) link to the logo in the asset folder
- `tasks` - The tasks key is used to track the existance & implementation progress for task scripts.
  - `install`, `uninstall`, `update`, `backup`, `restore`, `version`.
  
This is the content of https://github.com/WPN-XM/software/blob/master/nginx/manifest.json :

    {
        "name": "Nginx",
        "website": "http:\/\/nginx.org\/",
        "description": "NGINX is a free, open-source, high-performance HTTP server, reverse proxy, and IMAP\/POP3 proxy server.",
        "category": "webserver",
        "tags": [
            "webserver",
            "reverse-proxy",
            "proxy"
        ],
        "logo": "",
        "tasks": {
            "install": "todo",
            "uninstall": "todo",
            "update": "todo",
            "backup": "todo",
            "restore": "todo",
            "version": "todo"
        }
    }
