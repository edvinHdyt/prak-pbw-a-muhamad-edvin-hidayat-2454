# Laporan Tugas Pertemuan 3
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

## Penginstalan Laravel-Breazee
Penginstalan laravel breaze dilakukan dengan menginstalnya via terminal dan menjalankan perintah:
 ```bash
composer require laravel/breeze --dev
   ```
Perintah tersebut berguna untuk menginstal breeze kedalam ekosistem lokal kita
 ```bash
php artisan breeze:install
   ```
Perintah diatas berfungsi untuk menginstal breeze kedalam projek larapress
 ```bash
npm install
npm run dev
   ```
Npm install dan npm run dev di jalankan untuk menginstall tailwind dan juga menjalankan tailwind pada larapress
 ```bash
php artisan migrate
   ```
Setelah proses penginstalan selesai semua, selanjutnya dilakukan configurasi untuk database pada file <b>.env</b>, dan setelah config selesai dilakukan perintah diatas dapat dijalankan.
## Struktur Folder Larapress setelah penginstalan Breeze
<img width="645" height="583" alt="image" src="https://github.com/user-attachments/assets/7600d7be-f5d0-4128-aee0-ebcccdcd73de" />
<img width="540" height="602" alt="image" src="https://github.com/user-attachments/assets/205f5938-4057-4782-80a7-14de3b327eef" />
<img width="693" height="141" alt="image" src="https://github.com/user-attachments/assets/b7a08045-a45d-477f-a6fb-9ebb8b962c21" /> <br>
Breeze secara otomatis menambahkan Controller, view, dan juga routing untuk keperluan autentikasi (register dan login) serta menambahkan template dashboard admin. Selain itu routing untuk autentikasi juga secara otomatis ditambahkan pada folder routing.
## Penyesuaian Struktur Logika dan Juga Halaman <br>

### File Auth.php
Pada file Auth.php breeze secara otomatis membuat url-url untuk autentikasi, tetapi url-url yang ada pada file ini akan dipindahkan kedalam file web.php agar memudahkan memanajemen url didalam 1 file yang sama.<br>
<b> Sebelum </b>
<img width="1008" height="833" alt="image" src="https://github.com/user-attachments/assets/3f55792d-8e03-4c37-a0c9-ec16d024ca2e" />
<img width="1053" height="774" alt="image" src="https://github.com/user-attachments/assets/7b2cfbd5-b3f3-4b89-be86-2055fff80ffd" />

<b> Sesudah </b>
```bash
<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

// Route::middleware('guest')->group(function () {
//     Route::get('register', [RegisteredUserController::class, 'create'])
//         ->name('register');

//     Route::post('register', [RegisteredUserController::class, 'store']);

//     Route::get('login', [AuthenticatedSessionController::class, 'create'])
//         ->name('login');

//     Route::post('login', [AuthenticatedSessionController::class, 'store']);

//     Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
//         ->name('password.request');

//     Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
//         ->name('password.email');

//     Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
//         ->name('password.reset');

//     Route::post('reset-password', [NewPasswordController::class, 'store'])
//         ->name('password.store');
// });

// Route::middleware('auth')->group(function () {
//     Route::get('verify-email', EmailVerificationPromptController::class)
//         ->name('verification.notice');

//     Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
//         ->middleware(['signed', 'throttle:6,1'])
//         ->name('verification.verify');

//     Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
//         ->middleware('throttle:6,1')
//         ->name('verification.send');

//     Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
//         ->name('password.confirm');

//     Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

//     Route::put('password', [PasswordController::class, 'update'])->name('password.update');

//     Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
//         ->name('logout');
// });
```

## File Web.php

<b>Sebelum</b> <br>
<img width="954" height="886" alt="image" src="https://github.com/user-attachments/assets/05bd55f8-5a83-40a3-b38a-60c27e66abbb" />

<b>Sesudah</b> <br>
<img width="954" height="886" alt="image" src="https://github.com/user-attachments/assets/1a8bc1aa-6c85-4307-aaed-6855688e4cf7" />
<img width="1073" height="594" alt="image" src="https://github.com/user-attachments/assets/d6246abb-2ef3-48ac-9732-a71270138252" />
<img width="1081" height="725" alt="image" src="https://github.com/user-attachments/assets/975a63f0-ae5d-4aae-85da-0ae8357ead7c" />


## File about.blade.php
Halaman about dipindahkan kedalam halaman dashboard dengan memakai layout dari dashboard dan juga menambahkan menu navigasi pada dashboard admin <br>
<img width="1361" height="668" alt="image" src="https://github.com/user-attachments/assets/2d83fce8-af14-4e6a-8268-6d7da51fb2b5" />

## File contact.blade.php
Halaman contact juga dipindahkan kedalam halaman dashboard dengan memakai layout dari dashboard dan juga menambahkan menu navigasi pada dashboard admin <br>
<img width="1588" height="551" alt="image" src="https://github.com/user-attachments/assets/6917329e-8a49-473a-8967-0ae36642c385" />

## File navigation.blade.php
Penambahan link about dan contact pada dashboard admin
<img width="1080" height="315" alt="image" src="https://github.com/user-attachments/assets/4678d365-a3ba-41db-ba6f-99a7d02409d6" />
<img width="1074" height="332" alt="image" src="https://github.com/user-attachments/assets/69d4feef-80a8-4436-8e00-503863b0310f" />

## File welcome.blade.php
Halaman home (welcome) dibiarkan diluar dashboard agar menjadi halaman yang pertama kali diakses bagi pengguna yang belum login. Perubahan pada halaman ini adalah memperbagus style pada halaman.
```bash
@extends('layouts.base')

@section('larapress-body')
    <h1 class="text-xl font-bold mb-3">Selamat Datang di Blog LaraPress</h1>
    <section class="flex gap-4 flex-wrap flex-row px-2 py-2 bg-white shadow-md rounded-md">
        <div class="md:w-[65%]  w-full">
            <img src="{{asset("storage/images/conversation.jpg")}}" alt="conversation" class="rounded w-full h-60 sm:h-80 object-cover">
        </div>
        <div class="flex flex-col text-wrap md:w-[30%] w-full">
            <h2 class="text-bold text-lg text-wrap">
                Penggunaan AI Semakin Masif dalam Perkembangan Dunia Modern
            </h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae aliquam harum saepe, odio temporibus esse error illum vel qui doloremque dolorum facilis soluta autem dolor, non ad fugiat perspiciatis dolores.
                <button class="bg-blue-400 text-white rounded-sm px-2 py-2 shadow-sm cursor-pointer">
                    Baca Lebih Lanjut
                </button>
            </p>
        </div>
    </section>
    <section class="flex flex-col w-full">
        <div class="flex justify-center items-center mt-5 flex-col">
            <h2 class="text-bold text-lg">Read More Article</h2>
            <span class="w-20 h-1 bg-slate-500 rounded-md"></span>
        </div>
        <div class="flex w-full gap-3">
            <div class="flex flex-col xl:w-[75%]">
                <div class="flex items-center gap-1 h-10">
                    <div class="flex items-center gap-1 w-[85%]">
                        <span class="w-1 h-4 bg-slate-500 rounded-md"></span>
                        <h3 class="text-bold text-md">
                            Sports
                        </h3>
                    </div>
                    <a class="text-blue-500 underline text-md flex items-end justify-end w-full h-15">
                        View More
                    </a>
                </div>

                <div class="flex mt-2 flex-col sm:flex-row justify-center items-center sm:items-start sm:justify-between w-full flex-wrap gap-3">
                    {{-- card --}}
                    @for($i=0; $i < 4; $i++)
                        <div class="sm:w-60 h-30 flex sm:flex-col bg-white shadow-md rounded-lg px-2 py-2 border-[0.1rem] gap-2 sm:gap-1 w-full cursor-pointer transform transition hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none">
                            <img class="object-hover hidden sm:block" src="{{asset("storage/images/sports.jpg")}}" alt="sports" >
                            <div class="flex flex-col">
                                <p class="text-bold">
                                    Fenomena Pelari Kalcer Di Indonesia
                                </p>
                                <div class="flex gap-1 mb-2 text-slate-600 text-xs">
                                    <p class="flex items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16">
                                            <path d="M0 0h16v16H0z" fill="none" />
                                            <path fill="currentColor" d="M3 14s-1 0-1-1s1-4 6-4s6 3 6 4s-1 1-1 1zm5-6a3 3 0 1 0 0-6a3 3 0 0 0 0 6" />
                                        </svg>
                                        Edvn Hidayat
                                    </p>
                                    <p class="flex items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024">
                                            <path d="M0 0h1024v1024H0z" fill="none" />
                                            <path fill="currentColor" d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64m176.5 585.7l-28.6 39a7.99 7.99 0 0 1-11.2 1.7L483.3 569.8a7.92 7.92 0 0 1-3.3-6.5V288c0-4.4 3.6-8 8-8h48.1c4.4 0 8 3.6 8 8v247.5l142.6 103.1c3.6 2.5 4.4 7.5 1.8 11.1" />
                                        </svg>
                                        Sep 2026
                                    </p>
                                </div>
                                <span class="text-sm">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, magnam?
                                </span>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
            <div class="flex-col xl:w-[25%] hidden xl:flex">
                <div class="flex items-center gap-1 h-10">
                    <div class="flex items-center gap-1 w-[85%]">
                        <span class="w-1 h-4 bg-slate-500 rounded-md"></span>
                        <h3 class="text-bold text-md">
                            Popular Article
                        </h3>
                    </div>
                    <a class="text-blue-500 underline text-md flex items-end justify-end w-full sm:me-3 h-15">
                        View More
                    </a>
                </div>
                <div class="flex flex-col justify-center items-center sm:items-start sm:justify-between w-full gap-2">
                    {{-- card --}}
                    @for($i = 0; $i < 3; $i++)
                        <div class="h-30 flex sm:flex-col bg-white shadow-md rounded-lg px-2 py-2 border-[0.1rem] gap-2 sm:gap-1 w-full cursor-pointer transform transition hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none">
                            <div class="flex flex-col">
                                <p class="text-bold">
                                    Fenomena Pelari Kalcer Di Indonesia
                                </p>
                                <div class="flex gap-1 mb-2 text-slate-600 text-xs">
                                    <p class="flex items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16">
                                            <path d="M0 0h16v16H0z" fill="none" />
                                            <path fill="currentColor" d="M3 14s-1 0-1-1s1-4 6-4s6 3 6 4s-1 1-1 1zm5-6a3 3 0 1 0 0-6a3 3 0 0 0 0 6" />
                                        </svg>
                                        Edvn Hidayat
                                    </p>
                                    <p class="flex items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024">
                                            <path d="M0 0h1024v1024H0z" fill="none" />
                                            <path fill="currentColor" d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64m176.5 585.7l-28.6 39a7.99 7.99 0 0 1-11.2 1.7L483.3 569.8a7.92 7.92 0 0 1-3.3-6.5V288c0-4.4 3.6-8 8-8h48.1c4.4 0 8 3.6 8 8v247.5l142.6 103.1c3.6 2.5 4.4 7.5 1.8 11.1" />
                                        </svg>
                                        Sep 2026
                                    </p>
                                </div>
                                <span class="text-sm">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, magnam?
                                </span>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
        <div class="flex w-full gap-3">
            <div class="flex flex-col xl:w-[75%]">
                <div class="flex items-center gap-1 h-10">
                    <div class="flex items-center gap-1 w-[85%]">
                        <span class="w-1 h-4 bg-slate-500 rounded-md"></span>
                        <h3 class="text-bold text-md">
                            Politics
                        </h3>
                    </div>
                    <a class="text-blue-500 underline text-md flex items-end justify-end w-full sm:me-3 h-15">
                        View More
                    </a>
                </div>

                <div class="flex mt-2 flex-col sm:flex-row justify-center items-center sm:items-start sm:justify-between gap-3 w-full flex-wrap">
                    {{-- card --}}
                    @for($i=0; $i < 4; $i++)
                        <div class="sm:w-60 h-30 flex sm:flex-col bg-white shadow-md rounded-lg px-2 py-2 border-[0.1rem] gap-2 sm:gap-1 w-full cursor-pointer transform transition hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none">
                            <img class="object-hover hidden sm:block" src="{{asset("storage/images/sports.jpg")}}" alt="sports" >
                            <div class="flex flex-col">
                                <p class="text-bold">
                                    Fenomena Pelari Kalcer Di Indonesia
                                </p>
                                <div class="flex gap-1 mb-2 text-slate-600 text-xs">
                                    <p class="flex items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16">
                                            <path d="M0 0h16v16H0z" fill="none" />
                                            <path fill="currentColor" d="M3 14s-1 0-1-1s1-4 6-4s6 3 6 4s-1 1-1 1zm5-6a3 3 0 1 0 0-6a3 3 0 0 0 0 6" />
                                        </svg>
                                        Edvn Hidayat
                                    </p>
                                    <p class="flex items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024">
                                            <path d="M0 0h1024v1024H0z" fill="none" />
                                            <path fill="currentColor" d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64m176.5 585.7l-28.6 39a7.99 7.99 0 0 1-11.2 1.7L483.3 569.8a7.92 7.92 0 0 1-3.3-6.5V288c0-4.4 3.6-8 8-8h48.1c4.4 0 8 3.6 8 8v247.5l142.6 103.1c3.6 2.5 4.4 7.5 1.8 11.1" />
                                        </svg>
                                        Sep 2026
                                    </p>
                                </div>
                                <span class="text-sm">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, magnam?
                                </span>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </section>
@endsection
```

## Hasil website

### Halaman Home
<img width="1897" height="619" alt="image" src="https://github.com/user-attachments/assets/5b82af27-7404-43f9-99cf-ab6f86bf5f36" />
<img width="1893" height="542" alt="image" src="https://github.com/user-attachments/assets/cfd43fb7-bddc-4f26-bd25-a8fbf2096a67" />

### Halaman Login
<img width="1908" height="974" alt="image" src="https://github.com/user-attachments/assets/c28b4a5d-f17c-4671-a565-2fe6aaaf8bf3" />

### Halaman Register
<img width="1919" height="980" alt="image" src="https://github.com/user-attachments/assets/ccc53467-f1ff-4eab-ad44-94edc18af9eb" />

### Dashboard Admin
<img width="1919" height="866" alt="image" src="https://github.com/user-attachments/assets/10fc323d-29c7-4767-94fd-d179b4e160b1" />
<img width="1919" height="875" alt="image" src="https://github.com/user-attachments/assets/78f8b5e7-191d-4afc-843c-6de9390dccd0" />
<img width="1919" height="863" alt="image" src="https://github.com/user-attachments/assets/ee70b7a4-68e4-44e2-b1da-d422af94c9f5" />

