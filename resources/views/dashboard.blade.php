<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Statistik') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <!-- Card Total Barang -->
                <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
                    <h3 class="text-lg font-bold text-gray-700">Total Barang</h3>
                    <p class="text-3xl font-extrabold text-blue-600 mt-2">{{ $totalProducts }}</p>
                </div>

                <!-- Card Total User -->
                <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
                    <h3 class="text-lg font-bold text-gray-700">Total Pengguna Registered</h3>
                    <p class="text-3xl font-extrabold text-green-600 mt-2">{{ $totalUsers }}</p>
                </div>
            </div>

            <!-- Tombol Aksi Admin -->
            @if(Auth::user()->role === 'admin')
                <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 flex space-x-4">
                    <a href="{{ route('products.index') }}" class="bg-indigo-600 text-white px-4 py-2 rounded shadow hover:bg-indigo-700">
                        Kelola Data Barang (CRUD)
                    </a>
                    <a href="{{ route('products.exportPdf') }}" class="bg-red-600 text-white px-4 py-2 rounded shadow hover:bg-red-700">
                        Export Laporan PDF
                    </a>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>