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

    <main class="bg-white text-black min-h-screen">
        <section class="py-12 px-6">
            <div class="max-w-7xl mx-auto text-center">

                <h1 class="text-3xl md:text-5xl font-black text-black mb-10 tracking-tight uppercase">
                    Create your place at <br> <span class="text-yellow-500">ARKOD SMART LOGITECH</span>
                </h1>

                <div class="max-w-9xl mx-auto mb-12">
                    <p class="text-base md:text-xl text-gray-900 leading-relaxed font-semibold">
                        It's an exciting time to be at Arkod. As the world rapidly changes, if you believe that digital business is the future, and everybody deserves access to unbiased and actionable logistic solution. And you understand that the future of logistic is digital and mobile, Be part of an iconic and dynamic organisation that touches the lives of every Malaysian.
                    </p>
                </div>

                    <div class="mb-11">
    <a href="#job-section" class="inline-block bg-yellow-400 hover:bg-black hover:text-white text-black font-black py-4 px-12 rounded-lg text-sm uppercase tracking-widest transition-all shadow-xl">
        See all opportunities
    </a>
</div>


    <div class="grid grid-cols-1 md:grid-cols-3 gap-x-20 gap-y-12 items-end">

        <div class="flex flex-col items-center group md:translate-y-10">
            <div class="h-64 w-full flex items-center justify-center mb-6">
                <img src="{{ asset('images/Career_2.png') }}" alt="Health" class="max-h-full w-auto object-contain transition-transform group-hover:scale-105">
            </div>
            <h3 class="text-lg font-black text-black uppercase tracking-tighter text-center leading-tight">Your health and Wellbeing</h3>
            <div class="w-48 h-1.5 bg-yellow-400 mt-4 group-hover:w-60 transition-all duration-300"></div>
        </div>

        <div class="flex flex-col items-center group">
            <div class="h-80 w-full flex items-center justify-center mb-6">
                <img src="{{ asset('images/Career_1.png') }}" alt="Future" class="max-h-full w-auto object-contain transition-transform group-hover:scale-110">
            </div>
            <h3 class="text-lg font-black text-black uppercase tracking-tighter text-center leading-tight">Your future and finance</h3>
            <div class="w-48 h-1.5 bg-yellow-400 mt-4 group-hover:w-60 transition-all duration-300"></div>
        </div>

        <div class="flex flex-col items-center group md:translate-y-10">
            <div class="h-64 w-full flex items-center justify-center mb-6">
                <img src="{{ asset('images/Career_3.png') }}" alt="Family" class="max-h-full w-auto object-contain transition-transform group-hover:scale-105">
            </div>
            <h3 class="text-lg font-black text-black uppercase tracking-tighter text-center leading-tight">Family team</h3>
            <div class="w-48 h-1.5 bg-yellow-400 mt-4 group-hover:w-60 transition-all duration-300"></div>
        </div>
    </div>
</div>

        </section>
        <div class="flex justify-center my-16">
    <div class="w-[80%] h-[3px] bg-black"></div>
</div>
    </main>

<style>
    /* Floating Animation for Dots */
    @keyframes float {
        0% { transform: translate(0, 0); }
        50% { transform: translate(15px, -20px); }
        100% { transform: translate(0, 0); }
    }
    .animate-float {
        animation: float 6s ease-in-out infinite;
    }
    .animate-float-delayed {
        animation: float 8s ease-in-out infinite 2s;
    }

    #job-section {
    /* Adjust '150px' until it looks perfectly centered to you */
    scroll-margin-top: 150px;
}

</style>

<section class="py-24 bg-white font-montserrat overflow-hidden relative">

    <div class="max-w-7xl mx-auto px-6 mb-40 text-center relative z-10">
        <h2 class="text-5xl md:text-7xl font-black text-black uppercase tracking-tighter">
            Why <span class="text-[#F99D1C]">Choose</span> Us?
        </h2>
        <div class="w-24 h-2 bg-[#FFCC00] mx-auto mt-4"></div>
    </div>

    <div class="relative flex flex-col md:flex-row items-center bg-[#FFCC00] w-full rounded-r-[300px] min-h-[450px] mb-60">
        <div class="absolute right-20 top-10 w-32 h-32 bg-[#F99D1C] rounded-full opacity-50 animate-float"></div>
        <div class="absolute right-60 bottom-10 w-16 h-16 bg-white rounded-full opacity-40 animate-float-delayed"></div>

        <div class="relative w-full md:w-1/2 z-20 flex justify-center md:justify-start">
            <img src="{{ asset('images/Office_1.png') }}"
                 class="w-[85%] md:w-[70%] shadow-2xl relative left-[5%] lg:left-[20%] top-[-50px] md:top-[-70px] scale-105 md:scale-110 rounded-lg transition-transform duration-500 hover:scale-115">
        </div>

        <div class="w-full md:w-1/2 px-12 py-16 lg:pl-10 lg:pr-40 z-10">
            <h3 class="text-4xl lg:text-6xl font-black mb-6 text-black leading-[1.1] uppercase tracking-tighter">
                <span class="text-white">Comfortable and</span><br> <span class="text-black">Friendly workspace</span>
            </h3>
            <p class="font-bold text-2xl text-black leading-relaxed">
                We foster a professional and collaborative working environment that supports continuous learning, teamwork, and performance excellence.
            </p>
        </div>
    </div>

    <div class="relative flex flex-col md:flex-row-reverse items-center bg-[#F99D1C] w-full rounded-l-[300px] min-h-[450px] mb-32">
        <div class="absolute left-20 top-10 w-24 h-24 bg-[#FFCC00] rounded-full opacity-60 animate-float-delayed"></div>
        <div class="absolute left-40 bottom-20 w-12 h-12 bg-white rounded-full opacity-30 animate-float"></div>

        <div class="relative w-full md:w-1/2 z-20 flex justify-center md:justify-end">
            <img src="{{ asset('images/Office_2.png') }}"
                 class="w-[85%] md:w-[80%] shadow-2xl relative right-[5%] lg:right-[25%] top-[-50px] md:top-[-70px] scale-105 md:scale-110 rounded-lg transition-transform duration-500 hover:scale-115">
        </div>

        <div class="w-full md:w-2/3 px-12 py-16 lg:pr-20 lg:pl-40 z-10 text-right md:text-left">
            <h3 class="text-4xl lg:text-6xl font-black mb-6 text-black leading-[1.1] uppercase tracking-tighter">
                <span class="text-white">Honest and</span><br> <span class="text-black">Open Communications</span>
            </h3>
            <p class="font-bold text-2xl text-black leading-relaxed">
                We promote transparent communication and encourage open dialogue at all levels of the organization.
            </p>
        </div>

    </div>

    <div class="flex justify-center my-32">
        <div class="w-[80%] h-[3px] bg-black"></div>
    </div>

    <div class="relative">
        <div class="absolute -left-10 top-0 w-40 h-40 bg-[#FFCC00] rounded-full opacity-10 blur-3xl"></div>
        <div class="absolute -right-10 bottom-0 w-40 h-40 bg-[#F99D1C] rounded-full opacity-10 blur-3xl"></div>

        <div id="job-section" class="relative mt-10">
    <div class="max-w-7xl mx-auto px-6 mb-16 text-center">
        <h2 class="text-5xl md:text-7xl font-black text-black uppercase tracking-tighter">
            Job <span class="text-[#F99D1C]">Opportunities</span> At Arkod
        </h2>
            <div class="w-24 h-2 bg-[#FFCC00] mx-auto mt-4"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 md:gap-10">
                @php
                    $jobs = [
                        ['name' => 'Sales Manager', 'img' => 'Salesmanager.png'],
                        ['name' => 'Sales Executive', 'img' => 'Sales_Executive.png'],
                        ['name' => 'Office Admin Assistant', 'img' => 'admin_assistant.png'],
                        ['name' => 'Tech Manager', 'img' => 'tech_manager.png'],
                        ['name' => 'Marketing Manager', 'img' => 'marketing_manager.png'],
                        ['name' => 'Digital Marketing', 'img' => 'digital_marketing.png'],
                        ['name' => 'Customer Service', 'img' => 'customer_service.png'],
                        ['name' => 'Graphic Designer', 'img' => 'graphic_designer.png'],
                        ['name' => 'IT Administrator', 'img' => 'it_admin.png'],
                        ['name' => 'Internship', 'img' => 'internship.png'],
                    ];
                @endphp

                @foreach($jobs as $job)
                <div class="group flex flex-col items-center bg-white p-6 rounded-xl border-2 border-gray-100 shadow-lg
                            hover:shadow-2xl hover:border-[#FFCC00] hover:-translate-y-3 hover:scale-105
                            transition-all duration-500 cursor-pointer">

                    <div class="w-20 h-20 md:w-28 md:h-28 mb-4 bg-gray-50 rounded-full p-4 flex items-center justify-center
                                group-hover:bg-[#FFF9E6] transition-colors duration-500 shadow-inner">
                        <img src="{{ asset('images/' . $job['img']) }}" alt="{{ $job['name'] }}"
                             class="w-full h-full object-contain group-hover:rotate-6 transition-transform duration-500">
                    </div>

                    <h4 class="text-center font-black text-sm md:text-base uppercase leading-tight text-black
                               group-hover:text-[#F99D1C] transition-colors duration-500">
                        {{ $job['name'] }}
                    </h4>

                    <div class="w-0 group-hover:w-10 h-1 bg-[#F99D1C] mt-2 transition-all duration-500"></div>
                </div>
                @endforeach
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
