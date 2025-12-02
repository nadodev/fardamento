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
                <a href="{{ route('sobre') }}" class="text-[#002164] font-semibold relative">
                    Sobre Nós
                    <span class="absolute bottom-0 left-0 w-full h-0.5 bg-[#002164]"></span>
                </a>
                <a href="{{ route('produtos') }}" class="text-[#002164] hover:text-[#002164]/80 transition-colors font-medium relative group">
                    Produtos
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#002164] group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="{{ route('contato') }}" class="text-[#002164] hover:text-[#002164]/80 transition-colors font-medium relative group">
                    Contato
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#002164] group-hover:w-full transition-all duration-300"></span>
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
                <a href="{{ route('sobre') }}" class="block py-3 px-4 text-[#002164] bg-[#002164]/10 rounded-lg font-semibold">
                    Sobre Nós
                </a>
                <a href="{{ route('produtos') }}" class="block py-3 px-4 text-[#002164] hover:text-[#002164]/80 hover:bg-[#002164]/10 rounded-lg transition-colors font-medium">
                    Produtos
                </a>
                <a href="{{ route('contato') }}" class="block py-3 px-4 text-[#002164] hover:text-[#002164]/80 hover:bg-[#002164]/10 rounded-lg transition-colors font-medium">
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
                <div class="inline-flex items-center gap-2 bg-[#002164]/20 backdrop-blur-md px-5 py-2.5 rounded-full text-sm font-semibold border border-[#002164]/30 mb-8">
                    <svg class="w-4 h-4 text-[#002164]" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    MAIS DE 17 ANOS DE EXCELÊNCIA
                </div>
                <h1 class="text-3xl lg:text-4xl font-extrabold leading-tight mb-4 text-[#002164]">
                    Sobre a <span class="text-[#002164]">Fábrica de Fardamentos</span>
                </h1>
                <p class="text-base lg:text-lg text-[#002164]/90 leading-relaxed max-w-3xl mx-auto">
                    Conheça nossa história, valores e o compromisso que nos torna referência em uniformes profissionais no Brasil.
                </p>
            </div>
        </div>
    </section>

    <!-- Nossa História -->
    <section class="py-24 bg-white border-t-4 border-[#E6C000]">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <div class="inline-block bg-[#002164]/20 text-[#002164] px-4 py-2 rounded-full text-sm font-semibold mb-6">
                        NOSSA HISTÓRIA
                    </div>
                    <h2 class="text-2xl lg:text-3xl font-extrabold text-[#002164] mb-4 leading-tight">Mais de 17 Anos de Tradição e Excelência</h2>
                    <p class="text-base lg:text-lg text-[#002164]/80 mb-4 leading-relaxed">
                        Desde 2007, a Fábrica de Fardamentos fornece soluções completas em uniformes profissionais, sempre priorizando o melhor custo-benefício para nossos clientes. 
                        Nossa trajetória é marcada pelo compromisso com a qualidade, inovação e satisfação de empresas de todos os portes.
                    </p>
                    <p class="text-base lg:text-lg text-[#002164]/80 mb-4 leading-relaxed">
                        Atendemos sob encomenda tanto no atacado quanto no varejo, oferecendo flexibilidade e personalização para atender às necessidades específicas de cada cliente. 
                        Além disso, contamos com loja física com pronta entrega, garantindo agilidade quando você precisa de uniformes imediatamente.
                    </p>
                    <p class="text-base lg:text-lg text-[#002164]/80 mb-6 leading-relaxed">
                        Nossa experiência de mais de 17 anos no mercado, combinada com duas lojas estrategicamente localizadas, nos permite oferecer atendimento personalizado e soluções sob medida. 
                        Cada uniforme que produzimos reflete nosso compromisso com a excelência e a dedicação de nossa equipe. Solicite um orçamento e descubra como podemos transformar a imagem da sua empresa!
                    </p>
                    <a href="{{ route('contato') }}" class="inline-flex items-center gap-2 bg-[#002164] text-[#FFD217] px-6 py-3 rounded-xl hover:bg-[#002164]/90 transition-all font-semibold text-sm lg:text-base shadow-xl hover:shadow-2xl transform hover:scale-105">
                        Entre em Contato
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                </div>
                <div class="hidden lg:block relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-[#FFD217]/35 via-[#FFD217]/15 to-transparent rounded-3xl blur-3xl transform -rotate-6"></div>
                    <div class="relative">
                        <div class="absolute -inset-4 bg-gradient-to-r from-[#FFD217] via-[#FFD217]/70 to-transparent rounded-3xl opacity-40 blur-2xl"></div>
                        <img src="{{ asset('imagem/06.PNG') }}" alt="Nossa História" class="relative rounded-3xl shadow-2xl transform hover:scale-105 transition duration-700 border-4 border-white/10">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Missão, Visão e Valores -->
    <section class="py-24 bg-white border-t-4 border-[#E6C000]">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <div class="inline-block bg-[#002164]/20 text-[#002164] px-4 py-2 rounded-full text-xs sm:text-sm font-semibold mb-4">
                    NOSSA IDENTIDADE
                </div>
                <h2 class="text-2xl lg:text-3xl font-extrabold text-[#002164] mb-3">Missão, Visão e Valores</h2>
                <p class="text-base lg:text-lg text-[#002164]/80 max-w-3xl mx-auto leading-relaxed">
                    Os pilares que guiam nosso trabalho e definem nosso compromisso com a excelência
                </p>
            </div>
            <div class="grid md:grid-cols-3 gap-10">
                <div class="group bg-white rounded-2xl p-10 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 border border-[#002164]/20">
                    <div class="w-20 h-20 bg-[#002164]/20 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform shadow-lg">
                        <svg class="w-10 h-10 text-[#002164]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-[#002164] mb-3 text-center">Missão</h3>
                    <p class="text-[#002164]/80 text-center leading-relaxed text-lg">Oferecer uniformes que unam funcionalidade, conforto e estilo, superando as expectativas de nossos clientes através da qualidade e inovação.</p>
                </div>
                <div class="group bg-white rounded-2xl p-10 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 border border-[#002164]/20">
                    <div class="w-20 h-20 bg-[#002164]/20 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform shadow-lg">
                        <svg class="w-10 h-10 text-[#002164]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-[#002164] mb-3 text-center">Visão</h3>
                    <p class="text-[#002164]/80 text-center leading-relaxed text-lg">Ser referência no mercado de uniformes profissionais, reconhecida pela inovação, qualidade e compromisso com a satisfação do cliente.</p>
                </div>
                <div class="group bg-white rounded-2xl p-10 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 border border-[#002164]/20">
                    <div class="w-20 h-20 bg-[#002164]/20 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform shadow-lg">
                        <svg class="w-10 h-10 text-[#002164]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-[#002164] mb-3 text-center">Valores</h3>
                    <p class="text-[#002164]/80 text-center leading-relaxed text-lg">Integridade, respeito, compromisso com a qualidade, sustentabilidade e valorização das pessoas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Nossas Lojas -->
    <section class="py-24 bg-white border-t-4 border-[#E6C000]">
        <div class="container mx-auto px-4">
            <div class="text-center mb-20">
                <div class="inline-block bg-[#002164]/20 text-[#002164] px-4 py-2 rounded-full text-sm font-semibold mb-6">
                    NOSSAS UNIDADES
                </div>
                <h2 class="text-2xl lg:text-3xl font-extrabold text-[#002164] mb-4">Nossas Lojas</h2>
                <p class="text-base lg:text-lg text-[#002164]/80 max-w-3xl mx-auto leading-relaxed">
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
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Loja Matriz</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed text-base lg:text-lg">
                            Nossa loja matriz é o coração da Fábrica de Fardamentos. Localizada no centro da cidade, oferece um amplo espaço de atendimento e exposição de produtos. Aqui você encontra nossa equipe mais experiente e nosso maior estoque de uniformes prontos para entrega.
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
                                    <p class="text-gray-600">Av. Dr Júlio Maranhão, 7, Guararapes</p>
                                    <p class="text-gray-600">Jaboatão dos Guararapes-PE, CEP 54325-440</p>
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
                                    <p class="text-gray-600">(81) 3074-2933</p>
                                    <p class="text-gray-600">(81) 97910-6667</p>
                                    <p class="text-gray-600">fabricadefardamentos@gmail.com</p>
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
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Loja Filial</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed text-base lg:text-lg">
                            Nossa loja filial foi inaugurada para melhor atender nossos clientes em uma região estratégica. Com um ambiente moderno e acolhedor, oferecemos o mesmo padrão de qualidade e atendimento personalizado que caracteriza a Fábrica de Fardamentos.
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
                                    <p class="text-gray-600">Estrada do Rufino, 850, Serraria</p>
                                    <p class="text-gray-600">Diadema-SP, CEP 09980-380</p>
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
                                    <p class="text-gray-600">(11) 4057-3202</p>
                                    <p class="text-gray-600">(11) 94211-0729</p>
                                    <p class="text-gray-600">fabricadefardamentossp@gmail.com</p>
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

    <!-- Galeria de Fotos por Loja -->
    <section class="py-24 bg-[#002164] text-[#FFD217] border-t-4 border-[#E6C000] relative overflow-hidden">
        <!-- Background Effects -->
        <div class="absolute inset-0">
            <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-[#FFD217]/5 rounded-full -translate-y-1/2 translate-x-1/2 blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-[#FFD217]/5 rounded-full translate-y-1/2 -translate-x-1/2 blur-3xl"></div>
        </div>
        
        <div class="container mx-auto px-4 relative z-10">
            @php
                $galeriaSP = [
                    ['img' => '1.jpg', 'titulo' => 'Loja São Paulo', 'descricao' => 'Nossa unidade em São Paulo com fachada moderna e acolhedora'],
                    ['img' => '2.jpg', 'titulo' => 'Loja São Paulo', 'descricao' => 'Amplo espaço interno com exposição organizada'],
                    ['img' => '3.jpg', 'titulo' => 'Loja São Paulo', 'descricao' => 'Variedade completa de uniformes profissionais'],
                    ['img' => '4.jpg', 'titulo' => 'Loja São Paulo', 'descricao' => 'Showroom moderno e bem organizado'],
                ];
                
                $galeriaPE = [
                    ['img' => 'pernanbuco/1.jpg', 'titulo' => 'Loja Pernambuco', 'descricao' => 'Nossa unidade em Pernambuco com estrutura completa'],
                    ['img' => 'pernanbuco/2.jpg', 'titulo' => 'Loja Pernambuco', 'descricao' => 'Detalhes da nossa loja em Pernambuco'],
                    ['img' => 'pernanbuco/3.jpg', 'titulo' => 'Loja Pernambuco', 'descricao' => 'Vitrine com exposição de produtos'],
                    ['img' => 'pernanbuco/4.jpg', 'titulo' => 'Loja Pernambuco', 'descricao' => 'Espaço interno organizado para melhor atendimento'],
                    ['img' => 'pernanbuco/5.jpg', 'titulo' => 'Loja Pernambuco', 'descricao' => 'Ampla variedade de uniformes e EPI\'s'],
                    ['img' => 'pernanbuco/6.jpg', 'titulo' => 'Loja Pernambuco', 'descricao' => 'Diversos modelos de uniformes profissionais'],
                    ['img' => 'pernanbuco/7.jpg', 'titulo' => 'Loja Pernambuco', 'descricao' => 'Equipamentos de proteção individual de alta qualidade'],
                    ['img' => 'pernanbuco/8.jpg', 'titulo' => 'Loja Pernambuco', 'descricao' => 'Ambiente confortável e bem iluminado'],
                    ['img' => 'pernanbuco/9.jpg', 'titulo' => 'Loja Pernambuco', 'descricao' => 'Exposição de peças e uniformes personalizados'],
                    ['img' => 'pernanbuco/10.jpg', 'titulo' => 'Loja Pernambuco', 'descricao' => 'Equipe preparada para melhor atender você'],
                    ['img' => 'pernanbuco/11.jpg', 'titulo' => 'Loja Pernambuco', 'descricao' => 'Visão geral da loja de Pernambuco'],
                ];
                
                $galeriaCompleta = array_merge($galeriaSP, $galeriaPE);
            @endphp

            <!-- Loja São Paulo -->
            <div class="mb-16">
                <div class="flex items-center gap-4 mb-8">
                    <div class="h-1 flex-1 bg-[#FFD217]/30"></div>
                    <div class="text-center">
                        <div class="inline-block bg-[#FFD217]/20 text-[#FFD217] px-6 py-2 rounded-full text-sm font-semibold mb-3 border border-[#FFD217]/30">
                            LOJA SÃO PAULO
                        </div>
                        <h3 class="text-3xl lg:text-4xl font-extrabold text-[#FFD217]">Nossa Unidade em São Paulo</h3>
                    </div>
                    <div class="h-1 flex-1 bg-[#FFD217]/30"></div>
                </div>

                <!-- Informações da Unidade São Paulo -->
                <div class="mb-6 text-center text-sm text-[#FFD217]/90 space-y-1">
                    <p><span class="font-semibold">Endereço:</span> Estrada do Rufino, 850, Serraria, Diadema-SP, CEP 09980-380.</p>
                    <p><span class="font-semibold">Fone:</span> (11) 4057-3202 &nbsp; | &nbsp; <span class="font-semibold">WhatsApp:</span> (11) 94211-0729</p>
                    <p>
                        <span class="font-semibold">Instagram:</span>
                        <a href="https://instagram.com/fabricadefardamentossp" target="_blank" class="underline hover:text-[#FFD217]">@fabricadefardamentossp</a>
                        &nbsp; | &nbsp;
                        <span class="font-semibold">E-mail:</span>
                        <a href="mailto:fabricadefardamentossp@gmail.com" class="underline hover:text-[#FFD217]">fabricadefardamentossp@gmail.com</a>
                    </p>
                </div>
                
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach($galeriaSP as $index => $foto)
                        <div class="group cursor-pointer" onclick="openGalleryModal({{ $index }})">
                            <div class="relative h-72 rounded-2xl overflow-hidden shadow-xl transform hover:scale-105 transition-all duration-500 border-2 border-[#FFD217]/20 hover:border-[#FFD217]">
                                <img src="{{ asset('imagem/' . $foto['img']) }}" alt="{{ $foto['titulo'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#002164]/90 via-[#002164]/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                    <div class="absolute bottom-0 left-0 right-0 p-5">
                                        <h4 class="text-lg font-bold text-[#FFD217] mb-1">{{ $foto['titulo'] }}</h4>
                                        <p class="text-sm text-[#FFD217]/90">{{ $foto['descricao'] }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Loja Pernambuco -->
            <div class="mb-12">
                <div class="flex items-center gap-4 mb-8">
                    <div class="h-1 flex-1 bg-[#FFD217]/30"></div>
                    <div class="text-center">
                        <div class="inline-block bg-[#FFD217]/20 text-[#FFD217] px-6 py-2 rounded-full text-sm font-semibold mb-3 border border-[#FFD217]/30">
                            LOJA PERNAMBUCO
                        </div>
                        <h3 class="text-3xl lg:text-4xl font-extrabold text-[#FFD217]">Nossa Unidade em Pernambuco</h3>
                    </div>
                    <div class="h-1 flex-1 bg-[#FFD217]/30"></div>
                </div>

                <!-- Informações da Unidade Pernambuco -->
                <div class="mb-6 text-center text-sm text-[#FFD217]/90 space-y-1">
                    <p><span class="font-semibold">Endereço:</span> Av. Dr Júlio Maranhão, 7, Guararapes, Jaboatão dos Guararapes-PE, CEP 54325-440.</p>
                    <p><span class="font-semibold">Fone:</span> (81) 3074-2933 &nbsp; | &nbsp; <span class="font-semibold">WhatsApp:</span> (81) 97910-6667</p>
                    <p>
                        <span class="font-semibold">Instagram:</span>
                        <a href="https://instagram.com/fabricadefardamentos" target="_blank" class="underline hover:text-[#FFD217]">@fabricadefardamentos</a>
                        &nbsp; | &nbsp;
                        <span class="font-semibold">E-mail:</span>
                        <a href="mailto:fabricadefardamentos@gmail.com" class="underline hover:text-[#FFD217]">fabricadefardamentos@gmail.com</a>
                    </p>
                </div>
                
                <div id="carousel-pe" class="relative">
                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                        @foreach($galeriaPE as $index => $foto)
                            @php
                                $globalIndex = count($galeriaSP) + $index;
                            @endphp
                            <div class="group cursor-pointer pe-slide hidden" data-pe-index="{{ $index }}" onclick="openGalleryModal({{ $globalIndex }})">
                                <div class="relative h-72 rounded-2xl overflow-hidden shadow-xl transform hover:scale-105 transition-all duration-500 border-2 border-[#FFD217]/20 hover:border-[#FFD217]">
                                    <img src="{{ asset('imagem/' . $foto['img']) }}" alt="{{ $foto['titulo'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                    <div class="absolute inset-0 bg-gradient-to-t from-[#002164]/90 via-[#002164]/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                        <div class="absolute bottom-0 left-0 right-0 p-5">
                                            <h4 class="text-lg font-bold text-[#FFD217] mb-1">{{ $foto['titulo'] }}</h4>
                                            <p class="text-sm text-[#FFD217]/90">{{ $foto['descricao'] }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Controles do carrossel -->
                    <button type="button" class="hidden md:flex absolute -left-4 top-1/2 -translate-y-1/2 w-9 h-9 rounded-full bg-[#FFD217]/80 text-[#002164] items-center justify-center shadow-lg hover:bg-[#FFD217] transition" data-pe-prev>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                    </button>
                    <button type="button" class="hidden md:flex absolute -right-4 top-1/2 -translate-y-1/2 w-9 h-9 rounded-full bg-[#FFD217]/80 text-[#002164] items-center justify-center shadow-lg hover:bg-[#FFD217] transition" data-pe-next>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>

                    <div id="pe-dots" class="flex items-center justify-center gap-2 mt-6">
                        <!-- bolinhas geradas via JS -->
                    </div>
                </div>
            </div>

            <!-- Modal Lightbox -->
            <div id="gallery-modal" class="fixed inset-0 z-50 hidden items-center justify-center p-4 bg-black/95 backdrop-blur-sm">
                <button onclick="closeGalleryModal()" class="absolute top-4 right-4 p-3 bg-[#FFD217]/20 hover:bg-[#FFD217]/30 rounded-full transition-colors backdrop-blur-sm z-10">
                    <svg class="w-6 h-6 text-[#FFD217]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
                
                <button onclick="previousImage()" class="absolute left-4 top-1/2 -translate-y-1/2 p-3 bg-[#FFD217]/20 hover:bg-[#FFD217]/30 rounded-full transition-colors backdrop-blur-sm z-10">
                    <svg class="w-6 h-6 text-[#FFD217]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                
                <button onclick="nextImage()" class="absolute right-4 top-1/2 -translate-y-1/2 p-3 bg-[#FFD217]/20 hover:bg-[#FFD217]/30 rounded-full transition-colors backdrop-blur-sm z-10">
                    <svg class="w-6 h-6 text-[#FFD217]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>

                <div class="max-w-6xl w-full">
                    <img id="gallery-modal-img" src="" alt="" class="w-full h-auto rounded-2xl shadow-2xl mb-4 max-h-[85vh] object-contain mx-auto">
                    <div class="bg-[#FFD217]/10 backdrop-blur-md rounded-xl p-6 text-center border border-[#FFD217]/20">
                        <h3 id="gallery-modal-title" class="text-2xl font-bold text-[#FFD217] mb-2"></h3>
                        <p id="gallery-modal-description" class="text-[#FFD217]/90 text-lg"></p>
                        <p id="gallery-modal-counter" class="text-[#FFD217]/70 text-sm mt-2"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Diferenciais -->
    <section class="py-24 bg-white border-t-4 border-[#E6C000]">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <div class="inline-block bg-[#002164]/20 text-[#002164] px-4 py-2 rounded-full text-xs sm:text-sm font-semibold mb-4">
                    DIFERENCIAIS
                </div>
                <h2 class="text-xl lg:text-2xl font-extrabold text-[#002164] mb-3">Nossos Diferenciais</h2>
                <p class="text-sm lg:text-base text-[#002164]/80 max-w-3xl mx-auto leading-relaxed">
                    O que nos torna a melhor escolha para sua empresa
                </p>
            </div>
            <div class="grid md:grid-cols-5 gap-8">
                <div class="group text-center transform hover:scale-110 transition duration-300">
                    <div class="w-20 h-20 bg-[#002164]/20 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform shadow-lg">
                        <svg class="w-10 h-10 text-[#002164]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-[#002164] mb-2 text-lg">Qualidade Superior</h3>
                    <p class="text-[#002164]/80 text-sm leading-relaxed">Utilizamos os melhores tecidos e acabamentos.</p>
                </div>
                <div class="group text-center transform hover:scale-110 transition duration-300">
                    <div class="w-20 h-20 bg-[#002164]/20 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform shadow-lg">
                        <svg class="w-10 h-10 text-[#002164]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-[#002164] mb-2 text-lg">Atendimento Personalizado</h3>
                    <p class="text-[#002164]/80 text-sm leading-relaxed">Soluções sob medida para suas necessidades.</p>
                </div>
                <div class="group text-center transform hover:scale-110 transition duration-300">
                    <div class="w-20 h-20 bg-[#002164]/20 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform shadow-lg">
                        <svg class="w-10 h-10 text-[#002164]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-[#002164] mb-2 text-lg">Sustentabilidade</h3>
                    <p class="text-[#002164]/80 text-sm leading-relaxed">Compromisso com práticas ambientalmente corretas.</p>
                </div>
                <div class="group text-center transform hover:scale-110 transition duration-300">
                    <div class="w-20 h-20 bg-[#002164]/20 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform shadow-lg">
                        <svg class="w-10 h-10 text-[#002164]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-[#002164] mb-2 text-lg">Entrega Rápida</h3>
                    <p class="text-[#002164]/80 text-sm leading-relaxed">Agilidade e pontualidade em todos os pedidos.</p>
                </div>
                <div class="group text-center transform hover:scale-110 transition duration-300">
                    <div class="w-20 h-20 bg-[#002164]/20 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform shadow-lg">
                        <svg class="w-10 h-10 text-[#002164]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-[#002164] mb-2 text-lg">Experiência</h3>
                    <p class="text-[#002164]/80 text-sm leading-relaxed">Mais de 20 anos de tradição e confiança.</p>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.footer')


    <script>
        // Gallery Modal Functions
        const galleryImages = [
            // Loja São Paulo
            {img: '{{ asset("imagem/1.jpg") }}', titulo: 'Loja São Paulo', descricao: 'Nossa unidade em São Paulo com fachada moderna e acolhedora'},
            {img: '{{ asset("imagem/2.jpg") }}', titulo: 'Loja São Paulo', descricao: 'Amplo espaço interno com exposição organizada'},
            {img: '{{ asset("imagem/3.jpg") }}', titulo: 'Loja São Paulo', descricao: 'Variedade completa de uniformes profissionais'},
            {img: '{{ asset("imagem/4.jpg") }}', titulo: 'Loja São Paulo', descricao: 'Showroom moderno e bem organizado'},
            // Loja Pernambuco (carrossel com novas imagens)
            {img: '{{ asset("imagem/pernanbuco/1.jpg") }}', titulo: 'Loja Pernambuco', descricao: 'Nossa unidade em Pernambuco com estrutura completa'},
            {img: '{{ asset("imagem/pernanbuco/2.jpg") }}', titulo: 'Loja Pernambuco', descricao: 'Detalhes da nossa loja em Pernambuco'},
            {img: '{{ asset("imagem/pernanbuco/3.jpg") }}', titulo: 'Loja Pernambuco', descricao: 'Vitrine com exposição de produtos'},
            {img: '{{ asset("imagem/pernanbuco/4.jpg") }}', titulo: 'Loja Pernambuco', descricao: 'Espaço interno organizado para melhor atendimento'},
            {img: '{{ asset("imagem/pernanbuco/5.jpg") }}', titulo: 'Loja Pernambuco', descricao: 'Ampla variedade de uniformes e EPI\'s'},
            {img: '{{ asset("imagem/pernanbuco/6.jpg") }}', titulo: 'Loja Pernambuco', descricao: 'Diversos modelos de uniformes profissionais'},
            {img: '{{ asset("imagem/pernanbuco/7.jpg") }}', titulo: 'Loja Pernambuco', descricao: 'Equipamentos de proteção individual de alta qualidade'},
            {img: '{{ asset("imagem/pernanbuco/8.jpg") }}', titulo: 'Loja Pernambuco', descricao: 'Ambiente confortável e bem iluminado'},
            {img: '{{ asset("imagem/pernanbuco/9.jpg") }}', titulo: 'Loja Pernambuco', descricao: 'Exposição de peças e uniformes personalizados'},
            {img: '{{ asset("imagem/pernanbuco/10.jpg") }}', titulo: 'Loja Pernambuco', descricao: 'Equipe preparada para melhor atender você'},
            {img: '{{ asset("imagem/pernanbuco/11.jpg") }}', titulo: 'Loja Pernambuco', descricao: 'Visão geral da loja de Pernambuco'},
        ];
        let currentImageIndex = 0;

        function openGalleryModal(index) {
            currentImageIndex = index;
            updateGalleryModal();
            document.getElementById('gallery-modal').classList.remove('hidden');
            document.getElementById('gallery-modal').classList.add('flex');
            document.body.style.overflow = 'hidden';
        }

        function closeGalleryModal() {
            document.getElementById('gallery-modal').classList.add('hidden');
            document.getElementById('gallery-modal').classList.remove('flex');
            document.body.style.overflow = '';
        }

        function updateGalleryModal() {
            const image = galleryImages[currentImageIndex];
            document.getElementById('gallery-modal-img').src = image.img;
            document.getElementById('gallery-modal-img').alt = image.titulo;
            document.getElementById('gallery-modal-title').textContent = image.titulo;
            document.getElementById('gallery-modal-description').textContent = image.descricao;
            document.getElementById('gallery-modal-counter').textContent = `${currentImageIndex + 1} / ${galleryImages.length}`;
        }

        function nextImage() {
            currentImageIndex = (currentImageIndex + 1) % galleryImages.length;
            updateGalleryModal();
        }

        function previousImage() {
            currentImageIndex = (currentImageIndex - 1 + galleryImages.length) % galleryImages.length;
            updateGalleryModal();
        }

        // Carrossel Loja Pernambuco (mostra sempre 4 imagens, com setas e bolinhas, só manual)
        document.addEventListener('DOMContentLoaded', function () {
            const peSlides = Array.from(document.querySelectorAll('.pe-slide'));
            const visibleCount = 4;
            const prevButton = document.querySelector('[data-pe-prev]');
            const nextButton = document.querySelector('[data-pe-next]');
            const dotsContainer = document.getElementById('pe-dots');

            if (peSlides.length > visibleCount) {
                const pageCount = Math.ceil(peSlides.length / visibleCount);
                let currentPage = 0;

                function showPage(pageIndex) {
                    currentPage = (pageIndex + pageCount) % pageCount;
                    peSlides.forEach((slide, index) => {
                        const slidePage = Math.floor(index / visibleCount);
                        const inRange = slidePage === currentPage;
                        slide.classList.toggle('hidden', !inRange);
                    });

                    if (dotsContainer) {
                        const dots = dotsContainer.querySelectorAll('[data-pe-dot]');
                        dots.forEach((dot, idx) => {
                            dot.classList.toggle('bg-[#FFD217]', idx === currentPage);
                            dot.classList.toggle('bg-[#FFD217]/40', idx !== currentPage);
                        });
                    }
                }

                function nextPage() {
                    showPage(currentPage + 1);
                }

                // Criar bolinhas
                if (dotsContainer) {
                    dotsContainer.innerHTML = '';
                    for (let i = 0; i < pageCount; i++) {
                        const dot = document.createElement('button');
                        dot.type = 'button';
                        dot.setAttribute('data-pe-dot', i.toString());
                        dot.className =
                            'w-2.5 h-2.5 rounded-full bg-[#FFD217]/40 hover:bg-[#FFD217] transition-colors';
                        dot.addEventListener('click', function () {
                            showPage(i);
                        });
                        dotsContainer.appendChild(dot);
                    }
                }

                // Setas
                function attachArrow(button, direction) {
                    if (!button) {
                        return;
                    }
                    button.addEventListener('click', function () {
                        if (direction === 'next') {
                            nextPage();
                        } else {
                            showPage(currentPage - 1);
                        }
                    });
                }

                attachArrow(prevButton, 'prev');
                attachArrow(nextButton, 'next');

                // Estado inicial
                showPage(0);
            }
        });

        // Keyboard navigation
        document.addEventListener('keydown', function(e) {
            const modal = document.getElementById('gallery-modal');
            if (!modal.classList.contains('hidden')) {
                if (e.key === 'Escape') {
                    closeGalleryModal();
                } else if (e.key === 'ArrowRight') {
                    nextImage();
                } else if (e.key === 'ArrowLeft') {
                    previousImage();
                }
            }
        });

        // Close modal when clicking outside
        document.getElementById('gallery-modal')?.addEventListener('click', function(e) {
            if (e.target === this) {
                closeGalleryModal();
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
