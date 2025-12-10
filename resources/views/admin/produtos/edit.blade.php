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
                <label for="foto" class="block text-sm font-medium text-gray-700 mb-2">Foto do Produto</label>
                @if($produto->foto)
                    <div class="mb-4">
                        <img src="{{ Storage::url($produto->foto) }}" alt="Foto atual" class="max-w-xs rounded-lg border border-gray-300 mb-2">
                        <p class="text-sm text-gray-600">Foto atual</p>
                    </div>
                @endif
                <input type="file" name="foto" id="foto" accept="image/jpeg,image/jpg,image/png,image/webp" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                <p class="mt-1 text-sm text-gray-500">Formatos aceitos: JPEG, JPG, PNG, WEBP. Tamanho máximo: 2MB. Deixe em branco para manter a foto atual.</p>
                <div id="foto-preview" class="mt-4 hidden">
                    <p class="text-sm text-gray-600 mb-2">Nova foto:</p>
                    <img id="foto-preview-img" src="" alt="Preview" class="max-w-xs rounded-lg border border-gray-300">
                </div>
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

    <script>
        document.getElementById('foto').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('foto-preview-img').src = e.target.result;
                    document.getElementById('foto-preview').classList.remove('hidden');
                };
                reader.readAsDataURL(file);
            } else {
                document.getElementById('foto-preview').classList.add('hidden');
            }
        });
    </script>
@endsection

