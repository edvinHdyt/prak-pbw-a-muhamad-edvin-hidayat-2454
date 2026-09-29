@extends('layouts.base')
@section('larapress-body')
    <div class="flex gap-4 flex-wrap flex-row ">
        <div class="md:w-[65%]  w-full">
            <img src="{{asset("assets/image/about-us.jpg")}}" alt="about-us" class="rounded w-full h-80 sm:h-100 object-cover">
        </div>
        <div class="flex flex-col text-wrap md:w-[30%] w-full">
            <h2 class="text-bold text-xl text-wrap">
                Tentang Kami
            </h2>
            <hr>
            <p>Larapress adalah sebuah proyek blog sederhana yang dibuat untuk mempelajari dasar-dasar framework Laravel 12.
            </p>
        </div>
    </div>
@endsection
