<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class productcontroller extends Controller
{
    public function index(){
        $products = product::all();

        return view('product.index', compact('products'));
    }

    public function show($id){
        $pro = product::findOrfail($id);

        return view('product.show', compact('pro'));
    }

    public function create(){
        return view('product.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        product::create($data);

        return redirect()->route('product.index')->with('success', 'Product added successfully!');
    }

    public function edit($id){
        $pr=product::findOrfail($id);

        return view('product.edit' , compact('pr'));

    }

    public function update(Request $request , $id){
        $pr=product::findOrfail($id);

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        product::update($data);
        return redirect()->route('product.index')->with('success', 'Product updated successfully!');

    }

    public function destroy($id){
        $pr_id=product::findOrfail($id);

        $pr_id -> delete();

        return redirect()->route('product.index')->with('success' , 'Product deleted succesfully!');
    }
    
}
