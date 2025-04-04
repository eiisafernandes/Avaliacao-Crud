<?php

use App\Livewire\Admin\Dashboard\Dashboard as DashboardDashboard;
use App\Livewire\Auth\Login;
use App\Livewire\Cliente\Cadastro\Cadastro;
use App\Livewire\Cliente\Dashboard\Dashboard;
use Illuminate\Support\Facades\Route;

//CADASTRO DE CLIENTES
Route::get('cadastro', Cadastro::class)->name('cliente.cadastro');




//PAGINA DE LOGIN
Route::get('login', Login::class);

//PAGINA INICIAL CLIENTE
Route::get('pagina/inicial/cliente', Dashboard::class)->middleware(['auth', 'role:cliente'])->name('cliente.dashboard');

Route::get('pagina/inicial/admin', DashboardDashboard::class)->middleware(['auth', 'role:admin'])->name('admin.dashboard');
