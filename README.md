<p align="center"><a href="https://eskristal-ptespugautama.com/" target="_blank"><img src="https://raw-gh.goranmoomin.workers.dev/dani-fadli/cool-fresh-agent/main/public/assets/coolfreshlogomenu.png?token=GHSAT0AAAAAACGWAWHPX6NIDPENRX2ZYUP2ZMWLOHA" width="300" alt="CoolFresh Logo"></a></p>

## CoolFresh Agent

CoolFresh Agent adalah aplikasi web yang dibuat untuk memudahkan para agen CoolFresh dalam
melihat status pesanan, melihat daftar pesanan, serta mengajukan retur pesanan ke perusahaan CoolFresh.

## Pre-requisites
- [PHP >=8.0](https://www.php.net/downloads.php)
- [Composer](https://getcomposer.org/download/)
- [MySQL](https://www.mysql.com/downloads/)
- [Node.js](https://nodejs.org/en/download/)
- [NPM](https://www.npmjs.com/get-npm)
- [Git](https://git-scm.com/downloads)
- [Text Editor](https://code.visualstudio.com/download)
- [Postman](https://www.postman.com/downloads/)
- [XAMPP](https://www.apachefriends.org/download.html)

## Installation
### Backend
1. Clone repository ini
    ```bash
    git clone https://github.com/dani-fadli/cool-fresh-agent.git
    ```
2. Buka project di text editre i.e. VSCode, PHPStorm, dll.
3. Copy .env.example menjadi .env. Bisa menggunakan Ctrl+C dan Ctrl+V atau dengan command berikut:
    ```bash
    cp .env.example .env
    ```
4. Buat database dengan nama `db_coolfresh_agent` di MySQL
5. Buka file .env, lalu ubah baris berikut:
    ```bash
    DB_DATABASE=db_coolfresh_agent
    DB_USERNAME=root  # Sesuaikan dengan username MySQL anda
    DB_PASSWORD=pass  # Sesuaikan dengan password MySQL anda
    ```
6. Buka terminal di text editor anda, lalu jalankan command berikut:
    ```bash
   # Install dependencies
    composer install
   
   # Generate laravel key
    php artisan key:generate
   
   # Migrate and seed database
    php artisan migrate --seed
   
   # Run server
    php artisan serve
    ```
7. API sudah bisa diakses di http://localhost:8000/

### Frontend
1. Pastikan sudah clone project
2. Buka terminal di text editor anda, lalu jalankan command berikut:
    ```bash
   # Install dependencies
    npm install
   
   # Run server
    npm run jalan
    ```
