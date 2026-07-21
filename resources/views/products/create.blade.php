<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Barang Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form action="{{ route('products.store') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label class="block font-medium text-sm text-gray-700">Nama Barang</label>
                        <input type="text" name="name" required class="w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                    <div>
                        <label class="block font-medium text-sm text-gray-700">Kategori</label>
                        <input type="text" name="category" required class="w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                    <div>
                        <label class="block font-medium text-sm text-gray-700">Harga</label>
                        <input type="number" name="price" required class="w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                    <div>
                        <label class="block font-medium text-sm text-gray-700">Stok</label>
                        <input type="number" name="stock" required class="w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                    <div class="flex space-x-2">
                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
                        <a href="{{ route('products.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
