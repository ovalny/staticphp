# staticphp
![](https://img.shields.io/github/stars/semen-person/staticphp.svg) ![](https://img.shields.io/github/forks/semen-person/staticphp.svg) ![](https://img.shields.io/github/tag/semen-person/staticphp.svg) ![](https://img.shields.io/github/release/semen-person/staticphp.svg) ![](https://img.shields.io/github/issues/semen-person/staticphp.svg) ![](https://img.shields.io/bower/semen-person/staticphp.svg)

 Some piece of useless PHP application that sets up routing for a static site.
 
 **Example**: was "example.com/contacts.html", became "example.com/contacts".
 
## But what for?
For beauty, remembering links, convenience, and even security (there is a .htaccess file in the repository)
## How to install
                
1. Download staticphp [here](https://github.com/semen-person/staticphp/releases)
2. Unpack staticphp on your webserver root directory
3. Go to the "templates" directory and place the HTML files you need there and change their format to ".php".
4. If you have the same parts on the pages (header, footer, etc.), you can move them to the "systemfiles" directory, and then include them in each file you need using:
```php
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/systemfiles/header.php"); ?>
```
(or check it in example website)
5. Make sure everything works correctly. Try all the pages you have. And also try to go to invalid links in order to make sure whether it is correct or not.
