<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\TabController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CategoryController;

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


//Route::get('/pages', [TabController::class,'tabs'])->name('tabs.index');

Route::get('/page/{slug}', [PageController::class,'page'])->name('pages.show');

Route::get('/pages/maladies', [PageController::class,'maladies'])->name('pages.maladies');
Route::get('/pages/maladies/{slug}', [PageController::class,'maladie'])->name('pages.get.maladie');

Route::get('/pages/sant-animale/{slug}', [PageController::class,'santeAnimale'])->name('pages.sant.animale');
Route::get('/pages/sant-animale/show/{slug}', [PageController::class,'showSanteAnimale'])->name('show.sant.animale');

Route::get('/pages/modalite-espece/{slug}', [PageController::class,'modaliteEspece'])->name('pages.modalite.espece');
Route::get('/pages/modalite-espece/show/{slug}', [PageController::class,'showModaliteEspece'])->name('show.modalite.espece');


Route::get('/pages/examen-rapproche/{slug}', [PageController::class,'examenRapproche'])->name('pages.examen.rapproche');
Route::get('/pages/examen-rapproche/show/{slug}', [PageController::class,'showExamenRapproche'])->name('show.examen.rapproche');

Route::get('/pages/partie-thoracique/{slug}', [PageController::class,'partieThoracique'])->name('pages.partie.thoracique');
Route::get('/pages/partie-thoracique/show/{slug}', [PageController::class,'showPartieThoracique'])->name('show.partie.thoracique');

Route::get('/pages/partie-abdominale/{slug}', [PageController::class,'partieAbdominale'])->name('pages.partie.abdominale');
Route::get('/pages/partie-abdominale/show/{slug}', [PageController::class,'showPartieAbdominale'])->name('show.partie.abdominale');

Route::get('/pages/configuration-anatomique/{slug}', [PageController::class,'configurationAnatomique'])->name('pages.configuration.anatomique');
Route::get('/pages/configuration-anatomique/show/{slug}', [PageController::class,'showConfigurationAnatomique'])->name('show.configuration.anatomique');

Route::get('/pages/fressure/{slug}', [PageController::class,'fressure'])->name('pages.fressure');
Route::get('/pages/fressure/show/{slug}', [PageController::class,'showFressure'])->name('show.fressure');

Route::get('/pages/estimation-la-age/{slug}', [PageController::class,'estimationAge'])->name('pages.estimation.age');
Route::get('/pages/estimation-la-age/show/{slug}', [PageController::class,'showEstimationAge'])->name('show.estimation.age');

Route::get('/pages/estimation-du-sexe/{slug}', [PageController::class,'estimationSexe'])->name('pages.estimation.sexe');
Route::get('/pages/estimation-du-sexe/show/{slug}', [PageController::class,'showEstimationSexe'])->name('show.estimation.sexe');

Route::get('/pages/arateristiques-techniques-lestampillage/{slug}', [PageController::class,'arateristiquesTechniquesLestampillage'])->name('pages.arateristiques.techniques.lestampillage');
Route::get('/pages/arateristiques-techniques-lestampillage/show/{slug}', [PageController::class,'showarateristiquesTechniquesLestampillage'])->name('show.arateristiques.techniques.lestampillage');

Route::get('/pages/classification-carcasses/{slug}', [PageController::class,'classificationCarcasses'])->name('pages.classification.carcasses');
Route::get('/pages/classification-carcasses/show/{slug}', [PageController::class,'showclassificationCarcasses'])->name('show.classification.carcasses');

Route::get('/pages/viandes-gelatineuses/{slug}', [PageController::class,'viandesGelatineuses'])->name('pages.viandes.gelatineuses');
Route::get('/pages/viandes-gelatineuses/show/{slug}', [PageController::class,'showcviandesGelatineuses'])->name('show.viandes.gelatineuses');

Route::get('/pages/viandes-maigres/{slug}', [PageController::class,'viandesMaigres'])->name('pages.viandes.maigres');
Route::get('/pages/viandes-maigres/show/{slug}', [PageController::class,'showviandesMaigres'])->name('show.viandes.maigres');

Route::get('/pages/viandes-atteints-mrlc/{slug}', [PageController::class,'viandesAtteintsMrlc'])->name('pages.viandes.atteints.mrlc');
Route::get('/pages/viandes-atteints-mrlc/show/{slug}', [PageController::class,'showviandesAtteintsMrlc'])->name('show.viandes.atteints.mrlc');



Route::get('/pages/sant-animale/{slug}', [PageController::class,'santeAnimale'])->name('pages.sant.animale');

Route::group(['prefix' => 'dashboard'], function () {

    Route::get('/', [AdminController::class,'index'])->name('backend.index');

    Route::group(['prefix' => 'tabs'], function () {
        Route::get('/add', [TabController::class,'add'])->name('tabs.add');
        Route::post('/store', [TabController::class,'store'])->name('tabs.store');

        Route::post('/uploadImage', [TabController::class,'uploadimage'])->name('ckfinder.upload');
    });

    Route::group(['prefix' => 'pages'], function () {
        Route::get('/add', [PageController::class,'add'])->name('pages.add');
        Route::post('/store', [PageController::class,'store'])->name('pages.store');

        Route::get('/edit/{slug}', [PageController::class,'edit'])->name('pages.edit');

        Route::get('/list', [PageController::class,'indexDash'])->name('list.pages');

        Route::post('/update', [PageController::class,'update'])->name('pages.update');

    });

    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', [CategoryController::class,'index'])->name('categories.add');
        Route::post('/store', [CategoryController::class,'store'])->name('category.store');
    });

});




