<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARKOD | Special Packages And Services</title>
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

    <!-- Section 1: Premium Introductory Hero Hook with Custom Background Image -->
<section class="relative min-h-[85vh] flex items-center justify-center px-6 py-24 text-center overflow-hidden bg-black">

    <!-- Immersive Background Image Layer -->
    <div class="absolute inset-0 z-0">
        <!-- Main Asset Image Integration -->
        <img src="{{ asset('images/specialpackagesentry.png') }}"
             alt="ARKOD Special Packages Premium Workshop Entry"
             class="w-full h-full object-cover object-center pointer-events-none select-none">

        <!-- Deep Black High-Contrast Layer Vignette (Matching image_3aa1fd.jpg) -->
        <div class="absolute inset-0 bg-black/75 z-10"></div>
    </div>

    <!-- Content Matrix Layer -->
    <div class="max-w-[1200px] mx-auto relative z-30 space-y-8 flex flex-col items-center">

        <!-- Elegant Pill Tag Container (Fixed broken span from previous version) -->
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full border border-yellow-500/40 bg-black/80 backdrop-blur-md shadow-xl text-[10px] font-black uppercase tracking-[0.35em]">
            <span class="w-1.5 h-1.5 rounded-full bg-yellow-500"></span>
            <span class="text-white">Exclusive Transit Upgrades <br> SPECIFIC FOR VEHICHLES</span>
            <span class="w-1.5 h-1.5 rounded-full bg-yellow-500"></span>
        </div>

        <!-- Big Bold High-Contrast Title Layer -->
        <h1 class="text-4xl md:text-7xl font-black uppercase tracking-tight leading-[1.05] text-white">
            ELITE CARE FOR <br>
            <span class="text-[#facc15]">YOUR VEHICLE</span>
        </h1>

        <!-- Ultra-Clean Backdrop Shroud Box -->
        <div class="max-w-3xl mx-auto bg-black/50 backdrop-blur-md px-8 py-6 rounded-2xl border border-white/5 shadow-[0_20px_50px_rgba(0,0,0,0.5)]">
            <p class="text-gray-300 text-sm md:text-base md:leading-relaxed font-medium tracking-wide">
                Don’t just ship your ride—preserve its status. Upgrade your standard vehicle logistics package with premium detailing and engineering maintenance bundles tailored for long-distance maritime transit.
            </p>
        </div>

        <!-- Minimalist Flow Indicator Component -->
        <div class="pt-4 flex flex-col items-center gap-2.5 group cursor-pointer">
            <span class="text-[9px] uppercase tracking-[0.5em] text-gray-400 font-black transition-colors group-hover:text-yellow-400">Discover Packages</span>
            <div class="w-[3px] h-6 bg-yellow-500 rounded-full shadow-[0_0_10px_rgba(250,204,21,0.6)]"></div>
        </div>

    </div>
</section>

<!-- Section 2: The 3-Package Presentation Grid (Premium Black Edition) -->
<section class="py-24 bg-white px-6 relative text-white">
    <div class="max-w-[1600px] mx-auto">

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-stretch">

            <!-- PACKAGE 1: CAR SHIPPING PACKAGE -->
            <div class="group relative flex flex-col justify-between bg-neutral-950 border border-neutral-800 rounded-3xl p-8 shadow-2xl transition-all duration-500 hover:border-amber-500/50 hover:shadow-amber-900/10">
                <div>
                    <div class="w-full h-56 bg-black rounded-2xl overflow-hidden mb-8 relative border border-neutral-800">
                        <img src="{{ asset('images/CAR SHIPPING PACKAGE.png') }}" alt="Car Shipping Package" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-opacity duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-neutral-950 via-transparent to-transparent"></div>
                        <span class="absolute bottom-4 left-4 text-[10px] font-black uppercase text-amber-400 tracking-[0.2em] bg-black/50 backdrop-blur px-3 py-1 rounded-full border border-amber-500/20">Logistics Core</span>
                    </div>

                    <h3 class="text-2xl font-black uppercase tracking-wider text-white mb-2">Car Shipping <br><span class="text-amber-500">Package</span></h3>
                    <p class="text-neutral-400 text-sm font-medium leading-relaxed mb-8">The industry standard for secure cross-strait transit, ensuring your vehicle remains protected from port to port.</p>

                    <div class="space-y-4 mb-8">
                        <div class="flex items-center gap-3 text-sm text-neutral-300"><span class="text-amber-500 font-bold">•</span> Port Klang, Kuching, Bintulu, KK</div>
                        <div class="flex items-center gap-3 text-sm text-neutral-300"><span class="text-amber-500 font-bold">•</span> Real-time asset tracking</div>
                    </div>
                </div>

                <div class="pt-6 border-t border-neutral-800">
                    <p class="text-[10px] uppercase tracking-[0.2em] text-neutral-500 font-bold italic">"Reliability defines the foundation of every transit."</p>
                </div>
            </div>

            <!-- PACKAGE 2: ESSENTIALS PACKAGE -->
            <div class="group relative flex flex-col justify-between bg-neutral-950 border border-neutral-800 rounded-3xl p-8 shadow-2xl transition-all duration-500 hover:border-amber-500/50 hover:shadow-amber-900/10">
                <div>
                    <div class="w-full h-56 bg-black rounded-2xl overflow-hidden mb-8 relative border border-neutral-800">
                        <img src="{{ asset('images/LIQUIMOLY_OIL.png') }}" alt="Essentials Package" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-opacity duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-neutral-950 via-transparent to-transparent"></div>
                        <span class="absolute bottom-4 left-4 text-[10px] font-black uppercase text-amber-400 tracking-[0.2em] bg-black/50 backdrop-blur px-3 py-1 rounded-full border border-amber-500/20">Performance Core</span>
                    </div>

                    <h3 class="text-2xl font-black uppercase tracking-wider text-white mb-2">Essentials <br><span class="text-amber-500">Package</span></h3>
                    <p class="text-neutral-400 text-sm font-medium leading-relaxed mb-8">Elevate your engine's health with professional maintenance, utilizing Liqui Moly performance fluids for long-distance durability .</p>

                    <div class="space-y-4 mb-8">
                        <div class="flex items-center gap-3 text-sm text-neutral-300"><span class="text-amber-500 font-bold">•</span> Liqui Moly 5W-30 Special Tec T</div>
                        <div class="flex items-center gap-3 text-sm text-neutral-300"><span class="text-amber-500 font-bold">•</span> H.B Auto mechanical evaluation</div>
                    </div>
                </div>

                <div class="pt-6 border-t border-neutral-800">
                    <p class="text-[10px] uppercase tracking-[0.2em] text-neutral-500 font-bold italic">"Precision maintenance for peak performance."</p>
                </div>
            </div>

            <!-- PACKAGE 3: AESTHETIC PACKAGE -->
            <div class="group relative flex flex-col justify-between bg-neutral-950 border border-neutral-800 rounded-3xl p-8 shadow-2xl transition-all duration-500 hover:border-amber-500/50 hover:shadow-amber-900/10">
                <div>
                    <div class="w-full h-56 bg-black rounded-2xl overflow-hidden mb-8 relative border border-neutral-800">
                        <img src="{{ asset('images/AESTHETICPACKAGE.png') }}" alt="Aesthetic Package" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-opacity duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-neutral-950 via-transparent to-transparent"></div>
                        <span class="absolute bottom-4 left-4 text-[10px] font-black uppercase text-amber-400 tracking-[0.2em] bg-black/50 backdrop-blur px-3 py-1 rounded-full border border-amber-500/20">Showroom Core</span>
                    </div>

                    <h3 class="text-2xl font-black uppercase tracking-wider text-white mb-2">Aesthetic <br><span class="text-amber-500">Package</span></h3>
                    <p class="text-neutral-400 text-sm font-medium leading-relaxed mb-8">Achieve the ultimate showroom finish with our multi-tier protective coating and deep-clean grooming services.</p>

                    <div class="space-y-4 mb-8">
                        <div class="flex items-center gap-3 text-sm text-neutral-300"><span class="text-amber-500 font-bold">•</span> GYEON & KCX Protection systems</div>
                        <div class="flex items-center gap-3 text-sm text-neutral-300"><span class="text-amber-500 font-bold">•</span> Hydrophobic deep engine bay clean</div>
                    </div>
                </div>

                <div class="pt-6 border-t border-neutral-800">
                    <p class="text-[10px] uppercase tracking-[0.2em] text-neutral-500 font-bold italic">"Excellence is in the finest details."</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Section 3: High-Contrast Closing Conversion Section (Pure White Luxury) -->
<section class="py-24 bg-white text-black border-t border-neutral-100 px-6 relative overflow-hidden">

    <div class="max-w-[1200px] mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 items-center relative z-10">

        <!-- Left Side: Copywriting Content to Attract Users -->
        <div class="lg:col-span-7 space-y-6 text-left">
            <span class="text-xs font-black tracking-[0.4em] uppercase text-amber-600 block">Seamless Experience</span>
            <h2 class="text-3xl md:text-5xl font-black uppercase tracking-tight text-black leading-tight">
                UNCOMPROMISING TRANSIT <br>FOR REFINED OWNERS
            </h2>
            <div class="w-12 h-[3px] bg-amber-500"></div>
            <p class="text-neutral-600 text-sm md:text-base leading-relaxed max-w-xl font-medium">
                Join thousands of smart vehicle owners who trust ARKOD Smart Logistics to handle cross-strait vehicle transport with unparalleled premium attention[cite: 1]. Lock in your custom selection during checkout for premium treatment.
            </p>

            <!-- CTA Trigger Action Interface -->
            <div class="pt-4 flex flex-col sm:flex-row items-center gap-4">
                <a href="#" class="w-full sm:w-auto bg-black hover:bg-amber-500 text-white hover:text-black text-center font-black px-10 py-5 rounded text-xs uppercase tracking-widest transition-all duration-300 shadow-md">
                    Secure Your Package Now
                </a>
                <a href="tel:0189116168" class="w-full sm:w-auto border border-neutral-300 hover:border-black text-black font-bold px-8 py-5 text-center rounded text-xs uppercase tracking-widest transition-all duration-300 flex items-center justify-center gap-3">
                    <svg class="w-4 h-4 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    Helpline: 018-9116168[cite: 1]
                </a>
            </div>
        </div>

        <!-- Right Side: Clean High-End Asset Presentation Container -->
        <div class="lg:col-span-5 relative">
            <div class="w-full h-80 bg-neutral-100 border border-neutral-200 rounded-2xl overflow-hidden shadow-lg relative group">
                <!-- Living visual showcase container reflecting marine shipping warehouse aesthetics -->
                <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1578575437130-527eed3abbec?auto=format&fit=crop&q=80&w=800')] bg-cover bg-center transition-transform duration-700 group-hover:scale-105"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>

                <!-- Bottom Details Overlaid cleanly -->
                <div class="absolute bottom-6 left-6 right-6 flex justify-between items-center text-white">
                    <div>
                        <p class="text-[9px] font-bold text-amber-400 uppercase tracking-widest">Official Portal</p>
                        <p class="text-sm font-black uppercase tracking-wider">arkod.com.my</p>
                    </div>
                    <span class="text-[10px] bg-white/10 backdrop-blur-md px-3 py-1 rounded border border-white/20 font-bold uppercase tracking-wider">T&Cs Applied</span>
                </div>
            </div>
        </div>

    </div>
</section>
