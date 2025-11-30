<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmpresaRequest;
use App\Http\Requests\UpdateEmpresaRequest;
use App\Models\Empresa;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\View\View;

class EmpresaController extends Controller
{
    public function index(): View
    {
        $empresas = Empresa::with(['fotos', 'contatos'])->latest()->paginate(15);

        return view('admin.empresas.index', compact('empresas'));
    }

    public function create(): View
    {
        return view('admin.empresas.create');
    }

    public function store(StoreEmpresaRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($data['nome']);

        Empresa::create($data);

        return redirect()->route('admin.empresas.index')
            ->with('success', 'Empresa criada com sucesso!');
    }

    public function show(Empresa $empresa): View
    {
        $empresa->load(['fotos', 'contatos']);

        return view('admin.empresas.show', compact('empresa'));
    }

    public function edit(Empresa $empresa): View
    {
        $empresa->load(['fotos', 'contatos']);

        return view('admin.empresas.edit', compact('empresa'));
    }

    public function update(UpdateEmpresaRequest $request, Empresa $empresa): RedirectResponse
    {
        $data = $request->validated();
        
        if ($request->has('nome') && $empresa->nome !== $data['nome']) {
            $data['slug'] = Str::slug($data['nome']);
        }

        $empresa->update($data);

        return redirect()->route('admin.empresas.index')
            ->with('success', 'Empresa atualizada com sucesso!');
    }

    public function destroy(Empresa $empresa): RedirectResponse
    {
        $empresa->delete();

        return redirect()->route('admin.empresas.index')
            ->with('success', 'Empresa excluída com sucesso!');
    }
}
