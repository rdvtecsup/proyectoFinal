<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use PHPUnit\TextUI\XmlConfiguration\Group;

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
Auth::routes();

// Para tener que iniciar y de esta manera poder tener un registro de personas registradas
Route::get('/', function () {
    return redirect()->route("login") ;
});

//Hacemos uso del recurso middleware para que el usuario tenga que estar autenticado, es decir registrado y logeado, 
// para que pueda acceder a las opciones de la página web
Route::middleware(["auth"])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/contacto', [App\Http\Controllers\HomeController::class, 'contacto'])->name('contacto');

    Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('productos');
    
    Route::get('/reservas', [App\Http\Controllers\ReservaController::class, 'index'])->name('reserva');
    
});

//Con middleware y la autenteticación de admin se podrá acceder a la vista de panel que solo está disponible para el admin
Route::middleware(["auth", "admin_panel"])->group(function () {
    Route::resource("panel", AdminController::class);
    Route::resource("productos", AdminController::class)->parameters(["productos" => "user"]);
});

