<?php

use App\Http\Controllers\controllerVeiculos;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => 'auth'],  function (){

    Route::get('/dashboard', function (){
        return view('dashboard');
    })->name('dashboard');


   Route::get('/index-veiculo', [controllerVeiculos::class, 'index']) ->name('veiculos.index');
   Route::get('/create-veiculo', [controllerVeiculos::class, 'create'])->name('veiculos.create');
   Route::post('/store-veiculo', [controllerVeiculos::class, 'store'])->name('veiculos.store');
   Route::get('/show-veiculo', [controllerVeiculos::class, 'store'])->name('veiculos.show');


} );


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
