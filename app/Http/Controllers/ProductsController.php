<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\categories; 

class ProductsController extends Controller
{
    
    public function index()
    {
        $products = Products::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
       $categories = Categories::all();
        return view('products.create', compact('categories'));
    }

    
    public function store(Request $request)
    {
      $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'price' => 'required|numeric|min:0',
        'stock' => 'required|integer|min:0',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'status' => 'required|in:available,unavailable',
        'categorie_id' => 'required',
    ]);

    $image = null;
    if ($request->hasFile('image')) {
    $image = $request->file('image')->store('products', 'public');
    }

    Products::create([
    'name' => $request->name,
    'description' => $request->description,
    'price' => $request->price,
    'stock' => $request->stock,
    'image' => $image,
    'status' => $request->status,
    'categorie_id' => $request->categorie_id,
    ]);
      return redirect()->route('products.index');
    }

    public function show($id)
    {
        //
    }

   public function edit($id)
{

}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function update (Request $request, $id)
{
    
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
        
}
}
