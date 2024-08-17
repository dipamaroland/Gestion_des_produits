<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier le Produit</title>
</head>

<body>
    <h1>Modifier le Produit</h1>

    @if ($errors->any())
        <div>
            <strong>Whoops!</strong> Il y a eu quelques problèmes avec votre entrée.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
 @if (session('success'))
                 <div >
                  {{session('success')}}
                 </div>
             @endif

    <form action="{{ route('produits.update', $produit->id) }}" method="POST">

        @csrf
        @method('PUT')
        <div>
            <label for="nom">Libelle :</label>
            <input type="text" name="libelle" id="nom" value="{{ $produit->libelle }}" required>
        </div>
        <div>
            <label for="nom">Description :</label>
            <input type="text" name="description" id="nom" value="{{ $produit->description }}" required>
        </div>
        <div>
            <label for="prix">Prix :</label>
            <input type="number" name="prix" id="prix" step="0.01" value="{{ $produit->prix }}" required>
        </div>
        <div>
            <label for="quantite">Quantité :</label>
            <input type="number" name="quantite" id="quantite" value="{{ $produit->quantite }}" required>
        </div>
        <div>
            <button type="submit">Mettre à jour</button>
            <a href="{{ route('produits.index') }}">Annuler</a>
        </div>
    </form>
</body>
</html>
