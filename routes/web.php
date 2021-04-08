<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

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

// LANDING PAGE
Route::get('/', function () {
    return view('landing');
});

Route::get('master', function(){
    return view('layouts/master');
});


// RUTAS BLOG
Route::prefix('blog')->group(function () {
    Route::resource('post', PostsController::class);

    Route::get('blog', function ($id) {
        return view('index')
        ->with('id', $id);
    });

    Route::get('blog/categorias', function ($id) {
        return view('categorias');
    });
});


// LOGIN
