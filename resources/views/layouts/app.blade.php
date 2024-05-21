<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

         <!-- Agregar Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

       {{-- Bootstrap --}}  <!-- Fonts -->
    {{--    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
   <!-- Scripts --> 
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="{{ asset('css/main_page.css') }}">

        {{--   <link rel="stylesheet" href="{{ asset('css/showProductos.css') }}"> --}}
<link rel="stylesheet" href="{{ asset('css/theme.min.css') }}">
{{-- <link rel="stylesheet" href="{{ asset('css/theme-rtl.min.css') }}"> --}}
     
        {{--   @yield('css')
        @yield('js') --}}
        @wireUiScripts
        <script src="//unpkg.com/alpinejs" defer></script>
        <!-- Styles -->
        @livewireStyles
    </head>

    <body class="font-sans antialiased">
        
        <div class="">
            {{--    @livewire('navigation-menu') --}}
        @livewire('home.navigation.navbar')

{{-- <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8"></div> --}}
            <div>
                {{ $slot }}
            </div>
            {{-- ... --}}
        </div>
        {{-- ... --}}

        @stack('modals')

        @livewireScripts
    </body>

</html>
