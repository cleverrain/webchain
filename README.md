Webchain - News
===============

This is a webchain landing page developed with a fresh vue[https://vuejs.org/] and symfony[https://symfony.com/].
 
Requirements
------------
* PHP 7.1^ & Composer
* NodeJs 10^ & NPM 5^
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
4. Install npm dependencies: `npm install`;
5. Build assets: `npm run dev` for development environment or `npm run prod` for staging/production environment;
6. Check if everythink fine by visiting application page. Done.