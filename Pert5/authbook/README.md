# Laporan Tugas Pertemuan 6 Prak Pemorgraman Berbasis Web
Disusun Oleh:
<br>
<table>
    <tbody>
        <tr>
            <td>
                Nama:
            </td>
            <td>
                Muhamad Edvin Hidayat
            </td>
        </tr>
        <tr>
           <td>
                NPM:
            </td>
            <td>
                4524210054
            </td>
        </tr>
        <tr>
            <td>
                Kelas:
            </td>
            <td>
                Prak PBW A
            </td>
        </tr>
    </tbody>
</table>

# Authbook - Aplikasi Pengelolaan Buku
<b>Authbook</b> Merupakan aplikasi berbasis web yang dikembangkan untuk mempermudah proses pengelolaan koleksi buku dan informasi penulis. Proyek ini menggunakan arsitektur Laravel 12 sebagai framework utaman dan Filament 3.x untuk membangun panel administrasi yang praktis dan mudah digunakan.

# Daftar Isi
1. <a href="https://github.com/edvinHdyt/prak-pbw-a-muhamad-edvin-hidayat-2454/tree/main/Pert5/authbook#fitur-aplikasi"> Fitur Aplikasi </a>
2. <a href="https://github.com/edvinHdyt/prak-pbw-a-muhamad-edvin-hidayat-2454/tree/main/Pert5/authbook#teknologi-yang-digunakan"> Teknologi yang digunakan </a>
3. <a href="https://github.com/edvinHdyt/prak-pbw-a-muhamad-edvin-hidayat-2454/tree/main/Pert5/authbook#instalasi-proyek"> Instalasi Proyek </a>
4. <a href="https://github.com/edvinHdyt/prak-pbw-a-muhamad-edvin-hidayat-2454/tree/main/Pert5/authbook#informasi-akun-pengguna"> Informasi Akun Pengguna </a>
5. <a href="https://github.com/edvinHdyt/prak-pbw-a-muhamad-edvin-hidayat-2454/tree/main/Pert5/authbook#hasil-output"> Hasil Output </a>
6. <a href="https://github.com/edvinHdyt/prak-pbw-a-muhamad-edvin-hidayat-2454/tree/main/Pert5/authbook#update-webiste"> Update webiste Pertemuan-7 </a>
7. <a href="https://github.com/edvinHdyt/prak-pbw-a-muhamad-edvin-hidayat-2454/tree/main/Pert5/authbook#update-versi-300"> Update webiste Pertemuan-8 </a>

# Fitur Aplikasi
1. Halaman Autentikasi (Login dan Register)
2. Panel admin
3. Pengelolaan Data buku
4. Pengelolaan Data Penulis
5. Database Seeder

# Teknologi yang Digunakan
<table>
    <thead>
        <th>Teknologi</th>
        <th>Kegunaan</th>
    </thead>
    <tbody>
        <tr>
            <td>
                PHP 8.3+
            </td>
            <td>
                Dasar bahasa pemrograman Laavel
            </td>
        </tr>
        <tr>
           <td>
                Laravel 12
            </td>
            <td>
                Framework pengembangan website
            </td>
        </tr>
        <tr>
            <td>
                Filament 3.x
            </td>
            <td>
                Framewok panel admin
            </td>
        </tr>
        <tr>
            <td>
                Mysql
            </td>
            <td>
                Basis Data
            </td>
        </tr>
         <tr>
            <td>
                Composer
            </td>
            <td>
                Manajemen dependensi PHP
            </td>
        </tr>
         <tr>
            <td>
                Git dan Github
            </td>
            <td>
                Pengelolaan pengembangan kode
            </td>
        </tr>
         <tr>
            <td>
                Laragon
            </td>
            <td>
                Lingkungan server Mysql
            </td>
        </tr>
    </tbody>
</table>

# Instalasi Proyek
1. Pengunduhan Soruce Code<br>
Pengunduhan source code dengan cara cloning melalui repositori github
```bash
git clone https://github.com/edvinHdyt/prak-pbw-a-muhamad-edvin-hidayat-2454.git
cd authbook
```
2. Instal Dependensi<br>
Penginstalan dependensi dilakukan agar Laravel dapat berjalan
```bash
composer install
```
3. Menyiapkan File Environment<br>
Copy file .env dari .env.exemple
```bash
copy .env.example .env
```
Selanjutnya, konfiguasi ulang file .env pada bagian bagian berikut:
```bash
APP_NAME=Authbook
APP_URL=http://127.0.0.1:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=authbook
DB_USERNAME={sesuaikan usernama database anda}
DB_PASSWORD=
```
Pastikan mysql pada largon/xampp telah berjalan.

4. Membuat Application Key<br>
Perintah berikut digunakan untuk membuat kunci aplikasi pada laravel
```bash
php artisan key:generate
```

5. Migrasi Database <br>
Jalankan migrasi dan seeder untuk membuat table dan memasukan data dummy pada database.
```
php atisan migrate:fresh --seed
```
<b>Perhatian</b>: Perintah migrasi ini akan menghapus keseluruhan data yang telah ada pada database.

6. Mengaktifkan Penyimpanan File-File static<br>
File file static (seperti gambar) dipelukan dalam website ini, jadi agar file-file tersebut dapat terbaca guanakan perintah berikut
```
php artisan stoage:link
```
7. Pembuatan User dengan Filament<br>
Filament memungkinkan untuk membuat pengguna yang telah siap pakai, untuk melakukannya jalankan perintah berikut
```
php artisan make:filament-user
```
Ikuti instruksi pada terminal untuk memasukan nama, email, dan kata sandi (kata sandi tidak akan terlihat jadi pastikan memasukannya dengan baik)
8. Menjalankan Server <br>
Agar aplikasi dapat berjalan pada webiste, diperlukan web sever untuk menjalankannya.
```
php artisan serve
```
Masukan alamat berikut pada browser:
- Halaman admin: http://127.0.0.1:8000/admin
- Halaman Login: http://127.0.0.1:8000/admin/login

# Informasi Akun Pengguna
Selain akun yang telah dibuat secara filament sebelumnya, terdapat akun pengguna yang telah dibuat dengan menggunakan seeder. Berikut adalah akunnya.
<table>
<thead>
    <th>Keterangan</th>
    <th>Informasi</th>
</thead>
<tbody>
    <tr>
    <td>Email</td>
    <td>admin@example.com</td>
    <tr>
    <tr>
    <td>Password</td>
    <td>password</td>
    </tr>
 </tbody>
 </table>  

# Hasil Output
1. Halaman Login <br>
![alt text](./ImageLaprak/image.png)
2. Halaman Dashboard Admin<br>
![alt text](./ImageLaprak/image-1.png)
3. Halaman Kelola Buku<br>
![alt text](./ImageLaprak/image-5.png)
4. Halaman Tambah Buku<br>
![alt text](./ImageLaprak/image-6.png)
5. Fitur Pencaian Buku <br>
![alt text](./ImageLaprak/image-7.png)
6. Fitur Filte buku <br>
![alt text](./ImageLaprak/image-8.png)

# Update Webiste
## Versi 2.0.0
1. Penambahan role
Terdapat role yang menentukan fitur apa yang dapat diakses oleh setiap pengguna, role-role tersebut antara lain:
<table>
<thead>
    <th>Role</th>
    <th>Keterangan</th>
</thead>
<tbody>
    <tr>
    <td>Admin</td>
    <td>Akses terhadap seluruh fitur</td>
    <tr>
    <tr>
    <td>Staff</td>
    <td>Dapat mengelola (create dan update) pada data-data, namun tidak bisa mendelete data</td>
    </tr>
    <tr>
    <td>User View</td>
    <td>Hanya dpat melihat data</td>
    </tr>
 </tbody>
 </table>  
Berikut beberapa akun yang telah disiapkan beserta role-rolenya
<table>
<thead>
    <th>Keterangan</th>
    <th>Informasi</th>
</thead>
<tbody>
    <tr>
    <td>Email</td>
    <td>admin@example.com</td>
    <tr>
    <tr>
    <td>Password</td>
    <td>password</td>
    </tr>
    <tr>
    <td>Email</td>
    <td>staff@example.com</td>
    <tr>
    <tr>
    <td>Password</td>
    <td>password</td>
    </tr>
    <tr>
    <td>Email</td>
    <td>user-view@example.com</td>
    <tr>
    <tr>
    <td>Password</td>
    <td>password</td>
    </tr>
 </tbody>
 </table>

2. Perubahan tampilkan dashboard<br>
Terdapat perubahan pada tampilan dashboard dimana terdapat penambahan widget akumulasi total data buku dan penulis. Selain itu ada terdapat juga penambahan grafik untuk dapat melihat data status buku.

3. Penambahan kategori dan deskripsi pada buku<br>
Terdapat penambahan tabel baru yaitu categories, tabel ini berfungsi agar setiap buku mempunyai kategorinya masing-masing. Selain itu terdapat juga penambahan kolom deskripsi pada buku untuk menjelaskan buku-buku tersebut.

## Output Versi 2.0.0
1. Perubahan tampilan dashboard
![alt text](./ImageLaprak/image-10.png)
2. Penambahan Kategori dan Deskripsi Buku
![alt text](./ImageLaprak/image-11.png)
![alt text](./ImageLaprak/image-12.png)

# Update Versi 3.0.0
## Pembuatan ERD dan Penjelasan Arsitektur Website
### ERD (Entity Relationship Diagram)
![alt text](./ImageLaprak/ERD-authbook.png)

Webiste authbook mempunyai struktur dengan 5 table, ke 4 tabel tersebut saling memupunyai relasi sebagai berikut:
<table>
<thead>
    <th>Tabel</th>
    <th>Relasi</th>
    <th>Penjelasan</th>
</thead>
<tbody>
    <tr>
    <td>Authors - Books</td>
    <td>1 to N (One to Many)</td>
    <td>Dalam relasi ini berarti 1 author dapat memiliki lebih dari 1 buku secara bersamaan</td>
    <tr>
    <tr>
    <td>Books - Books_categories</td>
    <td>N to N (Many to Many)</td>
    <td>Dalam relasi ini berarti banyak buku dapat mempunyai banyak kategori secara bersamaan</td>
    </tr>
    <tr>
    <td>Books_categories - Categories</td>
    <td>N to N (Many to Many)</td>
    <td>Dalam relasi ini berarti banyak kategori dapat mempunyai banyak buku secara bersamaan</td>
    </tr>
    <tr>
    <td>Users</td>
    <td>-</td>
    <td>Tabel ini tidak mempunyai relasi dengan tabel manapun</td>
    </tr>
 </tbody>
 </table>

### Flow Aplikasi
1. Request: Users merequest data setiap halaman dengan menggunakan HTTP URL
2. Autoritas: Jika middleware mengizinkan user untuk mengakses halaman tertentu maka middleware akan memberikan akses ke halaman tersebut, namun jika tidak maka middleware akan menolaknya.
3. Response: Response akan diberikan dari request-request data oleh users yang telah ter autorisasi.

### Perbandingan Filament dengan Pendekatan Tradisional
<table>
<thead>
    <th>Tipe</th>
    <th>Pembuatan CRUD</th>
    <th>Kelebihan</th>
    <th>Kekurangan</th>
    <th>Kapan digunakan?</th>
</thead>
<tbody>
    <tr>
    <td>Laravel Traditional</td>
    <td>Dilakukan pada Controler/service dan dihubungkan ke Model</td>
    <td>Pengembang mendapatkan kontrol sepenuhnya terhadap code dan desain dari web yang sedang dibuat</td>
    <td>Memakan waktu pengembangan lebih lama</td>
    <td>Jika mengembangkan website yang mempunyai skalabilitas sangat besar (ESS, Sistem Akademik)</td>
    <tr>
    <tr>
    <td>Filament</td>
    <td>Dilakukan sepenuhnya pada file Resource dan dihubungkan ke model</td>
    <td>Pengembang dimudahkan dengan adanya component-component desain yang telah di sediakan oleh framework</td>
    <td>Memakan waktu pembelajaran lebih lama untuk memahami kegunaan setiap masing-masing component</td>
    <td>Jika ingin mengembangkan webiste dalam waktu singkat</td>
    </tr>
 </tbody>
 </table>

### Refleksi Pembelajaran
Pada praktikum PBW ini di pelajari penggunaan dan penerapan framework Laravel, breeze, dan filament. Kesulitan dalam praktikum ini adalah banyaknya materi baru sehingga cukup banyak yang di pelajari tanpa mematangkan terlebih dahulu konsep MVC yang menjadi fundamental Laravel. Penulis berencana mengembangkan aplikasi SIM Service Elektronik dengan menggunakan arsitektur Laravel.
