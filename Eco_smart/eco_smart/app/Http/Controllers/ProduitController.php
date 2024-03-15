<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\Produit;
use App\Models\Panier;
use App\Models\Commande;
use App\Models\User;




use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function produits(){
        $produitsFromDB=Produit::all();
        return view('produits',['produits' => $produitsFromDB]);
    }
    public function produitDetail(Produit $produit)
{
    // @dd($produit);
    return view('produitDetail', ['produit' => $produit]);
}
   
//_________________________________________________________________________

     public function panier(){
        $panierFromDB=Panier::all();
        $totalCommande=$panierFromDB->sum('total');
        // dd($panierFromDB);
        return view('panier',['panier'=>$panierFromDB,'totalCommande'=>$totalCommande]);
    }

    //___________________________________________

    public function ajouterPanier(Request $request){
        // $productId=$request->input('productId');
        // $quantite=$request->input('quantite');

         
        $produit_id=$request->produit_id;
        $quantite=$request->quantite;
        $produit_prix=$request->produit_prix;

        $totalPrix=$produit_prix * $quantite;

        // dd($productId,$quantite);

        // $post_creator=$request->post_creator; 
    

        Panier::create([
            'produit_id'=>$produit_id,
            'quantite'=>$quantite,
            'total'=>$totalPrix

        ]);

        return redirect()->route('produits')->with('success', 'Produit ajouté au panier avec succès');


    }

    public function SuppProPanier($produitId){
        // dd($produitId);
        $SinglProductFromDB=Panier::find($produitId);
        $SinglProductFromDB->delete();

  

        
        return to_route('panier');

    }




    public function connecter(){
        
        return view('connecter');
    }
    
    public function inscrire(){
        return view('inscrire');
    }
    public function StoreInscrire(Request $request) {
        $nom = $request->nom;
        $email = $request->email;
        $password = $request->password;
        
       
        $user = User::create([
            'name' => $nom,
            'email' => $email,
            'password' => $password
        ]);
    
            $utilisateur_id = $user->id;

            $paniers = Panier::where('user_id', null)->get();
    
            // Mettre à jour le champ 'user_id' dans chaque panier
            foreach ($paniers as $panier) {
                $panier->update(['user_id' => $utilisateur_id]);
            }
    
      
   
    

}
}   