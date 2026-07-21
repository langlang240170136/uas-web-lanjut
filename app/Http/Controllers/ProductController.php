<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ProductController extends Controller
{
    // === FITUR CRUD WEB ===

    // Tampil semua barang
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // Form tambah barang
    public function create()
    {
        return view('products.create');
    }

    // Simpan barang baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'     => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'price'    => 'required|numeric',
            'stock'    => 'required|integer',
        ]);

        Product::create($validated);

        return redirect()->route('products.index')->with('success', 'Barang berhasil ditambahkan!');
    }

    // Form edit barang
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    // Update data barang
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name'     => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'price'    => 'required|numeric',
            'stock'    => 'required|integer',
        ]);

        $product->update($validated);

        return redirect()->route('products.index')->with('success', 'Barang berhasil diperbarui!');
    }

    // Hapus barang
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Barang berhasil dihapus!');
    }

    // === FITUR EXPORT PDF ===
    public function exportPdf()
    {
        $products = Product::all();
        $pdf = Pdf::loadView('reports.pdf', compact('products'));
        return $pdf->download('laporan-inventaris-barang.pdf');
    }

    // === FITUR REST API ===
    public function apiIndex()
    {
        return response()->json(Product::all(), 200);
    }

    public function apiStore(Request $request)
    {
        $validated = $request->validate([
            'name'     => 'required|string',
            'category' => 'required|string',
            'price'    => 'required|numeric',
            'stock'    => 'required|integer',
        ]);

        $product = Product::create($validated);
        return response()->json([
            'message' => 'Product Created Successfully',
            'data'    => $product
        ], 201);
    }
}