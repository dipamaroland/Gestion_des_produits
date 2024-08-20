@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-6 flex justify-center">
        <div class="w-full max-w-lg">
            <h1 class="text-2xl font-bold mb-4 text-center">Créer un Nouveau Produit</h1>

            <form action="{{ route('produits.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-lg">
                @csrf
                <div class="mb-4">
                    <label for="libelle" class="block text-sm font-medium">Libellé</label>
                    <input type="text" name="libelle" id="libelle" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{ old('libelle') }}">
                </div>

                <div class="mb-4">
                    <label for="description" class="block text-sm font-medium">Description</label>
                    <textarea name="description" id="description" rows="4" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{ old('description') }}</textarea>
                </div>

                <div class="mb-4">
                    <label for="prix" class="block text-sm font-medium">Prix</label>
                    <input type="text" name="prix" id="prix" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{ old('prix') }}">
                </div>

                <div class="mb-4">
                    <label for="quantite" class="block text-sm font-medium">Quantité</label>
                    <input type="text" name="quantite" id="quantite" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{ old('quantite') }}">
                </div>

                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded w-full">Créer</button>
            </form>
        </div>
    </div>
@endsection
