<?php

namespace App\Http\Controllers;

use App\Models\HashBrownProduct;

use Illuminate\Http\Request;

class HashBrownController extends Controller
{
    public function index()
    {

        $HashBrownProducts = HashBrownProduct::all();
        return view('admin.Hash_Brown.index', compact('HashBrownProducts'));
    }
    public function addProduct()
    {
        return view('admin.Hash_Brown.add');
    }
    //for store the data
    public function store(Request $request)
    {
        $request->validate([
            'Hproduct_no' => 'required',
            'Hproduct_name' => 'required',
            'Hproduct_description' => 'required',
            'Hproduct_img' => 'nullable|image',
        ]);

        $imgPath = null;

        if ($request->hasFile('Hproduct_img')) {
            $image = $request->file('Hproduct_img');
            $filename = time() . '.' . $image->extension();
            $image->move('HashBrownProducts', $filename);
            $imgPath = $filename;
        }

        HashBrownProduct::create([
            'Hproduct_no' => $request->Hproduct_no,
            'Hproduct_name' => $request->Hproduct_name,
            'Hproduct_description' => $request->Hproduct_description,
            'Hproduct_img' => $imgPath,
        ]);

        return redirect()->route('admin.Hash_Brown.index')->with('success', 'Product added!');
    }

    // for edit
    public function edit($id)
    {
        $HashBrownProduct = HashBrownProduct::find($id);
        return view('admin.Hash_Brown.edit', compact('HashBrownProduct'));
    }

    // for upddate
    public function update(Request $request, $id)
    {
        $HashBrownProduct = HashBrownProduct::find($id);

        $request->validate([
            'Hproduct_no' => 'required',
            'Hproduct_name' => 'required',
            'Hproduct_description' => 'required',
            'Hproduct_img' => 'nullable|image',
        ]);


        $imgPath = $HashBrownProduct->Hproduct_img;

        if ($request->hasFile('Hproduct_img')) {
            $image = $request->file('Hproduct_img');
            $filename = time() . '.' . $image->extension();
            $image->move('HashBrownProducts', $filename);
            $imgPath = $filename;
        }


        $HashBrownProduct->update([
            'Hproduct_no' => $request->Hproduct_no,
            'Hproduct_name' => $request->Hproduct_name,
            'Hproduct_description' => $request->Hproduct_description,
            'Hproduct_img' => $imgPath,
        ]);

        return redirect()->route('admin.Hash_Brown.index')->with('success', 'Product updated!');
    }

    // for destroy the records
    public function destroy($id)
    {
        $HashBrownProduct = HashBrownProduct::find($id);
        $HashBrownProduct->delete();
        return redirect()->route('admin.Hash_Brown.index')->with('success', 'Product deleted!');
    }
}
