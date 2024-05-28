<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title href="<?= url('/') ?>">MyStagram - @yield('titulo')</title>

    <!-- Se toma el archivo css con las configuraciones de tailwind -->
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    <header class="p-5 border-b bg-white shadow">
        <div class="container mx-auto flex justify-between items-center">

            <h1 class="text-3xl font-black">
                <a href="<?= url('/') ?>">MyStagram</a>
            </h1>

            <nav class="flex gap-2 items-center">
                <a class="font-bold uppercase text-gray-600 text-sm" href="<?= url('/') ?>">Login</a>
                <a class="font-bold uppercase text-gray-600 text-sm" href="<?= url('/crear-cuenta') ?>">Crea una cuenta</a>
            </nav>
        </div>
    </header>

    <main class="container mx-auto mt-10">
        <h2 class="font-black text-center text-3xl mb-10">
            @yield('titulo')
        </h2>
        @yield('contenido')
    </main>

    <footer class="mt-10 text-center p-5 text text-gray-500 font-bold uppercase">
        MyStagram - Todos los derechos reservados {{ now()->year }}
    </footer>
</body>

</html>
