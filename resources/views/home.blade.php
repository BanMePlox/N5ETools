@extends('layouts.app')

@section('title', 'Página de Inicio')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-4xl font-bold text-center text-blue-600 mb-4">¡Bienvenido a mi Sitio con Laravel y Tailwind!</h1>
        <p class="text-lg text-gray-700 text-center mb-6">
            Esta es una prueba para ver si Tailwind CSS está funcionando correctamente.
        </p>
        <div class="flex justify-center">
            <button class="bg-blue-500 text-white px-6 py-3 rounded-full hover:bg-blue-600 transition-all">
                ¡Haz clic aquí!
            </button>
        </div>
    </div>
@endsection
