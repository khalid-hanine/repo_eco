<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Commande;
use App\Models\Panier;
use App\Models\User;





class AdminController extends Controller
{
    public function admin(){
        

        return view('Admin.loginAdmin');
    }
    public function adminInfo(Request $request){
        $credentials = $request->only('name', 'password');

        if (Auth::attempt($credentials)) {
            // Les informations d'identification sont valides, rediriger vers le tableau de bord administratif
            return redirect()->route('index');
        }
        return 'erreur';
        

        // return view('Layouts.appAdmin');
    }
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
        'image' => 'required|image|mimes:png,jpg,jpeg,webp,WEBP',
        'prix' => ['required'],
        'type' => ['required']

    ]);

    // Traiter l'image si elle est présente
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $path = 'images/produits';
        $file->move($path, $filename);

        // Créer le produit avec l'image téléchargée
        Produit::create([
            'nom' => $validatedData['nom'],
            'description' => $validatedData['description'],
            'image' => $path . '/' . $filename,
            'prix' => $validatedData['prix'],
            'type' => $validatedData['type']

        ]);
    } else {
        // Créer le produit sans image
       
    }
    // Rediriger vers la page d'administration
    return redirect()->route('index');
}


public function destroy($produitId){
   

    $SinglProduitFromDB=Produit::find($produitId);
    $SinglProduitFromDB->delete();

   
    
    return redirect()->route('index');
    

}

public function listeCommande(){
    $commande=Commande::all();
    $panier=Panier::all();
    // dd($panier);

    // dd($commande);
    return view('Admin.listeCommande',['commande'=>$commande,'panier'=>$panier]);
}
public function listeUser(){
    $users=User::all();
    return view('Admin.listeUser',['users'=>$users]);

}
}
