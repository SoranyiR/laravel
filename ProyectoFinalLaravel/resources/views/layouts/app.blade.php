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

</header>

<main class="container mx-auto mt-10">
    <h1 class="font-black text-center text-3xl mb-10">
        @yield('titulo')
    </h1>
    @yield('contenido')
</main>
<footer class="mt-10 text-center p-5 text-gray-500 font-bold uppercase">
    Devstagram - Todos los derechos reservados {{ now() }}
</footer>
</body>
</html>
