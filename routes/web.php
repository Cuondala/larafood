<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetalheController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\PlanoController;

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

Route::group(['prefix' => 'admin'],function () {


    Route::controller(PlanoController::class)->group(
        function () {

            Route::get('planos/index', 'index')->name('planos.index');
            Route::post('planos/store', 'store')->name('planos.store');
            Route::put('planos/update/{id}', 'update')->name('planos.update');
            Route::delete('planos/destroy/{id}', 'destroy')->name('planos.destroy');

            Route::any('/planos/filtro', 'filtro')->name('planos.filtro');
        }
    );

    Route::controller(DetalheController::class)->group(
        function () {

            Route::get('planos/{idPlano}/detalhes/index', 'index')->name('detalhes.index');
            Route::post('/planos/{idPlano}/detalhes/store', 'store')->name('detalhes.store');
            Route::put('/planos/{idPlano}/detalhes/update/{id}', 'update')->name('detalhes.update');
            Route::delete('/planos/{idPlano}/detalhes/delete/{id}', 'destroy')->name('detalhes.destroy');
    }
    );

    Route::controller(PerfilController::class)->group(
        function () {
            Route::get('/perfil/index', 'index')->name('perfis.index');
            Route::post('/perfil/store', 'store')->name('perfis.store');
            Route::put('/perfil/{id}/update', 'update')->name('perfis.update');
            Route::delete('/perfil/{id}/destroy', 'destroy')->name('perfis.destroy');
        }
    );

});


