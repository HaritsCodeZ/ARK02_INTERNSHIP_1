<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARKOD | Agent Application</title>
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

<section class="relative min-h-[80vh] flex items-center justify-center py-20 bg-white overflow-hidden">
    <div class="max-w-[1600px] mx-auto px-6 relative w-full">

        <div class="absolute left-10 top-1/2 -translate-y-1/2 hidden xl:block pointer-events-none">
            <img src="{{ asset('images/box1-removebg-preview.png') }}" alt="Box Left" class="w-[400px] h-auto drop-shadow-xl rotate-[-10deg]">
        </div>

        <div class="absolute right-10 top-1/2 -translate-y-1/2 hidden xl:block pointer-events-none">
            <img src="{{ asset('images/Screenshot_2026-03-28_171207-removebg-preview.png') }}" alt="Box Right" class="w-[400px] h-auto drop-shadow-xl rotate-[5deg]">
        </div>

        <div class="relative z-10 text-center max-w-3xl mx-auto">
            <h4 class="text-black font-bold text-lg mb-4">Become an Arkod Agent</h4>

            <h1 class="text-7xl md:text-6sxl font-[900] text-black leading-none tracking-tight mb-8">
                Turn your time <br> <span class="block">into opportunity</span>

            </h1>

            <p class="text-black text-lg md:text-xl leading mb-12 font-medium px-4">
                “By partnering with ARKOD’s smart logistics platform, you gain access to new earning opportunities while delivering greater value to your customers.”
            </p>

            <div class="flex justify-center">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSfJS2DBaRSqA2G1FUrkKzZ6xX2QowdQw9_4Y0OR9MOdh23t7Q/viewform?pli=1" target="_blank" rel="noopener noreferrer" class="bg-[#FFD700] hover:bg-black hover:text-white text-black font-bold px-16 py-4 rounded-full text-base transition-all duration-300 shadow-[0_20px_50px_rgba(0,0,0,0.3)] hover:shadow-none transform hover:-translate-y-1 border-2 border-black">
                 Join Now
                </a>
            </div>
        </div>
    </div>
</section>

<section class="py-6 bg-white">
    <div class="max-w-[1400px] mx-auto px-6">

        <h2 class="text-5xl font-[900] text-black text-center mb-20">Benefits Overview</h2>

        <div class="flex flex-col md:flex-row items-stretch justify-between text-center">

            <div class="flex-1 px-8 py-10 flex flex-col items-center">
                <div class="mb-8 h-24 flex items-center justify-center">
                    <img src="{{ asset('images/agent_1.png') }}" alt="Business Growth" class="h-full w-auto object-contain">
                </div>
                <h3 class="text-3xl font-[900] text-black mb-6 leading-tight">Business <br> Growth</h3>
                <p class="text-black text-l font-semibold leading-relaxed max-w-[280px]">
                    Expand your reach by tapping into ARKOD’s logistics network and access more delivery opportunities to grow your income.
                </p>
            </div>

            <div class="hidden md:block w-[2px] bg-black my-10"></div>

            <div class="flex-1 px-8 py-10 flex flex-col items-center">
                <div class="mb-8 h-24 flex items-center justify-center">
                    <img src="{{ asset('images/agent_2.png') }}" alt="Exclusive Member Rate" class="h-full w-auto object-contain">
                </div>
                <h3 class="text-3xl font-[900] text-black mb-6 leading-tight">Exclusive Member <br> Rate</h3>
                <p class="text-black text-l font-semibold leading-relaxed max-w-[280px]">
                    Enjoy special pricing and cost advantages available only to ARKOD agents, helping you stay competitive.
                </p>
            </div>

            <div class="hidden md:block w-[2px] bg-black my-10"></div>

            <div class="flex-1 px-8 py-10 flex flex-col items-center">
                <div class="mb-8 h-24 flex items-center justify-center">
                    <img src="{{ asset('images/agent_3.png') }}" alt="Rewards and Bonuses" class="h-full w-auto object-contain">
                </div>
                <h3 class="text-3xl font-[900] text-black mb-6 leading-tight">Rewards and <br> Bonuses</h3>
                <p class="text-black text-l font-semibold leading-relaxed max-w-[280px]">
                    Earn additional incentives through performance-based rewards, bonuses, and recognition programs.
                </p>
            </div>

        </div>
    </div>
</section>

<section class="py-20 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">

        <div class="bg-[#FFD700] rounded-[3rem] p-10 md:p-16 flex flex-col lg:flex-row items-center justify-between relative overflow-hidden animate-card-pulse border-4 border-black/5">

            <div class="absolute -top-24 -left-24 w-64 h-64 bg-white/20 blur-[80px] rounded-full animate-pulse"></div>

            <div class="w-full lg:w-3/5 z-10 text-center lg:text-left">
                <h2 class="text-4xl md:text-5xl font-[900] text-black mb-8 leading-tight">
                    Discover new opportunity with us !
                </h2>

                <p class="text-black text-lg md:text-xl font-semibold leading-relaxed mb-10 max-w-2xl">
                    Explore a range of flexible delivery opportunities, simple workflows, and real earning potential — all designed to help you work smarter and earn on your own terms.
                </p>

                <div class="space-y-6">
                    <p class="text-black font-[900] text-xl uppercase tracking-tight">
                        Interested? Join us Now
                    </p>

                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSfJS2DBaRSqA2G1FUrkKzZ6xX2QowdQw9_4Y0OR9MOdh23t7Q/viewform?pli=1" target="_blank" class="inline-block bg-[#F99D1C] hover:bg-black hover:text-white text-black font-[900] px-12 py-5 rounded-2xl text-lg transition-all duration-300 shadow-lg transform hover:-translate-y-1">
                        Become an Arkod Agent
                    </a>
                </div>
            </div>

            <div class="w-full lg:w-2/5 flex justify-center mt-12 lg:mt-0 relative">
                <div class="absolute inset-0 bg-[#DDF1FF] rounded-full scale-90 lg:scale-110 translate-y-4"></div>

                <img src="{{ asset('images/agentappx.png') }}"
                     alt="Arkod Delivery Partner"
                     class="relative z-10 w-64 md:w-80 h-auto drop-shadow-2xl animate-float-slow">
            </div>

        </div>
    </div>
</section>

<style>
    /* 1. Animation for the entire Card */
    @keyframes card-pulse {
        0%, 100% {
            transform: scale(1);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        50% {
            transform: scale(1.015); /* Very subtle growth */
            box-shadow: 0 25px 50px -12px rgba(255, 215, 0, 0.4); /* Yellow outer glow */
        }
    }

    .animate-card-pulse {
        animation: card-pulse 4s ease-in-out infinite;
    }

    /* 2. Floating animation for the character inside */
    @keyframes float-slow {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-15px); }
    }
    .animate-float-slow {
        animation: float-slow 3s ease-in-out infinite;
    }
</style>

<section class="py-24 bg-white">
    <div class="max-w-6xl mx-auto px-6">
        <h2 class="text-4xl md:text-5xl font-[900] text-black text-center mb-16 uppercase tracking-tight">
            Frequently Asked Questions (FAQ)
        </h2>

        <div x-data="{ active: 0 }" class="space-y-4">

            <div class="rounded-[2rem] overflow-hidden transition-all duration-300 shadow-sm border border-black/5">
                <button @click="active = (active === 1 ? null : 1)"
                        :class="active === 1 ? 'bg-[#B2E7F9]' : 'bg-[#DDF1FF]'"
                        class="w-full flex items-center justify-between px-10 py-6 text-left transition-colors group">
                    <span class="text-lg md:text-xl font-[900] text-black">1. Where can i view my tasks/delivery information?</span>
                    <svg :class="active === 1 ? 'rotate-180' : ''" class="w-6 h-6 text-black transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </button>
                <div x-show="active === 1" x-collapse x-cloak class="bg-[#86D9F7] px-10 py-8">
                    <p class="text-black font-semibold text-lg leading-relaxed">Login to the ARKOD agent Portal</p>
                </div>
            </div>

            <div class="rounded-[2rem] overflow-hidden transition-all duration-300 shadow-sm border border-black/5">
                <button @click="active = (active === 2 ? null : 2)"
                        :class="active === 2 ? 'bg-[#B2E7F9]' : 'bg-[#DDF1FF]'"
                        class="w-full flex items-center justify-between px-10 py-6 text-left transition-colors">
                    <span class="text-lg md:text-xl font-[900] text-black">2. What is the purpose of scanning the QR code?</span>
                    <svg :class="active === 2 ? 'rotate-180' : ''" class="w-6 h-6 text-black transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </button>
                <div x-show="active === 2" x-collapse x-cloak class="bg-[#86D9F7] px-10 py-8">
                    <p class="text-black font-semibold text-lg leading-relaxed">To provide ease of operation for the delivering agent to update delivery status and view a specific task description through the waybill “QR code”.</p>
                </div>
            </div>

            <div class="rounded-[2rem] overflow-hidden transition-all duration-300 shadow-sm border border-black/5">
                <button @click="active = (active === 3 ? null : 3)"
                        :class="active === 3 ? 'bg-[#B2E7F9]' : 'bg-[#DDF1FF]'"
                        class="w-full flex items-center justify-between px-10 py-6 text-left transition-colors">
                    <span class="text-lg md:text-xl font-[900] text-black">3. What if an accident occured, loss or any unfavoured circumstances happen?</span>
                    <svg :class="active === 3 ? 'rotate-180' : ''" class="w-6 h-6 text-black transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </button>
                <div x-show="active === 3" x-collapse x-cloak class="bg-[#86D9F7] px-10 py-8">
                    <p class="text-black font-semibold text-lg leading-relaxed">The compensation of loss or damaged item will be covered by the agent.</p>
                </div>
            </div>

            <div class="rounded-[2rem] overflow-hidden transition-all duration-300 shadow-sm border border-black/5">
                <button @click="active = (active === 4 ? null : 4)"
                        :class="active === 4 ? 'bg-[#B2E7F9]' : 'bg-[#DDF1FF]'"
                        class="w-full flex items-center justify-between px-10 py-6 text-left transition-colors">
                    <span class="text-lg md:text-xl font-[900] text-black">4. Can i change the collection/pickup time with the customers?</span>
                    <svg :class="active === 4 ? 'rotate-180' : ''" class="w-6 h-6 text-black transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </button>
                <div x-show="active === 4" x-collapse x-cloak class="bg-[#86D9F7] px-10 py-8">
                    <p class="text-black font-semibold text-lg leading-relaxed">Yes. The agent is required to inform ARKOD customer support and the customer before collection/pickup time.</p>
                </div>
            </div>

            <div class="rounded-[2rem] overflow-hidden transition-all duration-300 shadow-sm border border-black/5">
                <button @click="active = (active === 5 ? null : 5)"
                        :class="active === 5 ? 'bg-[#B2E7F9]' : 'bg-[#DDF1FF]'"
                        class="w-full flex items-center justify-between px-10 py-6 text-left transition-colors">
                    <span class="text-lg md:text-xl font-[900] text-black">5. What is the meaning of "manpower required"?</span>
                    <svg :class="active === 5 ? 'rotate-180' : ''" class="w-6 h-6 text-black transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </button>
                <div x-show="active === 5" x-collapse x-cloak class="bg-[#86D9F7] px-10 py-8">
                    <p class="text-black font-semibold text-lg leading-relaxed text-sm">Manpower required means the Van/Lorry driver needs to bring an extra helper to assist in the loading and unloading. The number of manpower required would mean the number of helpers requires, not including the driver.</p>
                </div>
            </div>

            <div class="rounded-[2rem] overflow-hidden transition-all duration-300 shadow-sm border border-black/5">
                <button @click="active = (active === 6 ? null : 6)"
                        :class="active === 6 ? 'bg-[#B2E7F9]' : 'bg-[#DDF1FF]'"
                        class="w-full flex items-center justify-between px-10 py-6 text-left transition-colors">
                    <span class="text-lg md:text-xl font-[900] text-black">6. What should i do if the parcel cannot be delivered on the stated date?</span>
                    <svg :class="active === 6 ? 'rotate-180' : ''" class="w-6 h-6 text-black transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </button>
                <div x-show="active === 6" x-collapse x-cloak class="bg-[#86D9F7] px-10 py-8">
                    <p class="text-black font-semibold text-lg leading-relaxed">Delivery Agent should update “Undelivered” with reason if the customer is not available or request to change the delivery date.</p>
                </div>
            </div>

            <div class="rounded-[2rem] overflow-hidden transition-all duration-300 shadow-sm border border-black/5">
                <button @click="active = (active === 7 ? null : 7)"
                        :class="active === 7 ? 'bg-[#B2E7F9]' : 'bg-[#DDF1FF]'"
                        class="w-full flex items-center justify-between px-10 py-6 text-left transition-colors">
                    <span class="text-lg md:text-xl font-[900] text-black">7. Can i cancel my delivery after accepting the delivery task?</span>
                    <svg :class="active === 7 ? 'rotate-180' : ''" class="w-6 h-6 text-black transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </button>
                <div x-show="active === 7" x-collapse x-cloak class="bg-[#86D9F7] px-10 py-8">
                    <p class="text-black font-semibold text-lg leading-relaxed">Once the task/assignment is accepted, it CAN NOT be cancelled unless there are last minutes changes. Please notify or provide your reason. Multiple cancellations will lead to your account suspension.</p>
                </div>
            </div>

            <div class="rounded-[2rem] overflow-hidden transition-all duration-300 shadow-sm border border-black/5">
                <button @click="active = (active === 8 ? null : 8)"
                        :class="active === 8 ? 'bg-[#B2E7F9]' : 'bg-[#DDF1FF]'"
                        class="w-full flex items-center justify-between px-10 py-6 text-left transition-colors">
                    <span class="text-lg md:text-xl font-[900] text-black">8. What if the sender or receiver is not present during pickup/delivery?</span>
                    <svg :class="active === 8 ? 'rotate-180' : ''" class="w-6 h-6 text-black transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </button>
                <div x-show="active === 8" x-collapse x-cloak class="bg-[#86D9F7] px-10 py-8">
                    <p class="text-black font-semibold text-lg leading-relaxed">Agents are required to call sender/receiver for availability. Reschedule for the following available day. You can leave the parcel at the door ONLY with consent and proof of photos/message.</p>
                </div>
            </div>

            <div class="rounded-[2rem] overflow-hidden transition-all duration-300 shadow-sm border border-black/5">
                <button @click="active = (active === 9 ? null : 9)"
                        :class="active === 9 ? 'bg-[#B2E7F9]' : 'bg-[#DDF1FF]'"
                        class="w-full flex items-center justify-between px-10 py-6 text-left transition-colors">
                    <span class="text-lg md:text-xl font-[900] text-black">9. Do you accept sub-contractors?</span>
                    <svg :class="active === 9 ? 'rotate-180' : ''" class="w-6 h-6 text-black transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </button>
                <div x-show="active === 9" x-collapse x-cloak class="bg-[#86D9F7] px-10 py-8">
                    <p class="text-black font-semibold text-lg leading-relaxed">Yes. Sign-up for an agent account and email us your interest. We will contact you to discuss your future task.</p>
                </div>
            </div>

            <div class="rounded-[2rem] overflow-hidden transition-all duration-300 shadow-sm border border-black/5">
                <button @click="active = (active === 10 ? null : 10)"
                        :class="active === 10 ? 'bg-[#B2E7F9]' : 'bg-[#DDF1FF]'"
                        class="w-full flex items-center justify-between px-10 py-6 text-left transition-colors">
                    <span class="text-lg md:text-xl font-[900] text-black">10. How do i get paid after completing the task?</span>
                    <svg :class="active === 10 ? 'rotate-180' : ''" class="w-6 h-6 text-black transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </button>
                <div x-show="active === 10" x-collapse x-cloak class="bg-[#86D9F7] px-10 py-8">
                    <p class="text-black font-semibold text-lg leading-relaxed">Agents email invoice reports to billing@arkod.com.my. Payment is transferred every fortnightly, Friday.</p>
                </div>
            </div>

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
