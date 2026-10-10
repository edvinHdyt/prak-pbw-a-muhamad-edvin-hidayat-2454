<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
    {{-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="w-full px-20 py-2 h-15 bg-white shadow-md flex items-center justify-between">
        <div class="text-lg flex justify-start">
            <h1 class="text-xl font-bold">
                <a href="{{route("home")}}">LaraPress</a>
            </h1>
        </div>
        <div class="flex justify-between gap-3 items-middle">
            <div class="flex gap-2 items-middle mt-1">
                <a href={{ route('home') }}>Home</a>
                {{-- <a href={{ route('about') }}>Tentang Kami</a>
                <a href={{ route('contact') }}>Kontak</a> --}}
            </div>
            <div class="flex items-middle gap-2">
                <a href="{{route("login")}}" class="px-2 py-1 bg-white-500 shadow-sm rounded-md pointer hover:bg-blue-500 hover:text-white">Sign In</a>
                <p>|</p>
                <a href="{{route("register")}}" class="px-2 py-1 bg-blue-500 text-white rounded-md">Sign Up</a>
            </div>
        </div>
    </nav>

    <div class="px-20 mt-3">
        @yield('larapress-body')
    </div>

    <footer class="w-full px-20 py 2 h-10 flex items-center bg-white static bottom-0 inset-shadow-sm justify-center border-[0.1rem] mt-10">
        <p>Copyright By &copy; Humanis 2026</p>
    </footer>
</body>
</html>
