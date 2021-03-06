This proyect is made with Silex Template
==============

See https://github.com/clops/silex-template        

Silex-Based Website Template which can be used as a starting point for pretty much any website. Just a nice way to spare time for setup in the future.

## Main features: ##

  * Ready-to-roll Twig Template setup to start creating pages right away
    * Includes a pre-defined HTML5 Boilerplate Template as a starting point -- http://html5boilerplate.com
    * Includes Modernizr -- http://modernizr.com
  * Assetic included (works automagically)
    * Parses LESS files into plain CSS
    * Combines CSS and JS files into single files
  * Development Version
  * Production Version (optimized with cache and compiled assets)
  * Test Version ready for PHPUnit

## Prerequisites ##

  * PHP 5.3.2+
  * Composer

## Installation ##

  1. Get this template to your machine:
     ```git clone git@github.com:clops/silex-template.git```
  2. Get composer (if you don't have a global one):
     ```curl -s http://getcomposer.org/installer | php```
  3. Run installation of dependancies:
     ```php composer.phar install```
  4. Set writing permissions:
     ```chmod 777 -R resources/cache resources/log```
  5. Configure your web-server to deliver ```web/``` as the host root
