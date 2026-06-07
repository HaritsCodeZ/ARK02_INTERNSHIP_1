<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARKOD | Knowledge & Insights</title>
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
                            <a href="/servicecarshipping" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">Vehicle Shipping</a>
                            <a href="/servicecarshipping" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">Delivery Shipping</a>
                            <a href="/servicecarshipping" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">Custom Shipping</a>
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

<section x-data="{
    active: 3,
    total: 5,
    interval: null,
    next() {
        this.active = this.active === this.total ? 1 : this.active + 1;
    },
    prev() {
        this.active = this.active === 1 ? this.total : this.active - 1;
    },
    init() {
        this.interval = setInterval(() => { this.next(); }, 6000);
    }
}"
class="w-full max-w-[1600px] mx-auto py-20 px-4 bg-white flex flex-col items-center select-none font-montserrat overflow-hidden">

    <div class="text-center max-w-3xl mb-14">
        <h2 class="text-4xl sm:text-5xl font-black text-[#0a0a0a] tracking-tight mb-4">Knowledge & Insights</h2>
        <div class="w-24 h-[3px] bg-yellow-400 mx-auto mb-6"></div>
        <p class="text-gray-600 text-sm sm:text-base font-semibold leading-relaxed max-w-2xl mx-auto">
            Deep dives into specialized logistics for food, healthcare, industrial machinery, and beyond!
        </p>
    </div>

    <div class="relative w-full flex items-center justify-between h-[620px] max-w-[1500px] mx-auto px-4">

        <button @click="prev(); clearInterval(interval); interval = setInterval(() => { next(); }, 6000);"
                class="z-50 p-2 text-black hover:text-yellow-500 transition-colors focus:outline-none shrink-0" aria-label="Previous slide">
            <svg class="w-14 h-14 stroke-[4]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
        </button>

        <div class="relative flex items-center justify-center flex-1 h-[580px]">

            <div class="absolute overflow-hidden shadow-2xl transition-all duration-700 ease-out"
                 :class="{
                    'z-30 translate-y-6 border-[6px] border-white shadow-[0_25px_60px_-10px_rgba(0,0,0,0.4)] opacity-100': active === 1,
                    'z-20 -translate-x-[250px] opacity-100': active === 5,
                    'z-20 translate-x-[250px] opacity-100': active === 2,
                    'z-0 -translate-x-[400px] opacity-0 pointer-events-none': active === 4,
                    'z-0 translate-x-[400px] opacity-0 pointer-events-none': active === 3
                 }"
                 :style="active === 1 ? 'width: 449px; height: 544px; border-radius: 52px;' : 'width: 413px; height: 512px; border-radius: 52px;'">
                <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1581092160607-ee22621dd758?q=80&w=600&auto=format&fit=crop');"></div>
                <div class="absolute inset-0 bg-black/60 transition-opacity duration-700" :class="active === 1 ? 'opacity-40' : 'opacity-75'"></div>
                <div class="absolute inset-0 p-10 flex flex-col justify-end items-center text-center text-white">
                    <h3 class="font-black mb-3 tracking-wide transition-all duration-700" :class="active === 1 ? 'text-3xl' : 'text-2xl'">Industrial</h3>
                    <p class="text-xs text-gray-300 mb-5 leading-relaxed max-w-[260px]">Robust supply chains for heavy infrastructure.</p>
                    <a href="#" class="text-sm font-black underline underline-offset-4 hover:text-yellow-400 transition uppercase tracking-widest">Read more</a>
                </div>
            </div>

            <div class="absolute overflow-hidden shadow-2xl transition-all duration-700 ease-out"
                 :class="{
                    'z-30 translate-y-6 border-[6px] border-white shadow-[0_25px_60px_-10px_rgba(0,0,0,0.4)] opacity-100': active === 2,
                    'z-20 -translate-x-[250px] opacity-100': active === 1,
                    'z-20 translate-x-[250px] opacity-100': active === 3,
                    'z-0 -translate-x-[400px] opacity-0 pointer-events-none': active === 5,
                    'z-0 translate-x-[400px] opacity-0 pointer-events-none': active === 4
                 }"
                 :style="active === 2 ? 'width: 449px; height: 544px; border-radius: 52px;' : 'width: 413px; height: 512px; border-radius: 52px;'">
                <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1542838132-92c53300491e?q=80&w=600&auto=format&fit=crop');"></div>
                <div class="absolute inset-0 bg-black/60 transition-opacity duration-700" :class="active === 2 ? 'opacity-40' : 'opacity-75'"></div>
                <div class="absolute inset-0 p-10 flex flex-col justify-end items-center text-center text-white">
                    <h3 class="font-black mb-3 tracking-wide transition-all duration-700" :class="active === 2 ? 'text-3xl' : 'text-2xl'">Food & Beverage</h3>
                    <p class="text-xs text-gray-300 mb-5 leading-relaxed max-w-[260px]">Revolutionize the way you handle dry-packed products.</p>
                    <a href="#" class="text-sm font-black underline underline-offset-4 hover:text-yellow-400 transition uppercase tracking-widest">Read more</a>
                </div>
            </div>

            <div class="absolute overflow-hidden shadow-2xl transition-all duration-700 ease-out"
                 :class="{
                    'z-30 translate-y-6 border-[6px] border-white shadow-[0_25px_60px_-10px_rgba(0,0,0,0.4)] opacity-100': active === 3,
                    'z-20 -translate-x-[250px] opacity-100': active === 2,
                    'z-20 translate-x-[250px] opacity-100': active === 4,
                    'z-0 -translate-x-[400px] opacity-0 pointer-events-none': active === 1,
                    'z-0 translate-x-[400px] opacity-0 pointer-events-none': active === 5
                 }"
                 :style="active === 3 ? 'width: 449px; height: 544px; border-radius: 52px;' : 'width: 413px; height: 512px; border-radius: 52px;'">
                <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?q=80&w=600&auto=format&fit=crop');"></div>
                <div class="absolute inset-0 bg-black/60 transition-opacity duration-700" :class="active === 3 ? 'opacity-40' : 'opacity-75'"></div>
                <div class="absolute inset-0 p-10 flex flex-col justify-end items-center text-center text-white">
                    <h3 class="font-black mb-4 tracking-wide transition-all duration-700" :class="active === 3 ? 'text-3xl' : 'text-2xl'">Health & Cosmetics</h3>
                    <p class="text-xs text-gray-200 mb-6 leading-relaxed max-w-[280px]">Your gateway to a healthier and more beautiful business!</p>
                    <a href="#" class="text-sm font-black underline underline-offset-4 hover:text-yellow-400 transition uppercase tracking-widest">Read more</a>
                </div>
            </div>

            <div class="absolute overflow-hidden shadow-2xl transition-all duration-700 ease-out"
                 :class="{
                    'z-30 translate-y-6 border-[6px] border-white shadow-[0_25px_60px_-10px_rgba(0,0,0,0.4)] opacity-100': active === 4,
                    'z-20 -translate-x-[250px] opacity-100': active === 3,
                    'z-20 translate-x-[250px] opacity-100': active === 5,
                    'z-0 -translate-x-[400px] opacity-0 pointer-events-none': active === 2,
                    'z-0 translate-x-[400px] opacity-0 pointer-events-none': active === 1
                 }"
                 :style="active === 4 ? 'width: 449px; height: 544px; border-radius: 52px;' : 'width: 413px; height: 512px; border-radius: 52px;'">
                <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=600&auto=format&fit=crop');"></div>
                <div class="absolute inset-0 bg-black/60 transition-opacity duration-700" :class="active === 4 ? 'opacity-40' : 'opacity-75'"></div>
                <div class="absolute inset-0 p-10 flex flex-col justify-end items-center text-center text-white">
                    <h3 class="font-black mb-3 tracking-wide transition-all duration-700" :class="active === 4 ? 'text-3xl' : 'text-2xl'">Sport & Recreational</h3>
                    <p class="text-xs text-gray-300 mb-5 leading-relaxed max-w-[260px]">Providing top-notch fulfillment services that score big</p>
                    <a href="#" class="text-sm font-black underline underline-offset-4 hover:text-yellow-400 transition uppercase tracking-widest">Read more</a>
                </div>
            </div>

            <div class="absolute overflow-hidden shadow-2xl transition-all duration-700 ease-out"
                 :class="{
                    'z-30 translate-y-6 border-[6px] border-white shadow-[0_25px_60px_-10px_rgba(0,0,0,0.4)] opacity-100': active === 5,
                    'z-20 -translate-x-[250px] opacity-100': active === 4,
                    'z-20 translate-x-[250px] opacity-100': active === 1,
                    'z-0 -translate-x-[400px] opacity-0 pointer-events-none': active === 3,
                    'z-0 translate-x-[400px] opacity-0 pointer-events-none': active === 2
                 }"
                 :style="active === 5 ? 'width: 449px; height: 544px; border-radius: 52px;' : 'width: 413px; height: 512px; border-radius: 52px;'">
                <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1578916171728-46686eac8d58?q=80&w=600&auto=format&fit=crop');"></div>
                <div class="absolute inset-0 bg-black/60 transition-opacity duration-700" :class="active === 5 ? 'opacity-40' : 'opacity-75'"></div>
                <div class="absolute inset-0 p-10 flex flex-col justify-end items-center text-center text-white">
                    <h3 class="font-black mb-3 tracking-wide transition-all duration-700" :class="active === 5 ? 'text-3xl' : 'text-2xl'">Smart Logistics</h3>
                    <p class="text-xs text-gray-300 mb-5 leading-relaxed max-w-[260px]">And beyond! Tailored distribution mechanisms worldwide.</p>
                    <a href="#" class="text-sm font-black underline underline-offset-4 hover:text-yellow-400 transition uppercase tracking-widest">Read more</a>
                </div>
            </div>

        </div>

        <button @click="next(); clearInterval(interval); interval = setInterval(() => { next(); }, 6000);"
                class="z-50 p-2 text-black hover:text-yellow-500 transition-colors focus:outline-none shrink-0" aria-label="Next slide">
            <svg class="w-14 h-14 stroke-[4]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>
        </button>

    </div>
</section>

</body>
</html>
