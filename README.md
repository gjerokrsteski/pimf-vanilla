Welcome to PIMF Vanilla bundle
==============================
This is a run ready "Hello world" bundle using PIMF micro framework. Here you can learn how to work with \Pimf\View and \Pimf\Router.

Installation & Configuration
----------------------------

1. git clone --recursive https://github.com/gjerokrsteski/pimf-vanilla.git

2. cd pimf-vanilla/

3. update submodules
```php  
  git submodule --quiet sync
  git submodule --quiet update --force --init --recursive
  git submodule foreach git pull --force origin master
```

4. php pimf core:init

5. Navigate to your application in a web browser. If all is well, you should see a pretty PIMF splash page. Get ready - there is lot more to learn!
          
Alternatively you can run the PHP's built-in web server that is provided since PHP 5.4.0
 
```php   
 php -S localhost:8000
```

Please notice: this web server was designed to aid application development. It may also be useful for testing purposes or for 
application demonstrations that are run in controlled environments. It is not intended to be a full-featured web server. 
It should not be used on a public network.

Learning PIMF
-------------
One of the best ways to learn PIMF is to read through the entirety of its documentation. This guide details all aspects of the framework and how to apply them to your application. https://github.com/gjerokrsteski/pimf/wiki

Read the PIMF Starter book almost anywhere. Available as a PDF, EPUB and MOBI. You can now read it on all devices, as well as offline: https://leanpub.com/pimf-starter/



[![Bitdeli Badge](https://d2weczhvl823v0.cloudfront.net/gjerokrsteski/pimf-vanilla/trend.png)](https://bitdeli.com/free "Bitdeli Badge")

