Yii 2 Basic Project Starter App
============================

Yii 2 Basic Project Template is a skeleton [Yii 2](http://www.yiiframework.com/) application best for
rapidly creating small projects.

The template contains the basic features including user login/logout and a contact page.
It includes all commonly used configurations that would allow you to focus on adding new
features to your application.

[![Latest Stable Version](https://poser.pugx.org/yiisoft/yii2-app-basic/v/stable.png)](https://packagist.org/packages/yiisoft/yii2-app-basic)
[![Total Downloads](https://poser.pugx.org/yiisoft/yii2-app-basic/downloads.png)](https://packagist.org/packages/yiisoft/yii2-app-basic)
[![Build Status](https://travis-ci.org/yiisoft/yii2-app-basic.svg?branch=master)](https://travis-ci.org/yiisoft/yii2-app-basic)

DIRECTORY STRUCTURE
-------------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      mail/               contains view files for e-mails
      models/             contains model classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources



REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 5.4.0.


INSTALLATION
------------

### Install from an Archive File

Extract the archive file downloaded from [yiiframework.com](http://www.yiiframework.com/download/) to
a directory named `basic` that is directly under the Web root.

Set cookie validation key in `config/web.php` file to some random secret string:

```php
'request' => [
    // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
    'cookieValidationKey' => '<secret random string goes here>',
],
```

You can then access the application through the following URL:

~~~
http://localhost/basic/web/
~~~


### Install via Composer

If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

You can then install this project template using the following command:

~~~
php composer.phar global require "fxp/composer-asset-plugin:~1.1.1"
php composer.phar create-project --prefer-dist --stability=dev yiisoft/yii2-app-basic basic
~~~

Now you should be able to access the application through the following URL, assuming `basic` is the directory
directly under the Web root.

~~~
http://localhost/basic/web/
~~~


CONFIGURATION
-------------

### Database

Edit the file `config/db.php` with real data, for example:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2basic',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',
];
```

**NOTES:**
- Yii won't create the database for you, this has to be done manually before you can access it.
- Check and edit the other files in the `config/` directory to customize your application as required.
- Refer to the README in the `tests` directory for information specific to basic application tests.

This yii2 starter application, are bundled with some project to easily get start and run, creating basic 
yii2 application that used:
  - mongodb backed database
    - "yiisoft/yii2-mongodb": "^2.0"
    - "mongofill/mongofill": "dev-master"
  - role based access controll example
    - "letyii/yii2-rbac-mongodb": "dev-master",
    - "mdmsoft/yii2-admin": "2.x-dev",
  - using theme admin-LTE, and how to integrate with the application
    - "dmstr/yii2-adminlte-asset": "2.*"
  - with some example of used, model behaviours
  - model rule validation example
  - gii generator that has added mongodb collection generator
  - example of swiftmailer for create and send email
  - example configuration for RESTful webservice, and how to custom for mongodb ActiveRecord
  - yii migration for mongodb example 

Dependencies:
- composer
- git
- mongodb

Installasi:

> git clone https://<username>@bitbucket.org/egovdev/yii2-starter-app.git yii2-basic
> cd yii2-basic
> composer install

export database
> cd yii2-basic/data
> mongodump --db yii2db --host=127.0.0.1

import database
> cd yii2-basic/data
> mongorestore --db yii2db --host=127.0.0.1 dump/

exceute migrate
> cd yii2-basic
> ./yii mongodb-migrate up

run server
> cd yii2-basic
> php yii serve
atau
> ./yii serve
akses di browser dengan alamat http://localhost:8080

Features:

- User 
  - login, implements interface identity
  - logout, implements interface identity
  - signup, implements interface identity
  - forgot password ---> send email link to reset password, implements interface identity
- Customer management data
  - create, update, delete
- Behaviours
  - timestamp behaviour
    created_at: timestamp ketika record di buat, contohnya di data customer
    updated_at: timestamp ketika record di update, contohnya di data customer.
  - blameable behaviour
    created_by: user yang melakukan pembuatan record data, contohnya di data customer
    updated_by: user yang melakukan update record data, contohnya di data customer
- Role Based Access Control (perlu dilakukan modifikasi agar dapat menggunakan mongodb)
  - menggunakan tambahan extension, dan mongodb sebagai data store untuk Role Based Access Control nya
  - menggunakan modul tambahan yii2-admin, untuk manajemen user dan hak akses
  - penangangan hak akses tidak perlu di set di setiap controller nya, cukup di lakukan di module admin
- Penggunaan Model Rule Validation
  - username di trim, contoh di signup form
  - password minimal 6 karakter, contoh di signup form
  - pengecekan unique field, contoh di signup form
- Menggunakan backend MongoDB, untuk semua data yang disimpan
- Menggunakan gii generator module, termasuk mongoDB model generator (dilakukan modifikasi)
  Untuk mengenerate model, controller, crud, controller, form, module.
- Menggunakan swiftmailer, untuk mengirimkan link reset password ke email pengguna.
- Yii Migration dengan mongodb
  ./yii mongodb-migrate up
- Penggunaan module
  contoh di api module
- Penggunaan RESTful Webservice, XML, JSON
  yang telah di custom agar compatible dengan mongodb data.
  contoh di api module http://localhost:8080/api/customer
- Penggunaan theme adminLTE
