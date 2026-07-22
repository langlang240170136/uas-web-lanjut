# [Kelola Data Barang]

[Aplikasi web manajemen data mahasiswa untuk mengelola data barang mengandung CRUD yang dibangun menggunakan Laravel untuk memenuhi tugas UAS Mata Kuliah Web Lanjut.]

---

## 👤 Informasi Mahasiswa

* **Nama**: [Langlang Soelthanul Aulia Aurelsosa]
* **NIM**: [240170136]
* **Mata Kuliah**: Web Lanjut

---

## 🔑 Akun Demo (Credentials)

Untuk pengujian dan penilaian, berikut adalah akun demo yang dapat digunakan:

### 1. Akun Admin
* **Email**: `admin@example.com`
* **Password**: `password123`
* **Akses**: Memiliki hak akses penuh (CRUD Data, Export PDF/Excel, Kelola User).

### 2. Akun User
* **Email**: `user@example.com`
* **Password**: `password123`
* **Akses**: Memiliki hak akses terbatas (Melihat data, dll).

---

## 🛠️ Cara Instalasi & Menjalankan Aplikasi

Ikuti langkah-langkah berikut untuk menjalankan aplikasi di lingkungan lokal (Localhost):

1. **Clone Repository**
   ```bash
   git clone https://github.com/langlang240170136/uas-web-lanjut.git
   cd uas-web-lanjut

**1.Install Dependency Composer & NPM**
   composer install
npm install && npm run build

**2.Salin File Environment (.env)**
cp .env.example .env

**3.Generate Application Key**
php artisan key:generate

**4.Konfigurasi Database**
Buka file .env dan sesuaikan koneksi database kamu:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database_kamu
DB_USERNAME=root
DB_PASSWORD=

**5.Jalankan Migration & Seeder**
php artisan migrate --seed

**6.Jalankan Server Lokal**
php artisan serve

Dokumentasi Fitur Aplikasi
1. Halaman Login / Autentikasi
2. Verifikasi Email / Google Login
3. Dashboard
4. Operasi CRUD
5. REST API (Postman)
6. Pemisahan Hak Akses (Admin vs User)
Admin:

User:

7. Tampilan Responsive
Desktop View:

Mobile View:

8. Hasil Export PDF / Excel