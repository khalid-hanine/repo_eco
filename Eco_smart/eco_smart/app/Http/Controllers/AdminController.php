<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\Models\Produit;


class AdminController extends Controller
{
    public function index(){
        $productsFromDB=Produit::all();

        return view('Admin.index',['produits' => $productsFromDB]);
    }



    public function create(){ // file qui affiche la formulair à remplaire
        $produit=Produit::all();
        // dd($users);

        return view('Admin.create',['produits'=>$produit]);
    }
    public function store(Request $request)
{
    // Valider les données du formulaire
    $validatedData = $request->validate([
        'nom' => ['required', 'min:3'],
        'description' => ['required'],
        'image' => 'required|image|mimes:png,jpg,jpeg,webp',
        'prix' => ['required']
    ]);

    // Traiter l'image si elle est présente
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $path = 'public/images/produits';
        $file->move($path, $filename);

        // Créer le produit avec l'image téléchargée
        Produit::create([
            'nom' => $validatedData['nom'],
            'description' => $validatedData['description'],
            'image' => $path . '/' . $filename,
            'prix' => $validatedData['prix']
        ]);
    } else {
        // Créer le produit sans image
       
    }
    // Rediriger vers la page d'administration
    return redirect()->route('admin');
}


public function destroy($produitId){
   

    $SinglProduitFromDB=Produit::find($produitId);
    $SinglProduitFromDB->delete();

   
    
    return redirect()->route('admin');
}
}

