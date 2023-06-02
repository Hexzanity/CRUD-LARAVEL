<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        $suppliers = Supplier::all();

        return view('products.create', compact('categories', 'suppliers'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'color' => 'required',
            'size' => 'required',
            'price' => 'required|numeric|between:0,9999.99',
            'stock' => 'required|numeric',
            'category_id' => 'required',
            'supplier_id' => 'required',
            // Add other validation rules for the product fields
        ]);

        $product = new Product();
        $product->name = $data['name'];
        $product->color = $data['color'];
        $product->size = $data['size'];
        $product->price = $data['price'];
        $product->stock = $data['stock'];
        $product->category_id = $data['category_id'];
        $product->supplier_id = $data['supplier_id'];

        $product->save();

        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        $suppliers = Supplier::all();

        return view('products.edit', ['product' => $product, 'categories' => $categories, 'suppliers' => $suppliers]);
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'name' => 'required',
            'color' => 'required',
            'size' => 'required',
            'price' => 'required|numeric|between:0,9999.99',
            'stock' => 'required|numeric',
            'category_id' => 'required',
            'supplier_id' => 'required',
            // Add other validation rules for the product fields
        ]);

        $product->update($data);

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully.');
    }
}
