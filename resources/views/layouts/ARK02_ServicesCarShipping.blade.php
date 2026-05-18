<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARKOD | Car Shipping</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700;900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>[x-cloak] { display: none !important; }</style>
</head>

<body class="bg-[#0a0a0a] font-montserrat antialiased text-white">

    <nav class="bg-[#0a0a0a]/80 backdrop-blur-md border-b border-white/10 px-6 py-4 sticky top-0 z-[100]">
        <div class="max-w-[1600px] mx-auto flex items-center justify-between">
            <div class="flex items-center">
                <a href="/" class="flex items-center group">
                    <img src="{{ asset('images/Company Logo.png') }}" alt="ARKOD Logo" class="h-14 w-auto object-contain transition-transform group-hover:scale-105">
                    <div class="h-10 w-[2px] bg-yellow-400 mx-4 hidden md:block"></div>

                    <div x-data="{
                        texts: ['Welcome To Arkod Smart Logitech SDN. BHD', 'Innovative Solutions for Logistics', 'Efficiency & Innovation With Smart Logistics'],
                        active: 0,
                        init() { setInterval(() => { this.active = (this.active + 1) % this.texts.length }, 4000); }
                    }" class="relative h-10 min-w-[500px] overflow-hidden hidden lg:block">
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

            <div class="flex items-center space-x-8">
                <div class="hidden xl:flex items-center space-x-8">
                    <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative py-2">
                        <button class="text-gray-300 hover:text-white text-sm font-semibold flex items-center space-x-1 uppercase tracking-wider transition">
                            <span>Application</span>
                            <svg :class="{'rotate-180': open}" class="w-4 h-4 text-yellow-400 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </button>
                        <div x-show="open" x-transition x-cloak class="absolute left-0 mt-2 w-56 bg-[#0f0f0f] border border-white/10 rounded-md shadow-2xl z-50 py-2">
                           <a href="/career" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">Career</a>
                            <a href="/agentapp" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">Agent Application</a>
                        </div>
                    </div>

                    <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative py-2">
                        <button class="text-gray-300 hover:text-white text-sm font-semibold flex items-center space-x-1 uppercase tracking-wider transition">
                            <span>Blog</span>
                            <svg :class="{'rotate-180': open}" class="w-4 h-4 text-yellow-400 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </button>
                        <div x-show="open" x-transition x-cloak class="absolute left-0 mt-2 w-64 bg-[#0f0f0f] border border-white/10 rounded-md shadow-2xl z-50 py-2">
                            <a href="/aboutus" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">About Us</a>
                            <a href="#" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">News & Updates</a>
                            <a href="#" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">Knowledge & Insights</a>
                        </div>
                    </div>

                    <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative py-2">
                        <button class="text-gray-300 hover:text-white text-sm font-semibold flex items-center space-x-1 uppercase tracking-wider transition">
                            <span>Services</span>
                            <svg :class="{'rotate-180': open}" class="w-4 h-4 text-yellow-400 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </button>
                        <div x-show="open" x-transition x-cloak class="absolute left-0 mt-2 w-56 bg-[#0f0f0f] border border-white/10 rounded-md shadow-2xl z-50 py-2">
                            <a href="/servicecarshipping" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">Car Shipping</a>
                        </div>
                    </div>

                    <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative py-2">
                        <button class="text-gray-300 hover:text-white text-sm font-semibold flex items-center space-x-1 uppercase tracking-wider transition">
                            <span>Help</span>
                            <svg :class="{'rotate-180': open}" class="w-4 h-4 text-yellow-400 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </button>
                        <div x-show="open" x-transition x-cloak class="absolute left-0 mt-2 w-48 bg-[#0f0f0f] border border-white/10 rounded-md shadow-2xl z-50 py-2">
                            <a href="#" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">Help Center</a>
                            <a href="#" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">FAQ</a>
                        </div>
                    </div>

                    <button class="text-gray-300 hover:text-white text-sm font-semibold uppercase tracking-wider transition">
                        Membership
                    </button>
                </div>

                <div class="flex items-center space-x-6">
                    <a href="#" class="text-white hover:text-yellow-400 text-sm font-bold transition uppercase tracking-widest">Login</a>
                    <a href="#" class="bg-yellow-400 hover:bg-white text-black font-black px-8 py-3 rounded-md text-sm uppercase transition shadow-[0_4px_20px_rgba(250,204,21,0.3)]">Sign Up</a>

                    <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative py-2">
                        <button class="flex items-center gap-2 text-gray-300 hover:text-yellow-400 transition-colors group">
                            <svg class="w-5 h-5 transition-transform group-hover:rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9h18" />
                            </svg>
                            <span class="text-xs font-bold uppercase tracking-widest">EN</span>
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

                            <a href="{{ url('lang/zh') }}" class="flex items-center justify-between px-6 py-3 text-[10px] text-white hover:bg-yellow-400 hover:text-black transition uppercase tracking-[0.2em] font-black border-t border-white/5">
                                中文 <span class="text-[8px] opacity-50">ZH</span>
                            </a>

                            <a href="{{ url('lang/ms') }}" class="flex items-center justify-between px-6 py-3 text-[10px] text-white hover:bg-yellow-400 hover:text-black transition uppercase tracking-[0.2em] font-black border-t border-white/5">
                                Melayu <span class="text-[8px] opacity-50">MS</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <section>

    <div class="relative min-h-[10vh] md:min-h-screen w-full flex items-center overflow-hidden -mt-[72px] md:-mt-[88px]" x-data="{ loaded: false }" x-init="setTimeout(() => loaded = true, 100)">

    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/carshipping pic.png') }}"
             alt="ARKOD Logistics"
             class="w-full h-full object-cover transition-all duration-[4000ms] ease-out"
             :class="loaded ? 'opacity-70 blur-0 scale-105' : 'opacity-0 blur-xl scale-125'">

        <div class="absolute inset-0 bg-gradient-to-b from-black/50 via-black/80 to-black lg:bg-gradient-to-r lg:from-black lg:via-black/85 lg:to-transparent z-10"></div>
    </div>

    <div class="relative z-20 max-w-[1600px] mx-auto px-6 md:px-8 w-full mt-10 md:mt-20">
        <div class="max-w-8xl text-center lg:text-left">
            <div class="inline-flex items-center gap-3 px-4 py-2 mb-8 border border-yellow-400/20 rounded-full bg-yellow-400/5 backdrop-blur-md transition-all duration-1000 mx-auto lg:mx-0"
                 x-show="loaded" x-transition:enter="opacity-0 -translate-x-10">
                <span class="text-white text-[8px] md:text-[9px] font-black uppercase tracking-[0.3em]">Arkod Smart Logitech SDN. BHD</span>
            </div>

            <h1 class="text-white text-4xl sm:text-5xl md:text-7xl lg:text-8xl font-black uppercase leading-[1.1] tracking-tighter mb-10 transition-all duration-1000 delay-300"
                :class="loaded ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'">
                Your Car, <br class="hidden sm:block">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-600">
                    Anywhere,
                </span>
                <br>
                Anytime,
            </h1>

            <p class="text-gray-300 text-sm md:text-xl font-medium leading-relaxed mb-14 max-w-2xl border-l-0 lg:border-l-4 border-yellow-400 px-4 lg:pl-8 mx-auto lg:mx-0 transition-all duration-1000 delay-500"
               :class="loaded ? 'opacity-100' : 'opacity-0'">
                From luxury sedans to daily drivers, we treat your vehicle with the absolute highest standard of care. <br class="hidden md:block">
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-8 md:gap-10 transition-all duration-1000 delay-700"
                 :class="loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">

                <a href="#" class="w-full sm:w-auto text-center relative overflow-hidden bg-yellow-400 hover:bg-white text-black px-12 py-5 md:px-16 md:py-6 rounded-sm text-lg md:text-lg font-black uppercase tracking-[0.3em] transition-all duration-500 group shadow-lg">
                    <span class="relative z-10">See More</span>
                    <div class="absolute inset-0 bg-white translate-y-full group-hover:translate-y-0 transition-transform duration-300"></div>
                </a>

                <button class="flex items-center gap-4 group">
                    <div class="w-12 h-12 md:w-14 md:h-14 rounded-full border border-white/20 flex items-center justify-center group-hover:bg-yellow-400 group-hover:border-yellow-400 transition-all duration-500">
                        <svg class="w-4 h-4 text-white group-hover:text-black fill-current ml-1" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                    </div>
                    <span class="text-white text-[10px] md:text-[11px] font-black uppercase tracking-widest group-hover:text-yellow-400 transition-colors">Contact Us</span>
                </button>
            </div>
        </div>
    </div>

    <div class="absolute bottom-0 right-20 z-20 hidden lg:flex flex-col items-center gap-6">
        <span class="text-white/20 text-[10px] uppercase tracking-[0.5em] [writing-mode:vertical-lr] rotate-180">Scroll to dive</span>
        <div class="w-[1px] h-32 bg-gradient-to-t from-yellow-400 to-transparent"></div>
    </div>
</div>

    </div> <!-- End of Hero Section -->

       </div> <!-- End of Hero Section -->

    <!-- ===================== NEW SECTION: WHAT WE DO + OUR EXCELLENCE (WHITE BACKGROUND) ===================== -->
    <section class="py-20 bg-white text-[#0a0a0a]">
        <div class="max-w-[1600px] mx-auto px-6 md:px-8">

            <div class="grid lg:grid-cols-12 gap-16 items-center">

                <!-- Left Side: WHAT WE DO -->
                <div class="lg:col-span-5">
                    <div class="inline-flex items-center gap-2 px-5 py-2 border border-yellow-400/50 rounded-full bg-yellow-400/10 mb-6">
                        <span class="text-yellow-400 text-sm font-black uppercase tracking-widest">WHAT WE DO</span>
                    </div>

                    <h2 class="text-4xl md:text-5xl font-black uppercase leading-tight tracking-tighter mb-8 text-black">
                        Delivering Excellence,<br>
                        <span class="text-yellow-400">Mile after mile</span>
                    </h2>

                    <div class="h-px w-24 bg-yellow-400 mb-8"></div>

                    <p class="text-gray-700 text-lg leading-relaxed">
                        “We’ve successfully delivered thousands of vehicles with precision and care. Our commitment to reliability, safety, and efficiency ensures every shipment meets the highest standards—no matter the distance.”
                    </p>
                </div>

                <!-- Right Side: Our Excellence Stats -->
                <div class="lg:col-span-7">
                    <h3 class="text-black text-2xl font-bold uppercase tracking-wider mb-10 text-center lg:text-left">Our Excellence</h3>

                    <div class="grid grid-cols-2 gap-6">

                        <!-- Stat 1 -->
                        <div class="bg-gradient-to-br from-yellow-400 to-amber-500 p-8 rounded-2xl text-black shadow-md hover:shadow-xl group hover:scale-105 transition-all duration-300">
                            <div class="w-16 h-16 bg-black/10 rounded-2xl flex items-center justify-center mb-6 group-hover:rotate-12 transition-transform">
                                🚢
                            </div>
                            <div class="text-5xl font-black">5</div>
                            <div class="text-xl font-bold">Years Experience</div>
                        </div>

                        <!-- Stat 2 -->
                        <div class="bg-gradient-to-br from-blue-600 to-cyan-600 p-8 rounded-2xl text-white shadow-md hover:shadow-xl group hover:scale-105 transition-all duration-300">
                            <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                                👍
                            </div>
                            <div class="text-5xl font-black">100%</div>
                            <div class="text-xl font-bold">Trusted by Clients</div>
                        </div>

                        <!-- Stat 3 -->
                        <div class="bg-gradient-to-br from-blue-600 to-cyan-600 p-8 rounded-2xl text-white shadow-md hover:shadow-xl group hover:scale-105 transition-all duration-300">
                            <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center mb-6 group-hover:rotate-6 transition-transform">
                                ⏱️
                            </div>
                            <div class="text-5xl font-black">On Time</div>
                            <div class="text-xl font-bold">Delivery</div>
                        </div>

                        <!-- Stat 4 -->
                        <div class="bg-gradient-to-br from-yellow-400 to-amber-500 p-8 rounded-2xl text-black shadow-md hover:shadow-xl group hover:scale-105 transition-all duration-300">
                            <div class="w-16 h-16 bg-black/10 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                                🚗
                            </div>
                            <div class="text-5xl font-black">1000+</div>
                            <div class="text-xl font-bold">Successful Deliveries</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===================== END OF NEW SECTION ===================== -->
