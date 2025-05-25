@extends('layouts.guest')

@section('content')
<form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="mb-4">
        <label for="name" class="block text-sm font-medium text-gray-700">Nom</label>
        <input id="name" type="text" name="name" required autofocus class="mt-1 block w-full border border-gray-300 rounded px-3 py-2">
    </div>

    <div class="mb-4">
        <label for="email" class="block text-sm font-medium text-gray-700">Adresse e-mail</label>
        <input id="email" type="email" name="email" required class="mt-1 block w-full border border-gray-300 rounded px-3 py-2">
    </div>

    <div class="mb-4">
        <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
        <input id="password" type="password" name="password" required class="mt-1 block w-full border border-gray-300 rounded px-3 py-2">
    </div>

    <div class="mb-6">
        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirmer le mot de passe</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required class="mt-1 block w-full border border-gray-300 rounded px-3 py-2">
    </div>

    <div class="flex items-center justify-between">
        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
            Déjà inscrit ?
        </a>
        <button type="submit" class="ml-4 px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-500">
            S'inscrire
        </button>
    </div>
</form>
@endsection
