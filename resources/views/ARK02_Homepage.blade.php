@extends('layouts.app')

@section('content')
<div class="relative min-h-screen w-full flex items-center overflow-hidden -mt-[88px]" x-data="{ loaded: false }" x-init="setTimeout(() => loaded = true, 100)">

    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/Homepage_Pic.jpg') }}"
             alt="ARKOD Logistics"
             class="w-full h-full object-fill origin-center scale-x-[1.25] scale-y-[1.05] object-[80%_center] transition-all duration-[4000ms] ease-out"
             :class="loaded ? 'opacity-70 blur-0' : 'opacity-0 blur-xl'">

        <div class="absolute inset-0 bg-gradient-to-r from-black via-black/85 to-transparent z-10"></div>


    </div>

    <div class="relative z-20 max-w-[1600px] mx-auto px-8 w-full mt-20">
        <div class="max-w-8xl">
            <div class="inline-flex items-center gap-3 px-4 py-2 mb-8 border border-yellow-400/20 rounded-full bg-yellow-400/5 backdrop-blur-md transition-all duration-1000"
                 x-show="loaded" x-transition:enter="opacity-0 -translate-x-10">
                <span class="text-white text-[9px] font-black uppercase tracking-[0.4em]">Arkod Smart Logitech SDN. BHD</span>
            </div>

            <h1 class="text-white text-7xl md:text-8xl font-black uppercase leading-[1.05] tracking-tighter mb-10 transition-all duration-1000 delay-300"
    :class="loaded ? 'translate-y-0 opacity-100' : 'translate-y-25 opacity-0'">
    Efficiency and <br>
    <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-600">
        Innovation with
    </span>
    <br>
    Smart Tech
</h1>

            <p class="text-white-400 text-lg md:text-xl font-medium leading-relaxed mb-14 max-w-2xl border-l-4 border-yellow-400 pl-8 transition-all duration-1000 delay-500"
               :class="loaded ? 'opacity-100' : 'opacity-0'">
                Behind every shipment is a promise we made to a customer. <br>
                <span class="text-white">As your dedicated logistics partner, we treat your cargo as if it were our own.</span>
            </p>

            <div class="flex flex-wrap items-center gap-10 transition-all duration-1000 delay-700"
                 :class="loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">

                <a href="#" class="relative overflow-hidden bg-yellow-400 hover:bg-white text-black px-16 py-6 rounded-sm text-xs font-black uppercase tracking-[0.3em] transition-all duration-500 group shadow-[0_20px_50px_rgba(250,204,21,0.2)]">
                    <span class="relative z-10">Explore Now</span>
                    <div class="absolute inset-0 bg-white translate-y-full group-hover:translate-y-0 transition-transform duration-300"></div>
                </a>

                <button class="flex items-center gap-4 group">
                    <div class="w-14 h-14 rounded-full border border-white/20 flex items-center justify-center group-hover:bg-yellow-400 group-hover:border-yellow-400 transition-all duration-500">
                        <svg class="w-4 h-4 text-white group-hover:text-black fill-current ml-1" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                    </div>
                    <span class="text-white text-[11px] font-black uppercase tracking-widest group-hover:text-yellow-400 transition-colors">How it works</span>
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
