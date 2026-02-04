<?php 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

//Route::get("/home/{result?}", function ($result = null) {
    //return view('calculatriceView', ['result' => $result]);
//})->name("home");

Route::post("/calculer", function (Request $requete) {

    $nombre1   = $requete->nombre1;
    $nombre2   = $requete->nombre2;
    $operation = $requete->operateur;

    switch ($operation) {
        case '+':
            $resultat = $nombre1 + $nombre2;
            break;

        case '-':
            $resultat = $nombre1 - $nombre2;
            break;

        case '*':
            $resultat = $nombre1 * $nombre2;
            break;

        case '/':
            if ($nombre2 == 0) {
                $resultat = "Division par zéro impossible";
            } else {
                $resultat = $nombre1 / $nombre2;
            }
            break;

        default:
            $resultat = "Opération invalide";
    }

    return redirect()->route("home", ["result" => $resultat]);

    
});



Route::get('/', function () {
    return view('partials.home');
})->name('home');

Route::get('/about', function () {
    return view('partials.about');
})->name('about');

Route::get('/contact', function () {
    return view('partials.contact');
})->name('contact');

Route::get('/products', [ProductController::class, 'index'])
    ->name('products.index');

Route::get('/products/{id}', [ProductController::class, 'show'])
    ->name('products.show');

