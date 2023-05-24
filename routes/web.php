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




