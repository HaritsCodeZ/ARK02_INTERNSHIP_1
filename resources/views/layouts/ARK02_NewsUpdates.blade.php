<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARKOD | News & Updates</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700;900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>[x-cloak] { display: none !important; }</style>
</head>
<body class="bg-[#0a0a0a] font-montserrat antialiased text-white">

    <nav x-data="{ mobileOpen: false }" class="bg-[#0a0a0a]/80 backdrop-blur-md border-b border-white/10 px-6 py-4 sticky top-0 z-[100]">
        <div class="max-w-[1600px] mx-auto flex items-center justify-between">

            <div class="flex items-center">
                <a href="/" class="flex items-center group">
                    <img src="{{ asset('images/Company Logo.png') }}" alt="ARKOD Logo" class="h-12 md:h-14 w-auto object-contain transition-transform group-hover:scale-105">
                    <div class="h-10 w-[2px] bg-yellow-400 mx-4 hidden md:block"></div>

                    <div x-data="{
                        texts: [
                            '{{ __('Welcome To Arkod Smart Logitech SDN. BHD') }}',
                            '{{ __('Innovative Solutions for Logistics') }}',
                            '{{ __('Efficiency & Innovation With Smart Logistics') }}'
                        ],
                        active: 0,
                        init() { setInterval(() => { this.active = (this.active + 1) % this.texts.length }, 4000); }
                    }" class="relative h-10 min-w-[260px] md:min-w-[500px] overflow-hidden hidden lg:block">
                        <template x-for="(text, index) in texts" :key="index">
                            <div x-show="active === index"
                                 x-transition:enter="transition ease-out duration-700"
                                 x-transition:enter-start="opacity-0 translate-y-4"
                                 x-transition:enter-end="opacity-100 translate-y-0"
                                 x-transition:leave="transition ease-in duration-700"
                                 x-transition:leave-start="opacity-100 translate-y-0"
                                 x-transition:leave-end="opacity-0 -translate-y-4"
                                 class="absolute inset-0 flex items-center text-white text-[10px] font-medium uppercase tracking-[0.2em]"
                                 x-text="text"></div>
                        </template>
                    </div>
                </a>
            </div>

            <div class="hidden xl:flex items-center space-x-6">
                <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative py-2">
                    <button class="text-gray-300 hover:text-white text-sm font-semibold flex items-center space-x-1 uppercase tracking-wider transition">
                        <span>{{ __('Application') }}</span>
                        <svg :class="{'rotate-180': open}" class="w-4 h-4 text-yellow-400 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <div x-show="open" x-transition x-cloak class="absolute left-0 mt-2 w-56 bg-[#0f0f0f] border border-white/10 rounded-md shadow-2xl z-50 py-2">
                        <a href="/career" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">
                            {{ __('Career') }}
                        </a>
                        <a href="/agentapp" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">
                            {{ __('Agent Application') }}
                        </a>
                    </div>
                </div>

                <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative py-2">
                    <button class="text-gray-300 hover:text-white text-sm font-semibold flex items-center space-x-1 uppercase tracking-wider transition">
                        <span>{{ __('Blog') }}</span>
                        <svg :class="{'rotate-180': open}" class="w-4 h-4 text-yellow-400 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <div x-show="open" x-transition x-cloak class="absolute left-0 mt-2 w-64 bg-[#0f0f0f] border border-white/10 rounded-md shadow-2xl z-50 py-2">
                        <a href="/aboutus" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">
                            {{ __('About Us') }}
                        </a>
                        <a href="/newsandupdates" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">
                            {{ __('News & Updates') }}
                        </a>
                        <a href="/knowledge" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">
                            {{ __('Knowledge & Insights') }}
                        </a>
                    </div>
                </div>

                <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative py-2">
                    <button class="text-gray-300 hover:text-white text-sm font-semibold flex items-center space-x-1 uppercase tracking-wider transition">
                        <span>{{ __('Services') }}</span>
                        <svg :class="{'rotate-180': open}" class="w-4 h-4 text-yellow-400 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <div x-show="open" x-transition x-cloak class="absolute left-0 mt-2 w-56 bg-[#0f0f0f] border border-white/10 rounded-md shadow-2xl z-50 py-2">
                        <a href="/servicecarshipping" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">
                            {{ __('Vehicle Shipping') }}
                        </a>
                        <a href="/servicesdeliveryshipping" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">
                            {{ __('Delivery Shipping') }}
                        </a>
                        <a href="/servicescustomshipping" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">
                            {{ __('Custom Shipping') }}
                        </a>
                    </div>
                </div>

                <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative py-2">
                    <button class="text-gray-300 hover:text-white text-sm font-semibold flex items-center space-x-1 uppercase tracking-wider transition">
                        <span>{{ __('Help') }}</span>
                        <svg :class="{'rotate-180': open}" class="w-4 h-4 text-yellow-400 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <div x-show="open" x-transition x-cloak class="absolute left-0 mt-2 w-48 bg-[#0f0f0f] border border-white/10 rounded-md shadow-2xl z-50 py-2">
                        <a href="/helpcenter" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">
                            {{ __('Help Center') }}
                        </a>
                        <a href="/faq" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">
                            {{ __('FAQ') }}
                        </a>
                    </div>
                </div>

                <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative py-2">
                    <button class="text-gray-300 hover:text-white text-sm font-semibold flex items-center space-x-1 uppercase tracking-wider transition">
                        <span>{{ __('Community') }}</span>
                        <svg :class="{'rotate-180': open}" class="w-4 h-4 text-yellow-400 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <div x-show="open" x-transition x-cloak class="absolute left-0 mt-2 w-56 bg-[#0f0f0f] border border-white/10 rounded-md shadow-2xl z-50 py-2">
                        <a href="/membership" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">
                            {{ __('Membership') }}
                        </a>
                        <a href="/Community" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">
                            {{ __('Partnership') }}
                        </a>
                    </div>
                </div>

                <a href="#" class="text-white hover:text-yellow-400 text-sm font-bold transition uppercase tracking-wider whitespace-nowrap">
                    {{ __('Login') }}
                </a>

                <a href="#" class="bg-yellow-400 hover:bg-white text-black font-black px-5 py-3 rounded-md text-sm uppercase transition shadow-[0_4px_20px_rgba(250,204,21,0.3)] whitespace-nowrap">
                    {{ __('Sign Up') }}
                </a>

                <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative py-2">
                    <button class="flex items-center gap-1.5 text-gray-300 hover:text-yellow-400 transition-colors group">
                        <svg class="w-5 h-5 transition-transform group-hover:rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9h18" />
                        </svg>
                        <span class="text-xs font-bold uppercase tracking-widest">{{ strtoupper(app()->getLocale()) }}</span>
                        <svg :class="{'rotate-180': open}" class="w-3 h-3 text-yellow-400 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M19 9l-7 7-7-7" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>

                    <div x-show="open"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-cloak
                        class="absolute right-0 mt-2 w-40 bg-[#0f0f0f] border border-white/10 rounded-md shadow-2xl z-[110] py-2">

                        <a href="{{ url('lang/en') }}" class="flex items-center justify-between px-6 py-3 text-[10px] text-white hover:bg-yellow-400 hover:text-black transition uppercase tracking-[0.2em] font-black">
                            English <span class="text-[8px] opacity-50">EN</span>
                        </a>

                        <a href="{{ url('lang/ms') }}" class="flex items-center justify-between px-6 py-3 text-[10px] text-white hover:bg-yellow-400 hover:text-black transition uppercase tracking-[0.2em] font-black border-t border-white/5">
                            Melayu <span class="text-[8px] opacity-50">MS</span>
                        </a>

                        <a href="{{ url('lang/zh') }}" class="flex items-center justify-between px-6 py-3 text-[10px] text-white hover:bg-yellow-400 hover:text-black transition uppercase tracking-[0.2em] font-black border-t border-white/5">
                            中文 <span class="text-[8px] opacity-50">ZH</span>
                        </a>
                    </div>
                </div>
            </div>

            <button @click="mobileOpen = !mobileOpen" class="xl:hidden text-white p-2 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <div class="xl:hidden" x-show="mobileOpen" x-cloak x-transition>
            <div class="mt-4 py-6 bg-[#0a0a0a] border-t border-white/10 px-4 space-y-4 text-base font-semibold uppercase tracking-wider max-h-[80vh] overflow-y-auto">

                <div x-data="{ mOpen: false }">
                    <button @click="mOpen = !mOpen" class="w-full flex justify-between items-center text-gray-300 hover:text-white py-2">
                        <span>{{ __('Application') }}</span>
                        <svg :class="{'rotate-180': mOpen}" class="w-4 h-4 text-yellow-400 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <div x-show="mOpen" x-transition class="pl-4 border-l border-white/10 space-y-2 mt-1">
                        <a href="/career" class="block py-2 text-sm text-yellow-400 hover:text-white">{{ __('Career') }}</a>
                        <a href="/agentapp" class="block py-2 text-sm text-yellow-400 hover:text-white">{{ __('Agent Application') }}</a>
                    </div>
                </div>

                <div x-data="{ mOpen: false }">
                    <button @click="mOpen = !mOpen" class="w-full flex justify-between items-center text-gray-300 hover:text-white py-2">
                        <span>{{ __('Blog') }}</span>
                        <svg :class="{'rotate-180': mOpen}" class="w-4 h-4 text-yellow-400 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <div x-show="mOpen" x-transition class="pl-4 border-l border-white/10 space-y-2 mt-1">
                        <a href="/aboutus" class="block py-2 text-sm text-yellow-400 hover:text-white">{{ __('About Us') }}</a>
                        <a href="/newsandupdates" class="block py-2 text-sm text-yellow-400 hover:text-white">{{ __('News & Updates') }}</a>
                        <a href="/knowledge" class="block py-2 text-sm text-yellow-400 hover:text-white">{{ __('Knowledge & Insights') }}</a>
                    </div>
                </div>

                <div x-data="{ mOpen: false }">
                    <button @click="mOpen = !mOpen" class="w-full flex justify-between items-center text-gray-300 hover:text-white py-2">
                        <span>{{ __('Services') }}</span>
                        <svg :class="{'rotate-180': mOpen}" class="w-4 h-4 text-yellow-400 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <div x-show="mOpen" x-transition class="pl-4 border-l border-white/10 space-y-2 mt-1">
                        <a href="/servicecarshipping" class="block py-2 text-sm text-yellow-400 hover:text-white">{{ __('Vehicle Shipping') }}</a>
                        <a href="/servicesdeliveryshipping" class="block py-2 text-sm text-yellow-400 hover:text-white">{{ __('Delivery Shipping') }}</a>
                        <a href="/servicescustomshipping" class="block py-2 text-sm text-yellow-400 hover:text-white">{{ __('Custom Shipping') }}</a>
                    </div>
                </div>

                <div x-data="{ mOpen: false }">
                    <button @click="mOpen = !mOpen" class="w-full flex justify-between items-center text-gray-300 hover:text-white py-2">
                        <span>{{ __('Help') }}</span>
                        <svg :class="{'rotate-180': mOpen}" class="w-4 h-4 text-yellow-400 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <div x-show="mOpen" x-transition class="pl-4 border-l border-white/10 space-y-2 mt-1">
                        <a href="/helpcenter" class="block py-2 text-sm text-yellow-400 hover:text-white">{{ __('Help Center') }}</a>
                        <a href="/faq" class="block py-2 text-sm text-yellow-400 hover:text-white">{{ __('FAQ') }}</a>
                    </div>
                </div>

                <div x-data="{ mOpen: false }">
                    <button @click="mOpen = !mOpen" class="w-full flex justify-between items-center text-gray-300 hover:text-white py-2">
                        <span>{{ __('Community') }}</span>
                        <svg :class="{'rotate-180': mOpen}" class="w-4 h-4 text-yellow-400 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <div x-show="mOpen" x-transition class="pl-4 border-l border-white/10 space-y-2 mt-1">
                    <a href="/membership" class="block py-2 text-sm text-yellow-400 hover:text-white">{{ __('Membership') }}</a>
                    <a href="/Community" class="block py-2 text-sm text-yellow-400 hover:text-white">{{ __('Partnership') }}</a></div>
                </div>

                <div class="pt-2 flex flex-col space-y-3">
                    <a href="#" class="block py-2 text-white hover:text-yellow-400 font-bold text-center border border-white/10 rounded-md">{{ __('Login') }}</a>

                    <a href="#" class="block bg-yellow-400 text-black text-center font-black py-3 rounded-md text-sm shadow-md">
                        {{ __('Sign Up') }}
                    </a>
                </div>

                <div class="border-t border-white/10 pt-4 mt-2">
                    <div class="text-[10px] text-gray-500 font-bold tracking-widest uppercase mb-2">{{ __('Select Language') }}</div>
                    <div class="grid grid-cols-3 gap-2 text-center text-xs">
                        <a href="{{ url('lang/en') }}" class="py-2.5 rounded border border-white/10 hover:bg-yellow-400 hover:text-black transition-colors {{ app()->getLocale() == 'en' ? 'bg-white/10 text-yellow-400 font-bold' : 'text-white' }}">EN</a>
                        <a href="{{ url('lang/ms') }}" class="py-2.5 rounded border border-white/10 hover:bg-yellow-400 hover:text-black transition-colors {{ app()->getLocale() == 'ms' ? 'bg-white/10 text-yellow-400 font-bold' : 'text-white' }}">MS</a>
                        <a href="{{ url('lang/zh') }}" class="py-2.5 rounded border border-white/10 hover:bg-yellow-400 hover:text-black transition-colors {{ app()->getLocale() == 'zh' ? 'bg-white/10 text-yellow-400 font-bold' : 'text-white' }}">ZH</a>
                    </div>
                </div>

            </div>
        </div>
    </nav>


<section class="relative bg-white py-20 px-6 overflow-hidden select-none"
         x-data="{ openPopup: false }">
    <div
        class="absolute inset-0 bg-cover bg-center bg-no-repeat pointer-events-none opacity-40 transition-opacity duration-500"
        style="background-image: url('{{ asset('images/AnnouncementBackground.png') }}');"
    ></div>

    <style>
        @keyframes colorWave {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .animate-gold-wave {
            background-size: 200% 200%;
            animation: colorWave 4s ease infinite;
        }
        @keyframes goldPulse {
            0%, 100% { transform: scale(1); box-shadow: 0 0 20px rgba(249, 160, 27, 0.4); }
            50% { transform: scale(1.02); box-shadow: 0 0 40px rgba(249, 160, 27, 0.7); }
        }
        .animate-gold-pulse {
            animation: goldPulse 3s infinite ease-in-out;
        }
    </style>

    <svg class="absolute w-0 h-0" width="0" height="0">
        <defs>
            <clipPath id="figma-card-curve" clipPathUnits="objectBoundingBox">
                <path d="M 0,0 L 1,0 L 1,0.82 C 0.75,0.92 0.25,0.92 0,0.82 Z" />
            </clipPath>
        </defs>
    </svg>

    <div class="max-w-[1600px] mx-auto relative z-10">

        <!-- Localized Title Header -->
        <div class="text-center mb-16 relative z-20">
            <h2 class="text-4xl md:text-5xl font-black uppercase tracking-wider text-black mb-3 font-montserrat">
                {{ __('Announcements') }}
            </h2>
            <div class="w-16 h-[4px] bg-[#f9a01b] mx-auto mb-6 rounded-full"></div>
            <p class="text-gray-900 text-sm md:text-base font-bold tracking-wide max-w-2xl mx-auto">
                {{ __("Big things are moving—here is what's happening right now!") }}
            </p>
        </div>

        <!-- ANNOUNCEMENTS SLIDER CONTAINER -->
        <div x-data="{
            currentIndex: 0,
            total: 3,
            next() { this.currentIndex = (this.currentIndex + 1) % this.total },
            prev() { this.currentIndex = (this.currentIndex - 1 + this.total) % this.total }
        }" class="relative max-w-[1200px] mx-auto px-4 md:px-12">

            <!-- Desktop Left Arrow: Stays on the sides, hidden on mobile -->
            <button @click="openPopup = true" class="hidden md:block absolute left-0 top-1/2 -translate-y-1/2 z-30 p-2 text-gray-700 hover:text-[#f9a01b] hover:scale-125 active:scale-95 transition-all duration-300 focus:outline-none group">
                <svg class="w-10 h-10 stroke-[3] transform group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            <!-- Card Viewport Wrap -->
            <div class="overflow-hidden w-full">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                    <!-- Card 1 -->
                    <div class="bg-[#121212] rounded-[2.5rem] p-5 flex flex-col justify-between items-center text-center shadow-xl border border-yellow-600/20 transform transition-all duration-500 ease-out hover:-translate-y-3 hover:scale-[1.03] hover:shadow-[0_20px_40px_rgba(249,160,27,0.15)] hover:border-[#f9a01b]/60 group">
                        <div class="w-full h-60 overflow-hidden relative rounded-t-[31px]" style="clip-path: url(#figma-card-curve);">
                            <img src="{{ asset('images/UNLOCKTHENEXTLEVEL.png') }}" alt="Unlock the Next Level" class="w-full h-full object-cover rounded-t-[31px] transform transition-transform duration-700 ease-out group-hover:scale-110">
                        </div>
                        <div class="mt-2 flex flex-col items-center flex-grow justify-between w-full pb-2">
                            <div class="w-36 h-[3px] bg-gradient-to-r from-[#d4af37] via-[#f9a01b] to-[#d4af37] rounded-full mb-4 shadow-[0_0_12px_rgba(249,160,27,0.7)]"></div>
                            <h3 class="text-white font-black text-xl md:text-2xl tracking-wide uppercase leading-tight min-h-[50px] flex items-center justify-center">
                                {!! __('UNLOCK THE<br>NEXT LEVEL') !!}
                            </h3>
                            <p class="text-gray-400 text-xs font-semibold tracking-wide max-w-[240px] mt-2 line-clamp-2 min-h-[36px]">
                               {{ __('Discover new perks and benefits of being one of us!') }}
                            </p>
                            <a href="/membership" class="mt-5 inline-block w-full max-w-[160px] bg-gradient-to-r from-[#121212] via-[#f9a01b] to-[#121212] text-white hover:text-black font-black py-3 rounded-full text-[11px] uppercase tracking-widest border border-yellow-600/40 hover:border-transparent transition-all duration-300 text-center shadow-md transform active:scale-95 animate-gold-wave">
                                {{ __('Read more') }}
                            </a>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-[#121212] rounded-[2.5rem] p-5 flex flex-col justify-between items-center text-center shadow-xl border border-yellow-600/20 transform transition-all duration-500 ease-out hover:-translate-y-3 hover:scale-[1.03] hover:shadow-[0_20px_40px_rgba(249,160,27,0.15)] hover:border-[#f9a01b]/60 group">
                        <div class="w-full h-60 overflow-hidden relative rounded-t-[31px]" style="clip-path: url(#figma-card-curve);">
                            <img src="{{ asset('images/SHIPPINGMODEHANDLINGS.png') }}" alt="Shipping Mode Handlings" class="w-full h-full object-cover rounded-t-[31px] transform transition-transform duration-700 ease-out group-hover:scale-110">
                        </div>
                        <div class="mt-2 flex flex-col items-center flex-grow justify-between w-full pb-2">
                            <div class="w-36 h-[3px] bg-gradient-to-r from-[#d4af37] via-[#f9a01b] to-[#d4af37] rounded-full mb-4 shadow-[0_0_12px_rgba(249,160,27,0.7)]"></div>
                            <h3 class="text-white font-black text-xl md:text-2xl tracking-wide uppercase leading-tight min-h-[50px] flex items-center justify-center">
                                {!! __('SHIPPING MODE<br>HANDLINGS') !!}
                            </h3>
                            <p class="text-gray-400 text-xs font-semibold tracking-wide max-w-[240px] mt-2 line-clamp-2 min-h-[36px]">
                                {{ __('Discover smart strategic updates on vehicle transit processing!') }}
                            </p>
                            <a href="/servicecarshipping" class="mt-5 inline-block w-full max-w-[160px] bg-gradient-to-r from-[#121212] via-[#f9a01b] to-[#121212] text-white hover:text-black font-black py-3 rounded-full text-[11px] uppercase tracking-widest border border-yellow-600/40 hover:border-transparent transition-all duration-300 text-center shadow-md transform active:scale-95 animate-gold-wave">
                                {{ __('Read more') }}
                            </a>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-[#121212] rounded-[2.5rem] p-5 flex flex-col justify-between items-center text-center shadow-xl border border-yellow-600/20 transform transition-all duration-500 ease-out hover:-translate-y-3 hover:scale-[1.03] hover:shadow-[0_20px_40px_rgba(249,160,27,0.15)] hover:border-[#f9a01b]/60 group">
                        <div class="w-full h-60 overflow-hidden relative rounded-t-[31px]" style="clip-path: url(#figma-card-curve);">
                            <img src="{{ asset('images/SPECIAL PACKAGES.png') }}" alt="Special Packages and Services" class="w-full h-full object-cover rounded-t-[31px] transform transition-transform duration-700 ease-out group-hover:scale-110">
                        </div>
                        <div class="mt-2 flex flex-col items-center flex-grow justify-between w-full pb-2">
                            <div class="w-36 h-[3px] bg-gradient-to-r from-[#d4af37] via-[#f9a01b] to-[#d4af37] rounded-full mb-4 shadow-[0_0_12px_rgba(249,160,27,0.7)]"></div>
                            <h3 class="text-white font-black text-xl md:text-2xl tracking-wide uppercase leading-tight min-h-[50px] flex items-center justify-center">
                                {!! __('SPECIAL PACKAGE<br>SERVICE') !!}
                            </h3>
                            <p class="text-gray-400 text-xs font-semibold tracking-wide max-w-[240px] mt-2 line-clamp-2 min-h-[36px]">
                                {{ __('Discover new packages that is suited for your needs!') }}
                            </p>
                            <a href="/specialpackages" class="mt-5 inline-block w-full max-w-[160px] bg-gradient-to-r from-[#121212] via-[#f9a01b] to-[#121212] text-white hover:text-black font-black py-3 rounded-full text-[11px] uppercase tracking-widest border border-yellow-600/40 hover:border-transparent transition-all duration-300 text-center shadow-md transform active:scale-95 animate-gold-wave">
                                {{ __('Read more') }}
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Desktop Right Arrow: Stays on the sides, hidden on mobile -->
            <button @click="openPopup = true" class="hidden md:block absolute right-0 top-1/2 -translate-y-1/2 z-30 p-2 text-gray-700 hover:text-[#f9a01b] hover:scale-125 active:scale-95 transition-all duration-300 focus:outline-none group">
                <svg class="w-10 h-10 stroke-[3] transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </button>

            <!-- Mobile Controls Only: Centers navigation underneath cards safely away from viewport edges -->
            <div class="flex md:hidden justify-center items-center gap-6 mt-8">
                <button @click="openPopup = true" class="p-3 bg-[#121212] border border-white/10 text-gray-400 rounded-full active:scale-90 transition-all">
                    <svg class="w-6 h-6 stroke-[3]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <div class="flex gap-1.5">
                    <span class="w-2 h-2 rounded-full bg-[#f9a01b]"></span>
                    <span class="w-2 h-2 rounded-full bg-gray-600"></span>
                    <span class="w-2 h-2 rounded-full bg-gray-600"></span>
                </div>
                <button @click="openPopup = true" class="p-3 bg-[#121212] border border-white/10 text-gray-400 rounded-full active:scale-90 transition-all">
                    <svg class="w-6 h-6 stroke-[3]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>

        </div>

    <!-- Localized "Stay Tuned" Modal Popup -->
    <div x-show="openPopup"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-[200] flex items-center justify-center p-4 bg-black/80 backdrop-blur-md"
         x-cloak
         @click.self="openPopup = false"
         @keydown.escape.window="openPopup = false">

        <div x-show="openPopup"
             x-transition:enter="transition ease-out duration-300 transform scale-90"
             x-transition:enter-start="opacity-0 scale-90"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-200 transform scale-100"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-90"
             class="bg-[#0f0f0f] border-2 border-[#f9a01b]/50 rounded-[2.5rem] max-w-md w-full p-8 text-center relative overflow-hidden animate-gold-pulse">

            <button @click="openPopup = false" class="absolute top-5 right-5 text-gray-400 hover:text-white transition">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>

            <div class="w-20 h-20 bg-[#f9a01b]/10 border border-[#f9a01b]/30 rounded-full flex items-center justify-center mx-auto mb-6">
                <svg class="w-10 h-10 text-[#f9a01b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                </svg>
            </div>

            <h3 class="text-white font-black text-2xl md:text-3xl tracking-wider uppercase mb-3 font-montserrat">
                {{ __('Stay Tuned!') }}
            </h3>
            <div class="w-12 h-[3px] bg-[#f9a01b] mx-auto mb-4 rounded-full"></div>

            <p class="text-gray-400 text-sm font-semibold tracking-wide mb-6 leading-relaxed">
                {{ __("More updates and game-changing announcements are currently loading on our radar. Don't blink!") }}
            </p>

            <button @click="openPopup = false" class="w-full bg-gradient-to-r from-[#d4af37] via-[#f9a01b] to-[#d4af37] text-black font-black py-3.5 rounded-full text-xs uppercase tracking-widest hover:brightness-110 active:scale-95 transition-all shadow-[0_4px_20px_rgba(250,204,21,0.3)]">
                {{ __('Acknowledge') }}
            </button>
        </div>
    </div>
</section>

<footer class="bg-black text-white pt-12 md:pt-16 pb-8 md:pb-12 px-4 sm:px-8 font-sans">
    <div class="max-w-[1400px] mx-auto">
        <div class="w-full h-[2px] bg-white mb-8 md:mb-12"></div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-x-8 gap-y-8 md:gap-y-12 mb-12 md:mb-16">

            <div class="text-left">
                <h4 class="text-[20px] md:text-[24px] font-bold mb-3 md:mb-5">{{ __('Logistics Solutions') }}</h4>
                <ul class="space-y-2 md:space-y-3 text-[16px] md:text-[20px] font-medium text-white/90">
                    <li><a>{{ __('Pickup & Delivery') }}</a></li>
                    <li><a>{{ __('Sea Freight') }}</a></li>
                    <li><a>{{ __('Air Freight') }}</a></li>
                </ul>
                <h4 class="text-[20px] md:text-[24px] font-bold mt-8 md:mt-12 mb-3 md:mb-5">{{ __('Warehousing Solution') }}</h4>
                <ul class="text-[16px] md:text-[20px] font-medium text-white/90">
                    <li><a href="#" class="hover:text-yellow-500 transition">{{ __('Warehousing') }}</a></li>
                </ul>
            </div>

            <div class="text-left">
                <h4 class="text-[20px] md:text-[24px] font-bold mb-3 md:mb-5">{{ __('Company') }}</h4>
                <ul class="space-y-2 md:space-y-3 text-[16px] md:text-[20px] font-medium text-white/90">
                    <li><a href="/aboutus" class="hover:text-yellow-500 transition">{{ __('About Us') }}</a></li>
                    <li><a href="/aboutus" class="hover:text-yellow-500 transition">{{ __('Blog') }}</a></li>
                    <li><a href="/career" class="hover:text-yellow-500 transition">{{ __('Careers') }}</a></li>
                    <li><a href="/helpcenter" class="hover:text-yellow-500 transition">{{ __('Partners') }}</a></li>
                    <li><a>{{ __('Cookies, Legal & Privacy Policies') }}</a></li>
                    <li><a href="/termspolicy" class="hover:text-yellow-500 transition">{{ __('Terms and Conditions') }}</a></li>
                </ul>
            </div>

            <div class="text-left">
                <h4 class="text-[20px] md:text-[24px] font-bold mb-3 md:mb-5">{{ __('Policies') }}</h4>
                <ul class="space-y-2 md:space-y-3 text-[16px] md:text-[20px] font-medium text-white/90">
                    <li><a href="/shippingpolicy" class="hover:text-yellow-500 transition">{{ __('Shipping Policies') }}</a></li>
                    <li><a href="/cancelationpolicy" class="hover:text-yellow-500 transition">{{ __('Cancellation & Refund Policies') }}</a></li>
                    <li><a href="/termspolicy" class="hover:text-yellow-500 transition">{{ __('Terms & Policies') }}</a></li>
                </ul>
            </div>

            <div class="flex flex-col items-start lg:items-end lg:text-right">
                <div class="mb-8 md:mb-14">
                    <h4 class="text-[20px] md:text-[24px] font-bold mb-3 md:mb-5">{{ __('Support') }}</h4>
                    <ul class="space-y-2 md:space-y-3 text-[16px] md:text-[20px] font-medium text-white/90">
                        <li><a href="/helpcenter" class="hover:text-yellow-500 transition">{{ __('Contact Us') }}</a></li>
                        <li><a href="/faq" class="hover:text-yellow-500 transition">{{ __('FAQ') }}</a></li>
                    </ul>
                </div>

                <div class="flex flex-col items-start lg:items-end">
                    <h4 class="text-lg md:text-[24px] font-bold mb-3 md:mb-4 tracking-tight uppercase">{{ __('ARKOD SMART LOGITECH') }}</h4>
                    <div class="flex gap-3 md:gap-4">
                        <a href="https://www.linkedin.com/company/arkod-smart-logitech-sdn-bhd" target="_blank" rel="noopener noreferrer" class="hover:opacity-75 transition text-white">
                            <svg class="w-6 h-6 md:w-8 md:h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a2.7 2.7 0 0 0-2.7-2.7c-1.2 0-1.8.7-2.1 1.2v-1h-3.3v10h3.3v-5.6c0-.3 0-.6.1-.8.2-.5.6-.9 1.2-.9 1 0 1.2.8 1.2 1.9v5.4h3.3M7 19h3.3V9H7v10m1.6-11.3c1.1 0 1.9-.8 1.9-1.9 0-1.1-.8-1.9-1.9-1.9-1.1 0-1.9.8-1.9 1.9 0 1.1.8 1.9 1.9 1.9Z"/></svg>
                        </a>
                        <a href="https://www.instagram.com/arkodsmartlogitech/" target="_blank" rel="noopener noreferrer" class="hover:opacity-75 transition text-white">
                            <svg class="w-6 h-6 md:w-8 md:h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8A3.6 3.6 0 0 0 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6A3.6 3.6 0 0 0 16.4 4H7.6m9.65 1.5a1.25 1.25 0 1 1 0 2.5 1.25 1.25 0 0 1 0-2.5M12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10m0 2a3 3 0 1 0 0 6 3 3 0 0 0 0-6Z"/></svg>
                        </a>
                        <a href="https://www.youtube.com/@ArkodSmartLogitech" target="_blank" rel="noopener noreferrer" class="hover:opacity-75 transition text-white">
                            <svg class="w-7 h-7 md:w-9 md:h-9 -mt-0.5" fill="currentColor" viewBox="0 0 24 24"><path d="M10 15l5.19-3L10 9v6m11.56-7.83c.13.47.22 1.1.28 1.9.07.8.1 1.49.1 2.09L22 12c0 2.19-.16 3.8-.44 4.83-.25.9-.83 1.48-1.73 1.73-.47.13-1.33.22-2.65.28-1.3.07-2.49.1-3.59.1L12 5c4.19 0 6.8.16 7.83.44.9.25 1.48.83 1.73 1.73Z"/></svg>
                        </a>
                        <a href="https://www.facebook.com/arkodsmartlogitech/" target="_blank" rel="noopener noreferrer" class="hover:opacity-75 transition text-white">
                            <svg class="w-6 h-6 md:w-8 md:h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.04c-5.5 0-10 4.49-10 10.02 0 5 3.66 9.15 8.44 9.9V15.36H7.72v-3.3h2.72v-2.52c0-2.68 1.59-4.16 4.03-4.16 1.17 0 2.39.21 2.39.21v2.62h-1.35c-1.33 0-1.74.83-1.74 1.68v2.01h2.96l-.47 3.3h-2.49v6.6c4.78-.75 8.44-4.9 8.44-9.9 0-5.53-4.5-10.02-10-10.02Z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full h-[2px] bg-white mb-6 md:mb-8"></div>

        <div class="flex flex-col items-center justify-center space-y-4 md:space-y-8">
            <p class="text-[11px] md:text-[14px] font-bold tracking-[0.3em] uppercase text-center">© ARKOD 2026. {{ __('ALL RIGHTS RESERVED') }}</p>

            <div class="flex flex-col sm:flex-row flex-wrap justify-center items-center gap-y-3 gap-x-6 md:gap-x-12">
                <div class="flex items-center gap-2 md:gap-3">
                    <svg class="w-5 h-5 md:w-7 md:h-7 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12.01 2.01c-5.52 0-10 4.48-10 10 0 1.75.46 3.4 1.26 4.83L2 22l5.3-1.26c1.37.75 2.93 1.17 4.58 1.17a10 10 0 0010-10c0-5.52-4.48-10-10-10zm5.97 14.24c-.24.68-1.22 1.25-1.7 1.33-.43.07-.98.11-2.91-.68-2.47-1.01-4.06-3.53-4.18-3.7-.12-.16-1-1.33-1-2.54 0-1.21.63-1.8 1.21-1.8s.5.12.75.12c.24 0 .44-.04.63.4.19.46.65 1.59.71 1.71.06.12.1.26.02.42-.08.16-.12.26-.25.42-.12.16-.27.36-.39.48-.13.13-.27.27-.12.52.16.25.7 1.15 1.5 1.86.64.58 1.18.76 1.44.89.26.13.41.11.57-.07s.66-.77.83-1.04c.17-.26.34-.22.58-.13s1.51.71 1.77.84.44.19.51.3c.06.11.06.66-.18 1.34z"/></svg>
                    <span class="text-[13px] md:text-[17px] font-bold text-white transition">+60 18-911 6168</span>
                </div>
                <div class="flex items-center gap-2 md:gap-3">
                    <svg class="w-4 h-4 md:w-6 md:h-6 text-white" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    <span class="text-[13px] md:text-[17px] font-bold text-white transition">082-384 999</span>
                </div>
                <div class="flex items-center gap-2 md:gap-3">
                    <svg class="w-5 h-5 md:w-7 md:h-7 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
                    <span class="text-[13px] md:text-[17px] font-bold text-white lowercase tracking-tight break-all text-center">customersupport@arkod.com.my</span>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
