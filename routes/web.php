<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\ActionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These 
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [NavController::class,'welcome']);
Route::get('/livres', [NavController::class,'list']);
Route::get('/detailsLivre/{id}', [NavController::class,'show']);
Route::get('/ajouterLivre', [NavController::class,'ajouter']);
Route::post('/nouveauLivre', [ActionController::class,'ajouter']);

Route::post('/delete', [ActionController::class,'deleteBook']);

Route::get('/update/{id}', [NavController::class,'updateBook']);
Route::post('/updateForm', [ActionController::class,'updateBook']);



//Route::get('/contacts', function () {
    //return view('contacts');
//});


//Route::get('/hello/{name}', function ($name) {
    //return view('hello', ['name' => $name]);
//});



 
