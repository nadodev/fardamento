@extends('layouts.app')
@section('content')
    <!-- Header -->
    <header class="bg-[#FFD217]/95 backdrop-blur-sm shadow-sm sticky top-0 z-50 border-b border-[#002164]/20">
        <nav class="container mx-auto px-4 py-3 md:py-4 flex items-center justify-between">
            <a href="{{ route('home') }}" class="flex items-center space-x-2 md:space-x-3 group">
                <img src="{{ asset('imagem/logo.png') }}" alt="Fábrica de Fardamentos" class="h-10 md:h-14 w-auto group-hover:scale-105 transition-transform">
            </a>
            
            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}" class="text-[#002164] hover:text-[#002164]/80 transition-colors font-medium relative group">
                    Início
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#002164] group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="{{ route('sobre') }}" class="text-[#002164] hover:text-[#002164]/80 transition-colors font-medium relative group">
                    Sobre Nós
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#002164] group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="{{ route('produtos') }}" class="text-[#002164] hover:text-[#002164]/80 transition-colors font-medium relative group">
                    Produtos
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#002164] group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="{{ route('contato') }}" class="text-[#002164] font-semibold relative">
                    Contato
                    <span class="absolute bottom-0 left-0 w-full h-0.5 bg-[#002164]"></span>
                </a>
            </div>
            
            <!-- Desktop Button -->
            <a href="{{ route('contato') }}" class="hidden md:inline-flex bg-[#002164] text-[#FFD217] px-6 py-2.5 rounded-lg hover:bg-[#002164]/90 transition-all font-semibold shadow-md hover:shadow-lg transform hover:scale-105">
                Solicitar Orçamento
            </a>
            
            <!-- Mobile Menu Button -->
            <button id="mobile-menu-button" class="md:hidden p-2 rounded-lg text-[#002164] hover:bg-[#002164]/10 transition-colors" aria-label="Menu">
                <svg id="menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
                <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </nav>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-[#FFD217] border-t border-[#002164]/20">
            <div class="container mx-auto px-4 py-4 space-y-3">
                <a href="{{ route('home') }}" class="block py-3 px-4 text-[#002164] hover:text-[#002164]/80 hover:bg-[#002164]/10 rounded-lg transition-colors font-medium">
                    Início
                </a>
                <a href="{{ route('sobre') }}" class="block py-3 px-4 text-[#002164] hover:text-[#002164]/80 hover:bg-[#002164]/10 rounded-lg transition-colors font-medium">
                    Sobre Nós
                </a>
                <a href="{{ route('produtos') }}" class="block py-3 px-4 text-[#002164] hover:text-[#002164]/80 hover:bg-[#002164]/10 rounded-lg transition-colors font-medium">
                    Produtos
                </a>
                <a href="{{ route('contato') }}" class="block py-3 px-4 text-[#002164] bg-[#002164]/10 rounded-lg font-semibold">
                    Contato
                </a>
                <a href="{{ route('contato') }}" class="block py-3 px-4 bg-[#002164] text-[#FFD217] rounded-lg hover:bg-[#002164]/90 transition-all font-semibold text-center shadow-md">
                    Solicitar Orçamento
                </a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative bg-white text-[#002164] py-24 overflow-hidden">
        <!-- Background Effects -->
        <div class="absolute inset-0">
            <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-white/5 rounded-full -translate-y-1/2 translate-x-1/2 blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-orange-500/10 rounded-full translate-y-1/2 -translate-x-1/2 blur-3xl"></div>
            <div class="absolute top-1/2 left-1/2 w-[400px] h-[400px] bg-blue-400/5 rounded-full -translate-x-1/2 -translate-y-1/2 blur-3xl"></div>
        </div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center max-w-4xl mx-auto">
                <div class="inline-flex items-center gap-2 bg-[#002164]/20 backdrop-blur-md px-4 py-2 rounded-full text-xs sm:text-sm font-semibold border border-[#002164]/30 mb-5">
                    <svg class="w-4 h-4 text-[#002164]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    ESTAMOS PRONTOS PARA ATENDER VOCÊ
                </div>
                <h1 class="text-3xl lg:text-4xl font-extrabold leading-tight mb-3 text-[#002164]">
                    Entre em <span class="text-[#002164]">Contato</span>
                </h1>
                <p class="text-base lg:text-lg text-[#002164]/90 leading-relaxed max-w-3xl mx-auto">
                    Visite-nos em uma de nossas lojas ou envie sua mensagem. Nossa equipe está pronta para ajudar você a encontrar o uniforme perfeito.
                </p>
            </div>
        </div>
    </section>

    <!-- Nossas Lojas -->
    <section class="py-20 bg-white border-t-4 border-[#E6C000]">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <div class="inline-block bg-[#002164]/20 text-[#002164] px-4 py-2 rounded-full text-xs sm:text-sm font-semibold mb-4">
                    NOSSAS UNIDADES
                </div>
                <h2 class="text-2xl lg:text-3xl font-extrabold text-[#002164] mb-3">Nossas Lojas</h2>
                <p class="text-base lg:text-lg text-[#002164]/80 max-w-3xl mx-auto leading-relaxed">
                    Visite-nos em uma de nossas unidades estrategicamente localizadas
                </p>
            </div>
            <div class="grid md:grid-cols-2 gap-10 mb-16">
                <!-- Loja Matriz -->
                <div class="group bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 border border-[#002164]/20">
                    <div class="h-80 bg-[#FFD217] overflow-hidden relative">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/10 to-transparent"></div>
                        <img src="{{ asset('imagem/07.PNG') }}" alt="Loja Matriz" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    </div>
                    <div class="p-10">
                        <div class="flex items-center gap-2 mb-4">
                            <div class="w-2 h-2 bg-[#002164] rounded-full"></div>
                            <span class="text-sm font-semibold text-[#002164] uppercase tracking-wide">Loja Matriz</span>
                        </div>
                        <h3 class="text-2xl font-bold text-[#002164] mb-4">Loja Matriz</h3>
                        <div class="space-y-5">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-[#002164]/20 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-[#002164]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-bold text-[#002164] mb-1 text-base lg:text-lg">Endereço</p>
                                    <p class="text-[#002164]/80">Av. Dr Júlio Maranhão, 7, Guararapes</p>
                                    <p class="text-[#002164]/80">Jaboatão dos Guararapes-PE, CEP 54325-440</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-[#002164]/20 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-[#002164]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-bold text-[#002164] mb-1 text-base lg:text-lg">Telefone</p>
                                    <p class="text-[#002164]/80">(81) 3074-2933</p>
                                    <p class="text-[#002164]/80">(81) 97910-6667</p>
                                    <p class="text-[#002164]/80">fabricadefardamentos@gmail.com</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-[#002164]/20 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-[#002164]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-bold text-[#002164] mb-1 text-base lg:text-lg">Horário de Funcionamento</p>
                                    <p class="text-[#002164]/80">Segunda a Sexta: 8h às 18h</p>
                                    <p class="text-[#002164]/80">Sábado: 8h às 13h</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Loja Filial -->
                <div class="group bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 border border-[#002164]/20">
                    <div class="h-80 bg-[#FFD217] overflow-hidden relative">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/10 to-transparent"></div>
                        <img src="{{ asset('imagem/08.PNG') }}" alt="Loja Filial" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    </div>
                    <div class="p-10">
                        <div class="flex items-center gap-2 mb-4">
                            <div class="w-2 h-2 bg-[#002164] rounded-full"></div>
                            <span class="text-sm font-semibold text-[#002164] uppercase tracking-wide">Loja Filial</span>
                        </div>
                        <h3 class="text-2xl font-bold text-[#002164] mb-4">Loja Filial</h3>
                        <div class="space-y-5">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-[#002164]/20 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-[#002164]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-bold text-[#002164] mb-1 text-base lg:text-lg">Endereço</p>
                                    <p class="text-[#002164]/80">Estrada do Rufino, 850, Serraria</p>
                                    <p class="text-[#002164]/80">Diadema-SP, CEP 09980-380</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-[#002164]/20 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-[#002164]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-bold text-[#002164] mb-1 text-base lg:text-lg">Telefone</p>
                                    <p class="text-[#002164]/80">(11) 4057-3202</p>
                                    <p class="text-[#002164]/80">(11) 94211-0729</p>
                                    <p class="text-[#002164]/80">fabricadefardamentossp@gmail.com</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-[#002164]/20 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-[#002164]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-bold text-[#002164] mb-1 text-base lg:text-lg">Horário de Funcionamento</p>
                                    <p class="text-[#002164]/80">Segunda a Sexta: 8h às 18h</p>
                                    <p class="text-[#002164]/80">Sábado: 8h às 13h</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Formulário de Contato -->
    <section class="py-24 bg-white border-t-4 border-[#E6C000]">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-14">
                    <div class="inline-block bg-[#002164]/20 text-[#002164] px-4 py-2 rounded-full text-xs sm:text-sm font-semibold mb-4">
                        ENVIE SUA MENSAGEM
                    </div>
                    <h2 class="text-2xl lg:text-3xl font-extrabold text-[#002164] mb-3">Envie sua Mensagem</h2>
                    <p class="text-base lg:text-lg text-[#002164]/80 max-w-3xl mx-auto leading-relaxed">
                        Preencha o formulário abaixo e nossa equipe entrará em contato em até 24 horas.
                    </p>
                </div>
                <div class="bg-white rounded-2xl shadow-2xl p-8 md:p-12 border border-gray-100">
                    @if(session('success'))
                        <div class="mb-6 p-4 bg-green-100 border-l-4 border-green-500 text-green-700 rounded-lg">
                            <div class="flex items-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <p class="font-semibold">{{ session('success') }}</p>
                            </div>
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="mb-6 p-4 bg-red-100 border-l-4 border-red-500 text-red-700 rounded-lg">
                            <div class="flex items-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <p class="font-semibold">{{ session('error') }}</p>
                            </div>
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="mb-6 p-4 bg-red-100 border-l-4 border-red-500 text-red-700 rounded-lg">
                            <div class="flex items-start gap-2">
                                <svg class="w-5 h-5 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <div>
                                    <p class="font-semibold mb-2">Por favor, corrija os seguintes erros:</p>
                                    <ul class="list-disc list-inside space-y-1">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif

                    <form action="{{ route('contato.store') }}" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="nome" class="block text-[#002164] font-bold mb-2 text-base lg:text-lg">Nome Completo *</label>
                                <input type="text" id="nome" name="nome" value="{{ old('nome') }}" required class="w-full px-5 py-4 border-2 @error('nome') border-red-500 @else border-[#002164]/20 @enderror rounded-xl focus:ring-2 focus:ring-[#002164] focus:border-[#002164] transition-all bg-white hover:bg-[#FFD217]/10 text-[#002164] placeholder-[#002164]/50" placeholder="Seu nome completo">
                                @error('nome')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="email" class="block text-[#002164] font-bold mb-2 text-base lg:text-lg">E-mail *</label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}" required class="w-full px-5 py-4 border-2 @error('email') border-red-500 @else border-[#002164]/20 @enderror rounded-xl focus:ring-2 focus:ring-[#002164] focus:border-[#002164] transition-all bg-white hover:bg-[#FFD217]/10 text-[#002164] placeholder-[#002164]/50" placeholder="seu@email.com">
                                @error('email')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="telefone" class="block text-[#002164] font-bold mb-2 text-base lg:text-lg">Telefone *</label>
                                <input type="tel" id="telefone" name="telefone" value="{{ old('telefone') }}" required class="w-full px-5 py-4 border-2 @error('telefone') border-red-500 @else border-[#002164]/20 @enderror rounded-xl focus:ring-2 focus:ring-[#002164] focus:border-[#002164] transition-all bg-white hover:bg-[#FFD217]/10 text-[#002164] placeholder-[#002164]/50" placeholder="(00) 00000-0000">
                                @error('telefone')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="loja" class="block text-[#002164] font-bold mb-2 text-base lg:text-lg">Loja de Interesse</label>
                                <select id="loja" name="loja" class="w-full px-5 py-4 border-2 @error('loja') border-red-500 @else border-[#002164]/20 @enderror rounded-xl focus:ring-2 focus:ring-[#002164] focus:border-[#002164] transition-all bg-white hover:bg-[#FFD217]/10 text-[#002164]">
                                    <option value="">Selecione uma loja</option>
                                    <option value="matriz" {{ old('loja') === 'matriz' ? 'selected' : '' }}>Loja Matriz</option>
                                    <option value="filial" {{ old('loja') === 'filial' ? 'selected' : '' }}>Loja Filial</option>
                                </select>
                                @error('loja')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <label for="empresa" class="block text-[#002164] font-bold mb-2 text-base lg:text-lg">Empresa</label>
                            <input type="text" id="empresa" name="empresa" value="{{ old('empresa') }}" class="w-full px-5 py-4 border-2 @error('empresa') border-red-500 @else border-[#002164]/20 @enderror rounded-xl focus:ring-2 focus:ring-[#002164] focus:border-[#002164] transition-all bg-white hover:bg-[#FFD217]/10 text-[#002164] placeholder-[#002164]/50" placeholder="Nome da empresa">
                            @error('empresa')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="mensagem" class="block text-[#002164] font-bold mb-2 text-base lg:text-lg">Mensagem *</label>
                            <textarea id="mensagem" name="mensagem" rows="6" required class="w-full px-5 py-4 border-2 @error('mensagem') border-red-500 @else border-[#002164]/20 @enderror rounded-xl focus:ring-2 focus:ring-[#002164] focus:border-[#002164] transition-all resize-none bg-white hover:bg-[#FFD217]/10 text-[#002164] placeholder-[#002164]/50" placeholder="Sua mensagem...">{{ old('mensagem') }}</textarea>
                            @error('mensagem')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit" class="w-full bg-[#002164] text-[#FFD217] px-8 py-4 rounded-xl hover:bg-[#002164]/90 transition-all font-bold text-base lg:text-lg shadow-xl hover:shadow-2xl transform hover:scale-[1.02] duration-300">
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
    <section class="py-24 bg-[#002164] text-[#FFD217] relative overflow-hidden border-t-4 border-[#E6C000]">
        <div class="absolute inset-0">
            <div class="absolute top-0 left-0 w-[600px] h-[600px] bg-white/5 rounded-full -translate-x-1/2 -translate-y-1/2 blur-3xl"></div>
            <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-orange-500/10 rounded-full translate-x-1/2 translate-y-1/2 blur-3xl"></div>
        </div>
        <div class="container mx-auto px-4 relative z-10 text-center">
            <h2 class="text-2xl lg:text-3xl font-extrabold mb-4">Precisa de Ajuda Imediata?</h2>
            <p class="text-base lg:text-lg mb-8 text-[#FFD217]/90 max-w-3xl mx-auto leading-relaxed">
                Entre em contato conosco agora mesmo. Nossa equipe está pronta para atender você.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="tel:+550000000000" class="group bg-[#FFD217] text-[#002164] px-10 py-5 rounded-xl hover:bg-[#FFD217]/90 transition-all font-bold text-lg shadow-2xl hover:shadow-[#FFD217]/50 transform hover:scale-105 inline-flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                    Ligar Agora
                </a>
                <a href="{{ route('produtos') }}" class="bg-[#FFD217]/10 backdrop-blur-md text-[#FFD217] px-10 py-5 rounded-xl hover:bg-[#FFD217]/20 transition-all font-semibold text-lg border-2 border-[#FFD217]/30 hover:border-[#FFD217]/50 inline-flex items-center justify-center">
                    Ver Nossos Produtos
                </a>
            </div>
        </div>
    </section>

    @include('layouts.footer')

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
