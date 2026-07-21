<x-app-layout>
    <x-slot name="header">
        <h2 class="font-black text-3xl text-transparent bg-clip-text bg-gradient-to-r from-purple-600 via-pink-500 to-orange-400 tracking-tighter">
            {{ __('Dashboard Abstrak') }}
        </h2>
    </x-slot>

    <div class="py-12 relative z-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-10">
                <!-- Card 1: Abstrak Melengkung -->
                <div class="relative bg-white/40 backdrop-blur-2xl p-10 shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-white/60 rounded-tl-[4rem] rounded-br-[4rem] rounded-tr-2xl rounded-bl-2xl transform transition duration-500 hover:-translate-y-3 hover:bg-white/60 group">
                    <div class="absolute -top-4 -right-4 w-12 h-12 bg-gradient-to-br from-pink-400 to-purple-600 rounded-full animate-bounce shadow-lg"></div>
                    <h3 class="text-sm font-extrabold text-gray-500 uppercase tracking-[0.3em]">Total Barang</h3>
                    <p class="text-7xl font-black text-transparent bg-clip-text bg-gradient-to-br from-purple-600 to-blue-500 mt-4 group-hover:scale-110 transition-transform transform origin-left">{{ $totalProducts }}</p>
                </div>

                <!-- Card 2: Abstrak Berlawanan -->
                <div class="relative bg-white/40 backdrop-blur-2xl p-10 shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-white/60 rounded-tr-[4rem] rounded-bl-[4rem] rounded-tl-2xl rounded-br-2xl transform transition duration-500 hover:-translate-y-3 hover:bg-white/60 group">
                    <div class="absolute -bottom-4 -left-4 w-16 h-16 bg-gradient-to-tr from-yellow-400 to-orange-500 rounded-full opacity-80 shadow-lg transition-transform group-hover:scale-150"></div>
                    <h3 class="text-sm font-extrabold text-gray-500 uppercase tracking-[0.3em]">Total Pengguna</h3>
                    <p class="text-7xl font-black text-transparent bg-clip-text bg-gradient-to-bl from-green-400 to-teal-500 mt-4 group-hover:scale-110 transition-transform transform origin-left">{{ $totalUsers }}</p>
                </div>
            </div>

            <!-- Tombol Aksi Admin dengan Gaya Abstrak -->
            @if(Auth::user()->role === 'admin')
                <div class="bg-gradient-to-r from-indigo-500/80 via-purple-500/80 to-pink-500/80 backdrop-blur-2xl p-10 rounded-[3rem] shadow-2xl flex flex-col md:flex-row gap-6 items-center justify-center border border-white/40 relative overflow-hidden">
                    
                    <div class="absolute w-[200%] h-[200%] bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10 animate-[spin_60s_linear_infinite]"></div>

                    <p class="text-white font-black text-xl tracking-[0.2em] z-10 drop-shadow-md text-center md:text-left mr-0 md:mr-8">
                        ✨ KENDALI ADMIN
                    </p>
                    
                    <a href="{{ route('products.index') }}" class="z-10 relative px-8 py-4 bg-white/20 backdrop-blur-md border-2 border-white/50 rounded-full font-black text-sm text-white uppercase tracking-widest hover:bg-white hover:text-purple-600 transition duration-300 shadow-[0_0_20px_rgba(255,255,255,0.3)] transform hover:scale-105">
                        📦 Kelola Barang
                    </a>
                    
                    <a href="{{ route('products.exportPdf') }}" class="z-10 px-8 py-4 bg-black/30 backdrop-blur-md border-2 border-transparent rounded-full font-black text-sm text-white uppercase tracking-widest hover:border-white hover:bg-black/50 transition duration-300 transform hover:scale-105 shadow-lg">
                        📄 Export PDF
                    </a>
                </div>
            @endif

        </div>
    </div>
</x-app-layout>