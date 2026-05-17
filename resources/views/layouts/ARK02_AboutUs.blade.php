<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARKOD | About Us</title>
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
                            <a href="#" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">Shipping Schedule</a>
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

<!-- START: PROVEN LOGISTICS SECTION -->
<!-- HEIGHT CONTROL: Changed min-h to 450px and lg:h to 600px -->
<section class="relative min-h-[450px] lg:h-[600px] flex items-center overflow-hidden">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/mts-analysis-2022.jpg') }}" alt="Logistics Background" class="w-full h-full object-cover object-center">
        <!-- Overlay: Increased opacity slightly for better text contrast on shorter sections -->
        <div class="absolute inset-0 bg-gradient-to-r from-[#0a0a0a]/80 via-[#0a0a0a]/40 to-[#0a0a0a]/90"></div>
    </div>

    <!-- Content Container -->
    <div class="max-w-[1600px] mx-auto px-6 w-full relative z-10 flex justify-end">
        <div class="max-w-4xl text-right md:text-left lg:ml-auto">

            <!-- Headline Group: Reduced margins for smaller height -->
            <div x-data="{ shown: false }" x-init="setTimeout(() => shown = true, 100)" class="mb-8">
                <h2 x-show="shown"
                    x-transition:enter="transition ease-out duration-1000"
                    x-transition:enter-start="opacity-0 translate-y-8"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    class="text-4xl md:text-5xl font-black tracking-tighter leading-tight mb-4">
                    PROVEN LOGISTICS<br>
                    <span class="text-yellow-400 uppercase">Excellence in Motion</span>
                </h2>

                <p x-show="shown"
                    x-transition:enter="transition ease-out duration-1000 delay-300"
                    class="text-gray-300 text-base md:text-lg font-medium max-w-xl ml-auto md:ml-0 opacity-90">
                    Experience the efficiency of our completed shipments and projects.
                </p>
            </div>

            <!-- KPI Metrics Grid: Optimized spacing -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
                <!-- Containers Shipped -->
                <div class="flex items-center md:flex-col md:items-start gap-3">
                    <div class="p-2 bg-yellow-400/10 border border-yellow-400/20 rounded-lg">
                        <svg class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                        </svg>
                    </div>
                    <div>
                        <div class="text-2xl font-black text-white">100+</div>
                        <div class="text-[11px] font-bold text-yellow-400 uppercase tracking-widest">Containers Shipped</div>
                    </div>
                </div>

                <!-- Delivery Time -->
                <div class="flex items-center md:flex-col md:items-start gap-3">
                    <div class="p-2 bg-yellow-400/10 border border-yellow-400/20 rounded-lg">
                        <svg class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <div>
                        <div class="text-2xl font-black text-white">_ DAYS</div>
                        <div class="text-[11px] font-bold text-yellow-400 uppercase tracking-widest">Avg Delivery Time</div>
                    </div>
                </div>

                <!-- Partners -->
                <div class="flex items-center md:flex-col md:items-start gap-3">
                    <div class="p-2 bg-yellow-400/10 border border-yellow-400/20 rounded-lg">
                        <svg class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <div>
                        <div class="text-2xl font-black text-white">50+</div>
                        <div class="text-[11px] font-bold text-yellow-400 uppercase tracking-widest">Partners Worldwide</div>
                    </div>
                </div>
            </div>

            <!-- Pagination Dots -->
            <div class="flex space-x-2 justify-end md:justify-start">
                <div class="h-1 w-6 bg-yellow-400 rounded-full"></div>
                <div class="h-1 w-1 bg-white/30 rounded-full"></div>
                <div class="h-1 w-1 bg-white/30 rounded-full"></div>
            </div>
        </div>
    </div>
</section>

<!-- START: SUCCESS STORIES SECTION -->
<section class="py-32 bg-[#fcfcfc] font-montserrat overflow-hidden relative"
         x-data="{
             modal1Open: false,
             modal2Open: false,
             modal3Open: false,
             modal4Open: false,
             modal5Open: false
         }">

    <div class="absolute top-0 left-0 w-full h-full pointer-events-none opacity-[0.03] select-none z-0">
        <div class="absolute top-20 -left-20 text-[20vw] font-black leading-none uppercase rotate-90">LOGISTICS</div>
        <div class="absolute bottom-0 -right-20 text-[20vw] font-black leading-none uppercase -rotate-90">SUCCESS</div>
    </div>

    <div class="max-w-[1400px] mx-auto px-6 relative z-10">

        <div class="text-center mb-32 relative" x-data="{ shown: false }" x-intersect.once="shown = true">
            <div class="inline-flex items-center gap-4 mb-6" x-show="shown" x-transition:enter="transition ease-out duration-700">
                <span class="h-[1px] w-12 bg-yellow-400"></span>
                <span class="text-yellow-600 font-black text-xs uppercase tracking-[0.6em]">Portfolio</span>
                <span class="h-[1px] w-12 bg-yellow-400"></span>
            </div>

            <h2 class="text-5xl md:text-7xl font-black text-black uppercase tracking-tighter leading-none mb-6"
                x-show="shown" x-transition:enter="transition ease-out duration-1000 delay-100">
                Our Completed <br>
                <span class="relative text-transparent bg-clip-text bg-gradient-to-r from-black to-yellow-500">
                    Success Stories
                </span>
            </h2>

            <div class="w-24 h-1 bg-yellow-400 mx-auto mb-8" x-show="shown" x-transition:enter="transition scale-x-0 duration-500 delay-500"></div>

            <p class="text-black text-base md:text-lg max-w-2xl mx-auto font-medium leading-relaxed"
               x-show="shown" x-transition:enter="transition ease-out duration-1000 delay-300">
                Every shipment managed highlights our reliability and unwavering commitment to client success.
            </p>
        </div>

       <div class="relative space-y-32">

    <!-- STORY 01 -->
<div class="group flex flex-col lg:flex-row items-center gap-12 lg:gap-24 relative"
     x-data="{ active: false }"
     @mouseenter="active = true"
     @mouseleave="active = false">

    <div class="absolute -top-10 -left-55 text-[12rem] font-black text-black/[0.25] leading-none z-0 transition-all duration-700" :class="active ? 'translate-x-5' : ''">01</div>

    <div class="w-full lg:w-3/5 relative z-10">
        <div class="relative p-2 border border-black/5 rounded-tl-[120px] bg-white shadow-sm transition-transform duration-500" :class="active ? '-translate-y-3' : ''">
            <div class="relative p-4 border-[16px] border-yellow-400 border-r-0 border-b-0 rounded-tl-[110px]">
                <div class="overflow-hidden rounded-tl-[85px] shadow-2xl relative group">
                    <img src="{{ asset('images/therealcontent1aboutpipes.jpeg') }}" alt="The 3 Pipes"
                        class="w-full aspect-[16/9] object-cover transition-transform duration-1000 group-hover:scale-110">
                </div>
            </div>
        </div>
    </div>

    <div class="w-full lg:w-2/5 py-8">
        <div class="inline-block px-3 py-1 bg-gray-100 text-[10px] font-bold uppercase tracking-widest mb-4">Logistics Excellence</div>
        <h3 class="text-3xl font-black text-black leading-tight mb-6 transition-colors group-hover:text-yellow-600">
            Dominating The Horizon: Engineering Beyond Boundaries
        </h3>
        <p class="text-gray-600 text-base leading-relaxed mb-8 opacity-80 border-l-4 border-yellow-400 pl-6">
            From Manila to Kuching, we don’t just move cargo—we transport the massive infrastructure that shapes tomorrow.
        </p>

        <button @click="modal1Open = true; document.body.style.overflow = 'hidden'"
                class="group/btn inline-flex items-center gap-3 text-black font-black text-sm uppercase tracking-widest cursor-pointer focus:outline-none">
            <span>Read More</span>
            <span class="w-8 h-[2px] bg-yellow-400 transition-all group-hover/btn:w-12"></span>
        </button>
    </div>
</div>

<!-- STORY 02 -->
<div class="group flex flex-col lg:flex-row-reverse items-center gap-12 lg:gap-24 relative"
     x-data="{ active: false }"
     @mouseenter="active = true"
     @mouseleave="active = false">

    <div class="absolute -top-10 -right-55 text-[12rem] font-black text-black/[0.25] leading-none z-0 transition-all duration-700" :class="active ? '-translate-x-5' : ''">02</div>

    <div class="w-full lg:w-3/5 relative z-10">
        <div class="relative p-2 border border-black/5 rounded-tr-[120px] rounded-br-[120px] bg-white shadow-sm transition-transform duration-500" :class="active ? '-translate-y-3' : ''">
            <div class="relative p-4 border-[16px] border-yellow-400 border-l-0 rounded-tr-[110px] rounded-br-[110px]">
                <div class="overflow-hidden rounded-tr-[85px] rounded-br-[85px] shadow-2xl relative group">
                    <img src="{{ asset('images/therealcontent2aboutcar.jpeg') }}" alt="Car Shipping"
                        class="w-full aspect-[16/9] object-cover transition-transform duration-1000 group-hover:scale-110">
                </div>
            </div>
        </div>
    </div>

    <div class="w-full lg:w-2/5 py-8 text-right lg:text-left">
        <div class="inline-block px-3 py-1 bg-gray-100 text-[10px] font-bold uppercase tracking-widest mb-4">Specialized Transport</div>
        <h3 class="text-3xl font-black text-black leading-tight mb-6 group-hover:text-yellow-600 transition-colors">
            Bridging Oceans, Securing Valuables
        </h3>
        <p class="text-gray-600 text-base leading-relaxed mb-8 opacity-80 border-r-4 lg:border-r-0 lg:border-l-4 border-yellow-400 pr-6 lg:pr-0 lg:pl-6">
            From the shores of Sarawak to the heart of the capital, Arkod Smart Logitech specializes in handling high-value automotive transportation and specialized mixed-cargo consolidations.
        </p>

        <button @click="modal2Open = true; document.body.style.overflow = 'hidden'"
                class="group/btn inline-flex items-center gap-3 text-black font-black text-sm uppercase tracking-widest cursor-pointer focus:outline-none">
            <span>Read More</span>
            <span class="w-8 h-[2px] bg-yellow-400 transition-all group-hover/btn:w-12"></span>
        </button>
    </div>
</div>

<!-- STORY 03 -->
<div class="group flex flex-col lg:flex-row items-center gap-12 lg:gap-24 relative"
     x-data="{ active: false }"
     @mouseenter="active = true"
     @mouseleave="active = false">

    <div class="absolute -top-10 -left-55 text-[12rem] font-black text-black/[0.25] leading-none z-0 transition-all duration-700" :class="active ? 'translate-x-5' : ''">03</div>

    <div class="w-full lg:w-3/5 relative z-10">
        <div class="relative p-2 border border-black/5 rounded-tl-[120px] bg-white shadow-sm transition-transform duration-500" :class="active ? '-translate-y-3' : ''">
            <div class="relative p-4 border-[16px] border-yellow-400 border-r-0 border-b-0 rounded-tl-[110px]">
                <div class="overflow-hidden rounded-tl-[85px] shadow-2xl relative group">
                    <img src="{{ asset('images/therealcontent3aboutsupra.jpeg') }}" alt="Premium Vehicle Transport"
                        class="w-full aspect-[16/9] object-cover transition-transform duration-1000 group-hover:scale-110">
                </div>
            </div>
        </div>
    </div>

    <div class="w-full lg:w-2/5 py-8">
        <div class="inline-block px-3 py-1 bg-gray-100 text-[10px] font-bold uppercase tracking-widest mb-4">Elite Automotive Care</div>
        <h3 class="text-3xl font-black text-black leading-tight mb-6 transition-colors group-hover:text-yellow-600">
            Next-Level Automotive Transit:
        </h3>
        <p class="text-gray-600 text-base leading-relaxed mb-8 opacity-80 border-l-4 border-yellow-400 pl-6">
           When it comes to moving elite automotive engineering, standard transport simply won't suffice.
        </p>

        <button @click="modal3Open = true; document.body.style.overflow = 'hidden'"
                class="group/btn inline-flex items-center gap-3 text-black font-black text-sm uppercase tracking-widest cursor-pointer focus:outline-none">
            <span>Read More</span>
            <span class="w-8 h-[2px] bg-yellow-400 transition-all group-hover/btn:w-12"></span>
        </button>
    </div>
</div>

<!-- STORY 04 -->
<div class="group flex flex-col lg:flex-row-reverse items-center gap-12 lg:gap-24 relative"
     x-data="{ active: false }"
     @mouseenter="active = true"
     @mouseleave="active = false">

    <div class="absolute -top-10 -right-55 text-[12rem] font-black text-black/[0.25] leading-none z-0 transition-all duration-700" :class="active ? '-translate-x-5' : ''">04</div>

    <div class="w-full lg:w-3/5 relative z-10">
        <div class="relative p-2 border border-black/5 rounded-tr-[120px] rounded-br-[120px] bg-white shadow-sm transition-transform duration-500" :class="active ? '-translate-y-3' : ''">
            <div class="relative p-4 border-[16px] border-yellow-400 border-l-0 rounded-tr-[110px] rounded-br-[110px]">
                <div class="overflow-hidden rounded-tr-[85px] rounded-br-[85px] shadow-2xl relative group">
                    <img src="{{ asset('images/therealcontent2aboutcar.jpeg') }}" alt="Inter-state Cargo Consolidations"
                        class="w-full aspect-[16/9] object-cover transition-transform duration-1000 group-hover:scale-110">
                </div>
            </div>
        </div>
    </div>

    <div class="w-full lg:w-2/5 py-8 text-right lg:text-left">
        <div class="inline-block px-3 py-1 bg-gray-100 text-[10px] font-bold uppercase tracking-widest mb-4">Mixed Cargo Solutions</div>
        <h3 class="text-3xl font-black text-black leading-tight mb-6 group-hover:text-yellow-600 transition-colors">
            Smart Consolidations: Maximizing Efficiency Across Channels
        </h3>
        <p class="text-gray-600 text-base leading-relaxed mb-8 opacity-80 border-r-4 lg:border-r-0 lg:border-l-4 border-yellow-400 pr-6 lg:pr-0 lg:pl-6">
            We seamlessly fuse multi-tiered retail cargo and commercial commodities safely into singular trans-ocean routes to heavily slash logistical footprints.
        </p>

        <button @click="modal4Open = true; document.body.style.overflow = 'hidden'"
                class="group/btn inline-flex items-center gap-3 text-black font-black text-sm uppercase tracking-widest cursor-pointer focus:outline-none">
            <span>Read More</span>
            <span class="w-8 h-[2px] bg-yellow-400 transition-all group-hover/btn:w-12"></span>
        </button>
    </div>
</div>

<!-- STORY 05 -->
<div class="group flex flex-col lg:flex-row items-center gap-12 lg:gap-24 relative"
     x-data="{ active: false }"
     @mouseenter="active = true"
     @mouseleave="active = false">

    <div class="absolute -top-10 -left-55 text-[12rem] font-black text-black/[0.25] leading-none z-0 transition-all duration-700" :class="active ? 'translate-x-5' : ''">05</div>

    <div class="w-full lg:w-3/5 relative z-10">
        <div class="relative p-2 border border-black/5 rounded-tl-[120px] bg-white shadow-sm transition-transform duration-500" :class="active ? '-translate-y-3' : ''">
            <div class="relative p-4 border-[16px] border-yellow-400 border-r-0 border-b-0 rounded-tl-[110px]">
                <div class="overflow-hidden rounded-tl-[85px] shadow-2xl relative group">
                    <img src="{{ asset('images/therealcontent3aboutsupra.jpeg') }}" alt="Supply Chain Operations"
                        class="w-full aspect-[16/9] object-cover transition-transform duration-1000 group-hover:scale-110">
                </div>
            </div>
        </div>
    </div>

    <div class="w-full lg:w-2/5 py-8">
        <div class="inline-block px-3 py-1 bg-gray-100 text-[10px] font-bold uppercase tracking-widest mb-4">Strategic Frameworks</div>
        <h3 class="text-3xl font-black text-black leading-tight mb-6 transition-colors group-hover:text-yellow-600">
            Unlocking Potential: Scalable End-to-End Networks
        </h3>
        <p class="text-gray-600 text-base leading-relaxed mb-8 opacity-80 border-l-4 border-yellow-400 pl-6">
            From customs clearance to port dispatching, we optimize tracking matrices to deliver visibility across highly unpredictable maritime corridors.
        </p>

        <button @click="modal5Open = true; document.body.style.overflow = 'hidden'"
                class="group/btn inline-flex items-center gap-3 text-black font-black text-sm uppercase tracking-widest cursor-pointer focus:outline-none">
            <span>Read More</span>
            <span class="w-8 h-[2px] bg-yellow-400 transition-all group-hover/btn:w-12"></span>
        </button>
    </div>
</div>

    <!-- CALL TO ACTION BANNER -->
    <div class="mt-40 p-12 bg-[#0a0a0a] rounded-[40px] relative overflow-hidden group shadow-2xl">
        <div class="absolute top-0 right-0 w-96 h-96 bg-yellow-400 rounded-full blur-[150px] opacity-10 group-hover:opacity-20 transition-opacity"></div>
        <div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-8 text-center md:text-left">
            <div>
                <h4 class="text-white text-3xl font-black uppercase tracking-tighter mb-2">Ready to ship with the best?</h4>
                <p class="text-gray-400 text-sm">Join our list of successful partners and experience smart logistics.</p>
            </div>
            <a href="#" class="bg-yellow-400 text-black px-10 py-5 font-black uppercase text-sm hover:bg-white transition-all transform hover:scale-105 shadow-xl">Start Your Project</a>
        </div>
    </div>
</div>

    <!-- MODAL 1 -->
    <div x-show="modal1Open"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-[200] flex items-center justify-center p-4 sm:p-6 md:p-10 backdrop-blur-xl bg-black/40"
         style="display: none;"
         @keydown.escape.window="modal1Open = false; document.body.style.overflow = 'auto'">

        <div @click.away="modal1Open = false; document.body.style.overflow = 'auto'"
             x-show="modal1Open"
             x-transition:enter="transition ease-out duration-300 transform"
             x-transition:enter-start="opacity-0 translate-y-12 scale-95"
             x-transition:enter-end="opacity-100 translate-y-0 scale-100"
             x-transition:leave="transition ease-in duration-200 transform"
             x-transition:leave-start="opacity-100 translate-y-0 scale-100"
             x-transition:leave-end="opacity-0 translate-y-12 scale-95"
             class="relative w-full max-w-6xl bg-white/80 backdrop-blur-md border border-white/40 shadow-2xl rounded-2xl overflow-hidden flex flex-col lg:flex-row max-h-[90vh] lg:max-h-[85vh]">

            <button @click="modal1Open = false; document.body.style.overflow = 'auto'"
                    class="absolute top-4 right-4 z-50 bg-black text-white p-3 rounded-full hover:bg-yellow-400 hover:text-black transition-colors shadow-md">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>

            <div class="w-full lg:w-1/2 bg-black relative min-h-[250px] lg:min-h-full">
                <img src="{{ asset('images/therealcontent1aboutpipes.jpeg') }}" alt="Project Pipe Logistics" class="w-full h-full object-cover absolute inset-0 opacity-90">
                <div class="absolute inset-0 bg-gradient-to-t lg:bg-gradient-to-r from-transparent via-transparent to-black/10"></div>
            </div>

            <div class="w-full lg:w-1/2 p-8 sm:p-12 overflow-y-auto flex flex-col justify-between bg-white/40">
                <div>
                    <div class="flex items-center gap-3 mb-6">
                        <span class="px-2.5 py-1 bg-black text-white text-[10px] font-black uppercase tracking-widest">Flash Report</span>
                        <span class="text-xs text-gray-500 font-bold tracking-wider">MANILA — KUCHING</span>
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-black text-black leading-tight mb-6 uppercase tracking-tight border-b-4 border-black pb-4">
                        Dominating The Horizon: Engineering Beyond Boundaries
                    </h2>
                    <div class="space-y-4 text-gray-800 text-base leading-relaxed font-medium">
                        <p class="text-lg font-bold text-gray-950">From Manila to Kuching, we don’t just move cargo—we transport the massive infrastructure that shapes tomorrow.</p>
                        <p>Featured here is the seamless logistical execution of our monumental <strong class="text-black">3500x3500x2000 mm wall pipe</strong> shipment, precision-engineered and securely transported via specialized open-top containers.</p>
                        <p>This critical milestone stands as a testament to our capacity for handling extreme-scale industrial demands, and it directly paves the way for our next major undertaking: anchoring the upcoming infrastructure development project in <span class="bg-yellow-300 px-1 font-bold text-black">Serian, Sarawak</span>.</p>
                    </div>
                </div>
                <div class="mt-8 pt-6 border-t border-black/10 flex items-center justify-between text-xs text-gray-500 font-bold tracking-wider">
                    <span>ARKOD SMART LOGITECH</span>
                    <span>SUCCESSFUL DELIVERY © 2026</span>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL 2 -->
    <div x-show="modal2Open"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-[200] flex items-center justify-center p-4 sm:p-6 md:p-10 backdrop-blur-xl bg-black/40"
         style="display: none;"
         @keydown.escape.window="modal2Open = false; document.body.style.overflow = 'auto'">

        <div @click.away="modal2Open = false; document.body.style.overflow = 'auto'"
             x-show="modal2Open"
             x-transition:enter="transition ease-out duration-300 transform"
             x-transition:enter-start="opacity-0 translate-y-12 scale-95"
             x-transition:enter-end="opacity-100 translate-y-0 scale-100"
             x-transition:leave="transition ease-in duration-200 transform"
             x-transition:leave-start="opacity-100 translate-y-0 scale-100"
             x-transition:leave-end="opacity-0 translate-y-12 scale-95"
             class="relative w-full max-w-6xl bg-white/80 backdrop-blur-md border border-white/40 shadow-2xl rounded-2xl overflow-hidden flex flex-col lg:flex-row max-h-[90vh] lg:max-h-[85vh]">

            <button @click="modal2Open = false; document.body.style.overflow = 'auto'"
                    class="absolute top-4 right-4 z-50 bg-black text-white p-3 rounded-full hover:bg-yellow-400 hover:text-black transition-colors shadow-md">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>

            <div class="w-full lg:w-1/2 bg-black relative min-h-[250px] lg:min-h-full">
                <img src="{{ asset('images/therealcontent2aboutcar.jpeg') }}" alt="Car Shipping Details" class="w-full h-full object-cover absolute inset-0 opacity-90">
                <div class="absolute inset-0 bg-gradient-to-t lg:bg-gradient-to-r from-transparent via-transparent to-black/10"></div>
            </div>

           <div class="w-full lg:w-1/2 p-8 sm:p-12 overflow-y-auto flex flex-col justify-between bg-white/40">
                <div>
                    <div class="flex items-center gap-3 mb-6">
                        <span class="px-2.5 py-1 bg-black text-white text-[10px] font-black uppercase tracking-widest">Arkod Smart Logitech Sdn. Bhd</span>
                        <span class="text-xs text-gray-500 font-bold tracking-wider">KUCHING — KUALA LUMPUR</span>
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-black text-black leading-tight mb-6 uppercase tracking-tight border-b-4 border-black pb-4">
                        Bridging Oceans, Securing Valuables: <br>
                    </h2>
                    <div class="space-y-4 text-gray-800 text-base leading-relaxed font-medium">
                        <p class="text-lg font-bold text-gray-950">
                            From the shores of Sarawak to the heart of the capital, Arkod Smart Logitech specializes in handling high-value automotive transportation and specialized mixed-cargo consolidations.
                        </p>
                        <p>
                            Featured here is our flawless end-to-end execution of a premium Toyota Camry transit from Kuching to Kuala Lumpur, securely bound alongside commercial batches of specialized palm sugar syrup.
                        </p>
                        <p>
                            Utilizing state-of-the-art blocking, bracing, and climate-defying insulation barriers within our specialized container units, we eliminate the risks of trans-sea relocation—proving once again that whether it is luxury engineering or bulk liquid commodities, your assets arrive in mint, pristine condition.
                        </p>
                    </div>
                </div>
                <div class="mt-8 pt-6 border-t border-black/10 flex items-center justify-between text-xs text-gray-500 font-bold tracking-wider">
                    <span>ARKOD SMART LOGITECH</span>
                    <span>SECURE TRANSIT © 2026</span>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL 3 -->
    <div x-show="modal3Open"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-[200] flex items-center justify-center p-4 sm:p-6 md:p-10 backdrop-blur-xl bg-black/40"
         style="display: none;"
         @keydown.escape.window="modal3Open = false; document.body.style.overflow = 'auto'">

        <div @click.away="modal3Open = false; document.body.style.overflow = 'auto'"
             x-show="modal3Open"
             x-transition:enter="transition ease-out duration-300 transform"
             x-transition:enter-start="opacity-0 translate-y-12 scale-95"
             x-transition:enter-end="opacity-100 translate-y-0 scale-100"
             x-transition:leave="transition ease-in duration-200 transform"
             x-transition:leave-start="opacity-100 translate-y-0 scale-100"
             x-transition:leave-end="opacity-0 translate-y-12 scale-95"
             class="relative w-full max-w-6xl bg-white/80 backdrop-blur-md border border-white/40 shadow-2xl rounded-2xl overflow-hidden flex flex-col lg:flex-row max-h-[90vh] lg:max-h-[85vh]">

            <button @click="modal3Open = false; document.body.style.overflow = 'auto'"
                    class="absolute top-4 right-4 z-50 bg-black text-white p-3 rounded-full hover:bg-yellow-400 hover:text-black transition-colors shadow-md">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>

            <div class="w-full lg:w-1/2 bg-black relative min-h-[250px] lg:min-h-full">
                <img src="{{ asset('images/therealcontent3aboutsupra.jpeg') }}" alt="Furniture Delivery Details" class="w-full h-full object-cover absolute inset-0 opacity-90">
                <div class="absolute inset-0 bg-gradient-to-t lg:bg-gradient-to-r from-transparent via-transparent to-black/10"></div>
            </div>

             <div class="w-full lg:w-1/2 p-8 sm:p-12 overflow-y-auto flex flex-col justify-between bg-white/40">
                <div>
                    <div class="flex items-center gap-3 mb-6">
                        <span class="px-2.5 py-1 bg-black text-white text-[10px] font-black uppercase tracking-widest">Arkod Smart Logitech Sdn. Bhd</span>
                        <span class="text-xs text-gray-500 font-bold tracking-wider">KUCHING — KUALA LUMPUR</span>
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-black text-black leading-tight mb-6 uppercase tracking-tight border-b-4 border-black pb-4">
                       DOMINATING CROSS-BORDER HIGH-PERFORMANCE LOGISTICS <br>
                    </h2>
                    <div class="space-y-4 text-gray-800 text-base leading-relaxed font-medium">
                        <p class="text-lg font-bold text-gray-950">
                            From the shores of Sarawak to the heart of the capital, Arkod Smart Logitech specializes in handling high-value automotive transportation and specialized mixed-cargo consolidations.
                        </p>
                        <p>
                            Featured here is our flawless end-to-end execution of a premium Toyota Camry transit from Kuching to Kuala Lumpur, securely bound alongside commercial batches of specialized palm sugar syrup.
                        </p>
                        <p>
                            Utilizing state-of-the-art blocking, bracing, and climate-defying insulation barriers within our specialized container units, we eliminate the risks of trans-sea relocation—proving once again that whether it is luxury engineering or bulk liquid commodities, your assets arrive in mint, pristine condition.
                        </p>
                    </div>
                </div>
                <div class="mt-8 pt-6 border-t border-black/10 flex items-center justify-between text-xs text-gray-500 font-bold tracking-wider">
                    <span>ARKOD SMART LOGITECH</span>
                    <span>SECURE TRANSIT © 2026</span>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL 4 -->
    <div x-show="modal4Open"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-[200] flex items-center justify-center p-4 sm:p-6 md:p-10 backdrop-blur-xl bg-black/40"
         style="display: none;"
         @keydown.escape.window="modal4Open = false; document.body.style.overflow = 'auto'">

        <div @click.away="modal4Open = false; document.body.style.overflow = 'auto'"
             x-show="modal4Open"
             x-transition:enter="transition ease-out duration-300 transform"
             x-transition:enter-start="opacity-0 translate-y-12 scale-95"
             x-transition:enter-end="opacity-100 translate-y-0 scale-100"
             x-transition:leave="transition ease-in duration-200 transform"
             x-transition:leave-start="opacity-100 translate-y-0 scale-100"
             x-transition:leave-end="opacity-0 translate-y-12 scale-95"
             class="relative w-full max-w-6xl bg-white/80 backdrop-blur-md border border-white/40 shadow-2xl rounded-2xl overflow-hidden flex flex-col lg:flex-row max-h-[90vh] lg:max-h-[85vh]">

            <button @click="modal4Open = false; document.body.style.overflow = 'auto'"
                    class="absolute top-4 right-4 z-50 bg-black text-white p-3 rounded-full hover:bg-yellow-400 hover:text-black transition-colors shadow-md">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>

            <div class="w-full lg:w-1/2 bg-black relative min-h-[250px] lg:min-h-full">
                <img src="{{ asset('images/therealcontent2aboutcar.jpeg') }}" alt="Automotive Transit Details" class="w-full h-full object-cover absolute inset-0 opacity-90">
                <div class="absolute inset-0 bg-gradient-to-t lg:bg-gradient-to-r from-transparent via-transparent to-black/10"></div>
            </div>

            <div class="w-full lg:w-1/2 p-8 sm:p-12 overflow-y-auto flex flex-col justify-between bg-white/40">
                <div>
                    <div class="flex items-center gap-3 mb-6">
                        <span class="px-2.5 py-1 bg-black text-white text-[10px] font-black uppercase tracking-widest">Arkod Smart Logitech Sdn. Bhd</span>
                        <span class="text-xs text-gray-500 font-bold tracking-wider">KUCHING — KUALA LUMPUR</span>
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-black text-black leading-tight mb-6 uppercase tracking-tight border-b-4 border-black pb-4">
                        Smart Consolidations: Maximizing Efficiency Across Channels
                    </h2>
                    <div class="space-y-4 text-gray-800 text-base leading-relaxed font-medium">
                        <p class="text-lg font-bold text-gray-950">
                            We seamlessly fuse multi-tiered retail cargo and commercial commodities safely into singular trans-ocean routes to heavily slash logistical footprints.
                        </p>
                        <p>
                            Featured here is our flawless end-to-end execution of a premium automotive asset transit, securely buffered utilizing advanced industrial-grade constraints.
                        </p>
                        <p>
                            Utilizing state-of-the-art blocking, bracing, and climate-defying insulation barriers within our specialized container units, we safely eliminate the standard multi-modal risks of trans-sea relocation.
                        </p>
                    </div>
                </div>
                <div class="mt-8 pt-6 border-t border-black/10 flex items-center justify-between text-xs text-gray-500 font-bold tracking-wider">
                    <span>ARKOD SMART LOGITECH</span>
                    <span>SECURE TRANSIT © 2026</span>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL 05 -->
    <div x-show="modal5Open"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-[200] flex items-center justify-center p-4 sm:p-6 md:p-10 backdrop-blur-xl bg-black/40"
         style="display: none;"
         @keydown.escape.window="modal5Open = false; document.body.style.overflow = 'auto'">

        <div @click.away="modal5Open = false; document.body.style.overflow = 'auto'"
             x-show="modal5Open"
             x-transition:enter="transition ease-out duration-300 transform"
             x-transition:enter-start="opacity-0 translate-y-12 scale-95"
             x-transition:enter-end="opacity-100 translate-y-0 scale-100"
             x-transition:leave="transition ease-in duration-200 transform"
             x-transition:leave-start="opacity-100 translate-y-0 scale-100"
             x-transition:leave-end="opacity-0 translate-y-12 scale-95"
             class="relative w-full max-w-6xl bg-white/80 backdrop-blur-md border border-white/40 shadow-2xl rounded-2xl overflow-hidden flex flex-col lg:flex-row max-h-[90vh] lg:max-h-[85vh]">

            <button @click="modal5Open = false; document.body.style.overflow = 'auto'"
                    class="absolute top-4 right-4 z-50 bg-black text-white p-3 rounded-full hover:bg-yellow-400 hover:text-black transition-colors shadow-md">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>

            <div class="w-full lg:w-1/2 bg-black relative min-h-[250px] lg:min-h-full">
                <img src="{{ asset('images/therealcontent3aboutsupra.jpeg') }}" alt="Infrastructure Project Details" class="w-full h-full object-cover absolute inset-0 opacity-90">
                <div class="absolute inset-0 bg-gradient-to-t lg:bg-gradient-to-r from-transparent via-transparent to-black/10"></div>
            </div>

            <div class="w-full lg:w-1/2 p-8 sm:p-12 overflow-y-auto flex flex-col justify-between bg-white/40">
                <div>
                    <div class="flex items-center gap-3 mb-6">
                        <span class="px-2.5 py-1 bg-black text-white text-[10px] font-black uppercase tracking-widest">Arkod Smart Logitech Sdn. Bhd</span>
                        <span class="text-xs text-gray-500 font-bold tracking-wider">GLOBAL PORT ROUTING</span>
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-black text-black leading-tight mb-6 uppercase tracking-tight border-b-4 border-black pb-4">
                        Unlocking Potential: Scalable End-to-End Networks
                    </h2>
                    <div class="space-y-4 text-gray-800 text-base leading-relaxed font-medium">
                        <p class="text-lg font-bold text-gray-950">
                            From customs clearance to port dispatching, we optimize tracking matrices to deliver visibility across highly unpredictable maritime corridors.
                        </p>
                        <p>
                            By combining specialized algorithmic tracking pipelines and localized storage hubs, we protect fragile supply chains from unannounced border interruptions.
                        </p>
                        <p>
                            Whether dealing with dense industrial mechanisms or time-sensitive container handoffs, our systematic checkpoints keep your logistics operations moving forward with unparalleled predictability.
                        </p>
                    </div>
                </div>
                <div class="mt-8 pt-6 border-t border-black/10 flex items-center justify-between text-xs text-gray-500 font-bold tracking-wider">
                    <span>ARKOD SMART LOGITECH</span>
                    <span>SECURE TRANSIT © 2026</span>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- END: SUCCESS STORIES SECTION -->
