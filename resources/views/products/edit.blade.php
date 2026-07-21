<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Data Barang') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border border-gray-200">
                
                @if ($errors->any())
                    <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                        <ul class="list-disc pl-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('products.update', $product->id) }}" method="POST" class="space-y-4">
                    @csrf
                    @method('PUT')

                    <!-- Nama Barang -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Nama Barang</label>
                        <input type="text" name="name" value="{{ old('name', $product->name) }}" required
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-gray-900">
                    </div>

                    <!-- Kategori -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Kategori</label>
                        <input type="text" name="category" value="{{ old('category', $product->category) }}" required
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-gray-900">
                    </div>

                    <!-- Harga -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Harga (Rp)</label>
                        <input type="number" name="price" value="{{ old('price', $product->price) }}" required
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-gray-900">
                    </div>

                    <!-- Stok -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Jumlah Stok</label>
                        <input type="number" name="stock" value="{{ old('stock', $product->stock) }}" required
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-gray-900">
                    </div>

                    <!-- Tombol Simpan & Batal (Warna Jelas) -->
                    <div class="flex items-center space-x-3 pt-4 border-t border-gray-100">
                        <button type="submit" style="background-color: #2563eb; color: #ffffff;" class="font-bold py-2 px-6 rounded-lg shadow hover:bg-blue-700 transition duration-150">
                            💾 Simpan Perubahan
                        </button>
                        <a href="{{ route('products.index') }}" style="background-color: #4b5563; color: #ffffff;" class="font-bold py-2 px-6 rounded-lg shadow hover:bg-gray-700 transition duration-150">
                            ❌ Batal
                        </a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>