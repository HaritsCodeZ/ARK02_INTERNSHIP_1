<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARKOD | Terms And Conditions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700;900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        [x-cloak] { display: none !important; }

        .bg-grid-pattern {
            background-image:
                linear-gradient(to right, #facc15 1px, transparent 1px),
                linear-gradient(to bottom, #facc15 1px, transparent 1px);
            background-size: 40px 40px;
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

    {{-- Hero --}}
    <section class="relative min-h-[45vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(at_center,#facc1530_0%,transparent_70%)]"></div>
        <div class="absolute inset-0 bg-grid-pattern opacity-5"></div>

        <div class="relative z-10 max-w-[1600px] mx-auto px-6 text-center">
            <div class="inline-flex items-center gap-3 px-8 py-4 bg-black/60 border border-yellow-400/40 backdrop-blur-xl rounded-3xl mb-8">
                <span class="text-3xl">📜</span>
                <span class="text-yellow-400 font-black uppercase tracking-[0.4em] text-sm">LEGAL DOCUMENT</span>
            </div>

            <h1 class="text-5xl md:text-6xl lg:text-7xl font-black uppercase tracking-[-0.04em] leading-tight mb-6">
                TERMS &amp; <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 via-yellow-400 to-amber-500">CONDITIONS</span>
            </h1>
            <p class="text-lg text-gray-400">Car Shipping Services</p>
        </div>
    </section>

    {{-- Terms Content --}}
    <section class="py-5 bg-[#0a0a0a]">
        <div class="max-w-4xl mx-auto px-6 md:px-8">
            <div class="space-y-14">
                <ol class="space-y-12 list-none">
                    <!-- i -->
                <li class="relative pl-12 border-l-4 border-yellow-400/30 hover:border-yellow-400 transition-colors group">
                    <span class="absolute -left-3 top-0 w-8 h-8 rounded-2xl bg-yellow-400 text-black font-black flex items-center justify-center text-xl group-hover:scale-110 transition">1</span>
                    <strong>The above rates are based on the vehicle details and information provided by the client.</strong>
                </li>

                <!-- ii -->
                <li class="relative pl-12 border-l-4 border-yellow-400/30 hover:border-yellow-400 transition-colors group">
                    <span class="absolute -left-3 top-0 w-8 h-8 rounded-2xl bg-yellow-400 text-black font-black flex items-center justify-center text-xl group-hover:scale-110 transition">2</span>
                    <strong>Delivery timelines are tentative</strong> and subject to change due to unforeseen delays (e.g., weather, congestion, port operations, or customs clearance).
                </li>

                <!-- iii -->
                <li class="relative pl-12 border-l-4 border-yellow-400/30 hover:border-yellow-400 transition-colors group">
                    <span class="absolute -left-3 top-0 w-8 h-8 rounded-2xl bg-yellow-400 text-black font-black flex items-center justify-center text-xl group-hover:scale-110 transition">3</span>
                    <strong>The freight charges quoted apply to standard vehicle shipping only</strong> and do not cover perishable, hazardous, or dangerous cargo.
                </li>

                <!-- iv -->
                <li class="relative pl-12 border-l-4 border-yellow-400/30 hover:border-yellow-400 transition-colors group">
                    <span class="absolute -left-3 top-0 w-8 h-8 rounded-2xl bg-yellow-400 text-black font-black flex items-center justify-center text-xl group-hover:scale-110 transition">4</span>
                    <strong>Quoted charges exclude additional costs</strong> such as heavy lifting, towing (if the vehicle is not in running condition), forklift use, storage, inspection, or warehouse charges (if any).
                </li>

                <!-- v. Car Shipping Conditions -->
                <li class="relative pl-12 border-l-4 border-yellow-400/30 hover:border-yellow-400 transition-colors group">
                    <span class="absolute -left-3 top-0 w-8 h-8 rounded-2xl bg-yellow-400 text-black font-black flex items-center justify-center text-xl group-hover:scale-110 transition">5</span>
                    <div class="bg-gradient-to-br from-zinc-900 to-black border border-yellow-400/20 rounded-3xl p-8">
                        <h3 class="text-yellow-400 font-black uppercase tracking-widest mb-6 text-lg">🚗 Car Shipping Conditions</h3>
                        <ul class="space-y-4 text-gray-300">
                            <li class="flex gap-3"><span class="text-yellow-400 mt-0.5">a.</span> The shipper is responsible for ensuring the vehicle is prepared for loading, including sufficient fuel, proper condition, and removal of personal belongings.</li>
                            <li class="flex gap-3"><span class="text-yellow-400 mt-0.5">b.</span> Personal belongings are not permitted in the shipped vehicle under any circumstances.</li>
                            <li class="flex gap-3"><span class="text-yellow-400 mt-0.5">c.</span> Please wash your car and conduct a walkaround inspection to record pre-existing conditions (dents, scratches, paint chips, discoloration, etc.) and provide a copy of this record for reference.</li>
                            <li class="flex gap-3"><span class="text-yellow-400 mt-0.5">d.</span> Perform necessary maintenance before shipping (e.g., tire pressure, battery charge).</li>
                            <li class="flex gap-3"><span class="text-yellow-400 mt-0.5">e.</span> Ensure at least 30% fuel in the tank – enough to drive the vehicle on and off the vessel and for delivery at the destination.</li>
                            <li class="flex gap-3"><span class="text-yellow-400 mt-0.5">f.</span> Send your car ready for pick-up after the booking date closes, or at least five (5) days before the shipping date (excluding Sundays and Public Holidays).</li>
                        </ul>
                    </div>
                </li>

                <!-- vi -->
                <li class="relative pl-12 border-l-4 border-yellow-400/30 hover:border-yellow-400 transition-colors group">
                    <span class="absolute -left-3 top-0 w-8 h-8 rounded-2xl bg-yellow-400 text-black font-black flex items-center justify-center text-xl group-hover:scale-110 transition">6</span>
                    <strong>Sailing Schedule (ETA/ETD) is tentative</strong> and subject to change depending on port space, availability, and weather conditions.
                </li>

                <!-- vii -->
                <li class="relative pl-12 border-l-4 border-yellow-400/30 hover:border-yellow-400 transition-colors group">
                    <span class="absolute -left-3 top-0 w-8 h-8 rounded-2xl bg-yellow-400 text-black font-black flex items-center justify-center text-xl group-hover:scale-110 transition">7</span>
                    <strong>If the vehicle encounters problems during loading</strong> (unable to start or breakdown condition), towing in/out of the vessel will be required and charged separately.
                </li>

                <!-- viii. Time Limits for Claims -->
                <li class="relative pl-12 border-l-4 border-yellow-400/30 hover:border-yellow-400 transition-colors group">
                    <span class="absolute -left-3 top-0 w-8 h-8 rounded-2xl bg-yellow-400 text-black font-black flex items-center justify-center text-xl group-hover:scale-110 transition">8</span>
                    <div class="bg-gradient-to-br from-zinc-900 to-black border border-yellow-400/20 rounded-3xl p-8">
                        <h3 class="text-yellow-400 font-black uppercase tracking-widest mb-6 text-lg">⏳ Time Limits for Claims</h3>
                        <ul class="space-y-4 text-gray-300">
                            <li class="flex gap-3"><span class="text-yellow-400 mt-0.5">a.</span> Loss or damage must be notified in writing within three (3) days and claimed in writing within fourteen (14) days after the termination of transit.</li>
                            <li class="flex gap-3"><span class="text-yellow-400 mt-0.5">b.</span> Non-delivery of part or all of the consignment must be notified within three (3) days and claimed in writing within seven (7) days after the expected delivery.</li>
                        </ul>
                    </div>
                </li>

                <!-- ix -->
                <li class="relative pl-12 border-l-4 border-yellow-400/30 hover:border-yellow-400 transition-colors group">
                    <span class="absolute -left-3 top-0 w-8 h-8 rounded-2xl bg-yellow-400 text-black font-black flex items-center justify-center text-xl group-hover:scale-110 transition">9</span>
                    All transactions are subject to the Federation of Malaysian Freight Forwarders (FMFF) Standard Trading Conditions (STC), available in full upon request.
                </li>

                <!-- x -->
                <li class="relative pl-12 border-l-4 border-yellow-400/30 hover:border-yellow-400 transition-colors group">
                    <span class="absolute -left-3 top-0 w-8 h-8 rounded-2xl bg-yellow-400 text-black font-black flex items-center justify-center text-xl group-hover:scale-110 transition">10</span>
                    <strong>Cancellation</strong> – Once the shipment is booked, cancellation will incur a 30% cancellation fee.
                </li>

                <!-- xi -->
                <li class="relative pl-12 border-l-4 border-yellow-400/30 hover:border-yellow-400 transition-colors group">
                    <span class="absolute -left-3 top-0 w-8 h-8 rounded-2xl bg-yellow-400 text-black font-black flex items-center justify-center text-xl group-hover:scale-110 transition">11</span>
                    <strong>Payment Terms</strong> – Payment is due as per the invoice, which may be before, during, or after shipping/receiving.
                </li>

                <!-- xii -->
                <li class="relative pl-12 border-l-4 border-yellow-400/30 hover:border-yellow-400 transition-colors group">
                    <span class="absolute -left-3 top-0 w-8 h-8 rounded-2xl bg-yellow-400 text-black font-black flex items-center justify-center text-xl group-hover:scale-110 transition">12</span>
                    Rate will revise every 1st of month.
                </li>
                </ol>
            </div>

            <!-- Acceptance Box -->
            <div class="mt-20 p-10 md:p-14 bg-gradient-to-br from-yellow-400/10 to-transparent border-2 border-yellow-400/30 rounded-3xl text-center">
                <p class="text-2xl font-semibold leading-tight mb-8">
                    By proceeding with your booking, you confirm that you have read, understood, and agreed to all the terms and conditions above.
                </p>

                <div class="flex flex-col sm:flex-row gap-5 justify-center">
                    <a href="/servicecarshipping"
                       class="px-12 py-6 bg-yellow-400 hover:bg-white text-black font-black text-xl rounded-2xl transition-all hover:scale-105">
                        ← Back to Shipping
                    </a>
                </div>
            </div>
    </section>

    <footer class="bg-black py-12 border-t border-white/10 text-center text-gray-500 text-sm">
        <p>&copy; {{ date('Y') }} Arkod Smart Logitech Sdn. Bhd. All Rights Reserved.</p>
    </footer>

</body>
</html>
