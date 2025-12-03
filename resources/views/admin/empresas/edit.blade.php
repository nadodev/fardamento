@extends('layouts.admin')

@section('content')
    <div class="mb-6">
        <a href="{{ route('admin.empresas.index') }}" class="text-blue-700 hover:text-blue-900 font-medium">← Voltar</a>
    </div>

    <h1 class="text-3xl font-bold text-gray-900 mb-6">Editar Empresa</h1>

    <form action="{{ route('admin.empresas.update', $empresa) }}" method="POST" class="bg-white rounded-lg shadow p-6">
        @csrf
        @method('PUT')

        <div class="grid md:grid-cols-2 gap-6">
            <div>
                <label for="nome" class="block text-sm font-medium text-gray-700 mb-2">Nome *</label>
                <input type="text" name="nome" id="nome" value="{{ old('nome', $empresa->nome) }}" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label for="tipo" class="block text-sm font-medium text-gray-700 mb-2">Tipo *</label>
                <select name="tipo" id="tipo" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="matriz" {{ old('tipo', $empresa->tipo) === 'matriz' ? 'selected' : '' }}>Matriz</option>
                    <option value="filial" {{ old('tipo', $empresa->tipo) === 'filial' ? 'selected' : '' }}>Filial</option>
                </select>
            </div>

            <div class="md:col-span-2">
                <label for="descricao" class="block text-sm font-medium text-gray-700 mb-2">Descrição</label>
                <textarea name="descricao" id="descricao" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">{{ old('descricao', $empresa->descricao) }}</textarea>
            </div>

            <div>
                <label for="endereco" class="block text-sm font-medium text-gray-700 mb-2">Endereço</label>
                <input type="text" name="endereco" id="endereco" value="{{ old('endereco', $empresa->endereco) }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label for="telefone" class="block text-sm font-medium text-gray-700 mb-2">Telefone</label>
                <input type="text" name="telefone" id="telefone" value="{{ old('telefone', $empresa->telefone) }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">E-mail</label>
                <input type="email" name="email" id="email" value="{{ old('email', $empresa->email) }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label for="horario_funcionamento" class="block text-sm font-medium text-gray-700 mb-2">Horário de Funcionamento</label>
                <input type="text" name="horario_funcionamento" id="horario_funcionamento" value="{{ old('horario_funcionamento', $empresa->horario_funcionamento) }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Ex: Segunda a Sexta, 8h às 18h">
            </div>

            <div>
                <label class="flex items-center mt-8">
                    <input type="checkbox" name="ativo" value="1" {{ old('ativo', $empresa->ativo) ? 'checked' : '' }} class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                    <span class="ml-2 text-gray-700">Ativo</span>
                </label>
            </div>
        </div>

        <div class="mt-6 flex justify-end gap-4">
            <a href="{{ route('admin.empresas.index') }}" class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors">
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
        @if($empresa->fotos->isNotEmpty())
            <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-4 mb-6">
                @foreach($empresa->fotos as $foto)
                    <div class="border rounded-lg overflow-hidden bg-gray-50">
                        <div class="aspect-video bg-gray-200">
                            <img src="{{ asset($foto->caminho) }}" alt="{{ $foto->titulo ?? $empresa->nome }}" class="w-full h-full object-cover">
                        </div>
                        <div class="p-3 flex items-center justify-between">
                            <div class="text-xs text-gray-600 truncate mr-2">
                                {{ $foto->titulo ?? 'Sem título' }}
                            </div>
                            <form action="{{ route('admin.empresas.fotos.destroy', [$empresa, $foto]) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja remover esta foto?');">
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
            <p class="text-sm text-gray-500 mb-6">Nenhuma foto cadastrada ainda para esta empresa.</p>
        @endif

        {{-- Upload de novas fotos --}}
        <form action="{{ route('admin.empresas.fotos.store', $empresa) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
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




