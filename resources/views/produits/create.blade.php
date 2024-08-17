<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un Produit</title>
</head>
<body>
    <h1>Créer un Nouveau Produit</h1>

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
 

    <form action="{{ route('produits.store') }}" method="POST">
        @csrf
        <div>
            <label for="nom">Libelle :</label>
            <input type="text" name="libelle" id="nom" value="{{ old('libelle') }}" required>
        </div>
        <div>
            <label for="nom">Description :</label>
            <input type="text" name="description" id="nom" value="{{ old('description') }}" required>
        </div>
        <div>
            <label for="prix">Prix :</label>
            <input type="number" name="prix" id="prix" step="0.01" value="{{ old('prix') }}" required>
        </div>
        <div>
            <label for="quantite">Quantité :</label>
            <input type="number" name="quantite" id="quantite" value="{{ old('quantite') }}" required>
        </div>
        <div>
            <button type="submit">Créer</button>
            <a href="{{ route('produits.index') }}">Annuler</a>
        </div>
    </form>
</body>
</html>
