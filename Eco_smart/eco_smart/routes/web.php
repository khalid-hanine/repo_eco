    <?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\ProduitController;
    use App\Http\Controllers\AdminController;


    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider and all of them will
    | be assigned to the "web" middleware group. Make something great!
    |
    */

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/produits', [ProduitController::class,'produits'])->name(name:'produits');
    Route::get('/produits/{produit}', [ProduitController::class,'produitDetail'])->name(name:'produitDetail');

    
    Route::get('/panier', [ProduitController::class,'panier'])->name(name:'panier');

    //___________________________________
    Route::post('/ajouterPanier', [ProduitController::class,'ajouterPanier'])->name(name:'ajouterPanier');
    //_____________________________________
    Route::get('/SuppProPanier/{produitId}',[ProduitController::class,'SuppProPanier'])->name(name:'SuppProPanier');

    //___________________________admin
    Route::get('/admin',[AdminController::class, 'index'])->name(name:'admin');  

    Route::get('/admin/create',[AdminController::class, 'create'])->name(name:'Admin.create');
    Route::post('/objet', [AdminController::class, 'store'])->name('objet.store');



   Route::delete('/objets/{objet}',[AdminController::class, 'destroy'])->name('objets.destroy');





   Route::get('/connecter',[ProduitController::class, 'connecter'])->name(name:'connecter'); 

   Route::get('/inscrire/create',[ProduitController::class, 'inscrire'])->name(name:'inscrire');
   
   Route::post('/inscrire',[ProduitController::class, 'StoreInscrire'])->name(name:'StoreInscrire'); 



   

    // Route::get('/commande/{createCommande}', [ProduitController::class,'createCommande'])->name('createCommande');
    // Route::get('/commande', [ProduitController::class,'commande'])->name('createCommande');
    


    // Route::post('/ajouter-au-panier/{id}', [ProduitController::class, 'ajouterAuPanier'])->name('produits.ajouterAuPanier');