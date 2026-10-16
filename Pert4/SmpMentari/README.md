# 📘 Laporan Praktikum Pertemuan Ke - 5

🧑‍🎓 Muhamad Edvin Hidayat - 4524210054

# 🏫 Website SMP Mentari Ceria

Aplikasi website sekolah berbasis Laravel yang menampilkan informasi kegiatan sekolah dan fitur buku tamu digital untuk SMP Mentari Ceria.

## Instalasi

### 1. Clone Repository

```bash
git clone https://github.com/adiwp/pbw.git](https://github.com/edvinHdyt/prak-pbw-a-muhamad-edvin-hidayat-2454.git
cd pert4/SmpMentari
```

### 2. Install Dependencies

```bash
# Install PHP dependencies
composer install

# Install Node dependencies
npm install
```

### 3. Setup Environment

```bash
# Copy file .env
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 4. Setup Database

```bash
# Jalankan migrasi
php artisan migrate
```

### 5. Build Assets

```bash
# Development
npm run dev

# Production
npm run build
```

### 6. Jalankan Aplikasi

```bash
# Menggunakan built-in server
php artisan serve

# Atau menggunakan composer script (recommended)
composer dev
Aplikasi akan berjalan di: `http://localhost:8000`


# Atau Menggunakan Apache - via Laragon
Aplikasi akan berjalan di: `http://localhost/prak-pbw-a-muhamad-edvin-hidayat/pert4/SmpMentari/Public`
```



## 📋 Daftar Isi

- [Tentang Aplikasi](#-tentang-aplikasi)
- [Fitur Utama](#-fitur-utama)
- [Tech Stack](#-tech-stack)
- [Persyaratan Sistem](#-persyaratan-sistem)
- [Instalasi](#-instalasi)
- [Penggunaan](#-penggunaan)
- [Struktur Database](#-struktur-database)
- [Struktur Project](#-struktur-project)
- [Pengembangan](#-pengembangan)
- [Testing](#-testing)
- [Lisensi](#-lisensi)

## 🎯 Tentang Aplikasi

Website SMP Mentari Ceria adalah aplikasi web sederhana yang dibangun dengan Laravel 12 untuk menampilkan informasi dan kegiatan sekolah. Aplikasi ini dilengkapi dengan fitur buku tamu digital yang memungkinkan pengunjung meninggalkan pesan dan kesan mereka.

### Fitur Halaman:

1. **Halaman Home** - Menampilkan kegiatan-kegiatan terbaru sekolah
2. **Buku Tamu** - Formulir interaktif untuk pengunjung meninggalkan pesan

## ✨ Fitur Utama

- ✅ **Tampilan Kegiatan Sekolah** - Showcase kegiatan terbaru dengan card design
- ✅ **Buku Tamu Digital** - Pengunjung dapat meninggalkan pesan
- ✅ **Form Validasi** - Validasi input untuk nama, email, dan pesan
- ✅ **Real-time Feedback** - Notifikasi sukses/error setelah submit
- ✅ **Responsive Design** - Tampilan optimal di semua device
- ✅ **Timestamp Relatif** - Menampilkan waktu pesan (e.g., "2 jam yang lalu")
- ✅ **Modern UI/UX** - Desain clean dengan Tailwind CSS

## 🛠️ Tech Stack

### Backend
- **Laravel** 12.x - PHP Framework
- **PHP** ^8.2 - Programming Language
- **SQLite** - Database (Development)
- **Eloquent ORM** - Database Management

### Frontend
- **Blade Templates** - Template Engine
- **Tailwind CSS** 4.0 - CSS Framework
- **Vite** 7.0 - Asset Bundler & HMR

### Development Tools
- **Laravel Sail** - Docker Development Environment
- **PHPUnit** - Testing Framework
- **Laravel Pint** - Code Style Fixer
- **Concurrently** - Multi-command Runner

## 📸 Hasil Screenshot Tampilan Website SMP Mentari

### Halaman Home
<img width="1919" height="969" alt="image" src="https://github.com/user-attachments/assets/0771c2ff-07b5-4b2e-9ecd-4f2448e9ab6a" />


### Halaman Buku Tamu
<img width="1919" height="981" alt="image" src="https://github.com/user-attachments/assets/fc68d92c-bb39-498d-857b-a0317d1f7b8c" />


### Halaman Register
<img width="1919" height="981" alt="image" src="https://github.com/user-attachments/assets/5951eea1-2915-4078-9760-33bfbce46a34" />


### Halaman Login
<img width="1919" height="981" alt="image" src="https://github.com/user-attachments/assets/e5722b6b-dde7-4747-926d-8eb01e2310c4" />

### Halaman Dashboard

Dashboard di akses ketika sudah login dan bisa mengatur atau pusat kendali dari website SMP Mentari

<img width="1915" height="974" alt="image" src="https://github.com/user-attachments/assets/a08df505-893a-431b-82e7-258920cda2dc" />

<img width="1917" height="974" alt="image" src="https://github.com/user-attachments/assets/08058d44-0034-48db-b6b8-647932d7aa6d" />


Kendali atau mengelola kegiatan SMP Mentari
<img width="1919" height="963" alt="image" src="https://github.com/user-attachments/assets/d8d18539-43f9-4b3a-87c9-4c0e4d228576" />


Kelola Buku Tamu
<img width="1909" height="953" alt="image" src="https://github.com/user-attachments/assets/cc3a7ec5-9b85-4657-8180-86d2e5c011ae" />


Konfigurasi tampilan Home Kegiatan per page dengan default nya 6 (Bisa diubah sesuai keinginan)
<img width="1919" height="982" alt="image" src="https://github.com/user-attachments/assets/449311ad-419b-4027-9029-59a6a01612ea" />


<p align="center">
Made with ❤️ for SMP Mentari Ceria
</p>
