# Restapi-lumen

Ini merupakan restapi data Mahasiswa yang dibangun menggunakan framework lumen dengan bahasa php,.
---
## Instalasi
1. clone repositori ini
2. buat database yang sesuai dengan file .env
3. lakukan migrasi database dengan tulis ' php artisan migrate ' pada command line
4. jalankan aplikasi dengan ketik "php -S localhost:8000 -t public" pada commandprompt terkait
5. silahkan cek menggunakan aplikasi postman

## Fitur restapi
- get all       = (get) http://localhost:8000/api/all
- post data     = (post) http://localhost:8000/api/store
- get per id    = (get) http://localhost:8000/api/getMhs/{id}
- edit per id   = (post) http://localhost:8000/api/update/{id}
- delete per id = (delete) http://localhost:8000/api/delete/{id}
  
## Menyambungkan dengan simple front-end
 ambil package frontend ReactJs dari [repositori](https://github.com/ArdaBilly1/simple-frontend-react). 