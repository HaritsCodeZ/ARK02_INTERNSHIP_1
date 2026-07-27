<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arkod | ShippingSchedule</title>
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
                        <a href="/shippingschedule" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">
                            {{ __('Shipping Schedule') }}
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
                        <a href="/shippingschedule" class="block py-2 text-sm text-yellow-400 hover:text-white">{{ __('Shipping Schedule') }}</a>
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

   <!-- START: STRAIGHT ALIGNED WHITE & GOLD JET-BLACK BOLD SCHEDULE SECTION -->
    <section class="relative bg-white text-[#000000] py-16 md:py-24 px-4 md:px-6 overflow-hidden border-t border-gray-200">
        <!-- Luxury Gold & Soft Glow Background Effects -->


        <div class="max-w-[1600px] mx-auto relative z-10">

            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-12 md:mb-20">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-yellow-500/10 border border-yellow-500/30 text-amber-600 text-xs font-bold uppercase tracking-[0.3em] mb-4 shadow-[0_4px_20px_rgba(217,119,6,0.1)]">
                    {{ __('Real-Time Operations') }}
                </div>
                <h2 class="text-3xl sm:text-4xl md:text-6xl font-black uppercase tracking-tight mb-4 md:mb-6 text-[#000000]">
                    {{ __('Shipping Schedule') }}
                </h2>
                <p class="text-[#000000] text-xs sm:text-sm md:text-base font-bold leading-relaxed px-2">
                    {{ __('Explore our comprehensive RORO and Container vessel timelines connecting Klang, Kota Kinabalu, Bintulu, and Kuching with elite precision and live tracking infrastructure.') }}
                </p>
                <!-- Non-translatable English Notice -->
                <div class="mt-4 inline-block bg-amber-50 border border-amber-200 text-amber-900 text-[10px] sm:text-[11px] font-bold tracking-wide px-3 py-1.5 rounded-md max-w-full">
                    * Note: This official schedule data is strictly displayed in English and cannot be translated to Malay or Mandarin.
                </div>
            </div>

            <!-- Stats/Highlights Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 md:gap-6 mb-12 md:mb-16">
                <div class="bg-white/90 backdrop-blur-xl border border-gray-200 rounded-2xl p-5 md:p-6 relative group hover:border-yellow-500/50 transition duration-300 shadow-[0_10px_30px_rgba(0,0,0,0.05)]">
                    <div class="absolute top-0 right-0 transform translate-x-2 -translate-y-2 w-10 h-10 md:w-12 md:h-12 bg-yellow-500/10 rounded-xl flex items-center justify-center text-amber-600 font-bold border border-yellow-500/20 group-hover:scale-110 transition text-sm md:text-base">
                        01
                    </div>
                    <div class="text-amber-600 text-[11px] md:text-xs font-bold uppercase tracking-widest mb-1">{{ __('Primary Fleet') }}</div>
                    <div class="text-xl md:text-2xl font-black uppercase tracking-wider text-[#000000]">RORO & Container</div>
                    <p class="text-[#000000] text-xs font-bold mt-2 md:mt-3">{{ __('Scheduled bi-weekly departures ensuring zero supply chain disruption across East & West Malaysia.') }}</p>
                </div>

                <div class="bg-white/90 backdrop-blur-xl border border-gray-200 rounded-2xl p-5 md:p-6 relative group hover:border-yellow-500/50 transition duration-300 shadow-[0_10px_30px_rgba(0,0,0,0.05)]">
                    <div class="absolute top-0 right-0 transform translate-x-2 -translate-y-2 w-10 h-10 md:w-12 md:h-12 bg-yellow-500/10 rounded-xl flex items-center justify-center text-amber-600 font-bold border border-yellow-500/20 group-hover:scale-110 transition text-sm md:text-base">
                        02
                    </div>
                    <div class="text-amber-600 text-[11px] md:text-xs font-bold uppercase tracking-widest mb-1">{{ __('Major Hubs') }}</div>
                    <div class="text-xl md:text-2xl font-black uppercase tracking-wider text-[#000000]">Sabah & Sarawak</div>
                    <p class="text-[#000000] text-xs font-bold mt-2 md:mt-3">{{ __('Direct pathways connecting Port Klang directly to Kuching, Bintulu, and Kota Kinabalu ports.') }}</p>
                </div>

                <div class="bg-white/90 backdrop-blur-xl border border-gray-200 rounded-2xl p-5 md:p-6 relative group hover:border-yellow-500/50 transition duration-300 shadow-[0_10px_30px_rgba(0,0,0,0.05)] sm:col-span-2 md:col-span-1">
                    <div class="absolute top-0 right-0 transform translate-x-2 -translate-y-2 w-10 h-10 md:w-12 md:h-12 bg-yellow-500/10 rounded-xl flex items-center justify-center text-amber-600 font-bold border border-yellow-500/20 group-hover:scale-110 transition text-sm md:text-base">
                        03
                    </div>
                    <div class="text-amber-600 text-[11px] md:text-xs font-bold uppercase tracking-widest mb-1">{{ __('Live Updates') }}</div>
                    <div class="text-xl md:text-2xl font-black uppercase tracking-wider text-[#000000]">Verified ETA/ETD</div>
                    <p class="text-[#000000] text-xs font-bold mt-2 md:mt-3">{{ __('Updated dynamically based on real-time berth availability and maritime weather protocols.') }}</p>
                </div>
            </div>

            <!-- CONTAINER FOR THE SCHEDULE -->
            <div class="bg-white border-2 border-yellow-400/50 rounded-2xl md:rounded-3xl p-4 sm:p-6 md:p-12 shadow-[0_20px_60px_rgba(217,119,6,0.15)] relative overflow-hidden">
                <div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-yellow-400 via-amber-500 to-yellow-400"></div>

                <!-- UNTOUCHED SCHEDULE CONTENT WITH JET BLACK & BOLD STYLING -->
                <div class="schedule-core-content text-[#000000] font-bold">
                    <div class="text-center font-black text-xs sm:text-sm md:text-lg mb-6 text-amber-600 px-2 leading-relaxed">ARKOD SMART LOGITECH SDN BHD.<br class="hidden sm:inline">LOT 1451, SEC 66 KTLD, JALAN KELULI, BIE, 93450, KUCHING, SARAWAK<br>Phone 0189116168 | springlex@arkod.com.my | www.arkod.com.my</div>

                    <h3 class="text-base sm:text-lg md:text-xl font-black uppercase text-center text-[#000000] mt-8 mb-4 border-b border-gray-300 pb-2">RORO SERVICE - TENTATIVE SCHEDULE 2026</h3>

                    <!-- JUNE 2026 -->
                    <div class="mb-8 overflow-x-auto -mx-4 sm:mx-0 px-4 sm:px-0">
                        <h4 class="text-amber-600 font-black uppercase text-xs sm:text-sm mb-3">JUNE 2026</h4>
                        <div class="min-w-[650px] sm:min-w-full">
                            <table class="w-full text-left border-collapse text-[11px] sm:text-xs md:text-sm table-fixed">
                            <colgroup>
                                <col class="w-[25%]">
                                <col class="w-[15%]">
                                <col class="w-[15%]">
                                <col class="w-[15%]">
                                <col class="w-[15%]">
                                <col class="w-[15%]">
                            </colgroup>
                            <thead>
                                <tr class="border-b border-gray-300 text-[#000000] font-black">
                                    <th class="py-2.5 px-2 sm:px-3 text-left">VESSEL NAME</th>
                                    <th class="py-2.5 px-2 sm:px-3 text-left">VOY NO.</th>
                                    <th class="py-2.5 px-2 sm:px-3 text-left">KLANG</th>
                                    <th class="py-2.5 px-2 sm:px-3 text-left">KOTA KINABALU</th>
                                    <th class="py-2.5 px-2 sm:px-3 text-left">BINTULU</th>
                                    <th class="py-2.5 px-2 sm:px-3 text-left">KUCHING</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <tr class="hover:bg-yellow-50/50">
                                    <td class="py-2.5 px-2 sm:px-3 font-black text-[#000000] truncate">GRAND VISION</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">280</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">04/06/2026</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">09/06/2026</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">08/06/2026</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">-</td>
                                </tr>
                                <tr class="hover:bg-yellow-50/50">
                                    <td class="py-2.5 px-2 sm:px-3 font-black text-[#000000] truncate">GRAND VISION</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">281</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">13/06/2026</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">-</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">16/06/2026</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">17/06/2026</td>
                                </tr>
                                <tr class="hover:bg-yellow-50/50">
                                    <td class="py-2.5 px-2 sm:px-3 font-black text-[#000000] truncate">GRAND VISION</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">282</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">20/06/2026</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">25/06/2026</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">-</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">-</td>
                                </tr>
                                <tr class="hover:bg-yellow-50/50">
                                    <td class="py-2.5 px-2 sm:px-3 font-black text-[#000000] truncate">MALAYSIA PASSION</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">71</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">19/06/2026</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">-</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">-</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">25/06/2026</td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>

                    <!-- JULY 2026 -->
                    <div class="mb-8 overflow-x-auto -mx-4 sm:mx-0 px-4 sm:px-0">
                        <h4 class="text-amber-600 font-black uppercase text-xs sm:text-sm mb-3">JULY 2026</h4>
                        <div class="min-w-[650px] sm:min-w-full">
                            <table class="w-full text-left border-collapse text-[11px] sm:text-xs md:text-sm table-fixed">
                            <colgroup>
                                <col class="w-[25%]">
                                <col class="w-[15%]">
                                <col class="w-[15%]">
                                <col class="w-[15%]">
                                <col class="w-[15%]">
                                <col class="w-[15%]">
                            </colgroup>
                            <thead>
                                <tr class="border-b border-gray-300 text-[#000000] font-black">
                                    <th class="py-2.5 px-2 sm:px-3 text-left">VESSEL NAME</th>
                                    <th class="py-2.5 px-2 sm:px-3 text-left">VOY NO.</th>
                                    <th class="py-2.5 px-2 sm:px-3 text-left">KLANG</th>
                                    <th class="py-2.5 px-2 sm:px-3 text-left">KOTA KINABALU</th>
                                    <th class="py-2.5 px-2 sm:px-3 text-left">BINTULU</th>
                                    <th class="py-2.5 px-2 sm:px-3 text-left">KUCHING</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <tr class="hover:bg-yellow-50/50">
                                    <td class="py-2.5 px-2 sm:px-3 font-black text-[#000000] truncate">GRAND VISION</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">283</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">02/07/2026</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">-</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">05/07/2026</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">06/07/2026</td>
                                </tr>
                                <tr class="hover:bg-yellow-50/50">
                                    <td class="py-2.5 px-2 sm:px-3 font-black text-[#000000] truncate">MALAYSIA GRACE</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">51</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">04/07/2026</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">-</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">-</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">07/07/2026</td>
                                </tr>
                                <tr class="hover:bg-yellow-50/50">
                                    <td class="py-2.5 px-2 sm:px-3 font-black text-[#000000] truncate">GRAND VISION</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">284</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">09/07/2026</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">13/07/2026</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">-</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">-</td>
                                </tr>
                                <tr class="hover:bg-yellow-50/50">
                                    <td class="py-2.5 px-2 sm:px-3 font-black text-[#000000] truncate">GRAND VISION</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">285</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">17/07/2026</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">-</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">20/07/2026</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">21/07/2026</td>
                                </tr>
                                <tr class="hover:bg-yellow-50/50">
                                    <td class="py-2.5 px-2 sm:px-3 font-black text-[#000000] truncate">GRAND VISION</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">286</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">24/07/2026</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">29/07/2026</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">-</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">-</td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>

                    <!-- AUGUST 2026 -->
                    <div class="mb-8 overflow-x-auto -mx-4 sm:mx-0 px-4 sm:px-0">
                        <h4 class="text-amber-600 font-black uppercase text-xs sm:text-sm mb-3">AUGUST 2026</h4>
                        <div class="min-w-[650px] sm:min-w-full">
                            <table class="w-full text-left border-collapse text-[11px] sm:text-xs md:text-sm table-fixed">
                            <colgroup>
                                <col class="w-[25%]">
                                <col class="w-[15%]">
                                <col class="w-[15%]">
                                <col class="w-[15%]">
                                <col class="w-[15%]">
                                <col class="w-[15%]">
                            </colgroup>
                            <thead>
                                <tr class="border-b border-gray-300 text-[#000000] font-black">
                                    <th class="py-2.5 px-2 sm:px-3 text-left">VESSEL NAME</th>
                                    <th class="py-2.5 px-2 sm:px-3 text-left">VOY NO.</th>
                                    <th class="py-2.5 px-2 sm:px-3 text-left">KLANG</th>
                                    <th class="py-2.5 px-2 sm:px-3 text-left">KOTA KINABALU</th>
                                    <th class="py-2.5 px-2 sm:px-3 text-left">BINTULU</th>
                                    <th class="py-2.5 px-2 sm:px-3 text-left">KUCHING</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <tr class="hover:bg-yellow-50/50">
                                    <td class="py-2.5 px-2 sm:px-3 font-black text-[#000000] truncate">GRAND VISION</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">287</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">02/08/2026</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">-</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">05/08/2026</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">06/08/2026</td>
                                </tr>
                                <tr class="hover:bg-yellow-50/50">
                                    <td class="py-2.5 px-2 sm:px-3 font-black text-[#000000] truncate">GRAND VISION</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">288</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">09/08/2026</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">13/08/2026</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">-</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">-</td>
                                </tr>
                                <tr class="hover:bg-yellow-50/50">
                                    <td class="py-2.5 px-2 sm:px-3 font-black text-[#000000] truncate">GRAND VISION</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">289</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">18/08/2026</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">-</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">21/08/2026</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">22/08/2026</td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>

                    <!-- CONTAINER SERVICE -->
                    <h3 class="text-base sm:text-lg md:text-xl font-black uppercase text-center text-[#000000] mt-12 mb-4 border-b border-gray-300 pb-2">CONTAINER SERVICE - TENTATIVE SCHEDULE 2026</h3>
                    <div class="mb-6 overflow-x-auto -mx-4 sm:mx-0 px-4 sm:px-0">
                        <div class="min-w-[500px] sm:min-w-full">
                            <table class="w-full text-left border-collapse text-[11px] sm:text-xs md:text-sm table-fixed">
                            <colgroup>
                                <col class="w-[35%]">
                                <col class="w-[25%]">
                                <col class="w-[20%]">
                                <col class="w-[20%]">
                            </colgroup>
                            <thead>
                                <tr class="border-b border-gray-300 text-[#000000] font-black">
                                    <th class="py-2.5 px-2 sm:px-3 text-left">VESSEL NAME</th>
                                    <th class="py-2.5 px-2 sm:px-3 text-left">VOY NO.</th>
                                    <th class="py-2.5 px-2 sm:px-3 text-left">KLANG</th>
                                    <th class="py-2.5 px-2 sm:px-3 text-left">KUCHING</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <tr class="hover:bg-yellow-50/50">
                                    <td class="py-2.5 px-2 sm:px-3 font-black text-[#000000] truncate">MTT LUMUT</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">26LM083E</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">29/06/2026</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">02/07/2026</td>
                                </tr>
                                <tr class="hover:bg-yellow-50/50">
                                    <td class="py-2.5 px-2 sm:px-3 font-black text-[#000000] truncate">MTT LUMUT</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">26LM084E</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">06/07/2026</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">09/07/2026</td>
                                </tr>
                                <tr class="hover:bg-yellow-50/50">
                                    <td class="py-2.5 px-2 sm:px-3 font-black text-[#000000] truncate">MTT LUMUT</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">26LM085E</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">13/07/2026</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">16/07/2026</td>
                                </tr>
                                <tr class="hover:bg-yellow-50/50">
                                    <td class="py-2.5 px-2 sm:px-3 font-black text-[#000000] truncate">MTT LUMUT</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">26LM086E</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">20/07/2026</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">23/07/2026</td>
                                </tr>
                                <tr class="hover:bg-yellow-50/50">
                                    <td class="py-2.5 px-2 sm:px-3 font-black text-[#000000] truncate">MTT LUMUT</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">26LM087E</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">27/07/2026</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">30/07/2026</td>
                                </tr>
                                <tr class="hover:bg-yellow-50/50">
                                    <td class="py-2.5 px-2 sm:px-3 font-black text-[#000000] truncate">MTT LUMUT</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">26LM088E</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">03/08/2026</td>
                                    <td class="py-2.5 px-2 sm:px-3 font-bold text-[#000000] truncate">06/08/2026</td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>

                    <!-- REMARKS -->
                    <div class="mt-6 p-4 bg-amber-50 border border-amber-200 rounded-xl text-[11px] md:text-xs text-amber-900 leading-relaxed font-black">
                        *REMARKS: The above Sailing Schedule's ETA/ETD is Tentative and subject to changes depending on Berth Availability and weather condition.
                    </div>
                </div>
                <!-- END OF SCHEDULE CONTENT -->

            </div>

        </div>
    </section>
    <!-- END: STRAIGHT ALIGNED WHITE & GOLD JET-BLACK BOLD SCHEDULE SECTION -->

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
