<?php



use App\Http\Controllers\CommentsController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Auth;
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

// RUTAS BLOG
Route::prefix('blog')->group(function () {
    //Route::resource('posts{post}', [PostsController::class, 'show'])->name('mostrar');
    Route::get('principal', [PostsController::class, 'index'])->name('principal');
    Route::get('posts/{post}', [PostsController::class, 'show'])->name('mostrarPost');


    Route::get('categorias', [PostsController::class, 'everyCategory'])->name('todasLasCategorias');
    Route::get('categorias/{categoria}', [PostsController::class, 'showCategory'])->name('filtrarCategoria');
});

Route::resource('comments', CommentsController::class);

// LOGIN
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('register', function(){
    return view('auth/register');
}) -> name('register');

Route::get('login', function(){
    return view('auth/login');
}) -> name('login');
