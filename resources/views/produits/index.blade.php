@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-6">
        <h1 class="text-2xl font-bold mb-4">Liste des Produits</h1>

        <a href="{{ route('produits.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Ajouter un Produit</a>

        @if (session('success'))
            <div class="bg-green-500 text-white p-4 mt-4 rounded">
                {{ session('success') }}
            </div>
        @endif

        <div class="mt-6">
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-2">ID</th>
                        <th class="py-2">Libellé</th>
                        <th class="py-2">Description</th>
                        <th class="py-2">Prix</th>
                        <th class="py-2">Quantité</th>
                        <th class="py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produits as $produit)
                        <tr class="border-b">
                            <td class="py-2">{{ $produit->id }}</td>
                            <td class="py-2">{{ $produit->libelle }}</td>
                            <td class="py-2">{{ $produit->description }}</td>
                            <td class="py-2">{{ $produit->prix }}</td>
                            <td class="py-2">{{ $produit->quantite }}</td>
                            <td class="py-2 flex">
                                <a href="{{ route('produits.edit', $produit->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded mr-2">Éditer</a>
                                <form action="{{ route('produits.destroy', $produit->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
