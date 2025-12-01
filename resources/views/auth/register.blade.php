@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-gradient-to-br from-blue-950 via-blue-900 to-blue-800 flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div>
                <div class="flex justify-center">
                    <img src="{{ asset('imagem/logo.png') }}" alt="Fábrica de Fardamento" class="h-20 w-auto">
                </div>
                <h2 class="mt-6 text-center text-3xl font-extrabold text-white">
                    Crie sua conta
                </h2>
            </div>
            <form class="mt-8 space-y-6 bg-white/10 backdrop-blur-md rounded-2xl p-8 border border-white/20" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="space-y-4">
                    <div>
                        <label for="name" class="block text-sm font-medium text-white mb-2">Nome</label>
                        <input id="name" name="name" type="text" required autocomplete="name" value="{{ old('name') }}" class="appearance-none relative block w-full px-4 py-3 border border-white/30 rounded-lg placeholder-gray-400 text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm bg-white" placeholder="Seu nome">
                        @error('name')
                            <p class="mt-1 text-sm text-red-300">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-white mb-2">E-mail</label>
                        <input id="email" name="email" type="email" required autocomplete="email" value="{{ old('email') }}" class="appearance-none relative block w-full px-4 py-3 border border-white/30 rounded-lg placeholder-gray-400 text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm bg-white" placeholder="seu@email.com">
                        @error('email')
                            <p class="mt-1 text-sm text-red-300">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium text-white mb-2">Senha</label>
                        <input id="password" name="password" type="password" required autocomplete="new-password" class="appearance-none relative block w-full px-4 py-3 border border-white/30 rounded-lg placeholder-gray-400 text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm bg-white" placeholder="Mínimo 8 caracteres">
                        @error('password')
                            <p class="mt-1 text-sm text-red-300">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-white mb-2">Confirmar Senha</label>
                        <input id="password_confirmation" name="password_confirmation" type="password" required autocomplete="new-password" class="appearance-none relative block w-full px-4 py-3 border border-white/30 rounded-lg placeholder-gray-400 text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm bg-white" placeholder="Confirme sua senha">
                    </div>
                </div>

                <div>
                    <button type="submit" class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-lg text-white bg-gradient-to-r from-blue-700 to-blue-800 hover:from-blue-800 hover:to-blue-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all transform hover:scale-105 shadow-lg">
                        Cadastrar
                    </button>
                </div>

                <div class="text-center">
                    <a href="{{ route('login') }}" class="text-white/80 hover:text-white text-sm">
                        Já tem uma conta? <span class="font-semibold">Faça login</span>
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection

