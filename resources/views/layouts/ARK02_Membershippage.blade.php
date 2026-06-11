<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARKOD | Arkod's Membership</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        [x-cloak] { display: none !important; }

        .text-gradient-gold {
            background: linear-gradient(135deg, #FFF 0%, #FACC15 50%, #854D0E 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .bg-gradient-gold-card {
            background: linear-gradient(135deg, rgba(250,204,21,0.1) 0%, rgba(0,0,0,0.8) 50%, rgba(133,77,14,0.1) 100%);
        }

        .border-gold-glow {
            border: 1px solid rgba(250, 204, 21, 0.2);
            box-shadow: 0 0 30px rgba(250, 204, 21, 0.05);
        }

        .border-gold-glow:hover {
            border: 1px solid rgba(250, 204, 21, 0.6);
            box-shadow: 0 0 40px rgba(250, 204, 21, 0.15);
        }

        .glass-dark {
            background: rgba(15, 15, 15, 0.7);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }

        /* Custom scrollbar for premium feel */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #0a0a0a;
        }
        ::-webkit-scrollbar-thumb {
            background: #222;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #FACC15;
        }
    </style>
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
                <a href="/newsandupdates" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">News & Updates</a>
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
                <a href="/helpcenter" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">Help Center</a>
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

    <!-- SECTION 1: HERO (LIGHT PREMIUM IMAGE CONFIGURATION) -->
<section class="relative min-h-[75vh] flex items-center justify-center pt-12 pb-24 px-6 overflow-hidden bg-[#fcfcfc]">

    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/membershipsection1.jpg') }}"
             alt="ARKOD Smart Logistics Background"
             class="w-full h-full object-cover opacity-85 object-center">

        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(0,0,0,0)_40%,rgba(0,0,0,0.15)_100%)] mix-blend-multiply"></div>

        <div class="absolute inset-0 bg-gradient-to-b from-white/10 via-transparent to-neutral-950/20"></div>

        <div class="absolute inset-0 bg-gradient-to-r from-white/20 via-transparent to-white/20"></div>
    </div>

    <div class="absolute top-1/4 -left-1/4 w-96 h-96 bg-yellow-400/15 rounded-full filter blur-[120px] pointer-events-none"></div>
    <div class="absolute bottom-1/4 -right-1/4 w-96 h-96 bg-amber-500/10 rounded-full filter blur-[120px] pointer-events-none"></div>

    <div class="max-w-[1400px] mx-auto text-center relative z-10">

        <div class="inline-flex items-center space-x-2 bg-neutral-950 text-white rounded-full px-4 py-2 mb-6 shadow-sm">
            <span class="text-xs font-bold tracking-[0.3em] uppercase text-gray-200">ARKOD SMART LOGITECH SDN. BHD</span>
        </div>

        <h1 class="text-5xl md:text-7xl lg:text-8xl font-black uppercase tracking-tight text-neutral-950 mb-6 leading-none drop-shadow-[0_2px_10px_rgba(255,255,255,0.8)]">
    Elevating Your <br class="hidden md:block"/>
    <span class="bg-gradient-to-r from-neutral-950 via-[#C5A850] to-neutral-950 bg-clip-text text-transparent">
        Logistics Journey
    </span>
</h1>

        <p class="text-neutral-900 max-w-4xl mx-auto text-base md:text-xl tracking-wide leading-relaxed mb-12 font-bold drop-shadow-[0_1px_8px_rgba(255,255,255,0.9)]">
    Rewarding your loyalty, transforming your operational efficiency. Earn points automatically on verified tasks and unlock unmatched VIP corporate privileges.
</p>

        <div class="flex flex-wrap justify-center gap-6 items-center bg-gradient-to-br from-neutral-900 via-neutral-950 to-neutral-900 border-2 border-[#C5A850]/50 rounded-2xl p-6 max-w-3xl mx-auto backdrop-blur-md shadow-[0_30px_60px_rgba(197,168,80,0.15)] relative overflow-hidden">
    <!-- Subtle Golden Glow inside the card -->
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,rgba(197,168,80,0.08)_0%,transparent_50%)] pointer-events-none"></div>

    <!-- Points Validity Info -->
    <div class="text-center px-6 relative z-10">
        <span class="block text-xs uppercase tracking-widest text-neutral-400 mb-1 font-extrabold">Points Validity</span>
        <span class="text-xl font-black text-white tracking-wider">12 MONTHS</span>
    </div>

    <!-- Premium Golden Divider -->
    <div class="hidden sm:block w-[1px] h-10 bg-[#C5A850]/30"></div>

    <!-- Conversion Rate Info -->
    <div class="text-center px-6 relative z-10">
        <span class="block text-xs uppercase tracking-widest text-[#C5A850] mb-1 font-extrabold tracking-[0.15em]">Conversion Rate</span>
        <span class="text-xl font-black text-white tracking-wider bg-gradient-to-r from-yellow-200 to-amber-400 bg-clip-text text-transparent drop-shadow-[0_2px_4px_rgba(0,0,0,0.4)]">RM 1.00 = 1 POINT</span>
    </div>

    <!-- Premium Golden Divider -->
    <div class="hidden sm:block w-[1px] h-10 bg-[#C5A850]/30"></div>

    <!-- Tier Validity Info -->
    <div class="text-center px-6 relative z-10">
        <span class="block text-xs uppercase tracking-widest text-neutral-400 mb-1 font-extrabold">Tier Validity</span>
        <span class="text-xl font-black text-white tracking-wider">12 MONTHS</span>
    </div>

</div>
    </div>
</section>

<div class="w-full bg-[#fcfcfc]">
    <section class="relative max-w-[1600px] mx-auto px-6 py-20 z-20" x-data="{ selectedTier: 'silver' }">

        <div class="text-center mb-16">
            <h2 class="text-xs font-black uppercase text-amber-600 tracking-[0.4em] mb-4">Membership Tiers</h2>
            <p class="text-3xl md:text-4xl font-black uppercase tracking-tight text-neutral-950">Select a tier to preview privileges</p>

            <div class="flex justify-center gap-3 mt-8 bg-neutral-100/80 p-2 rounded-xl max-w-md mx-auto border border-neutral-200/60 shadow-inner"
     :class="{
        'border-amber-700/20': selectedTier === 'bronze',
        'border-neutral-500/20': selectedTier === 'silver',
        'border-amber-500/20': selectedTier === 'gold'
     }">

    <button @click="selectedTier = 'bronze'"
            :class="selectedTier === 'bronze' ? 'bg-amber-700 text-white shadow-md font-black scale-[1.02]' : 'text-neutral-500 hover:text-amber-800 font-bold'"
            class="w-full px-5 py-2.5 rounded-lg text-xs uppercase tracking-wider transition-all duration-300 transform">
        Bronze
    </button>

    <button @click="selectedTier = 'silver'"
            :class="selectedTier === 'silver' ? 'bg-neutral-500 text-white shadow-md font-black scale-[1.02]' : 'text-neutral-500 hover:text-neutral-800 font-bold'"
            class="w-full px-5 py-2.5 rounded-lg text-xs uppercase tracking-wider transition-all duration-300 transform">
        Silver
    </button>

    <button @click="selectedTier = 'gold'"
            :class="selectedTier === 'gold' ? 'bg-amber-500 text-neutral-950 shadow-md font-black scale-[1.02]' : 'text-neutral-500 hover:text-amber-600 font-bold'"
            class="w-full px-5 py-2.5 rounded-lg text-xs uppercase tracking-wider transition-all duration-300 transform">
        Gold VIP
    </button>
</div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-stretch max-w-6xl mx-auto">

            <div @click="selectedTier = 'bronze'"
                 :class="selectedTier === 'bronze' ? 'border-amber-700 ring-4 ring-amber-700/20 scale-[1.02] shadow-[0_25px_50px_rgba(180,83,9,0.12)]' : 'border-amber-200/60 opacity-80 hover:opacity-100'"
                 class="bg-amber-50/40 border rounded-3xl p-8 md:p-10 flex flex-col justify-between transition-all duration-500 cursor-pointer group relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-amber-600/10 rounded-full filter blur-2xl"></div>
                <div>
                    <div class="flex justify-between items-start mb-10">
                        <div>
                            <span class="text-xs font-black tracking-[0.3em] uppercase text-amber-800 block mb-1">Tier 01</span>
                            <h3 class="text-3xl font-black uppercase tracking-wider text-amber-900">Bronze</h3>
                        </div>
                        <div class="w-12 h-12 rounded-xl bg-amber-700 text-white flex items-center justify-center font-black text-lg shadow-md shrink-0 ml-4">
                            ★
                        </div>
                    </div>

                    <div class="mb-8">
                        <span class="text-[10px] uppercase text-amber-800/80 block tracking-widest font-black mb-1">Required Points</span>
                        <div class="text-4xl font-black tracking-tight text-amber-950 mb-1 flex items-baseline gap-1">
                            <span>10,000</span>
                            <span class="text-xs uppercase font-black text-amber-800/60">Pts</span>
                        </div>
                        <span class="text-xs font-black text-amber-700 tracking-wide block">Spending Matrix: RM10,000</span>
                    </div>

                    <p class="text-sm text-amber-950 leading-relaxed mb-8 font-bold">
                        Entry level membership designed for scaling businesses and regular clients starting their reward journey with ARKOD.
                    </p>
                </div>

                <div class="border-t border-amber-200/80 pt-5 mt-auto">
                    <div class="flex items-center justify-between text-xs text-amber-900 font-black">
                        <span>Standard Discount</span>
                        <span class="text-white font-black bg-amber-700 px-3 py-1 rounded-md">5% Off Base</span>
                    </div>
                </div>
            </div>

            <div @click="selectedTier = 'silver'"
                 :class="selectedTier === 'silver' ? 'border-neutral-500 ring-4 ring-neutral-500/20 scale-[1.02] shadow-[0_25px_50px_rgba(115,115,115,0.12)]' : 'border-neutral-200 opacity-80 hover:opacity-100'"
                 class="bg-neutral-100/70 border rounded-3xl p-8 md:p-10 flex flex-col justify-between transition-all duration-500 cursor-pointer group relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-neutral-400/20 rounded-full filter blur-2xl"></div>
                <div>
                    <div class="flex justify-between items-start mb-10">
                        <div>
                            <span class="text-xs font-black tracking-[0.3em] uppercase text-neutral-500 block mb-1">Tier 02</span>
                            <h3 class="text-3xl font-black uppercase tracking-wider text-neutral-800">Silver</h3>
                        </div>
                        <div class="w-12 h-12 rounded-xl bg-neutral-500 text-white flex items-center justify-center font-black text-lg shadow-md shrink-0 ml-4">
                            ★★
                        </div>
                    </div>

                    <div class="mb-8">
                        <span class="text-[10px] uppercase text-neutral-500 block tracking-widest font-black mb-1">Required Points</span>
                        <div class="text-4xl font-black tracking-tight text-neutral-900 mb-1 flex items-baseline gap-1">
                            <span>50,000</span>
                            <span class="text-xs uppercase font-black text-neutral-400">Pts</span>
                        </div>
                        <span class="text-xs font-black text-neutral-600 tracking-wide block">Spending Matrix: RM50,000</span>
                    </div>

                    <p class="text-sm text-neutral-700 leading-relaxed mb-8 font-black">
                        Mid-tier status offering enhanced strategic priority values, broader reward limits, and dedicated campaign benefits.
                    </p>
                </div>

                <div class="border-t border-neutral-300 pt-5 mt-auto">
                    <div class="flex items-center justify-between text-xs text-neutral-600 font-black">
                        <span>Enhanced Privilege</span>
                        <span class="text-white font-black bg-neutral-500 px-3 py-1 rounded-md">10% Off + Priority</span>
                    </div>
                </div>
            </div>

            <div @click="selectedTier = 'gold'"
                 :class="selectedTier === 'gold' ? 'border-[#C5A850] ring-4 ring-[#C5A850]/30 scale-[1.04] shadow-[0_35px_60px_rgba(197,168,80,0.35)]' : 'border-neutral-800 opacity-90 hover:opacity-100'"
                 class="bg-gradient-to-br from-neutral-900 via-neutral-950 to-neutral-900 border-2 rounded-3xl p-8 md:p-10 flex flex-col justify-between transition-all duration-500 cursor-pointer group relative overflow-hidden">

                <div class="absolute top-0 right-0 w-44 h-44 bg-[radial-gradient(circle,rgba(197,168,80,0.25)_0%,transparent_70%)] rounded-full filter blur-xl animate-pulse"></div>
                <div>
                    <div class="flex justify-between items-start mb-10">
                        <div class="max-w-[75%]">
                            <span class="text-[10px] sm:text-xs font-black tracking-[0.25em] uppercase text-[#C5A850] block mb-1.5 break-words">Tier 03 • Ultimate Premium</span>
                            <h3 class="text-3xl font-black uppercase tracking-wider bg-gradient-to-r from-yellow-200 via-[#C5A850] to-yellow-100 bg-clip-text text-transparent">Gold VIP</h3>
                        </div>
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-amber-400 to-yellow-600 flex items-center justify-center text-neutral-950 font-black text-xl shadow-[0_0_15px_rgba(250,204,21,0.4)] shrink-0 ml-2">
                            👑
                        </div>
                    </div>

                    <div class="mb-8">
                        <span class="text-[10px] uppercase text-[#C5A850] block tracking-widest font-black mb-1">Required Points</span>
                        <div class="text-4xl sm:text-5xl font-black tracking-tight text-white mb-1 flex items-baseline gap-1">
                            <span>100,000</span>
                            <span class="text-xs uppercase font-black text-[#C5A850]">Pts</span>
                        </div>
                        <span class="text-xs font-black text-yellow-400 tracking-wide block">Spending Matrix: RM100,000</span>
                    </div>

                    <p class="text-sm text-neutral-200 leading-relaxed mb-8 font-black">
                        The highest echelon of the ARKOD ecosystem. Reserved for top-value high loyalty corporate operations needing instantaneous logistical executions.
                    </p>
                </div>

                <div class="border-t border-neutral-800 pt-5 mt-auto">
                    <div class="flex items-center justify-between text-xs text-neutral-300 font-black">
                        <span class="text-[#C5A850] uppercase tracking-widest text-[10px] font-black">Elite Tier Rewards</span>
                        <span class="text-white bg-gradient-to-r from-amber-500 to-yellow-500 font-black px-4 py-1.5 rounded-full text-[11px] shadow-sm shrink-0">15% - 20% OFF</span>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>

   <section class="w-full bg-[#fcfcfc] border-t border-b border-neutral-200/60 py-28 px-6 relative overflow-hidden"
         x-data="{
            active: 0,
            privileges: [
                {
                    id: '01',
                    title: 'Special Discounts',
                    desc: 'Enjoy structural savings applied directly on contracts and continuous member-exclusive rates.',
                    icon: `<svg class='w-6 h-6' fill='none' stroke='currentColor' viewBox='0 0 24 24'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M7 7h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2zM16 10a4 4 0 11-8 0 4 4 0 018 0z'/></svg>`,
                    bgImage: '/images/specialdiscountsmembership.png',
                    isGold: false
                },
                {
                    id: '02',
                    title: 'Priority Service',
                    desc: 'Faster structural processing response window and rapid priority line booking execution arrays.',
                    icon: `<svg class='w-6 h-6' fill='none' stroke='currentColor' viewBox='0 0 24 24'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z'/></svg>`,
                    bgImage: 'https://images.unsplash.com/photo-1521898284481-a5ec348cb555?auto=format&fit=crop&q=80&w=800',
                    isGold: false
                },
                {
                    id: '03',
                    title: 'Exclusive Promos',
                    desc: 'Access unique logistical structural pipelines and closed beta route optimizations updates.',
                    icon: `<svg class='w-6 h-6' fill='none' stroke='currentColor' viewBox='0 0 24 24'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5a2 2 0 10-2 2h2zm0 0h4m-4 0H8m12 3v7a2 2 0 01-2 2H6a2 2 0 01-2-2v-7m16 0h-4m-12 0h4m0 0v7'/></svg>`,
                    bgImage: 'https://images.unsplash.com/photo-1549465220-1a8b9238cd48?auto=format&fit=crop&q=80&w=800',
                    isGold: false
                },
                {
                    id: '04',
                    title: 'Gold Account Manager',
                    desc: 'Personalized technical asset routing operations and direct support lines assigned specifically for you.',
                    icon: '<span class=\'text-2xl\'>👑</span>',
                    bgImage: 'https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&q=80&w=800',
                    isGold: true
                }
            ],
            init() {
                setInterval(() => {
                    this.active = (this.active + 1) % this.privileges.length;
                }, 3000);
            }
         }">

    <div class="max-w-[1400px] mx-auto mb-16">
        <div class="max-w-3xl mx-auto text-center">
            <span class="text-xs font-black uppercase text-amber-600 tracking-[0.4em] block mb-3">Core Privileges</span>
            <h2 class="text-3xl md:text-5xl font-black uppercase tracking-wide text-neutral-950">Ecosystem Capabilities</h2>
        </div>
    </div>

    <div class="relative max-w-[1100px] mx-auto h-[480px] md:h-[420px] flex items-center justify-center">

        <template x-for="(card, index) in privileges" :key="index">
            <div class="absolute w-full max-w-[540px] md:max-w-[680px] rounded-[2.5rem] p-8 md:p-10 border transition-all duration-1000 ease-in-out cursor-pointer group flex flex-col justify-between h-[450px] overflow-hidden select-none"
                 @click="active = index"
                 :class="{
                    'z-30 scale-100 opacity-100 translate-x-0 shadow-[0_40px_80px_-15px_rgba(0,0,0,0.18)]': active === index,
                    'z-20 scale-90 opacity-60 -translate-x-1/3 md:-translate-x-[45%] blur-[0.5px]': (active - 1 + privileges.length) % privileges.length === index,
                    'z-20 scale-90 opacity-60 translate-x-1/3 md:translate-x-[45%] blur-[0.5px]': (active + 1) % privileges.length === index,
                    'opacity-0 scale-75 z-10 pointer-events-none': active !== index && (active - 1 + privileges.length) % privileges.length !== index && (active + 1) % privileges.length !== index
                 }"
                 :style="card.isGold && active === index
                    ? 'border-color: #eab308;'
                    : (card.isGold ? 'border-color: rgba(234,179,8,0.3);' : 'border-color: #e2e8f0;')">

                <!-- Background Image & Canvas Layer Wrapper -->
                <div class="absolute inset-0 z-0 bg-neutral-950">

                    <img :src="card.bgImage"
                         :alt="card.title"
                         class="w-full h-full object-cover absolute inset-0 z-10 transition-all duration-1000 group-hover:scale-105"
                         :class="{
                            /* ACTIVE CARD: Lifted brightness from 0.45 to 0.65 so the photo is beautifully visible */
                            'opacity-100 brightness-[0.65] saturate-[1.1]': active === index,
                            /* PREPARING/SIDE CARDS: Lifted opacity from 20% to 45% and dropped bleaching brightness so you see the image coming up */
                            'opacity-45 brightness-[0.75] saturate-[0.9]': active !== index
                         }">

                    <!-- Text Contrast Protection Gradient: Tuned to blend cleanly only at the bottom third -->
                    <div x-show="active === index"
                         class="absolute inset-0 z-20 pointer-events-none bg-gradient-to-t from-black/95 via-black/40 to-black/5"></div>

                    <!-- Faint Light Overlay for Side Cards to blend into your white layout background -->
                    <div x-show="active !== index"
                         class="absolute inset-0 z-20 pointer-events-none bg-white/10"></div>
                </div>

                <!-- Icon Element Container -->
                <div class="relative z-30 self-start">
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center shadow-md border backdrop-blur-md transition-all duration-500"
                         :class="{
                            'bg-amber-400/20 text-yellow-400 border-yellow-400/40': card.isGold && active === index,
                            'bg-white/10 text-white border-white/20': !card.isGold && active === index,
                            'bg-white/90 text-neutral-800 border-neutral-200/80 shadow-sm': active !== index
                         }">
                        <div x-html="card.icon"></div>
                    </div>
                </div>

                <!-- Card Meta/Typography Info Station -->
                <div class="relative z-30 mt-auto pt-6">
                    <h3 class="text-xl md:text-2xl font-black uppercase tracking-wider mb-2 transition-colors duration-500 drop-shadow-sm"
                        :class="{
                            'text-white': !card.isGold && active === index,
                            'text-amber-400': card.isGold && active === index,
                            'text-neutral-950': active !== index
                        }">
                        <span x-text="card.title"></span>
                    </h3>

                    <p class="text-xs md:text-sm leading-relaxed font-semibold transition-colors duration-500 max-w-md drop-shadow-sm"
                       :class="{
                            'text-neutral-200': !card.isGold && active === index,
                            'text-neutral-300': card.isGold && active === index,
                            'text-neutral-900 font-bold': active !== index
                       }">
                        <span x-text="card.desc"></span>
                    </p>
                </div>

                <!-- Large Background ID Numbers -->
                <div class="absolute top-6 right-8 text-6xl font-black transition-colors duration-500 select-none pointer-events-none z-30"
                     :class="{
                        'text-amber-400/20': card.isGold && active === index,
                        'text-white/10': !card.isGold && active === index,
                        'text-neutral-950/10': active !== index
                     }">
                    <span x-text="card.id"></span>
                </div>

            </div>
        </template>

    </div>

    <div class="flex items-center justify-center gap-2.5 mt-4 relative z-40">
        <template x-for="(card, index) in privileges" :key="index">
            <button @click="active = index"
                    class="h-2 rounded-full transition-all duration-500"
                    :class="active === index ? 'w-8 bg-amber-600' : 'w-2 bg-neutral-300'"></button>
        </template>
    </div>
</section>

   <!-- Outer Section Layer: Now Crisp White Background -->
<section class="w-full bg-white px-6 py-32 relative text-white font-sans selection:bg-yellow-400 selection:text-black">

    <!-- Main Inner Card: Premium Dark Dashboard Base Floating Over The White Section -->
    <div class="max-w-[1400px] mx-auto bg-gradient-to-br from-neutral-900 via-[#141414] to-neutral-950 border border-neutral-800/60 rounded-[40px] p-8 md:p-16 relative overflow-hidden shadow-[0_40px_100px_-15px_rgba(0,0,0,0.6)]">

        <!-- Multi-Layer Dynamic Luxury Glow Effects Inside The Dark Card -->
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-yellow-500/10 rounded-full filter blur-[120px] mix-blend-screen animate-pulse duration-[6000ms]"></div>
        <div class="absolute -bottom-32 -left-32 w-80 h-80 bg-amber-600/5 rounded-full filter blur-[100px] mix-blend-screen"></div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center relative z-10">

            <!-- Left Info Side Column -->
            <div class="lg:col-span-5 relative">
                <span class="text-xs font-black tracking-[0.4em] uppercase text-yellow-400/90 block mb-4 drop-shadow-sm">Elite Segment Focus</span>
                <h2 class="text-4xl md:text-5xl font-black uppercase tracking-tight mb-6 leading-[1.15] text-neutral-50">
                    What Makes <br/> <span class="bg-gradient-to-r from-yellow-400 via-amber-300 to-yellow-500 bg-clip-text text-transparent drop-shadow-sm">Gold VIP</span> Special?
                </h2>
                <p class="text-neutral-400 text-sm md:text-base leading-relaxed mb-8 font-medium max-w-md">
                    We don't just upgrade your status; we re-engineer our corporate operation around your freight requirements. Gold tier turns standard interaction into high-speed automation.
                </p>

                <!-- Premium High-Contrast Call to Action -->
                <div class="inline-flex items-center gap-3 bg-gradient-to-r from-yellow-400 to-amber-400 text-black font-black text-xs md:text-sm uppercase tracking-widest px-8 py-4 rounded-xl shadow-[0_10px_30px_-5px_rgba(234,179,8,0.3)] transition-all duration-300 hover:scale-[1.03] hover:shadow-[0_15px_35px_-3px_rgba(234,179,8,0.4)] cursor-pointer group">
                    <span>Qualify At 100,000 Points</span>
                    <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin='round' d='M9 5l7 7-7 7'></path></svg>
                </div>
            </div>

            <!-- Right Features Grid Column -->
            <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-6">

                <!-- Feature Card 1 -->
                <div class="group bg-neutral-900/50 hover:bg-neutral-900/90 border border-white/5 hover:border-yellow-400/30 rounded-2xl p-7 backdrop-blur-md shadow-xl transition-all duration-500 hover:-translate-y-1 hover:shadow-[0_20px_40px_-15px_rgba(0,0,0,0.7)] flex flex-col justify-between">
                    <div>
                        <div class="text-3xl mb-4 filter drop-shadow transition-transform duration-500 group-hover:scale-110 origin-left">👤</div>
                        <h4 class="text-neutral-100 group-hover:text-yellow-400 font-black uppercase tracking-wide mb-2 text-sm md:text-base transition-colors duration-300">Dedicated Account PIC</h4>
                        <p class="text-neutral-400 group-hover:text-neutral-300 text-xs md:text-sm leading-relaxed font-medium transition-colors duration-300">One professional team member manages your system assets entirely. No general automated help desks.</p>
                    </div>
                </div>

                <!-- Feature Card 2 -->
                <div class="group bg-neutral-900/50 hover:bg-neutral-900/90 border border-white/5 hover:border-yellow-400/30 rounded-2xl p-7 backdrop-blur-md shadow-xl transition-all duration-500 hover:-translate-y-1 hover:shadow-[0_20px_40px_-15px_rgba(0,0,0,0.7)] flex flex-col justify-between">
                    <div>
                        <div class="text-3xl mb-4 filter drop-shadow transition-transform duration-500 group-hover:scale-110 origin-left">⚡</div>
                        <h4 class="text-neutral-100 group-hover:text-yellow-400 font-black uppercase tracking-wide mb-2 text-sm md:text-base transition-colors duration-300">Instant Reply Threshold</h4>
                        <p class="text-neutral-400 group-hover:text-neutral-300 text-xs md:text-sm leading-relaxed font-medium transition-colors duration-300">Priority replies enforced inside corporate operational limits. Expect resolution arrays inside the exact same business day.</p>
                    </div>
                </div>

                <!-- Feature Card 3 -->
                <div class="group bg-neutral-900/50 hover:bg-neutral-900/90 border border-white/5 hover:border-yellow-400/30 rounded-2xl p-7 backdrop-blur-md shadow-xl transition-all duration-500 hover:-translate-y-1 hover:shadow-[0_20px_40px_-15px_rgba(0,0,0,0.7)] flex flex-col justify-between">
                    <div>
                        <div class="text-3xl mb-4 filter drop-shadow transition-transform duration-500 group-hover:scale-110 origin-left">💬</div>
                        <h4 class="text-neutral-100 group-hover:text-yellow-400 font-black uppercase tracking-wide mb-2 text-sm md:text-base transition-colors duration-300">Direct WhatsApp Comms</h4>
                        <p class="text-neutral-400 group-hover:text-neutral-300 text-xs md:text-sm leading-relaxed font-medium transition-colors duration-300">Direct communication channel configurations instead of traditional ticketing networks or switchboards.</p>
                    </div>
                </div>

                <!-- Feature Card 4 -->
                <div class="group bg-neutral-900/50 hover:bg-neutral-900/90 border border-white/5 hover:border-yellow-400/30 rounded-2xl p-7 backdrop-blur-md shadow-xl transition-all duration-500 hover:-translate-y-1 hover:shadow-[0_20px_40px_-15px_rgba(0,0,0,0.7)] flex flex-col justify-between">
                    <div>
                        <div class="text-3xl mb-4 filter drop-shadow transition-transform duration-500 group-hover:scale-110 origin-left">🚀</div>
                        <h4 class="text-neutral-100 group-hover:text-yellow-400 font-black uppercase tracking-wide mb-2 text-sm md:text-base transition-colors duration-300">Priority Logistics Processing</h4>
                        <p class="text-neutral-400 group-hover:text-neutral-300 text-xs md:text-sm leading-relaxed font-medium transition-colors duration-300">Your manifests, updates, customs declarations, and custom packaging request queues processed first.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

   <!-- Main Section: High-Contrast Corporate White Canvas -->
<section class="bg-white py-32 px-6 border-t border-neutral-200 relative font-sans selection:bg-amber-100 selection:text-neutral-900">
    <div class="max-w-[1400px] mx-auto">

        <!-- Header Section -->
        <div class="text-center max-w-3xl mx-auto mb-24">
            <span class="text-xs font-black uppercase text-amber-600 tracking-[0.5em] block mb-4">System Specifications</span>
            <h2 class="text-4xl md:text-5xl font-black uppercase tracking-tight text-neutral-950 leading-tight">
                Ecosystem Management <br class="hidden sm:inline"/> & Maintenance
            </h2>
            <div class="w-20 h-1.5 bg-gradient-to-r from-yellow-500 to-amber-600 mx-auto mt-6 rounded-full shadow-sm"></div>
        </div>

        <!-- 3-Column Luxury Black & Gold Executive Cards Layout -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 xl:gap-12">

            <!-- Executive Card 1 -->
            <div class="group bg-[#0d0d0d] border-t-4 border-t-amber-500 border-x border-b border-neutral-900 rounded-2xl p-8 md:p-10 shadow-[0_25px_60px_-15px_rgba(0,0,0,0.3)] transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_40px_80px_-15px_rgba(217,119,6,0.2)] flex flex-col justify-between items-center text-center">
                <div>
                    <!-- Visual Node Marker (Centered) -->
                    <div class="flex items-center justify-center gap-3 mb-6">
                        <span class="w-2.5 h-2.5 rounded-full bg-amber-400 group-hover:scale-125 transition-transform duration-300 shadow-[0_0_10px_#fbbf24]"></span>
                        <span class="text-[10px] font-black uppercase tracking-[0.3em] text-amber-500/80">Protocol 01</span>
                    </div>

                    <h3 class="text-xl md:text-2xl font-black uppercase tracking-wide mb-5 text-white group-hover:text-amber-400 transition-colors duration-300">
                        Tier Review Mechanics
                    </h3>

                    <!-- Significantly Enlarged & Center-Aligned Paragraph -->
                    <p class="text-neutral-300 text-base md:text-lg leading-relaxed font-medium mb-8 max-w-sm mx-auto">
                        Membership structures are analyzed every 12 months from qualification dates. Notification pathways update profiles via dashboards in the first 6 months as preventative follow-up metrics.
                    </p>
                </div>

                <div>
                    <!-- Premium Black/Gold Badge -->
                    <span class="inline-block text-xs font-black uppercase tracking-widest bg-amber-400/10 border border-amber-400/30 text-amber-400 px-5 py-2 rounded-xl shadow-inner">
                        Annual Cycle
                    </span>
                </div>
            </div>

            <!-- Executive Card 2 -->
            <div class="group bg-[#0d0d0d] border-t-4 border-t-amber-500 border-x border-b border-neutral-900 rounded-2xl p-8 md:p-10 shadow-[0_25px_60px_-15px_rgba(0,0,0,0.3)] transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_40px_80px_-15px_rgba(217,119,6,0.2)] flex flex-col justify-between items-center text-center">
                <div class="w-full">
                    <!-- Visual Node Marker (Centered) -->
                    <div class="flex items-center justify-center gap-3 mb-6">
                        <span class="w-2.5 h-2.5 rounded-full bg-amber-400 group-hover:scale-125 transition-transform duration-300 shadow-[0_0_10px_#fbbf24]"></span>
                        <span class="text-[10px] font-black uppercase tracking-[0.3em] text-amber-500/80">Protocol 02</span>
                    </div>

                    <h3 class="text-xl md:text-2xl font-black uppercase tracking-wide mb-5 text-white group-hover:text-amber-400 transition-colors duration-300">
                        Point Recovery Matrix
                    </h3>

                    <!-- Significantly Enlarged & Center-Aligned Paragraph -->
                    <p class="text-neutral-300 text-base md:text-lg leading-relaxed font-medium mb-6 max-w-sm mx-auto">
                        Points are bound to transaction accounts for exactly 12 months. Upon expiration, structures enter auto-freeze pipelines. Recovery operations invoke tier maintenance fees:
                    </p>
                </div>

                <!-- Premium Dark Ledgers Table (Kept layout sharp but scaled down for nice centering) -->
                <div class="space-y-3 bg-black/80 p-5 rounded-xl border border-neutral-800 text-sm font-bold font-mono tracking-wide text-neutral-300 shadow-inner w-full max-w-xs mx-auto group-hover:border-amber-500/20 transition-colors duration-500 text-left">
                    <div class="flex justify-between items-center pb-2 border-b border-neutral-900">
                        <span>Bronze Profile:</span>
                        <span class="text-white font-black">RM 5.00</span>
                    </div>
                    <div class="flex justify-between items-center pb-2 border-b border-neutral-900">
                        <span>Silver Profile:</span>
                        <span class="text-white font-black">RM 10.00</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span>Gold Profile:</span>
                        <span class="text-amber-400 font-black text-base">RM 15.00</span>
                    </div>
                </div>
            </div>

            <!-- Executive Card 3 -->
            <div class="group bg-[#0d0d0d] border-t-4 border-t-amber-500 border-x border-b border-neutral-900 rounded-2xl p-8 md:p-10 shadow-[0_25px_60px_-15px_rgba(0,0,0,0.3)] transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_40px_80px_-15px_rgba(217,119,6,0.2)] flex flex-col justify-between items-center text-center">
                <div>
                    <!-- Visual Node Marker (Centered) -->
                    <div class="flex items-center justify-center gap-3 mb-6">
                        <span class="w-2.5 h-2.5 rounded-full bg-amber-400 group-hover:scale-125 transition-transform duration-300 shadow-[0_0_10px_#fbbf24]"></span>
                        <span class="text-[10px] font-black uppercase tracking-[0.3em] text-amber-500/80">Protocol 03</span>
                    </div>

                    <h3 class="text-xl md:text-2xl font-black uppercase tracking-wide mb-5 text-white group-hover:text-amber-400 transition-colors duration-300">
                        Downgrade Parameters
                    </h3>

                    <!-- Significantly Enlarged & Center-Aligned Paragraph -->
                    <p class="text-neutral-300 text-base md:text-lg leading-relaxed font-medium mb-8 max-w-sm mx-auto">
                        Failure to sustain structural points targets inside the 12-month window initiates downgrade cascades: Gold profiles step down to Silver/Bronze levels, and Silver statuses revert to Bronze parameters.
                    </p>
                </div>

                <div>
                    <!-- High-Alert Premium Status Tag -->
                    <span class="inline-block text-xs font-black uppercase tracking-widest text-red-400 bg-red-950/40 border border-red-900/60 px-5 py-2 rounded-xl shadow-sm">
                        Status Protection Laws Apply
                    </span>
                </div>
            </div>

        </div>
    </div>
</section>

   <!-- Final Section Wrapper: Full-Bleed Clean White Background (No Inner Card) -->
<section class="w-full bg-white py-36 px-6 relative z-10 font-sans text-center selection:bg-amber-400 selection:text-black">
    <div class="max-w-[1400px] mx-auto">

        <!-- Trust Badge Element -->
        <div class="mb-8 flex justify-center">
            <span class="inline-flex items-center gap-2.5 text-xs font-black tracking-[0.4em] uppercase text-neutral-900 bg-neutral-100 border border-neutral-200/60 px-5 py-2.5 rounded-full shadow-sm">
                <span class="w-2 h-2 rounded-full bg-amber-500 animate-pulse"></span>
                ARKOD Global Infrastructure
            </span>
        </div>

        <!-- Massive Full-Scale Editorial Headline -->
        <h3 class="text-5xl sm:text-6xl md:text-7xl font-black uppercase tracking-tight text-neutral-950 mb-8 leading-[1.05] max-w-5xl mx-auto">
            Ready to Optimize Your <br class="hidden sm:inline" />  <span class="text-amber-500">Logistics Value?</span>
        </h3>

        <!-- Large, Highly Legible Description Block -->
        <p class="text-neutral-600 text-base md:text-xl font-medium leading-relaxed mb-14 max-w-3xl mx-auto">
            Join thousands of high-velocity enterprises tracking global milestones via the ARKOD infrastructure ecosystem. Start your account profile initialization process today.
        </p>

        <!-- Ultra-Premium High-Contrast Button Station -->
        <div class="flex justify-center items-center">
            <a href="#" class="group inline-flex items-center gap-4 bg-gradient-to-r from-yellow-400 via-amber-400 to-yellow-500 text-black font-black px-12 py-5 rounded-2xl text-sm md:text-base uppercase tracking-widest transition-all duration-300 transform hover:scale-[1.04] hover:shadow-[0_25px_50px_-10px_rgba(234,179,8,0.5)] shadow-[0_15px_30px_-10px_rgba(217,119,6,0.3)] w-full sm:w-auto justify-center">
                <span>SIGN UP AS A MEMBER NOW!</span>
                <!-- High-Definition Directional Vector -->
                <svg class="w-5 h-5 transition-transform duration-300 transform group-hover:translate-x-1.5" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                </svg>
            </a>
        </div>

    </div>
</section>

    <footer class="bg-black text-white pt-16 pb-12 px-8 font-sans">
    <div class="max-w-[1400px] mx-auto">
        <div class="w-full h-[2px] bg-white mb-12"></div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-x-8 gap-y-12 mb-16">

            <div class="text-left">
                <h4 class="text-[24px] font-bold mb-5">Logistics Solutions</h4>
                <ul class="space-y-3 text-[20px] font-medium text-white/90">
                    <li><a href="#" class="hover:text-yellow-500 transition">Pickup & Delivery</a></li>
                    <li><a href="#" class="hover:text-yellow-500 transition">Sea Freight</a></li>
                    <li><a href="#" class="hover:text-yellow-500 transition">Air Freight</a></li>
                </ul>
                <h4 class="text-[24px] font-bold mt-12 mb-5">Warehousing Solution</h4>
                <ul class="text-[20px] font-medium text-white/90">
                    <li><a href="#" class="hover:text-yellow-500 transition">Warehousing</a></li>
                </ul>
            </div>

            <div class="text-left">
                <h4 class="text-[24px] font-bold mb-5">Company</h4>
                <ul class="space-y-3 text-[20px] font-medium text-white/90">
                    <li><a href="#" class="hover:text-yellow-500 transition">About Us</a></li>
                    <li><a href="#" class="hover:text-yellow-500 transition">Blog</a></li>
                    <li><a href="#" class="hover:text-yellow-500 transition">Careers</a></li>
                    <li><a href="#" class="hover:text-yellow-500 transition">Partners</a></li>
                    <li><a href="#" class="hover:text-yellow-500 transition">Cookies, Legal & Privacy Policies</a></li>
                    <li><a href="#" class="hover:text-yellow-500 transition">Terms and Conditions</a></li>
                </ul>
            </div>

            <div class="text-left">
                <h4 class="text-[24px] font-bold mb-5">Policies</h4>
                <ul class="space-y-3 text-[20px] font-medium text-white/90">
                    <li><a href="#" class="hover:text-yellow-500 transition">Shipping Policies</a></li>
                    <li><a href="#" class="hover:text-yellow-500 transition">Cancellation & Refund Policies</a></li>
                    <li><a href="#" class="hover:text-yellow-500 transition">Terms & Policies</a></li>
                </ul>
            </div>

            <div class="flex flex-col items-start lg:items-end lg:text-right">
                <div class="mb-14">
                    <h4 class="text-[24px] font-bold mb-5">Support</h4>
                    <ul class="space-y-3 text-[20px] font-medium text-white/90">
                        <li><a href="#" class="hover:text-yellow-500 transition">Contact Us</a></li>
                        <li><a href="#" class="hover:text-yellow-500 transition">Documents</a></li>
                    </ul>
                </div>

                <div class="flex flex-col items-start lg:items-end">
                    <h4 class="text-[24px] font-bold mb-4 tracking-tight uppercase">ARKOD SMART LOGITECH</h4>
                    <div class="flex gap-4">
                        <a href="#" class="hover:opacity-75 transition">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a2.7 2.7 0 0 0-2.7-2.7c-1.2 0-1.8.7-2.1 1.2v-1h-3.3v10h3.3v-5.6c0-.3 0-.6.1-.8.2-.5.6-.9 1.2-.9 1 0 1.2.8 1.2 1.9v5.4h3.3M7 19h3.3V9H7v10m1.6-11.3c1.1 0 1.9-.8 1.9-1.9 0-1.1-.8-1.9-1.9-1.9-1.1 0-1.9.8-1.9 1.9 0 1.1.8 1.9 1.9 1.9Z"/></svg>
                        </a>
                        <a href="#" class="hover:opacity-75 transition">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8A3.6 3.6 0 0 0 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6A3.6 3.6 0 0 0 16.4 4H7.6m9.65 1.5a1.25 1.25 0 1 1 0 2.5 1.25 1.25 0 0 1 0-2.5M12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10m0 2a3 3 0 1 0 0 6 3 3 0 0 0 0-6Z"/></svg>
                        </a>
                        <a href="#" class="hover:opacity-75 transition">
                            <svg class="w-9 h-9 -mt-0.5" fill="currentColor" viewBox="0 0 24 24"><path d="M10 15l5.19-3L10 9v6m11.56-7.83c.13.47.22 1.1.28 1.9.07.8.1 1.49.1 2.09L22 12c0 2.19-.16 3.8-.44 4.83-.25.9-.83 1.48-1.73 1.73-.47.13-1.33.22-2.65.28-1.3.07-2.49.1-3.59.1L12 19c-4.19 0-6.8-.16-7.83-.44-.9-.25-1.48-.83-1.73-1.73-.13-.47-.22-1.1-.28-1.9-.07-.8-.1-1.49-.1-2.09L2 12c0-2.19.16-3.8.44-4.83.25-.9.83-1.48 1.73-1.73.47-.13 1.33-.22 2.65-.28 1.3-.07 2.49-.1 3.59-.1L12 5c4.19 0 6.8.16 7.83.44.9.25 1.48.83 1.73 1.73Z"/></svg>
                        </a>
                        <a href="#" class="hover:opacity-75 transition">
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
