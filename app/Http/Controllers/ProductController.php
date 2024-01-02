<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Jobs\SendProductCreatedEmail;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkAdmin');
    }
    public function index(){
        $products = Product::with('category')->get();
        return view('product.product_list',compact('products'));
    }
    public function create(){
        $categories = Category::all();
        return view('product.product_create', compact('categories'));
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'category_id' => 'required|integer',

        ]);
        $product = Product::create($validatedData);
        $productWithUser = Product::with('user')->find($product->id);
        SendProductCreatedEmail::dispatch($productWithUser);
        $notification = array(
            'message' => 'Product Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('product.index')->with($notification);
    }
    public function edit($id){
        $products = Product::findOrFail($id);
        $categories = Category::all();
        return view('product.product_edit', compact('products','categories'));
    }
    public function update(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'category_id' => 'required|numeric',
        ]);
        $product_id = $request->id;
        $product = Product::findOrFail($product_id);
        $product->update($validatedData);
        $notification = [
            'message' => 'Product Updated Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->route('product.index')->with($notification);
    }
    public function destroy($id){
        $product = Product::findOrFail($id);
        $product->delete();

        $notification = [
            'message' => 'Product Deleted Successfully',
            'alert-type' => 'warning'
        ];

        return redirect()->route('product.index')->with($notification);
    }
}
