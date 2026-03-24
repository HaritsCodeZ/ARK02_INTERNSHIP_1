@extends('layouts.app')

@section('content')
<div class="relative min-h-[95vh] w-full flex items-center overflow-hidden -mt-10">

    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/Homepage_Pic.jpg') }}"
             alt="ARKOD Logistics"
             class="w-full h-full object-fill origin-center scale-x-[1.25] scale-y-[1.05] object-[80%_center]">

        <div class="absolute inset-0 bg-gradient-to-r from-black via-black/85 to-transparent"></div>
    </div>

    <div class="relative z-10 max-w-[1600px] mx-auto px-8 w-full">
        <div class="max-w-4xl">
            <h1 class="text-white text-5xl md:text-6xl font-black uppercase leading-[1.35] tracking-tighter mb-8">
                Efficiency and <br>
                <span class="text-white">Innovation with</span> <br>
                Smart Technologies
            </h1>

            <p class="text-gray-300 text-lg md:text-xl font-medium leading-relaxed mb-12 max-w-2xl border-l-4 border-yellow-400 pl-6">
                Behind every shipment is a promise we made to a customer. We take that responsibility personally.
                As your dedicated logistics partner, we treat your cargo as if it were our own.
            </p>

            <div class="flex flex-wrap gap-6">
                <a href="#" class="bg-yellow-400 hover:bg-white text-black px-12 py-5 rounded-sm text-sm font-black uppercase tracking-[0.2em] transition-all duration-300 transform hover:-translate-y-1 shadow-[0_15px_40px_rgba(250,204,21,0.25)]">
                    Explore Now
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
