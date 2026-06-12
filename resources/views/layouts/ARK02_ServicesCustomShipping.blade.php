<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARKOD | Custom Shipping</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700;900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>[x-cloak] { display: none !important; }</style>
</head>
<!-- THE NAVBAR !-->
<body class="bg-[#0a0a0a] font-montserrat antialiased text-white">
    <!-- NAVBAR -->
    <nav class="bg-[#0a0a0a]/80 backdrop-blur-md border-b border-white/10 px-6 py-4 sticky top-0 z-[100]">
        <div class="max-w-[1600px] mx-auto flex items-center justify-between">

            <!-- Logo + Ticker -->
            <div class="flex items-center">
                <a href="/" class="flex items-center group">
                    <img src="{{ asset('images/Company Logo.png') }}" alt="ARKOD Logo" class="h-12 md:h-14 w-auto object-contain transition-transform group-hover:scale-105">
                    <div class="h-10 w-[2px] bg-yellow-400 mx-4 hidden md:block"></div>

                    <div x-data="{
                        texts: ['Welcome To Arkod Smart Logitech SDN. BHD', 'Innovative Solutions for Logistics', 'Efficiency & Innovation With Smart Logistics'],
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

            <!-- Desktop Menu -->
            <div class="hidden xl:flex items-center space-x-8">
                <!-- Application Dropdown -->
                <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative py-2">
                    <button class="text-gray-300 hover:text-white text-sm font-semibold flex items-center space-x-1 uppercase tracking-wider transition">
                        <span>Application</span>
                        <svg :class="{'rotate-180': open}" class="w-4 h-4 text-yellow-400 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <div x-show="open" x-transition x-cloak class="absolute left-0 mt-2 w-56 bg-[#0f0f0f] border border-white/10 rounded-md shadow-2xl z-50 py-2">
                        <a href="/career" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">Career</a>
                        <a href="/agentapp" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">Agent Application</a>
                    </div>
                </div>

                <!-- Blog Dropdown -->
                <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative py-2">
                    <button class="text-gray-300 hover:text-white text-sm font-semibold flex items-center space-x-1 uppercase tracking-wider transition">
                        <span>Blog</span>
                        <svg :class="{'rotate-180': open}" class="w-4 h-4 text-yellow-400 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <div x-show="open" x-transition x-cloak class="absolute left-0 mt-2 w-64 bg-[#0f0f0f] border border-white/10 rounded-md shadow-2xl z-50 py-2">
                        <a href="/aboutus" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">About Us</a>
                        <a href="/newsandupdates" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">News & Updates</a>
                        <a href="/knowledge" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">Knowledge & Insights</a>
                    </div>
                </div>

                <!-- Services Dropdown -->
                <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative py-2">
                    <button class="text-gray-300 hover:text-white text-sm font-semibold flex items-center space-x-1 uppercase tracking-wider transition">
                        <span>Services</span>
                        <svg :class="{'rotate-180': open}" class="w-4 h-4 text-yellow-400 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <div x-show="open" x-transition x-cloak class="absolute left-0 mt-2 w-56 bg-[#0f0f0f] border border-white/10 rounded-md shadow-2xl z-50 py-2">
                        <a href="/servicecarshipping" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">Vehicle Shipping</a>
                        <a href="/servicesdeliveryshipping" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">Delivery Shipping</a>
                        <a href="/servicescustomshipping" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">Custom Shipping</a>
                    </div>
                </div>

                <!-- Help Dropdown -->
                <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative py-2">
                    <button class="text-gray-300 hover:text-white text-sm font-semibold flex items-center space-x-1 uppercase tracking-wider transition">
                        <span>Help</span>
                        <svg :class="{'rotate-180': open}" class="w-4 h-4 text-yellow-400 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <div x-show="open" x-transition x-cloak class="absolute left-0 mt-2 w-48 bg-[#0f0f0f] border border-white/10 rounded-md shadow-2xl z-50 py-2">
                        <a href="/helpcenter" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">Help Center</a>
                        <a href="/faq" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">FAQ</a>
                    </div>
                </div>

                <a href="/membership" class="text-gray-300 hover:text-white text-sm font-semibold uppercase tracking-wider transition">Membership</a>
            </div>

            <!-- Right Side -->
            <div class="flex items-center space-x-4 md:space-x-6">
                <a href="#" class="hidden md:block text-white hover:text-yellow-400 text-sm font-bold transition uppercase tracking-widest">Login</a>
                <a href="#" class="bg-yellow-400 hover:bg-white text-black font-black px-6 py-3 rounded-md text-sm uppercase transition shadow-[0_4px_20px_rgba(250,204,21,0.3)]">Sign Up</a>

                <!-- Language -->
<div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative py-2 hidden md:block">
    <button class="flex items-center gap-2 text-gray-300 hover:text-yellow-400 transition-colors group">
        <svg class="w-5 h-5 transition-transform group-hover:rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9h18" />
        </svg>
        <span class="text-xs font-bold uppercase tracking-widest">EN</span>
        <svg :class="{'rotate-180': open}" class="w-3 h-3 text-yellow-400 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path d="M19 9l-7 7-7-7" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </button>

    <!-- Dropdown Menu -->
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

                <!-- Hamburger -->
                <button @click="mobileOpen = !mobileOpen" class="xl:hidden text-white p-2 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- MOBILE MENU -->
        <div x-data="{ mobileOpen: false }" class="xl:hidden">
            <div x-show="mobileOpen" x-transition class="mt-4 py-8 bg-[#0a0a0a] border-t border-white/10 px-6 space-y-6 text-lg font-semibold uppercase tracking-wider">
                <a href="/membership" class="block hover:text-yellow-400">Membership</a>
                <a href="/career" class="block hover:text-yellow-400">Career</a>
                <a href="/agentapp" class="block hover:text-yellow-400">Agent Application</a>
                <a href="/aboutus" class="block hover:text-yellow-400">About Us</a>
                <a href="/newsandupdates" class="block hover:text-yellow-400">News & Updates</a>
                <a href="/knowledge" class="block hover:text-yellow-400">Knowledge & Insights</a>
                <a href="/servicecarshipping" class="block hover:text-yellow-400">Vehicle Shipping</a>
                <a href="/servicesdeliveryshipping" class="block hover:text-yellow-400">Delivery Shipping</a>
                <a href="/servicescustomshipping" class="block hover:text-yellow-400">Custom Shipping</a>
                <a href="/servicescustomshipping" class="block hover:text-yellow-400">Custom Shipping</a>
                <a href="/helpcenter" class="block hover:text-yellow-400">Help Center</a>
            </div>
        </div>
    </nav>

    <section class="relative min-h-[10vh] md:min-h-screen w-full flex items-center overflow-hidden -mt-[72px] md:-mt-[88px]" x-data="{ loaded: false }" x-init="setTimeout(() => loaded = true, 100)">

        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/CUSTOM SHIPPING 2.png') }}" alt="ARKOD Logistics" class="w-full h-full object-cover transition-all duration-[4000ms] ease-out" :class="loaded ? 'opacity-70 blur-0 scale-105' : 'opacity-0 blur-xl scale-125'">
            <div class="absolute inset-0 bg-gradient-to-b from-black/50 via-black/80 to-black lg:bg-gradient-to-r lg:from-black lg:via-black/85 lg:to-transparent z-10"></div>
        </div>

        <div class="relative z-20 max-w-[1600px] mx-auto px-6 md:px-8 w-full mt-10 md:mt-20">
            <div class="max-w-8xl text-center lg:text-left">

                <div class="inline-flex items-center gap-3 px-4 py-2 mb-8 border border-yellow-400/20 rounded-full bg-yellow-400/5 backdrop-blur-md transition-all duration-1000 mx-auto lg:mx-0" x-show="loaded" x-transition:enter="opacity-0 -translate-x-10">
                    <span class="text-white text-[8px] md:text-[9px] font-black uppercase tracking-[0.3em]">Arkod Smart Logitech SDN. BHD</span>
                </div>

                <h1 class="text-white text-4xl sm:text-5xl md:text-7xl lg:text-8xl font-black uppercase leading-[1.1] tracking-tighter mb-10 transition-all duration-1000 delay-300" :class="loaded ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'">
                    Your Logistics, <br class="hidden sm:block">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-600">Trusted,</span>
                    <br>Fullfilled,
                </h1>

                <p class="text-gray-300 text-sm md:text-xl font-medium leading-relaxed mb-14 max-w-2xl border-l-0 lg:border-l-4 border-yellow-400 px-4 lg:pl-8 mx-auto lg:mx-0 transition-all duration-1000 delay-500" :class="loaded ? 'opacity-100' : 'opacity-0'">
                    Built on mutual agreements and precise execution, our custom handling solutions provide the reliability and exact care your premium cargo demands.
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-8 md:gap-10 transition-all duration-1000 delay-700" :class="loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">
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
    </section>

    <section class="py-20 bg-white text-[#0a0a0a]">
        <div class="max-w-[1600px] mx-auto px-6 md:px-8">
            <div class="grid lg:grid-cols-12 gap-16 items-center">

                <div class="lg:col-span-5">
                    <div class="inline-flex items-center gap-2 px-5 py-2 border border-yellow-400/50 rounded-full bg-yellow-400/10 mb-6">
                        <span class="text-yellow-400 text-sm font-black uppercase tracking-widest">WHAT WE DO</span>
                    </div>
                    <h2 class="text-4xl md:text-5xl font-black uppercase leading-tight tracking-tighter mb-8 text-black">
                        Beyond Standard,<br>
                        <span class="text-yellow-400">Shaping Your Logistics</span>
                    </h2>
                    <div class="h-px w-24 bg-yellow-400 mb-8"></div>
                    <p class="text-gray-700 text-lg leading-relaxed">
                        We know standard freight doesn’t fit unique requirements. By collaborating closely from the very first agreement, we establish specialized handling protocols and custom shipping terms that ensure premium, precise execution on every project.
                    </p>
                </div>

                <div class="lg:col-span-7">
                    <h3 class="text-black text-2xl font-bold uppercase tracking-wider mb-10 text-center lg:text-left">Our Excellence</h3>
                    <div class="grid grid-cols-2 gap-6">

                        <div class="bg-gradient-to-br from-yellow-400 to-amber-500 p-8 rounded-3xl text-black shadow-lg hover:shadow-2xl group hover:scale-105 transition-all duration-300">
                            <div class="w-20 h-20 mx-auto bg-black/10 rounded-2xl flex items-center justify-center mb-6 group-hover:rotate-12 transition-transform text-5xl">🚢</div>
                            <div class="text-6xl font-black text-center">5</div>
                            <div class="text-2xl font-bold text-center mt-1">Years Experience</div>
                        </div>

                        <div class="bg-gradient-to-br from-zinc-900 to-black p-8 rounded-3xl text-white shadow-lg hover:shadow-2xl group hover:scale-105 transition-all duration-300 border border-yellow-400/30">
                            <div class="w-20 h-20 mx-auto bg-yellow-400/10 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform text-5xl">⭐</div>
                            <div class="text-6xl font-black text-center">99.5%</div>
                            <div class="text-2xl font-bold text-center mt-1">Trusted by Clients</div>
                        </div>

                        <div class="bg-gradient-to-br from-zinc-900 to-black p-8 rounded-3xl text-white shadow-lg hover:shadow-2xl group hover:scale-105 transition-all duration-300 border border-yellow-400/30">
                            <div class="w-20 h-20 mx-auto bg-yellow-400/10 rounded-2xl flex items-center justify-center mb-6 group-hover:rotate-6 transition-transform text-5xl">⏱️</div>
                            <div class="text-6xl font-black text-center">On Time</div>
                            <div class="text-2xl font-bold text-center mt-1">Delivery</div>
                        </div>

                        <div class="bg-gradient-to-br from-yellow-400 to-amber-500 p-8 rounded-3xl text-black shadow-lg hover:shadow-2xl group hover:scale-105 transition-all duration-300">
                            <div class="w-20 h-20 mx-auto bg-black/10 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform text-5xl">🚛</div>
                            <div class="text-6xl font-black text-center">50+</div>
                            <div class="text-2xl font-bold text-center mt-1">Deliveries</div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-20 bg-gradient-to-b from-white to-gray-50 text-[#0a0a0a]">
        <div class="max-w-[1600px] mx-auto px-6 md:px-8">

            <div class="flex flex-col items-center text-center mb-16">
    <span class="text-yellow-400 text-sm font-black uppercase tracking-[0.2em] mb-3">✦ CUSTOMER STORIES ✦</span>
    <h2 class="text-4xl md:text-5xl font-black uppercase tracking-tighter mb-8 text-black">Reviews and Rating</h2>

    <div class="inline-flex items-center gap-6 bg-white shadow-xl border border-yellow-400/20 rounded-3xl px-10 py-6">
        <div class="w-16 h-16 flex-shrink-0">
            <img src="{{ asset('images/reviewiconrating.png') }}"
                 alt="Rating Medal"
                 class="w-full h-full object-contain">
        </div>

        <div class="text-left">
            <div class="flex text-yellow-400 text-4xl leading-none mb-1">★★★★☆</div>
            <p class="text-3xl font-black text-black tracking-tighter">4.6 out of 5</p>
            <p class="text-sm text-gray-500 mt-0.5">Based on Real Customer Reviews</p>
        </div>
    </div>
</div>

            <div class="relative" x-data="testimonialCarousel()">
                <div class="overflow-hidden rounded-3xl">
                    <div class="flex transition-transform duration-700 ease-out" :style="{ transform: `translateX(-${current * (100 / 3)}%)` }">

                        <template x-for="(review, index) in reviews" :key="index">
                            <div class="w-full md:w-1/3 flex-shrink-0 px-4">
                                <div class="bg-white border border-yellow-400/10 rounded-3xl p-9 shadow-xl h-full hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 group">

                                    <div class="flex items-start justify-between mb-8">
                                        <div class="flex items-center gap-4">
                                            <div class="w-14 h-14 rounded-2xl overflow-hidden ring-4 ring-yellow-400/20">
                                                <img :src="review.avatar" :alt="review.name" class="w-full h-full object-cover">
                                            </div>
                                            <div>
                                                <h4 class="font-bold text-xl" x-text="review.name"></h4>
                                                <p class="text-sm text-gray-500" x-text="review.date"></p>
                                            </div>
                                        </div>
                                        <img src="{{ asset('images/Company Logo.png') }}" alt="Arkod" class="h-12 w-12 object-contain">
                                    </div>

                                    <div class="text-yellow-400 text-4xl mb-6 tracking-wider">★★★★★</div>
                                    <p class="text-gray-700 leading-relaxed text-[15.8px] italic" x-text="review.text"></p>
                                </div>
                            </div>
                        </template>

                    </div>
                </div>

                <button @click="prev()" class="absolute left-4 top-1/2 -translate-y-1/2 bg-white hover:bg-yellow-400 hover:text-white text-black w-16 h-16 rounded-3xl flex items-center justify-center transition-all duration-300 text-4xl shadow-2xl z-10 border border-yellow-400/20 hover:border-yellow-400">←</button>
                <button @click="next()" class="absolute right-4 top-1/2 -translate-y-1/2 bg-white hover:bg-yellow-400 hover:text-white text-black w-16 h-16 rounded-3xl flex items-center justify-center transition-all duration-300 text-4xl shadow-2xl z-10 border border-yellow-400/20 hover:border-yellow-400">→</button>
            </div>

            <div class="text-center mt-16">
                <p class="text-gray-500 font-medium">❤️ Trusted by hundreds of Malaysian customers ❤️</p>
            </div>
        </div>
    </section>

    <section class="py-24 bg-yellow-400 text-black relative overflow-hidden">
        <div class="max-w-[1600px] mx-auto px-6 md:px-8">

            <div class="text-center mb-16">
                <span class="inline-block px-6 py-2.5 bg-black text-yellow-400 text-sm font-black tracking-[0.3em] rounded-full mb-4">NATIONWIDE COVERAGE</span>
                <h2 class="text-5xl md:text-6xl lg:text-7xl font-black uppercase tracking-tighter text-black">WE ARE <span class="text-black">EVERYWHERE</span></h2>
                <p class="text-black/120 mt-5 text-lg max-w-2xl mx-auto">Connecting Peninsular Malaysia with Sabah & Sarawak through reliable car shipping</p>
            </div>

            <div class="bg-black rounded-3xl p-8 md:p-12 shadow-2xl">
                <div class="grid lg:grid-cols-12 gap-12 items-center">

                    <div class="lg:col-span-8 relative flex justify-center items-center py-6">
                        <div class="relative w-full max-w-[700px] lg:max-w-[950px] transition-all duration-500">

                            <img src="{{ asset('images/map_route-removebg-preview.png') }}" alt="Malaysia Map" class="w-full h-auto drop-shadow-[0_10px_30px_rgba(250,204,21,0.15)] object-contain">

                            <div class="absolute top-[39%] left-[21%] group">
                                <div class="w-9 h-9 bg-yellow-400 hover:bg-white border-4 border-black rounded-full flex items-center justify-center cursor-pointer transition-all duration-300 hover:scale-125 shadow-lg">
                                    <div class="w-3 h-3 bg-black rounded-full"></div>
                                </div>
                                <div class="absolute -top-12 left-1/2 -translate-x-1/2 bg-black text-white text-sm font-bold px-5 py-2 rounded-2xl whitespace-nowrap opacity-0 group-hover:opacity-100 transition-all duration-300 pointer-events-none z-30 shadow-2xl border border-white/10">
                                    Peninsular Malaysia
                                    <div class="absolute -bottom-1 left-1/2 -translate-x-1/2 w-3 h-3 bg-black rotate-45"></div>
                                </div>
                            </div>

                            <div class="absolute top-[68%] right-[44%] group">
                                <div class="w-9 h-9 bg-yellow-400 hover:bg-white border-4 border-black rounded-full flex items-center justify-center cursor-pointer transition-all duration-300 hover:scale-125 shadow-lg">
                                    <div class="w-3 h-3 bg-black rounded-full"></div>
                                </div>
                                <div class="absolute -top-12 left-1/2 -translate-x-1/2 bg-black text-white text-sm font-bold px-5 py-2 rounded-2xl whitespace-nowrap opacity-0 group-hover:opacity-100 transition-all duration-300 pointer-events-none z-30 shadow-2xl border border-white/10">
                                    Sarawak
                                    <div class="absolute -bottom-1 left-1/2 -translate-x-1/2 w-3 h-3 bg-black rotate-45"></div>
                                </div>
                            </div>

                            <div class="absolute top-[39%] right-[20%] group">
                                <div class="w-9 h-9 bg-yellow-400 hover:bg-white border-4 border-black rounded-full flex items-center justify-center cursor-pointer transition-all duration-300 hover:scale-125 shadow-lg">
                                    <div class="w-3 h-3 bg-black rounded-full"></div>
                                </div>
                                <div class="absolute -top-12 left-1/2 -translate-x-1/2 bg-black text-white text-sm font-bold px-5 py-2 rounded-2xl whitespace-nowrap opacity-0 group-hover:opacity-100 transition-all duration-300 pointer-events-none z-30 shadow-2xl border border-white/10">
                                    Sabah
                                    <div class="absolute -bottom-1 left-1/2 -translate-x-1/2 w-3 h-3 bg-black rotate-45"></div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="lg:col-span-4 space-y-5 flex flex-col justify-center">

                        <div class="bg-zinc-900 rounded-2xl p-5 flex items-center gap-5 hover:bg-yellow-400 hover:text-black transition-all group">
                            <div class="w-16 h-16 flex-shrink-0 overflow-hidden rounded-xl border-2 border-yellow-400">
                                <img src="{{ asset('images/Kl.png') }}" alt="Peninsular Malaysia" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                            </div>
                            <div>
                                <h4 class="font-bold text-xl text-white group-hover:text-black">Peninsular Malaysia</h4>
                                <p class="text-gray-400 group-hover:text-black/70 text-sm mt-1">Kuala Lumpur • Johor • Penang • All major cities</p>
                            </div>
                        </div>

                        <div class="bg-zinc-900 rounded-2xl p-5 flex items-center gap-5 hover:bg-yellow-400 hover:text-black transition-all group">
                            <div class="w-16 h-16 flex-shrink-0 overflow-hidden rounded-xl border-2 border-yellow-400">
                                <img src="{{ asset('images/Sarawak.png') }}" alt="Sarawak" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                            </div>
                            <div>
                                <h4 class="font-bold text-xl text-white group-hover:text-black">Sarawak</h4>
                                <p class="text-gray-400 group-hover:text-black/70 text-sm mt-1">Kuching • Sibu • Miri • Bintulu</p>
                            </div>
                        </div>

                        <div class="bg-zinc-900 rounded-2xl p-5 flex items-center gap-5 hover:bg-yellow-400 hover:text-black transition-all group">
                            <div class="w-16 h-16 flex-shrink-0 overflow-hidden rounded-xl border-2 border-yellow-400">
                                <img src="{{ asset('images/Sabah.png') }}" alt="Sabah" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                            </div>
                            <div>
                                <h4 class="font-bold text-xl text-white group-hover:text-black">Sabah</h4>
                                <p class="text-gray-400 group-hover:text-black/70 text-sm mt-1">Kota Kinabalu</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="mt-12 pt-8 border-t border-white/20 text-center">
                    <div class="inline-flex items-center gap-3 text-yellow-400">
                        <div class="w-3 h-3 bg-yellow-400 rounded-full animate-pulse"></div>
                        <span class="font-semibold tracking-wider">Reliable Shipping Across Malaysia</span>
                        <div class="w-3 h-3 bg-yellow-400 rounded-full animate-pulse"></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <script>
        /**
         * State Controller Function handling initialization
         * and cycle routines for Review & Feedback blocks.
         */
        function testimonialCarousel() {
            return {
                current: 0,
                reviews: [
                    {
                        name: "Estanah Tun",
                        date: "24 September 2025",
                        avatar: "https://i.pravatar.cc/150?u=estanah",
                        text: "Terbaiklah servis yang mereka bagi ini. Kereta sy memang selamat sampai. Boleh order lagi ini!"
                    },
                    {
                        name: "Alif Aiman",
                        date: "2 March 2025",
                        avatar: "https://i.pravatar.cc/150?u=alif",
                        text: "Suka saya cara dorang buat kerja delivery ini. Kemas dan cepat. Friendly lagi tu!"
                    },
                    {
                        name: "Emmenuell",
                        date: "24 September 2025",
                        avatar: "https://i.pravatar.cc/150?u=emmanuel",
                        text: "Package dorang ini juga terbaik dengan harga. Kereta sampai, sekali dengan servis. Lawa do!"
                    },
                    {
                        name: "Farah Amira",
                        date: "15 April 2025",
                        avatar: "https://i.pravatar.cc/150?u=farah",
                        text: "My SUV arrived in perfect condition. Very professional team. Highly recommended!"
                    },
                    {
                        name: "Mohd Razak",
                        date: "8 May 2025",
                        avatar: "https://i.pravatar.cc/150?u=razak",
                        text: "Fast response and transparent pricing. My Honda Civic reached safely. Will use again."
                    },
                    {
                        name: "Siti Nurhaliza",
                        date: "10 October 2025",
                        avatar: "https://i.pravatar.cc/150?u=siti",
                        text: "Best car shipping service. My EV car was handled with extra care. Thank you Arkod!"
                    }
                ],
                next() {
                    this.current = (this.current + 1) % Math.ceil(this.reviews.length / 3);
                },
                prev() {
                    this.current = (this.current - 1 + Math.ceil(this.reviews.length / 3)) % Math.ceil(this.reviews.length / 3);
                }
            }
        }
    </script>

<footer class="bg-black text-white pt-16 pb-12 px-8 font-sans">
    <div class="max-w-[1400px] mx-auto">
        <div class="w-full h-[2px] bg-white mb-12"></div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-x-8 gap-y-12 mb-16">

            <div class="text-left">
                <h4 class="text-[24px] font-bold mb-5">Logistics Solutions</h4>
                <ul class="space-y-3 text-[20px] font-medium text-white/90">
                    <li><a>Pickup & Delivery</a></li>
                    <li><a>Sea Freight</a></li>
                    <li><a>Air Freight</a></li>
                </ul>
                <h4 class="text-[24px] font-bold mt-12 mb-5">Warehousing Solution</h4>
                <ul class="text-[20px] font-medium text-white/90">
                    <li><a href="#" class="hover:text-yellow-500 transition">Warehousing</a></li>
                </ul>
            </div>

            <div class="text-left">
                <h4 class="text-[24px] font-bold mb-5">Company</h4>
                <ul class="space-y-3 text-[20px] font-medium text-white/90">
                    <li><a href="/aboutus" class="hover:text-yellow-500 transition">About Us</a></li>
                    <li><a href="/aboutus" class="hover:text-yellow-500 transition">Blog</a></li>
                    <li><a href="/career" class="hover:text-yellow-500 transition">Careers</a></li>
                    <li><a href="/helpcenter" class="hover:text-yellow-500 transition">Partners</a></li>
                    <li><a>Cookies, Legal & Privacy Policies</a></li>
                    <li><a href="/termspolicy" class="hover:text-yellow-500 transition">Terms and Conditions</a></li>
                </ul>
            </div>

            <div class="text-left">
                <h4 class="text-[24px] font-bold mb-5">Policies</h4>
                <ul class="space-y-3 text-[20px] font-medium text-white/90">
                    <li><a href="/shippingpolicy" class="hover:text-yellow-500 transition">Shipping Policies</a></li>
                    <li><a href="/cancelationpolicy" class="hover:text-yellow-500 transition">Cancellation & Refund Policies</a></li>
                    <li><a href="/termspolicy" class="hover:text-yellow-500 transition">Terms & Policies</a></li>
                </ul>
            </div>

            <div class="flex flex-col items-start lg:items-end lg:text-right">
                <div class="mb-14">
                    <h4 class="text-[24px] font-bold mb-5">Support</h4>
                    <ul class="space-y-3 text-[20px] font-medium text-white/90">
                        <li><a href="/helpcenter" class="hover:text-yellow-500 transition">Contact Us</a></li>
                        <li><a href="/faq" class="hover:text-yellow-500 transition">FAQ</a></li>
                    </ul>
                </div>

                <div class="flex flex-col items-start lg:items-end">
                <h4 class="text-[24px] font-bold mb-4 tracking-tight uppercase">ARKOD SMART LOGITECH</h4>
                <div class="flex gap-4">
                    <!--Linkedin !-->
                    <a href="https://www.linkedin.com/company/arkod-smart-logitech-sdn-bhd" target="_blank" rel="noopener noreferrer" class="hover:opacity-75 transition">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a2.7 2.7 0 0 0-2.7-2.7c-1.2 0-1.8.7-2.1 1.2v-1h-3.3v10h3.3v-5.6c0-.3 0-.6.1-.8.2-.5.6-.9 1.2-.9 1 0 1.2.8 1.2 1.9v5.4h3.3M7 19h3.3V9H7v10m1.6-11.3c1.1 0 1.9-.8 1.9-1.9 0-1.1-.8-1.9-1.9-1.9-1.1 0-1.9.8-1.9 1.9 0 1.1.8 1.9 1.9 1.9Z"/></svg>
                    </a>
                    <!--Instagram !-->
                    <a href="https://www.instagram.com/arkodsmartlogitech/" target="_blank" rel="noopener noreferrer" class="hover:opacity-75 transition">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8A3.6 3.6 0 0 0 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6A3.6 3.6 0 0 0 16.4 4H7.6m9.65 1.5a1.25 1.25 0 1 1 0 2.5 1.25 1.25 0 0 1 0-2.5M12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10m0 2a3 3 0 1 0 0 6 3 3 0 0 0 0-6Z"/></svg>
                    </a>
                    <!--Youtube !-->
                    <a href="https://www.youtube.com/@ArkodSmartLogitech" target="_blank" rel="noopener noreferrer" class="hover:opacity-75 transition">
                        <svg class="w-9 h-9 -mt-0.5" fill="currentColor" viewBox="0 0 24 24"><path d="M10 15l5.19-3L10 9v6m11.56-7.83c.13.47.22 1.1.28 1.9.07.8.1 1.49.1 2.09L22 12c0 2.19-.16 3.8-.44 4.83-.25.9-.83 1.48-1.73 1.73-.47.13-1.33.22-2.65.28-1.3.07-2.49.1-3.59.1L12 5c4.19 0 6.8.16 7.83.44.9.25 1.48.83 1.73 1.73Z"/></svg>
                    </a>
                    <!--Facebook !-->
                    <a href="https://www.facebook.com/arkodsmartlogitech/" target="_blank" rel="noopener noreferrer" class="hover:opacity-75 transition">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.04c-5.5 0-10 4.49-10 10.02 0 5 3.66 9.15 8.44 9.9V15.36H7.72v-3.3h2.72v-2.52c0-2.68 1.59-4.16 4.03-4.16 1.17 0 2.39.21 2.39.21v2.62h-1.35c-1.33 0-1.74.83-1.74 1.68v2.01h2.96l-.47 3.3h-2.49v6.6c4.78-.75 8.44-4.9 8.44-9.9 0-5.53-4.5-10.02-10-10.02Z"/></svg>
                    </a>
                </div>
            </div>
            </div>
        </div>

        <div class="w-full h-[2px] bg-white mb-8"></div>

        <div class="flex flex-col items-center justify-center space-y-8">
            <p class="text-[14px] font-bold tracking-[0.3em] uppercase">© ARKOD 2026. ALL RIGHTS RESERVED</p>

            <div class="flex flex-wrap justify-center items-center gap-x-12 gap-y-6">
                <div class="flex items-center gap-3">
                    <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12.01 2.01c-5.52 0-10 4.48-10 10 0 1.75.46 3.4 1.26 4.83L2 22l5.3-1.26c1.37.75 2.93 1.17 4.58 1.17a10 10 0 0010-10c0-5.52-4.48-10-10-10zm5.97 14.24c-.24.68-1.22 1.25-1.7 1.33-.43.07-.98.11-2.91-.68-2.47-1.01-4.06-3.53-4.18-3.7-.12-.16-1-1.33-1-2.54 0-1.21.63-1.8 1.21-1.8s.5.12.75.12c.24 0 .44-.04.63.4.19.46.65 1.59.71 1.71.06.12.1.26.02.42-.08.16-.12.26-.25.42-.12.16-.27.36-.39.48-.13.13-.27.27-.12.52.16.25.7 1.15 1.5 1.86.64.58 1.18.76 1.44.89.26.13.41.11.57-.07s.66-.77.83-1.04c.17-.26.34-.22.58-.13s1.51.71 1.77.84.44.19.51.3c.06.11.06.66-.18 1.34z"/></svg>
                    <span class="text-[17px] font-bold text-white transition">+60 18-911 6168</span>
                </div>
                <div class="flex items-center gap-3">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    <span class="text-[17px] font-bold text-white transition">082-384 999</span>
                </div>
                <div class="flex items-center gap-3">
                    <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
                    <span class="text-[17px] font-bold text-white lowercase tracking-tight">customersupport@arkod.com.my</span>
                </div>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
