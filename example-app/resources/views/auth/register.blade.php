@extends('layouts.app')

@section('content')

<div class="min-h-[80vh] flex items-center justify-center">

    <div class="w-full max-w-md bg-white p-6 rounded-lg shadow-sm border">

        <h2 class="text-2xl font-semibold text-center mb-6">
            Cadastro
        </h2>

        <form class="space-y-4">

            <input type="text" placeholder="Nome"
                class="w-full border rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-blue-400">

            <input type="email" placeholder="Email"
                class="w-full border rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-blue-400">

            <input type="password" placeholder="Senha"
                class="w-full border rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-blue-400">

            <button class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 transition">
                Cadastrar
            </button>

        </form>

    </div>

</div>

@endsection