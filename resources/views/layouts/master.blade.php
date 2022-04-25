<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.header')
    @livewireStyles
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <nav id="header" class="fixed w-full z-10 top-0">
        @include('components.nav')
    </nav>
    <div class="container w-full md:max-w-5xl mx-auto pt-20">

        <div class="w-full px-4 md:px-6 text-xl text-gray-800 leading-normal">
            @yield('content')
        </div>
    </div>
    @livewireScripts
</body>
</html>
