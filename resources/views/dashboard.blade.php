@extends('layouts.app')

@section('content')
    <!-- Header -->
    <header class="bg-white/95 backdrop-blur-sm shadow-sm sticky top-0 z-50 border-b border-gray-100">
        <nav class="container mx-auto px-4 py-3 md:py-4 flex items-center justify-between">
            <a href="{{ route('home') }}" class="flex items-center space-x-2 md:space-x-3 group">
                <svg class="h-10 md:h-14 w-auto group-hover:scale-105 transition-transform" viewBox="0 0 300 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g transform="translate(10, 10)">
                        <path d="M20 15 L20 50 L50 50 L50 45 L45 40 L45 20 L30 20 L30 15 Z" fill="#1e3a8a" stroke="#0f172a" stroke-width="1.5"/>
                        <path d="M20 20 L15 20 L15 30 L20 30 Z" fill="#fbbf24" stroke="#0f172a" stroke-width="1.5"/>
                        <path d="M50 20 L55 20 L55 30 L50 30 Z" fill="#fbbf24" stroke="#0f172a" stroke-width="1.5"/>
                        <path d="M30 15 L35 12 L40 15 L40 20 L30 20 Z" fill="#fbbf24" stroke="#0f172a" stroke-width="1.5"/>
                        <line x1="35" y1="15" x2="35" y2="25" stroke="#f3f4f6" stroke-width="1"/>
                        <circle cx="35" cy="20" r="1.5" fill="#f3f4f6"/>
                        <circle cx="35" cy="23" r="1.5" fill="#f3f4f6"/>
                        <circle cx="25" cy="28" r="2" fill="#f3f4f6"/>
                    </g>
                    <text x="70" y="35" font-family="Arial, sans-serif" font-size="14" font-weight="bold" fill="#1e3a8a">FÁBRICA DE</text>
                    <text x="70" y="55" font-family="Arial, sans-serif" font-size="18" font-weight="bold" fill="#1e3a8a">FARDAMENTOS</text>
                </svg>
            </a>
            
            <div class="flex items-center space-x-4">
                <span class="text-gray-700 font-medium hidden md:block">{{ Auth::user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition-colors font-medium">
                        Sair
                    </button>
                </form>
            </div>
        </nav>
    </header>

    <!-- Dashboard -->
    <section class="py-12 bg-gray-50 min-h-screen">
        <div class="container mx-auto px-4">
            <div class="mb-8">
                <h1 class="text-4xl font-extrabold text-gray-900 mb-2">Dashboard</h1>
                <p class="text-gray-600">Bem-vindo, {{ Auth::user()->name }}!</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                <a href="{{ route('admin.produtos.index') }}" class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition-all transform hover:-translate-y-2 border border-gray-100">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center">
                            <svg class="w-8 h-8 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                            </svg>
                        </div>
                        <span class="text-3xl font-bold text-gray-900">{{ \App\Models\Produto::count() }}</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Produtos</h3>
                    <p class="text-gray-600 text-sm">Gerenciar produtos cadastrados</p>
                </a>

                <a href="{{ route('admin.empresas.index') }}" class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition-all transform hover:-translate-y-2 border border-gray-100">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-16 h-16 bg-orange-100 rounded-xl flex items-center justify-center">
                            <svg class="w-8 h-8 text-orange-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                        </div>
                        <span class="text-3xl font-bold text-gray-900">{{ \App\Models\Empresa::count() }}</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Empresas</h3>
                    <p class="text-gray-600 text-sm">Gerenciar empresas cadastradas</p>
                </a>

                <a href="{{ route('home') }}" class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition-all transform hover:-translate-y-2 border border-gray-100">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-16 h-16 bg-green-100 rounded-xl flex items-center justify-center">
                            <svg class="w-8 h-8 text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Ver Site</h3>
                    <p class="text-gray-600 text-sm">Visualizar site público</p>
                </a>
            </div>
        </div>
    </section>
@endsection

