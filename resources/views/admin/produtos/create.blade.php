@extends('layouts.admin')

@section('content')
    <div class="mb-6">
        <a href="{{ route('admin.produtos.index') }}" class="text-blue-700 hover:text-blue-900 font-medium">← Voltar</a>
    </div>

    <h1 class="text-3xl font-bold text-gray-900 mb-6">Novo Produto</h1>

    <form action="{{ route('admin.produtos.store') }}" method="POST" class="bg-white rounded-lg shadow p-6">
        @csrf

        <div class="grid md:grid-cols-2 gap-6">
            <div>
                <label for="nome" class="block text-sm font-medium text-gray-700 mb-2">Nome *</label>
                <input type="text" name="nome" id="nome" value="{{ old('nome') }}" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label for="codigo" class="block text-sm font-medium text-gray-700 mb-2">Código *</label>
                <input type="text" name="codigo" id="codigo" value="{{ old('codigo') }}" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div class="md:col-span-2">
                <label for="descricao" class="block text-sm font-medium text-gray-700 mb-2">Descrição *</label>
                <textarea name="descricao" id="descricao" rows="4" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">{{ old('descricao') }}</textarea>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Lojas</label>
                <div class="space-y-2">
                    <label class="flex items-center">
                        <input type="checkbox" name="lojas[]" value="matriz" {{ in_array('matriz', old('lojas', [])) ? 'checked' : '' }} class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                        <span class="ml-2 text-gray-700">Matriz</span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" name="lojas[]" value="filial" {{ in_array('filial', old('lojas', [])) ? 'checked' : '' }} class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                        <span class="ml-2 text-gray-700">Filial</span>
                    </label>
                </div>
            </div>

            <div>
                <label class="flex items-center mt-8">
                    <input type="checkbox" name="ativo" value="1" {{ old('ativo', true) ? 'checked' : '' }} class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                    <span class="ml-2 text-gray-700">Ativo</span>
                </label>
            </div>

            <div class="md:col-span-2">
                <label for="caracteristicas" class="block text-sm font-medium text-gray-700 mb-2">Características (uma por linha)</label>
                <textarea name="caracteristicas_text" id="caracteristicas" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Digite uma característica por linha">{{ old('caracteristicas_text') }}</textarea>
                <p class="mt-1 text-sm text-gray-500">Cada linha será salva como uma característica separada</p>
            </div>
        </div>

        <div class="mt-6 flex justify-end gap-4">
            <a href="{{ route('admin.produtos.index') }}" class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors">
                Cancelar
            </a>
            <button type="submit" class="px-6 py-2 bg-blue-700 text-white rounded-lg hover:bg-blue-800 transition-colors font-semibold">
                Salvar
            </button>
        </div>
    </form>
@endsection

