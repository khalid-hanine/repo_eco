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
    Route::get('/', [ProduitController::class,'intro'])->name(name:'intro');
    Route::get('/acceuil', [ProduitController::class,'acceuil'])->name(name:'acceuil');
    Route::get('/secteurs/{secteur}', [ProduitController::class,'secteur'])->name(name:'secteur');
    Route::get('/produits', [ProduitController::class,'produits'])->name(name:'produits');
    Route::get('/produits/{produit}', [ProduitController::class,'produitDetail'])->name(name:'produitDetail');
    Route::get('/infos', [ProduitController::class,'infos'])->name(name:'infos');
    Route::get('/panier', [ProduitController::class,'panier'])->name(name:'panier');
    Route::put('/panier/{id}', [ProduitController::class,'updateQuantity'])->name('updateQuantity');
    Route::post('/ajouterPanier', [ProduitController::class,'ajouterPanier'])->name(name:'ajouterPanier');
    Route::get('/SuppProPanier/{produitId}',[ProduitController::class,'SuppProPanier'])->name(name:'SuppProPanier');
    Route::get('/pack',[ProduitController::class,'pack'])->name(name:'pack');
    
    //___________________________admin
    Route::get('/admin',[AdminController::class, 'admin'])->name(name:'admin');
    Route::post('/adminInfo',[AdminController::class, 'adminInfo'])->name(name:'adminInfo');  
    Route::get('/index',[AdminController::class, 'index'])->name(name:'index');
    Route::get('/admin/create',[AdminController::class, 'create'])->name(name:'Admin.create');
    Route::post('/objet', [AdminController::class, 'store'])->name('objet.store');
    Route::get('/produits/{produit}/edit', [AdminController::class, 'edit'])->name('produits.edit');
    Route::put('/produits/{produit}',[AdminController::class, 'update'])->name('produits.update');
    Route::delete('/objets/{objet}',[AdminController::class, 'destroy'])->name('objets.destroy');
    Route::get('/listeCommande',[AdminController::class, 'listeCommande'])->name('listeCommande');
    Route::get('/listeUser',[AdminController::class, 'listeUser'])->name('listeUser');
    Route::get('/profil',[AdminController::class, 'profil'])->name('profil');
    Route::get('/profil/{image}/edit', [AdminController::class, 'editImage'])->name('editImage');
    Route::put('/profil/{image}',[AdminController::class, 'updateImage'])->name('image.update');


   Route::get('/connecter',[ProduitController::class, 'connecter'])->name(name:'connecter'); 
   Route::get('/connecter/{id}',[ProduitController::class, 'connecterIDproduit'])->name(name:'connecterIDproduit'); 
   Route::post('/loginUser',[ProduitController::class, 'loginUser'])->name(name:'loginUser'); 
   Route::get('/inscrire/create',[ProduitController::class, 'inscrire'])->name(name:'inscrire');
   Route::post('/inscrire',[ProduitController::class, 'StoreInscrire'])->name(name:'StoreInscrire'); 



   

    


