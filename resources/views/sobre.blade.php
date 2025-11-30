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
                <a href="{{ route('sobre') }}" class="text-blue-700 font-semibold relative">
                    Sobre Nós
                    <span class="absolute bottom-0 left-0 w-full h-0.5 bg-blue-700"></span>
                </a>
                <a href="{{ route('produtos') }}" class="text-gray-700 hover:text-blue-700 transition-colors font-medium relative group">
                    Produtos
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-700 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="{{ route('contato') }}" class="text-gray-700 hover:text-blue-700 transition-colors font-medium relative group">
                    Contato
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-700 group-hover:w-full transition-all duration-300"></span>
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
                <a href="{{ route('sobre') }}" class="block py-3 px-4 text-blue-700 bg-blue-50 rounded-lg font-semibold">
                    Sobre Nós
                </a>
                <a href="{{ route('produtos') }}" class="block py-3 px-4 text-gray-700 hover:text-blue-700 hover:bg-blue-50 rounded-lg transition-colors font-medium">
                    Produtos
                </a>
                <a href="{{ route('contato') }}" class="block py-3 px-4 text-gray-700 hover:text-blue-700 hover:bg-blue-50 rounded-lg transition-colors font-medium">
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
                    <svg class="w-4 h-4 text-orange-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    MAIS DE 20 ANOS DE EXCELÊNCIA
                </div>
                <h1 class="text-5xl lg:text-7xl font-extrabold leading-tight mb-6">
                    Sobre a <span class="bg-gradient-to-r from-orange-400 to-orange-500 bg-clip-text text-transparent">Uniflex</span>
                </h1>
                <p class="text-xl lg:text-2xl text-blue-100 leading-relaxed max-w-3xl mx-auto">
                    Conheça nossa história, valores e o compromisso que nos torna referência em uniformes profissionais no Brasil.
                </p>
            </div>
        </div>
    </section>

    <!-- Nossa História -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <div class="inline-block bg-blue-100 text-blue-700 px-4 py-2 rounded-full text-sm font-semibold mb-6">
                        NOSSA HISTÓRIA
                    </div>
                    <h2 class="text-4xl lg:text-5xl font-extrabold text-gray-900 mb-6 leading-tight">Mais de 20 Anos de Tradição e Excelência</h2>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        Desde 2004, a Uniflex tem sido sinônimo de excelência na fabricação de uniformes profissionais. Nossa jornada é marcada pela busca incessante por inovação, qualidade e satisfação do cliente.
                    </p>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        Começamos com uma pequena operação e, ao longo dos anos, expandimos nossa presença com duas lojas estrategicamente localizadas para melhor atender nossos clientes. Cada uniforme que produzimos carrega nosso compromisso com a qualidade e a dedicação de nossa equipe.
                    </p>
                    <p class="text-lg text-gray-600 mb-10 leading-relaxed">
                        Hoje, somos reconhecidos no mercado por nossa capacidade de personalização, prazos de entrega e atenção aos detalhes que fazem a diferença na imagem profissional de nossos clientes.
                    </p>
                    <a href="{{ route('contato') }}" class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-700 to-blue-800 text-white px-8 py-4 rounded-xl hover:from-blue-800 hover:to-blue-900 transition-all font-bold text-lg shadow-xl hover:shadow-2xl transform hover:scale-105">
                        Entre em Contato
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                </div>
                <div class="hidden lg:block relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-500/20 to-orange-500/20 rounded-3xl blur-3xl transform -rotate-6"></div>
                    <div class="relative">
                        <div class="absolute -inset-4 bg-gradient-to-r from-blue-600 to-orange-500 rounded-3xl opacity-20 blur-2xl"></div>
                        <img src="{{ asset('imagem/06.PNG') }}" alt="Nossa História" class="relative rounded-3xl shadow-2xl transform hover:scale-105 transition duration-700 border-4 border-white/10">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Missão, Visão e Valores -->
    <section class="py-24 bg-gradient-to-b from-gray-50 to-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-20">
                <div class="inline-block bg-blue-100 text-blue-700 px-4 py-2 rounded-full text-sm font-semibold mb-6">
                    NOSSA IDENTIDADE
                </div>
                <h2 class="text-4xl lg:text-5xl font-extrabold text-gray-900 mb-6">Missão, Visão e Valores</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Os pilares que guiam nosso trabalho e definem nosso compromisso com a excelência
                </p>
            </div>
            <div class="grid md:grid-cols-3 gap-10">
                <div class="group bg-white rounded-2xl p-10 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 border border-gray-100">
                    <div class="w-20 h-20 bg-gradient-to-br from-blue-100 to-blue-200 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform shadow-lg">
                        <svg class="w-10 h-10 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">Missão</h3>
                    <p class="text-gray-600 text-center leading-relaxed text-lg">Oferecer uniformes que unam funcionalidade, conforto e estilo, superando as expectativas de nossos clientes através da qualidade e inovação.</p>
                </div>
                <div class="group bg-white rounded-2xl p-10 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 border border-gray-100">
                    <div class="w-20 h-20 bg-gradient-to-br from-orange-100 to-orange-200 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform shadow-lg">
                        <svg class="w-10 h-10 text-orange-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">Visão</h3>
                    <p class="text-gray-600 text-center leading-relaxed text-lg">Ser referência no mercado de uniformes profissionais, reconhecida pela inovação, qualidade e compromisso com a satisfação do cliente.</p>
                </div>
                <div class="group bg-white rounded-2xl p-10 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 border border-gray-100">
                    <div class="w-20 h-20 bg-gradient-to-br from-green-100 to-green-200 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform shadow-lg">
                        <svg class="w-10 h-10 text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">Valores</h3>
                    <p class="text-gray-600 text-center leading-relaxed text-lg">Integridade, respeito, compromisso com a qualidade, sustentabilidade e valorização das pessoas.</p>
                </div>
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
                    Conheça nossas duas unidades estrategicamente localizadas para melhor atendê-lo
                </p>
            </div>
            <div class="grid md:grid-cols-2 gap-10">
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
                        <h3 class="text-3xl font-bold text-gray-900 mb-4">Loja Matriz</h3>
                        <p class="text-gray-600 mb-8 leading-relaxed text-lg">
                            Nossa loja matriz é o coração da Uniflex. Localizada no centro da cidade, oferece um amplo espaço de atendimento e exposição de produtos. Aqui você encontra nossa equipe mais experiente e nosso maior estoque de uniformes prontos para entrega.
                        </p>
                        <div class="space-y-4">
                            <div class="flex items-start space-x-4">
                                <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-900 mb-1">Endereço</p>
                                    <p class="text-gray-600">Rua Principal, 123 - Centro</p>
                                    <p class="text-gray-600">Cidade - Estado, CEP 00000-000</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-900 mb-1">Telefone</p>
                                    <p class="text-gray-600">(00) 0000-0000</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-900 mb-1">Horário de Funcionamento</p>
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
                        <h3 class="text-3xl font-bold text-gray-900 mb-4">Loja Filial</h3>
                        <p class="text-gray-600 mb-8 leading-relaxed text-lg">
                            Nossa loja filial foi inaugurada para melhor atender nossos clientes em uma região estratégica. Com um ambiente moderno e acolhedor, oferecemos o mesmo padrão de qualidade e atendimento personalizado que caracteriza a Uniflex.
                        </p>
                        <div class="space-y-4">
                            <div class="flex items-start space-x-4">
                                <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-orange-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-900 mb-1">Endereço</p>
                                    <p class="text-gray-600">Av. Comercial, 456 - Bairro Novo</p>
                                    <p class="text-gray-600">Cidade - Estado, CEP 00000-000</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-orange-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-900 mb-1">Telefone</p>
                                    <p class="text-gray-600">(00) 0000-0000</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-orange-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-900 mb-1">Horário de Funcionamento</p>
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

    <!-- Galeria de Fotos - Loja Matriz -->
    <section class="py-24 bg-gradient-to-b from-white to-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <div class="inline-block bg-blue-100 text-blue-700 px-4 py-2 rounded-full text-sm font-semibold mb-6">
                    GALERIA
                </div>
                <h2 class="text-4xl lg:text-5xl font-extrabold text-gray-900 mb-4">Galeria - Loja Matriz</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Conheça nossa loja matriz através das fotos
                </p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                <button onclick="openImageModal('{{ asset('imagem/01.PNG') }}', 'Loja Matriz', 'Nossa loja matriz oferece um amplo espaço de atendimento e exposição de produtos.')" class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all transform hover:scale-105 cursor-pointer">
                    <div class="aspect-square overflow-hidden bg-gradient-to-br from-blue-50 to-gray-100">
                        <img src="{{ asset('imagem/01.PNG') }}" alt="Loja Matriz" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    </div>
                </button>
                <button onclick="openImageModal('{{ asset('imagem/02.PNG') }}', 'Loja Matriz', 'Espaço moderno e acolhedor para melhor atendê-lo.')" class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all transform hover:scale-105 cursor-pointer">
                    <div class="aspect-square overflow-hidden bg-gradient-to-br from-blue-50 to-gray-100">
                        <img src="{{ asset('imagem/02.PNG') }}" alt="Loja Matriz" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    </div>
                </button>
                <button onclick="openImageModal('{{ asset('imagem/05.PNG') }}', 'Loja Matriz', 'Nossa equipe mais experiente está pronta para atendê-lo.')" class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all transform hover:scale-105 cursor-pointer">
                    <div class="aspect-square overflow-hidden bg-gradient-to-br from-blue-50 to-gray-100">
                        <img src="{{ asset('imagem/05.PNG') }}" alt="Loja Matriz" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    </div>
                </button>
                <button onclick="openImageModal('{{ asset('imagem/06.PNG') }}', 'Loja Matriz', 'Maior estoque de uniformes prontos para entrega.')" class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all transform hover:scale-105 cursor-pointer">
                    <div class="aspect-square overflow-hidden bg-gradient-to-br from-blue-50 to-gray-100">
                        <img src="{{ asset('imagem/06.PNG') }}" alt="Loja Matriz" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    </div>
                </button>
                <button onclick="openImageModal('{{ asset('imagem/07.PNG') }}', 'Loja Matriz', 'Localizada no centro da cidade para sua comodidade.')" class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all transform hover:scale-105 cursor-pointer">
                    <div class="aspect-square overflow-hidden bg-gradient-to-br from-blue-50 to-gray-100">
                        <img src="{{ asset('imagem/07.PNG') }}" alt="Loja Matriz" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    </div>
                </button>
                <button onclick="openImageModal('{{ asset('imagem/08.PNG') }}', 'Loja Matriz', 'Ambiente profissional e moderno.')" class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all transform hover:scale-105 cursor-pointer">
                    <div class="aspect-square overflow-hidden bg-gradient-to-br from-blue-50 to-gray-100">
                        <img src="{{ asset('imagem/08.PNG') }}" alt="Loja Matriz" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    </div>
                </button>
            </div>
        </div>
    </section>

    <!-- Galeria de Fotos - Loja Filial -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <div class="inline-block bg-orange-100 text-orange-700 px-4 py-2 rounded-full text-sm font-semibold mb-6">
                    GALERIA
                </div>
                <h2 class="text-4xl lg:text-5xl font-extrabold text-gray-900 mb-4">Galeria - Loja Filial</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Conheça nossa loja filial através das fotos
                </p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                <button onclick="openImageModal('{{ asset('imagem/01.PNG') }}', 'Loja Filial', 'Nossa loja filial em uma região estratégica para melhor atendê-lo.')" class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all transform hover:scale-105 cursor-pointer">
                    <div class="aspect-square overflow-hidden bg-gradient-to-br from-orange-50 to-gray-100">
                        <img src="{{ asset('imagem/01.PNG') }}" alt="Loja Filial" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    </div>
                </button>
                <button onclick="openImageModal('{{ asset('imagem/03.PNG') }}', 'Loja Filial', 'Ambiente moderno e acolhedor com o mesmo padrão de qualidade.')" class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all transform hover:scale-105 cursor-pointer">
                    <div class="aspect-square overflow-hidden bg-gradient-to-br from-orange-50 to-gray-100">
                        <img src="{{ asset('imagem/03.PNG') }}" alt="Loja Filial" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    </div>
                </button>
                <button onclick="openImageModal('{{ asset('imagem/04.PNG') }}', 'Loja Filial', 'Atendimento personalizado que caracteriza a Uniflex.')" class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all transform hover:scale-105 cursor-pointer">
                    <div class="aspect-square overflow-hidden bg-gradient-to-br from-orange-50 to-gray-100">
                        <img src="{{ asset('imagem/04.PNG') }}" alt="Loja Filial" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    </div>
                </button>
                <button onclick="openImageModal('{{ asset('imagem/05.PNG') }}', 'Loja Filial', 'Variedade de produtos e uniformes disponíveis.')" class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all transform hover:scale-105 cursor-pointer">
                    <div class="aspect-square overflow-hidden bg-gradient-to-br from-orange-50 to-gray-100">
                        <img src="{{ asset('imagem/05.PNG') }}" alt="Loja Filial" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    </div>
                </button>
                <button onclick="openImageModal('{{ asset('imagem/07.PNG') }}', 'Loja Filial', 'Espaço amplo para exposição e atendimento.')" class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all transform hover:scale-105 cursor-pointer">
                    <div class="aspect-square overflow-hidden bg-gradient-to-br from-orange-50 to-gray-100">
                        <img src="{{ asset('imagem/07.PNG') }}" alt="Loja Filial" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    </div>
                </button>
                <button onclick="openImageModal('{{ asset('imagem/08.PNG') }}', 'Loja Filial', 'Venha nos visitar e conhecer nossos produtos.')" class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all transform hover:scale-105 cursor-pointer">
                    <div class="aspect-square overflow-hidden bg-gradient-to-br from-orange-50 to-gray-100">
                        <img src="{{ asset('imagem/08.PNG') }}" alt="Loja Filial" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    </div>
                </button>
            </div>
        </div>
    </section>

    <!-- Diferenciais -->
    <section class="py-24 bg-gradient-to-b from-gray-50 to-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-20">
                <div class="inline-block bg-blue-100 text-blue-700 px-4 py-2 rounded-full text-sm font-semibold mb-6">
                    DIFERENCIAIS
                </div>
                <h2 class="text-4xl lg:text-5xl font-extrabold text-gray-900 mb-6">Nossos Diferenciais</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    O que nos torna a melhor escolha para sua empresa
                </p>
            </div>
            <div class="grid md:grid-cols-5 gap-8">
                <div class="group text-center transform hover:scale-110 transition duration-300">
                    <div class="w-20 h-20 bg-gradient-to-br from-blue-100 to-blue-200 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform shadow-lg">
                        <svg class="w-10 h-10 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2 text-lg">Qualidade Superior</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Utilizamos os melhores tecidos e acabamentos.</p>
                </div>
                <div class="group text-center transform hover:scale-110 transition duration-300">
                    <div class="w-20 h-20 bg-gradient-to-br from-orange-100 to-orange-200 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform shadow-lg">
                        <svg class="w-10 h-10 text-orange-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2 text-lg">Atendimento Personalizado</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Soluções sob medida para suas necessidades.</p>
                </div>
                <div class="group text-center transform hover:scale-110 transition duration-300">
                    <div class="w-20 h-20 bg-gradient-to-br from-green-100 to-green-200 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform shadow-lg">
                        <svg class="w-10 h-10 text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2 text-lg">Sustentabilidade</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Compromisso com práticas ambientalmente corretas.</p>
                </div>
                <div class="group text-center transform hover:scale-110 transition duration-300">
                    <div class="w-20 h-20 bg-gradient-to-br from-red-100 to-red-200 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform shadow-lg">
                        <svg class="w-10 h-10 text-red-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2 text-lg">Entrega Rápida</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Agilidade e pontualidade em todos os pedidos.</p>
                </div>
                <div class="group text-center transform hover:scale-110 transition duration-300">
                    <div class="w-20 h-20 bg-gradient-to-br from-purple-100 to-purple-200 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform shadow-lg">
                        <svg class="w-10 h-10 text-purple-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2 text-lg">Experiência</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Mais de 20 anos de tradição e confiança.</p>
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
            <h2 class="text-4xl lg:text-5xl font-extrabold mb-6">Pronto para Trabalhar Conosco?</h2>
            <p class="text-xl mb-10 text-blue-100 max-w-3xl mx-auto leading-relaxed">
                Entre em contato e descubra como podemos transformar a imagem da sua empresa com uniformes profissionais de alta qualidade.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contato') }}" class="group bg-gradient-to-r from-orange-500 to-orange-600 text-white px-10 py-5 rounded-xl hover:from-orange-600 hover:to-orange-700 transition-all font-bold text-lg shadow-2xl hover:shadow-orange-500/50 transform hover:scale-105 inline-flex items-center justify-center gap-2">
                    Solicitar Orçamento
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
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

    <script>
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
