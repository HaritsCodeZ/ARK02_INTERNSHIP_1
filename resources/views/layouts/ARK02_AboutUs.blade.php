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

<!-- START: PROVEN LOGISTICS SECTION -->
<!-- HEIGHT CONTROL: Changed min-h to 450px and lg:h to 600px -->
<section class="relative min-h-[450px] lg:h-[600px] flex items-center overflow-hidden" x-data="heroSlider()">

    <!-- Slides Container -->
<div class="absolute inset-0 z-0">
    <template x-for="(slide, index) in slides" :key="index">
        <div :class="{
                'opacity-100': current === index,
                'opacity-0 pointer-events-none': current !== index
             }"
             class="absolute inset-0 transition-opacity duration-700 ease-in-out">

            <img :src="slide.image"
                 :alt="slide.title"
                 :class="slide.imagePosition || 'object-center'"
                 class="w-full h-full object-cover transition-all duration-1000">

            <!-- Overlay -->
            <div class="absolute inset-0 bg-gradient-to-r from-[#0a0a0a]/85 via-[#0a0a0a]/55 to-[#0a0a0a]/85"></div>

            <!-- Extra vignette for Gawai -->
            <div x-show="current === 1" class="absolute inset-0 bg-gradient-to-b from-transparent via-black/30 to-black/75"></div>
        </div>
    </template>
</div>

    <!-- Content -->
    <div class="max-w-[1600px] mx-auto px-6 w-full relative z-10 flex justify-end">
        <div class="max-w-4xl text-right md:text-left lg:ml-auto">

            <!-- Unique Content per Slide -->
            <template x-for="(slide, index) in slides" :key="index">
                <div x-show="current === index"
                     x-transition:enter="transition ease-out duration-700"
                     x-transition:enter-start="opacity-0 translate-y-8"
                     x-transition:enter-end="opacity-100 translate-y-0"
                     class="mb-8">

                    <h2 class="text-4xl md:text-5xl font-black tracking-tighter leading-tight mb-4">
                        <span x-text="slide.title"></span><br>
                        <span class="text-yellow-400 uppercase" x-text="slide.subtitle"></span>
                    </h2>

                    <p class="text-gray-200 text-base md:text-lg font-medium max-w-xl ml-auto md:ml-0 opacity-95"
                       x-text="slide.description"></p>
                </div>
            </template>

            <!-- KPI Section - Can be different per slide -->
            <template x-for="(slide, index) in slides" :key="index">
                <div x-show="current === index" class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
                    <template x-for="(kpi, i) in slide.kpis" :key="i">
                        <div class="flex items-center md:flex-col md:items-start gap-3">
                            <div class="p-2 bg-yellow-400/10 border border-yellow-400/20 rounded-lg">
                                <span x-html="kpi.icon"></span>
                            </div>
                            <div>
                                <div class="text-2xl font-black text-white" x-text="kpi.number"></div>
                                <div class="text-[11px] font-bold text-yellow-400 uppercase tracking-widest" x-text="kpi.label"></div>
                            </div>
                        </div>
                    </template>
                </div>
            </template>

            <!-- Navigation Dots -->
            <div class="flex space-x-2 justify-end md:justify-start">
                <template x-for="(slide, index) in slides" :key="index">
                    <button @click="goTo(index)"
                            :class="current === index ? 'bg-yellow-400 w-8' : 'bg-white/30 w-2'"
                            class="h-1 rounded-full transition-all duration-300 hover:bg-yellow-400"></button>
                </template>
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
                    <img src="{{ asset('images/therealcontent4redbull.jpeg') }}" alt="Inter-state Cargo Consolidations"
                        class="w-full aspect-[16/9] object-cover transition-transform duration-1000 group-hover:scale-110">
                </div>
            </div>
        </div>
    </div>

    <div class="w-full lg:w-2/5 py-8 text-right lg:text-left">
        <div class="inline-block px-3 py-1 bg-gray-100 text-[10px] font-bold uppercase tracking-widest mb-4">Mixed Cargo Solutions</div>
        <h3 class="text-3xl font-black text-black leading-tight mb-6 group-hover:text-yellow-600 transition-colors">
            Recycling Project – Red Bull
        </h3>
        <p class="text-gray-600 text-base leading-relaxed mb-8 opacity-80 border-r-4 lg:border-r-0 lg:border-l-4 border-yellow-400 pr-6 lg:pr-0 lg:pl-6">
            As part of this initiative, we were appointed to collect expired Red Bull stock from various locations throughout the region.
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
                    <img src="{{ asset('images/therealcontent5containers.jpeg') }}" alt="Supply Chain Operations"
                        class="w-full aspect-[16/9] object-cover transition-transform duration-1000 group-hover:scale-110">
                </div>
            </div>
        </div>
    </div>

    <div class="w-full lg:w-2/5 py-8">
        <div class="inline-block px-3 py-1 bg-gray-100 text-[10px] font-bold uppercase tracking-widest mb-4">Strategic Frameworks</div>
        <h3 class="text-3xl font-black text-black leading-tight mb-6 transition-colors group-hover:text-yellow-600">
            Energizing The Digital Grid
        </h3>
        <p class="text-gray-600 text-base leading-relaxed mb-8 opacity-80 border-l-4 border-yellow-400 pl-6">
           When the continuity of digital enterprise hangs in the balance, transport precision is everything. Our strategic Kuala Lumpur to Kota Kinabalu deployment showcases Arkod Smart Logitech’s
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
                        <p>This critical milestone stands as a testament to our capacity for handling extreme-scale industrial demands, and it directly paves the way for our next major undertaking: anchoring the upcoming infrastructure development project in Serian, Sarawak.</p>
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
                            When it comes to moving elite automotive engineering, standard transport simply won't suffice.
                        </p>
                        <p>
                            Our latest successfully completed milestone showcases the flawless execution of a Full Container Load (FCL) transit, delivering a high-performance, used Toyota Supra from Kuching straight to Kuala Lumpur. From precision terminal handling to secure container tracking,
                        </p>
                        <p>
                            Arkod Smart Logitech utilizes rigid specialized rigging frameworks and custom bracing architectures designed to protect premium sports assets from the slightest cosmetic or structural shifting. We bridge the South China Sea with one absolute standard: zero compromise, total security, and pristine arrival condition.
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
                <img src="{{ asset('images/therealcontent4redbull.jpeg') }}" alt="Automotive Transit Details" class="w-full h-full object-cover absolute inset-0 opacity-90">
                <div class="absolute inset-0 bg-gradient-to-t lg:bg-gradient-to-r from-transparent via-transparent to-black/10"></div>
            </div>

            <div class="w-full lg:w-1/2 p-8 sm:p-12 overflow-y-auto flex flex-col justify-between bg-white/40">
                <div>
                    <div class="flex items-center gap-3 mb-6">
                        <span class="px-2.5 py-1 bg-black text-white text-[10px] font-black uppercase tracking-widest">Arkod Smart Logitech Sdn. Bhd</span>
                        <span class="text-xs text-gray-500 font-bold tracking-wider">Recycling Project</span>
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-black text-black leading-tight mb-6 uppercase tracking-tight border-b-4 border-black pb-4">
                        Recycling Project – Red Bull
                    </h2>
                    <div class="space-y-4 text-gray-800 text-base leading-relaxed font-medium">
                        <p class="text-lg font-bold text-gray-950">
                            In 2024, we successfully completed one of our largest logistics and supply distribution projects across Sarawak.
                        </p>
                        <p>
                             As part of this initiative, we were appointed to collect expired Red Bull stock from various locations throughout the region. The operation involved handling palletized shipments of Red Bull products, carefully managed and prepared for transport as part of the collection and recycling process.
                        </p>
                        <p>
                           Through careful planning, efficient logistics coordination, and reliable transportation management, we ensured timely delivery and collection across multiple locations while maintaining the highest standards of service.
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
                <img src="{{ asset('images/therealcontent5containers.jpeg') }}" alt="Infrastructure Project Details" class="w-full h-full object-cover absolute inset-0 opacity-90">
                <div class="absolute inset-0 bg-gradient-to-t lg:bg-gradient-to-r from-transparent via-transparent to-black/10"></div>
            </div>

            <div class="w-full lg:w-1/2 p-8 sm:p-12 overflow-y-auto flex flex-col justify-between bg-white/40">
                <div>
                    <div class="flex items-center gap-3 mb-6">
                        <span class="px-2.5 py-1 bg-black text-white text-[10px] font-black uppercase tracking-widest">Arkod Smart Logitech Sdn. Bhd</span>
                        <span class="text-xs text-gray-500 font-bold tracking-wider">KUALA LUMPUR - KOTA KINABALU</span>
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-black text-black leading-tight mb-6 uppercase tracking-tight border-b-4 border-black pb-4">
                        UNCOMPROMISING LOGISTICS FOR CRITICAL TECHNOLOGY
                    </h2>
                    <div class="space-y-4 text-gray-800 text-base leading-relaxed font-medium">
                        <p class="text-lg font-bold text-gray-950">Our strategic Kuala Lumpur to Kota Kinabalu deployment showcases Arkod Smart Logitech’s capacity to securely handle dense, high-sensitivity technological infrastructure
                        <p>
                            Safely distributing complete industrial UPS machines, high-capacity battery banks, and heavy server cabinet racks. Packed with advanced weather-sealed moisture barriers, industrial pallet anchoring systems, and heavy-duty poly-strapping configurations,
                        </p>
                        <p>
                            We safeguard delicate internal electronic components against complex sea-route vibrations and humidity. From tech hubs to regional data centers, we deliver the power that keeps East Malaysia running.
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

<!-- HERO SLIDESHOW SCRIPT -->
<script>
function heroSlider() {
    return {
        current: 0,

        slides: [
            {
                image: "{{ asset('images/mts-analysis-2022.jpg') }}",
                imagePosition: "object-center",           // First slide stays centered
                title: "PROVEN LOGISTICS",
                subtitle: "Excellence in Motion",
                description: "Experience the efficiency of our completed shipments and projects.",
                kpis: [
                    { icon: '🚛', number: 'VARIOUS', label: 'Belongings Shipped' },
                    { icon: '⚡', number: 'EFFICIENT', label: 'Handling Management' },
                    { icon: '🤝', number: 'PARTNERED', label: 'Various Companies' }
                ]
            },
            {
                image: "{{ asset('images/slideshow2gawai.jpeg') }}",
                imagePosition: "object-top",
                title: "GAWAI SPECIAL",
                subtitle: "Seamless Delivery",
                description: "Reliable logistics support for your festive celebrations and beyond.",
                kpis: [
                    { icon: '🎉', number: 'FESTIVE', label: 'Gawai Deliveries' },
                    { icon: '⏱️', number: 'FAST', label: 'Same Week Delivery' },
                    { icon: '🛡️', number: 'SECURE', label: 'Protected Cargo' }
                ]
            }
            // Add more slides here easily...
        ],

        init() {
            setInterval(() => this.next(), 6500);
        },

        next() {
            this.current = (this.current + 1) % this.slides.length;
        },

        goTo(index) {
            this.current = index;
        }
    }
}
</script>
</body>
