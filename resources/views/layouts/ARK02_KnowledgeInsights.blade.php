<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARKOD | Knowledge & Insights</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700;900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>[x-cloak] { display: none !important; }</style>
</head>
<body class="bg-[#0a0a0a] font-montserrat antialiased text-white">

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

                <a href="/membership" class="text-gray-300 hover:text-white text-sm font-semibold uppercase tracking-wider transition shrink-0 whitespace-nowrap">
                    {{ __('Membership') }}
                </a>

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

                <a href="/membership" class="block py-2 text-gray-300 hover:text-white">{{ __('Membership') }}</a>
                <a href="#" class="block py-2 text-white hover:text-yellow-400 font-bold">{{ __('Login') }}</a>

                <a href="#" class="block bg-yellow-400 text-black text-center font-black py-3 rounded-md text-sm shadow-md mt-2">
                    {{ __('Sign Up') }}
                </a>

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

<section
    x-data="knowledgeCarousel"
    x-init="init()"
    @touchstart="touchStartX = $event.changedTouches[0].screenX"
    @touchend="touchEndX = $event.changedTouches[0].screenX; handleSwipe()"
    class="w-full bg-white py-10 md:py-16 overflow-hidden font-montserrat relative select-none"
 Gentile-reminders="Please ensure tailwind config handles arbitrary values like translate-x-[380px]">
    <div class="max-w-[1600px] mx-auto px-4 md:px-6">
        <div class="text-center mb-8 md:mb-16">
            <h2 class="text-3xl md:text-5xl font-black text-[#0a0a0a] tracking-tighter">{{ __('KNOWLEDGE & INSIGHTS') }}</h2>
            <div class="w-16 md:w-24 h-1 bg-yellow-400 mx-auto mt-3 mb-4 md:mb-6"></div>
            <p class="text-gray-600 text-sm md:text-lg max-w-2xl mx-auto px-4">
                {{ __('Deep dives into specialized logistics for food, healthcare, industrial machinery, and beyond!') }}
            </p>
        </div>

        <div class="relative flex items-center justify-center h-[520px] md:h-[620px] mx-auto w-full" style="max-width: 1480px;">

            <button
                @click="prev(); resetInterval();"
                class="hidden md:block absolute left-4 z-50 p-4 text-black hover:text-yellow-500 transition-all hover:scale-110 focus:outline-none"
                aria-label="Previous">
                <svg class="w-12 h-12 stroke-[3]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
                </svg>
            </button>

            <div class="relative w-full h-[480px] md:h-[580px] flex items-center justify-center px-4">

                <div class="absolute transition-all duration-700 ease-out overflow-hidden shadow-2xl rounded-[36px] md:rounded-[52px] border-4 border-white h-[460px] md:h-[560px]"
                     :class="{
                        'z-30 scale-100 md:scale-110 translate-x-0 -translate-y-0 md:-translate-y-4 opacity-100 w-full max-w-[340px] md:w-[460px] md:max-w-[460px]': active === 1,
                        'z-20 -translate-x-[380px] scale-95 opacity-80 hidden md:block w-[410px] max-w-[410px] md:h-[500px]': active === 5,
                        'z-20 translate-x-[380px] scale-95 opacity-80 hidden md:block w-[410px] max-w-[410px] md:h-[500px]': active === 2,
                        'z-10 -translate-x-[620px] scale-75 opacity-30 hidden md:block w-[410px] max-w-[410px] md:h-[500px]': active === 4,
                        'z-0 translate-x-[620px] scale-75 opacity-0 hidden md:block w-[410px] max-w-[410px] md:h-[500px]': active === 3,
                        'pointer-events-none opacity-0 hidden': active !== 1 && active !== 5 && active !== 2 && active !== 4 && active !== 3
                     }">
                    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1581092160607-ee22621dd758?q=80&w=800&auto=format&fit=crop')"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 md:p-10 text-white">
                        <h3 class="font-black text-2xl md:text-3xl mb-1 md:mb-2">{{ __('Industrial') }}</h3>
                        <p class="text-xs md:text-sm opacity-90 mb-4 md:mb-6 line-clamp-3 md:line-clamp-none">{{ __('Robust supply chains for heavy infrastructure.') }}</p>
                        <button @click="openDetails(1)" class="inline-block text-xs md:text-sm font-bold uppercase tracking-widest hover:text-yellow-400 transition focus:outline-none">{{ __('Read More →') }}</button>
                    </div>
                </div>

                <div class="absolute transition-all duration-700 ease-out overflow-hidden shadow-2xl rounded-[36px] md:rounded-[52px] border-4 border-white h-[460px] md:h-[560px]"
                     :class="{
                        'z-30 scale-100 md:scale-110 translate-x-0 -translate-y-0 md:-translate-y-4 opacity-100 w-full max-w-[340px] md:w-[460px] md:max-w-[460px]': active === 2,
                        'z-20 -translate-x-[380px] scale-95 opacity-80 hidden md:block w-[410px] max-w-[410px] md:h-[500px]': active === 1,
                        'z-20 translate-x-[380px] scale-95 opacity-80 hidden md:block w-[410px] max-w-[410px] md:h-[500px]': active === 3,
                        'z-10 -translate-x-[620px] scale-75 opacity-30 hidden md:block w-[410px] max-w-[410px] md:h-[500px]': active === 5,
                        'z-0 translate-x-[620px] scale-75 opacity-0 hidden md:block w-[410px] max-w-[410px] md:h-[500px]': active === 4,
                        'pointer-events-none opacity-0 hidden': active !== 2 && active !== 1 && active !== 3 && active !== 5 && active !== 4
                     }">
                    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1542838132-92c53300491e?q=80&w=800&auto=format&fit=crop')"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 md:p-10 text-white">
                        <h3 class="font-black text-2xl md:text-3xl mb-1 md:mb-2">{{ __('Food & Beverage') }}</h3>
                        <p class="text-xs md:text-sm opacity-90 mb-4 md:mb-6 line-clamp-3 md:line-clamp-none">{{ __('Revolutionize the way you handle dry-packed products.') }}</p>
                        <button @click="openDetails(2)" class="inline-block text-xs md:text-sm font-bold uppercase tracking-widest hover:text-yellow-400 transition focus:outline-none">{{ __('Read More →') }}</button>
                    </div>
                </div>

                <div class="absolute transition-all duration-700 ease-out overflow-hidden shadow-2xl rounded-[36px] md:rounded-[52px] border-4 border-white h-[460px] md:h-[560px]"
                     :class="{
                        'z-30 scale-100 md:scale-110 translate-x-0 -translate-y-0 md:-translate-y-4 opacity-100 w-full max-w-[340px] md:w-[460px] md:max-w-[460px]': active === 3,
                        'z-20 -translate-x-[380px] scale-95 opacity-80 hidden md:block w-[410px] max-w-[410px] md:h-[500px]': active === 2,
                        'z-20 translate-x-[380px] scale-95 opacity-80 hidden md:block w-[410px] max-w-[410px] md:h-[500px]': active === 4,
                        'z-10 -translate-x-[620px] scale-75 opacity-30 hidden md:block w-[410px] max-w-[410px] md:h-[500px]': active === 1,
                        'z-0 translate-x-[620px] scale-75 opacity-0 hidden md:block w-[410px] max-w-[410px] md:h-[500px]': active === 5,
                        'pointer-events-none opacity-0 hidden': active !== 3 && active !== 2 && active !== 4 && active !== 1 && active !== 5
                     }">
                    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?q=80&w=800&auto=format&fit=crop')"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 md:p-10 text-white">
                        <h3 class="font-black text-2xl md:text-3xl mb-1 md:mb-2">{{ __('Health & Cosmetics') }}</h3>
                        <p class="text-xs md:text-sm opacity-90 mb-4 md:mb-6 line-clamp-3 md:line-clamp-none">{{ __('Your gateway to a healthier and more beautiful business!') }}</p>
                        <button @click="openDetails(3)" class="inline-block text-xs md:text-sm font-bold uppercase tracking-widest hover:text-yellow-400 transition focus:outline-none">{{ __('Read More →') }}</button>
                    </div>
                </div>

                <div class="absolute transition-all duration-700 ease-out overflow-hidden shadow-2xl rounded-[36px] md:rounded-[52px] border-4 border-white h-[460px] md:h-[560px]"
                     :class="{
                        'z-30 scale-100 md:scale-110 translate-x-0 -translate-y-0 md:-translate-y-4 opacity-100 w-full max-w-[340px] md:w-[460px] md:max-w-[460px]': active === 4,
                        'z-20 -translate-x-[380px] scale-95 opacity-80 hidden md:block w-[410px] max-w-[410px] md:h-[500px]': active === 3,
                        'z-20 translate-x-[380px] scale-95 opacity-80 hidden md:block w-[410px] max-w-[410px] md:h-[500px]': active === 5,
                        'z-10 -translate-x-[620px] scale-75 opacity-30 hidden md:block w-[410px] max-w-[410px] md:h-[500px]': active === 2,
                        'z-0 translate-x-[620px] scale-75 opacity-0 hidden md:block w-[410px] max-w-[410px] md:h-[500px]': active === 1,
                        'pointer-events-none opacity-0 hidden': active !== 4 && active !== 3 && active !== 5 && active !== 2 && active !== 1
                     }">
                    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=800&auto=format&fit=crop')"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 md:p-10 text-white">
                        <h3 class="font-black text-2xl md:text-3xl mb-1 md:mb-2">{{ __('Sport & Recreational') }}</h3>
                        <p class="text-xs md:text-sm opacity-90 mb-4 md:mb-6 line-clamp-3 md:line-clamp-none">{{ __('Providing top-notch fulfillment services that score big.') }}</p>
                        <button @click="openDetails(4)" class="inline-block text-xs md:text-sm font-bold uppercase tracking-widest hover:text-yellow-400 transition focus:outline-none">{{ __('Read More →') }}</button>
                    </div>
                </div>

                <div class="absolute transition-all duration-700 ease-out overflow-hidden shadow-2xl rounded-[36px] md:rounded-[52px] border-4 border-white h-[460px] md:h-[560px]"
                     :class="{
                        'z-30 scale-100 md:scale-110 translate-x-0 -translate-y-0 md:-translate-y-4 opacity-100 w-full max-w-[340px] md:w-[460px] md:max-w-[460px]': active === 5,
                        'z-20 -translate-x-[380px] scale-95 opacity-80 hidden md:block w-[410px] max-w-[410px] md:h-[500px]': active === 4,
                        'z-20 translate-x-[380px] scale-95 opacity-80 hidden md:block w-[410px] max-w-[410px] md:h-[500px]': active === 1,
                        'z-10 -translate-x-[620px] scale-75 opacity-30 hidden md:block w-[410px] max-w-[410px] md:h-[500px]': active === 3,
                        'z-0 translate-x-[620px] scale-75 opacity-0 hidden md:block w-[410px] max-w-[410px] md:h-[500px]': active === 2,
                        'pointer-events-none opacity-0 hidden': active !== 5 && active !== 4 && active !== 1 && active !== 3 && active !== 2
                     }">
                    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1578916171728-46686eac8d58?q=80&w=800&auto=format&fit=crop')"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 md:p-10 text-white">
                        <h3 class="font-black text-2xl md:text-3xl mb-1 md:mb-2">{{ __('Smart Logistics') }}</h3>
                        <p class="text-xs md:text-sm opacity-90 mb-4 md:mb-6 line-clamp-3 md:line-clamp-none">{{ __('And beyond! Tailored distribution mechanisms worldwide.') }}</p>
                        <button @click="openDetails(5)" class="inline-block text-xs md:text-sm font-bold uppercase tracking-widest hover:text-yellow-400 transition focus:outline-none">{{ __('Read More →') }}</button>
                    </div>
                </div>

            </div>

            <button
                @click="next(); resetInterval();"
                class="hidden md:block absolute right-4 z-50 p-4 text-black hover:text-yellow-500 transition-all hover:scale-110 focus:outline-none"
                aria-label="Next">
                <svg class="w-12 h-12 stroke-[3]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                </svg>
            </button>
        </div>

        <div class="flex md:hidden justify-center items-center gap-2 mt-4">
            <template x-for="i in total" :key="i">
                <span class="h-2 rounded-full transition-all duration-300"
                      :class="active === i ? 'w-6 bg-yellow-400' : 'w-2 bg-gray-300'"
                      @click="active = i; resetInterval();"></span>
            </template>
        </div>
    </div>

    <div
        x-show="modalOpen"
        x-cloak
        class="fixed inset-0 z-[200] flex items-center justify-center p-4"
        @keydown.escape.window="modalOpen = false"
    >
        <div
            x-show="modalOpen"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="absolute inset-0 bg-black/80 backdrop-blur-sm"
            @click="modalOpen = false"
        ></div>

        <div
            x-show="modalOpen"
            x-transition:enter="transition ease-out duration-400 cubic-bezier(0.34, 1.56, 0.64, 1)"
            x-transition:enter-start="opacity-0 scale-90 translate-y-8"
            x-transition:enter-end="opacity-100 scale-100 translate-y-0"
            x-transition:leave="transition ease-in duration-350"
            x-transition:leave-start="opacity-100 scale-100 translate-y-0"
            x-transition:leave-end="opacity-0 scale-95 translate-y-4"
            class="bg-[#0f0f0f] border-2 border-white/10 rounded-[24px] md:rounded-[40px] shadow-[0_0_50px_rgba(0,0,0,0.8)] max-w-2xl w-full max-h-[calc(100vh-2rem)] overflow-y-auto z-10 relative text-white scrollbar-none"
        >
            <div class="h-40 md:h-56 w-full relative bg-cover bg-center border-b border-white/10" :style="`background-image: url('${modalData.img}')`">
                <div class="absolute inset-0 bg-gradient-to-t from-[#0f0f0f] via-[#0f0f0f]/40 to-black/20"></div>

                <button
                    @click="modalOpen = false"
                    class="absolute top-4 right-4 md:top-6 md:right-6 p-2 rounded-full bg-black/50 border border-white/20 text-white hover:bg-yellow-400 hover:text-black hover:border-yellow-400 transition-all duration-200 focus:outline-none"
                    aria-label="Close modal"
                >
                    <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <div class="p-6 md:p-10">
                <div class="flex items-center gap-4 mb-3 md:mb-4">
                    <span class="text-[9px] md:text-[10px] font-black uppercase tracking-[0.25em] bg-yellow-400/10 text-yellow-400 px-2.5 py-1 rounded-md border border-yellow-400/20">{{ __('ARKOD INSIGHTS') }}</span>
                </div>
                <h3 class="text-2xl md:text-4xl font-black text-white tracking-tight uppercase mb-4 md:mb-6" x-text="modalData.title"></h3>
                <div class="w-12 md:w-16 h-[3px] bg-yellow-400 mb-4 md:mb-6"></div>
                <p class="text-neutral-300 text-sm md:text-base leading-relaxed font-medium mb-6 md:mb-8" x-text="modalData.text"></p>

                <div class="flex justify-end">
                    <button
                        @click="modalOpen = false"
                        class="w-full sm:w-auto bg-yellow-400 hover:bg-white text-black font-black px-6 py-3 md:px-8 md:py-3 rounded-xl text-xs uppercase tracking-widest transition-all duration-300 shadow-[0_4px_20px_rgba(250,204,21,0.2)] focus:outline-none"
                    >
                        {{ __('Close Details') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('knowledgeCarousel', () => ({
            active: 1,
            total: 5,
            touchStartX: 0,
            touchEndX: 0,
            modalOpen: false,
            modalData: { title: '', text: '', img: '' },
            interval: null,
            details: {
                1: {
                    title: {!! json_encode(__('Industrial Logistics')) !!},
                    text: {!! json_encode(__('Our industrial logistics framework is engineered to manage heavy machinery, infrastructural equipment, and raw materials. We optimize multi-modal supply chains to guarantee rigid compliance with safety standards, synchronized manufacturing schedules, and zero down-time for high-impact industrial operations.')) !!},
                    img: 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?q=80&w=800&auto=format&fit=crop'
                },
                2: {
                    title: {!! json_encode(__('Food & Beverage')) !!},
                    text: {!! json_encode(__('Revolutionizing the way you handle dry-packed and sensitive products. From specialized warehousing ecosystem controls to reliable cross-docking distribution channels, we preserve package integrity and drive high throughput velocity from production lines straight to retail shelves.')) !!},
                    img: 'https://images.unsplash.com/photo-1542838132-92c53300491e?q=80&w=800&auto=format&fit=crop'
                },
                3: {
                    title: {!! json_encode(__('Health & Cosmetics')) !!},
                    text: {!! json_encode(__('Your gateway to a healthier, fully compliant, and beautifully streamlined business. This dedicated pipeline offers pristine climate-monitored tracking, strict sanitization protocols, batch management, and specialized handling customized for high-value cosmetics and healthcare supplies.')) !!},
                    img: 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?q=80&w=800&auto=format&fit=crop'
                },
                4: {
                    title: {!! json_encode(__('Sport & Recreational')) !!},
                    text: {!! json_encode(__('Providing top-notch fulfillment services that score big with your customers. We handle bulk sporting gear, localized e-commerce distribution, event-based seasonal spikes, and lightning-fast reverse logistics so your inventory stays moving and ahead of the competition.')) !!},
                    img: 'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=800&auto=format&fit=crop'
                },
                5: {
                    title: {!! json_encode(__('Smart Logistics')) !!},
                    text: {!! json_encode(__('Embrace the future with our signature automated distribution mechanisms worldwide. Leveraging state-of-the-art routing algorithms, end-to-end predictive analytics, and real-time asset transparency, we redefine maximum efficiency across all borders.')) !!},
                    img: 'https://images.unsplash.com/photo-1578916171728-46686eac8d58?q=80&w=800&auto=format&fit=crop'
                }
            },
            openDetails(id) {
                this.modalData = this.details[id];
                this.modalOpen = true;
                clearInterval(this.interval);
            },
            next() {
                this.active = this.active === this.total ? 1 : this.active + 1;
            },
            prev() {
                this.active = this.active === 1 ? this.total : this.active - 1;
            },
            handleSwipe() {
                if (this.touchStartX - this.touchEndX > 50) { this.next(); this.resetInterval(); }
                if (this.touchEndX - this.touchStartX > 50) { this.prev(); this.resetInterval(); }
            },
            resetInterval() {
                clearInterval(this.interval);
                this.interval = setInterval(() => this.next(), 5000);
            },
            init() {
                this.interval = setInterval(() => this.next(), 5000);
            }
        }));
    });
</script>

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
