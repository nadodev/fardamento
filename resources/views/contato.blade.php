@extends('layouts.app')

@section('content')
    <!-- Header -->
    <header class="bg-white/95 backdrop-blur-sm shadow-sm sticky top-0 z-50 border-b border-gray-100">
        <nav class="container mx-auto px-4 py-3 md:py-4 flex items-center justify-between">
            <a href="{{ route('home') }}" class="flex items-center space-x-2 md:space-x-3 group">
                <svg class="h-10 md:h-14 w-auto group-hover:scale-105 transition-transform" viewBox="0 0 300 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <!-- Polo Shirt -->
                    <g transform="translate(10, 10)">
                        <!-- Shirt Body (Dark Blue) -->
                        <path d="M20 15 L20 50 L50 50 L50 45 L45 40 L45 20 L30 20 L30 15 Z" fill="#1e3a8a" stroke="#0f172a" stroke-width="1.5"/>
                        <!-- Sleeves (Yellow) -->
                        <path d="M20 20 L15 20 L15 30 L20 30 Z" fill="#fbbf24" stroke="#0f172a" stroke-width="1.5"/>
                        <path d="M50 20 L55 20 L55 30 L50 30 Z" fill="#fbbf24" stroke="#0f172a" stroke-width="1.5"/>
                        <!-- Collar (Yellow) -->
                        <path d="M30 15 L35 12 L40 15 L40 20 L30 20 Z" fill="#fbbf24" stroke="#0f172a" stroke-width="1.5"/>
                        <!-- Placket -->
                        <line x1="35" y1="15" x2="35" y2="25" stroke="#f3f4f6" stroke-width="1"/>
                        <!-- Buttons -->
                        <circle cx="35" cy="20" r="1.5" fill="#f3f4f6"/>
                        <circle cx="35" cy="23" r="1.5" fill="#f3f4f6"/>
                        <!-- Chest Detail -->
                        <circle cx="25" cy="28" r="2" fill="#f3f4f6"/>
                    </g>
                    <!-- Text -->
                    <text x="70" y="35" font-family="Arial, sans-serif" font-size="14" font-weight="bold" fill="#1e3a8a">FÁBRICA DE</text>
                    <text x="70" y="55" font-family="Arial, sans-serif" font-size="18" font-weight="bold" fill="#1e3a8a">FARDAMENTOS</text>
                </svg>
            </a>
            
            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-700 transition-colors font-medium relative group">
                    Início
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-700 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="{{ route('sobre') }}" class="text-gray-700 hover:text-blue-700 transition-colors font-medium relative group">
                    Sobre Nós
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-700 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="{{ route('produtos') }}" class="text-gray-700 hover:text-blue-700 transition-colors font-medium relative group">
                    Produtos
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-700 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="{{ route('contato') }}" class="text-blue-700 font-semibold relative">
                    Contato
                    <span class="absolute bottom-0 left-0 w-full h-0.5 bg-blue-700"></span>
                </a>
            </div>
            
            <!-- Desktop Button -->
            <a href="{{ route('contato') }}" class="hidden md:inline-flex bg-gradient-to-r from-blue-700 to-blue-800 text-white px-6 py-2.5 rounded-lg hover:from-blue-800 hover:to-blue-900 transition-all font-semibold shadow-md hover:shadow-lg transform hover:scale-105">
                Solicitar Orçamento
            </a>
            
            <!-- Mobile Menu Button -->
            <button id="mobile-menu-button" class="md:hidden p-2 rounded-lg text-gray-700 hover:bg-gray-100 transition-colors" aria-label="Menu">
                <svg id="menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
                <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </nav>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100">
            <div class="container mx-auto px-4 py-4 space-y-3">
                <a href="{{ route('home') }}" class="block py-3 px-4 text-gray-700 hover:text-blue-700 hover:bg-blue-50 rounded-lg transition-colors font-medium">
                    Início
                </a>
                <a href="{{ route('sobre') }}" class="block py-3 px-4 text-gray-700 hover:text-blue-700 hover:bg-blue-50 rounded-lg transition-colors font-medium">
                    Sobre Nós
                </a>
                <a href="{{ route('produtos') }}" class="block py-3 px-4 text-gray-700 hover:text-blue-700 hover:bg-blue-50 rounded-lg transition-colors font-medium">
                    Produtos
                </a>
                <a href="{{ route('contato') }}" class="block py-3 px-4 text-blue-700 bg-blue-50 rounded-lg font-semibold">
                    Contato
                </a>
                <a href="{{ route('contato') }}" class="block py-3 px-4 bg-gradient-to-r from-blue-700 to-blue-800 text-white rounded-lg hover:from-blue-800 hover:to-blue-900 transition-all font-semibold text-center shadow-md">
                    Solicitar Orçamento
                </a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-blue-950 via-blue-900 to-blue-800 text-white py-32 overflow-hidden">
        <!-- Background Effects -->
        <div class="absolute inset-0">
            <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-white/5 rounded-full -translate-y-1/2 translate-x-1/2 blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-orange-500/10 rounded-full translate-y-1/2 -translate-x-1/2 blur-3xl"></div>
            <div class="absolute top-1/2 left-1/2 w-[400px] h-[400px] bg-blue-400/5 rounded-full -translate-x-1/2 -translate-y-1/2 blur-3xl"></div>
        </div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center max-w-4xl mx-auto">
                <div class="inline-flex items-center gap-2 bg-blue-800/40 backdrop-blur-md px-5 py-2.5 rounded-full text-sm font-semibold border border-blue-700/50 mb-8">
                    <svg class="w-4 h-4 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    ESTAMOS PRONTOS PARA ATENDER VOCÊ
                </div>
                <h1 class="text-5xl lg:text-7xl font-extrabold leading-tight mb-6">
                    Entre em <span class="bg-gradient-to-r from-orange-400 to-orange-500 bg-clip-text text-transparent">Contato</span>
                </h1>
                <p class="text-xl lg:text-2xl text-blue-100 leading-relaxed max-w-3xl mx-auto">
                    Visite-nos em uma de nossas lojas ou envie sua mensagem. Nossa equipe está pronta para ajudar você a encontrar o uniforme perfeito.
                </p>
            </div>
        </div>
    </section>

    <!-- Nossas Lojas -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-20">
                <div class="inline-block bg-blue-100 text-blue-700 px-4 py-2 rounded-full text-sm font-semibold mb-6">
                    NOSSAS UNIDADES
                </div>
                <h2 class="text-4xl lg:text-5xl font-extrabold text-gray-900 mb-6">Nossas Lojas</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Visite-nos em uma de nossas unidades estrategicamente localizadas
                </p>
            </div>
            <div class="grid md:grid-cols-2 gap-10 mb-16">
                <!-- Loja Matriz -->
                <div class="group bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 border border-gray-100">
                    <div class="h-80 bg-gradient-to-br from-blue-50 to-gray-100 overflow-hidden relative">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/10 to-transparent"></div>
                        <img src="{{ asset('imagem/07.PNG') }}" alt="Loja Matriz" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    </div>
                    <div class="p-10">
                        <div class="flex items-center gap-2 mb-4">
                            <div class="w-2 h-2 bg-blue-700 rounded-full"></div>
                            <span class="text-sm font-semibold text-blue-700 uppercase tracking-wide">Loja Matriz</span>
                        </div>
                        <h3 class="text-3xl font-bold text-gray-900 mb-6">Loja Matriz</h3>
                        <div class="space-y-5">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-bold text-gray-900 mb-1 text-lg">Endereço</p>
                                    <p class="text-gray-600">Rua Principal, 123 - Centro</p>
                                    <p class="text-gray-600">Cidade - Estado, CEP 00000-000</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-bold text-gray-900 mb-1 text-lg">Telefone</p>
                                    <p class="text-gray-600">(00) 0000-0000</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-bold text-gray-900 mb-1 text-lg">Horário de Funcionamento</p>
                                    <p class="text-gray-600">Segunda a Sexta: 8h às 18h</p>
                                    <p class="text-gray-600">Sábado: 8h às 13h</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Loja Filial -->
                <div class="group bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 border border-gray-100">
                    <div class="h-80 bg-gradient-to-br from-orange-50 to-gray-100 overflow-hidden relative">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/10 to-transparent"></div>
                        <img src="{{ asset('imagem/08.PNG') }}" alt="Loja Filial" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    </div>
                    <div class="p-10">
                        <div class="flex items-center gap-2 mb-4">
                            <div class="w-2 h-2 bg-orange-600 rounded-full"></div>
                            <span class="text-sm font-semibold text-orange-700 uppercase tracking-wide">Loja Filial</span>
                        </div>
                        <h3 class="text-3xl font-bold text-gray-900 mb-6">Loja Filial</h3>
                        <div class="space-y-5">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-orange-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-bold text-gray-900 mb-1 text-lg">Endereço</p>
                                    <p class="text-gray-600">Av. Comercial, 456 - Bairro Novo</p>
                                    <p class="text-gray-600">Cidade - Estado, CEP 00000-000</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-orange-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-bold text-gray-900 mb-1 text-lg">Telefone</p>
                                    <p class="text-gray-600">(00) 0000-0000</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-orange-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-bold text-gray-900 mb-1 text-lg">Horário de Funcionamento</p>
                                    <p class="text-gray-600">Segunda a Sexta: 8h às 18h</p>
                                    <p class="text-gray-600">Sábado: 8h às 13h</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Formulário de Contato -->
    <section class="py-24 bg-gradient-to-b from-gray-50 to-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16">
                    <div class="inline-block bg-blue-100 text-blue-700 px-4 py-2 rounded-full text-sm font-semibold mb-6">
                        ENVIE SUA MENSAGEM
                    </div>
                    <h2 class="text-4xl lg:text-5xl font-extrabold text-gray-900 mb-6">Envie sua Mensagem</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                        Preencha o formulário abaixo e nossa equipe entrará em contato em até 24 horas.
                    </p>
                </div>
                <div class="bg-white rounded-2xl shadow-2xl p-8 md:p-12 border border-gray-100">
                    <form class="space-y-6">
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
                                <label for="loja" class="block text-gray-900 font-bold mb-3 text-lg">Loja de Interesse</label>
                                <select id="loja" name="loja" class="w-full px-5 py-4 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all bg-gray-50 hover:bg-white text-gray-900">
                                    <option value="">Selecione uma loja</option>
                                    <option value="matriz">Loja Matriz</option>
                                    <option value="filial">Loja Filial</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <label for="empresa" class="block text-gray-900 font-bold mb-3 text-lg">Empresa</label>
                            <input type="text" id="empresa" name="empresa" class="w-full px-5 py-4 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all bg-gray-50 hover:bg-white text-gray-900 placeholder-gray-400" placeholder="Nome da empresa">
                        </div>
                        <div>
                            <label for="mensagem" class="block text-gray-900 font-bold mb-3 text-lg">Mensagem *</label>
                            <textarea id="mensagem" name="mensagem" rows="6" required class="w-full px-5 py-4 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all resize-none bg-gray-50 hover:bg-white text-gray-900 placeholder-gray-400" placeholder="Sua mensagem..."></textarea>
                        </div>
                        <button type="submit" class="w-full bg-gradient-to-r from-blue-700 to-blue-800 text-white px-10 py-5 rounded-xl hover:from-blue-800 hover:to-blue-900 transition-all font-bold text-lg shadow-xl hover:shadow-2xl transform hover:scale-[1.02] duration-300">
                            <span class="flex items-center justify-center gap-2">
                                Enviar Mensagem
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

    <!-- CTA Section -->
    <section class="py-24 bg-gradient-to-br from-blue-950 via-blue-900 to-blue-800 text-white relative overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-0 left-0 w-[600px] h-[600px] bg-white/5 rounded-full -translate-x-1/2 -translate-y-1/2 blur-3xl"></div>
            <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-orange-500/10 rounded-full translate-x-1/2 translate-y-1/2 blur-3xl"></div>
        </div>
        <div class="container mx-auto px-4 relative z-10 text-center">
            <h2 class="text-4xl lg:text-5xl font-extrabold mb-6">Precisa de Ajuda Imediata?</h2>
            <p class="text-xl mb-10 text-blue-100 max-w-3xl mx-auto leading-relaxed">
                Entre em contato conosco agora mesmo. Nossa equipe está pronta para atender você.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="tel:+550000000000" class="group bg-gradient-to-r from-orange-500 to-orange-600 text-white px-10 py-5 rounded-xl hover:from-orange-600 hover:to-orange-700 transition-all font-bold text-lg shadow-2xl hover:shadow-orange-500/50 transform hover:scale-105 inline-flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                    Ligar Agora
                </a>
                <a href="{{ route('produtos') }}" class="bg-white/10 backdrop-blur-md text-white px-10 py-5 rounded-xl hover:bg-white/20 transition-all font-semibold text-lg border-2 border-white/20 hover:border-white/40 inline-flex items-center justify-center">
                    Ver Nossos Produtos
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-16">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-12 mb-12">
                <div>
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-700 to-blue-800 rounded-xl flex items-center justify-center shadow-lg">
                            <span class="text-white font-bold text-xl">U</span>
                        </div>
                        <span class="text-2xl font-bold">Uniflex</span>
                    </div>
                    <p class="text-gray-400 text-sm mb-6 leading-relaxed">
                        Desde 2004, a Uniflex é referência em uniformes profissionais de alta qualidade, conforto e durabilidade.
                    </p>
                    <p class="text-gray-500 text-xs">© 2024 Uniflex. Todos os direitos reservados.</p>
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
                            contato@uniflex.com.br
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
        // Mobile Menu Toggle
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

                // Close menu when clicking on a link
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
