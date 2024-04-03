<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Panier;
use App\Models\Commande;
use App\Models\User;
use App\Models\Profil;
use App\Models\Activite;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProduitController extends Controller

    {

        public function intro(){
            return view('Layouts.intro');
        }
        
        public function acceuil(){
            $cover=Profil::where('type','cover')->get();
            $slide=Profil::where('type','slide')->get();
        


            $secteurFromDB=Activite::all();

            $produitsFromDB = Produit::where('type', 'produit')->take(3)->get();
            $packFromDB = Produit::where('type', 'pack')->get();


            return view('acceuil',['produits' => $produitsFromDB,'pack' =>$packFromDB,'slide'=>$slide,'cover'=>$cover,'secteurs'=>$secteurFromDB]);
        }
        public function secteur($secteurId){
        
            $secteur = Activite::find($secteurId);
            $produits = Produit::where('type','pack')->where('typeS', $secteur->nomSecteur)->get();
            $accessoire = Produit::where('type', 'accessoire')->get();

            

            return view('Layouts.pack_Secteur',['secteur'=>$secteur ,'pack'=>$produits,'accessoires'=>$accessoire]);
        }

        
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



        
        return view('produitDetail', ['produit' => $produit,'produitsFromDB'=>$produitsFromDB]);
    }
    

    public function infos(){
        return view('infos');
    }
        public function panier(){
            $panierFromDB=Panier::all();
            $totalCommande=$panierFromDB->sum('total');
        
            return view('panier',['panier'=>$panierFromDB,'totalCommande'=>$totalCommande]);
        }
        public function updateQuantity(Request $request, $id) {
            $panierItem = Panier::find($id);
            if (!$panierItem) {
                return redirect()->back()->with('error', 'L\'élément du panier n\'a pas été trouvé.');
            }
        
        
            $oldQuantity = $panierItem->quantite;
            $oldTotal = $panierItem->total;
        
            
            $panierItem->quantite = $request->input('quantity');
        
        
            $panierItem->total = ($panierItem->quantite / $oldQuantity) * $oldTotal;
        
            
            $panierItem->save();
        
        
            return redirect()->route('panier')->with('success', 'Quantité mise à jour avec succès.');
        }
        

    
        public function ajouterPanier(Request $request){
        

            
            $produit_id=$request->produit_id;
            $quantite=$request->quantite;
            $produit_prix=$request->produit_prix;

            $totalPrix=$produit_prix * $quantite;

        
        

            Panier::create([
                'produit_id'=>$produit_id,
                'quantite'=>$quantite,
                'total'=>$totalPrix

            ]);

        
            return back()->with('success', 'Produit ajouté au panier avec succès');
            




        }

        public function SuppProPanier($produitId){
        
            $SinglProductFromDB=Panier::find($produitId);
            $SinglProductFromDB->delete();
            
            return to_route('panier');

        }

        public function connecterIDproduit($prodID){
            
            $prodIDFB=Produit::findOrFail($prodID);
            Panier::create([
                'produit_id' => $prodIDFB->id,
                'total' =>$prodIDFB->prix,
                'quantite' =>1
        

            ]);
            return to_route('connecter');
            


        
        

        }

        public function connecter(){
            
            
            return view('connecter');
        }
        public function loginUser (Request $request){
            $credentials = $request->only('name', 'password');
        

        if (Auth::attempt($credentials)) {
            $utilisateur_id =Auth::id();
        
            Panier::where('user_id', null)->update(['user_id' => $utilisateur_id]);
            $panier=Panier::all();
        
            if ($panier->isEmpty()) {
                return back()->withInput()->withErrors(['messageP' => 'Vous n\'avez pas encore sélectionné aucun élément ']);

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
                    
                    $whatsappMessage .= "\nPrix : " . $item->produit->prix .",00 DH";
                    
                }
                $whatsappMessage .= "\nTotal : " . $total .",00 DH";
                $encodedMessage = urlencode($whatsappMessage);
                $whatsappNumber = '+212661144882'; 
                $whatsappURL = "https://wa.me/{$whatsappNumber}/?text={$encodedMessage}";
        
                Panier::truncate();
                
                return redirect()->away($whatsappURL);

    }
            }
        
        return back()->withInput()->withErrors([ 'messageP' => 'Vous n\'avez pas encore sélectionné aucun élément ']);


            
        
    }   

        
        public function inscrire(){
            return view('inscrire');
        }
        public function StoreInscrire(Request $request) {
        
        
        
            $validatedData = $request->validate([
                'nom' => ['required', 'string', 'max:255'],
                'tele' => ['required'],
                'password' => ['required', 'string']
            ]);
            
            
            $user = User::create([
                'name' => $validatedData['nom'],
                'tele' => $validatedData['tele'],
                'password' => Hash::make($validatedData['password']), 
            ]);
        
            $utilisateur_id = $user->id;
    
            Panier::where('user_id', null)->update(['user_id' => $utilisateur_id]);
            $panier=Panier::all();
        
            if ($panier->isEmpty()) {
                return back()->withInput()->withErrors(['messageP' => 'Nom d\'utilisateur ou mot de passe non valide']);

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
                    
                    $whatsappMessage .= "\nPrix : " . $item->produit->prix.",00 DH";
                    
                }
        
                $whatsappMessage .= "\nTotal : " . $total.",00 DH";
                $encodedMessage = urlencode($whatsappMessage);
                $whatsappNumber = '+212661144882'; 
                $whatsappURL = "https://wa.me/{$whatsappNumber}/?text={$encodedMessage}";
        
                Panier::truncate();
                return redirect()->away($whatsappURL);
            }
        }    
        
    }