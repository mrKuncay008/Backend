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

kuncay@mrkuncay:~/Program/Backend/PHP/Coba-Laravel$ composer diagnose
Checking composer.json: OK
Checking platform settings: OK
Checking git settings: OK git version 2.45.2
Checking http connectivity to packagist: OK
Checking https connectivity to packagist: OK
Checking github.com rate limit: OK
Checking disk free space: OK
Checking pubkeys: 
Tags Public Key Fingerprint: 57815BA2 7E54DC31 7ECC7CC5 573090D0  87719BA6 8F3BB723 4E5D42D0 84A14642
Dev Public Key Fingerprint: 4AC45767 E5EC2265 2F0C1167 CBBB8A2B  0C708369 153E328C AD90147D AFE50952
OK
Checking Composer version: OK
Checking Composer and its dependencies for vulnerabilities: OK
Composer version: 2.7.7
PHP version: 8.3.9
PHP binary path: /usr/bin/php8.3
OpenSSL version: OpenSSL 1.1.1f  31 Mar 2020
curl version: 7.68.0 libz 1.2.11 ssl OpenSSL/1.1.1f
zip: extension present, unzip present, 7-Zip present (7z)

# Migrate

php artisan make:migration tableName

edit databases fieldnya
```bash
/**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regional_table', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('negara');
            $table->timestamps();
        });
    }
```
setelah itu buat model

php artisan make:model
```bash
class namaModel extends Model
{
    use HasFactory;
    public $table = "nama_table";

    protected $fillable = [
        'name', // nama field table
        'negara'
    ];
}
```
jika ingin membuat table baru tinggal di ulang lagi.