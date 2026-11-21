<?php

namespace App\Http\Controllers;

use App\Models\category;

use Illuminate\Http\Request;

class categorycontroller extends Controller
{
    public function index(){
        $catgs=category::all();
        return view('category.index' , compact('catgs')); 
    }

    public function show($id){
        $cat=category::findOrfail($id);
        return view('category.show' , compact('cat'));
    }

    public function create(){
        return view('category.create');
    }

    public function store(Request $request){
        $data=$request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string'
        ]);

        category::create($data);

        return redirect()->route('category.index')->with('status' , 'category created succesfully!');
        

    }

    public function edit($id){
        $cat=category::findOrfail($id);

        return view('category.edit' , compact('cat'));

    }

    public function update(Request $request , $id){
        $cat=category::findOrfail($id);

        $data=$request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string'
        ]);

        $cat->update($data);
        return redirect()->route('category.index')->with('status' , 'category updated succesfully!');
    }

    public function destroy($id){
        $cat=category::findOrfail($id);

        $cat -> delete();

        return redirect()->route('category.index')->with('status' , 'category deleted succesfully!');
    }

}
