<!-- Footer -->
<footer class="bg-[#002164] text-[#FFD217] py-16 border-t-4 border-[#E6C000]">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-4 gap-12 mb-12">
            <div class="md:border-r-2 md:border-[#E6C000] md:pr-12">
                <div class="flex items-center space-x-3 mb-6">
                    <div class="w-12 h-12 bg-[#FFD217] rounded-xl flex items-center justify-center shadow-lg">
                        <span class="text-[#002164] font-bold text-xl">F</span>
                    </div>
                    <span class="text-2xl font-bold">Fábrica de Fardamentos</span>
                </div>
                <p class="text-[#FFD217]/80 text-sm mb-6 leading-relaxed">
                    Desde 2007, a Fábrica de Fardamentos é referência em uniformes profissionais de alta qualidade, conforto e durabilidade.
                </p>
                <p class="text-[#FFD217]/60 text-xs">© 2025 Fábrica de Fardamentos. Todos os direitos reservados.</p>
            </div>
            <div class="md:border-r-2 md:border-[#E6C000] md:pr-12">
                <h3 class="font-bold mb-6 text-lg">Navegação</h3>
                <ul class="space-y-3">
                    <li><a href="{{ route('home') }}" class="text-[#FFD217]/80 hover:text-[#FFD217] transition-colors">Início</a></li>
                    <li><a href="{{ route('sobre') }}" class="text-[#FFD217]/80 hover:text-[#FFD217] transition-colors">Sobre Nós</a></li>
                    <li><a href="{{ route('produtos') }}" class="text-[#FFD217]/80 hover:text-[#FFD217] transition-colors">Produtos</a></li>
                    <li><a href="{{ route('contato') }}" class="text-[#FFD217]/80 hover:text-[#FFD217] transition-colors">Contato</a></li>
                </ul>
            </div>
            <div class="md:border-r-2 md:border-[#E6C000] md:pr-12">
                <h3 class="font-bold mb-6 text-lg">Contato</h3>
                <ul class="space-y-4 text-[#FFD217]/80 text-sm">
                    <li class="space-y-1">
                        <div class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-[#FFD217] mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 22s8-4.5 8-12a8 8 0 10-16 0c0 7.5 8 12 8 12z"></path>
                            </svg>
                            <div>
                                <p class="font-semibold text-[#FFD217]">Unidade Pernambuco</p>
                                <p class="text-xs">Av. Dr Júlio Maranhão, 7, Guararapes, Jaboatão dos Guararapes-PE, CEP 54325-440.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-[#FFD217] mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21L8.8 11.52a11.042 11.042 0 005.516 5.516l1.133-2.255a1 1 0 011.21-.502l4.49 1.497a1 1 0 01.684.95V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <div>
                                <p class="text-xs"><span class="font-semibold">Fone:</span> (81) 3074-2933</p>
                                <p class="text-xs"><span class="font-semibold">WhatsApp:</span> (81) 97910-6667</p>
                                <p class="text-xs"><span class="font-semibold">E-mail:</span> fabricadefardamentos@gmail.com</p>
                            </div>
                        </div>
                    </li>
                    <li class="space-y-1">
                        <div class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-[#FFD217] mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 22s8-4.5 8-12a8 8 0 10-16 0c0 7.5 8 12 8 12z"></path>
                            </svg>
                            <div>
                                <p class="font-semibold text-[#FFD217]">Unidade São Paulo</p>
                                <p class="text-xs">Estrada do Rufino, 850, Serraria, Diadema-SP, CEP 09980-380.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-[#FFD217] mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21L8.8 11.52a11.042 11.042 0 005.516 5.516l1.133-2.255a1 1 0 011.21-.502l4.49 1.497a1 1 0 01.684.95V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <div>
                                <p class="text-xs"><span class="font-semibold">Fone:</span> (11) 4057-3202</p>
                                <p class="text-xs"><span class="font-semibold">WhatsApp:</span> (11) 94211-0729</p>
                                <p class="text-xs"><span class="font-semibold">E-mail:</span> fabricadefardamentossp@gmail.com</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="font-bold mb-6 text-lg">Redes Sociais</h3>
                <div class="space-y-4">
                    <a href="https://www.instagram.com/fabricadefardamentos?igsh=MXh0aGhoZjZ4c3ltYw%3D%3D" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3 p-3 bg-blue-900 rounded-xl hover:bg-[#FFD217] hover:text-[#002164] transition-all transform hover:scale-105 shadow-lg hover:shadow-xl group">
                        <div class="w-12 h-12 bg-[#002164]/50 group-hover:bg-[#FFD217] rounded-xl flex items-center justify-center transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="font-semibold text-sm">Instagram</p>
                            <p class="text-xs opacity-80">Unidade Pernambuco</p>
                        </div>
                    </a>
                    <a href="https://www.instagram.com/fabricadefardamentossp?igsh=bnpucGQ4N3pnd2l1" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3 p-3 bg-blue-900 rounded-xl hover:bg-[#FFD217] hover:text-[#002164] transition-all transform hover:scale-105 shadow-lg hover:shadow-xl group">
                        <div class="w-12 h-12 bg-[#002164]/50 group-hover:bg-[#FFD217] rounded-xl flex items-center justify-center transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="font-semibold text-sm">Instagram</p>
                            <p class="text-xs opacity-80">Unidade São Paulo</p>
                        </div>
                    </a>
                    
                </div>
            </div>
        </div>
    </footer>


