<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use PHPUnit\TextUI\XmlConfiguration\Group;

Auth::routes();

// Para tener que iniciar y de esta manera poder tener un registro de personas registradas
Route::get('/', function () {
    return redirect()->route("login") ;
});

//Hacemos uso del recurso middleware para que el usuario tenga que estar autenticado, es decir registrado y logeado, 
// para que pueda acceder a las vistas de la página web
Route::middleware(["auth"])->group(function () {
    Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('contacto', [App\Http\Controllers\HomeController::class, 'contacto'])->name('contacto');
    Route::get('products', [App\Http\Controllers\ProductController::class, 'index'])->name('productos'); 
    Route::get('reservas', [App\Http\Controllers\ReservaController::class, 'index'])->name('reserva');
    Route::put('product', [App\Http\Controllers\ReservaController::class, 'reservar'])->name('reserva_producto');
});

//Con middleware y la autenteticación de admin se podrá acceder a la vista de panel que solo está disponible para el admin
Route::middleware(["auth", "admin_panel"])->group(function () {
    Route::resource("/product", AdminController::class);
    Route::controller(AdminController::class)->group(function () {
        Route::prefix('admin')->group(function () {
            Route::get('panel', 'index')->name('panel');
            Route::get('clients_list', 'show_user')->name('lista_contactos');
            Route::get('products_list', 'show_products')->name('lista_productos');
            Route::get('reserves_list', 'show_reserves')->name('lista_reservas');
            Route::post('{id}','destroy')->name('eliminar_producto');
            Route::get('subirProducto','agregar_Prod')->name('agregar_producto');
            Route::post('guardarProducto', 'store')->name('guardar_producto');
            Route::get('editarProducto','edit')->name('editar_producto');
        });  
    });  
});

Route::post('/eliminar_producto',[App\Http\Controllers\AdminController::class, 'destroy'])->name('eliminar_producto');
