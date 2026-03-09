<?php

namespace App\Http\Controllers;

use App\Models\system;
use Illuminate\Http\Request;

class systemController extends Controller
{
    function index()
    {
        $systems = system::orderBy('id')->paginate(10);
        return view('Dev-2.index', compact('systems'));
    }

    function create()
    {
        return view('Dev-2.create');
    }

    function store(Request $request)
    { //utk simpan data product ke database
        // Validasi input
        $validatedData = $request->validate([
            'system_name' => 'required',
            'agency' => 'required|string',
            'technology' => 'required',
            'current_crypto' => 'required',
            'pqc_target' => 'required',
            'status' => 'required',
            'target_date' => 'required',
            'pic_id' => 'required'
        ]);
        system::create($validatedData);

        return redirect()->route('systems.index')->with('success', 'Data created successfully.');
    }

    function update(Request $request, $id)
    { //utk update data product ke database
        // Validasi input
        $validatedData = $request->validate([
            'system_name' => 'required',
            'agency' => 'required|string',
            'technology' => 'required',
            'current_crypto' => 'required',
            'pqc_target' => 'required',
            'status' => 'required',
            'target_date' => 'required',
            'pic_id' => 'required'
        ]);

        // Update data di database
        system::where('id', $id)->update($validatedData);

        // Redirect atau tampilkan pesan sukses
        return redirect()->route('systems.index')->with('success', 'Product updated successfully!');
    }

    function edit($id)
    { //call page edit product
        $system = system::findOrFail($id);
        return view('Dev-2.edit', compact('system'));
    }

    function destroy($id)
    { //utk delete data product di database
        system::destroy($id);
        return redirect()->route('systems.index')->with('success', 'Product deleted successfully!');
    }

    //
}
