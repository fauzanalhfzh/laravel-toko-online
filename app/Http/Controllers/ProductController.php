<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact(['products']));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        Product::create($request->all());
        return redirect('/products');
    }
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact(['product']));
    }
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update($request->all());
        return redirect('/products');
    }
    public function destroy($id)
    {
        $product = Product::find($id);

        if ($product) {
            $product->delete();
            return redirect('/products')->with('success', 'Product deleted successfully');
        } else {
            return redirect('/products')->with('error', 'Product not found');
        }
    }
}
