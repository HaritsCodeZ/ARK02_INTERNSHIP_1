<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARKOD | Logistics Management</title>
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
                <a href="#" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">Career</a>
                <a href="#" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">Agent Application</a>
            </div>
        </div>

        <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative py-2">
            <button class="text-gray-300 hover:text-white text-sm font-semibold flex items-center space-x-1 uppercase tracking-wider transition">
                <span>Blog</span>
                <svg :class="{'rotate-180': open}" class="w-4 h-4 text-yellow-400 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </button>
            <div x-show="open" x-transition x-cloak class="absolute left-0 mt-2 w-64 bg-[#0f0f0f] border border-white/10 rounded-md shadow-2xl z-50 py-2">
                <a href="#" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">About Us</a>
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
                </div>
            </div>
        </div>
    </nav>

    <main class="w-full">
        @yield('content')
    </main>

    <section class="bg-white py-8 px-8 border-t border-slate-100 relative overflow-hidden">
    <div class="absolute top-10 left-10 text-[12rem] font-black text-slate-50 select-none -z-10 tracking-tighter opacity-50">
        SERVICES
    </div>

    <div class="max-w-[1600px] mx-auto text-center relative z-10">
        <div class="inline-block px-4 py-1.5 mb-6 border border-yellow-400/30 rounded-full bg-yellow-400/5">
            <span class="text-[15px] font-black uppercase tracking-[0.3em] text-yellow-600">Our Expertise</span>
        </div>

        <h2 class="text-slate-900 text-5xl md:text-6xl font-black uppercase tracking-tight mb-24 leading-none">
            Solutions <span class="text-yellow-500">Tailored</span> <br> For Your Business
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">
            @php
                $services = [
                    ['name' => 'Delivery', 'img' => 'Truck_X-removebg-preview.png', 'desc' => 'Fast and reliable logistics solutions.'],
                    ['name' => 'Car Shipment', 'img' => 'car.png', 'desc' => 'Secure vehicle transport across borders.'],
                    ['name' => 'Custom ', 'img' => 'box_2.png', 'desc' => 'Tailored packaging and handling.'],
                    ['name' => 'Forwarding', 'img' => 'logistic_3.png', 'desc' => 'Efficiency through tech-driven routes.'],
                ];
            @endphp

            @foreach($services as $s)
            <div class="group relative p-12 bg-white border border-slate-100 rounded-[3rem] transition-all duration-700 hover:-translate-y-4 hover:shadow-[0_40px_80px_-15px_rgba(0,0,0,0.08)] hover:border-yellow-400">

                <div class="absolute top-0 left-1/2 -translate-x-1/2 w-24 h-1.5 bg-slate-100 group-hover:bg-yellow-400 transition-colors duration-500 rounded-b-full"></div>

                <div class="absolute top-8 right-10 text-slate-100 text-5xl font-black group-hover:text-yellow-50 transition-colors duration-500">
                    0{{ $loop->iteration }}
                </div>

                <div class="relative w-32 h-32 mx-auto mb-10">
                    <div class="absolute inset-0 bg-yellow-400/0 group-hover:bg-yellow-400/10 rounded-full transition-all duration-700 scale-0 group-hover:scale-110"></div>
                    <img src="{{ asset('images/' . $s['img']) }}"
                         alt="{{ $s['name'] }}"
                         class="relative z-10 w-full h-full object-contain transition-transform duration-700 group-hover:scale-110 group-hover:rotate-3">
                </div>

                <h3 class="text-slate-900 text-xl font-black uppercase tracking-wider mb-4 group-hover:text-yellow-600 transition-colors">
                    {{ $s['name'] }}
                </h3>

                <p class="text-slate-400 text-xs font-medium leading-relaxed opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    {{ $s['desc'] }}
                </p>

                <div class="mt-8 flex justify-center">
                    <div class="w-12 h-12 rounded-full bg-slate-50 flex items-center justify-center group-hover:bg-yellow-400 transition-all duration-500">
                        <svg class="w-5 h-5 text-slate-300 group-hover:text-black transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="bg-white py-8 px-8 border-y border-black/5 relative overflow-hidden"
         x-data="{
            active: 1, // Start with the central card active
            collaborations: [
                { title: 'Partnerships', type: 'Global Trade', img: '{{ asset('images/Partnerships.png') }}', color: 'bg-yellow-400' },
                { title: 'Affiliate Programmes', type: 'Technology', img: '{{ asset('images/Affiliate Progs.png') }}', color: 'bg-yellow-400' },
                { title: 'Car Shipping', type: 'Logistics', img: '{{ asset('images/Car Shipping.png') }}', color: 'bg-yellow-400' }
            ],
            loop() {
                setInterval(() => { this.active = (this.active + 1) % this.collaborations.length }, 6000)
            }
         }" x-init="loop()">

    <div class="absolute top-10 right-10 text-[16rem] font-black text-slate-100 select-none -z-10 tracking-tighter opacity-70">
        GROW
    </div>

    <div class="max-w-[1600px] mx-auto text-center relative z-20">
        <div class="inline-block px-4 py-1.5 mb-6 border border-yellow-400/30 rounded-full bg-yellow-400/5">
            <span class="text-[10px] font-black uppercase tracking-[0.3em] text-yellow-600">Our Network</span>
        </div>

        <h2 class="text-slate-900 text-5xl md:text-6xl font-black uppercase tracking-tight mb-28 leading-none max-w-4xl mx-auto">
            Collaboration <span class="text-yellow-500">Opportunities</span>
        </h2>

        <div class="relative h-[500px] flex items-center justify-center">

            <template x-for="(collab, index) in collaborations" :key="index">
                <div class="absolute transition-all duration-1000 ease-in-out cursor-pointer group rounded-[3.5rem] bg-white border border-slate-100 p-8 shadow-xl overflow-hidden"
                     @click="active = index"
                     :class="{
                        'z-30 scale-100 opacity-100 translate-x-0': active === index,
                        'z-20 scale-85 opacity-30 -translate-x-1/2 md:-translate-x-[60%] blur-[2px]': (active - 1 + collaborations.length) % collaborations.length === index,
                        'z-20 scale-85 opacity-30 translate-x-1/2 md:translate-x-[60%] blur-[2px]': (active + 1) % collaborations.length === index,
                        'opacity-0 scale-50 z-10': Math.abs(active - index) > 1 && Math.abs(active - index) < collaborations.length - 1
                     }"
                     :style="active === index ? 'box-shadow: 0 40px 100px -20px rgba(0,0,0,0.1)' : ''">

                    <div class="absolute top-0 left-0 w-full h-2 group-hover:opacity-100 transition-opacity duration-300"
                         :class="active === index ? collab.color : 'bg-slate-100'"></div>

                    <div class="relative w-[300px] md:w-[600px] lg:w-[850px] aspect-video rounded-[3rem] overflow-hidden">
                        <img :src="collab.img"
                             :alt="collab.title"
                             class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105">

                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent p-12 flex flex-col justify-end transition-opacity duration-500"
                             :class="active === index ? 'opacity-100' : 'opacity-0'">
                            <span class="text-yellow-400 font-black text-xs uppercase tracking-[0.3em] mb-3 block" x-text="collab.type"></span>
                            <h3 class="text-white text-3xl md:text-4xl font-black uppercase tracking-wider mb-2" x-text="collab.title"></h3>

                            <a href="#" class="inline-flex items-center gap-4 text-white hover:text-yellow-400 font-black uppercase text-xs tracking-widest mt-6 group/link">
                                <span class="w-12 h-[2px] bg-yellow-400 group-hover/link:w-20 transition-all duration-500"></span>
                            </a>
                        </div>
                    </div>

                    <div class="absolute bottom-6 right-14 text-slate-100 text-6xl font-black transition-colors duration-500 group-hover:text-yellow-50"
                    :class="active === index ? 'text-yellow-50' : ''">
                    <span x-text="'0' + (index + 1s)"></span>
                    </div>
                </div>
            </template>

        </div>
    </div>
</section>

<footer class="bg-black text-white pt-20 pb-10 px-8 border-t border-white/10">
    <div class="max-w-[1600px] mx-auto">
                <div class="w-full h-[3px] bg-white mb-8"></div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-16 justify-items-center text-center md:text-left">

            <div class="w-full max-w-[250px]">
                <h4 class="text-sm font-black uppercase tracking-widest mb-6">Logistics Solutions</h4>
                <ul class="space-y-3 text-xs font-medium text-gray-400">
                    <li><a href="#" class="hover:text-yellow-400 transition">Pickup & Delivery</a></li>
                    <li><a href="#" class="hover:text-yellow-400 transition">Sea Freight</a></li>
                    <li><a href="#" class="hover:text-yellow-400 transition">Air Freight</a></li>
                </ul>
                <h4 class="text-sm font-black uppercase tracking-widest mt-10 mb-6">Warehousing Solution</h4>
                <ul class="text-xs font-medium text-gray-400">
                    <li><a href="#" class="hover:text-yellow-400 transition">Warehousing</a></li>
                </ul>
            </div>

            <div class="w-full max-w-[250px] flex flex-col items-center md:items-start">
                <div>
                    <h4 class="text-sm font-black uppercase tracking-widest mb-6">Company</h4>
                    <ul class="space-y-3 text-xs font-medium text-gray-400">
                        <li><a href="#" class="hover:text-yellow-400 transition">About Us</a></li>
                        <li><a href="#" class="hover:text-yellow-400 transition">Blog</a></li>
                        <li><a href="#" class="hover:text-yellow-400 transition">Careers</a></li>
                    </ul>
                </div>
                <div class="mt-10">
                    <h4 class="text-sm font-black uppercase tracking-widest mb-6">Support</h4>
                    <ul class="space-y-3 text-xs font-medium text-gray-400">
                        <li><a href="#" class="hover:text-yellow-400 transition">Contact Us</a></li>
                        <li><a href="#" class="hover:text-yellow-400 transition">Documents</a></li>
                    </ul>
                </div>
            </div>

            <div class="w-full max-w-[300px] flex flex-col items-center md:items-end">
                <h4 class="text-sm font-black uppercase tracking-widest mb-6">ARKOD SMART LOGITECH</h4>
                <div class="flex gap-4">
                    <div class="flex gap-6">
    <a href="#" class="text-white hover:text-yellow-400 transition-colors duration-300">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"></path>
            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
        </svg>
    </a>

    <a href="#" class="text-white hover:text-yellow-400 transition-colors duration-300">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
        </svg>
    </a>

    <a href="#" class="text-white hover:text-yellow-400 transition-colors duration-300">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
            <path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
            <circle cx="4" cy="4" r="2"></circle>
        </svg>
    </a>
</div>
                </div>
                <div class="mt-8 text-[10px] text-gray-500 text-center md:text-right font-medium leading-relaxed">
                    Innovative Solutions for Logistics <br> Efficiency & Innovation With Smart Logistics
                </div>
            </div>
        </div>

        <div class="w-full h-[3px] bg-white mb-8"></div>

        <div class="flex flex-col items-center">
            <p class="text-[10px] font-black tracking-[0.5em] mb-10 text-white/60">© ARKOD 2026. ALL RIGHTS RESERVED</p>

            <div class="flex flex-wrap justify-center gap-8 md:gap-16">
                <div class="flex items-center gap-3">
                    <div class="p-2 border border-white/20 rounded-full"><svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg></div>
                    <span class="text-sm font-bold tracking-wider">+60 18-911 6168</span>
                </div>
                <div class="flex items-center gap-3">
                    <div class="p-2 border border-white/20 rounded-full"><svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg></div>
                    <span class="text-sm font-bold tracking-wider">082-384 999</span>
                </div>
                <div class="flex items-center gap-3">
                    <div class="p-2 border border-white/20 rounded-full"><svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg></div>
                    <span class="text-sm font-bold tracking-wider">customersupport@arkod.com.my</span>
                </div>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
