@extends('layouts.base')

@section('larapress-body')
    <h1 class="text-xl font-bold mb-3">Selamat Datang di Blog LaraPress</h1>
     <div class="flex gap-4 flex-wrap flex-row ">
        <div class="md:w-[65%]  w-full">
            <img src="{{asset("assets/image/conversation.jpg")}}" alt="conversation" class="rounded w-full h-60 sm:h-80 object-cover">
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
    </div>
    {{-- <p>Ini adalah halaman utama dari aplikasi blog kita.</p> --}}
@endsection
