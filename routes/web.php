<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\ProdutoController;
use App\Models\Empresa;
use App\Models\Produto;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', function () {
    $produtos = Produto::with('fotos')->where('ativo', true)->take(4)->get();
    $empresas = Empresa::with(['fotos', 'contatos'])
        ->where('ativo', true)
        ->orderByRaw("CASE WHEN tipo = 'matriz' THEN 0 ELSE 1 END")
        ->orderBy('id')
        ->get();

    return view('home', compact('produtos', 'empresas'));
})->name('home');

Route::get('/sobre', function () {
    $empresas = Empresa::with(['fotos', 'contatos'])
        ->where('ativo', true)
        ->orderByRaw("CASE WHEN tipo = 'matriz' THEN 0 ELSE 1 END")
        ->orderBy('id')
        ->get();

    return view('sobre', compact('empresas'));
})->name('sobre');

Route::get('/contato', [ContatoController::class, 'index'])->name('contato');
Route::post('/contato', [ContatoController::class, 'store'])->name('contato.store');

Route::get('/produtos', function () {
    $produtos = Produto::with('fotos')->where('ativo', true)->get();

    return view('produtos', compact('produtos'));
})->name('produtos');

Route::get('/produtos/{slug}', function ($slug) {
    $produto = Produto::with('fotos')->where('slug', $slug)->where('ativo', true)->firstOrFail();

    return view('produto-detalhes', compact('produto'));
})->name('produto.detalhes');

Route::post('/produtos/{produto}/orcamento', [ProdutoController::class, 'solicitarOrcamento'])
    ->name('produto.orcamento');

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

    Route::post('admin/empresas/{empresa}/fotos', [EmpresaController::class, 'storeFoto'])
        ->name('admin.empresas.fotos.store');

    Route::delete('admin/empresas/{empresa}/fotos/{foto}', [EmpresaController::class, 'destroyFoto'])
        ->name('admin.empresas.fotos.destroy');

    Route::post('admin/produtos/{produto}/fotos', [ProdutoController::class, 'storeFoto'])
        ->name('admin.produtos.fotos.store');

    Route::delete('admin/produtos/{produto}/fotos/{foto}', [ProdutoController::class, 'destroyFoto'])
        ->name('admin.produtos.fotos.destroy');
});
