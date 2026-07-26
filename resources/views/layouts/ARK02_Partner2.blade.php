<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arkod | Partners</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700;900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        [x-cloak] { display: none !important; }
        html { scroll-behavior: smooth; }
        body { font-family: 'Montserrat', sans-serif; }

        /* Mobile Improvements */
        @media (max-width: 768px) {
            .carousel-container { height: 420px !important; }
            .service-card { padding: 2rem !important; }
            .hero-text { font-size: 2.5rem !important; line-height: 1.1 !important; }
        }
    </style>
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

    <!-- SECTION: PARTNER DETAILS CONTAINER (POWER SOLUTIONS SDN. BHD.) -->
    <section class="bg-white py-8 md:py-12 px-4 sm:px-6 md:px-12 min-h-screen text-slate-900 font-montserrat">
        <div class="max-w-[1440px] mx-auto space-y-6">

            <!-- Back Navigation Header -->
            <div>
                <a href="/Community" class="inline-flex items-center space-x-2 text-xs font-bold text-slate-600 hover:text-yellow-500 transition-colors uppercase tracking-widest bg-slate-100 px-3.5 py-2 rounded-xl border border-slate-200/80">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    <span>{{ __('Back to Partners') }}</span>
                </a>
            </div>

            <!-- Main Layout Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 md:gap-8 items-start">

                <!-- LEFT SIDEBAR: Partner Profile Card (col-span-3) -->
                <div class="lg:col-span-3 bg-slate-50 border border-slate-200/80 rounded-[1.75rem] md:rounded-[2rem] p-5 sm:p-6 md:p-8 space-y-6 md:space-y-8 shadow-lg relative">

                    <!-- Logo & Title Header -->
                    <div class="text-center space-y-4">
                        <div class="w-36 h-36 sm:w-44 sm:h-44 md:w-60 md:h-60 mx-auto bg-white rounded-2xl md:rounded-full flex items-center justify-center p-4 shadow-sm border border-slate-100 overflow-hidden">
                            <img src="{{ asset('images/powersolutionnew.png') }}" alt="Power Solutions Logo" class="w-full h-full object-contain scale-110 md:scale-125">
                        </div>
                        <div class="space-y-1">
                            <h1 class="text-lg sm:text-xl md:text-2xl font-black uppercase tracking-tight text-slate-900">Power Solutions</h1>
                            <p class="text-[10px] sm:text-[11px] font-bold text-yellow-500 uppercase tracking-widest">{{ __('Power Infrastructure & UPS') }}</p>
                        </div>
                    </div>

                    <div class="h-[1px] w-full bg-slate-200"></div>

                    <!-- Metadata Details List -->
                    <div class="space-y-5 text-sm">
                        <!-- Industry -->
                        <div class="flex items-start space-x-3">
                            <div class="p-2.5 rounded-2xl bg-white text-yellow-500 shadow-sm border border-slate-100 shrink-0">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                            <div>
                                <span class="block text-[10px] font-bold uppercase tracking-widest text-slate-400">{{ __('Industry') }}</span>
                                <span class="font-bold text-slate-900 uppercase tracking-wider text-xs">{{ __('Power & Electrical Infrastructure') }}</span>
                            </div>
                        </div>

                        <!-- Headquarters -->
                        <div class="flex items-start space-x-3">
                            <div class="p-2.5 rounded-2xl bg-white text-yellow-500 shadow-sm border border-slate-100 shrink-0">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <div>
                                <span class="block text-[10px] font-bold uppercase tracking-widest text-slate-400">{{ __('Headquarters') }}</span>
                                <span class="font-bold text-slate-900 uppercase tracking-wider text-xs">
                                {{ __('No.65, Jalan P10/21, Selaman Industrial Park, 43650 Bandar Baru Bangi, Selangor Darul Ehsan, Malaysia.') }}</span>
                            </div>
                        </div>

                        <!-- Website -->
                        <div class="flex items-start space-x-3">
                            <div class="p-2.5 rounded-2xl bg-white text-yellow-500 shadow-sm border border-slate-100 shrink-0">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9h18"/>
                                </svg>
                            </div>
                            <div class="overflow-hidden">
                                <span class="block text-[10px] font-bold uppercase tracking-widest text-slate-400">{{ __('Website') }}</span>
                                <a href="https://powersolutions.com.my" target="_blank" rel="noopener noreferrer" class="font-bold text-yellow-500 hover:underline inline-flex items-center space-x-1 uppercase tracking-wider text-xs truncate max-w-full">
                                    <span class="truncate">powersolutions.com.my</span>
                                    <svg class="w-3 h-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar Action Button -->
                    <div class="pt-2">
                        <a href="mailto:enquiry@powersolutions.com.my" class="w-full flex items-center justify-center space-x-2 bg-transparent hover:bg-yellow-500 text-yellow-600 hover:text-white font-black py-3.5 px-4 rounded-2xl border-2 border-yellow-500 transition-all duration-300 uppercase tracking-widest text-xs shadow-sm">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <span>{{ __('Contact Partner') }}</span>
                        </a>
                    </div>

                </div>

                <!-- RIGHT CONTENT PANEL: Main Details (col-span-9) -->
                <div class="lg:col-span-9 space-y-6 md:space-y-8">

                    <!-- TOP HERO BANNER CARD -->
                    <div class="bg-white border border-slate-200/80 rounded-[1.75rem] md:rounded-[2rem] relative overflow-hidden flex flex-col md:flex-row items-center justify-between shadow-lg">

                        <div class="p-6 sm:p-8 md:p-10 space-y-5 md:space-y-6 max-w-lg relative z-10 w-full">
                            <div class="space-y-1">
                                <h2 class="text-2xl sm:text-3xl md:text-5xl font-black tracking-tight text-slate-900">Power Solutions</h2>
                                <p class="text-yellow-500 font-bold text-xs uppercase tracking-wider">{{ __('UPS Systems & Power Infrastructure Solutions') }}</p>
                            </div>

                            <p class="text-slate-600 text-xs md:text-sm leading-relaxed font-normal">
                                {{ __('Delivering cutting-edge uninterruptible power supplies (UPS), power quality regulation, and robust infrastructure solutions to ensure mission-critical operational continuity.') }}
                            </p>

                            <div class="flex flex-wrap gap-2 pt-1">
                                <span class="px-3.5 py-1.5 rounded-full bg-yellow-50/80 border border-yellow-100 text-[10px] sm:text-[11px] font-bold text-yellow-700 shadow-sm">{{ __('UPS Systems') }}</span>
                                <span class="px-3.5 py-1.5 rounded-full bg-yellow-50/80 border border-yellow-100 text-[10px] sm:text-[11px] font-bold text-yellow-700 shadow-sm">{{ __('Voltage Regulators') }}</span>
                                <span class="px-3.5 py-1.5 rounded-full bg-yellow-50/80 border border-yellow-100 text-[10px] sm:text-[11px] font-bold text-yellow-700 shadow-sm">{{ __('LiFePO₄ Batteries') }}</span>
                                <span class="px-3.5 py-1.5 rounded-full bg-yellow-50/80 border border-yellow-100 text-[10px] sm:text-[11px] font-bold text-yellow-700 shadow-sm">{{ __('Data Center Solutions') }}</span>
                            </div>

                            <div class="flex flex-wrap items-center gap-2.5 pt-2">
                                <a href="https://powersolutions.com.my" target="_blank" rel="noopener noreferrer" class="inline-flex items-center space-x-2 bg-yellow-500 hover:bg-yellow-600 text-white font-bold px-5 md:px-6 py-3 rounded-xl text-xs transition shadow-md">
                                    <span>{{ __('Visit Website') }}</span>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                    </svg>
                                </a>
                                <a href="mailto:enquiry@powersolutions.com.my" class="inline-flex items-center space-x-2 bg-white hover:bg-slate-50 text-slate-900 font-bold px-5 md:px-6 py-3 rounded-xl text-xs border border-slate-200 transition shadow-sm">
                                    <svg class="w-4 h-4 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                    <span>{{ __('Contact Partner') }}</span>
                                </a>
                            </div>
                        </div>

                        <div class="relative w-full md:w-[45%] h-56 sm:h-64 md:h-80 bg-slate-100 overflow-hidden flex items-center justify-center border-t md:border-t-0 md:border-l border-slate-200">
                            <img src="{{ asset('images/powerx.png') }}" alt="Power Solutions Sdn. Bhd. Headquarters Building" class="w-full h-full object-cover">
                        </div>

                    </div>

                    <!-- TWO COLUMN SECTION: About & Services -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">

                        <div class="bg-slate-50 border border-slate-200/80 rounded-[1.75rem] md:rounded-[2rem] p-6 sm:p-8 space-y-6 shadow-lg flex flex-col justify-between">
                            <div class="space-y-4">
                                <h3 class="text-lg md:text-xl font-black uppercase tracking-tight text-slate-900 border-b border-slate-200 pb-3 md:pb-4">{{ __('About') }}</h3>
                                <p class="text-slate-600 text-xs md:text-sm leading-relaxed font-normal">
                                    {{ __('Established with a deep commitment to high-reliability electrical engineering, Power Solutions specializes in comprehensive protection frameworks, clean backup power supplies, and state-of-the-art power distribution hardware for industrial and commercial sectors.') }}
                                </p>
                            </div>
                            <div class="pt-6 flex justify-end opacity-20 text-yellow-500">
                                <svg class="w-14 h-14 md:w-16 md:h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                        </div>

                        <div class="bg-slate-50 border border-slate-200/80 rounded-[1.75rem] md:rounded-[2rem] p-6 sm:p-8 space-y-6 shadow-lg flex flex-col justify-between">
                            <div class="space-y-5 md:space-y-6">
                                <h3 class="text-lg md:text-xl font-black uppercase tracking-tight text-slate-900 border-b border-slate-200 pb-3 md:pb-4">{{ __('Services') }}</h3>
                                <ul class="space-y-3.5 md:space-y-4">
                                    <li class="flex items-center space-x-3 text-xs md:text-sm font-bold text-slate-800">
                                        <div class="w-5 h-5 md:w-6 md:h-6 rounded-full bg-yellow-100 text-yellow-700 flex items-center justify-center text-[10px] md:text-xs border border-yellow-200 font-black shrink-0">✓</div>
                                        <span class="uppercase tracking-wider">{{ __('Uninterruptible Power Supply (UPS)') }}</span>
                                    </li>
                                    <li class="flex items-center space-x-3 text-xs md:text-sm font-bold text-slate-800">
                                        <div class="w-5 h-5 md:w-6 md:h-6 rounded-full bg-yellow-100 text-yellow-700 flex items-center justify-center text-[10px] md:text-xs border border-yellow-200 font-black shrink-0">✓</div>
                                        <span class="uppercase tracking-wider">{{ __('Voltage Regulators & Stabilizers') }}</span>
                                    </li>
                                    <li class="flex items-center space-x-3 text-xs md:text-sm font-bold text-slate-800">
                                        <div class="w-5 h-5 md:w-6 md:h-6 rounded-full bg-yellow-100 text-yellow-700 flex items-center justify-center text-[10px] md:text-xs border border-yellow-200 font-black shrink-0">✓</div>
                                        <span class="uppercase tracking-wider">{{ __('Frequency Converters') }}</span>
                                    </li>
                                    <li class="flex items-center space-x-3 text-xs md:text-sm font-bold text-slate-800">
                                        <div class="w-5 h-5 md:w-6 md:h-6 rounded-full bg-yellow-100 text-yellow-700 flex items-center justify-center text-[10px] md:text-xs border border-yellow-200 font-black shrink-0">✓</div>
                                        <span class="uppercase tracking-wider">{{ __('LiFePO₄ & Battery Storage Systems') }}</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="pt-4 flex justify-end">
                                <div class="w-12 h-12 rounded-xl border border-slate-200 bg-white shadow-sm flex items-center justify-center text-slate-400">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- GALLERY SECTION -->
                    <div class="bg-slate-50 border border-slate-200/80 rounded-[1.75rem] md:rounded-[2rem] p-6 sm:p-8 space-y-6 shadow-lg">
                        <h3 class="text-lg md:text-xl font-black uppercase tracking-tight text-slate-900 border-b border-slate-200 pb-3 md:pb-4">{{ __('Gallery') }}</h3>

                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 md:gap-6">
                            <!-- Image 1 -->
                            <div class="group relative h-48 sm:h-52 md:h-56 rounded-2xl bg-white border border-slate-200 shadow-sm overflow-hidden flex items-center justify-center">
                                <img src="{{ asset('images/power1.png') }}" alt="Power Infrastructure Unit" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                                    <span class="text-white text-[10px] font-bold uppercase tracking-widest">{{ __('Power Infrastructure') }}</span>
                                </div>
                            </div>

                            <!-- Image 2 -->
                            <div class="group relative h-48 sm:h-52 md:h-56 rounded-2xl bg-white border border-slate-200 shadow-sm overflow-hidden flex items-center justify-center">
                                <img src="{{ asset('images/power2.png') }}" alt="Battery Systems" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                                    <span class="text-white text-[10px] font-bold uppercase tracking-widest">{{ __('Battery Systems') }}</span>
                                </div>
                            </div>

                            <!-- Image 3 -->
                            <div class="group relative h-48 sm:h-52 md:h-56 rounded-2xl bg-white border border-slate-200 shadow-sm overflow-hidden flex items-center justify-center sm:col-span-2 md:col-span-1">
                                <img src="{{ asset('images/power3.png') }}" alt="Container Unit Setup" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                                    <span class="text-white text-[10px] font-bold uppercase tracking-widest">{{ __('Container Unit Setup') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

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

