<?php

namespace App\Http\Controllers;

use App\customers;
use Illuminate\Http\Request;

class customersController extends Controller
{
    
    public function index()
    {
        $customers = customers::all();
        return view('customers.index', compact('customers'));
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required'
        ]);

        customers::create([
            'name' => $request ->name,
            'phone' => $request ->phone,
            'address' => $request ->address
        ]);

        return redirect(route('customer.index'));
    }


    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $dataeditcustomer = customers::findOrFail($id);
        return view('customers.edit', compact('dataeditcustomer'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'    => 'required|string',
            'phone'   => 'required|digits_between:10,15',
            'address' => 'nullable|string',
        ]);
    
        $customers = customers::findOrFail($id);
        $customers->update([
            'name'    => $request->name,
            'phone'   => $request->phone,
            'address' => $request->address,
        ]);
    
        return redirect()->route('customer.index')
                         ->with('success', 'Customer updated successfully');
    }

    public function destroy($id)
    {
        customers::where('customer_id', $id)->delete();
        return redirect(route('customer.index'));
    
    }
}
