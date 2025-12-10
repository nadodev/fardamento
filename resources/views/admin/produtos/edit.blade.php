@extends('layouts.admin')

@section('content')
    <div class="mb-6">
        <a href="{{ route('admin.produtos.index') }}" class="text-blue-700 hover:text-blue-900 font-medium">← Voltar</a>
    </div>

    <h1 class="text-3xl font-bold text-gray-900 mb-6">Editar Produto</h1>

    <form action="{{ route('admin.produtos.update', $produto) }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-lg shadow p-6">
        @csrf
        @method('PUT')

        <div class="grid md:grid-cols-2 gap-6">
            <div>
                <label for="nome" class="block text-sm font-medium text-gray-700 mb-2">Nome *</label>
                <input type="text" name="nome" id="nome" value="{{ old('nome', $produto->nome) }}" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label for="codigo" class="block text-sm font-medium text-gray-700 mb-2">Código *</label>
                <input type="text" name="codigo" id="codigo" value="{{ old('codigo', $produto->codigo) }}" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div class="md:col-span-2">
                <label for="descricao" class="block text-sm font-medium text-gray-700 mb-2">Descrição *</label>
                <textarea name="descricao" id="descricao" rows="4" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">{{ old('descricao', $produto->descricao) }}</textarea>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Lojas</label>
                <div class="space-y-2">
                    <label class="flex items-center">
                        <input type="checkbox" name="lojas[]" value="matriz" {{ in_array('matriz', old('lojas', $produto->lojas ?? [])) ? 'checked' : '' }} class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                        <span class="ml-2 text-gray-700">Matriz</span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" name="lojas[]" value="filial" {{ in_array('filial', old('lojas', $produto->lojas ?? [])) ? 'checked' : '' }} class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                        <span class="ml-2 text-gray-700">Filial</span>
                    </label>
                </div>
            </div>

            <div>
                <label class="flex items-center mt-8">
                    <input type="checkbox" name="ativo" value="1" {{ old('ativo', $produto->ativo) ? 'checked' : '' }} class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                    <span class="ml-2 text-gray-700">Ativo</span>
                </label>
            </div>

            <div class="md:col-span-2">
                <label for="caracteristicas" class="block text-sm font-medium text-gray-700 mb-2">Características (uma por linha)</label>
                <textarea name="caracteristicas_text" id="caracteristicas" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Digite uma característica por linha">{{ old('caracteristicas_text', $produto->caracteristicas ? implode("\n", $produto->caracteristicas) : '') }}</textarea>
                <p class="mt-1 text-sm text-gray-500">Cada linha será salva como uma característica separada</p>
            </div>
        </div>

        <div class="mt-6 flex justify-end gap-4">
            <a href="{{ route('admin.produtos.index') }}" class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors">
                Cancelar
            </a>
            <button type="submit" class="px-6 py-2 bg-blue-700 text-white rounded-lg hover:bg-blue-800 transition-colors font-semibold">
                Atualizar
            </button>
        </div>
    </form>

    {{-- Galeria de Fotos --}}
    <div class="mt-10 bg-white rounded-lg shadow p-6">
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-xl font-semibold text-gray-900">Galeria de Fotos</h2>
        </div>

        {{-- Lista de fotos atuais --}}
        @if($produto->fotos->isNotEmpty())
            <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-4 mb-6">
                @foreach($produto->fotos as $foto)
                    <div class="border rounded-lg overflow-hidden bg-gray-50">
                        <div class="aspect-video bg-gray-200">
                            <img src="{{ $foto->url }}" alt="{{ $produto->nome }}" class="w-full h-full object-cover">
                        </div>
                        <div class="p-3 flex items-center justify-between">
                            <div class="text-xs text-gray-600 truncate mr-2">
                                Foto {{ $loop->iteration }}
                            </div>
                            <form action="{{ route('admin.produtos.fotos.destroy', [$produto, $foto]) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja remover esta foto?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 text-xs hover:text-red-800">
                                    Remover
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-sm text-gray-500 mb-6">Nenhuma foto cadastrada ainda para este produto.</p>
        @endif

        {{-- Upload de novas fotos --}}
        <form action="{{ route('admin.produtos.fotos.store', $produto) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <div>
                <label for="fotos" class="block text-sm font-medium text-gray-700 mb-2">Adicionar fotos</label>
                <input type="file" name="fotos[]" id="fotos" multiple accept="image/*" class="w-full text-sm text-gray-700 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                <p class="mt-2 text-xs text-gray-500">Você pode selecionar múltiplas imagens. Formatos aceitos: JPG, PNG, WEBP. Tamanho máximo: 4 MB por arquivo.</p>
            </div>

            <div class="flex justify-end">
                <button type="submit" class="px-6 py-2 bg-blue-700 text-white rounded-lg hover:bg-blue-800 transition-colors font-semibold">
                    Enviar Fotos
                </button>
            </div>
        </form>
    </div>
@endsection

