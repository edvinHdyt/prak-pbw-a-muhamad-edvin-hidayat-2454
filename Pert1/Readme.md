# Laporan Tugas Pertemuan 1
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

# Sebelum dan Sesudah Perubahan
## File Kalkulator.php
### Sebelum Perubahan
<img width="1664" height="852" alt="Screenshot 2026-09-22 144302" src="https://github.com/user-attachments/assets/b64bd3c2-e1e7-4b17-9efe-ca38e895eeef" />
<img width="1792" height="761" alt="Screenshot 2026-09-22 144334" src="https://github.com/user-attachments/assets/1cc4f645-93e1-442e-ac62-ee405a1619c1" />
<img width="1779" height="187" alt="Screenshot 2026-09-22 144405" src="https://github.com/user-attachments/assets/d8162e9a-6dd5-4cd4-88ad-f89a71cd5676" />
<img width="1919" height="865" alt="Screenshot 2026-09-22 144228" src="https://github.com/user-attachments/assets/16d10ed7-a571-4cef-bf82-143c2db7f0ea" />

### Setelah Perubahan
<img width="1598" height="859" alt="image" src="https://github.com/user-attachments/assets/13699c42-fbb4-4f5f-9866-163ebcf148c0" />
<img width="1802" height="781" alt="image" src="https://github.com/user-attachments/assets/cc129989-28c1-40e7-960c-80ead76e3812" />
<img width="1604" height="681" alt="image" src="https://github.com/user-attachments/assets/32e36dfc-5265-43e3-8a25-b2e6ddab3985" />
<img width="1919" height="860" alt="image" src="https://github.com/user-attachments/assets/ff1b98e9-bf1f-492b-99c1-431c8ab006fb" />

### Penjelasan
Perubahan yang dilakukan pada file kalkulator.php hanya pada perubahan desain antarmuka saja dengan penyesuain menggunakan tailwindcss untuk memperbagus tampilan. Adapun struktur logika pada php tidak ada perbahan yang signifikan. Selain itu terdapat juga penambahan build in function dari php yaitu include untuk memanggil navbar pada file yang berbeda. 

## File Biodata.php
### Sebelum Perubahan
<img width="1824" height="869" alt="Screenshot 2026-09-22 135714" src="https://github.com/user-attachments/assets/7e949f48-5baf-43dc-a95a-d63c2a0db265" />
<img width="1803" height="361" alt="Screenshot 2026-09-22 135721" src="https://github.com/user-attachments/assets/a2a84dc3-f7ed-43b1-94b0-772b0b2b5c9c" />
<img width="1919" height="328" alt="Screenshot 2026-09-22 135916" src="https://github.com/user-attachments/assets/23204e7a-ae71-4553-a27b-c22bf713b09c" />

### Setelah Perubahan
<img width="1495" height="635" alt="image" src="https://github.com/user-attachments/assets/25774a0b-c32f-4b93-8cec-b8ebda30b308" />
<img width="1557" height="774" alt="image" src="https://github.com/user-attachments/assets/f1c6adcf-984b-4df4-88e0-9894d090a707" />
<img width="1670" height="374" alt="image" src="https://github.com/user-attachments/assets/7c7acd18-fe48-4bd7-a90c-ebb722e9a3bf" />
<img width="1917" height="869" alt="image" src="https://github.com/user-attachments/assets/5f9acfe6-e85a-4969-87d4-6624214f1ea3" />

### Penjelasan
Perubahan yang dilakukan pada file Biodata.php pada sisi php yaitu menambahkan objek mahasiswa kedalam array mhss, dan juga merubah tata cara pemanggilan yang sebelumnya memanggil objek secara 11 lewat perulangan foreach sekarang menjadi memanggil objek secara keseluruhan untuk dimuat kedalam card. Selain itu dari sisi tampilan juga diterapkan tailwindcss untuk memperbaiki tampilan menjadi lebih nyaman dilihat lagi.

# 5 kode penting bagi ke 2 file
Beberapa bagian code yang penting dalam program ini adalah:
- $_SERVER["REQUEST_METHOD"] <br>
  Code ini berfungsi untuk menangkap methode http requrest dari sisi frontend, pada codingan sendiri code ini di fungsikan sebagai validasi bahwa method request yang tepat adalah post.
 - $_POST[] <br>
 Code ini berfungsi untuk menangkap nilai dari form dengan mencocokannya pada atribute name pada tag-tag seperti input dan select.
- include() <br>
  fungsi ini berfungsi untuk memuat syntax dari file yg dipanggil.
- htmlspecialchars() <br>
  Fungssi ini berfungsi untuk merubah semua hasil dari php menjadi format html agar dapat terbaca oleh browser sebagai html.
- <form method="post"> <br>
  Atribut method pada form berfungsi untuk menentukan jenis metode http apa yang akan di pakai untuk proses komunikasi dengan backend.
- $mahasiswa = [] <br>
  code ini penting karena menyimpan objek yang nantinya akan dimuat kedalam card.
- $mhss = [$mahasiswa] <br>
  code ini penting karena berfungsi sebagai penyimpanan objek dan memungkinkan untuk nantinya mengenerate banyak card tergantung dari seberapa banyak jumlah objek yang disimpan kedalam array ini.
  
# Penambahan Navbar
<img width="1625" height="396" alt="image" src="https://github.com/user-attachments/assets/3b1241a1-5e4e-45dd-b491-c98f0ccc5542" />
Penambahan navbar dilakukan untuk melengkapi dan memudahkan perpindahan antar halaman biodata dan kalkulator. Selain itu juga navbar ini di tambahkan dengan tujuan untuk memperbagus tampilan halaman. Navbar juga dipanggil dengan function build in dari php yaitu include di file Biodata.php dan Kalkulator.php

# Error yang ditemukan
Pada saat pengerjaan terdapat beberapa error ketika pemanggilan variable $_POST dikarenakan tidak sesuai dengan attribute name dari tag html yang datanya hendak ditampung. Penggantian parameter variable $_POST menjadi solusi untuk mengatasi masalah tersebut.











