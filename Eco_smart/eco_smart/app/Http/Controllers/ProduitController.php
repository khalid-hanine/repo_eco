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
    public function acceuil(){
        $produitsFromDB = Produit::where('type', 'produit')->take(3)->get();
        $packFromDB = Produit::where('type', 'pack')->take(1)->get();


        return view('acceuil',['produits' => $produitsFromDB,'pack' =>$packFromDB]);
    }
    //_______________test
    public function acceuil2(){
        $produitsFromDB = Produit::where('type', 'produit')->take(3)->get();
        $packFromDB = Produit::where('type', 'pack')->take(1)->get();


        return view('acceuil2',['produits' => $produitsFromDB,'pack' =>$packFromDB]);
        
    }


    //____________
    public function produits(){
        $produitsFromDB = Produit::where('type', 'produit')->get();

        return view('produits',['produits' => $produitsFromDB]);
    }
    public function pack(){
        $produitsFromDB = Produit::where('type', 'pack')->get();
        return view('pack',['produits' => $produitsFromDB]);



    }
    public function produitDetail(Produit $produit)

{
    $produitsFromDB = Produit::where('type', 'produit')->take(3)->get();



    // @dd($produit);
    return view('produitDetail', ['produit' => $produit,'produitsFromDB'=>$produitsFromDB]);
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

        // return redirect()->route('produits')->with('success', 'Produit ajouté au panier avec succès');
        return back()->with('success', 'Produit ajouté au panier avec succès');



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
    
        // Créer un nouvel utilisateur
        $user = User::create([
            'name' => $nom,
            'email' => $email,
            'password' => $password
        ]);
    
        $utilisateur_id = $user->id;
       
    
        // Récupérer les paniers associés à l'utilisateur nouvellement créé
        // $paniers = Panier::where('user_id', $utilisateur_id)->get();
        Panier::where('user_id', null)->update(['user_id' => $utilisateur_id]);
        $panier=Panier::all();
    
        if ($panier->isEmpty()) {
            return 'pas de panier';
        } else {
            $total = 0;
    
            foreach ($panier as $item) {
                $total += $item->total;
            }
    

            // Initialiser une variable pour stocker les détails de la commande___________________
$detailCommande = [];

// Parcourir le panier et récupérer les détails des produits
foreach ($panier as $item) {
    // Construire une chaîne de texte avec les détails du produit
    $detailProduit = $item->produit->nom . " (Prix: " . $item->produit->prix . ")";
    
    // Ajouter le détail du produit à la liste des détails de commande
    $detailCommande[] = $detailProduit;
}

// Convertir la liste des détails en une chaîne de texte séparée par des virgules
$detailCommandeTexte = implode(", ", $detailCommande);

// Créer la commande avec les détails remplis
Commande::create([
    'total' => $total,
    'user_id' => $utilisateur_id,
    'detail' => $detailCommandeTexte, // Assigner les détails de la commande
]);

    //___________________________________
            $whatsappMessage = 'Bonjour, je suis intéressé par les produits suivants :';
    
            foreach ($panier as $item) {
                // Ajouter les détails du produit au message WhatsApp
                $whatsappMessage .= "\nNom du produit : " . $item->produit->nom;
                $whatsappMessage .= "\nDescription : " . $item->produit->description;
                $whatsappMessage .= "\nPrix : " . $item->produit->prix;
                // Vous pouvez ajouter d'autres informations du produit ici
            }
    
            // Ajouter le total à la fin du message WhatsApp
            
            $whatsappMessage .= "\nTotal : " . $total;

    
            // Encodage du message pour l'URL WhatsApp
            $encodedMessage = urlencode($whatsappMessage);
            $whatsappNumber = '+212698376673'; 
            $whatsappURL = "https://wa.me/{$whatsappNumber}/?text={$encodedMessage}";
            

            Panier::truncate();
    
            // Redirection vers l'URL WhatsApp
            return redirect()->away($whatsappURL);
        }
    }
    
    
}