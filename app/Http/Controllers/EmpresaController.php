<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmpresaRequest;
use App\Http\Requests\UpdateEmpresaRequest;
use App\Models\Empresa;
use App\Models\EmpresaFoto;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class EmpresaController extends Controller
{
    public function index(): View
    {
        $empresas = Empresa::with(['fotos', 'contatos'])
            ->orderByRaw("CASE WHEN tipo = 'matriz' THEN 0 ELSE 1 END")
            ->orderBy('id')
            ->paginate(15);

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

    public function storeFoto(Request $request, Empresa $empresa): RedirectResponse
    {
        $validated = $request->validate([
            'fotos' => ['required', 'array'],
            'fotos.*' => ['image', 'mimes:jpg,jpeg,png,webp', 'max:4096'],
            'titulos' => ['nullable', 'array'],
            'titulos.*' => ['nullable', 'string', 'max:255'],
            'descricoes' => ['nullable', 'array'],
            'descricoes.*' => ['nullable', 'string'],
        ]);

        $ordemBase = (int) $empresa->fotos()->max('ordem');

        foreach ($validated['fotos'] as $index => $arquivo) {
            $path = $arquivo->store('empresas/' . $empresa->id, 'public');

            EmpresaFoto::create([
                'empresa_id' => $empresa->id,
                'caminho' => 'storage/' . $path,
                'titulo' => $validated['titulos'][$index] ?? null,
                'descricao' => $validated['descricoes'][$index] ?? null,
                'ordem' => $ordemBase + $index + 1,
            ]);
        }

        return redirect()->route('admin.empresas.edit', $empresa)
            ->with('success', 'Foto(s) adicionada(s) com sucesso!');
    }

    public function destroyFoto(Empresa $empresa, EmpresaFoto $foto): RedirectResponse
    {
        if ($foto->empresa_id !== $empresa->id) {
            return redirect()->route('admin.empresas.edit', $empresa)
                ->with('error', 'Foto não pertence a esta empresa.');
        }

        $foto->delete();

        return redirect()->route('admin.empresas.edit', $empresa)
            ->with('success', 'Foto removida com sucesso!');
    }
}
