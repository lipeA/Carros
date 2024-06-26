<?php

use App\Http\Controllers\controllerDashboard;
use App\Http\Controllers\controllerProprietario;
use App\Http\Controllers\controllerServicos;
use App\Http\Controllers\controllerVeiculos;

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => 'auth'],  function () {

    Route::get('/dashboard', [controllerDashboard::class, 'index'])->name('dashboard');

    // rotas dos veiculos
    Route::get('/index-veiculo', [controllerVeiculos::class, 'index'])->name('veiculos.index');
    Route::get('/create-veiculo', [controllerVeiculos::class, 'create'])->name('veiculos.create');
    Route::post('/store-veiculo', [controllerVeiculos::class, 'store'])->name('veiculos.store');
    Route::get('/show-veiculo/{id}', [controllerVeiculos::class, 'show'])->name('veiculos.show');
    Route::delete('/destroy-veiculo/{id}', [controllerVeiculos::class, 'destroy'])->name('veiculos.derstroy');
    Route::get('/editar-veiculo/{id}', [controllerVeiculos::class, 'edit'])->name('veiculos.editar');
    Route::put('/atualizar-veiculo/{id}', [controllerVeiculos::class, 'atualizar'])->name('veiculo.atualizar');


    //rotas dos proprietarios
    Route::get('/index-proprietario', [controllerProprietario::class, 'index'])->name('donos.index');
    Route::get('/create-proprietario', [controllerProprietario::class, 'create'])->name('donos.create');
    Route::post('store-proprietario', [controllerProprietario::class, 'store'])->name('donos.store');
    Route::get('/show-proprietario/{id}', [controllerProprietario::class, 'show'])->name('donos.show');
    Route::delete('/destroy-proprietario/{id}', [controllerProprietario::class, 'destroy'])->name('donos.destroy');
    Route::get('/editar-proprietario/{id}', [controllerProprietario::class, 'edit'])->name('donos.editar');
    Route::put('/atualizar-proprietario/{id}', [controllerProprietario::class, 'atualizar'])->name('donos.atualizar');


    //rotas dos serviços
    Route::get('/servicos', [controllerServicos::class, 'index'])->name('servicos.index');
    Route::get('/servicos/create', [controllerServicos::class, 'create'])->name('servicos.create');
    Route::post('/servicos', [controllerServicos::class, 'store'])->name('servicos.store');
    Route::get('/servicos/{id}', [controllerServicos::class, 'show'])->name('servicos.show');
    Route::get('/servicos/{id}/edit', [controllerServicos::class, 'edit'])->name('servicos.edit');
    Route::put('/servicos/{id}', [controllerServicos::class, 'update'])->name('servicos.update');
    Route::delete('/servicos/{id}', [controllerServicos::class, 'destroy'])->name('servicos.destroy');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
