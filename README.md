Website ApliStore.id merupakan website dengan tema E-commerce. website ini dibangun menggunakan laravel 8 dan bootstrap 

Fitur aplikasi :

- CRUD postingan item
- Halaman Admin 
- Halaman User 
- Tampilan website user
- Hak akses admin dan user 

==========================================================================================================

Langkah - Langkah install aplikasi

- "composer install" ( Perintah ini akan menginstal library-library atau dependencies yang digunakan Laravel.)
- "copy .env.example .env" ( Perntah ini membuat file .env berdasarkan dari file .env.example )
- "php artisan key:generate" ( Perintah ini akan meng-generate key untuk dimasukkan ke APP_KEY di file .env )

Selanjutnya silahkan buat database dengan nama baru di xampp. Lalu sesuaikan nama database, username, dan password database di file .env.

- "php artisan migrate" ( Perintah ini akan meng-generate table yang dimiliki database aplikasi )

NOTE : Ikuti langkah diatas tanpa tanda petik ( " )
