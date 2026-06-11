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
<!-- THE NAVBAR !-->
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
                <a href="agentapp" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">Agent Application</a>
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
                <a href="/knowledge" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">Knowledge & Insights</a>
            </div>
        </div>

        <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative py-2">
            <button class="text-gray-300 hover:text-white text-sm font-semibold flex items-center space-x-1 uppercase tracking-wider transition">
                <span>Services</span>
                <svg :class="{'rotate-180': open}" class="w-4 h-4 text-yellow-400 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </button>
            <div x-show="open" x-transition x-cloak class="absolute left-0 mt-2 w-56 bg-[#0f0f0f] border border-white/10 rounded-md shadow-2xl z-50 py-2">
                <a href="/servicecarshipping" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">Vehicle Shipping</a>
                <a href="/servicesdeliveryshipping" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">Delivery Shipping</a>
                <a href="/servicescustomshipping" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">Custom Shipping</a>
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

       <a href="/membership" class="text-gray-300 hover:text-white text-sm font-semibold uppercase tracking-wider transition inline-block">
    Membership
</a>
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

<section class="relative bg-white py-20 px-6 overflow-hidden select-none">

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
    </style>

    <svg class="absolute w-0 h-0" width="0" height="0">
        <defs>
            <clipPath id="figma-card-curve" clipPathUnits="objectBoundingBox">
                <path d="M 0,0
                         L 1,0
                         L 1,0.82
                         C 0.75,0.92 0.25,0.92 0,0.82
                         Z" />
            </clipPath>
        </defs>
    </svg>

    <div class="max-w-[1600px] mx-auto relative z-10">

        <div class="text-center mb-16 relative z-20">
            <h2 class="text-4xl md:text-5xl font-black uppercase tracking-wider text-black mb-3 font-montserrat">
                Announcements
            </h2>
            <div class="w-16 h-[4px] bg-[#f9a01b] mx-auto mb-6 rounded-full"></div>
            <p class="text-gray-900 text-sm md:text-base font-bold tracking-wide max-w-2xl mx-auto">
                Big things are moving—here is what's happening right now!
            </p>
        </div>

        <div x-data="{
            currentIndex: 0,
            total: 3,
            next() { this.currentIndex = (this.currentIndex + 1) % this.total },
            prev() { this.currentIndex = (this.currentIndex - 1 + this.total) % this.total }
        }" class="relative max-w-[1200px] mx-auto px-4 sm:px-12">

            <button @click="prev()" class="absolute left-0 top-1/2 -translate-y-1/2 z-30 p-2 text-gray-700 hover:text-[#f9a01b] hover:scale-125 active:scale-95 transition-all duration-300 focus:outline-none group">
                <svg class="w-10 h-10 stroke-[3] transform group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            <div class="overflow-hidden w-full">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                    <div class="bg-[#121212] rounded-[2.5rem] p-5 flex flex-col justify-between items-center text-center shadow-xl border border-yellow-600/20 transform transition-all duration-500 ease-out hover:-translate-y-3 hover:scale-[1.03] hover:shadow-[0_20px_40px_rgba(249,160,27,0.15)] hover:border-[#f9a01b]/60 group">

                        <div class="w-full h-60 overflow-hidden relative rounded-t-[31px]" style="clip-path: url(#figma-card-curve);">
                            <img src="{{ asset('images/UNLOCKTHENEXTLEVEL.png') }}" alt="Unlock the Next Level" class="w-full h-full object-cover rounded-t-[31px] transform transition-transform duration-700 ease-out group-hover:scale-110">
                        </div>

                        <div class="mt-2 flex flex-col items-center flex-grow justify-between w-full pb-2">
                            <div class="w-36 h-[3px] bg-gradient-to-r from-[#d4af37] via-[#f9a01b] to-[#d4af37] rounded-full mb-4 shadow-[0_0_12px_rgba(249,160,27,0.7)]"></div>

                            <h3 class="text-white font-black text-xl md:text-2xl tracking-wide uppercase leading-tight min-h-[50px] flex items-center justify-center">
                                UNLOCK THE<br>NEXT LEVEL
                            </h3>

                            <p class="text-gray-400 text-xs font-semibold tracking-wide max-w-[240px] mt-2 line-clamp-2 min-h-[36px]">
                               Discover new perks and benefits of being one of us!
                            </p>

                            <a href="/membership" class="mt-5 inline-block w-full max-w-[160px] bg-gradient-to-r from-[#121212] via-[#f9a01b] to-[#121212] text-white hover:text-black font-black py-3 rounded-full text-[11px] uppercase tracking-widest border border-yellow-600/40 hover:border-transparent transition-all duration-300 text-center shadow-md transform active:scale-95 animate-gold-wave">
                                Read more
                            </a>
                        </div>
                    </div>

                    <div class="bg-[#121212] rounded-[2.5rem] p-5 flex flex-col justify-between items-center text-center shadow-xl border border-yellow-600/20 transform transition-all duration-500 ease-out hover:-translate-y-3 hover:scale-[1.03] hover:shadow-[0_20px_40px_rgba(249,160,27,0.15)] hover:border-[#f9a01b]/60 group">

                        <div class="w-full h-60 overflow-hidden relative rounded-t-[31px]" style="clip-path: url(#figma-card-curve);">
                            <img src="{{ asset('images/SHIPPINGMODEHANDLINGS.png') }}" alt="Shipping Mode Handlings" class="w-full h-full object-cover rounded-t-[31px] transform transition-transform duration-700 ease-out group-hover:scale-110">
                        </div>

                        <div class="mt-2 flex flex-col items-center flex-grow justify-between w-full pb-2">
                            <div class="w-36 h-[3px] bg-gradient-to-r from-[#d4af37] via-[#f9a01b] to-[#d4af37] rounded-full mb-4 shadow-[0_0_12px_rgba(249,160,27,0.7)]"></div>

                            <h3 class="text-white font-black text-xl md:text-2xl tracking-wide uppercase leading-tight min-h-[50px] flex items-center justify-center">
                                SHIPPING MODE<br>HANDLINGS
                            </h3>

                            <p class="text-gray-400 text-xs font-semibold tracking-wide max-w-[240px] mt-2 line-clamp-2 min-h-[36px]">
                                Discover smart strategic updates on vehicle transit processing!
                            </p>

                            <a href="/servicecarshipping" class="mt-5 inline-block w-full max-w-[160px] bg-gradient-to-r from-[#121212] via-[#f9a01b] to-[#121212] text-white hover:text-black font-black py-3 rounded-full text-[11px] uppercase tracking-widest border border-yellow-600/40 hover:border-transparent transition-all duration-300 text-center shadow-md transform active:scale-95 animate-gold-wave">
                                Read more
                            </a>
                        </div>
                    </div>

                    <div class="bg-[#121212] rounded-[2.5rem] p-5 flex flex-col justify-between items-center text-center shadow-xl border border-yellow-600/20 transform transition-all duration-500 ease-out hover:-translate-y-3 hover:scale-[1.03] hover:shadow-[0_20px_40px_rgba(249,160,27,0.15)] hover:border-[#f9a01b]/60 group">

                        <div class="w-full h-60 overflow-hidden relative rounded-t-[31px]" style="clip-path: url(#figma-card-curve);">
                            <img src="{{ asset('images/SPECIAL PACKAGES.png') }}" alt="Special Packages and Services" class="w-full h-full object-cover rounded-t-[31px] transform transition-transform duration-700 ease-out group-hover:scale-110">
                        </div>

                        <div class="mt-2 flex flex-col items-center flex-grow justify-between w-full pb-2">
                            <div class="w-36 h-[3px] bg-gradient-to-r from-[#d4af37] via-[#f9a01b] to-[#d4af37] rounded-full mb-4 shadow-[0_0_12px_rgba(249,160,27,0.7)]"></div>

                            <h3 class="text-white font-black text-xl md:text-2xl tracking-wide uppercase leading-tight min-h-[50px] flex items-center justify-center">
                                SPECIAL PACKAGE<br>SERVICE
                            </h3>

                            <p class="text-gray-400 text-xs font-semibold tracking-wide max-w-[240px] mt-2 line-clamp-2 min-h-[36px]">
                                Discover new packages that is suited for your needs!
                            </p>

                            <a href="#" class="mt-5 inline-block w-full max-w-[160px] bg-gradient-to-r from-[#121212] via-[#f9a01b] to-[#121212] text-white hover:text-black font-black py-3 rounded-full text-[11px] uppercase tracking-widest border border-yellow-600/40 hover:border-transparent transition-all duration-300 text-center shadow-md transform active:scale-95 animate-gold-wave">
                                Read more
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <button @click="next()" class="absolute right-0 top-1/2 -translate-y-1/2 z-30 p-2 text-gray-700 hover:text-[#f9a01b] hover:scale-125 active:scale-95 transition-all duration-300 focus:outline-none group">
                <svg class="w-10 h-10 stroke-[3] transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </button>

        </div>
    </div>
</section>
