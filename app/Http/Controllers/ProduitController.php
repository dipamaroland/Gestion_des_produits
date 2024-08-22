<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\User;

class ProduitController extends Controller
{

        // Afficher la liste des produits
        public function index()
        {

            $produits = Produit::all();

            return view('produits.index',compact('produits'))->with('success','');

        }

        public function welcome()
     {

         $users = User::all();

         return view('welcome',compact('users'))->with('success','');

     }

        // Afficher le formulaire de création d'un nouveau produit
        public function create()
        {
            return view('produits.create');
        }

        // Stocker un nouveau produit
        public function store(Request $request)
        {
            $request->validate([
                'libelle' => 'required|string|max:255',
                'description' => 'required|string|max:750',
                'prix' => 'required|numeric|min:0',
                'quantite' => 'required|integer|min:0',
            ]);

            Produit::create($request->all());
           return redirect()->route('produits.index')->with('success', 'Produit créé avec succès.');
        }


        // Afficher le formulaire d'édition d'un produit
        public function edit($id)
        {
           
            $produit = Produit::find($id);
            return view('produits.edit', compact('produit'));
        }

        // Mettre à jour un produit
        public function update(Request $request, $id)
        {


            $request->validate([
                'libelle' => 'required|string|max:255',
                'description' => 'required|string|max:750',
                'prix' => 'required|numeric|min:0',
                'quantite' => 'required|integer|min:0',
            ]);

            $produit = Produit::find($id);
            $produit->update($request->all());

          return redirect()->route('produits.index')->with('success','Produit mis à jour avec succès.');
        }

        // Supprimer un produit

        public function destroy($id)
        {

            $produit = Produit::find($id);
            $produit->delete();
            return redirect()->route('produits.index')->with('success','Produit supprimé avec succès.');
        }


}
