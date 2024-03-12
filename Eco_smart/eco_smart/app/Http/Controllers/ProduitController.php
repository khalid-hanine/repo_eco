<?php

namespace App\Http\Controllers;
use App\Models\Produit;
use App\Models\Commande;


use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function index(){
        $produitsFromDB=Produit::all();
        return view('Produits.index',['produits' => $produitsFromDB]);
    }
    public function show( Produit $produit){
        return view('Produits.show',['produit' => $produit]);


    }
    public function commande(){
        $commandeFromDB=Commande::all();
        return view('Produits.commande',['commandes'=>$commandeFromDB]);
    }










    
    public function createCommande(){
        $commandeFromDB=Commande::all();
        return view('Produits.commande',['commandes'=>$commandeFromDB]);
    }

    public function createCommande(Request $request, $produitId){
        $produit = Produit::findOrFail($produitId);

        Commande::create([
            'prix' => $produit->prix,
            'img_produit' => $produit->image,
            'nom_produit' => $produit->title,
        ]);

        return redirect()->route('produits.index');
    }


    // public function ajouterAuPanier(Request $request, $id)
    // {
    //     $produit = Produit::findOrFail($id);

    //     Commande::create([
    //         'prix' => $produit->prix,
    //         'img_produit' => $produit->image,
    //         'nom_produit' => $produit->title,
    //     ]);

    //     return redirect()->route('Produits.index');
    // }
    }

