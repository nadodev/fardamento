<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProdutoRequest;
use App\Http\Requests\UpdateProdutoRequest;
use App\Models\Produto;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\View\View;

class ProdutoController extends Controller
{
    public function index(): View
    {
        $produtos = Produto::latest()->paginate(15);

        return view('admin.produtos.index', compact('produtos'));
    }

    public function create(): View
    {
        return view('admin.produtos.create');
    }

    public function store(StoreProdutoRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($data['nome']);

        if ($request->has('caracteristicas_text') && !empty($request->caracteristicas_text)) {
            $data['caracteristicas'] = array_filter(
                array_map('trim', explode("\n", $request->caracteristicas_text))
            );
        }

        Produto::create($data);

        return redirect()->route('admin.produtos.index')
            ->with('success', 'Produto criado com sucesso!');
    }

    public function show(Produto $produto): View
    {
        return view('admin.produtos.show', compact('produto'));
    }

    public function edit(Produto $produto): View
    {
        return view('admin.produtos.edit', compact('produto'));
    }

    public function update(UpdateProdutoRequest $request, Produto $produto): RedirectResponse
    {
        $data = $request->validated();
        
        if ($request->has('nome') && $produto->nome !== $data['nome']) {
            $data['slug'] = Str::slug($data['nome']);
        }

        if ($request->has('caracteristicas_text') && !empty($request->caracteristicas_text)) {
            $data['caracteristicas'] = array_filter(
                array_map('trim', explode("\n", $request->caracteristicas_text))
            );
        }

        $produto->update($data);

        return redirect()->route('admin.produtos.index')
            ->with('success', 'Produto atualizado com sucesso!');
    }

    public function destroy(Produto $produto): RedirectResponse
    {
        $produto->delete();

        return redirect()->route('admin.produtos.index')
            ->with('success', 'Produto excluído com sucesso!');
    }
}
