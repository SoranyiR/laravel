<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
{{--<h1 class="text-3xl font-bold underline">
    Hello world!
</h1>--}}
<header class="p-5 border-b bg-white shadow flex justify-between items-center">
    <h1 class="text-3xl font-black">
        SoranyiLaravel
    </h1>
{{--Vamos a verificar si un usuario esta autenticado--}}

    @guest()
        <nav class="flex gap-2 items-center">
            <a class="font-bold uppercase text-gray-600" href="{{route('register')}}">
                Registrar Usuarios
            </a>
        </nav>
    @endguest

    @guest()
        <nav class="flex gap-2 items-center">
            <a class="font-bold uppercase text-gray-600" href="{{route('listar')}}">
                listar Usuarios
            </a>
        </nav>
    @endguest

</header>

<main class="container mx-auto mt-10">
    <h1 class="font-black text-center text-3xl mb-10">
        @yield('titulo')
    </h1>
    @yield('contenido')
    <div class=" aling-center">
        <img src="img/Laravel.jpg" alt="" class="mx-auto d-block">
    </div>
    
</main>
<footer class="mt-10 text-center p-5 text-gray-500 font-bold uppercase">
    Devstagram - Todos los derechos reservados {{ now() }}
</footer>
</body>
</html>