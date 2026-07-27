<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arkod | Community</title>
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

    <!-- OPTIMIZED HERO SECTION -->
    <section class="relative bg-[#0a0a0a] text-white pt-12 md:pt-20 pb-40 md:pb-48 overflow-hidden">
        <div class="max-w-[1600px] mx-auto px-4 sm:px-8 lg:px-16 grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center relative z-10">

            <!-- Left Column: Title and Description -->
            <div class="lg:col-span-6 space-y-6 text-center lg:text-left">
                <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black tracking-tight leading-tight">
                    {{ __('Our Trusted Partner') }}
                </h2>
                <p class="text-gray-300 text-sm sm:text-base md:text-lg max-w-xl mx-auto lg:mx-0 font-normal leading-relaxed">
                    {{ __('We collaborate with trusted organizations to deliver innovative smart logistics solutions and create lasting value for our customers.') }}
                </p>
            </div>

            <!-- Right Column: Stable Flex Container for Tablet/iPad Viewports -->
            <div class="lg:col-span-6 relative h-[280px] sm:h-[340px] md:h-[380px] w-full max-w-[420px] sm:max-w-[500px] lg:max-w-none mx-auto flex items-center justify-center">

                <!-- Avatar 1: Top Left -->
                <div class="absolute left-[2%] sm:left-[8%] top-[10%] z-10">
                    <div class="w-20 h-20 sm:w-28 sm:h-28 md:w-32 md:h-32 rounded-full border-4 border-white overflow-hidden shadow-2xl bg-gray-800">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=300&auto=format&fit=crop" alt="Partner" class="w-full h-full object-cover">
                    </div>
                </div>

                <!-- Avatar 2: Top Right -->
                <div class="absolute right-[15%] sm:right-[24%] top-[5%] z-10">
                    <div class="w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 rounded-full border-4 border-white overflow-hidden shadow-xl bg-gray-800">
                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=300&auto=format&fit=crop" alt="Partner" class="w-full h-full object-cover">
                    </div>
                </div>

                <!-- Avatar 3: Bottom Center -->
                <div class="absolute left-[22%] sm:left-[32%] bottom-[5%] sm:bottom-[10%] z-20">
                    <div class="w-20 h-20 sm:w-28 sm:h-28 md:w-32 md:h-32 rounded-full border-4 border-white overflow-hidden shadow-2xl bg-gray-800">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=300&auto=format&fit=crop" alt="Partner" class="w-full h-full object-cover">
                    </div>
                </div>

                <!-- Avatar 4: Bottom Right -->
                <div class="absolute right-[0%] sm:right-[3%] bottom-[0%] z-20">
                    <div class="w-28 h-28 sm:w-36 sm:h-36 md:w-44 md:h-44 rounded-full border-4 border-white overflow-hidden shadow-2xl bg-gray-800">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=400&auto=format&fit=crop" alt="Partner" class="w-full h-full object-cover">
                    </div>
                </div>

            </div>

        </div>

        <!-- Bottom Smooth Wave Transition -->
        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none pointer-events-none">
            <svg class="relative block w-full h-[120px] sm:h-[180px] md:h-[450px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path fill="#ffffff" d="M0,30 C400,120 800,0 1200,60 L1200,120 L0,120 Z"></path>
            </svg>
        </div>
    </section>

    <!-- SECTION: OUR PARTNERS (Pyramid Layout) -->
    <section class="bg-white text-black py-10 md:py-12 px-4 sm:px-6">
        <div class="max-w-[1400px] mx-auto text-center space-y-12 md:space-y-20">

            <div class="space-y-4">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-black tracking-tight uppercase">
                    {{ __('Our') }} <span class="text-yellow-500">{{ __('Partners') }}</span>
                </h2>
                <p class="text-sm md:text-base font-medium text-black max-w-xl mx-auto px-4">
                    {{ __('Collaborating with industry-leading organizations to deliver exceptional innovation and high-performance solutions.') }}
                </p>
                <div class="w-16 h-1 bg-yellow-400 mx-auto rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-12 items-center justify-items-center pt-4 md:pt-8 max-w-4xl mx-auto">
                <div class="order-2 md:order-1 md:translate-y-12 w-40 h-40 sm:w-48 sm:h-48 rounded-full border-2 border-gray-200 overflow-hidden flex items-center justify-center bg-gray-50 shadow-md hover:border-yellow-400 transition-colors">
                    <img src="{{ asset('images/delimalink.png') }}" alt="Delimalink" class="w-full h-full object-cover">
                </div>

                <div class="order-1 md:order-2 md:-translate-y-12 w-40 h-40 sm:w-48 sm:h-48 rounded-full border-2 border-yellow-400 overflow-hidden flex items-center justify-center bg-gray-50 shadow-lg ring-4 ring-yellow-400/20 transition-transform">
                    <img src="{{ asset('images/powersolution.png') }}" alt="Power Solution" class="w-full h-full object-cover">
                </div>

                <div class="order-3 md:order-3 md:translate-y-12 w-40 h-40 sm:w-48 sm:h-48 rounded-full border-2 border-gray-200 overflow-hidden flex items-center justify-center bg-gray-50 shadow-md hover:border-yellow-400 transition-colors">
                    <img src="{{ asset('images/aerocean.png') }}" alt="Aerocean" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION: FEATURED PARTNER COMPANIES -->
    <section class="relative bg-gradient-to-b from-slate-50 via-white to-slate-100 text-slate-900 py-16 sm:py-24 md:py-32 px-4 sm:px-6 md:px-16 overflow-hidden">
        <!-- Background Ambient Glow Effects (Switched to Gold/Yellow) -->
        <div class="max-w-[1400px] mx-auto space-y-12 md:space-y-20 relative z-10">

            <!-- Section Header -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 border-b border-slate-200 pb-8 md:pb-10">
                <div class="space-y-4">
                    <div class="inline-flex items-center space-x-2 px-3.5 py-1.5 rounded-full bg-amber-50 border border-amber-200 text-amber-800 text-xs font-bold uppercase tracking-widest shadow-sm">
                        <span class="w-2 h-2 rounded-full bg-amber-500 animate-pulse"></span>
                        <span>{{ __('Strategic Ecosystem') }}</span>
                    </div>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-black tracking-tight uppercase text-slate-900">
                        {{ __('Featured Partner') }} <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-500 via-yellow-500 to-amber-600">{{ __('Companies') }}</span>
                    </h2>
                    <p class="text-slate-900 text-sm sm:text-base md:text-lg max-w-2xl font-medium">
                        {{ __('Collaborating with industry-leading pioneers to deliver scalable, high-performance logistics, engineering, and digital solutions.') }}
                    </p>
                </div>
            </div>

            <!-- Partner List Container -->
            <div class="grid grid-cols-1 gap-6 sm:gap-8">

                <!-- Partner Item 1: Aerocean -->
                <div class="group relative bg-white rounded-2xl sm:rounded-3xl p-6 sm:p-8 md:p-12 border border-slate-200/80 shadow-sm hover:shadow-2xl hover:border-blue-500/40 transition-all duration-500 grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 items-center overflow-hidden">
                    <div class="absolute -right-24 -bottom-24 w-72 h-72 bg-blue-500/5 rounded-full blur-2xl group-hover:bg-blue-500/15 transition-all duration-500 pointer-events-none"></div>

                    <!-- Logo Column -->
                    <div class="lg:col-span-3 flex justify-center lg:justify-start p-4 sm:p-6 bg-slate-50/80 rounded-2xl border border-slate-100 group-hover:bg-blue-50/40 transition-colors duration-300">
                        <img src="{{ asset('images/newaerocean.png') }}" alt="Aerocean" class="w-36 sm:w-48 md:w-56 h-28 sm:h-35 object-contain transform group-hover:scale-105 transition-transform duration-500">
                    </div>

                    <!-- Content Column -->
                    <div class="lg:col-span-9 lg:border-l lg:border-slate-200 lg:pl-12 space-y-4">
                        <div class="flex flex-wrap items-center justify-between gap-4">
                            <div>
                                <span class="text-[10px] sm:text-xs font-bold tracking-widest uppercase text-blue-600 bg-blue-50 px-3 py-1 rounded-md">{{ __('Transportation & Logistics') }}</span>
                                <h3 class="text-xl sm:text-2xl md:text-4xl font-black tracking-tight uppercase text-slate-900 mt-2 group-hover:text-blue-600 transition-colors">
                                    {{ __('Aerocean') }}
                                </h3>
                            </div>
                            <a href="{{ route('partner.1') }}" class="inline-flex items-center space-x-2 text-xs font-bold uppercase tracking-wider text-slate-700 hover:text-blue-600 bg-slate-100 hover:bg-blue-50 px-4 py-2.5 rounded-xl transition-all shadow-sm">
                                <span>{{ __('Learn More') }}</span>
                                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                            </a>
                        </div>

                        <div class="flex items-center space-x-2.5 text-blue-600 font-semibold text-xs sm:text-sm pt-1">
                            <div class="p-1 rounded-lg bg-blue-50 shrink-0">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 15a4 4 0 004 4h10a4 4 0 004-4M3 15V9a4 4 0 014-4h10a4 4 0 014 4v6M3 15h18" />
                                </svg>
                            </div>
                            <span>{{ __('Total Logistic & Freight Forwarding Services') }}</span>
                        </div>

                        <p class="text-slate-600 text-sm sm:text-base leading-relaxed max-w-3xl">
                            {{ __('A Sarawak-based freight forwarder providing total logistic services to cater to the varied needs and expectations of our customers, established with worldwide agency relationships in all major cities.') }}
                        </p>
                    </div>
                </div>

                <!-- Partner Item 2: Power Solution -->
                <div class="group relative bg-white rounded-2xl sm:rounded-3xl p-6 sm:p-8 md:p-12 border border-slate-200/80 shadow-sm hover:shadow-2xl hover:border-amber-500/40 transition-all duration-500 grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 items-center overflow-hidden">
                    <div class="absolute -right-24 -bottom-24 w-72 h-72 bg-amber-500/5 rounded-full blur-2xl group-hover:bg-amber-500/15 transition-all duration-500 pointer-events-none"></div>

                    <!-- Logo Column -->
                    <div class="lg:col-span-3 flex justify-center lg:justify-start p-4 sm:p-6 bg-slate-50/80 rounded-2xl border border-slate-100 group-hover:bg-amber-50/40 transition-colors duration-300">
                        <img src="{{ asset('images/powersolutionnew.png') }}" alt="Power Solution" class="w-36 sm:w-48 md:w-56 h-28 sm:h-35 object-contain transform group-hover:scale-105 transition-transform duration-500">
                    </div>

                    <!-- Content Column -->
                    <div class="lg:col-span-9 lg:border-l lg:border-slate-200 lg:pl-12 space-y-4">
                        <div class="flex flex-wrap items-center justify-between gap-4">
                            <div>
                                <span class="text-[10px] sm:text-xs font-bold tracking-widest uppercase text-amber-600 bg-amber-50 px-3 py-1 rounded-md">{{ __('Electrical & Engineering') }}</span>
                                <h3 class="text-xl sm:text-2xl md:text-4xl font-black tracking-tight uppercase text-slate-900 mt-2 group-hover:text-amber-600 transition-colors">
                                    {{ __('Power Solution') }}
                                </h3>
                            </div>
                            <a href="{{ route('partner.2') }}" class="inline-flex items-center space-x-2 text-xs font-bold uppercase tracking-wider text-slate-700 hover:text-amber-600 bg-slate-100 hover:bg-amber-50 px-4 py-2.5 rounded-xl transition-all shadow-sm">
                                <span>{{ __('Learn More') }}</span>
                                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                            </a>
                        </div>

                        <div class="flex items-center space-x-2.5 text-amber-600 font-semibold text-xs sm:text-sm pt-1">
                            <div class="p-1 rounded-lg bg-amber-50 shrink-0">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                            <span>{{ __('Electrical Power & Engineering Solutions') }}</span>
                        </div>

                        <p class="text-slate-600 text-sm sm:text-base leading-relaxed max-w-3xl">
                            {{ __('Providing high-quality electrical and power solution services tailored to industrial, commercial, and residential operational needs with reliable technical expertise.') }}
                        </p>
                    </div>
                </div>

                <!-- Partner Item 3: Delimalink -->
                <div class="group relative bg-white rounded-2xl sm:rounded-3xl p-6 sm:p-8 md:p-12 border border-slate-200/80 shadow-sm hover:shadow-2xl hover:border-emerald-500/40 transition-all duration-500 grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 items-center overflow-hidden">
                    <div class="absolute -right-24 -bottom-24 w-72 h-72 bg-emerald-500/5 rounded-full blur-2xl group-hover:bg-emerald-500/15 transition-all duration-500 pointer-events-none"></div>

                    <!-- Logo Column -->
                    <div class="lg:col-span-3 flex justify-center lg:justify-start p-4 sm:p-6 bg-slate-50/80 rounded-2xl border border-slate-100 group-hover:bg-emerald-50/40 transition-colors duration-300">
                        <img src="{{ asset('images/NEWDELIMALINK.png') }}" alt="Delimalink" class="w-36 sm:w-48 md:w-56 h-28 sm:h-35 object-contain transform group-hover:scale-105 transition-transform duration-500">
                    </div>

                    <!-- Content Column -->
                    <div class="lg:col-span-9 lg:border-l lg:border-slate-200 lg:pl-12 space-y-4">
                        <div class="flex flex-wrap items-center justify-between gap-4">
                            <div>
                                <span class="text-[10px] sm:text-xs font-bold tracking-widest uppercase text-emerald-600 bg-emerald-50 px-3 py-1 rounded-md">{{ __('Courier & Logistics') }}</span>
                                <h3 class="text-xl sm:text-2xl md:text-4xl font-black tracking-tight uppercase text-slate-900 mt-2 group-hover:text-emerald-600 transition-colors">
                                    {{ __('Delima link') }}
                                </h3>
                            </div>
                            <a href="{{ route('partner.3') }}" class="inline-flex items-center space-x-2 text-xs font-bold uppercase tracking-wider text-slate-700 hover:text-emerald-600 bg-slate-100 hover:bg-emerald-50 px-4 py-2.5 rounded-xl transition-all shadow-sm">
                                <span>{{ __('Learn More') }}</span>
                                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                            </a>
                        </div>

                        <div class="flex items-center space-x-2.5 text-emerald-600 font-semibold text-xs sm:text-sm pt-1">
                            <div class="p-1 rounded-lg bg-emerald-50 shrink-0">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                                </svg>
                            </div>
                            <span>{{ __('Express Delivery & Logistics Solutions') }}</span>
                        </div>

                        <p class="text-slate-600 text-sm sm:text-base leading-relaxed max-w-3xl">
                            {{ __('Delima link offers efficient courier, shipping, and logistics solutions designed to seamlessly connect businesses and customers through a dependable network.') }}
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- SECTION: GLOBAL PARTNERSHIP INVITATION / WORLDWIDE ECOSYSTEM -->
    <section class="relative bg-white text-slate-900 py-16 sm:py-24 md:py-32 px-4 sm:px-6 md:px-16 overflow-hidden border-t border-slate-200">

        <div class="max-w-[1200px] mx-auto relative z-10 space-y-12 md:space-y-20">

            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto space-y-4">
                <div class="inline-flex items-center space-x-2 px-4 py-1.5 rounded-full bg-yellow-50 border border-yellow-300 shadow-sm">
                    <span class="text-xs font-black uppercase tracking-[0.25em] text-yellow-500">{{ __('Global Expansion') }}</span>
                </div>
                <h2 class="text-3xl sm:text-4xl md:text-6xl font-black uppercase tracking-tight text-slate-900 leading-none">
                    {{ __('Partner With') }} <br class="hidden sm:inline"> <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-500 via-yellow-500 to-yellow-500">{{ __('ARKOD NOW!') }}</span>
                </h2>
                <p class="text-slate-600 text-sm sm:text-base md:text-lg font-medium leading-relaxed px-2">
                    {{ __('Join forces with Arkod to integrate next-gen logistics infrastructure and scale your enterprise globally.') }}
                </p>
            </div>

            <!-- Ultimate High-Impact Interactive Bento Grid Box -->
            <div class="relative rounded-2xl sm:rounded-[2.5rem] p-6 sm:p-10 md:p-16 bg-gradient-to-b from-slate-50 via-white to-yellow-50/40 text-slate-900 border-2 border-yellow-500/60 shadow-[0_20px_50px_rgba(234,179,8,0.15)] overflow-hidden group hover:border-yellow-500 transition-all duration-500">

                <!-- Decorative Grid Overlay Pattern -->
                <div class="absolute inset-0 bg-[linear-gradient(to_right,#f1f5f9_1px,transparent_1px),linear-gradient(to_bottom,#f1f5f9_1px,transparent_1px)] bg-[size:4rem_4rem] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_50%,#000_70%,transparent_100%)] opacity-60 pointer-events-none"></div>

                <!-- Inner Glowing Accent Bar -->
                <div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-yellow-500 via-yellow-500 to-yellow-500"></div>

                <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-8 md:gap-10 items-center">

                    <!-- Left Column: Compelling Hook -->
                    <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                        <div class="inline-block p-3 rounded-2xl bg-yellow-500/10 border border-yellow-300/60 text-yellow-500 mb-2">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl sm:text-3xl md:text-5xl font-black uppercase tracking-tight text-slate-900 leading-tight">
                            {{ __('Ready To Scale') }} <br class="hidden md:inline"><span class="text-yellow-500">{{ __('With Us?') }}</span>
                        </h3>
                        <p class="text-slate-600 text-sm sm:text-base md:text-lg font-normal leading-relaxed max-w-xl mx-auto lg:mx-0">
                            {{ __('Submit your corporate credentials through our official intake portal and unlock priority access to our strategic alliance team.') }}
                        </p>

                        <!-- Mini Feature Checklist -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-2 text-left max-w-md mx-auto lg:mx-0">
                            <div class="flex items-center space-x-2.5 justify-center sm:justify-start">
                                <div class="w-5 h-5 rounded-full bg-yellow-50 flex items-center justify-center text-yellow-500 font-bold text-xs shrink-0">✓</div>
                                <span class="text-xs font-bold uppercase tracking-wider text-slate-700">{{ __('Instant Onboarding') }}</span>
                            </div>
                            <div class="flex items-center space-x-2.5 justify-center sm:justify-start">
                                <div class="w-5 h-5 rounded-full bg-yellow-50 flex items-center justify-center text-yellow-500 font-bold text-xs shrink-0">✓</div>
                                <span class="text-xs font-bold uppercase tracking-wider text-slate-700">{{ __('Global Network') }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column: High Conversion Action Card -->
                    <div class="lg:col-span-5 flex flex-col items-center justify-center bg-white p-6 sm:p-8 rounded-2xl sm:rounded-3xl border border-slate-200 shadow-xl space-y-6 text-center relative group/card hover:shadow-2xl transition-all duration-300">
                        <div class="absolute -top-3 bg-slate-900 text-yellow-500 text-[10px] font-black uppercase tracking-widest px-3 py-1 rounded-full shadow-md">
                            {{ __('Secure Portal') }}
                        </div>

                        <div class="space-y-2">
                            <h4 class="text-lg sm:text-xl font-black text-slate-900 uppercase">{{ __('Apply For Partnership') }}</h4>
                        </div>

                        <div class="w-full">
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfJS2DBaRSqA2G1FUrkKzZ6xX2QowdQw9_4Y0OR9MOdh23t7Q/viewform?pli=1"
                               target="_blank"
                               rel="noopener noreferrer"
                               class="relative group/btn w-full inline-flex items-center justify-center space-x-3 bg-gradient-to-r from-yellow-500 via-yellow-500 to-yellow-500 hover:from-slate-900 hover:via-slate-900 hover:to-slate-900 text-white font-black px-6 sm:px-8 py-4 sm:py-5 rounded-2xl text-xs sm:text-sm uppercase tracking-wider transition-all duration-300 shadow-[0_10px_30px_rgba(234,179,8,0.4)] hover:shadow-[0_15px_40px_rgba(15,23,42,0.3)] hover:scale-[1.02] active:scale-95">
                                <span>{{ __('Register Partnership Now') }}</span>
                                <svg class="w-5 h-5 transform group-hover/btn:translate-x-1.5 transition-transform duration-300 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </a>
                        </div>

                        <p class="text-[11px] font-medium text-slate-400 tracking-wide">
                            {{ __('Protected via Google Secure Forms • Response within 24 hours') }}
                        </p>
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
