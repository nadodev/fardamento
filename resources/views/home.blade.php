@extends('layouts.app')

@section('content')
    <!-- Header -->
    <header class="bg-[#FFD217]/95 backdrop-blur-sm shadow-sm sticky top-0 z-50 border-b border-[#002164]/20">
        <nav class="container mx-auto px-4 py-3 md:py-4 flex items-center justify-between">
            <a href="{{ route('home') }}" class="flex items-center space-x-2 md:space-x-3 group">
                <img src="{{ asset('imagem/logo.png') }}" alt="Fábrica de Fardamento" class="h-10 md:h-14 w-auto group-hover:scale-105 transition-transform">
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
                <a href="{{ route('sobre') }}" class="block py-3 px-4 text-[#002164] hover:text-[#002164]/80 hover:bg-[#002164]/10 rounded-lg transition-colors font-medium">
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
    <section id="inicio" class="relative bg-white text-[#002164] py-32 overflow-hidden">
        <!-- Background Effects -->
        <div class="absolute inset-0">
            <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-white/5 rounded-full -translate-y-1/2 translate-x-1/2 blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-orange-500/10 rounded-full translate-y-1/2 -translate-x-1/2 blur-3xl"></div>
            <div class="absolute top-1/2 left-1/2 w-[400px] h-[400px] bg-blue-400/5 rounded-full -translate-x-1/2 -translate-y-1/2 blur-3xl"></div>
        </div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="space-y-8">
                    <div class="inline-flex items-center gap-2 bg-[#002164]/20 backdrop-blur-md px-3 py-1.5 rounded-full text-[10px] sm:text-xs font-semibold border border-[#002164]/30">
                        <svg class="w-4 h-4 text-[#002164]" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        EXCELÊNCIA DESDE 2007
                    </div>
                    <h1 class="text-3xl lg:text-4xl font-extrabold leading-tight text-[#002164]">
                        Uniformes Profissionais de <span class="text-[#002164]">Alta Qualidade</span>
                    </h1>
                    <p class="text-base lg:text-lg text-[#002164]/90 leading-relaxed max-w-2xl">
                        Transforme a identidade da sua equipe com uniformes personalizados. Capricho e comprometimento em cada peça, atendendo empresas em todo o Brasil.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 pt-4">
                        <a href="{{ route('contato') }}" class="group bg-[#002164] text-[#FFD217] px-10 py-5 rounded-xl hover:bg-[#002164]/90 transition-all font-bold text-lg shadow-2xl hover:shadow-[#002164]/50 transform hover:scale-105 inline-flex items-center justify-center gap-2">
                            Solicitar Orçamento
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </a>
                        <a href="{{ route('sobre') }}" class="bg-[#002164]/10 backdrop-blur-md text-[#002164] px-10 py-5 rounded-xl hover:bg-[#002164]/20 transition-all font-semibold text-lg border-2 border-[#002164]/30 hover:border-[#002164]/50 inline-flex items-center justify-center">
                            Conheça Nossa História
                        </a>
                    </div>
                </div>
                <div class="hidden lg:block relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-orange-500/30 to-blue-500/30 rounded-3xl blur-3xl transform rotate-6 animate-pulse"></div>
                    <div class="relative">
                        <div class="absolute -inset-4 bg-gradient-to-r from-blue-600 to-orange-500 rounded-3xl opacity-20 blur-2xl"></div>
                        <img src="{{ asset('imagem/01.PNG') }}" alt="Uniformes Profissionais" class="relative rounded-3xl shadow-2xl transform hover:scale-105 transition duration-700 border-4 border-white/10">
                    </div>
                </div>
            </div>
        </div>
    </section>
 <!-- Produtos -->
 <section id="produtos" class="py-24 bg-white border-t-4 border-[#E6C000]">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <div class="inline-block bg-[#002164]/20 text-[#002164] px-4 py-2 rounded-full text-xs sm:text-sm font-semibold mb-4">
                NOSSOS PRODUTOS
            </div>
            <h2 class="text-3xl lg:text-4xl font-extrabold text-[#002164] mb-4">Nossos Produtos</h2>
            <p class="text-lg text-[#002164]/80 max-w-2xl mx-auto">Explore nossa linha completa de uniformes profissionais</p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
            @forelse($produtos as $produto)
                <a href="{{ route('produto.detalhes', $produto->slug) }}" class="group relative overflow-hidden rounded-2xl shadow-xl hover:shadow-2xl transition-all transform hover:scale-105">
                    <div class="aspect-square overflow-hidden bg-[#FFD217]">
                        @php
                            $primeiraFoto = $produto->primeira_foto;
                            $imagemUrl = $primeiraFoto ? $primeiraFoto->url : null;
                            if (!$imagemUrl) {
                                $imagens = [
                                    'uniformes-sociais' => '02.PNG',
                                    'epis' => '03.PNG',
                                    'saude-beleza' => '04.PNG',
                                    'personalizados' => '05.PNG',
                                ];
                                $imagem = $imagens[$produto->slug] ?? '02.PNG';
                                $imagemUrl = asset('imagem/' . $imagem);
                            }
                        @endphp
                        <img src="{{ $imagemUrl }}" alt="{{ $produto->nome }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-[#002164]/90 via-[#002164]/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col items-center justify-end p-6">
                        <p class="text-[#FFD217] font-semibold text-lg transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500 mb-2">{{ $produto->nome }}</p>
                        <p class="text-[#FFD217]/90 text-sm transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500 delay-75">Código: {{ $produto->codigo }}</p>
                    </div>
                </a>
            @empty
                <div class="col-span-4 text-center py-12 text-[#002164]/60">
                    Nenhum produto disponível no momento.
                </div>
            @endforelse
        </div>
        <div class="text-center">
            <a href="{{ route('produtos') }}" class="inline-flex items-center bg-[#002164] text-[#FFD217] px-10 py-5 rounded-xl hover:bg-[#002164]/90 transition-all font-bold text-lg shadow-2xl hover:shadow-[#002164]/50 transform hover:scale-105 gap-2">
                Ver Todos os Produtos
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                </svg>
            </a>
        </div>
    </div>
</section>
    <!-- Sobre a Empresa -->
    <section class="py-24 bg-[#002164] text-[#FFD217] border-t-4 border-[#E6C000] relative overflow-hidden">
        <!-- Background Effects -->
        <div class="absolute inset-0">
            <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-[#FFD217]/5 rounded-full -translate-y-1/2 translate-x-1/2 blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-[#FFD217]/5 rounded-full translate-y-1/2 -translate-x-1/2 blur-3xl"></div>
        </div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-14">
                <div class="inline-block bg-[#FFD217]/20 text-[#FFD217] px-4 py-2 rounded-full text-xs sm:text-sm font-semibold mb-4 border border-[#FFD217]/30">
                    CONHEÇA NOSSAS LOJAS
                </div>
                <h2 class="text-3xl lg:text-4xl font-extrabold mb-4">Fábrica de Fardamentos</h2>
                <p class="text-lg lg:text-xl text-[#FFD217]/90 max-w-4xl mx-auto leading-relaxed mb-6">
                    Atendemos com diversas unidades para oferecer praticidade e proximidade para a sua empresa.
                </p>
            </div>

            @php
                // Matriz sempre primeiro, depois as demais empresas
                $empresasOrdenadas = $empresas->sortBy(function ($empresa) {
                    return $empresa->tipo === 'matriz' ? 0 : 1;
                })->values();

                $startIndex = 0;
            @endphp

            @foreach($empresasOrdenadas as $empresa)
                <div class="mb-12">
                    <div class="flex items-center gap-4 mb-8">
                        <div class="h-1 flex-1 bg-[#FFD217]/30"></div>
                        <div class="text-center">
                            <div class="inline-block bg-[#FFD217]/20 text-[#FFD217] px-6 py-2 rounded-full text-sm font-semibold mb-3 border border-[#FFD217]/30">
                                {{ strtoupper($empresa->tipo) }}
                            </div>
                            <h3 class="text-3xl lg:text-4xl font-extrabold text-[#FFD217]">{{ $empresa->nome }}</h3>
                        </div>
                        <div class="h-1 flex-1 bg-[#FFD217]/30"></div>
                    </div>

                    @if($empresa->fotos->isNotEmpty())
                        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                            @foreach($empresa->fotos->take(4) as $index => $foto)
                                @php
                                    $globalIndex = $startIndex + $index;
                                    $caminhoFoto = $foto->caminho;
                                    if (!str_starts_with($caminhoFoto, 'storage/') && !str_starts_with($caminhoFoto, 'http://') && !str_starts_with($caminhoFoto, 'https://')) {
                                        $caminhoFoto = 'storage/' . ltrim($caminhoFoto, '/');
                                    }
                                @endphp
                                <div class="group cursor-pointer" onclick="openGalleryModal({{ $globalIndex }})">
                                    <div class="relative h-72 rounded-2xl overflow-hidden shadow-xl transform hover:scale-105 transition-all duration-500 border-2 border-[#FFD217]/20 hover:border-[#FFD217]">
                                        <img src="{{ asset($foto->caminho) }}" alt="{{ $foto->titulo ?? $empresa->nome }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                        <div class="absolute inset-0 bg-gradient-to-t from-[#002164]/90 via-[#002164]/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                            <div class="absolute bottom-0 left-0 right-0 p-5">
                                                <h4 class="text-lg font-bold text-[#FFD217] mb-1">{{ $foto->titulo ?? $empresa->nome }}</h4>
                                                @if($foto->descricao)
                                                    <p class="text-sm text-[#FFD217]/90">{{ $foto->descricao }}</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        @php
                            // soma todas as fotos dessa empresa para manter o índice global em sincronia com o modal
                            $startIndex += $empresa->fotos->count();
                        @endphp
                    @endif

                    <div class="max-w-3xl mx-auto mt-6 text-center space-y-1">
                        <h4 class="text-xl font-semibold mb-2">Informações da Loja</h4>
                        @if($empresa->endereco)
                            <p class="text-sm"><span class="font-semibold">Endereço:</span> {{ $empresa->endereco }}</p>
                        @endif
                        @if($empresa->telefone)
                            <p class="text-sm"><span class="font-semibold">Telefone:</span> {{ $empresa->telefone }}</p>
                        @endif
                        @if($empresa->horario_funcionamento)
                            <p class="text-sm"><span class="font-semibold">Horário:</span> {{ $empresa->horario_funcionamento }}</p>
                        @endif
                    </div>
                </div>
            @endforeach

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
            <!-- Botão CTA -->
            <div class="text-center mt-12">
                <a href="{{ route('sobre') }}" class="inline-flex items-center bg-[#FFD217] text-[#002164] px-10 py-5 rounded-xl hover:bg-[#FFD217]/90 transition-all font-bold text-lg shadow-2xl hover:shadow-[#FFD217]/50 transform hover:scale-105 gap-2">
                    Conheça Mais Sobre Nós
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Tecnologia e Produtividade -->
    <section class="py-24 bg-white border-t-4 border-[#E6C000]">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <div class="inline-block bg-[#002164]/20 text-[#002164] px-4 py-2 rounded-full text-xs sm:text-sm font-semibold mb-4">
                    TECNOLOGIA & INOVAÇÃO
                </div>
                <h2 class="text-3xl lg:text-4xl font-extrabold text-[#002164] mb-4">Tecnologia & Produtividade a Serviço do Seu Negócio</h2>
                <p class="text-lg text-[#002164]/80 max-w-3xl mx-auto leading-relaxed">
                    Com estrutura moderna e equipe capacitada, garantimos uniformes de alto padrão, otimizando tempo e agregando valor à sua empresa.
                </p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="group bg-white rounded-2xl p-10 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 border border-gray-100">
                    <div class="w-20 h-20 bg-gradient-to-br from-blue-100 to-blue-200 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform shadow-lg">
                        <svg class="w-10 h-10 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-[#002164] mb-4">Tecnologia de Ponta</h3>
                    <p class="text-[#002164]/80 leading-relaxed text-lg">Agilidade e alta precisão em cada etapa de produção com equipamentos modernos.</p>
                </div>
                <div class="group bg-white rounded-2xl p-10 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 border border-[#002164]/20">
                    <div class="w-20 h-20 bg-[#002164]/20 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform shadow-lg">
                        <svg class="w-10 h-10 text-[#002164]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-[#002164] mb-4">Empresa Consolidada</h3>
                    <p class="text-[#002164]/80 leading-relaxed text-lg">Qualidade e confiabilidade comprovadas em cada entrega e parceria duradoura.</p>
                </div>
                <div class="group bg-white rounded-2xl p-10 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 border border-[#002164]/20">
                    <div class="w-20 h-20 bg-[#002164]/20 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform shadow-lg">
                        <svg class="w-10 h-10 text-[#002164]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-[#002164] mb-4">Capacidade Produtiva</h3>
                    <p class="text-[#002164]/80 leading-relaxed text-lg">Estrutura física privilegiada para atender grandes volumes com eficiência.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- História -->
    <section id="sobre" class="py-24 bg-white border-t-4 border-[#E6C000]">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <div class="inline-block bg-[#002164]/20 text-[#002164] px-4 py-2 rounded-full text-xs sm:text-sm font-semibold mb-4">
                        NOSSA HISTÓRIA
                    </div>
                    <h2 class="text-3xl lg:text-4xl font-extrabold text-[#002164] mb-4 leading-tight">Mais de 18 Anos de Tradição e Excelência</h2>
                    <p class="text-base lg:text-lg text-[#002164]/80 mb-4 leading-relaxed">
                        Desde 2007, a Fábrica de Fardamento tem sido sinônimo de excelência na fabricação de uniformes profissionais. Nossa jornada é marcada pela busca incessante por inovação, qualidade e satisfação do cliente.
                    </p>
                    <p class="text-base lg:text-lg text-[#002164]/80 mb-8 leading-relaxed">
                        Com duas lojas estrategicamente localizadas, oferecemos atendimento personalizado e soluções sob medida para empresas de todos os portes.
                    </p>
                    <div class="space-y-6">
                        <div class="flex items-start space-x-5 group">
                            <div class="w-14 h-14 bg-[#002164]/20 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform shadow-lg">
                                <svg class="w-7 h-7 text-[#002164]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-[#002164] mb-2 text-lg">Missão</h3>
                                <p class="text-[#002164]/80 leading-relaxed">Oferecer uniformes que unam funcionalidade, conforto e estilo, superando expectativas.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-5 group">
                            <div class="w-14 h-14 bg-[#002164]/20 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform shadow-lg">
                                <svg class="w-7 h-7 text-[#002164]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-[#002164] mb-2 text-lg">Visão</h3>
                                <p class="text-[#002164]/80 leading-relaxed">Ser referência no mercado de uniformes profissionais, reconhecida pela inovação e qualidade.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-5 group">
                            <div class="w-14 h-14 bg-[#002164]/20 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform shadow-lg">
                                <svg class="w-7 h-7 text-[#002164]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-[#002164] mb-2 text-lg">Valores</h3>
                                <p class="text-[#002164]/80 leading-relaxed">Integridade, respeito, compromisso com a qualidade e sustentabilidade.</p>
                            </div>
                        </div>
                    </div>
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

        // Gallery Modal Functions
        @php
            $galleryImages = $empresas->flatMap(function ($empresa) {
                return $empresa->fotos->map(function ($foto) use ($empresa) {
                    return [
                        'img' => asset($foto->caminho),
                        'titulo' => $foto->titulo ?? $empresa->nome,
                        'descricao' => $foto->descricao ?? $empresa->descricao,
                    ];
                });
            })->values()->toArray();
        @endphp
        const galleryImages = @json($galleryImages);
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
    </script>
@endsection
