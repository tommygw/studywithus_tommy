<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $product = Product::orderBy('created_at', 'DESC')->get();

        return view('products.index', compact('product'));
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time().'.'.$request->image->extension();
        $imagePath = 'images/'.$imageName;
        $request->image->move(public_path('images'), $imageName);

        Product::create([
            'title' => $request->title,
            'sku' => $request->sku,
            'price' => $request->price,
            'description' => $request->description,
            'image_uri' => $imagePath
        ]);

        return redirect()->route('products')->with('success', 'Product added Successfully');
    }

    public function show(string $id){
        $product = Product::findOrFail($id);
        
        return view('products.show', compact('product'));
    }

    public function edit(string $id){
        $product = Product::findOrFail($id);
        
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, string $id){
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return redirect()->route('products')->with('success', 'Product updated Successfully');
    }

    public function destroy(string $id){
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect()->route('products')->with('success', 'Product deleted Successfully');
    }
}
