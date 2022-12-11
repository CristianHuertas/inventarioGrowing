<?php

use App\Http\Controllers\ProfileController;
use App\Models\Producto;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    $controller_path= 'App\Http\Controllers';
    //productos

    Route::get('/productos', $controller_path.'\ProductoController@index')->name('productos-index');
    Route::get('/productos/create', $controller_path.'\ProductoController@create')->name('productos-create');
    Route::post('/productos', $controller_path.'\ProductoController@store')->name('productos-store');
    Route::get('/productos/{id}', $controller_path.'\ProductoController@show')->name('productos-show');
    Route::get('/productos/edit/{id}', $controller_path.'\ProductoController@edit')->name('productos-edit');
    Route::post('/productos/update', $controller_path.'\ProductoController@update')->name('productos-update');
    Route::delete('/productos/{id}', $controller_path.'\ProductoController@destroy')->name('productos-destroy');
    




});

require __DIR__.'/auth.php';
