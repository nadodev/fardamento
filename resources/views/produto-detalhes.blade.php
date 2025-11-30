@extends('layouts.app')

@section('content')
    @php
        $imagens = [
            'uniformes-sociais' => ['02.PNG', '01.PNG', '05.PNG'],
            'epis' => ['03.PNG', '01.PNG', '07.PNG'],
            'saude-beleza' => ['04.PNG', '02.PNG', '06.PNG'],
            'personalizados' => ['05.PNG', '03.PNG', '08.PNG'],
        ];
        $imagensProduto = $imagens[$produto->slug] ?? ['02.PNG', '01.PNG', '05.PNG'];
        $imagensProduto = array_map(fn($img) => asset('imagem/' . $img), $imagensProduto);
        $lojas = $produto->lojas ?? [];
        $caracteristicas = $produto->caracteristicas ?? [];
    @endphp

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
            
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-700 transition-colors font-medium relative group">
                    Início
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-700 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="{{ route('sobre') }}" class="text-gray-700 hover:text-blue-700 transition-colors font-medium relative group">
                    Sobre Nós
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-700 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="{{ route('produtos') }}" class="text-blue-700 font-semibold relative">
                    Produtos
                    <span class="absolute bottom-0 left-0 w-full h-0.5 bg-blue-700"></span>
                </a>
                <a href="{{ route('contato') }}" class="text-gray-700 hover:text-blue-700 transition-colors font-medium relative group">
                    Contato
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-700 group-hover:w-full transition-all duration-300"></span>
                </a>
            </div>
            
            <a href="{{ route('contato') }}" class="hidden md:inline-flex bg-gradient-to-r from-blue-700 to-blue-800 text-white px-6 py-2.5 rounded-lg hover:from-blue-800 hover:to-blue-900 transition-all font-semibold shadow-md hover:shadow-lg transform hover:scale-105">
                Solicitar Orçamento
            </a>
            
            <button id="mobile-menu-button" class="md:hidden p-2 rounded-lg text-gray-700 hover:bg-gray-100 transition-colors" aria-label="Menu">
                <svg id="menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
                <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </nav>
        
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100">
            <div class="container mx-auto px-4 py-4 space-y-3">
                <a href="{{ route('home') }}" class="block py-3 px-4 text-gray-700 hover:text-blue-700 hover:bg-blue-50 rounded-lg transition-colors font-medium">Início</a>
                <a href="{{ route('sobre') }}" class="block py-3 px-4 text-gray-700 hover:text-blue-700 hover:bg-blue-50 rounded-lg transition-colors font-medium">Sobre Nós</a>
                <a href="{{ route('produtos') }}" class="block py-3 px-4 text-blue-700 bg-blue-50 rounded-lg font-semibold">Produtos</a>
                <a href="{{ route('contato') }}" class="block py-3 px-4 text-gray-700 hover:text-blue-700 hover:bg-blue-50 rounded-lg transition-colors font-medium">Contato</a>
                <a href="{{ route('contato') }}" class="block py-3 px-4 bg-gradient-to-r from-blue-700 to-blue-800 text-white rounded-lg hover:from-blue-800 hover:to-blue-900 transition-all font-semibold text-center shadow-md">Solicitar Orçamento</a>
            </div>
        </div>
    </header>

    <!-- Product Details -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <nav class="flex items-center space-x-2 text-sm mb-8">
                <a href="{{ route('home') }}" class="text-gray-500 hover:text-blue-700 transition-colors">Início</a>
                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
                <a href="{{ route('produtos') }}" class="text-gray-500 hover:text-blue-700 transition-colors">Produtos</a>
                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
                <span class="text-gray-900 font-medium">{{ $produto->nome }}</span>
            </nav>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-12 mb-16">
                <!-- Image Gallery -->
                <div>
                    <div class="mb-4 rounded-2xl overflow-hidden shadow-xl">
                        <img id="main-image" src="{{ $imagensProduto[0] }}" alt="{{ $produto->nome }}" class="w-full h-[500px] object-cover cursor-pointer" onclick="openImageModal(this.src, '{{ $produto->nome }}', '{{ $produto->descricao }}')">
                    </div>
                    <div class="grid grid-cols-3 gap-4">
                        @foreach($imagensProduto as $index => $image)
                            <button onclick="changeMainImage('{{ $image }}')" class="rounded-xl overflow-hidden border-2 border-transparent hover:border-blue-700 transition-all transform hover:scale-105 focus:border-blue-700 focus:outline-none">
                                <img src="{{ $image }}" alt="{{ $produto->nome }} - Imagem {{ $index + 1 }}" class="w-full h-24 object-cover">
                            </button>
                        @endforeach
                    </div>
                </div>

                <!-- Product Info -->
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        @if(in_array('matriz', $lojas))
                            <span class="px-3 py-1 bg-blue-700 text-white text-sm font-semibold rounded-lg">Loja Matriz</span>
                        @endif
                        @if(in_array('filial', $lojas))
                            <span class="px-3 py-1 bg-orange-600 text-white text-sm font-semibold rounded-lg">Loja Filial</span>
                        @endif
                    </div>
                    <h1 class="text-4xl lg:text-5xl font-extrabold text-gray-900 mb-4">{{ $produto->nome }}</h1>
                    <div class="text-lg text-gray-600 mb-6">
                        <span class="font-semibold text-gray-900">Código:</span> {{ $produto->codigo }}
                    </div>
                    <p class="text-lg text-gray-700 leading-relaxed mb-8">{{ $produto->descricao }}</p>
                    
                    <!-- Features -->
                    @if(count($caracteristicas) > 0)
                    <div class="mb-8">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Características</h3>
                        <ul class="space-y-3">
                            @foreach($caracteristicas as $feature)
                                <li class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-green-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-gray-700 text-lg">{{ $feature }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <a href="#contato-produto" class="inline-flex items-center bg-gradient-to-r from-blue-700 to-blue-800 text-white px-10 py-5 rounded-xl hover:from-blue-800 hover:to-blue-900 transition-all font-bold text-lg shadow-xl hover:shadow-2xl transform hover:scale-105 gap-2">
                        Solicitar Orçamento
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section id="contato-produto" class="py-24 bg-gradient-to-b from-gray-50 to-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16">
                    <div class="inline-block bg-blue-100 text-blue-700 px-4 py-2 rounded-full text-sm font-semibold mb-6">
                        SOLICITE UM ORÇAMENTO
                    </div>
                    <h2 class="text-4xl lg:text-5xl font-extrabold text-gray-900 mb-6">Interessado neste Produto?</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                        Preencha o formulário abaixo e nossa equipe entrará em contato em até 24 horas com um orçamento personalizado.
                    </p>
                </div>
                <div class="bg-white rounded-2xl shadow-2xl p-8 md:p-12 border border-gray-100">
                    <form class="space-y-6">
                        <input type="hidden" name="produto" value="{{ $produto->nome }}">
                        <input type="hidden" name="codigo" value="{{ $produto->codigo }}">
                        
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="nome" class="block text-gray-900 font-bold mb-3 text-lg">Nome Completo *</label>
                                <input type="text" id="nome" name="nome" required class="w-full px-5 py-4 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all bg-gray-50 hover:bg-white text-gray-900 placeholder-gray-400" placeholder="Seu nome completo">
                            </div>
                            <div>
                                <label for="email" class="block text-gray-900 font-bold mb-3 text-lg">E-mail *</label>
                                <input type="email" id="email" name="email" required class="w-full px-5 py-4 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all bg-gray-50 hover:bg-white text-gray-900 placeholder-gray-400" placeholder="seu@email.com">
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="telefone" class="block text-gray-900 font-bold mb-3 text-lg">Telefone *</label>
                                <input type="tel" id="telefone" name="telefone" required class="w-full px-5 py-4 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all bg-gray-50 hover:bg-white text-gray-900 placeholder-gray-400" placeholder="(00) 00000-0000">
                            </div>
                            <div>
                                <label for="empresa" class="block text-gray-900 font-bold mb-3 text-lg">Empresa</label>
                                <input type="text" id="empresa" name="empresa" class="w-full px-5 py-4 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all bg-gray-50 hover:bg-white text-gray-900 placeholder-gray-400" placeholder="Nome da empresa">
                            </div>
                        </div>
                        <div>
                            <label for="quantidade" class="block text-gray-900 font-bold mb-3 text-lg">Quantidade Aproximada</label>
                            <input type="number" id="quantidade" name="quantidade" min="1" class="w-full px-5 py-4 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all bg-gray-50 hover:bg-white text-gray-900 placeholder-gray-400" placeholder="Ex: 50 unidades">
                        </div>
                        <div>
                            <label for="mensagem" class="block text-gray-900 font-bold mb-3 text-lg">Mensagem *</label>
                            <textarea id="mensagem" name="mensagem" rows="6" required class="w-full px-5 py-4 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all resize-none bg-gray-50 hover:bg-white text-gray-900 placeholder-gray-400" placeholder="Conte-nos mais sobre sua necessidade..."></textarea>
                        </div>
                        <button type="submit" class="w-full bg-gradient-to-r from-blue-700 to-blue-800 text-white px-10 py-5 rounded-xl hover:from-blue-800 hover:to-blue-900 transition-all font-bold text-lg shadow-xl hover:shadow-2xl transform hover:scale-[1.02] duration-300">
                            <span class="flex items-center justify-center gap-2">
                                Enviar Solicitação
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                </svg>
                            </span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Image Modal (Lightbox) -->
    <div id="image-modal" class="fixed inset-0 z-50 hidden items-center justify-center p-4 bg-black/90 backdrop-blur-sm">
        <button onclick="closeImageModal()" class="absolute top-4 right-4 p-3 bg-white/10 hover:bg-white/20 rounded-full transition-colors backdrop-blur-sm z-10">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        <div class="max-w-5xl w-full">
            <img id="image-modal-img" src="" alt="" class="w-full h-auto rounded-2xl shadow-2xl mb-4 max-h-[80vh] object-contain mx-auto">
            <div class="bg-white/10 backdrop-blur-md rounded-xl p-6 text-center">
                <h3 id="image-modal-title" class="text-2xl font-bold text-white mb-2"></h3>
                <p id="image-modal-description" class="text-white/90 text-lg"></p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-16">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-12 mb-12">
                <div>
                    <div class="flex items-center space-x-3 mb-6">
                        <svg class="h-12 w-auto" viewBox="0 0 300 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g transform="translate(10, 10)">
                                <path d="M20 15 L20 50 L50 50 L50 45 L45 40 L45 20 L30 20 L30 15 Z" fill="#3b82f6" stroke="#1e40af" stroke-width="1.5"/>
                                <path d="M20 20 L15 20 L15 30 L20 30 Z" fill="#fbbf24" stroke="#1e40af" stroke-width="1.5"/>
                                <path d="M50 20 L55 20 L55 30 L50 30 Z" fill="#fbbf24" stroke="#1e40af" stroke-width="1.5"/>
                                <path d="M30 15 L35 12 L40 15 L40 20 L30 20 Z" fill="#fbbf24" stroke="#1e40af" stroke-width="1.5"/>
                            </g>
                            <text x="70" y="35" font-family="Arial, sans-serif" font-size="14" font-weight="bold" fill="white">FÁBRICA DE</text>
                            <text x="70" y="55" font-family="Arial, sans-serif" font-size="18" font-weight="bold" fill="white">FARDAMENTOS</text>
                        </svg>
                    </div>
                    <p class="text-gray-400 text-sm mb-6 leading-relaxed">Desde 2004, referência em uniformes profissionais de alta qualidade.</p>
                    <p class="text-gray-500 text-xs">© 2024. Todos os direitos reservados.</p>
                </div>
                <div>
                    <h3 class="font-bold mb-6 text-lg">Navegação</h3>
                    <ul class="space-y-3">
                        <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-white transition-colors">Início</a></li>
                        <li><a href="{{ route('sobre') }}" class="text-gray-400 hover:text-white transition-colors">Sobre Nós</a></li>
                        <li><a href="{{ route('produtos') }}" class="text-gray-400 hover:text-white transition-colors">Produtos</a></li>
                        <li><a href="{{ route('contato') }}" class="text-gray-400 hover:text-white transition-colors">Contato</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold mb-6 text-lg">Contato</h3>
                    <ul class="space-y-3 text-gray-400 text-sm">
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-blue-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            contato@fardamentos.com.br
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-green-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            (00) 00000-0000
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold mb-6 text-lg">Redes Sociais</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="w-12 h-12 bg-gray-800 rounded-xl flex items-center justify-center hover:bg-blue-700 transition-all transform hover:scale-110 shadow-lg hover:shadow-xl">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-12 h-12 bg-gray-800 rounded-xl flex items-center justify-center hover:bg-blue-700 transition-all transform hover:scale-110 shadow-lg hover:shadow-xl">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-12 h-12 bg-gray-800 rounded-xl flex items-center justify-center hover:bg-blue-700 transition-all transform hover:scale-110 shadow-lg hover:shadow-xl">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        function changeMainImage(imageSrc) {
            document.getElementById('main-image').src = imageSrc;
        }

        function openImageModal(imageSrc, title, description) {
            document.getElementById('image-modal-img').src = imageSrc;
            document.getElementById('image-modal-img').alt = title;
            document.getElementById('image-modal-title').textContent = title;
            document.getElementById('image-modal-description').textContent = description;

            document.getElementById('image-modal').classList.remove('hidden');
            document.getElementById('image-modal').classList.add('flex');
            document.body.style.overflow = 'hidden';
        }

        function closeImageModal() {
            document.getElementById('image-modal').classList.add('hidden');
            document.getElementById('image-modal').classList.remove('flex');
            document.body.style.overflow = '';
        }

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeImageModal();
            }
        });

        document.getElementById('image-modal')?.addEventListener('click', function(e) {
            if (e.target === this) {
                closeImageModal();
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            const menuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const menuIcon = document.getElementById('menu-icon');
            const closeIcon = document.getElementById('close-icon');

            if (menuButton && mobileMenu) {
                menuButton.addEventListener('click', function() {
                    const isHidden = mobileMenu.classList.contains('hidden');
                    if (isHidden) {
                        mobileMenu.classList.remove('hidden');
                        menuIcon.classList.add('hidden');
                        closeIcon.classList.remove('hidden');
                    } else {
                        mobileMenu.classList.add('hidden');
                        menuIcon.classList.remove('hidden');
                        closeIcon.classList.add('hidden');
                    }
                });

                const menuLinks = mobileMenu.querySelectorAll('a');
                menuLinks.forEach(link => {
                    link.addEventListener('click', function() {
                        mobileMenu.classList.add('hidden');
                        menuIcon.classList.remove('hidden');
                        closeIcon.classList.add('hidden');
                    });
                });
            }
        });
    </script>
@endsection

