@extends('layouts.admin')

@section('content')
    <div class="mb-6">
        <a href="{{ route('admin.empresas.index') }}" class="text-blue-700 hover:text-blue-900 font-medium">← Voltar</a>
    </div>

    <h1 class="text-3xl font-bold text-gray-900 mb-6">Nova Empresa</h1>

    <form action="{{ route('admin.empresas.store') }}" method="POST" class="bg-white rounded-lg shadow p-6">
        @csrf

        <div class="grid md:grid-cols-2 gap-6">
            <div>
                <label for="nome" class="block text-sm font-medium text-gray-700 mb-2">Nome *</label>
                <input type="text" name="nome" id="nome" value="{{ old('nome') }}" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label for="tipo" class="block text-sm font-medium text-gray-700 mb-2">Tipo *</label>
                <select name="tipo" id="tipo" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="matriz" {{ old('tipo') === 'matriz' ? 'selected' : '' }}>Matriz</option>
                    <option value="filial" {{ old('tipo') === 'filial' ? 'selected' : '' }}>Filial</option>
                </select>
            </div>

            <div class="md:col-span-2">
                <label for="descricao" class="block text-sm font-medium text-gray-700 mb-2">Descrição</label>
                <textarea name="descricao" id="descricao" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">{{ old('descricao') }}</textarea>
            </div>

            <div>
                <label for="endereco" class="block text-sm font-medium text-gray-700 mb-2">Endereço</label>
                <input type="text" name="endereco" id="endereco" value="{{ old('endereco') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label for="telefone" class="block text-sm font-medium text-gray-700 mb-2">Telefone</label>
                <input type="text" name="telefone" id="telefone" value="{{ old('telefone') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">E-mail</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label for="horario_funcionamento" class="block text-sm font-medium text-gray-700 mb-2">Horário de Funcionamento</label>
                <input type="text" name="horario_funcionamento" id="horario_funcionamento" value="{{ old('horario_funcionamento') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Ex: Segunda a Sexta, 8h às 18h">
            </div>

            <div>
                <label class="flex items-center mt-8">
                    <input type="checkbox" name="ativo" value="1" {{ old('ativo', true) ? 'checked' : '' }} class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                    <span class="ml-2 text-gray-700">Ativo</span>
                </label>
            </div>
        </div>

        <div class="mt-6 flex justify-end gap-4">
            <a href="{{ route('admin.empresas.index') }}" class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors">
                Cancelar
            </a>
            <button type="submit" class="px-6 py-2 bg-blue-700 text-white rounded-lg hover:bg-blue-800 transition-colors font-semibold">
                Salvar
            </button>
        </div>
    </form>
@endsection








