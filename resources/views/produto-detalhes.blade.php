@extends('layouts.app')

@section('content')
    @php
        $lojas = $produto->lojas ?? [];
        $caracteristicas = $produto->caracteristicas ?? [];
        
        // Se o produto tem foto, usar ela, senão usar imagens padrão
        if ($produto->foto) {
            $imagensProduto = [Storage::url($produto->foto)];
        } else {
            $imagens = [
                'uniformes-sociais' => ['02.PNG', '01.PNG', '05.PNG'],
                'epis' => ['03.PNG', '01.PNG', '07.PNG'],
                'saude-beleza' => ['04.PNG', '02.PNG', '06.PNG'],
                'personalizados' => ['05.PNG', '03.PNG', '08.PNG'],
            ];
            $imagensProduto = $imagens[$produto->slug] ?? ['02.PNG', '01.PNG', '05.PNG'];
            $imagensProduto = array_map(fn($img) => asset('imagem/' . $img), $imagensProduto);
        }
    @endphp

    <!-- Header -->
    <header class="bg-[#FFD217]/95 backdrop-blur-sm shadow-sm sticky top-0 z-50 border-b border-[#002164]/20">
        <nav class="container mx-auto px-4 py-3 md:py-4 flex items-center justify-between">
            <a href="{{ route('home') }}" class="flex items-center space-x-2 md:space-x-3 group">
                <img src="{{ asset('imagem/logo.png') }}" alt="Fábrica de Fardamentos" class="h-10 md:h-14 w-auto group-hover:scale-105 transition-transform">
            </a>
            
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}" class="text-[#002164] hover:text-[#002164]/80 transition-colors font-medium relative group">
                    Início
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#002164] group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="{{ route('sobre') }}" class="text-[#002164] hover:text-[#002164]/80 transition-colors font-medium relative group">
                    Sobre Nós
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#002164] group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="{{ route('produtos') }}" class="text-[#002164] font-semibold relative">
                    Produtos
                    <span class="absolute bottom-0 left-0 w-full h-0.5 bg-[#002164]"></span>
                </a>
                <a href="{{ route('contato') }}" class="text-[#002164] hover:text-[#002164]/80 transition-colors font-medium relative group">
                    Contato
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#002164] group-hover:w-full transition-all duration-300"></span>
                </a>
            </div>
            
            <a href="{{ route('contato') }}" class="hidden md:inline-flex bg-[#002164] text-[#FFD217] px-6 py-2.5 rounded-lg hover:bg-[#002164]/90 transition-all font-semibold shadow-md hover:shadow-lg transform hover:scale-105">
                Solicitar Orçamento
            </a>
            
            <button id="mobile-menu-button" class="md:hidden p-2 rounded-lg text-[#002164] hover:bg-[#002164]/10 transition-colors" aria-label="Menu">
                <svg id="menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
                <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </nav>
        
        <div id="mobile-menu" class="hidden md:hidden bg-[#FFD217] border-t border-[#002164]/20">
            <div class="container mx-auto px-4 py-4 space-y-3">
                <a href="{{ route('home') }}" class="block py-3 px-4 text-[#002164] hover:text-[#002164]/80 hover:bg-[#002164]/10 rounded-lg transition-colors font-medium">Início</a>
                <a href="{{ route('sobre') }}" class="block py-3 px-4 text-[#002164] hover:text-[#002164]/80 hover:bg-[#002164]/10 rounded-lg transition-colors font-medium">Sobre Nós</a>
                <a href="{{ route('produtos') }}" class="block py-3 px-4 text-[#002164] bg-[#002164]/10 rounded-lg font-semibold">Produtos</a>
                <a href="{{ route('contato') }}" class="block py-3 px-4 text-[#002164] hover:text-[#002164]/80 hover:bg-[#002164]/10 rounded-lg transition-colors font-medium">Contato</a>
                <a href="{{ route('contato') }}" class="block py-3 px-4 bg-[#002164] text-[#FFD217] rounded-lg hover:bg-[#002164]/90 transition-all font-semibold text-center shadow-md">Solicitar Orçamento</a>
            </div>
        </div>
    </header>

    <!-- Product Details -->
    <section class="py-10 bg-white border-t-4 border-[#E6C000]">
        <div class="container mx-auto px-4">
            <nav class="flex items-center space-x-2 text-sm mb-8">
                <a href="{{ route('home') }}" class="text-[#002164]/80 hover:text-[#002164] transition-colors">Início</a>
                <svg class="w-4 h-4 text-[#002164]/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
                <a href="{{ route('produtos') }}" class="text-[#002164]/80 hover:text-[#002164] transition-colors">Produtos</a>
                <svg class="w-4 h-4 text-[#002164]/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
                <span class="text-[#002164] font-medium">{{ $produto->nome }}</span>
            </nav>
        </div>
    </section>

    <section class="py-16 bg-white border-t-4 border-[#E6C000]">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-12 mb-16">
                <!-- Image Gallery -->
                <div>
                    <div class="mb-4 rounded-2xl overflow-hidden shadow-xl">
                        <img id="main-image" src="{{ $imagensProduto[0] }}" alt="{{ $produto->nome }}" class="w-full h-[500px] object-cover cursor-pointer" onclick="openImageModal(this.src, '{{ $produto->nome }}', '{{ $produto->descricao }}')">
                    </div>
                    <div class="grid grid-cols-3 gap-4">
                        @foreach($imagensProduto as $index => $image)
                            <button onclick="changeMainImage('{{ $image }}')" class="rounded-xl overflow-hidden border-2 border-transparent hover:border-[#002164] transition-all transform hover:scale-105 focus:border-[#002164] focus:outline-none">
                                <img src="{{ $image }}" alt="{{ $produto->nome }} - Imagem {{ $index + 1 }}" class="w-full h-24 object-cover">
                            </button>
                        @endforeach
                    </div>
                </div>

                <!-- Product Info -->
                <div>
                    <div class="flex items-center gap-3 mb-3">
                        @if(in_array('matriz', $lojas))
                            <span class="px-3 py-1 bg-[#002164] text-[#FFD217] text-sm font-semibold rounded-lg">Loja Matriz</span>
                        @endif
                        @if(in_array('filial', $lojas))
                            <span class="px-3 py-1 bg-[#002164] text-[#FFD217] text-sm font-semibold rounded-lg">Loja Filial</span>
                        @endif
                    </div>
                    <h1 class="text-2xl lg:text-3xl font-extrabold text-[#002164] mb-2">{{ $produto->nome }}</h1>
                    <div class="text-sm lg:text-base text-[#002164]/80 mb-4">
                        <span class="font-semibold text-[#002164]">Código:</span> {{ $produto->codigo }}
                    </div>
                    <p class="text-sm lg:text-base text-[#002164]/90 leading-relaxed mb-5">{{ $produto->descricao }}</p>
                    
                    <!-- Features -->
                    @if(count($caracteristicas) > 0)
                    <div class="mb-8">
                        <h3 class="text-base lg:text-lg font-bold text-[#002164] mb-2">Características</h3>
                        <ul class="space-y-3">
                            @foreach($caracteristicas as $feature)
                                <li class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-[#002164] mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-[#002164]/90 text-base lg:text-lg">{{ $feature }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <a href="#contato-produto" class="inline-flex items-center bg-[#002164] text-[#FFD217] px-8 py-4 rounded-xl hover:bg-[#002164]/90 transition-all font-bold text-base lg:text-lg shadow-xl hover:shadow-2xl transform hover:scale-105 gap-2">
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
    <section id="contato-produto" class="py-24 bg-white border-t-4 border-[#E6C000]">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-14">
                    <div class="inline-block bg-[#002164]/20 text-[#002164] px-4 py-2 rounded-full text-xs sm:text-sm font-semibold mb-4">
                        SOLICITE UM ORÇAMENTO
                    </div>
                    <h2 class="text-2xl lg:text-3xl font-extrabold text-[#002164] mb-3">Interessado neste Produto?</h2>
                    <p class="text-base lg:text-lg text-[#002164]/80 max-w-3xl mx-auto leading-relaxed">
                        Preencha o formulário abaixo e nossa equipe entrará em contato em até 24 horas com um orçamento personalizado.
                    </p>
                </div>
                <div class="bg-white rounded-2xl shadow-2xl p-8 md:p-12 border border-[#002164]/20">
                    <form class="space-y-6">
                        <input type="hidden" name="produto" value="{{ $produto->nome }}">
                        <input type="hidden" name="codigo" value="{{ $produto->codigo }}">
                        
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="nome" class="block text-[#002164] font-bold mb-2 text-base lg:text-lg">Nome Completo *</label>
                                <input type="text" id="nome" name="nome" required class="w-full px-5 py-4 border-2 border-[#002164]/20 rounded-xl focus:ring-2 focus:ring-[#002164] focus:border-[#002164] transition-all bg-white hover:bg-[#FFD217]/10 text-[#002164] placeholder-[#002164]/50" placeholder="Seu nome completo">
                            </div>
                            <div>
                                <label for="email" class="block text-[#002164] font-bold mb-2 text-base lg:text-lg">E-mail *</label>
                                <input type="email" id="email" name="email" required class="w-full px-5 py-4 border-2 border-[#002164]/20 rounded-xl focus:ring-2 focus:ring-[#002164] focus:border-[#002164] transition-all bg-white hover:bg-[#FFD217]/10 text-[#002164] placeholder-[#002164]/50" placeholder="seu@email.com">
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="telefone" class="block text-[#002164] font-bold mb-2 text-base lg:text-lg">Telefone *</label>
                                <input type="tel" id="telefone" name="telefone" required class="w-full px-5 py-4 border-2 border-[#002164]/20 rounded-xl focus:ring-2 focus:ring-[#002164] focus:border-[#002164] transition-all bg-white hover:bg-[#FFD217]/10 text-[#002164] placeholder-[#002164]/50" placeholder="(00) 00000-0000">
                            </div>
                            <div>
                                <label for="empresa" class="block text-[#002164] font-bold mb-2 text-base lg:text-lg">Empresa</label>
                                <input type="text" id="empresa" name="empresa" class="w-full px-5 py-4 border-2 border-[#002164]/20 rounded-xl focus:ring-2 focus:ring-[#002164] focus:border-[#002164] transition-all bg-white hover:bg-[#FFD217]/10 text-[#002164] placeholder-[#002164]/50" placeholder="Nome da empresa">
                            </div>
                        </div>
                        <div>
                            <label for="quantidade" class="block text-[#002164] font-bold mb-2 text-base lg:text-lg">Quantidade Aproximada</label>
                            <input type="number" id="quantidade" name="quantidade" min="1" class="w-full px-5 py-4 border-2 border-[#002164]/20 rounded-xl focus:ring-2 focus:ring-[#002164] focus:border-[#002164] transition-all bg-white hover:bg-[#FFD217]/10 text-[#002164] placeholder-[#002164]/50" placeholder="Ex: 50 unidades">
                        </div>
                        <div>
                            <label for="mensagem" class="block text-[#002164] font-bold mb-2 text-base lg:text-lg">Mensagem *</label>
                            <textarea id="mensagem" name="mensagem" rows="6" required class="w-full px-5 py-4 border-2 border-[#002164]/20 rounded-xl focus:ring-2 focus:ring-[#002164] focus:border-[#002164] transition-all resize-none bg-white hover:bg-[#FFD217]/10 text-[#002164] placeholder-[#002164]/50" placeholder="Conte-nos mais sobre sua necessidade..."></textarea>
                        </div>
                        <button type="submit" class="w-full bg-[#002164] text-[#FFD217] px-8 py-4 rounded-xl hover:bg-[#002164]/90 transition-all font-bold text-base lg:text-lg shadow-xl hover:shadow-2xl transform hover:scale-[1.02] duration-300">
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

    @include('layouts.footer')

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

