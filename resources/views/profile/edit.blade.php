@extends('layouts.app')

@section('content')

<div class="container mx-auto px-4 py-6 flex justify-center">
    <div class="w-full max-w-lg">
    <h1 class="text-2xl font-bold mb-4">Modifier les informations d'un utilisateur</h1>

        <form action="{{ route('user.update', $user->id) }}" method="POST">
            @csrf
          

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium">Nom et Prénom</label>
                <input type="text" name="name" id="name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{ $user->name }}">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium">Votre email </label>
                <input type="text" name="email" id="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{ $user->email}}">
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Mettre à jour</button>
        </form>
    </div>
</div>
   


@endsection
