<!DOCTYPE html>
<html>
<head>
    <title>Liste des Produits chez M. DIPAMA</title>
</head>
<body>
    <h1>Liste des Produits</h1>
    <a href="{{ route('produits.create') }}">Ajouter un nouveau produit</a>
  
             @if (session('success'))
                 <div >
                  {{session('success')}}
                 </div>
             @endif

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Libelle</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produits as $produit)
                <tr>
                    <td>{{ $produit->id }}</td>
                    <td>{{ $produit->libelle }}</td>
                    <td>{{ $produit->description }}</td>
                    <td>{{ $produit->prix }}</td>
                    <td>{{ $produit->quantite }}</td>
                    <td>

                        <a href="{{ route('produits.edit', $produit->id) }}">Modifier</a>

                     <form action="{{ route('produits.destroy', $produit->id) }}" method="POST" style="display:inline;">
                            
                            @csrf
                            @method('DELETE')
                            <button type="submit">Supprimer</button>

                        </form>


                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
