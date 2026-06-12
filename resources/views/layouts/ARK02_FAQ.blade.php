<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARKOD | FAQ</title>
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

   <!-- RECONSTRUCTED FAQ SECTION WITH CINEMATIC LOGISTICS BACKGROUND -->
<section class="relative min-h-screen py-24 px-6 md:px-12 lg:px-24 select-none overflow-hidden bg-white">

    <!-- Sophisticated Subtle Structural Grid Lines -->
    <div class="absolute inset-0 grid grid-cols-4 pointer-events-none opacity-[0.04] z-1">
        <div class="border-r border-white h-full"></div>
        <div class="border-r border-white h-full"></div>
        <div class="border-r border-white h-full"></div>
        <div></div>
    </div>

    <div class="max-w-[1600px] mx-auto relative z-10">

       <!-- Header Section (Jet Black & Gold on White) -->
<div class="text-center mb-24">
    <!-- Changed text-white to text-gray-400 for contrast; gold stays consistent -->
    <span class="text-xs font-black tracking-[0.5em] text-[#f9a01b] uppercase block mb-4">Support Infrastructure</span>

    <!-- Changed text-white to text-black for readability on white background -->
    <h2 class="text-4xl md:text-6xl font-black uppercase tracking-tight text-black mb-4 font-montserrat">
        Frequently Asked <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#f9a01b] via-[#d4af37] to-[#f9a01b]">Questions</span>
    </h2>

    <div class="w-16 h-[4px] bg-[#f9a01b] mx-auto mb-6"></div>

    <!-- Changed text-gray-300 to text-gray-600 for better readability on white -->
    <p class="text-gray-600 text-sm md:text-base font-medium max-w-2xl mx-auto tracking-wide leading-relaxed">
        Explore our comprehensive knowledge base. Clean layout structural panels tailored for premium logistics, clients, and global agents.
    </p>
</div>

        <!-- Interactive Layout Architecture -->
        <div x-data="{
            activeTab: 'before-shipping',
            activeFaq: null,
            toggleFaq(id) { this.activeFaq = this.activeFaq === id ? null : id }
        }" class="flex flex-col lg:flex-row gap-12 items-start">

            <!-- SIDEBAR CONTROL TERMINAL -->
            <div class="w-full lg:w-[420px] bg-black/60 border border-white/10 rounded-[2.5rem] p-5 sticky top-28 shadow-[0_30px_60px_rgba(0,0,0,0.4)] backdrop-blur-xl">
                <div class="flex justify-between items-center px-4 pt-2 pb-4 border-b border-white/10">
                    <p class="text-[10px] font-black tracking-[0.2em] text-gray-400 uppercase">Operational Nodes</p>
                    <span class="w-2 h-2 rounded-full bg-[#f9a01b] animate-pulse"></span>
                </div>

                <div class="space-y-1.5 mt-4 max-h-[600px] overflow-y-auto pr-1 subtle-scrollbar">

                    <!-- Node 1 -->
                    <button @click="activeTab = 'before-shipping'; activeFaq = null"
                            :class="activeTab === 'before-shipping' ? 'bg-white text-black shadow-xl' : 'text-gray-300 hover:bg-white/5'"
                            class="w-full flex items-center justify-between px-5 py-4 rounded-2xl text-xs font-black uppercase tracking-widest transition-all duration-300 group">
                        <div class="flex items-center gap-4">
                            <svg class="w-5 h-5 transition-transform duration-300 group-hover:scale-110" :class="activeTab === 'before-shipping' ? 'text-[#f9a01b]' : 'text-white group-hover:text-[#f9a01b]'" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                            </svg>
                            <span>Before Shipping</span>
                        </div>
                        <span class="text-[10px] font-mono tracking-normal opacity-40 group-hover:opacity-100 transition-opacity">[01]</span>
                    </button>

                    <!-- Node 2 -->
                    <button @click="activeTab = 'during-shipping'; activeFaq = null"
                            :class="activeTab === 'during-shipping' ? 'bg-white text-black shadow-xl' : 'text-gray-300 hover:bg-white/5'"
                            class="w-full flex items-center justify-between px-5 py-4 rounded-2xl text-xs font-black uppercase tracking-widest transition-all duration-300 group">
                        <div class="flex items-center gap-4">
                            <svg class="w-5 h-5 transition-transform duration-300 group-hover:scale-110" :class="activeTab === 'during-shipping' ? 'text-[#f9a01b]' : 'text-white group-hover:text-[#f9a01b]'" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/>
                            </svg>
                            <span>During Shipping</span>
                        </div>
                        <span class="text-[10px] font-mono tracking-normal opacity-40 group-hover:opacity-100 transition-opacity">[02]</span>
                    </button>

                    <!-- Node 3 -->
                    <button @click="activeTab = 'agents-hub'; activeFaq = null"
                            :class="activeTab === 'agents-hub' ? 'bg-white text-black shadow-xl' : 'text-gray-300 hover:bg-white/5'"
                            class="w-full flex items-center justify-between px-5 py-4 rounded-2xl text-xs font-black uppercase tracking-widest transition-all duration-300 group">
                        <div class="flex items-center gap-4">
                            <svg class="w-5 h-5 transition-transform duration-300 group-hover:scale-110" :class="activeTab === 'agents-hub' ? 'text-[#f9a01b]' : 'text-white group-hover:text-[#f9a01b]'" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                            <span>Agents Hub</span>
                        </div>
                        <span class="text-[10px] font-mono tracking-normal opacity-40 group-hover:opacity-100 transition-opacity">[03]</span>
                    </button>

                    <div class="h-[1px] bg-white/10 my-3 mx-2"></div>

                    <!-- E-Fulfillment - Receiving -->
                    <button @click="activeTab = 'ef-receiving'; activeFaq = null"
                            :class="activeTab === 'ef-receiving' ? 'bg-white text-black shadow-xl' : 'text-gray-300 hover:bg-white/5'"
                            class="w-full flex items-center justify-between px-5 py-4 rounded-2xl text-xs font-black uppercase tracking-widest transition-all duration-300 group">
                        <div class="flex items-center gap-4">
                            <svg class="w-5 h-5 transition-transform duration-300 group-hover:scale-110" :class="activeTab === 'ef-receiving' ? 'text-[#f9a01b]' : 'text-white group-hover:text-[#f9a01b]'" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                            </svg>
                            <span>EF // Receiving</span>
                        </div>
                        <span class="text-[10px] font-mono tracking-normal opacity-40 group-hover:opacity-100 transition-opacity">[04]</span>
                    </button>

                    <!-- E-Fulfillment - Storage -->
                    <button @click="activeTab = 'ef-storage'; activeFaq = null"
                            :class="activeTab === 'ef-storage' ? 'bg-white text-black shadow-xl' : 'text-gray-300 hover:bg-white/5'"
                            class="w-full flex items-center justify-between px-5 py-4 rounded-2xl text-xs font-black uppercase tracking-widest transition-all duration-300 group">
                        <div class="flex items-center gap-4">
                            <svg class="w-5 h-5 transition-transform duration-300 group-hover:scale-110" :class="activeTab === 'ef-storage' ? 'text-[#f9a01b]' : 'text-white group-hover:text-[#f9a01b]'" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                            <span>EF // Storage</span>
                        </div>
                        <span class="text-[10px] font-mono tracking-normal opacity-40 group-hover:opacity-100 transition-opacity">[05]</span>
                    </button>

                    <!-- E-Fulfillment - Shipping -->
                    <button @click="activeTab = 'ef-shipping'; activeFaq = null"
                            :class="activeTab === 'ef-shipping' ? 'bg-white text-black shadow-xl' : 'text-gray-300 hover:bg-white/5'"
                            class="w-full flex items-center justify-between px-5 py-4 rounded-2xl text-xs font-black uppercase tracking-widest transition-all duration-300 group">
                        <div class="flex items-center gap-4">
                            <svg class="w-5 h-5 transition-transform duration-300 group-hover:scale-110" :class="activeTab === 'ef-shipping' ? 'text-[#f9a01b]' : 'text-white group-hover:text-[#f9a01b]'" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                            <span>EF // Shipping</span>
                        </div>
                        <span class="text-[10px] font-mono tracking-normal opacity-40 group-hover:opacity-100 transition-opacity">[06]</span>
                    </button>

                    <!-- E-Fulfillment - Returns -->
                    <button @click="activeTab = 'ef-returns'; activeFaq = null"
                            :class="activeTab === 'ef-returns' ? 'bg-white text-black shadow-xl' : 'text-gray-300 hover:bg-white/5'"
                            class="w-full flex items-center justify-between px-5 py-4 rounded-2xl text-xs font-black uppercase tracking-widest transition-all duration-300 group">
                        <div class="flex items-center gap-4">
                            <svg class="w-5 h-5 transition-transform duration-300 group-hover:scale-110" :class="activeTab === 'ef-returns' ? 'text-[#f9a01b]' : 'text-white group-hover:text-[#f9a01b]'" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 4v5h.582m15.356 2A8.001 8.001 0 1121.21 15.19M9 5.513a11.52 11.52 0 00-3 3m0 0l-3-3m3 3h4.14"/>
                            </svg>
                            <span>EF // Returns</span>
                        </div>
                        <span class="text-[10px] font-mono tracking-normal opacity-40 group-hover:opacity-100 transition-opacity">[07]</span>
                    </button>

                    <!-- E-Fulfillment - Packaging -->
                    <button @click="activeTab = 'ef-packaging'; activeFaq = null"
                            :class="activeTab === 'ef-packaging' ? 'bg-white text-black shadow-xl' : 'text-gray-300 hover:bg-white/5'"
                            class="w-full flex items-center justify-between px-5 py-4 rounded-2xl text-xs font-black uppercase tracking-widest transition-all duration-300 group">
                        <div class="flex items-center gap-4">
                            <svg class="w-5 h-5 transition-transform duration-300 group-hover:scale-110" :class="activeTab === 'ef-packaging' ? 'text-[#f9a01b]' : 'text-white group-hover:text-[#f9a01b]'" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"/>
                            </svg>
                            <span>EF // Packaging</span>
                        </div>
                        <span class="text-[10px] font-mono tracking-normal opacity-40 group-hover:opacity-100 transition-opacity">[08]</span>
                    </button>

                    <!-- E-Fulfillment - Add On Services -->
                    <button @click="activeTab = 'ef-addons'; activeFaq = null"
                            :class="activeTab === 'ef-addons' ? 'bg-white text-black shadow-xl' : 'text-gray-300 hover:bg-white/5'"
                            class="w-full flex items-center justify-between px-5 py-4 rounded-2xl text-xs font-black uppercase tracking-widest transition-all duration-300 group">
                        <div class="flex items-center gap-4">
                            <svg class="w-5 h-5 transition-transform duration-300 group-hover:scale-110" :class="activeTab === 'ef-addons' ? 'text-[#f9a01b]' : 'text-white group-hover:text-[#f9a01b]'" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>EF // Add-Ons</span>
                        </div>
                        <span class="text-[10px] font-mono tracking-normal opacity-40 group-hover:opacity-100 transition-opacity">[09]</span>
                    </button>

                    <!-- E-Fulfillment - Payment -->
                    <button @click="activeTab = 'ef-payment'; activeFaq = null"
                            :class="activeTab === 'ef-payment' ? 'bg-white text-black shadow-xl' : 'text-gray-300 hover:bg-white/5'"
                            class="w-full flex items-center justify-between px-5 py-4 rounded-2xl text-xs font-black uppercase tracking-widest transition-all duration-300 group">
                        <div class="flex items-center gap-4">
                            <svg class="w-5 h-5 transition-transform duration-300 group-hover:scale-110" :class="activeTab === 'ef-payment' ? 'text-[#f9a01b]' : 'text-white group-hover:text-[#f9a01b]'" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
                            </svg>
                            <span>EF // Payment</span>
                        </div>
                        <span class="text-[10px] font-mono tracking-normal opacity-40 group-hover:opacity-100 transition-opacity">[10]</span>
                    </button>
                </div>
            </div>

            <!-- DETAILED VIEWPORT HUB -->
            <div class="flex-grow w-full space-y-4 relative">

                <!-- SECTION 01: BEFORE SHIPPING (CONTAINS ALL 19 ITEMS) -->
                <div x-show="activeTab === 'before-shipping'" x-transition:enter="transition ease-out duration-400 transform translate-y-2 opacity-0" class="space-y-4">
                    <div class="flex items-center justify-between px-2 mb-4">
                        <h4 class="text-xs font-black tracking-[0.2em] text-[#f9a01b] uppercase">Section 01 // Before Shipping Protocols</h4>
                        <span class="text-xs font-bold text-gray-400 font-mono">19 Operations Listed</span>
                    </div>

                    <!-- FAQ 1 -->
                    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden" :class="activeFaq === 11 ? 'bg-[#0f0f0f] text-white shadow-2xl' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
                        <button @click="toggleFaq(11)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
                            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">1. Do I need to pack my item before sending/pickup process?</span>
                            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0" :class="activeFaq === 11 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                            </div>
                        </button>
                        <div x-show="activeFaq === 11" x-collapse x-cloak>
                            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                                Yes, you can refer to our packaging guidelines. However, you can opt for our add-on or customise packaging (additional rates may apply).
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden" :class="activeFaq === 12 ? 'bg-[#0f0f0f] text-white shadow-2xl' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
                        <button @click="toggleFaq(12)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
                            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">2. When is the collection time?</span>
                            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0" :class="activeFaq === 12 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                            </div>
                        </button>
                        <div x-show="activeFaq === 12" x-collapse x-cloak>
                            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide space-y-2">
                                <p>The pickup time is made on working days only.</p>
                                <p class="text-[#f9a01b]">Mon to Sat (13.00-1800 hrs local East Malaysia states) OR through special/customised arrangement from both parties agreed on.</p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden" :class="activeFaq === 13 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
                        <button @click="toggleFaq(13)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
                            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">3. What if my parcel's pickup does not happen or was not given within the time slot allocated?</span>
                            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0" :class="activeFaq === 13 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                            </div>
                        </button>
                        <div x-show="activeFaq === 13" x-collapse x-cloak>
                            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide space-y-3">
                                <p>Please inform us via hotline/message or email <span class="text-white underline">customersupport@arkod.com.my</span> right away. If the courier is found to be at fault or due to any beyond circumstances such as (weather, traffic conditions, store loading and wait times, and other unexpected barriers to loading or unloading. We will inform you of the new pickup date for the next day.</p>
                                <p class="border-l-2 border-[#f9a01b] pl-4 italic">Last-minute pickup rescheduling by the customer is not encouraged. However, for unavoidable situations, you may reschedule the pickup from the shipment menu within 6 hours via our website.</p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden" :class="activeFaq === 14 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
                        <button @click="toggleFaq(14)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
                            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">4. Can I use Third Party Collection?</span>
                            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0" :class="activeFaq === 14 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                            </div>
                        </button>
                        <div x-show="activeFaq === 14" x-collapse x-cloak>
                            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                                Yes, it is the customer’s responsibility to ensure there is somebody at the third-party collection address to hand the goods to the transporter.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden" :class="activeFaq === 15 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
                        <button @click="toggleFaq(15)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
                            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">5. What is a volumetric calculator/volumetric weight means?</span>
                            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0" :class="activeFaq === 15 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                            </div>
                        </button>
                        <div x-show="activeFaq === 15" x-collapse x-cloak>
                            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                                Also refer to “dimensional weight”. It is a billing technique that measures a package's length, width and height. Our system automatically calculates the correct volumetric weight for your consignment/parcel.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 6 -->
                    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden" :class="activeFaq === 16 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
                        <button @click="toggleFaq(16)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
                            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">6. How to print the Waybill?</span>
                            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0" :class="activeFaq === 16 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                            </div>
                        </button>
                        <div x-show="activeFaq === 16" x-collapse x-cloak>
                            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                                The Waybill will be emailed to the customer after the check-out/booking has been made.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 7 -->
                    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden" :class="activeFaq === 17 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
                        <button @click="toggleFaq(17)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
                            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">7. What happened if there are weight discrepancies?</span>
                            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0" :class="activeFaq === 17 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                            </div>
                        </button>
                        <div x-show="activeFaq === 17" x-collapse x-cloak>
                            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                                For parcels under declared weight, ARKOD will charge the difference at our full tariff rate. The full tariff will be charged automatically via deduction of your ARKOD account and you will be notified by email.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 8 -->
                    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden" :class="activeFaq === 18 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
                        <button @click="toggleFaq(18)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
                            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">8. How long my order will be saved?</span>
                            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0" :class="activeFaq === 18 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                            </div>
                        </button>
                        <div x-show="activeFaq === 18" x-collapse x-cloak>
                            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                                Your order/booking will be always available in your ARKOD account.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 9 -->
                    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden" :class="activeFaq === 19 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
                        <button @click="toggleFaq(19)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
                            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">9. Who can I contact for queries for ARKOD services regards to quantity/bulk deliveries quotation for corporate rate?</span>
                            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0" :class="activeFaq === 19 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                            </div>
                        </button>
                        <div x-show="activeFaq === 19" x-collapse x-cloak>
                            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                                Please go to “Customize Plan” and fill in the details. Our team will contact you as soon as possible.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 10 -->
                    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden" :class="activeFaq === 20 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
                        <button @click="toggleFaq(20)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
                            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">10. Do you offer bulk deliveries quotation or corporate rates?</span>
                            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0" :class="activeFaq === 20 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                            </div>
                        </button>
                        <div x-show="activeFaq === 20" x-collapse x-cloak>
                            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                                Yes, click “Customize Plan” our team reach out to you for further enquiries.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 11 -->
                    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden" :class="activeFaq === 21 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
                        <button @click="toggleFaq(21)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
                            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">11. Can I cancel my order after submitting for delivery request/confirmation? / What will happen if I cancel my order?</span>
                            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0" :class="activeFaq === 21 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                            </div>
                        </button>
                        <div x-show="activeFaq === 21" x-collapse x-cloak>
                            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide space-y-2">
                                <p>• Yes, for forwarding only can cancel within 1 day after the booking made.</p>
                                <p>• For Door to Door also can be cancel within 1 day, but booking status after In Progress cannot be cancel anymore.</p>
                                <p>• If the order/booking exceeds 1 day, you need to contact us via hotline/message right away.</p>
                                <p class="text-gray-300">The process of ARKOD account refund will be in accordance with the terms and conditions.</p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 12 -->
                    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden" :class="activeFaq === 22 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
                        <button @click="toggleFaq(22)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
                            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">12. How to cancel my order?</span>
                            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0" :class="activeFaq === 22 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                            </div>
                        </button>
                        <div x-show="activeFaq === 22" x-collapse x-cloak>
                            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                                Cancel your order/booking through our website or Login to your ARKOD account and contact our <span class="text-white underline">customersupport@arkod.com.my</span>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 13 -->
                    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden" :class="activeFaq === 23 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
                        <button @click="toggleFaq(23)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
                            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">13. When will my E-credits (Arkod Points) expire?</span>
                            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0" :class="activeFaq === 23 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                            </div>
                        </button>
                        <div x-show="activeFaq === 23" x-collapse x-cloak>
                            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide space-y-2">
                                <p>E-credits (Arkod Points) are valid for 18 months from the top-up date.</p>
                                <p>This means that the points' validity is reset/will start counting once every top-up is made.</p>
                                <p class="text-red-400 font-semibold">There will be no refund of credits upon expiry/if no top-up is made after 18 months (the remaining points will be deducted from your account “reset to zero points”).</p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 14 -->
                    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden" :class="activeFaq === 24 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
                        <button @click="toggleFaq(24)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
                            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">14. What is the maximum size limit for Door to Door service?</span>
                            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0" :class="activeFaq === 24 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                            </div>
                        </button>
                        <div x-show="activeFaq === 24" x-collapse x-cloak>
                            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide space-y-3">
                                <p class="font-bold text-gray-300">Size specification (cm):</p>
                                <ul class="space-y-1 list-disc list-inside text-[#f9a01b] font-mono">
                                    <li>100 x 100 x 100 (L x W x H) [40-90 KG]</li>
                                    <li>30 x 30 x 30 (L x W x H) - Express [1 - 30 KG]</li>
                                    <li>60 x 60 x 50 (L x W x H) - Express [1 - 30 KG]</li>
                                </ul>
                                <p class="pt-2 text-gray-400">Other than the mentioned size, you can opt for our “Customise Logistic Service”.</p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 15 -->
                    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden" :class="activeFaq === 25 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
                        <button @click="toggleFaq(25)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
                            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">15. How to use the parcel photo upload function?</span>
                            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0" :class="activeFaq === 25 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                            </div>
                        </button>
                        <div x-show="activeFaq === 25" x-collapse x-cloak>
                            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                                Customer/Consignor are encouraged to upload the item’s/parcel’s photo (Format: jpeg, png, pdf) with a maximum size of 1MB for our reference, assist for packaging guide, item/parcel size estimation, etc.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 16 -->
                    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden" :class="activeFaq === 26 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
                        <button @click="toggleFaq(26)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
                            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">16. How does ARKOD charge for additional insurance coverage?</span>
                            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0" :class="activeFaq === 26 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                            </div>
                        </button>
                        <div x-show="activeFaq === 26" x-collapse x-cloak>
                            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                                5% insurance coverage as standard. However, rate changes may apply based on the value of the parcel.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 17 -->
                    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden" :class="activeFaq === 27 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
                        <button @click="toggleFaq(27)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
                            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">17. I have made an error during E-wallet top-up via online transfer with less than the minimum top-up amount. What should I do?</span>
                            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0" :class="activeFaq === 27 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                            </div>
                        </button>
                        <div x-show="activeFaq === 27" x-collapse x-cloak>
                            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                                The customer is required to add/Top-up their ARKOD account (credit) based on ARKOD minimum credit Top-up for a smooth transaction in the future.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 18 -->
                    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden" :class="activeFaq === 28 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
                        <button @click="toggleFaq(28)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
                            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">18. What modes of payment can I use for the ARKOD logistic services?</span>
                            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0" :class="activeFaq === 28 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                            </div>
                        </button>
                        <div x-show="activeFaq === 28" x-collapse x-cloak>
                            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide font-mono tracking-wider text-[#f9a01b]">
                                Direct Payment, FPX Online Banking, Online Transfer, senangPay, Duit Now, Master & Visa.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 19 -->
                    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden" :class="activeFaq === 29 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
                        <button @click="toggleFaq(29)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
                            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">19. What happens if my parcel or item is still not ready during pickup time?</span>
                            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0" :class="activeFaq === 29 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                            </div>
                        </button>
                        <div x-show="activeFaq === 29" x-collapse x-cloak>
                            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                                Ensure that your parcel or item is ready for pickup on the designated date & time. Charges will apply correspondingly, with deductions from the credit on your ARKOD account for the unloaded item or an empty truckload on that day.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SECTION 02: DURING SHIPPING (SAME DESIGN AS SECTION 01) -->
                <div x-show="activeTab === 'during-shipping'"
                    x-transition:enter="transition ease-out duration-400 transform translate-y-2 opacity-0"
                    class="space-y-4">

                    <div class="flex items-center justify-between px-2 mb-4">
                        <h4 class="text-xs font-black tracking-[0.2em] text-[#f9a01b] uppercase">
                                Section 02 // During Shipping Protocols
                        </h4>
                        <span class="text-xs font-bold text-gray-400 font-mono">9 Operations Listed</span>
                    </div>

                    <!-- FAQ 1 -->
<div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
    :class="activeFaq === 101 ? 'bg-[#0f0f0f] text-white shadow-2xl' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
    <button @click="toggleFaq(101)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
        <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">1. How to track my item/parcel?</span>
        <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0" :class="activeFaq === 101 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
        </div>
    </button>
    <div x-show="activeFaq === 101" x-collapse x-cloak>
        <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
            Click on the “Track & Trace” menu option OR login to your ARKOD account and find “Track & Trace” – enter your tracking number. Do note that the Track & Trace details are only available after the collection of consignments.
        </div>
    </div>
</div>

<!-- FAQ 2 -->
<div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
    :class="activeFaq === 102 ? 'bg-[#0f0f0f] text-white shadow-2xl' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
    <button @click="toggleFaq(102)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
        <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">2. I want a Delivery Order (DO)/ Waybill to be returned to me after delivery. What should I do?</span>
        <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0" :class="activeFaq === 102 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
        </div>
    </button>
    <div x-show="activeFaq === 102" x-collapse x-cloak>
        <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
            You may contact our hotline or email our customersupport@arkod.com.my for further enquiries.
        </div>
    </div>
</div>

<!-- FAQ 3 -->
<div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
    :class="activeFaq === 103 ? 'bg-[#0f0f0f] text-white shadow-2xl' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
    <button @click="toggleFaq(103)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
        <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">3. What if my parcel is lost & damaged?</span>
        <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0" :class="activeFaq === 103 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
        </div>
    </button>
    <div x-show="activeFaq === 103" x-collapse x-cloak>
        <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
            You may contact our hotline or email our customersuppport@arkod.com.my to further your issue.
        </div>
    </div>
</div>

<!-- FAQ 4 -->
<div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
    :class="activeFaq === 104 ? 'bg-[#0f0f0f] text-white shadow-2xl' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
    <button @click="toggleFaq(104)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
        <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">4. What if the receiver/consignee is not present/available to receive the item/consignment?</span>
        <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0" :class="activeFaq === 104 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
        </div>
    </button>
    <div x-show="activeFaq === 104" x-collapse x-cloak>
        <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
            The carrier driver from certain companies may leave a calling card at the doorstep requesting manual collection OR we will inform you of the delivery rescheduled for the next day. Otherwise, the consignment may be returned to the depot. The consignee can pick up their goods or parcel from the depot.
        </div>
    </div>
</div>

<!-- FAQ 5 -->
<div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
    :class="activeFaq === 105 ? 'bg-[#0f0f0f] text-white shadow-2xl' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
    <button @click="toggleFaq(105)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
        <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">5. What if the status of the parcel shows undelivered? Will there be another delivery?</span>
        <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0" :class="activeFaq === 105 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
        </div>
    </button>
    <div x-show="activeFaq === 105" x-collapse x-cloak>
        <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
            Undelivered status indicates the driver has failed to deliver the parcel. This happens when the receiver is not present to receive the parcel. The receiver may reschedule the pickup by contacting our hotline or emailing us at customersupport@arkod.com.my. If the courier is found to be at fault or any beyond circumstances such as weather, working hours, traffic conditions, store loading and wait times, and other unexpected barriers to loading or unloading, we will inform you of the reschedule for the next day.
        </div>
    </div>
</div>

<!-- FAQ 6 -->
<div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
    :class="activeFaq === 106 ? 'bg-[#0f0f0f] text-white shadow-2xl' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
    <button @click="toggleFaq(106)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
        <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">6. How do I know if my parcel has been delivered?</span>
        <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0" :class="activeFaq === 106 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
        </div>
    </button>
    <div x-show="activeFaq === 106" x-collapse x-cloak>
        <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
            The delivery status will be shown/updated in our “Trace & Track” menu option.
        </div>
    </div>
</div>

<!-- FAQ 7 -->
<div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
    :class="activeFaq === 107 ? 'bg-[#0f0f0f] text-white shadow-2xl' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
    <button @click="toggleFaq(107)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
        <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">7. How to print the Invoice Report?</span>
        <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0" :class="activeFaq === 107 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
        </div>
    </button>
    <div x-show="activeFaq === 107" x-collapse x-cloak>
        <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
            The Invoice Report will be generated automatically after Checkout OR you will be notified through an email.
        </div>
    </div>
</div>

<!-- FAQ 8 -->
<div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
    :class="activeFaq === 108 ? 'bg-[#0f0f0f] text-white shadow-2xl' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
    <button @click="toggleFaq(108)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
        <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">8. How to refund my order?</span>
        <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0" :class="activeFaq === 108 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
        </div>
    </button>
    <div x-show="activeFaq === 108" x-collapse x-cloak>
        <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
            You may contact our hotline or email customersupport@arkod.com.my to further your enquiries.
        </div>
    </div>
</div>

<!-- FAQ 9 -->
<div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
    :class="activeFaq === 109 ? 'bg-[#0f0f0f] text-white shadow-2xl' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
    <button @click="toggleFaq(109)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
        <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">9. How to return my order?</span>
        <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0" :class="activeFaq === 109 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
        </div>
    </button>
    <div x-show="activeFaq === 109" x-collapse x-cloak>
        <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
            You may contact our hotline or email our customersupport@arkod.com.my to further your enquiries.
        </div>
    </div>
</div>
</div>

<div x-show="activeTab === 'agents-hub'"
     x-transition:enter="transition ease-out duration-400 transform translate-y-2 opacity-0"
     class="space-y-4"
     x-cloak>

    <!-- Header Section -->
    <div class="flex items-center justify-between px-2 mb-4">
        <h4 class="text-xs font-black tracking-[0.2em] text-[#f9a01b] uppercase">
            Section 03 // Agent Hub
        </h4>
        <span class="text-xs font-bold text-gray-400 font-mono">10 Operations Listed</span>
    </div>

    <!-- FAQ 201 -->
    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
        :class="activeFaq === 201 ? 'bg-[#0f0f0f] text-white shadow-2xl' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
        <button @click="toggleFaq(201)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">1. Where can I view my tasks/delivery information?</span>
            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0" :class="activeFaq === 201 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
            </div>
        </button>
        <div x-show="activeFaq === 201" x-collapse x-cloak>
            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                Login to the ARKOD Agent Portal.
            </div>
        </div>
    </div>

    <!-- FAQ 202 -->
    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
        :class="activeFaq === 202 ? 'bg-[#0f0f0f] text-white shadow-2xl' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
        <button @click="toggleFaq(202)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">2. What is the purpose of scanning the QR code?</span>
            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0" :class="activeFaq === 202 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
            </div>
        </button>
        <div x-show="activeFaq === 202" x-collapse x-cloak>
            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                To provide ease of operation for the delivering agent to update delivery status and view a specific task description through the waybill “QR code”.
            </div>
        </div>
    </div>

    <!-- FAQ 203 -->
    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
        :class="activeFaq === 203 ? 'bg-[#0f0f0f] text-white shadow-2xl' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
        <button @click="toggleFaq(203)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">3. What if an accident occurs, loss or any unfavoured circumstances happen in the process of delivering?</span>
            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0" :class="activeFaq === 203 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
            </div>
        </button>
        <div x-show="activeFaq === 203" x-collapse x-cloak>
            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                The compensation of loss or damaged item will be covered by the agent.
            </div>
        </div>
    </div>

    <!-- FAQ 204 -->
    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
        :class="activeFaq === 204 ? 'bg-[#0f0f0f] text-white shadow-2xl' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
        <button @click="toggleFaq(204)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">4. Can I change the collection/pickup time with the customers?</span>
            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0" :class="activeFaq === 204 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
            </div>
        </button>
        <div x-show="activeFaq === 204" x-collapse x-cloak>
            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                Yes. The agent is required to inform ARKOD customer support and the customer before collection/pickup time.
            </div>
        </div>
    </div>

    <!-- FAQ 205 -->
    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
        :class="activeFaq === 205 ? 'bg-[#0f0f0f] text-white shadow-2xl' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
        <button @click="toggleFaq(205)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">5. What is the meaning of “manpower required” under the additional service/special request?</span>
            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0" :class="activeFaq === 205 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
            </div>
        </button>
        <div x-show="activeFaq === 205" x-collapse x-cloak>
            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                Manpower required means the Van/Lorry driver needs to bring an extra helper to assist in the loading and unloading. The number of manpower required would mean the number of helpers requires, not including the driver.
            </div>
        </div>
    </div>

    <!-- FAQ 206 -->
    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
        :class="activeFaq === 206 ? 'bg-[#0f0f0f] text-white shadow-2xl' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
        <button @click="toggleFaq(206)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">6. What should I do if the parcel cannot be delivered on the stated date?</span>
            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0" :class="activeFaq === 206 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
            </div>
        </button>
        <div x-show="activeFaq === 206" x-collapse x-cloak>
            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                Delivery Agent should update “Undelivered” with reason if the customer is not available or request to change the delivery date.
            </div>
        </div>
    </div>

    <!-- FAQ 207 -->
    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
        :class="activeFaq === 207 ? 'bg-[#0f0f0f] text-white shadow-2xl' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
        <button @click="toggleFaq(207)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">7. Can I cancel my delivery after accepting the delivery task?</span>
            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0" :class="activeFaq === 207 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
            </div>
        </button>
        <div x-show="activeFaq === 207" x-collapse x-cloak>
            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                Once the task/assignment is accepted, it CAN NOT be cancelled unless there are last minutes changes. Please notify or provide your reason. Multiple cancellations will lead to your account suspension.
            </div>
        </div>
    </div>

    <!-- FAQ 208 -->
    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
        :class="activeFaq === 208 ? 'bg-[#0f0f0f] text-white shadow-2xl' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
        <button @click="toggleFaq(208)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">8. What if the sender or receiver is not present during the pickup time/delivery of the parcel/item?</span>
            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0" :class="activeFaq === 208 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
            </div>
        </button>
        <div x-show="activeFaq === 208" x-collapse x-cloak>
            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                Agents are required to call or reach out to the sender/receiver before pickup and delivery for their availability. Please reschedule the pickup/delivery time and date for the following available day. You can leave the parcel at the door ONLY with the consent/request of the receiver with proof of photos and SMS/message.
            </div>
        </div>
    </div>

    <!-- FAQ 209 -->
    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
        :class="activeFaq === 209 ? 'bg-[#0f0f0f] text-white shadow-2xl' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
        <button @click="toggleFaq(209)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">9. Do you accept sub-contractors?</span>
            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0" :class="activeFaq === 209 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
            </div>
        </button>
        <div x-show="activeFaq === 209" x-collapse x-cloak>
            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                Yes. If you are interested, please sign-up for our agent account and email us your interest. Our agent application form can be found at https://arkod.com.my/ - Agent Application. We will contact you to further your application and discuss your future task.
            </div>
        </div>
    </div>

    <!-- FAQ 210 -->
    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
        :class="activeFaq === 210 ? 'bg-[#0f0f0f] text-white shadow-2xl' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
        <button @click="toggleFaq(210)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">10. How do I get paid after completing the task/ successfully delivering the parcel?</span>
            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0" :class="activeFaq === 210 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
            </div>
        </button>
        <div x-show="activeFaq === 210" x-collapse x-cloak>
            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                Agents send or email their invoice report of successfully delivering status to billing@arkod.com.my. The payment will be transferred to the agent account/bank every fortnightly, Friday.
            </div>
        </div>
    </div>

</div>

<!-- ==================================================== -->
<!-- SECTION 04: E-FULFILLMENT RECEIVING (FIXED ID)       -->
<!-- ==================================================== -->
<div x-show="activeTab === 'ef-receiving'"
     x-transition:enter="transition ease-out duration-400 transform translate-y-2 opacity-0"
     class="space-y-4"
     x-cloak>

    <div class="flex items-center justify-between px-2 mb-4">
        <h4 class="text-xs font-black tracking-[0.2em] text-[#f9a01b] uppercase">
            Section 04 // E-Fulfillment Receiving
        </h4>
        <span class="text-xs font-bold text-gray-400 font-mono">5 Operations Listed</span>
    </div>

    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
         :class="activeFaq === 41 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
        <button @click="toggleFaq(41)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">
                1. How do i prepare the inventory shipments for E-fulfilmet Service's facility?
            </span>
            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0"
                 :class="activeFaq === 41 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                </svg>
            </div>
        </button>
        <div x-show="activeFaq === 41" x-collapse x-cloak>
            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                Please provide a master packing slip and individual packing slips for each carton that outlines the contents of a shipment as a whole. It should list the SKUs (stock-keeping units) and quantities of the items included in the shipment. Additionally, ensure that each unit has scannable barcodes because it allows the receiving team to quickly and accurately scan and track the items as they are received. If the items in the shipment do not have barcodes, E-fulfilment Service's team can label them for you.
            </div>
        </div>
    </div>

    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
         :class="activeFaq === 42 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
        <button @click="toggleFaq(42)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">
                2. How Long Does the Receiving Process Take?
            </span>
            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0"
                 :class="activeFaq === 42 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                </svg>
            </div>
        </button>
        <div x-show="activeFaq === 42" x-collapse x-cloak>
            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                The receiving process depends on the size of the shipment, the number of items being received, and the complexity of the receiving process. In some cases, it may take longer than 2-3 days to complete the receiving process if there are issues with the shipment or if there is a high volume of incoming goods.
            </div>
        </div>
    </div>

    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
         :class="activeFaq === 43 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
        <button @click="toggleFaq(43)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">
                3. Is there any inspection for my items/products/goods when you receive them?
            </span>
            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0"
                 :class="activeFaq === 43 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                </svg>
            </div>
        </button>
        <div x-show="activeFaq === 43" x-collapse x-cloak>
            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                Yes, we do inspect a portion of the items during the receiving process to ensure that the merchandise is in good condition and matches the descriptions provided on the packing slip or invoice. If you need specific requirements to inspect your item, we can accommodate that request.
            </div>
        </div>
    </div>

    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
         :class="activeFaq === 44 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
        <button @click="toggleFaq(44)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">
                4. What happens if my stock arrives damaged?
            </span>
            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0"
                 :class="activeFaq === 44 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                </svg>
            </div>
        </button>
        <div x-show="activeFaq === 44" x-collapse x-cloak>
            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                We will take note and photograph the item(s) and the corresponding packaging, and notify you immediately. If any issues are discovered during the inspection process, they can be addressed before the items are added to the inventory.
            </div>
        </div>
    </div>

    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
         :class="activeFaq === 45 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
        <button @click="toggleFaq(45)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">
                5. What should I do if the quantity of my goods is lesser or greater than expected upon receiving?
            </span>
            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0"
                 :class="activeFaq === 45 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                </svg>
            </div>
        </button>
        <div x-show="activeFaq === 45" x-collapse x-cloak>
            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                Promptly communicate with the supplier. Notify them about any discrepancies in the received goods as compared to the information in the referred documents such as Warehouse Management System (WMS), Inventory Management System (IMS) records, and Delivery Orders (D.O). This ensures accurate record-keeping and allows the supplier to address the situation and resolve any issues related to the quantity difference.
            </div>
        </div>
    </div>

</div>

                <!-- SECTION 05 -->
                <div x-show="activeTab === 'ef-storage'"
     x-transition:enter="transition ease-out duration-400 transform translate-y-2 opacity-0"
     class="space-y-4"
     x-cloak>

    <div class="flex items-center justify-between px-2 mb-4">
        <h4 class="text-xs font-black tracking-[0.2em] text-[#f9a01b] uppercase">
            Section 05 // Secure Warehousing
        </h4>
        <span class="text-xs font-bold text-gray-400 font-mono">15 Operations Listed</span>
    </div>

    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
         :class="activeFaq === 51 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
        <button @click="toggleFaq(51)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">
                1. What is the standard spacing/minimum space for storing inventory?
            </span>
            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0"
                 :class="activeFaq === 51 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                </svg>
            </div>
        </button>
        <div x-show="activeFaq === 51" x-collapse x-cloak>
            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                We offer 2000 KG of spacing per month and using per square feet methods. For rates you may refer to our E-Fulfilment (Pick and Pack) Service Prices. Another option, you may send a customise storage request. Our minimum storage is 0.5 per cubic meter/1 pallet. However, if you need extended storage space or require specific storage spaces, you need to subcontract for additional warehouse storage, space, and related services as necessary at the rates agreed with the service provider.
            </div>
        </div>
    </div>

    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
         :class="activeFaq === 52 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
        <button @click="toggleFaq(52)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">
                2. Do you provide customise storage options or predefined storage periods?
            </span>
            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0"
                 :class="activeFaq === 52 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                </svg>
            </div>
        </button>
        <div x-show="activeFaq === 52" x-collapse x-cloak>
            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                We provide 3, 6, and 12 months of storage which vary depending on the promotional offers. The rates may refer to E-Fulfilment (Pick and Pack) Service Prices. For other options, you may request using per cubic metre per month. This is a variable charge, billed on a monthly basis depending on storage space usage. Unless specified otherwise, the customise storage period or spacing are depending on both party’s agreement through a contract.
            </div>
        </div>
    </div>

    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
         :class="activeFaq === 53 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
        <button @click="toggleFaq(53)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">
                3. Do you charge a long-term storage fee?
            </span>
            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0"
                 :class="activeFaq === 53 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                </svg>
            </div>
        </button>
        <div x-show="activeFaq === 53" x-collapse x-cloak>
            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                No, there is no surcharge or higher cost for long-term storage. For inventory storage/pick and pack, our clients are charged the same amount regardless of how long their items are stored in our warehouse. You may refer to our E-Fulfilment (Pick and Pack) Service Prices with packages for the add-on.
            </div>
        </div>
    </div>

    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
         :class="activeFaq === 54 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
        <button @click="toggleFaq(54)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">
                4. How do you bill for storage space?
            </span>
            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0"
                 :class="activeFaq === 54 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                </svg>
            </div>
        </button>
        <div x-show="activeFaq === 54" x-collapse x-cloak>
            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                We charge the storage for the space that you are using at any given time per month. Please refer to our E-Fulfilment Service Prices list.
            </div>
        </div>
    </div>

    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
         :class="activeFaq === 55 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
        <button @click="toggleFaq(55)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">
                5. Do my items need bar codes?
            </span>
            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0"
                 :class="activeFaq === 55 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                </svg>
            </div>
        </button>
        <div x-show="activeFaq === 55" x-collapse x-cloak>
            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                Yes, scannable barcodes must be present on each of your individual units. If your products don't have scannable barcodes when they arrive at our warehouse, we can label them for you.
            </div>
        </div>
    </div>

    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
         :class="activeFaq === 56 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
        <button @click="toggleFaq(56)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">
                6. What security features do your facilities have?
            </span>
            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0"
                 :class="activeFaq === 56 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                </svg>
            </div>
        </button>
        <div x-show="activeFaq === 56" x-collapse x-cloak>
            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                Security cameras, smoke hatches, fire sprinkler systems, fire extinguishers, security guards and round-the-clock alarm monitoring are all present at our warehouse.
            </div>
        </div>
    </div>

    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
         :class="activeFaq === 57 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
        <button @click="toggleFaq(57)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">
                7. Do you have material handling equipment to move the inventory?
            </span>
            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0"
                 :class="activeFaq === 57 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                </svg>
            </div>
        </button>
        <div x-show="activeFaq === 57" x-collapse x-cloak>
            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                Yes, we have sliding rails, forklifts, pallet jacks, racking, and a crane to move your inventory.
            </div>
        </div>
    </div>

    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
         :class="activeFaq === 58 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
        <button @click="toggleFaq(58)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">
                8. Are there items you don't accept?
            </span>
            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0"
                 :class="activeFaq === 58 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                </svg>
            </div>
        </button>
        <div x-show="activeFaq === 58" x-collapse x-cloak>
            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                Although we work with the vast majority of consumer goods, there are some that we don't, such as unpackaged food, frozen food, some hazardous commodities, firearms or ammunition, pornography, and exceedingly high-value goods.
            </div>
        </div>
    </div>

    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
         :class="activeFaq === 59 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
        <button @click="toggleFaq(59)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">
                9. Do you offer climate-controlled storage?
            </span>
            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0"
                 :class="activeFaq === 59 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                </svg>
            </div>
        </button>
        <div x-show="activeFaq === 59" x-collapse x-cloak>
            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                No, we don't work with frozen or chilled goods because we don't have a refrigerated section.
            </div>
        </div>
    </div>

    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
         :class="activeFaq === 60 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
        <button @click="toggleFaq(60)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">
                10. How can I modify or cancel a storage order/booking?
            </span>
            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0"
                 :class="activeFaq === 60 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                </svg>
            </div>
        </button>
        <div x-show="activeFaq === 60" x-collapse x-cloak>
            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                Please cancel your booking/order through our website or directly contact admin@arkod.com.my or customersupport@arkod.com.my for full details of the issue.
            </div>
        </div>
    </div>

    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
         :class="activeFaq === 61 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
        <button @click="toggleFaq(61)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">
                11. Can I visit your warehouse to inspect my inventory?
            </span>
            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0"
                 :class="activeFaq === 61 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                </svg>
            </div>
        </button>
        <div x-show="activeFaq === 61" x-collapse x-cloak>
            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                Please inform us 24 hours in advance to make sure that we prepare you with the safety guidelines before entering the warehouse. Your safety is our top priority. Provide us with the autorised letter or any authorise related documents beforehand. You or your representative can access the warehouse during business hours (9.00 a.m.–5.00 p.m.) for the inventory inspection.
            </div>
        </div>
    </div>

    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
         :class="activeFaq === 62 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
        <button @click="toggleFaq(62)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">
                12. Is my inventory insured while stored in your warehouse?
            </span>
            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0"
                 :class="activeFaq === 62 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                </svg>
            </div>
        </button>
        <div x-show="activeFaq === 62" x-collapse x-cloak>
            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                The maximum insurance coverage is RM1000. Extra insurance coverage is available upon request.
            </div>
        </div>
    </div>

    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
         :class="activeFaq === 63 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
        <button @click="toggleFaq(63)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">
                13. Is there a written agreement or contract for storage services?
            </span>
            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0"
                 :class="activeFaq === 63 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                </svg>
            </div>
        </button>
        <div x-show="activeFaq === 63" x-collapse x-cloak>
            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                Yes. You can refer to our Terms of Service regarding the (PICK & PACK - E-commerce Fulfilment, Storage and Delivery Service Terms & Conditions).
            </div>
        </div>
    </div>

    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
         :class="activeFaq === 64 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
        <button @click="toggleFaq(64)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">
                14. What is the process for terminating storage services and moving inventory out?
            </span>
            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0"
                 :class="activeFaq === 64 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                </svg>
            </div>
        </button>
        <div x-show="activeFaq === 64" x-collapse x-cloak>
            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                Please provide us 30 days notice in advance to make sure that the move-out process is done in a proper manner as stated according to the terms & conditions. This entails any transaction, payment or liabilities to be resolve through the correct procedures.
            </div>
        </div>
    </div>

    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
         :class="activeFaq === 65 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
        <button @click="toggleFaq(65)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">
                15. Can I or my representative pick up items directly from the warehouse?
            </span>
            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0"
                 :class="activeFaq === 65 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                </svg>
            </div>
        </button>
        <div x-show="activeFaq === 65" x-collapse x-cloak>
            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                Yes. Please inform us 24 hours in advance. Do provide us your authorisation letter with other related identification documents - vehicle’s driver (for representative).
            </div>
        </div>
    </div>

</div>

                <!-- ==================================================== -->
<!-- SECTION 06: E-FULFILLMENT SHIPPING                   -->
<!-- ==================================================== -->
<div x-show="activeTab === 'ef-shipping'"
     x-transition:enter="transition ease-out duration-400 transform translate-y-2 opacity-0"
     class="space-y-4"
     x-cloak>

    <!-- Header Section -->
    <div class="flex items-center justify-between px-2 mb-4">
        <h4 class="text-xs font-black tracking-[0.2em] text-[#f9a01b] uppercase">
            Section 06 // Freight Deployments
        </h4>
        <span class="text-xs font-bold text-gray-400 font-mono">4 Operations Listed</span>
    </div>

    <!-- FAQ 1 -->
    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
         :class="activeFaq === 71 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
        <button @click="toggleFaq(71)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">
                1. Which Shipping Carriers Do You Use?
            </span>
            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0"
                 :class="activeFaq === 71 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                </svg>
            </div>
        </button>
        <div x-show="activeFaq === 71" x-collapse x-cloak>
            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                dhExpress and other reliable shipping carriers or transporters
            </div>
        </div>
    </div>

    <!-- FAQ 2 -->
    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
         :class="activeFaq === 72 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
        <button @click="toggleFaq(72)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">
                2. When you get an order, how soon do you ship it?
            </span>
            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0"
                 :class="activeFaq === 72 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                </svg>
            </div>
        </button>
        <div x-show="activeFaq === 72" x-collapse x-cloak>
            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                Within 2-5 days business days after receipt, orders are dispatched.
            </div>
        </div>
    </div>

    <!-- FAQ 3 -->
    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
         :class="activeFaq === 73 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
        <button @click="toggleFaq(73)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">
                3. What areas does your shipping support?
            </span>
            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0"
                 :class="activeFaq === 73 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                </svg>
            </div>
        </button>
        <div x-show="activeFaq === 73" x-collapse x-cloak>
            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                We support domestic shipping across Malaysia.
            </div>
        </div>
    </div>

    <!-- FAQ 4 -->
    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
         :class="activeFaq === 74 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
        <button @click="toggleFaq(74)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">
                4. Do My Shipments Come With Tracking?
            </span>
            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0"
                 :class="activeFaq === 74 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                </svg>
            </div>
        </button>
        <div x-show="activeFaq === 74" x-collapse x-cloak>
            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                Yes, all shipments come with free tracking, you can go to our tracking page here.
            </div>
        </div>
    </div>

</div>

                <!-- SECTION 07 -->
               <div x-show="activeTab === 'ef-returns'"
     x-transition:enter="transition ease-out duration-400 transform translate-y-2 opacity-0"
     class="space-y-4"
     x-cloak>

    <div class="flex items-center justify-between px-2 mb-4">
        <h4 class="text-xs font-black tracking-[0.2em] text-[#f9a01b] uppercase">
            Section 07 // Reverse Logistics
        </h4>
        <span class="text-xs font-bold text-gray-400 font-mono">5 Operations Listed</span>
    </div>

    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
         :class="activeFaq === 81 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
        <button @click="toggleFaq(81)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">
                1. Can my customers send returns to your facility?
            </span>
            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0"
                 :class="activeFaq === 81 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                </svg>
            </div>
        </button>
        <div x-show="activeFaq === 81" x-collapse x-cloak>
            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                Yes. You can inform your customers to return orders to our facilities. This can be done using the packing slip that we include with each item and your company's return policy.
            </div>
        </div>
    </div>

    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
         :class="activeFaq === 82 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
        <button @click="toggleFaq(82)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">
                2. What happens to the items that are returned?
            </span>
            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0"
                 :class="activeFaq === 82 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                </svg>
            </div>
        </button>
        <div x-show="activeFaq === 82" x-collapse x-cloak>
            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                We will follow the return instructions provided by your account manager throughout the setup process. This might involve replenishing undamaged products and consolidating or eliminating any damaged merchandise.
            </div>
        </div>
    </div>

    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
         :class="activeFaq === 83 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
        <button @click="toggleFaq(83)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">
                3. Can you test returned items to see if they're still functional?
            </span>
            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0"
                 :class="activeFaq === 83 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                </svg>
            </div>
        </button>
        <div x-show="activeFaq === 83" x-collapse x-cloak>
            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                On returned products, we can perform specific quality control tests. Please contact your sales representative for additional details.
            </div>
        </div>
    </div>

    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
         :class="activeFaq === 84 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
        <button @click="toggleFaq(84)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">
                4. What happens if you make a mistake on a shipment?
            </span>
            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0"
                 :class="activeFaq === 84 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                </svg>
            </div>
        </button>
        <div x-show="activeFaq === 84" x-collapse x-cloak>
            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                If an order is returned due to a pick or pack fault, eFulfillment Service will instantly send a replacement order to your customer at no extra cost. In addition, we will attempt to determine the source of the issue in order to avoid it from happening again in the future.
            </div>
        </div>
    </div>

    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
         :class="activeFaq === 85 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
        <button @click="toggleFaq(85)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">
                5. Do you charge a returns processing fee?
            </span>
            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0"
                 :class="activeFaq === 85 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                </svg>
            </div>
        </button>
        <div x-show="activeFaq === 85" x-collapse x-cloak>
            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                You can check the proposal provided by our sales staff, which includes a list of package prices.
            </div>
        </div>
    </div>

</div>

                <!-- ==================================================== -->
<!-- SECTION 08: E-FULFILLMENT PACKAGING                  -->
<!-- ==================================================== -->
<div x-show="activeTab === 'ef-packaging'"
     x-transition:enter="transition ease-out duration-400 transform translate-y-2 opacity-0"
     class="space-y-4"
     x-cloak>

    <!-- Header Section -->
    <div class="flex items-center justify-between px-2 mb-4">
        <h4 class="text-xs font-black tracking-[0.2em] text-[#f9a01b] uppercase">
            Section 08 // Kitting & Presentation
        </h4>
        <span class="text-xs font-bold text-gray-400 font-mono">4 Operations Listed</span>
    </div>

    <!-- FAQ 1 -->
    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
         :class="activeFaq === 91 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
        <button @click="toggleFaq(91)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">
                1. Is there a logo for eFulfillment Service on the boxes?
            </span>
            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0"
                 :class="activeFaq === 91 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                </svg>
            </div>
        </button>
        <div x-show="activeFaq === 91" x-collapse x-cloak>
            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                We may include our logo on any related delivery purposes, such as the waybill.
            </div>
        </div>
    </div>

    <!-- FAQ 2 -->
    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
         :class="activeFaq === 92 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
        <button @click="toggleFaq(92)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">
                2. Can I Use My Own Packaging?
            </span>
            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0"
                 :class="activeFaq === 92 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                </svg>
            </div>
        </button>
        <div x-show="activeFaq === 92" x-collapse x-cloak>
            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                In some cases, we allow clients to use their own shipment packaging. Please contact us or your sales representative for further information on your packaging requirements.
            </div>
        </div>
    </div>

    <!-- FAQ 3 -->
    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
         :class="activeFaq === 93 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
        <button @click="toggleFaq(93)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">
                3. Can you help me to pack my items/products/goods?
            </span>
            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0"
                 :class="activeFaq === 93 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                </svg>
            </div>
        </button>
        <div x-show="activeFaq === 93" x-collapse x-cloak>
            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                Yes, we offer packing services, which are optional. You can find the option for the add-on service on our website in the E-Fulfilment / Pick and Pack Service section. And also, if you need products that require special packaging or label printing and tagging, or bundling and/or pairing for products such as goodie bags, or even loose pairs of shoes in parcels, send us the details via sales@arkod.com.my and we will quote you the charges.
            </div>
        </div>
    </div>

    <!-- FAQ 4 -->
    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
         :class="activeFaq === 94 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
        <button @click="toggleFaq(94)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">
                4. I don’t need packaging for my separate or individual items.
            </span>
            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0"
                 :class="activeFaq === 94 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                </svg>
            </div>
        </button>
        <div x-show="activeFaq === 94" x-collapse x-cloak>
            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                External wrapping/cover/pouches are compulsory for Delivery Order (D.O.) labelling purposes, especially for unwrapped/unpacked individual items.
            </div>
        </div>
    </div>

</div>

                <!-- ==================================================== -->
<!-- SECTION 09: E-FULFILLMENT ADD ON SERVICES            -->
<!-- ==================================================== -->
<div x-show="activeTab === 'ef-addons'"
     x-transition:enter="transition ease-out duration-400 transform translate-y-2 opacity-0"
     class="space-y-4"
     x-cloak>

    <!-- Header Section -->
    <div class="flex items-center justify-between px-2 mb-4">
        <h4 class="text-xs font-black tracking-[0.2em] text-[#f9a01b] uppercase">
            Section 09 // Value-Added Processing
        </h4>
        <span class="text-xs font-bold text-gray-400 font-mono">1 Operation Listed</span>
    </div>

    <!-- FAQ 1 -->
    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
         :class="activeFaq === 101 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
        <button @click="toggleFaq(101)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">
                1. What additional services do you provide?
            </span>
            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0"
                 :class="activeFaq === 101 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                </svg>
            </div>
        </button>
        <div x-show="activeFaq === 101" x-collapse x-cloak>
            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                We provide add-on services such as Pre-packing, Outbound for Bazaar, Stockist and etc., box assembly, printing, shrink wrap, pallet wrap/supply and other services upon request with agreed charges.
            </div>
        </div>
    </div>

</div>

               <!-- ==================================================== -->
<!-- SECTION 10: E-FULFILLMENT PAYMENT                    -->
<!-- ==================================================== -->
<div x-show="activeTab === 'ef-payment'"
     x-transition:enter="transition ease-out duration-400 transform translate-y-2 opacity-0"
     class="space-y-4"
     x-cloak>

    <!-- Header Section -->
    <div class="flex items-center justify-between px-2 mb-4">
        <h4 class="text-xs font-black tracking-[0.2em] text-[#f9a01b] uppercase">
            Section 10 // Billing & Transactions
        </h4>
        <span class="text-xs font-bold text-gray-400 font-mono">1 Operation Listed</span>
    </div>

    <!-- FAQ 1 -->
    <div class="border border-white/10 rounded-[2rem] transition-all duration-500 overflow-hidden"
         :class="activeFaq === 111 ? 'bg-[#0f0f0f] text-white shadow-2xl scale-[1.01]' : 'bg-black/40 text-white hover:border-white/20 shadow-sm backdrop-blur-md'">
        <button @click="toggleFaq(111)" class="w-full flex items-center justify-between text-left p-8 outline-none select-none group">
            <span class="text-sm md:text-base font-bold tracking-wide transition-colors group-hover:text-[#f9a01b]">
                What method of payment do you accept?
            </span>
            <div class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 ml-4 flex-shrink-0"
                 :class="activeFaq === 111 ? 'bg-[#f9a01b] text-black rotate-45' : 'bg-white/5 text-white group-hover:bg-[#f9a01b] group-hover:text-black'">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                </svg>
            </div>
        </button>
        <div x-show="activeFaq === 111" x-collapse x-cloak>
            <div class="px-8 pb-8 text-xs md:text-sm font-medium leading-relaxed text-gray-400 max-w-4xl border-t border-white/5 pt-6 tracking-wide">
                <ul class="list-disc pl-5 space-y-2">
                    <li>Bank Transfer (inclusive of any online type of transfer)</li>
                    <li>FPX Internet Banking</li>
                    <li>Credit / Debit Card Payment</li>
                    <li>Cheque payment</li>
                    <li>Cash payment at the service provider's location</li>
                    <li>e-Wallet • ARKOD Points (AP) / (ARKOD Credit Account)</li>
                </ul>
            </div>
        </div>
    </div>

</div>

            </div>
        </div>
    </div>
</section>
</body>
</html>

                <div x-show="activeTab === 'ef-storage'" x-transition:enter="transition ease-out duration-400 transform translate-y-2 opacity-0" class="space-y-4" x-cloak>
                    <div class="flex items-center justify-between px-2 mb-2"><h4 class="text-xs font-black tracking-[0.2em] text-[#f9a01b] uppercase">Section 05 // Secure Warehousing</h4><span class="text-xs font-bold text-gray-400 font-mono">Storage</span></div>
                    <div class="border border-white/10 rounded-[2rem] bg-black/40 backdrop-blur-md text-white p-8 shadow-sm font-mono text-xs opacity-60">[ Warehouse secure batch sorting configurations details will parse here ]</div>
                </div>

                <div x-show="activeTab === 'ef-shipping'" x-transition:enter="transition ease-out duration-400 transform translate-y-2 opacity-0" class="space-y-4" x-cloak>
                    <div class="flex items-center justify-between px-2 mb-2"><h4 class="text-xs font-black tracking-[0.2em] text-[#f9a01b] uppercase">Section 06 // Freight Deployments</h4><span class="text-xs font-bold text-gray-400 font-mono">Outbound Shipping</span></div>
                    <div class="border border-white/10 rounded-[2rem] bg-black/40 backdrop-blur-md text-white p-8 shadow-sm font-mono text-xs opacity-60">[ Automated dispatch matrix and courier integrations details will parse here ]</div>
                </div>

                <div x-show="activeTab === 'ef-returns'" x-transition:enter="transition ease-out duration-400 transform translate-y-2 opacity-0" class="space-y-4" x-cloak>
                    <div class="flex items-center justify-between px-2 mb-2"><h4 class="text-xs font-black tracking-[0.2em] text-[#f9a01b] uppercase">Section 07 // Reverse Logistics</h4><span class="text-xs font-bold text-gray-400 font-mono">Returns Handling</span></div>
                    <div class="border border-white/10 rounded-[2rem] bg-black/40 backdrop-blur-md text-white p-8 shadow-sm font-mono text-xs opacity-60">[ Reverse inspection queues and RMA workflows parameters details will parse here ]</div>
                </div>

                <div x-show="activeTab === 'ef-packaging'" x-transition:enter="transition ease-out duration-400 transform translate-y-2 opacity-0" class="space-y-4" x-cloak>
                    <div class="flex items-center justify-between px-2 mb-2"><h4 class="text-xs font-black tracking-[0.2em] text-[#f9a01b] uppercase">Section 08 // Parcel Processing</h4><span class="text-xs font-bold text-gray-400 font-mono">Custom Packaging</span></div>
                    <div class="border border-white/10 rounded-[2rem] bg-black/40 backdrop-blur-md text-white p-8 shadow-sm font-mono text-xs opacity-60">[ Packing materials checklist and safety insulation guidelines will parse here ]</div>
                </div>

                <div x-show="activeTab === 'ef-addons'" x-transition:enter="transition ease-out duration-400 transform translate-y-2 opacity-0" class="space-y-4" x-cloak>
                    <div class="flex items-center justify-between px-2 mb-2"><h4 class="text-xs font-black tracking-[0.2em] text-[#f9a01b] uppercase">Section 09 // Premium Features</h4><span class="text-xs font-bold text-gray-400 font-mono">Value Addons</span></div>
                    <div class="border border-white/10 rounded-[2rem] bg-black/40 backdrop-blur-md text-white p-8 shadow-sm font-mono text-xs opacity-60">[ Tailored real-time API provisioning or insurance coverage options details will parse here ]</div>
                </div>

                <div x-show="activeTab === 'ef-payment'" x-transition:enter="transition ease-out duration-400 transform translate-y-2 opacity-0" class="space-y-4" x-cloak>
                    <div class="flex items-center justify-between px-2 mb-2"><h4 class="text-xs font-black tracking-[0.2em] text-[#f9a01b] uppercase">Section 10 // Accounting Clearances</h4><span class="text-xs font-bold text-gray-400 font-mono">Invoicing & Ledger</span></div>
                    <div class="border border-white/10 rounded-[2rem] bg-black/40 backdrop-blur-md text-white p-8 shadow-sm font-mono text-xs opacity-60">[ Automated multi-currency invoicing pipelines ledger clearing processes will parse here ]</div>
                </div>

            </div>
        </div>

    </div>
</section>

<!-- Custom Scrollbar styling track -->
<style>
    .subtle-scrollbar::-webkit-scrollbar { width: 4px; }
    .subtle-scrollbar::-webkit-scrollbar-track { background: transparent; }
    .subtle-scrollbar::-webkit-scrollbar-thumb { background: rgba(255, 255, 255, 0.1); border-radius: 10px; }
    .subtle-scrollbar::-webkit-scrollbar-thumb:hover { background: rgba(255, 255, 255, 0.3); }
</style>

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
