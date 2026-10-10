<x-app-layout>

     <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('about') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8   ">
             <div class="flex gap-4 flex-wrap flex-row bg-white px-3 py-3">
                 <div class="md:w-[65%]  w-full">
                     <img src="{{asset("storage/images/about-us.jpg")}}" alt="about-us" class="rounded w-full h-80 sm:h-100 object-cover">
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
        </div>
    </div>


</x-app-layout>
