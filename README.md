![Nova Framework](http://novaframework.com/app/templates/publicthemes/nova/images/nova.png)

# Nova CMS

[![GitHub license](https://img.shields.io/badge/license-MIT-blue.svg)](https://github.com/nova-framework/cms/blob/master/LICENSE.txt)
[![GitHub stars](https://img.shields.io/github/stars/nova-framework/cms.svg)](https://github.com/nova-framework/cms/stargazers)
[![GitHub forks](https://img.shields.io/github/forks/nova-framework/cms.svg)](https://github.com/nova-framework/cms/network)

## Warning!

This repo has been updated to fall in line with the current stable release of Nova 3.75.12 (at the time of writing this) As a result parts of the code base will be different from the videos. If in doubt please ask in the chat room [gitter.im/nova-framework/framework/novausers](gitter.im/nova-framework/framework/novausers)

## What is the Nova Framework?

Nova CMS is built on top of Nova Framework, as an example of building a complex application. This is the end result from our video course [https://novaframework.com/screencasts/building-a-cms/getting-started](https://novaframework.com/screencasts/building-a-cms/getting-started)

## Requirements

**The framework requirements are limited.**

- PHP 5.6 or greater.
- Apache Web Server or equivalent with mod rewrite support.
- IIS with URL Rewrite module installed - [http://www.iis.net/downloads/microsoft/url-rewrite](http://www.iis.net/downloads/microsoft/url-rewrite)

**The following PHP extensions should be enabled:**

- Fileinfo (edit php.ini and uncomment php_fileinfo.dll or use php selector within cpanel if available.)
- OpenSSL
- INTL

## Installation

This framework was designed and is **strongly recommended** to be installed above the document root directory, with it pointing to the `public` folder.

Additionally, installing in a sub-directory, on a production server, will introduce severe security issues. If there is no choice still place the framework files above the document root and have only index.php and .htacess from the public folder in the sub folder and adjust the paths accordingly.

- Upload the files above the document root and point your web root to the public folder.
- Edit app/Config/Database.php and set your database credentials.
- Edit app/Config/App.php and update your settings as desired.
- Import scripts/cms.sql into your database.

At this point the CMS should be up and running to login to the admin go to /admin with the sample user account:

username: admin
password: admin

## Contributing

#### Issue Tracker

You can find outstanding issues on the [GitHub Issue Tracker](https://github.com/nova-framework/cms/issues).

#### Pull Requests

* Each pull request should contain only one new feature or improvement.
* Pull requests should be submitted to the correct version branch ie [master](https://github.com/nova-framework/cms/tree/master)

#### Code Style

All pull requests must use the PSR-2 code style.

* Code MUST use the PSR-1 code style.
* Code MUST use 4 spaces for indenting, not tabs.
* There MUST NOT be a hard limit on line length; the soft limit MUST be 120 characters; lines SHOULD be 80 characters or less.
* There MUST be one blank line after the namespace declaration, and there MUST be one blank line after the block of use declarations.
* Opening braces for classes MUST go on the next line, and closing braces MUST go on the next line after the body.
* Opening braces for methods MUST go on the next line, and closing braces MUST go on the next line after the body.
* Visibility MUST be declared on all properties and methods; abstract and final MUST be declared before the visibility; static MUST be declared after the visibility.
* Control structure keywords MUST have one space after them; method and function calls MUST NOT.
* Opening braces for control structures MUST go on the same line, and closing braces MUST go on the next line after the body.
* Opening parentheses for control structures MUST NOT have a space after them, and closing parentheses for control structures MUST NOT have a space before.

## License

The Nova Framework is under the MIT License, you can view the license [here](https://github.com/nova-framework/framework/blob/master/LICENSE.txt).
