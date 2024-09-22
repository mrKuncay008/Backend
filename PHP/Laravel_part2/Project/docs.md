# Documentasi Laravel

- Instal composer via linux

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"

- Install Project global
composer global require laravel/installer
laravel new example-app

- Migrate atau install Project Laravel dari github

1.Run git clone <my-cool-project>
2.Run composer install
3.Run cp .env.example .env
4.Run php artisan key:generate
5.Run php artisan migrate
6.Run php artisan serve
7.Go to link localhost:8000

Ekstension VsCode Laravel
- PHP Intelepsen
- Laravel artisan
- Laravel Blade snipset
- Laravel Blade spacer
- Laravel Blade snipset
- Laravel snipset
- Laravel Gotoview

Valet Instal
```bash
composer global require cretueusebiu/valet-windows
```
Valet install on system
```bash
valet install
```
Config Dns on system

https://mayakron.altervista.org/support/acrylic/Windows10Configuration.htm

After config Dns ngix system
```php
valet start
```

```php
cd ~/Project
 
valet park
```
in Url:
- http://Project.test

## Make Contorler
```bash
php artisan make:controller <name>
```
vs code: 
```bash
ctrl-p >Artisan -> name -> basic / Resource / API 
```