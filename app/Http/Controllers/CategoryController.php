<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
       return view('category.category_list',compact('categories'));
    }

    public function create(){
        return view('category.category_create');
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $category = Category::create($validatedData);
        $notification = array(
            'message' => 'Category Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('category.index')->with($notification);
    }
    public function edit($id){
        $categories = Category::findOrFail($id);
        return view('category.category_edit', compact('categories'));
    }
    public function update(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $category_id = $request->id;
        $category = Category::findOrFail($category_id);
        $category->update($validatedData);
        $notification = array(
            'message' => 'Category Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('category.index')->with($notification);
    }
    public function destroy($id){
        $category = Category::findOrFail($id);
        $category->delete();

        $notification = [
            'message' => 'Category Deleted Successfully',
            'alert-type' => 'warning'
        ];

        return redirect()->route('category.index')->with($notification);
    }
}
