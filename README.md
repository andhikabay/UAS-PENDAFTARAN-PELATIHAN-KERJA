# 🌐 Aplikasi Web Pendaftaran Pelatihan Kerja

Aplikasi ini adalah sistem manajemen pendaftaran pelatihan kerja berbasis web menggunakan Laravel. Dirancang untuk membantu admin mengelola data peserta, program pelatihan, dan pendaftaran secara efisien dan modern.

---

## ✨ Fitur Utama

- ✅ Login & Logout Admin (Laravel Breeze)
- 📋 CRUD Data Peserta
- 📝 CRUD Program Pelatihan
- 🧾 CRUD Pendaftaran (Relasi Peserta & Pelatihan)
- 📊 Dashboard Interaktif:
  - Total Peserta, Pelatihan, dan Pendaftaran
  - Pie Chart Status Pendaftaran
  - Bar Chart Peserta per Pelatihan

---

## 🛠️ Teknologi yang Digunakan

- Laravel 10
- Tailwind CSS 3
- Vite
- Chart.js
- Heroicons
- MySQL

---

## ⚙️ Instalasi

```bash
git clone https://github.com/username/nama-repo.git
cd nama-repo

composer install
npm install && npm run dev

cp .env.example .env
php artisan key:generate

# Edit konfigurasi database di file .env

php artisan migrate
php artisan serve

---

Dibuat oleh
NIM : 231110082
Nama: Andhika Bayu Satriaji
Mata Kuliah: Praktikum Pemrograman Web
Tahun: 2025
