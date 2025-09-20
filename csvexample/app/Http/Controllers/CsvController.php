<?php

namespace App\Http\Controllers;

use App\Exports\ProductsExport;
use App\Imports\ProductImport;
use App\Models\Product;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CsvController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('index', compact('products'));
    }
    public function import(Request $request)
    {
        $request->validate([
            'document_csv' => 'required|mimes:csv|max:2048',
        ]);

        try {
            $file = $request->file('document_csv');
            Excel::import(new ProductImport, $file);
            return redirect()->route('index');
        } catch (\Exception $e) {
            dd("Error: " . $e->getMessage());
        }
    }
    public function export()
    {
        return Excel::download(new ProductsExport, 'products.csv');
    }
}
