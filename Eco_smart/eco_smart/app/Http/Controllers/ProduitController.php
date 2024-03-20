<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;



use App\Models\Produit;
use App\Models\Panier;
use App\Models\Commande;
use App\Models\User;




use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProduitController extends Controller
{

    public function intro(){
        return view('layouts.intro');
    }
    public function acceuil(){
        $produitsFromDB = Produit::where('type', 'produit')->take(3)->get();
        $packFromDB = Produit::where('type', 'pack')->take(1)->get();


        return view('acceuil',['produits' => $produitsFromDB,'pack' =>$packFromDB]);
    }
    //_______________test
   


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
    $produitsFromDB = Produit::take(3)->get();



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
    public function loginUser (Request $request){
        $credentials = $request->only('name', 'password');
        // $password = $credentials['password'];

        // $user=User::where('password',$name)->first();
        // dd($user);
        // $utilisateur_id = $user->id;
        // dd($utilisateur_id);

    if (Auth::attempt($credentials)) {
        $utilisateur_id =Auth::id();
        //***** */
        Panier::where('user_id', null)->update(['user_id' => $utilisateur_id]);
        $panier=Panier::all();
    
        if ($panier->isEmpty()) {
            return 'pas de panier';
        } else {
            $total = 0;
    
            foreach ($panier as $item) {
                $total += $item->total;
            }
    
$detailCommande = [];

foreach ($panier as $item) {
   
    $detailProduit = $item->produit->nom . " (Prix: " . $item->produit->prix . ")";

    $detailCommande[] = $detailProduit;
}

$detailCommandeTexte = implode(", ", $detailCommande);


Commande::create([
    'total' => $total,
    'user_id' => $utilisateur_id,
    'detail' => $detailCommandeTexte, 
]);

            $whatsappMessage = 'Bonjour, je suis intéressé par les produits suivants :';
    
            foreach ($panier as $item) {
          
                $whatsappMessage .= "\nNom du produit : " . $item->produit->nom;
                $whatsappMessage .= "\nDescription : " . $item->produit->description;
                $whatsappMessage .= "\nPrix : " . $item->produit->prix;
                
            }
    
            $whatsappMessage .= "\nTotal : " . $total;

            $encodedMessage = urlencode($whatsappMessage);
            $whatsappNumber = '+212665413778'; 
            $whatsappURL = "https://wa.me/{$whatsappNumber}/?text={$encodedMessage}";
    
            Panier::truncate();
            return redirect()->away($whatsappURL);
        }
    }    
    


        
        // return $utilisateur_id;
    else {
        return 'faux';
    }
}   

    
    public function inscrire(){
        return view('inscrire');
    }
    public function StoreInscrire(Request $request) {
        // dd($request);
       
       
        $validatedData = $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string']
        ]);
        
          
        $user = User::create([
            'name' => $validatedData['nom'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']), 
        ]);
    
        $utilisateur_id = $user->id;
  
        Panier::where('user_id', null)->update(['user_id' => $utilisateur_id]);
        $panier=Panier::all();
    
        if ($panier->isEmpty()) {
            return 'pas de panier';
        } else {
            $total = 0;
    
            foreach ($panier as $item) {
                $total += $item->total;
            }
    
$detailCommande = [];

foreach ($panier as $item) {
   
    $detailProduit = $item->produit->nom . " (Prix: " . $item->produit->prix . ")";

    $detailCommande[] = $detailProduit;
}

$detailCommandeTexte = implode(", ", $detailCommande);


Commande::create([
    'total' => $total,
    'user_id' => $utilisateur_id,
    'detail' => $detailCommandeTexte, 
]);

            $whatsappMessage = 'Bonjour, je suis intéressé par les produits suivants :';
    
            foreach ($panier as $item) {
          
                $whatsappMessage .= "\nNom du produit : " . $item->produit->nom;
                $whatsappMessage .= "\nDescription : " . $item->produit->description;
                $whatsappMessage .= "\nPrix : " . $item->produit->prix;
                
            }
    
            $whatsappMessage .= "\nTotal : " . $total;

            $encodedMessage = urlencode($whatsappMessage);
            $whatsappNumber = '+212665413778'; 
            $whatsappURL = "https://wa.me/{$whatsappNumber}/?text={$encodedMessage}";
    
            Panier::truncate();
            return redirect()->away($whatsappURL);
        }
    }    
    
}