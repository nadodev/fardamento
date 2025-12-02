@extends('layouts.app')

@section('content')
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

    <!-- Hero Section -->
    <section class="relative bg-white text-[#002164] py-24 overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-white/5 rounded-full -translate-y-1/2 translate-x-1/2 blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-orange-500/10 rounded-full translate-y-1/2 -translate-x-1/2 blur-3xl"></div>
        </div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center max-w-4xl mx-auto">
                <div class="inline-flex items-center gap-2 bg-[#002164]/20 backdrop-blur-md px-4 py-2 rounded-full text-xs sm:text-sm font-semibold border border-[#002164]/30 mb-5">
                    <svg class="w-4 h-4 text-[#002164]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                    NOSSOS PRODUTOS
                </div>
                <h1 class="text-3xl lg:text-4xl font-extrabold leading-tight mb-3 text-[#002164]">
                    Nossos <span class="text-[#002164]">Produtos</span>
                </h1>
                <p class="text-base lg:text-lg text-[#002164]/90 leading-relaxed max-w-3xl mx-auto">
                    Explore nossa linha completa de uniformes profissionais e encontre a solução perfeita para sua empresa.
                </p>
            </div>
        </div>
    </section>

    <!-- Products Grid -->
    <section class="py-24 bg-white border-t-4 border-[#E6C000]">
        <div class="container mx-auto px-4">
            <!-- Filter Section -->
            <div class="mb-12">
                <div class="flex flex-wrap items-center justify-center gap-4">
                    <button onclick="filterProducts('all')" class="filter-btn active px-6 py-3 rounded-xl bg-[#002164] text-[#FFD217] font-semibold shadow-lg hover:shadow-xl transition-all transform hover:scale-105" data-filter="all">
                        Todas as Lojas
                    </button>
                    <button onclick="filterProducts('matriz')" class="filter-btn px-6 py-3 rounded-xl bg-white text-[#002164] font-semibold hover:bg-[#002164]/10 transition-all transform hover:scale-105" data-filter="matriz">
                        Loja Matriz
                    </button>
                    <button onclick="filterProducts('filial')" class="filter-btn px-6 py-3 rounded-xl bg-white text-[#002164] font-semibold hover:bg-[#002164]/10 transition-all transform hover:scale-105" data-filter="filial">
                        Loja Filial
                    </button>
                </div>
            </div>

            <div id="products-grid" class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @forelse($produtos as $produto)
                    @php
                        $imagens = [
                            'uniformes-sociais' => '02.PNG',
                            'epis' => '03.PNG',
                            'saude-beleza' => '04.PNG',
                            'personalizados' => '05.PNG',
                        ];
                        $imagem = $imagens[$produto->slug] ?? '02.PNG';
                        $lojas = $produto->lojas ?? [];
                    @endphp
                    <a href="{{ route('produto.detalhes', $produto->slug) }}" class="product-item group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-[#002164]/20" data-loja="{{ implode(',', $lojas) }}">
                        <div class="h-64 bg-[#FFD217] overflow-hidden relative">
                            <img src="{{ asset('imagem/' . $imagem) }}" alt="{{ $produto->nome }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                            <div class="absolute top-3 right-3 flex gap-2">
                                @if(in_array('matriz', $lojas))
                                    <span class="px-2 py-1 bg-[#002164] text-[#FFD217] text-xs font-semibold rounded-lg">Matriz</span>
                                @endif
                                @if(in_array('filial', $lojas))
                                    <span class="px-2 py-1 bg-[#002164] text-[#FFD217] text-xs font-semibold rounded-lg">Filial</span>
                                @endif
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="text-xs text-[#002164]/60 mb-2">Código: {{ $produto->codigo }}</div>
                            <h3 class="text-xl font-bold text-[#002164] mb-3 group-hover:text-[#002164]/80 transition-colors">{{ $produto->nome }}</h3>
                            <p class="text-[#002164]/80 text-sm leading-relaxed mb-4 line-clamp-2">{{ $produto->descricao }}</p>
                            <span class="text-[#002164] font-semibold text-sm inline-flex items-center gap-1 group-hover:gap-2 transition-all">
                                Ver Detalhes
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                </svg>
                            </span>
                        </div>
                    </a>
                @empty
                    <div class="col-span-4 text-center py-16">
                        <p class="text-[#002164]/60">Nenhum produto disponível no momento.</p>
                    </div>
                @endforelse
            </div>

            <!-- Empty State -->
            <div id="empty-state" class="hidden text-center py-16">
                <svg class="w-24 h-24 mx-auto text-[#002164]/30 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                </svg>
                <h3 class="text-2xl font-bold text-[#002164] mb-2">Nenhum produto encontrado</h3>
                <p class="text-[#002164]/80">Tente selecionar outro filtro.</p>
            </div>
        </div>
    </section>

    @include('layouts.footer')

    <script>
        function filterProducts(filter) {
            const products = document.querySelectorAll('.product-item');
            const emptyState = document.getElementById('empty-state');
            const filterButtons = document.querySelectorAll('.filter-btn');
            let visibleCount = 0;

            // Update button states
            filterButtons.forEach(btn => {
                if (btn.dataset.filter === filter) {
                    btn.classList.remove('bg-white', 'text-[#002164]', 'hover:bg-[#002164]/10');
                    btn.classList.add('bg-[#002164]', 'text-[#FFD217]', 'shadow-lg', 'hover:shadow-xl');
                    btn.classList.add('active');
                } else {
                    btn.classList.remove('bg-[#002164]', 'text-[#FFD217]', 'shadow-lg', 'hover:shadow-xl', 'active');
                    btn.classList.add('bg-white', 'text-[#002164]', 'hover:bg-[#002164]/10');
                }
            });

            // Filter products
            products.forEach(product => {
                const lojas = product.dataset.loja.split(',');
                
                if (filter === 'all' || lojas.includes(filter)) {
                    product.style.display = 'block';
                    visibleCount++;
                } else {
                    product.style.display = 'none';
                }
            });

            // Show/hide empty state
            if (visibleCount === 0) {
                emptyState.classList.remove('hidden');
            } else {
                emptyState.classList.add('hidden');
            }
        }

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

