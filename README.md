<img width="1917" height="971" alt="Screenshot 2026-07-22 160256" src="https://github.com/user-attachments/assets/213a3cfb-885c-4776-8e40-077bfd133c34" /><img width="1917" height="963" alt="Screenshot 2026-07-21 185237" src="https://github.com/user-attachments/assets/cdcb1427-6d1b-48b4-b34e-eeea33d987c0" /># [Kelola Data Barang]

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
1. Halaman Login / Autentikasi : <img width="1917" height="967" alt="Screenshot 2026-07-22 153114" src="https://github.com/user-attachments/assets/f792ba1c-d512-457a-b955-80065b1e6ea3" />

2. Verifikasi Email / Google Login : <img width="1917" height="967" alt="Screenshot 2026-07-22 153152" src="https://github.com/user-attachments/assets/fe84e9f3-0a0e-45e3-a89f-43db93a76176" />

3. Dashboard : <img width="1917" height="963" alt="Screenshot 2026-07-21 185237" src="https://github.com/user-attachments/assets/22aa54f6-0e54-410a-9328-b3912ff28861" />

4. Operasi CRUD : <img width="1917" height="902" alt="Screenshot 2026-07-21 193943" src="https://github.com/user-attachments/assets/86793659-db05-4534-9f5c-30074d8613ad" />
<img width="1917" height="901" alt="Screenshot 2026-07-21 185912" src="https://github.com/user-attachments/assets/9880d578-f846-4e33-968a-bb676492db9c" />
<img width="1917" height="905" alt="Screenshot 2026-07-21 185423" src="https://github.com/user-attachments/assets/eda0ec5f-39ec-46ef-8b31-d3508e077b04" />
<img width="1917" height="905" alt="Screenshot 2026-07-21 185333" src="https://github.com/user-attachments/assets/dd61902d-7b3a-4e40-92c9-5d60e43ae2b1" />

5. REST API (Postman)
6. Pemisahan Hak Akses (Admin vs User)
Admin:
<img width="1917" height="971" alt="Screenshot 2026-07-22 160256" src="https://github.com/user-attachments/assets/cfaa6292-8b97-4be9-9c2e-11c0c0897dcc" />

User:
<img width="1917" height="967" alt="Screenshot 2026-07-22 160356" src="https://github.com/user-attachments/assets/fad5e8ce-e5c5-44dd-892f-82a47290f8dd" />


7. Tampilan Responsive
Desktop View:
<img width="1917" height="905" alt="Screenshot 2026-07-21 185333" src="https://github.com/user-attachments/assets/c1b5103d-ac6f-41a9-974c-b1067b6111f0" />
<img width="1917" height="963" alt="Screenshot 2026-07-21 185237" src="https://github.com/user-attachments/assets/06d31aec-a5a9-4adf-a03a-dac2c2b669d7" />


Mobile View:
<img width="720" height="1600" alt="WhatsApp Image 2026-07-22 at 16 00 41" src="https://github.com/user-attachments/assets/50892a18-a957-4f20-b102-3c745d6ecf26" />
<img width="720" height="1600" alt="WhatsApp Image 2026-07-22 at 16 00 42" src="https://github.com/user-attachments/assets/671ffa8d-77f1-4f35-98b8-3fba6d01ad27" />


8. Hasil Export PDF / Excel

   #### Preview Export PDF:
![Preview Export PDF](<img width="675" height="943" alt="Screenshot 2026-07-22 160558" src="https://github.com/user-attachments/assets/bdae73e9-a214-47da-863a-f3204f108ef6" />
)
