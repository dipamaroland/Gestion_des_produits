<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;

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


Route::get('/',[ProduitController::class,'index'])->name('produits.index'); 

Route::get('/produits/create',[ProduitController::class,'create'])->name('produits.create'); 
Route::post('/produits/store',[ProduitController::class,'store'])->name('produits.store'); 

Route::get('/produits/{produit}/edit',[ProduitController::class,'edit'])->name('produits.edit');
Route::put('/produits/update/{id}',[ProduitController::class,'update'])->name('produits.update');


Route::delete('/produits/destroy/{id}',[ProduitController::class,'destroy'])->name('produits.destroy');




