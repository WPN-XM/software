# Software Assets of the WPN-XM Server Stack

[![Latest Stable Version](https://poser.pugx.org/WPN-XM/software/version.png)](https://packagist.org/packages/WPN-XM/software)
[![Total Downloads](https://poser.pugx.org/WPN-XM/software/d/total.png)](https://packagist.org/packages/WPN-XM/software)
[![Build Status](https://travis-ci.org/WPN-XM/software.png)](https://travis-ci.org/WPN-XM/software) [![License](https://poser.pugx.org/WPN-XM/software/license.png)](https://packagist.org/packages/WPN-XM/software)

## What's this?

The repository contains files for installation and configuration management of third-party software components. 

It ships configs, scripts and additional files to configure and manage an installed component.

This monolithic repository is fetched during the creation of the installers. 

This enables us to 
  - include configs for the software assets into the offline installers to configure them out-of-the-box,
  - to include the CLI tasks for the management of the installed software,
  - to include webinterface support to allow a web-based administration and management of components.
  
## MonoRepo to MultiRepo: https://github.com/wpnxm-software

Each software asset folder is a Composer folder. 

We use a `git subtree split` strategy to split out the software asset folders into one-way read-only subtree split repositories. 

This enables Composer updates of the configuration and management scripts for a software asset after installation.

You find the individual packages here: https://github.com/wpnxm-software

## Structure

Each recipe consist of:
- a `readme.adoc`,
- a `manifest.json` config file,
- a `composer.json` file,
- the folders `assets`, `configs`, and `scripts`.
- the `scripts` folder has two folders `tasks` and `webinterface`.

      nginx/
        assets/
        configs
        scripts/
            tasks/
            webinterface/
        composer.json
        manifest.json
        readme.adoc
      
## `manifest.json` reference

The `manifest.json` file is a JSON file that contains package metadata.
It is used to identify a software asset in the context of the WPN-XM Server Stack.
The manifest is always included in a package.

These keys are used:

- `name` - Nice Name of the software
- `website` - URL to official website
- `description` - description of the software
- `category` - (optional) category of the software
- `tags` - (optional) one or multiple tags 
- `logo` - (optional) link to the logo in the asset folder
- `tasks` - The tasks key is used to track the implementation progress of task scripts:
  - `install`, `uninstall`, `update`, `configure`, `unconfigure`, `backup`, `restore`, `version`.
  
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
            "configure": "todo",
            "unconfigure: "todo",
            "backup": "todo",
            "restore": "todo",
            "version": "todo"
        }
    }
