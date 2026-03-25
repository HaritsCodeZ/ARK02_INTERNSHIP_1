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
