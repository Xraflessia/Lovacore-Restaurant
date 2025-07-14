<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<p align="center">
  <a href="https://github.com/laravel/framework/actions">
    <img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/l/laravel/framework" alt="License">
  </a>
</p>

---

# MyRestaurant — Aplikasi Web Laravel

**MyRestaurant** adalah aplikasi web berbasis Laravel untuk menampilkan informasi restoran, termasuk menu, kontak, dan layanan restoran lainnya. Proyek ini dibangun dengan struktur MVC Laravel dan dukungan fitur modern seperti sistem session dan cache database.

## 🔧 Teknologi yang Digunakan

- Laravel (versi terbaru)
- PHP 8.x
- MySQL
- Blade Template + Bootstrap
- AOS (Animate on Scroll)
- Vite & Laravel Mix

## 📁 Fitur Utama

- Tampilan menu restoran yang dinamis
- Filter menu dengan Isotope.js
- Halaman kontak & footer profesional
- Dukungan sesi, cache, dan antrean berbasis database
- Tema restoran modern (fermentasi & lokal)

## 📦 Cara Instalasi

1. **Clone repositori**
   ```bash
   git clone https://github.com/username/myrestaurant.git
   cd myrestaurant

2. **Install dependency**

   ```bash
   composer install
   npm install && npm run dev
   ```

3. **Salin file `.env` dan buat APP\_KEY**

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Atur koneksi database di `.env`**

   ```env
   DB_DATABASE=myrestaurant
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. **Jalankan migrasi**

   ```bash
   php artisan migrate
   ```

6. **Jalankan server lokal**

   ```bash
   php artisan serve
   ```

## 🌐 Akses Aplikasi

Buka di browser:
[http://localhost:8000](http://localhost:8000)

## ⚙️ Contoh Konfigurasi `.env`

```env
APP_NAME=Laravel
APP_ENV=local
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=myrestaurant
DB_USERNAME=root
DB_PASSWORD=

SESSION_DRIVER=database
CACHE_STORE=database
QUEUE_CONNECTION=database

MAIL_MAILER=log
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"
```

## 📚 Dokumentasi & Belajar

* [Dokumentasi Laravel](https://laravel.com/docs)
* [Laravel Bootcamp (Bahasa Inggris)](https://bootcamp.laravel.com)
* [Laracasts (Video Tutorial)](https://laracasts.com)

## 🤝 Kontribusi

Kontribusi sangat diterima! Silakan buat *pull request* atau buka *issue* jika ingin berdiskusi lebih lanjut.

## 🔐 Keamanan

Jika Anda menemukan celah keamanan, harap laporkan ke [Taylor Otwell](mailto:taylor@laravel.com) sesuai prosedur Laravel.

## ⚖️ Lisensi

Proyek ini menggunakan lisensi terbuka [MIT License](https://opensource.org/licenses/MIT).

```

---

### ✅ Tips Tambahan
- Ganti `https://github.com/username/myrestaurant.git` dengan URL repo kamu.
- Tambahkan screenshot hasil tampilan aplikasi jika ingin menarik perhatian di GitHub.
- Jika kamu mau saya bantu buatkan versi bilingual (EN/ID) atau markdown preview, tinggal bilang saja!
```
