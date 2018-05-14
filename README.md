Webchain - News
===============

This is a `/news` section of
 [mainpage](https://gitlab.abchosting.org/abc-hosting/cryptocurrencies/webchain/mainpage) 
 repository. It contains only related to blog pages and admin panel for supporters.
 
Requirements
------------
* PHP 7.1^
* Composer
* MySql 5.6 or compatible DBMS

Scope of responsibilities
-------------------------
* Blog
* Admin Panel

Installation
------------
1. Install required dependencies: `composer install` for development environment or `composer install --no-dev` for staging/production environment;
2. Configure environment variables or use `.env` (look `.env.dist` for example);
3. Configure [your](https://symfony.com/doc/current/setup/web_server_configuration.html#content_wrapper) webserver to pass all requests to the `public/app.php` file.
    In dev environment you can just run [Symfony's](https://symfony.com/doc/current/setup/built_in_web_server.html) webserver via `server:start` console command;
4. Check if everythink fine by visiting application page. Done.