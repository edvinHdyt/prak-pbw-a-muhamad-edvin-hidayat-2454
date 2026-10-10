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
