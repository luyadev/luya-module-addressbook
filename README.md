[![LUYA](https://img.shields.io/badge/Powered%20by-LUYA-brightgreen.svg)](https://luya.io)
[![Total Downloads](https://poser.pugx.org/luyadev/luya-module-addressbook/downloads)](https://packagist.org/packages/luyadev/luya-module-contactform)
[![Latest Stable Version](https://poser.pugx.org/luyadev/luya-module-addressbook/v/stable)](https://packagist.org/packages/luyadev/luya-module-contactform)
[![Join the chat at https://gitter.im/luyadev/luya](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/luyadev/luya)

# Luya address book module

This modules provides a simple way to manage multiple address records and to render them in the frontend.
It also allows to to group the different contacts.

Please see the [luya guides](https://github.com/luyadev/luya/blob/master/docs/guide/lesson-module.md) for a comprehensive guide how to create this module.

## Installation

Require the address module via composer
```
composer require luyadev/luya-module-addressbook
```
and install/update with `composer install` oder `composer update`

Add both address book modules (admin and frontend) to config:
```
'addressbookadmin' => 'luya\addressbook\admin\Module',
'addressbook' => 'luya\addressbook\frontend\Module',
```

Don't forget to register the modules with `/vendor/bin/luya import`

## Integrate the frontend module

Use the module block an choose the `addressbook` module.

