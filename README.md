![Nova Framework](http://novaframework.com/app/templates/publicthemes/nova/images/nova.png)

# Nova CMS

[![Total Downloads](https://img.shields.io/packagist/dt/nova-framework/cms.svg)](https://packagist.org/packages/nova-framework/cms)
[![GitHub license](https://img.shields.io/badge/license-MIT-blue.svg)](https://github.com/nova-framework/cms/blob/master/LICENSE.txt)
[![GitHub stars](https://img.shields.io/github/stars/nova-framework/cms.svg)](https://github.com/nova-framework/cms/stargazers)
[![GitHub forks](https://img.shields.io/github/forks/nova-framework/cms.svg)](https://github.com/nova-framework/cms/network)

[![Join the nova chat at https://gitter.im/nova-framework/framework](https://img.shields.io/gitter/room/nwjs/nw.js.svg)](https://gitter.im/nova-framework/framework/novausers?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

- [What is the Nova CMS?](#what-is-the-nova-cms)
- [Requirements](#requirements)
- [Installation](#installation)
- [Settings](#settings)
- [License](#license)

## What is the Nova CMS?

Nova CMS is a CMS built on top of Nova Framework.

## Requirements

**The framework requirements are limited.**

- PHP 5.6 or greater.
- Apache Web Server or equivalent with mod rewrite support.
- IIS with URL Rewrite module installed - [http://www.iis.net/downloads/microsoft/url-rewrite](http://www.iis.net/downloads/microsoft/url-rewrite)

**The following PHP extensions should be enabled:**

- Fileinfo (edit php.ini and uncomment php_fileinfo.dll or use php selector within cpanel if available.)
- OpenSSL
- INTL

> **Note:** Although a database is not required, if a database is to be used, the system is designed to work with a MySQL database using PDO.

## Installation

This framework was designed and is **strongly recommended** to be installed above the document root directory, with it pointing to the `public` folder.

Additionally, installing in a sub-directory, on a production server, will introduce severe security issues.

#### Recommended
The framework is located on [Packagist](https://packagist.org/packages/nova-framework/cms).

You can install the framework from a terminal by using:

```
composer create-project nova-framework/cms foldername -s dev
```

The foldername is the desired folder to be created.

#### Settings

- Edit `app/Config/App.php` set the options as desired. 
- Edit `app/Config/Database.php`
- Import cms.sql from /scripts
- Set a 32 character `ENCRYPT_KEY` by using the CLI tool. You can do this by typing `php nova make:key` in your command line / console. Alternatively, you can use the following tool: http://jeffreybarke.net/tools/codeigniter-encryption-key-generator/

## License

The Nova Framework is under the MIT License, you can view the license [here](https://github.com/nova-framework/framework/blob/master/LICENSE.txt).
