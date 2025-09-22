<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categories;
class categoriesController extends Controller
{


    public function index()
    {
        $categories = categories::all();
        return view('categories.index', compact('categories'));
    }


    public function create()
    {
        return view('categories.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:categories',
            'description' => 'nullable|string',
        ]);
        
         categories::create([
             'name' => $request->name,
             'description' => $request->description,
         ]);

         return redirect()->route('category.index');
    }

  
    public function show()
    {
        //
    }

  
    public function edit($id)
    {
        $dataeditcategory = categories::find($id);
        return view('categories.edit', compact('dataeditcategory'));
    }

   
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name,' . $id . ',categorie_id',
            'description' => 'nullable|string',
        ]);

        $updatedata = categories::findOrFail($id);
        $updatedata->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('category.index');
    }

  
    public function destroy($id)
    {
        categories::where('categorie_id',$id)->delete();
        return redirect()->route('category.index');
    }
}