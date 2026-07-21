<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
        ]);

        Product::create($request->all());

        return redirect()->route('products.index')->with('success', 'Barang berhasil ditambahkan!');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')->with('success', 'Barang berhasil diperbarui!');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Barang berhasil dihapus!');
    }

    // Fitur Export PDF untuk Laporan
    public function exportPdf()
    {
        $products = Product::all();
        $pdf = Pdf::loadView('reports.pdf', compact('products'));
        return $pdf->download('laporan-inventaris.pdf');
    }

    // REST API Endpoints (Untuk Pengujian Postman)
    public function apiIndex()
    {
        return response()->json(['status' => 'success', 'data' => Product::all()]);
    }

    public function apiStore(Request $request)
    {
        $product = Product::create($request->all());
        return response()->json(['status' => 'success', 'data' => $product], 201);
    }
}