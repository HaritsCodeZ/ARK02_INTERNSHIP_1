@extends('layouts.app')

@section('content')
<div class="relative min-h-[10vh] md:min-h-screen w-full flex items-center overflow-hidden -mt-[72px] md:-mt-[88px]" x-data="{ loaded: false }" x-init="setTimeout(() => loaded = true, 100)">

    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/Homepage_Pic.jpg') }}"
             alt="ARKOD Logistics"
             class="w-full h-full object-cover transition-all duration-[4000ms] ease-out"
             :class="loaded ? 'opacity-70 blur-0 scale-105' : 'opacity-0 blur-xl scale-125'">

        <div class="absolute inset-0 bg-gradient-to-b from-black/50 via-black/80 to-black lg:bg-gradient-to-r lg:from-black lg:via-black/85 lg:to-transparent z-10"></div>
    </div>

    <div class="relative z-20 max-w-[1600px] mx-auto px-6 md:px-8 w-full mt-10 md:mt-20">
        <div class="max-w-8xl text-center lg:text-left">
            <div class="inline-flex items-center gap-3 px-4 py-2 mb-8 border border-yellow-400/20 rounded-full bg-yellow-400/5 backdrop-blur-md transition-all duration-1000 mx-auto lg:mx-0"
                 x-show="loaded" x-transition:enter="opacity-0 -translate-x-10">
                <span class="text-white text-[8px] md:text-[9px] font-black uppercase tracking-[0.3em]">Arkod Smart Logitech SDN. BHD</span>
            </div>

            <h1 class="text-white text-4xl sm:text-5xl md:text-7xl lg:text-8xl font-black uppercase leading-[1.1] tracking-tighter mb-10 transition-all duration-1000 delay-300"
                :class="loaded ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'">
                Efficiency and <br class="hidden sm:block">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-600">
                    Innovation with
                </span>
                <br>
                Smart Tech
            </h1>

            <p class="text-gray-300 text-sm md:text-xl font-medium leading-relaxed mb-14 max-w-2xl border-l-0 lg:border-l-4 border-yellow-400 px-4 lg:pl-8 mx-auto lg:mx-0 transition-all duration-1000 delay-500"
               :class="loaded ? 'opacity-100' : 'opacity-0'">
                Behind every shipment is a promise we made to a customer. <br class="hidden md:block">
                <span class="text-white">As your dedicated logistics partner, we treat your cargo as if it were our own.</span>
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-8 md:gap-10 transition-all duration-1000 delay-700"
                 :class="loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">

                <a href="#" class="w-full sm:w-auto text-center relative overflow-hidden bg-yellow-400 hover:bg-white text-black px-12 py-5 md:px-16 md:py-6 rounded-sm text-lg md:text-lg font-black uppercase tracking-[0.3em] transition-all duration-500 group shadow-lg">
                    <span class="relative z-10">Explore Now</span>
                    <div class="absolute inset-0 bg-white translate-y-full group-hover:translate-y-0 transition-transform duration-300"></div>
                </a>

                <button class="flex items-center gap-4 group">
                    <div class="w-12 h-12 md:w-14 md:h-14 rounded-full border border-white/20 flex items-center justify-center group-hover:bg-yellow-400 group-hover:border-yellow-400 transition-all duration-500">
                        <svg class="w-4 h-4 text-white group-hover:text-black fill-current ml-1" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                    </div>
                    <span class="text-white text-[10px] md:text-[11px] font-black uppercase tracking-widest group-hover:text-yellow-400 transition-colors">How it works</span>
                </button>
            </div>
        </div>
    </div>

    <div class="absolute bottom-0 right-20 z-20 hidden lg:flex flex-col items-center gap-6">
        <span class="text-white/20 text-[10px] uppercase tracking-[0.5em] [writing-mode:vertical-lr] rotate-180">Scroll to dive</span>
        <div class="w-[1px] h-32 bg-gradient-to-t from-yellow-400 to-transparent"></div>
    </div>
</div>
@endsection
