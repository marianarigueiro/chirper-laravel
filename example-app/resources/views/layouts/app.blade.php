<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Chirper</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

<!-- NAVBAR -->
<div class="flex justify-between items-center px-6 py-4 bg-white">

    <!-- Logo -->
    <a href="{{ url('/') }}" class="font-semibold text-lg hover:text-blue-500 transition">
    Chirper
</a>

    <!-- Botões -->
    <div class="flex items-center gap-3">
        <a href="/login" class="text-sm text-gray-700 hover:underline">
            Sign In
        </a>

        <a href="/register" class="bg-blue-500 text-white px-3 py-1 rounded text-sm hover:bg-blue-600">
            Sign Up
        </a>
    </div>

</div>

<!-- CONTEÚDO DAS TELAS -->
<div class="p-6">
    @yield('content')
</div>

</body>
</html>