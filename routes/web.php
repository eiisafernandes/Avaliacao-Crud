<?php

use App\Livewire\Auth\Login;
use App\Livewire\Cliente\Cadastro\Cadastro;
use App\Livewire\Cliente\Dashboard\Dashboard;
use Illuminate\Support\Facades\Route;

//CADASTRO DE CLIENTES
Route::get('cadastro', Cadastro::class);


//ROTAS DOS 3 LOGINS


//PAGINA DE LOGIN
Route::get('login', Login::class);

//PAGINA INICIAL CLIENTE
Route::get('pagina/inicial/cliente', Dashboard::class)->name('cliente.dashboard.dashboard');

Route::get('/aluno/pagina', function (){
    return redirect(route('cliente.dashboard.dashboard'));
})->middleware(['auth', 'role:cliente'])->name('cliente.dashboard');