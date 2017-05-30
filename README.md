[![LUYA](https://img.shields.io/badge/Powered%20by-LUYA-brightgreen.svg)](https://luya.io)
[![Total Downloads](https://poser.pugx.org/luyadev/luya-module-addressbook/downloads)](https://packagist.org/packages/luyadev/luya-module-contactform)
[![Latest Stable Version](https://poser.pugx.org/luyadev/luya-module-addressbook/v/stable)](https://packagist.org/packages/luyadev/luya-module-contactform)
[![Join the chat at https://gitter.im/luyadev/luya](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/luyadev/luya)

# LUYA address book module

This module is the result of the comprehensive LUYA module lessons.

The first part described setting up the addressbook module:
[Create an admin and frontend module](https://github.com/luyadev/luya/blob/master/docs/guide/lesson-module.md)

The second part showed how to create an Active Window and how to add it to the CRUD view of the group model:
[Create an Active Window](https://github.com/luyadev/luya/blob/master/docs/guide/lesson-module.md)

This module itself provides a simple way to manage multiple address records and to render them in the frontend.
It also allows to to group the different contacts and send an email to all members of a group.

## Installation

Require the address module via composer
```
composer require luyadev/luya-module-addressbook
```
and install/update with `composer install` oder `composer update`

Add both address book modules (admin and frontend) to config:

```php
'modules' => [
    /* ... */

    'addressbookadmin' => 'luya\addressbook\admin\Module',
    'addressbook' => 'luya\addressbook\frontend\Module',
]
```

Don't forget to register the modules with `/vendor/bin/luya import`

## Integrate the frontend module

Create a module page in CMS and choose the `addressbook` module.

