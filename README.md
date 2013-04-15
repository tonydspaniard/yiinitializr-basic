YIInitializr-basic
=======
The following is a proposed project structure for basic applications that works in conjunction with YIInitializr components. 

YIInitializr vanilla projects make extensive use of Composer. We found at [2amigos.us](http://2amigos.us) that is easier to your extensions bundle outside of your application scope - thanks to [Phundament](http://phundament.com) and Tobias Munk for his knowledge and shares. Composer is your dependency package best friend. 

The package is cleaned from extensions, you choose what you wish to include in your composer.json files. The only ones included are Yii Framework (obviously), [YiiStrap](https://github.com/yii-twbs/yiistrap) and [YiiWheels](https://github.com/2amigos/yiiwheels), the rest is up to you. We do not want to confuse you 

## Setup and first run

  * Set up Git by following the instructions [here](https://help.github.com/articles/set-up-git).
  * Update the configurations in `app/config/` to suit your needs. The `common/config/main.php` is configured to use **sqllite** by default. Change your `common/config/env/dev.php` to suit your database requirements.
  * Composer is required The package includes already a `composer.phar` file.
  * Browse through the `composer.json` and remove the dependencies you don't need also update the required versions of the extensions.
  * If you have `composer` installed globally:
	 * Run `composer self-update` to make sure you have the latest version of composer.
	 * Run `composer install` to download all the dependencies.
  * If you work the `composer.phar` library within the project boilerplate.
    * Run `php composer.phar self-update` to make sure you have the latest version of composer.
    * Run `php composer.phar install` to download all the dependencies.
  * `Yiinitializr\Composer\Callback` will configure everything required on your application: `runtime` and `assets` folders and migrations.


For more information about using Composer please see its [documentation](http://getcomposer.org/doc/).

###How to configure the application

We focused to release the pain of configuring your application and combine your configuration files. `Yiinitializr\Helpers\Initializr` is very easy to use, check for example the bootstrap `index.php` file:

```
require('./../app/lib/vendor/yiisoft/yii/framework/yii.php');

Yii::setPathOfAlias('Yiinitializr', './../app/lib/Yiinitializr');

use Yiinitializr\Helpers\Initializer;

Initializer::create('./../app', 'main', array('common', 'env', 'local'))->run();
```

For more information about Yiinitializr please check it at [its github repo](https://github.com/2amigos/yiinitializr).

## Overall Structure

Bellow the directory structure used:

```
   |-app
   |---cli
   |-----commands
   |-----migrations
   |---config
   |-----env
   |---controllers
   |---extensions
   |-----behaviors
   |-----components
   |---helpers
   |---lib #it will hold composer 'vendor' folder
   |-----Yiinitializr
   |-------Cli
   |-------Composer
   |-------Helpers
   |-------config
   |---messages
   |---models
   |---modules
   |---views
   |-----layouts
   |-----site
   |---widgets
   |-www
   |---css
   |-----fonts
   |---img
   |---js
   |-----libs
```


## Extensions

The following extensions are part of YIInitializr-basic template:

 * Yiistrap [https://github.com/yii-twbs/yiistrap](https://github.com/yii-twbs/yiistrap)
 * Yiiwheels [https://github.com/2amigos/yiiwheels](https://github.com/2amigos/yiiwheels)
 * Yiinitializr [https://github.com/2amigos/yiinitializr](https://github.com/2amigos/yiinitializr)

> [![2amigOS!](http://www.gravatar.com/avatar/55363394d72945ff7ed312556ec041e0.png)](http://www.2amigos.us)    
<i>web development has never been so fun</i>  
[www.2amigos.us](http://www.2amigos.us) 
