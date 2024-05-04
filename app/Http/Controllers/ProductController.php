<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// use App\Http\Controllers\ProductController;


class ProductController extends Controller
{
    public function index(){
        $products =DB::table('products')
            ->orderBy('id', 'desc')
            ->get();
        return view('products.index', compact('products'));
    }
    
    public function create(){
        return view('products.create');
    }
    
    public function store(Request $request){
        
        if (!$request->filled('image')) {
            return redirect()->back()->with('error', 'image is required');
        }
        if (!$request->filled('name')) {
            return redirect()->back()->with('error', 'product name is required');
        }
        if (!$request->filled('condition')) {
            return redirect()->back()->with('error', 'condition is required');
        }
        if (!$request->filled('stock')) {
            return redirect()->back()->with('error', 'stock is required');
        }
        if (!$request->filled('price')) {
            return redirect()->back()->with('error', 'price is required');
        }
        if (!$request->filled('weight')) {
            return redirect()->back()->with('error', 'weight is required');
        }
        if (!$request->filled('description')) {
            return redirect()->back()->with('error', 'description is required');
        }
        
        DB::table('products')->insert([
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
            'weight' => $request->weight,
            'image' => $request->image,
            'condition'=>$request->condition,
            'description'=>$request->description,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        return redirect()->route('products.index')->with('success', 'product created successfuly');
        
    }

    public function list()
{
    $products = DB::table('products')
        ->orderBy('id', 'desc')
        ->get();
        
    return view('products.list', compact('products'));
}


//update dan delete
public function edit($id){
    $product = Product::find($id);
    return view('products.create', compact('product'));
}

public function update(Request $request, $id){
    // Validasi data yang diperlukan di sini

    $product = product::find($id);
    $product->name = $request->name;
    $product->name = $request->stock;
    $product->name = $request->weight;
    $product->name = $request->price;
    $product->name = $request->condition;
    // Update atribut lainnya sesuai kebutuhan

    $product->save();

    return redirect()->route('products.index')->with('success', 'Product updated successfully');
}

public function destroy($id)
    {
        // Temukan produk berdasarkan ID
        $product = Product::findOrFail($id);

        // Hapus produk
        $product->delete();

        // Redirect ke halaman yang sesuai
        return redirect()->route('products.create')->with('success', 'Product deleted successfully');
    }


}

