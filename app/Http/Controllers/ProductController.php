<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('index', compact('products'));
    }

    public function cetak()
    {
        $products = Product::all();
        return view('cetak', compact('products'));
        // $pdf = PDF::loadview('cetak', compact('products'));
        // return $pdf->download("cetak_barcode.pdf");
        // $pdf->stream();
    }
}
