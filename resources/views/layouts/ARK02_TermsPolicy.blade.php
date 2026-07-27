<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARKOD | Terms And Policy
    </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700;900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>[x-cloak] { display: none !important; }</style>
</head>

<!-- THE NAVBAR !-->
<body class="bg-[#0a0a0a] font-montserrat antialiased text-white">

     <nav x-data="{ mobileOpen: false }" class="bg-[#0a0a0a]/80 backdrop-blur-md border-b border-white/10 px-6 py-4 sticky top-0 z-[100]">
        <div class="max-w-[1600px] mx-auto flex items-center justify-between">

            <div class="flex items-center">
                <a href="/" class="flex items-center group">
                    <img src="{{ asset('images/Company Logo.png') }}" alt="ARKOD Logo" class="h-12 md:h-14 w-auto object-contain transition-transform group-hover:scale-105">
                    <div class="h-10 w-[2px] bg-yellow-400 mx-4 hidden md:block"></div>

                    <div x-data="{
                        texts: [
                            '{{ __('Welcome To Arkod Smart Logitech SDN. BHD') }}',
                            '{{ __('Innovative Solutions for Logistics') }}',
                            '{{ __('Efficiency & Innovation With Smart Logistics') }}'
                        ],
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

            <div class="hidden xl:flex items-center space-x-6">
                <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative py-2">
                    <button class="text-gray-300 hover:text-white text-sm font-semibold flex items-center space-x-1 uppercase tracking-wider transition">
                        <span>{{ __('Application') }}</span>
                        <svg :class="{'rotate-180': open}" class="w-4 h-4 text-yellow-400 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <div x-show="open" x-transition x-cloak class="absolute left-0 mt-2 w-56 bg-[#0f0f0f] border border-white/10 rounded-md shadow-2xl z-50 py-2">
                        <a href="/career" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">
                            {{ __('Career') }}
                        </a>
                        <a href="/agentapp" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">
                            {{ __('Agent Application') }}
                        </a>
                        <a href="/shippingschedule" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">
                            {{ __('Shipping Schedule') }}
                        </a>
                    </div>
                </div>

                <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative py-2">
                    <button class="text-gray-300 hover:text-white text-sm font-semibold flex items-center space-x-1 uppercase tracking-wider transition">
                        <span>{{ __('Blog') }}</span>
                        <svg :class="{'rotate-180': open}" class="w-4 h-4 text-yellow-400 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <div x-show="open" x-transition x-cloak class="absolute left-0 mt-2 w-64 bg-[#0f0f0f] border border-white/10 rounded-md shadow-2xl z-50 py-2">
                        <a href="/aboutus" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">
                            {{ __('About Us') }}
                        </a>
                        <a href="/newsandupdates" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">
                            {{ __('News & Updates') }}
                        </a>
                        <a href="/knowledge" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">
                            {{ __('Knowledge & Insights') }}
                        </a>
                    </div>
                </div>

                <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative py-2">
                    <button class="text-gray-300 hover:text-white text-sm font-semibold flex items-center space-x-1 uppercase tracking-wider transition">
                        <span>{{ __('Services') }}</span>
                        <svg :class="{'rotate-180': open}" class="w-4 h-4 text-yellow-400 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <div x-show="open" x-transition x-cloak class="absolute left-0 mt-2 w-56 bg-[#0f0f0f] border border-white/10 rounded-md shadow-2xl z-50 py-2">
                        <a href="/servicecarshipping" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">
                            {{ __('Vehicle Shipping') }}
                        </a>
                        <a href="/servicesdeliveryshipping" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">
                            {{ __('Delivery Shipping') }}
                        </a>
                        <a href="/servicescustomshipping" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">
                            {{ __('Custom Shipping') }}
                        </a>
                    </div>
                </div>

                <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative py-2">
                    <button class="text-gray-300 hover:text-white text-sm font-semibold flex items-center space-x-1 uppercase tracking-wider transition">
                        <span>{{ __('Help') }}</span>
                        <svg :class="{'rotate-180': open}" class="w-4 h-4 text-yellow-400 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <div x-show="open" x-transition x-cloak class="absolute left-0 mt-2 w-48 bg-[#0f0f0f] border border-white/10 rounded-md shadow-2xl z-50 py-2">
                        <a href="/helpcenter" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">
                            {{ __('Help Center') }}
                        </a>
                        <a href="/faq" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">
                            {{ __('FAQ') }}
                        </a>
                    </div>
                </div>

                <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative py-2">
                    <button class="text-gray-300 hover:text-white text-sm font-semibold flex items-center space-x-1 uppercase tracking-wider transition">
                        <span>{{ __('Community') }}</span>
                        <svg :class="{'rotate-180': open}" class="w-4 h-4 text-yellow-400 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <div x-show="open" x-transition x-cloak class="absolute left-0 mt-2 w-56 bg-[#0f0f0f] border border-white/10 rounded-md shadow-2xl z-50 py-2">
                        <a href="/membership" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">
                            {{ __('Membership') }}
                        </a>
                        <a href="/Community" class="block px-6 py-3 text-xs text-yellow-400 hover:text-white hover:bg-white/5 transition uppercase tracking-widest">
                            {{ __('Partnership') }}
                        </a>
                    </div>
                </div>

                <a href="#" class="text-white hover:text-yellow-400 text-sm font-bold transition uppercase tracking-wider whitespace-nowrap">
                    {{ __('Login') }}
                </a>

                <a href="#" class="bg-yellow-400 hover:bg-white text-black font-black px-5 py-3 rounded-md text-sm uppercase transition shadow-[0_4px_20px_rgba(250,204,21,0.3)] whitespace-nowrap">
                    {{ __('Sign Up') }}
                </a>

                <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative py-2">
                    <button class="flex items-center gap-1.5 text-gray-300 hover:text-yellow-400 transition-colors group">
                        <svg class="w-5 h-5 transition-transform group-hover:rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9h18" />
                        </svg>
                        <span class="text-xs font-bold uppercase tracking-widest">{{ strtoupper(app()->getLocale()) }}</span>
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

                        <a href="{{ url('lang/ms') }}" class="flex items-center justify-between px-6 py-3 text-[10px] text-white hover:bg-yellow-400 hover:text-black transition uppercase tracking-[0.2em] font-black border-t border-white/5">
                            Melayu <span class="text-[8px] opacity-50">MS</span>
                        </a>

                        <a href="{{ url('lang/zh') }}" class="flex items-center justify-between px-6 py-3 text-[10px] text-white hover:bg-yellow-400 hover:text-black transition uppercase tracking-[0.2em] font-black border-t border-white/5">
                            中文 <span class="text-[8px] opacity-50">ZH</span>
                        </a>
                    </div>
                </div>
            </div>

            <button @click="mobileOpen = !mobileOpen" class="xl:hidden text-white p-2 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <div class="xl:hidden" x-show="mobileOpen" x-cloak x-transition>
            <div class="mt-4 py-6 bg-[#0a0a0a] border-t border-white/10 px-4 space-y-4 text-base font-semibold uppercase tracking-wider max-h-[80vh] overflow-y-auto">

                <div x-data="{ mOpen: false }">
                    <button @click="mOpen = !mOpen" class="w-full flex justify-between items-center text-gray-300 hover:text-white py-2">
                        <span>{{ __('Application') }}</span>
                        <svg :class="{'rotate-180': mOpen}" class="w-4 h-4 text-yellow-400 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <div x-show="mOpen" x-transition class="pl-4 border-l border-white/10 space-y-2 mt-1">
                        <a href="/career" class="block py-2 text-sm text-yellow-400 hover:text-white">{{ __('Career') }}</a>
                        <a href="/agentapp" class="block py-2 text-sm text-yellow-400 hover:text-white">{{ __('Agent Application') }}</a>
                        <a href="/shippingschedule" class="block py-2 text-sm text-yellow-400 hover:text-white">{{ __('Shipping Schedule') }}</a>
                    </div>
                </div>

                <div x-data="{ mOpen: false }">
                    <button @click="mOpen = !mOpen" class="w-full flex justify-between items-center text-gray-300 hover:text-white py-2">
                        <span>{{ __('Blog') }}</span>
                        <svg :class="{'rotate-180': mOpen}" class="w-4 h-4 text-yellow-400 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <div x-show="mOpen" x-transition class="pl-4 border-l border-white/10 space-y-2 mt-1">
                        <a href="/aboutus" class="block py-2 text-sm text-yellow-400 hover:text-white">{{ __('About Us') }}</a>
                        <a href="/newsandupdates" class="block py-2 text-sm text-yellow-400 hover:text-white">{{ __('News & Updates') }}</a>
                        <a href="/knowledge" class="block py-2 text-sm text-yellow-400 hover:text-white">{{ __('Knowledge & Insights') }}</a>
                    </div>
                </div>

                <div x-data="{ mOpen: false }">
                    <button @click="mOpen = !mOpen" class="w-full flex justify-between items-center text-gray-300 hover:text-white py-2">
                        <span>{{ __('Services') }}</span>
                        <svg :class="{'rotate-180': mOpen}" class="w-4 h-4 text-yellow-400 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <div x-show="mOpen" x-transition class="pl-4 border-l border-white/10 space-y-2 mt-1">
                        <a href="/servicecarshipping" class="block py-2 text-sm text-yellow-400 hover:text-white">{{ __('Vehicle Shipping') }}</a>
                        <a href="/servicesdeliveryshipping" class="block py-2 text-sm text-yellow-400 hover:text-white">{{ __('Delivery Shipping') }}</a>
                        <a href="/servicescustomshipping" class="block py-2 text-sm text-yellow-400 hover:text-white">{{ __('Custom Shipping') }}</a>
                    </div>
                </div>

                <div x-data="{ mOpen: false }">
                    <button @click="mOpen = !mOpen" class="w-full flex justify-between items-center text-gray-300 hover:text-white py-2">
                        <span>{{ __('Help') }}</span>
                        <svg :class="{'rotate-180': mOpen}" class="w-4 h-4 text-yellow-400 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <div x-show="mOpen" x-transition class="pl-4 border-l border-white/10 space-y-2 mt-1">
                        <a href="/helpcenter" class="block py-2 text-sm text-yellow-400 hover:text-white">{{ __('Help Center') }}</a>
                        <a href="/faq" class="block py-2 text-sm text-yellow-400 hover:text-white">{{ __('FAQ') }}</a>
                    </div>
                </div>

                <div x-data="{ mOpen: false }">
                    <button @click="mOpen = !mOpen" class="w-full flex justify-between items-center text-gray-300 hover:text-white py-2">
                        <span>{{ __('Community') }}</span>
                        <svg :class="{'rotate-180': mOpen}" class="w-4 h-4 text-yellow-400 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <div x-show="mOpen" x-transition class="pl-4 border-l border-white/10 space-y-2 mt-1">
                    <a href="/membership" class="block py-2 text-sm text-yellow-400 hover:text-white">{{ __('Membership') }}</a>
                    <a href="/Community" class="block py-2 text-sm text-yellow-400 hover:text-white">{{ __('Partnership') }}</a></div>
                </div>

                <div class="pt-2 flex flex-col space-y-3">
                    <a href="#" class="block py-2 text-white hover:text-yellow-400 font-bold text-center border border-white/10 rounded-md">{{ __('Login') }}</a>

                    <a href="#" class="block bg-yellow-400 text-black text-center font-black py-3 rounded-md text-sm shadow-md">
                        {{ __('Sign Up') }}
                    </a>
                </div>

                <div class="border-t border-white/10 pt-4 mt-2">
                    <div class="text-[10px] text-gray-500 font-bold tracking-widest uppercase mb-2">{{ __('Select Language') }}</div>
                    <div class="grid grid-cols-3 gap-2 text-center text-xs">
                        <a href="{{ url('lang/en') }}" class="py-2.5 rounded border border-white/10 hover:bg-yellow-400 hover:text-black transition-colors {{ app()->getLocale() == 'en' ? 'bg-white/10 text-yellow-400 font-bold' : 'text-white' }}">EN</a>
                        <a href="{{ url('lang/ms') }}" class="py-2.5 rounded border border-white/10 hover:bg-yellow-400 hover:text-black transition-colors {{ app()->getLocale() == 'ms' ? 'bg-white/10 text-yellow-400 font-bold' : 'text-white' }}">MS</a>
                        <a href="{{ url('lang/zh') }}" class="py-2.5 rounded border border-white/10 hover:bg-yellow-400 hover:text-black transition-colors {{ app()->getLocale() == 'zh' ? 'bg-white/10 text-yellow-400 font-bold' : 'text-white' }}">ZH</a>
                    </div>
                </div>

            </div>
        </div>
    </nav>

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

    <!-- START: Terms & Policy Section -->
    <section class="bg-[#0a0a0a] text-white font-montserrat antialiased py-20 px-6 border-t border-white/5">
    <div class="max-w-[1200px] mx-auto">

        <!-- Section Header -->
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-black uppercase tracking-widest text-white mb-4">
                Terms & <span class="text-yellow-400">Policy</span>
            </h1>
            <div class="h-1 w-24 bg-yellow-400 mx-auto rounded-full mb-8"></div>
            <p class="text-gray-400 text-sm max-w-3xl mx-auto leading-relaxed">
                Please read these Terms and Conditions carefully before using the services offered by Arkod smart logistic network Sdn Bhd (“ARKOD”) or (“We”, “Us”, “Platform” or “Our”), a company incorporated under the laws of Malaysia. These terms set forth the legally binding terms and conditions for your use of Our Services as contained in <a href="http://www.arkod.com.my" class="text-yellow-400 hover:underline">http://www.arkod.com.my</a> (“Website”) (collectively with the site, referred to as “Services”).
            </p>
            <p class="text-gray-500 text-xs max-w-3xl mx-auto mt-4 italic">
                By accessing this site, you are indicating your acknowledgement and acceptance of these terms of use. These terms of use are subject to change by our company at any time in its discretion.
            </p>
        </div>

        <!-- Interactive Policy Container -->
        <div class="space-y-6">

            <!-- 1. Definitions and Interpretation -->
            <div x-data="{ open: false }" class="bg-[#0f0f0f] border border-white/10 rounded-lg overflow-hidden transition-all duration-300 hover:border-yellow-400/30">
                <button @click="open = !open" class="w-full flex items-center justify-between p-6 text-left group">
                    <h2 class="text-lg font-bold uppercase tracking-wider text-white group-hover:text-yellow-400 transition-colors">
                        1. Definitions and Interpretation
                    </h2>
                    <span class="text-yellow-400 transition-transform duration-300" :class="open ? 'rotate-180' : ''">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </span>
                </button>
                <div x-show="open" x-collapse class="p-6 pt-0 border-t border-white/5 text-gray-400 text-sm leading-relaxed space-y-3">
                    <ul class="list-none space-y-3">
                        <li><strong class="text-white font-semibold">Consignment</strong> – A parcel or a group of cargo sent to a single address.</li>
                        <li><strong class="text-white font-semibold">Consignee/Receiver/Recipient</strong> – The person who receives the consignment.</li>
                        <li><strong class="text-white font-semibold">Shipping Labels</strong> – The documentation placed on the parcel and invoice address.</li>
                        <li><strong class="text-white font-semibold">Third Party</strong> – The order placed through the site utilizing the account that ARKOD has with the carrier.</li>
                        <li><strong class="text-white font-semibold">Working Day</strong> – Monday to Friday from 9am to 5pm, except public holidays.</li>
                    </ul>
                </div>
            </div>

            <!-- 2. Application and Acceptance of the Terms -->
            <div x-data="{ open: false }" class="bg-[#0f0f0f] border border-white/10 rounded-lg overflow-hidden transition-all duration-300 hover:border-yellow-400/30">
                <button @click="open = !open" class="w-full flex items-center justify-between p-6 text-left group">
                    <h2 class="text-lg font-bold uppercase tracking-wider text-white group-hover:text-yellow-400 transition-colors">
                        2. Application and Acceptance of the Terms
                    </h2>
                    <span class="text-yellow-400 transition-transform duration-300" :class="open ? 'rotate-180' : ''">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </span>
                </button>
                <div x-show="open" x-collapse class="p-6 pt-0 border-t border-white/5 text-gray-400 text-sm leading-relaxed space-y-3">
                    <p>Your use of this site after modifications are implemented constitutes your acknowledgement and acceptance of the changes. ARKOD may amend any Terms at any time by posting the relevant amended and restated Terms on the Sites.</p>
                    <ul class="list-disc list-inside space-y-2 text-gray-400">
                        <li>Subject to compliance, we grant you a limited, non-exclusive, revocable, and non-transferable license to use the Platform.</li>
                        <li>You must not license, sub-license, sell, resell, modify, or reverse engineer the platform systems.</li>
                    </ul>
                </div>
            </div>

            <!-- 3. Use of Internet as Medium of Communication -->
            <div x-data="{ open: false }" class="bg-[#0f0f0f] border border-white/10 rounded-lg overflow-hidden transition-all duration-300 hover:border-yellow-400/30">
                <button @click="open = !open" class="w-full flex items-center justify-between p-6 text-left group">
                    <h2 class="text-lg font-bold uppercase tracking-wider text-white group-hover:text-yellow-400 transition-colors">
                        3. Use of Internet as Medium of Communication
                    </h2>
                    <span class="text-yellow-400 transition-transform duration-300" :class="open ? 'rotate-180' : ''">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </span>
                </button>
                <div x-show="open" x-collapse class="p-6 pt-0 border-t border-white/5 text-gray-400 text-sm leading-relaxed">
                    <p>You acknowledge that the internet is not a secure medium and information submitted for the Services hosted on Our Website may be accessed by third parties. ARKOD accepts no liability whatsoever in this circumstance.</p>
                </div>
            </div>

            <!-- 4. Services -->
            <div x-data="{ open: false }" class="bg-[#0f0f0f] border border-white/10 rounded-lg overflow-hidden transition-all duration-300 hover:border-yellow-400/30">
                <button @click="open = !open" class="w-full flex items-center justify-between p-6 text-left group">
                    <h2 class="text-lg font-bold uppercase tracking-wider text-white group-hover:text-yellow-400 transition-colors">
                        4. Services & Intermediary Provisions
                    </h2>
                    <span class="text-yellow-400 transition-transform duration-300" :class="open ? 'rotate-180' : ''">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </span>
                </button>
                <div x-show="open" x-collapse class="p-6 pt-0 border-t border-white/5 text-gray-400 text-sm leading-relaxed space-y-3">
                    <p>We offer a technology platform to provide information and a means for you to obtain services from Participating Providers. We act only as an intermediary between you and the Participating Provider(s)(Carrier) and we are not your agent.</p>
                    <ul class="list-disc list-inside space-y-2">
                        <li>ARKOD does not come into direct contact with the consignment/s but arranges the shipment through integrated networks.</li>
                        <li>The carrier has the right to refuse a consignment for given reasons such as insufficient packaging.</li>
                    </ul>
                </div>
            </div>

            <!-- 5. Prohibited Items & Items with limited liability -->
            <div x-data="{ open: false }" class="bg-[#0f0f0f] border border-white/10 rounded-lg overflow-hidden transition-all duration-300 hover:border-yellow-400/30">
                <button @click="open = !open" class="w-full flex items-center justify-between p-6 text-left group">
                    <h2 class="text-lg font-bold uppercase tracking-wider text-white group-hover:text-yellow-400 transition-colors">
                        5. Prohibited Items & Liability Terms
                    </h2>
                    <span class="text-yellow-400 transition-transform duration-300" :class="open ? 'rotate-180' : ''">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </span>
                </button>
                <div x-show="open" x-collapse class="p-6 pt-0 border-t border-white/5 text-gray-400 text-sm leading-relaxed space-y-4">
                    <div class="bg-yellow-400/10 border border-yellow-400/20 p-4 rounded text-yellow-400 text-xs uppercase tracking-wider font-bold">
                        Warning: No person carriage is permitted in cargo compartments for any distance or reason ever.
                    </div>
                    <p>Certain items are <strong class="text-white">Prohibited Items</strong> and cannot be sent by any of our services. If collected by a carrier, you are liable to be surcharged and your parcel returned with no refund.</p>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-xs bg-white/5 p-4 rounded border border-white/10">
                        <div>
                            <span class="text-yellow-400 font-bold uppercase tracking-wide block mb-2">Excluded Categories</span>
                            <ul class="list-disc list-inside space-y-1">
                                <li>Jewellery & Objects d’art</li>
                                <li>Currency & Documents</li>
                                <li>Rare metals & Unusual values</li>
                            </ul>
                        </div>
                        <div>
                            <span class="text-yellow-400 font-bold uppercase tracking-wide block mb-2">Weight and Capacity Restrictions</span>
                            <p>Shipments must not exceed limits gazetted by the Land Public Transport Commission (SPAD) and Road Transport Department (JPJ).</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 6. Collection & Delivery -->
            <div x-data="{ open: false }" class="bg-[#0f0f0f] border border-white/10 rounded-lg overflow-hidden transition-all duration-300 hover:border-yellow-400/30">
                <button @click="open = !open" class="w-full flex items-center justify-between p-6 text-left group">
                    <h2 class="text-lg font-bold uppercase tracking-wider text-white group-hover:text-yellow-400 transition-colors">
                        6. Collection & Delivery Parameters
                    </h2>
                    <span class="text-yellow-400 transition-transform duration-300" :class="open ? 'rotate-180' : ''">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </span>
                </button>
                <div x-show="open" x-collapse class="p-6 pt-0 border-t border-white/5 text-gray-400 text-sm leading-relaxed space-y-4">

                    <!-- East Malaysia Timings -->
                    <div class="border-l-2 border-yellow-400 pl-4 my-2">
                        <span class="text-white font-bold block uppercase tracking-wider text-xs">East Malaysia Operation Hours:</span>
                        <p class="text-xs text-gray-300">Monday to Saturday: 13:00 PM – 18:00 PM (Local Time)</p>
                        <p class="text-xs text-gray-500">Sunday & Public Holidays: OFF</p>
                    </div>

                    <p>Orders remain valid for only <span class="text-white font-semibold">seven (7) days</span> if partial collections occur. Overtime orders automatically cancel without refunds. Only standard BL/consignment notes generated by ARKOD are accepted.</p>

                    <!-- Surcharges & Structural Exclusions -->
                    <div class="bg-black border border-white/10 p-4 rounded space-y-2 text-xs">
                        <p><strong class="text-white">Waiting Time Limit:</strong> Mover allows exactly one (1) hour of waiting time for loading/unloading operations.</p>
                        <p><strong class="text-white">Large Items Policy:</strong> Furniture, washing machines, dryers, refrigerators, and massage chairs cannot be delivered on Sundays, Public Holidays, or precise customized times (e.g., before 5 PM / after 7 PM).</p>
                        <p><strong class="text-white">Staircase & Distance Fees:</strong> Surcharges apply for locations lacking functional lift capacities or handling situations exceeding <span class="text-yellow-400 font-bold">30 meters</span> from the unloading point (RM50 surcharge per item apply outside scope).</p>
                    </div>
                </div>
            </div>

            <!-- 7. International Shipment -->
            <div x-data="{ open: false }" class="bg-[#0f0f0f] border border-white/10 rounded-lg overflow-hidden transition-all duration-300 hover:border-yellow-400/30">
                <button @click="open = !open" class="w-full flex items-center justify-between p-6 text-left group">
                    <h2 class="text-lg font-bold uppercase tracking-wider text-white group-hover:text-yellow-400 transition-colors">
                        7. International Shipment & Customs Clearance
                    </h2>
                    <span class="text-yellow-400 transition-transform duration-300" :class="open ? 'rotate-180' : ''">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </span>
                </button>
                <div x-show="open" x-collapse class="p-6 pt-0 border-t border-white/5 text-gray-400 text-sm leading-relaxed space-y-3">
                    <p>Shipper shall pay or reimburse the cargo for all Shipment charges, ancillary charges, duties, and taxes owed for services provided by the forwarding agent. Customs charges must be paid in addition by the receiver when delivery is made.</p>
                    <div class="bg-yellow-400/5 p-4 rounded border border-yellow-400/10 text-xs">
                        <span class="text-white font-bold uppercase block mb-1">Under-Declaration Penalties:</span>
                        <p>If dimensions or weights are found to be under-declared during verification checkpoints, ARKOD reserves the absolute right to collect price discrepancies directly from registered credit cards and/or suspend the account indefinitely.</p>
                    </div>
                </div>
            </div>

        </div>

<!-- START: Terms & Policy Section Continuation (Sections 8 - 18) -->
        <div class="space-y-6 mt-6">

            <!-- 8. Payment & Surcharges, Refund & Cancellation -->
            <div x-data="{ open: false }" class="bg-[#0f0f0f] border border-white/10 rounded-lg overflow-hidden transition-all duration-300 hover:border-yellow-400/30">
                <button @click="open = !open" class="w-full flex items-center justify-between p-6 text-left group">
                    <h2 class="text-lg font-bold uppercase tracking-wider text-white group-hover:text-yellow-400 transition-colors">
                        8. Payment & Surcharges, Refund & Cancellation
                    </h2>
                    <span class="text-yellow-400 transition-transform duration-300" :class="open ? 'rotate-180' : ''">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </span>
                </button>
                <div x-show="open" x-collapse class="p-6 pt-0 border-t border-white/5 text-gray-400 text-sm leading-relaxed space-y-4">
                    <p class="text-xs text-gray-500 italic mb-2">Refer to policy text parameters:</p>
                    <p>It is generally free to use the Platform. Base rates and additional service costs are detailed on our Website/Platform. Pricing guidelines may be updated at our sole discretion without prior notice. All payments made under this clause are non-refundable unless agreed in writing.</p>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 my-2">
                        <div class="bg-black p-4 rounded border border-white/5">
                            <span class="text-white font-bold block text-xs uppercase tracking-wider mb-1 text-yellow-400">(b) Cash Payment Protocol</span>
                            <p class="text-xs text-gray-400">ARKOD does not encourage cash payments unless a special request is explicitly logged upon booking. All completed order fees must be settled directly between you and the carrier driver/mover. Any fee settlement disputes must be taken up with the carrier driver/mover directly.</p>
                        </div>
                        <div class="bg-black p-4 rounded border border-white/5">
                            <span class="text-white font-bold block text-xs uppercase tracking-wider mb-1 text-yellow-400">(c) Non-Cash Payment & Client Credits</span>
                            <p class="text-xs text-gray-400">Fees can be settled via credit card, approved payment gateways, or E-wallets. You authorize ARKOD to act as your paying agent. Fees may also be settled by deducting Client Credits from your Account E-wallet. Client Credits are non-transferable, non-refundable, and subject to expiration timelines posted on the Platform.</p>
                        </div>
                    </div>

                    <div class="bg-black p-4 rounded border border-white/5 text-xs">
                        <span class="text-white font-bold block uppercase tracking-wider mb-2 text-yellow-400">(iii) Deferred Settlement & (iv) Disruption Backup</span>
                        <p class="mb-2">ARKOD may allow fees to be settled within a specific time limit via aggregated invoicing. Full payment must be made no later than the specified due date. Default or late settlements entitle ARKOD to charge interest, recover recovery costs, and terminate or suspend your account. If non-cash channels become disrupted, you must immediately settle the completed order via cash to the provider or via online transfer to ARKOD smart logistic network sdn bhd.</p>
                    </div>

                    <div class="bg-white/5 p-4 rounded border border-white/10 text-xs space-y-2">
                        <span class="text-yellow-400 font-bold block uppercase tracking-widest">(v) Surcharges Specifications</span>
                        <ul class="list-none space-y-2 text-gray-300">
                            <li>• <strong class="text-white">I. Weight and Dimension:</strong> Entering weights/dimensions constitutes pre-payment. If the consignment is heavier/larger, additional charges will be billed to your account at ARKOD's normal rate.</li>
                            <li>• <strong class="text-white">II. Redelivery:</strong> Extra charges apply if the shipper or their representative is unavailable at the shipment venue during the allocated collection period.</li>
                            <li>• <strong class="text-white">III. Outskirt Areas:</strong> Shipments sent to or collected from remote areas will incur additional charges calculated directly in the quoting system during booking.</li>
                            <li>• <strong class="text-white">1–4. Reconsignments & Diversions:</strong> Requests must be made in writing or via phone call. Diversion prior to movement bears the original destination rate. Diversion en route is based on distance from origin to final destination via the diversion point. Shipments returned to origin are charged based on the most distant point traveled plus the mileage rate back to origin.</li>
                            <li>• <strong class="text-white">IV. Customs:</strong> Any customs charges arising during transit will be passed on to you in addition to pre-paid postage charges.</li>
                            <li>• <strong class="text-white">V. Additional Pickup / Drop-off (Stop-off):</strong> Governing rules allow stops in transit for partial loading/unloading inside participating provider scopes if weight, quantities, descriptions, and contact names are explicitly designated during booking. Additional stop-off services are assessed at the rate applicable from origin to stop-off and/or from one stop-off to another in addition to the original final destination charge.</li>
                        </ul>
                    </div>

                    <div class="border-t border-white/5 pt-4">
                        <span class="text-white font-semibold text-xs block mb-1 uppercase tracking-wider text-yellow-400">VI. Refund & Cancellation Rights</span>
                        <p class="text-xs mb-2">If a driver fails a collection due to traffic or address lookup failures, you can contact us to rearrange the pickup date. Alternatively, you may remind the courier for collection, rebook for a new courier (available after a second missed pickup), or cancel the shipment entirely to receive a refund of shipment fees.</p>
                        <p class="text-xs"><strong class="text-white">How to cancel?</strong> Orders can be canceled as long as the parcel is under "schedule in arrangement" or "pending for collection" by contacting customer support at <span class="text-yellow-400 font-mono">customersupport@arkod.com.my</span>.</p>
                    </div>
                </div>
            </div>

            <!-- 9. Risk/Delay/Damage/Loss -->
            <div x-data="{ open: false }" class="bg-[#0f0f0f] border border-white/10 rounded-lg overflow-hidden transition-all duration-300 hover:border-yellow-400/30">
                <button @click="open = !open" class="w-full flex items-center justify-between p-6 text-left group">
                    <h2 class="text-lg font-bold uppercase tracking-wider text-white group-hover:text-yellow-400 transition-colors">
                        9. Risk / Delay / Damage / Loss Liability Matrix
                    </h2>
                    <span class="text-yellow-400 transition-transform duration-300" :class="open ? 'rotate-180' : ''">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </span>
                </button>
                <div x-show="open" x-collapse class="p-6 pt-0 border-t border-white/5 text-gray-400 text-sm leading-relaxed space-y-4">
                    <ul class="list-disc list-inside space-y-2 text-xs">
                        <li>Any item listed in our prohibited items list is fully exempted from claims against delay, damage, and loss.</li>
                        <li>Consignments must be packed to professional standards in double-walled boxes with external/internal padding, otherwise claims are rejected. All packaging must be kept intact for state inspection at the delivery address.</li>
                        <li>Items must be robust enough to withstand short drops; items damaged by falls while outer packaging remains completely intact will be declined.</li>
                        <li>If the box or packaging is visibly compromised on delivery, the recipient MUST sign for the goods as <span class="text-yellow-400 font-bold uppercase font-mono">'DAMAGED'</span>, or the claim is void.</li>
                    </ul>

                    <!-- Provider Matrix Table from image_797ae3.png -->
                    <div class="overflow-x-auto my-4 border border-white/10 rounded">
                        <table class="w-full text-left border-collapse text-xs">
                            <thead>
                                <tr class="bg-white/5 text-yellow-400 uppercase tracking-wider border-b border-white/10">
                                    <th class="p-3 font-bold">Participating Provider</th>
                                    <th class="p-3 font-bold">Lost/Damaged Goods Reporting Time Frame</th>
                                    <th class="p-3 font-bold">Weight Scope</th>
                                    <th class="p-3 font-bold">Max Cover Limit</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-white/5 text-gray-300">
                                <tr class="hover:bg-white/[0.02] transition">
                                    <td class="p-3 font-semibold text-white">Agent A</td>
                                    <td class="p-3">Item lost – 48 hours</td>
                                    <td class="p-3">100 kg</td>
                                    <td class="p-3 text-yellow-400 font-mono">Rm 300</td>
                                </tr>
                                <tr class="hover:bg-white/[0.02] transition">
                                    <td class="p-3 font-semibold text-white">Agent B</td>
                                    <td class="p-3">Damaged – 48/24 hours</td>
                                    <td class="p-3">100kg below</td>
                                    <td class="p-3 text-yellow-400 font-mono">Rm 300</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-xs text-gray-500">Please state your ARKOD order/tracking number alongside a comprehensive claim description. Allow up to 3 working days for claim review workflows before contact.</p>
                </div>
            </div>

            <!-- 10. Late Deliveries -->
            <div x-data="{ open: false }" class="bg-[#0f0f0f] border border-white/10 rounded-lg overflow-hidden transition-all duration-300 hover:border-yellow-400/30">
                <button @click="open = !open" class="w-full flex items-center justify-between p-6 text-left group">
                    <h2 class="text-lg font-bold uppercase tracking-wider text-white group-hover:text-yellow-400 transition-colors">
                        10. Late Deliveries
                    </h2>
                    <span class="text-yellow-400 transition-transform duration-300" :class="open ? 'rotate-180' : ''">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </span>
                </button>
                <div x-show="open" x-collapse class="p-6 pt-0 border-t border-white/5 text-gray-400 text-sm leading-relaxed space-y-3">
                    <p><strong class="text-white text-xs">10.1</strong> — If Participating Providers are delayed or prevented from executing services due to strikes, lockouts, labor disputes, weather conditions, traffic congestion, mechanical breakdown, or road obstructions, you shall hold no claim for damages against us. For vehicle breakdowns, providers will use best endeavors to supply a backup unit with minimum delay.</p>
                    <p><strong class="text-white text-xs">10.2</strong> — ARKOD accepts zero liability for late or missed deliveries caused or contributed to by deficient or ambiguous consignment labeling. Clear labeling remains the responsibility of the customer.</p>
                </div>
            </div>

            <!-- 11. Special Request for Extra Manpower, Mover or Installer -->
            <div x-data="{ open: false }" class="bg-[#0f0f0f] border border-white/10 rounded-lg overflow-hidden transition-all duration-300 hover:border-yellow-400/30">
                <button @click="open = !open" class="w-full flex items-center justify-between p-6 text-left group">
                    <h2 class="text-lg font-bold uppercase tracking-wider text-white group-hover:text-yellow-400 transition-colors">
                        11. Special Request for Extra Manpower, Mover or Installer
                    </h2>
                    <span class="text-yellow-400 transition-transform duration-300" :class="open ? 'rotate-180' : ''">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </span>
                </button>
                <div x-show="open" x-collapse class="p-6 pt-0 border-t border-white/5 text-gray-400 text-sm leading-relaxed space-y-4">

                    <div class="space-y-3">
                        <h3 class="text-white font-bold text-xs uppercase tracking-wider text-yellow-400">Manpower Only Service</h3>
                        <ul class="list-disc list-inside space-y-2 text-xs">
                            <li>Available exclusively upon request and strictly limited to town areas, subject to availability.</li>
                            <li>Carries a minimum charge of <span class="text-white font-bold font-mono">RM120.00</span> for manpower transportation, alongside a minimum work fee of <span class="text-white font-bold font-mono">RM120.00</span> per person. Working hours are strictly from <span class="text-white">9AM – 5PM</span> (inclusive of break hour). Additional tasks like assembly or wrapping follow website rates.</li>
                            <li>
                                <strong class="text-white">Long Push Surcharge Framework:</strong> Applies if movers push/carry goods from outside a building into the entrance, or up staircases without lifts:
                                <div class="mt-2 grid grid-cols-1 sm:grid-cols-2 gap-2 font-mono text-yellow-400">
                                    <div class="bg-black p-2 rounded border border-white/5">50 – 100 Meters: RM50 per manpower</div>
                                    <div class="bg-black p-2 rounded border border-white/5">101 – 150 Meters: RM100 per manpower</div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="space-y-2 pt-2 border-t border-white/5">
                        <h3 class="text-white font-bold text-xs uppercase tracking-wider text-yellow-400">Installation Service</h3>
                        <p class="text-xs">ARKOD does not provide direct installation services; we only arrange third-party installers as a value-added convenience. Basic installation covers standard furniture and bedding sets, but completely excludes wall mounting or brackets. An installation fee of <span class="text-yellow-400 font-bold font-mono">RM50 surcharge / item</span> applies directly to stacking kit installation for individual Dryers. Complex large appliances requiring technical assembly are outsourced via 3rd party providers for a reasonable fee.</p>
                    </div>
                </div>
            </div>

            <!-- 12. Limited Liability & Disclaimers -->
            <div x-data="{ open: false }" class="bg-[#0f0f0f] border border-white/10 rounded-lg overflow-hidden transition-all duration-300 hover:border-yellow-400/30">
                <button @click="open = !open" class="w-full flex items-center justify-between p-6 text-left group">
                    <h2 class="text-lg font-bold uppercase tracking-wider text-white group-hover:text-yellow-400 transition-colors">
                        12. Limited Liability & Disclaimers
                    </h2>
                    <span class="text-yellow-400 transition-transform duration-300" :class="open ? 'rotate-180' : ''">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </span>
                </button>
                <div x-show="open" x-collapse class="p-6 pt-0 border-t border-white/5 text-gray-400 text-sm leading-relaxed space-y-3">
                    <p>The Platform/Website is provided to you strictly on an <span class="text-white">“as is”</span> basis, without guarantees regarding device compatibility or error-free, malware-free performance. Any quoted pickup or delivery times are rough estimates only; ARKOD carries zero liability if an actual route window exceeds estimates.</p>

                    <div class="bg-black p-4 rounded border-l-2 border-yellow-400 text-xs space-y-2 text-gray-300">
                        <p>• <strong class="text-white">Insurance Coverage:</strong> Appropriate insurance coverage for valuable or unique items remains the client's sole responsibility. Transit cover applies strictly per consignment only, not per individual parcel within a multi-parcel booking. Prohibited items are entirely exempt from liability cover.</p>
                        <p>• <strong class="text-white">Account Allocation Restrictions:</strong> Every individual is allowed a maximum of <span class="text-white font-mono font-bold">ONE personal</span> and <span class="text-white font-mono font-bold">ONE company account</span>. Duplicated accounts trigger immediate cancellation and suspension without notice. Cargo linked to suspended accounts will be held at headquarters—unclaimed parcels exceeding <span class="text-yellow-400 font-bold">30 days</span> are disposed of without claim recourse.</p>
                        <p>• <strong class="text-white">Force Majeure Exclusions:</strong> Loss or damage linked to an Act of God, consequences of war, insufficient packaging, or incorrect labeling will not be covered under any condition.</p>
                        <p>• <strong class="text-white">Indirect Damages:</strong> Liability is strictly restricted to the sending cost of the item and the explicit insured value. All special, indirect, or consequential damages (including lost profits, interest, income, or administrative disappointment) are fully excluded. Aggregate liability shall in no event exceed the Max Liability Amount.</p>
                    </div>
                </div>
            </div>

            <!-- 13. Modification of Terms and the Services -->
            <div x-data="{ open: false }" class="bg-[#0f0f0f] border border-white/10 rounded-lg overflow-hidden transition-all duration-300 hover:border-yellow-400/30">
                <button @click="open = !open" class="w-full flex items-center justify-between p-6 text-left group">
                    <h2 class="text-lg font-bold uppercase tracking-wider text-white group-hover:text-yellow-400 transition-colors">
                        13. Modification of Terms and the Services
                    </h2>
                    <span class="text-yellow-400 transition-transform duration-300" :class="open ? 'rotate-180' : ''">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </span>
                </button>
                <div x-show="open" x-collapse class="p-6 pt-0 border-t border-white/5 text-gray-400 text-sm leading-relaxed">
                    <p>We may, at our sole discretion, modify, amend, or replace any portion of these Terms or suspend features of the Platform at any time by posting notice directly on our Website or Platform. It remains your personal responsibility to review these Terms regularly. Continued access to the Services after postings are implemented legally constitutes your absolute acceptance of the changes. Using services inside an Alternate Region subjects you to the terms prevailing in that specific territory.</p>
                </div>
            </div>

            <!-- 14. Personal Data and Privacy -->
            <div x-data="{ open: false }" class="bg-[#0f0f0f] border border-white/10 rounded-lg overflow-hidden transition-all duration-300 hover:border-yellow-400/30">
                <button @click="open = !open" class="w-full flex items-center justify-between p-6 text-left group">
                    <h2 class="text-lg font-bold uppercase tracking-wider text-white group-hover:text-yellow-400 transition-colors">
                        14. Personal Data and Privacy
                    </h2>
                    <span class="text-yellow-400 transition-transform duration-300" :class="open ? 'rotate-180' : ''">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </span>
                </button>
                <div x-show="open" x-collapse class="p-6 pt-0 border-t border-white/5 text-gray-400 text-sm leading-relaxed">
                    <p>The collection, use, secure storage, processing, and backend transfer of your personal data remain fully subject to our standard Privacy Policy posted on our Website. This framework is completely incorporated by reference into these binding Terms. Continued use of our Platform tracking or booking structures establishes validation and consent to data adjustments across all applicable operational regions.</p>
                </div>
            </div>

            <!-- 15. Miscellaneous -->
            <div x-data="{ open: false }" class="bg-[#0f0f0f] border border-white/10 rounded-lg overflow-hidden transition-all duration-300 hover:border-yellow-400/30">
                <button @click="open = !open" class="w-full flex items-center justify-between p-6 text-left group">
                    <h2 class="text-lg font-bold uppercase tracking-wider text-white group-hover:text-yellow-400 transition-colors">
                        15. Miscellaneous Rules
                    </h2>
                    <span class="text-yellow-400 transition-transform duration-300" :class="open ? 'rotate-180' : ''">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </span>
                </button>
                <div x-show="open" x-collapse class="p-6 pt-0 border-t border-white/5 text-gray-400 text-sm leading-relaxed space-y-2 text-xs">
                    <p>• <strong class="text-white">(a) Assignment Restrictions:</strong> You are barred from transferring or assigning your rights/obligations under these Terms without prior written approval from ARKOD. ARKOD may transfer or assign its rights to any third party and will issue notice. Continuing to use the platform following assignment notices implies consent.</p>
                    <p>• <strong class="text-white">(b) Communications:</strong> Notices may be dispatched via general updates on the Platform, direct email to your registered address, or postal mail.</p>
                    <p>• <strong class="text-white">(c) Severability:</strong> If any isolated provision is rendered completely void, illegal, or legally unenforceable by a court, the validity, legality, and enforceability of the remaining operational provisions shall not be affected.</p>
                </div>
            </div>

            <!-- 16. Written Agreement shall Supersede these Terms -->
            <div x-data="{ open: false }" class="bg-[#0f0f0f] border border-white/10 rounded-lg overflow-hidden transition-all duration-300 hover:border-yellow-400/30">
                <button @click="open = !open" class="w-full flex items-center justify-between p-6 text-left group">
                    <h2 class="text-lg font-bold uppercase tracking-wider text-white group-hover:text-yellow-400 transition-colors">
                        16. Written Agreement Supremacy
                    </h2>
                    <span class="text-yellow-400 transition-transform duration-300" :class="open ? 'rotate-180' : ''">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </span>
                </button>
                <div x-show="open" x-collapse class="p-6 pt-0 border-t border-white/5 text-gray-400 text-sm leading-relaxed">
                    <p>These generalized terms apply universally to all digital service platform users. However, in specific scenarios where ARKOD has entered into an independent, signed written contract with you, the explicit terms within that written contract will completely prevail if any textual discrepancies or legal contradictions are identified.</p>
                </div>
            </div>

            <!-- 17. Closure of Account -->
            <div x-data="{ open: false }" class="bg-[#0f0f0f] border border-white/10 rounded-lg overflow-hidden transition-all duration-300 hover:border-yellow-400/30">
                <button @click="open = !open" class="w-full flex items-center justify-between p-6 text-left group">
                    <h2 class="text-lg font-bold uppercase tracking-wider text-white group-hover:text-yellow-400 transition-colors">
                        17. Closure of Account
                    </h2>
                    <span class="text-yellow-400 transition-transform duration-300" :class="open ? 'rotate-180' : ''">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </span>
                </button>
                <div x-show="open" x-collapse class="p-6 pt-0 border-t border-white/5 text-gray-400 text-sm leading-relaxed">
                    <p>Account holders may completely close their corporate or personal ARKOD account at any time in accordance with the standard legal rules outlined in our "Closure of account" clause. The terminating party must completely clear all remaining financial charges, lingering dispute fees, or administrative penalties upon contract termination. Final account closure processes may be subject to specialized administrative fees.</p>
                </div>
            </div>

            <!-- 18. GOVERNING LAW -->
            <div x-data="{ open: false }" class="bg-[#0f0f0f] border border-white/10 rounded-lg overflow-hidden transition-all duration-300 hover:border-yellow-400/30">
                <button @click="open = !open" class="w-full flex items-center justify-between p-6 text-left group">
                    <h2 class="text-lg font-bold uppercase tracking-wider text-white group-hover:text-yellow-400 transition-colors">
                        18. GOVERNING LAW & COURT JURISDICTION
                    </h2>
                    <span class="text-yellow-400 transition-transform duration-300" :class="open ? 'rotate-180' : ''">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </span>
                </button>
                <div x-show="open" x-collapse class="p-6 pt-0 border-t border-white/5 text-gray-400 text-sm leading-relaxed">
                    <p class="border-l-2 border-yellow-400 pl-4 bg-yellow-400/5 p-4 rounded text-xs text-white">
                        These structural Terms and Conditions shall be fully governed by, structured under, and interpreted strictly in accordance with <strong class="text-yellow-400 uppercase tracking-wide">Malaysian Law</strong>. All interacting contract parties irrevocably and completely submit to the absolute and exclusive jurisdiction of the <strong class="text-white">Malaysian Courts</strong> to resolve any legal disputes or arbitration requirements.
                    </p>
                </div>
            </div>

        </div>
        <!-- END: Terms & Policy Section Continuation (Sections 8 - 18) -->
        <!-- Footer Notice -->
        <div class="mt-12 text-center text-xs text-gray-500">
            © 2026 Arkod Smart Logistic Network Sdn Bhd. All Rights Reserved. Fully compliant with SPAD & JPJ weight regulations.
        </div>
    </div>
</section>
<!-- END: Terms & Policy Section -->
<footer class="bg-black text-white pt-12 md:pt-16 pb-8 md:pb-12 px-4 sm:px-8 font-sans">
    <div class="max-w-[1400px] mx-auto">
        <div class="w-full h-[2px] bg-white mb-8 md:mb-12"></div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-x-8 gap-y-8 md:gap-y-12 mb-12 md:mb-16">

            <div class="text-left">
                <h4 class="text-[20px] md:text-[24px] font-bold mb-3 md:mb-5">{{ __('Logistics Solutions') }}</h4>
                <ul class="space-y-2 md:space-y-3 text-[16px] md:text-[20px] font-medium text-white/90">
                    <li><a>{{ __('Pickup & Delivery') }}</a></li>
                    <li><a>{{ __('Sea Freight') }}</a></li>
                    <li><a>{{ __('Air Freight') }}</a></li>
                </ul>
                <h4 class="text-[20px] md:text-[24px] font-bold mt-8 md:mt-12 mb-3 md:mb-5">{{ __('Warehousing Solution') }}</h4>
                <ul class="text-[16px] md:text-[20px] font-medium text-white/90">
                    <li><a href="#" class="hover:text-yellow-500 transition">{{ __('Warehousing') }}</a></li>
                </ul>
            </div>

            <div class="text-left">
                <h4 class="text-[20px] md:text-[24px] font-bold mb-3 md:mb-5">{{ __('Company') }}</h4>
                <ul class="space-y-2 md:space-y-3 text-[16px] md:text-[20px] font-medium text-white/90">
                    <li><a href="/aboutus" class="hover:text-yellow-500 transition">{{ __('About Us') }}</a></li>
                    <li><a href="/aboutus" class="hover:text-yellow-500 transition">{{ __('Blog') }}</a></li>
                    <li><a href="/career" class="hover:text-yellow-500 transition">{{ __('Careers') }}</a></li>
                    <li><a href="/helpcenter" class="hover:text-yellow-500 transition">{{ __('Partners') }}</a></li>
                    <li><a>{{ __('Cookies, Legal & Privacy Policies') }}</a></li>
                    <li><a href="/termspolicy" class="hover:text-yellow-500 transition">{{ __('Terms and Conditions') }}</a></li>
                </ul>
            </div>

            <div class="text-left">
                <h4 class="text-[20px] md:text-[24px] font-bold mb-3 md:mb-5">{{ __('Policies') }}</h4>
                <ul class="space-y-2 md:space-y-3 text-[16px] md:text-[20px] font-medium text-white/90">
                    <li><a href="/shippingpolicy" class="hover:text-yellow-500 transition">{{ __('Shipping Policies') }}</a></li>
                    <li><a href="/cancelationpolicy" class="hover:text-yellow-500 transition">{{ __('Cancellation & Refund Policies') }}</a></li>
                    <li><a href="/termspolicy" class="hover:text-yellow-500 transition">{{ __('Terms & Policies') }}</a></li>
                </ul>
            </div>

            <div class="flex flex-col items-start lg:items-end lg:text-right">
                <div class="mb-8 md:mb-14">
                    <h4 class="text-[20px] md:text-[24px] font-bold mb-3 md:mb-5">{{ __('Support') }}</h4>
                    <ul class="space-y-2 md:space-y-3 text-[16px] md:text-[20px] font-medium text-white/90">
                        <li><a href="/helpcenter" class="hover:text-yellow-500 transition">{{ __('Contact Us') }}</a></li>
                        <li><a href="/faq" class="hover:text-yellow-500 transition">{{ __('FAQ') }}</a></li>
                    </ul>
                </div>

                <div class="flex flex-col items-start lg:items-end">
                    <h4 class="text-lg md:text-[24px] font-bold mb-3 md:mb-4 tracking-tight uppercase">{{ __('ARKOD SMART LOGITECH') }}</h4>
                    <div class="flex gap-3 md:gap-4">
                        <a href="https://www.linkedin.com/company/arkod-smart-logitech-sdn-bhd" target="_blank" rel="noopener noreferrer" class="hover:opacity-75 transition text-white">
                            <svg class="w-6 h-6 md:w-8 md:h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a2.7 2.7 0 0 0-2.7-2.7c-1.2 0-1.8.7-2.1 1.2v-1h-3.3v10h3.3v-5.6c0-.3 0-.6.1-.8.2-.5.6-.9 1.2-.9 1 0 1.2.8 1.2 1.9v5.4h3.3M7 19h3.3V9H7v10m1.6-11.3c1.1 0 1.9-.8 1.9-1.9 0-1.1-.8-1.9-1.9-1.9-1.1 0-1.9.8-1.9 1.9 0 1.1.8 1.9 1.9 1.9Z"/></svg>
                        </a>
                        <a href="https://www.instagram.com/arkodsmartlogitech/" target="_blank" rel="noopener noreferrer" class="hover:opacity-75 transition text-white">
                            <svg class="w-6 h-6 md:w-8 md:h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8A3.6 3.6 0 0 0 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6A3.6 3.6 0 0 0 16.4 4H7.6m9.65 1.5a1.25 1.25 0 1 1 0 2.5 1.25 1.25 0 0 1 0-2.5M12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10m0 2a3 3 0 1 0 0 6 3 3 0 0 0 0-6Z"/></svg>
                        </a>
                        <a href="https://www.youtube.com/@ArkodSmartLogitech" target="_blank" rel="noopener noreferrer" class="hover:opacity-75 transition text-white">
                            <svg class="w-7 h-7 md:w-9 md:h-9 -mt-0.5" fill="currentColor" viewBox="0 0 24 24"><path d="M10 15l5.19-3L10 9v6m11.56-7.83c.13.47.22 1.1.28 1.9.07.8.1 1.49.1 2.09L22 12c0 2.19-.16 3.8-.44 4.83-.25.9-.83 1.48-1.73 1.73-.47.13-1.33.22-2.65.28-1.3.07-2.49.1-3.59.1L12 5c4.19 0 6.8.16 7.83.44.9.25 1.48.83 1.73 1.73Z"/></svg>
                        </a>
                        <a href="https://www.facebook.com/arkodsmartlogitech/" target="_blank" rel="noopener noreferrer" class="hover:opacity-75 transition text-white">
                            <svg class="w-6 h-6 md:w-8 md:h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.04c-5.5 0-10 4.49-10 10.02 0 5 3.66 9.15 8.44 9.9V15.36H7.72v-3.3h2.72v-2.52c0-2.68 1.59-4.16 4.03-4.16 1.17 0 2.39.21 2.39.21v2.62h-1.35c-1.33 0-1.74.83-1.74 1.68v2.01h2.96l-.47 3.3h-2.49v6.6c4.78-.75 8.44-4.9 8.44-9.9 0-5.53-4.5-10.02-10-10.02Z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full h-[2px] bg-white mb-6 md:mb-8"></div>

        <div class="flex flex-col items-center justify-center space-y-4 md:space-y-8">
            <p class="text-[11px] md:text-[14px] font-bold tracking-[0.3em] uppercase text-center">© ARKOD 2026. {{ __('ALL RIGHTS RESERVED') }}</p>

            <div class="flex flex-col sm:flex-row flex-wrap justify-center items-center gap-y-3 gap-x-6 md:gap-x-12">
                <div class="flex items-center gap-2 md:gap-3">
                    <svg class="w-5 h-5 md:w-7 md:h-7 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12.01 2.01c-5.52 0-10 4.48-10 10 0 1.75.46 3.4 1.26 4.83L2 22l5.3-1.26c1.37.75 2.93 1.17 4.58 1.17a10 10 0 0010-10c0-5.52-4.48-10-10-10zm5.97 14.24c-.24.68-1.22 1.25-1.7 1.33-.43.07-.98.11-2.91-.68-2.47-1.01-4.06-3.53-4.18-3.7-.12-.16-1-1.33-1-2.54 0-1.21.63-1.8 1.21-1.8s.5.12.75.12c.24 0 .44-.04.63.4.19.46.65 1.59.71 1.71.06.12.1.26.02.42-.08.16-.12.26-.25.42-.12.16-.27.36-.39.48-.13.13-.27.27-.12.52.16.25.7 1.15 1.5 1.86.64.58 1.18.76 1.44.89.26.13.41.11.57-.07s.66-.77.83-1.04c.17-.26.34-.22.58-.13s1.51.71 1.77.84.44.19.51.3c.06.11.06.66-.18 1.34z"/></svg>
                    <span class="text-[13px] md:text-[17px] font-bold text-white transition">+60 18-911 6168</span>
                </div>
                <div class="flex items-center gap-2 md:gap-3">
                    <svg class="w-4 h-4 md:w-6 md:h-6 text-white" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    <span class="text-[13px] md:text-[17px] font-bold text-white transition">082-384 999</span>
                </div>
                <div class="flex items-center gap-2 md:gap-3">
                    <svg class="w-5 h-5 md:w-7 md:h-7 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
                    <span class="text-[13px] md:text-[17px] font-bold text-white lowercase tracking-tight break-all text-center">customersupport@arkod.com.my</span>
                </div>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
