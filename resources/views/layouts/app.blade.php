<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Fábrica de Fardamentos - Uniformes Profissionais de Alta Qualidade desde 2004">
    <title>@yield('title', 'Fábrica de Fardamentos - Uniformes Profissionais')</title>

    <!-- Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700" rel="stylesheet" /> --}}
    <!-- Styles -->
    @if(app()->environment('local', 'development'))
    <link rel="stylesheet" href="{{ asset('build/assets/app-DReUN16y.css') }}">
    @else
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('build/assets/app-DReUN16y.css') }}">
    <script src="{{ asset('build/assets/app-CAiCLEjY.js') }}"></script>
    @endif
</head>
<body class="font-sans antialiased bg-white text-[#002164]">
    @yield('content')
    @include('layouts.footer')

    <!-- WhatsApp Flutuante Global -->
    <div id="whatsapp-floating" class="fixed bottom-4 right-4 z-50">
        <button id="whatsapp-button" aria-label="WhatsApp" class="w-14 h-14 rounded-full bg-[#25D366] text-white shadow-2xl flex items-center justify-center hover:bg-[#1ebe5a] transition-transform transform hover:scale-110 border-2 border-white/70">
            <svg class="w-7 h-7" viewBox="0 0 32 32" fill="currentColor">
                <path d="M16.003 3.2c-7.019 0-12.8 5.681-12.8 12.68 0 2.235.587 4.414 1.707 6.34L3.2 28.8l6.746-1.77a12.86 12.86 0 006.057 1.547h.007c7.019 0 12.8-5.68 12.8-12.68 0-3.392-1.323-6.58-3.727-8.973C22.583 4.51 19.403 3.2 16.003 3.2zm0 2.133c2.724 0 5.283 1.06 7.208 2.985 1.925 1.917 2.986 4.468 2.986 7.193 0 5.62-4.58 10.187-10.214 10.187h-.006a10.2 10.2 0 01-5.137-1.41l-.368-.218-4.002 1.05 1.07-3.907-.24-.402a10.12 10.12 0 01-1.56-5.29c0-5.618 4.58-10.188 10.213-10.188zm-5.06 5.63c-.134-.298-.275-.305-.402-.31l-.343-.006c-.119 0-.31.044-.472.22-.163.177-.62.605-.62 1.477 0 .872.635 1.716.724 1.834.09.118 1.223 1.937 2.96 2.64 1.463.579 1.759.464 2.077.435.318-.03 1.024-.418 1.168-.823.145-.404.145-.75.102-.823-.043-.074-.157-.118-.33-.208-.174-.089-1.024-.505-1.184-.563-.158-.059-.274-.089-.39.089-.118.177-.45.563-.552.68-.102.118-.204.133-.378.044-.174-.089-.734-.27-1.399-.86-.517-.458-.865-1.022-.967-1.197-.102-.177-.011-.272.077-.361.079-.079.174-.207.262-.31.087-.103.116-.177.174-.296.06-.118.03-.22-.015-.31-.044-.089-.388-.962-.547-1.316z"/>
            </svg>
        </button>

        <div id="whatsapp-popup" class="hidden mb-4 w-80 sm:w-96">
            <div class="bg-white rounded-2xl shadow-2xl border border-gray-100 overflow-hidden">
                <div class="bg-gradient-to-r from-[#25D366] to-[#128C7E] px-4 py-3 flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" viewBox="0 0 32 32" fill="currentColor">
                                <path d="M16.003 3.2c-7.019 0-12.8 5.681-12.8 12.68 0 2.235.587 4.414 1.707 6.34L3.2 28.8l6.746-1.77a12.86 12.86 0 006.057 1.547h.007c7.019 0 12.8-5.68 12.8-12.68 0-3.392-1.323-6.58-3.727-8.973C22.583 4.51 19.403 3.2 16.003 3.2z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs font-semibold text-white uppercase tracking-wide">Atendimento rápido</p>
                            <p class="text-sm text-white/90">Fale com uma de nossas unidades</p>
                        </div>
                    </div>
                    <button id="whatsapp-close" type="button" class="text-white/80 hover:text-white transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="px-4 py-3 space-y-2 bg-white">
                    <a href="https://wa.me/5581979106667?text=Ol%C3%A1%2C%20gostaria%20de%20um%20or%C3%A7amento%20na%20unidade%20Pernambuco." target="_blank" rel="noopener noreferrer" class="flex items-center justify-between w-full px-3 py-2.5 rounded-xl bg-[#25D366]/5 hover:bg-[#25D366]/15 transition-colors">
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 rounded-full bg-[#25D366]/15 flex items-center justify-center text-xs font-bold text-[#075E54]">
                                PE
                            </div>
                            <div class="text-left">
                                <p class="text-sm font-semibold text-[#075E54]">Unidade Pernambuco</p>
                                <p class="text-xs text-[#075E54]/80">(81) 97910-6667</p>
                            </div>
                        </div>
                        <svg class="w-4 h-4 text-[#075E54]/70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                    <a href="https://wa.me/5511942110729?text=Ol%C3%A1%2C%20gostaria%20de%20um%20or%C3%A7amento%20na%20unidade%20S%C3%A3o%20Paulo." target="_blank" rel="noopener noreferrer" class="flex items-center justify-between w-full px-3 py-2.5 rounded-xl bg-[#25D366]/5 hover:bg-[#25D366]/15 transition-colors">
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 rounded-full bg-[#25D366]/15 flex items-center justify-center text-xs font-bold text-[#075E54]">
                                SP
                            </div>
                            <div class="text-left">
                                <p class="text-sm font-semibold text-[#075E54]">Unidade São Paulo</p>
                                <p class="text-xs text-[#075E54]/80">(11) 94211-0729</p>
                            </div>
                        </div>
                        <svg class="w-4 h-4 text-[#075E54]/70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        // WhatsApp flutuante global
        document.addEventListener('DOMContentLoaded', function () {
            const whatsappButton = document.getElementById('whatsapp-button');
            const whatsappPopup = document.getElementById('whatsapp-popup');
            const whatsappClose = document.getElementById('whatsapp-close');

            if (!whatsappButton || !whatsappPopup) {
                return;
            }

            function togglePopup() {
                whatsappPopup.classList.toggle('hidden');
            }

            function closePopup() {
                whatsappPopup.classList.add('hidden');
            }

            whatsappButton.addEventListener('click', function (e) {
                e.stopPropagation();
                togglePopup();
            });

            if (whatsappClose) {
                whatsappClose.addEventListener('click', function (e) {
                    e.stopPropagation();
                    closePopup();
                });
            }

            document.addEventListener('click', function (e) {
                if (
                    !whatsappPopup.classList.contains('hidden') &&
                    !whatsappPopup.contains(e.target) &&
                    e.target !== whatsappButton &&
                    !whatsappButton.contains(e.target)
                ) {
                    closePopup();
                }
            });
        });
    </script>
</body>
</html>

