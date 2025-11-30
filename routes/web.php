<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\ProdutoController;
use App\Models\Empresa;
use App\Models\Produto;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', function () {
    $produtos = Produto::where('ativo', true)->take(4)->get();
    return view('home', compact('produtos'));
})->name('home');

Route::get('/sobre', function () {
    $empresas = Empresa::with(['fotos', 'contatos'])->where('ativo', true)->get();
    return view('sobre', compact('empresas'));
})->name('sobre');

Route::get('/contato', function () {
    $empresas = Empresa::with(['fotos', 'contatos'])->where('ativo', true)->get();
    return view('contato', compact('empresas'));
})->name('contato');

Route::get('/produtos', function () {
    $produtos = Produto::where('ativo', true)->get();
    return view('produtos', compact('produtos'));
})->name('produtos');

Route::get('/produtos/{slug}', function ($slug) {
    $produto = Produto::where('slug', $slug)->where('ativo', true)->firstOrFail();
    return view('produto-detalhes', compact('produto'));
})->name('produto.detalhes');

// Authentication Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Protected Routes
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('admin/produtos', ProdutoController::class)->names([
        'index' => 'admin.produtos.index',
        'create' => 'admin.produtos.create',
        'store' => 'admin.produtos.store',
        'show' => 'admin.produtos.show',
        'edit' => 'admin.produtos.edit',
        'update' => 'admin.produtos.update',
        'destroy' => 'admin.produtos.destroy',
    ]);
    
    Route::resource('admin/empresas', EmpresaController::class)->names([
        'index' => 'admin.empresas.index',
        'create' => 'admin.empresas.create',
        'store' => 'admin.empresas.store',
        'show' => 'admin.empresas.show',
        'edit' => 'admin.empresas.edit',
        'update' => 'admin.empresas.update',
        'destroy' => 'admin.empresas.destroy',
    ]);
});
