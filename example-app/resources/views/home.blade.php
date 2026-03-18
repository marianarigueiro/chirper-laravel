@extends('layouts.app')

@section('content')

<div class="max-w-2xl mx-auto mt-10">

    <!-- Título -->
    <h2 class="text-2xl font-semibold mb-6">
        Latest Chirps
    </h2>

    <!-- Card -->
    <div class="bg-white rounded-lg p-4 shadow">

        <textarea
            class="w-full border rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-blue-400"
            rows="3"
            placeholder="O que está em sua mente?"
        ></textarea>

        <div class="flex justify-between items-center mt-3">

            <span class="text-sm text-gray-400">
                Compartilhe algo...
            </span>

            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
    Chirp
</button>

        </div>

    </div>

    <!-- Empty state -->
    <div class="text-center text-gray-400 mt-12">
        <div class="text-3xl mb-2"></div>
        <p><p>Ainda nada por aqui... escreva primeiro!</p></p>
    </div>

</div>

@endsection