<?php

namespace App\Http\Controllers;

use App\Models\OurProduct;

use Illuminate\Http\Request;

class OurProductController extends Controller
{
    public function index()
    {
        $OurProducts = OurProduct::all();
        return view('admin.Our_Product.index', compact('OurProducts'));
    }
    public function addProduct()
    {
        return view('admin.Our_Product.add');
    }
    //for store the data 
    public function store(Request $request)
    {
        $request->validate([
            'Oproduct_no' => 'required',
            'Oproduct_name' => 'required',
            'Oproduct_description' => 'required',
            'Oproduct_img' => 'nullable|image',
        ]);

        $imgPath = null;

        if ($request->hasFile('Oproduct_img')) {
            $image = $request->file('Oproduct_img');
            $filename = time() . '.' . $image->extension();
            $image->move('OurProduct', $filename);
            $imgPath = $filename;
        }

        OurProduct::create([
            'Oproduct_no' => $request->Oproduct_no,
            'Oproduct_name' => $request->Oproduct_name,
            'Oproduct_description' => $request->Oproduct_description,
            'Oproduct_img' => $imgPath,
        ]);

        return redirect()->route('admin.Our_Product.index')->with('success', 'Product added!');
    }

    // for edit the data
    public function edit($id)
    {
        $OurProduct = OurProduct::find($id);
        return view('admin.Our_Product.edit', compact('OurProduct'));
    }



    public function update(Request $request, $id)
    {
        $request->validate([
            'Oproduct_no' => 'required',
            'Oproduct_name' => 'required',
            'Oproduct_description' => 'required',
            'Oproduct_img' => 'nullable|image',
        ]);

        $OurProduct = OurProduct::findOrFail($id);

        // If a new image is uploaded
        if ($request->hasFile('Oproduct_img')) {
            // Optionally delete old image from folder
            if ($OurProduct->Oproduct_img && file_exists('OurProduct/' . $OurProduct->Oproduct_img)) {
                unlink('OurProduct/' . $OurProduct->Oproduct_img);
            }

            $image = $request->file('Oproduct_img');
            $filename = time() . '.' . $image->extension();
            $image->move('OurProduct', $filename);
            $OurProduct->Oproduct_img = $filename;
        }

        // Update other fields
        $OurProduct->Oproduct_no = $request->Oproduct_no;
        $OurProduct->Oproduct_name = $request->Oproduct_name;
        $OurProduct->Oproduct_description = $request->Oproduct_description;

        $OurProduct->save();

        return redirect()->route('admin.Our_Product.index')->with('success', 'Product updated!');
    }


    // for destroy
    public function destroy($id)
    {
        $OurProduct = OurProduct::find($id);
        $OurProduct->delete();
        return redirect()->route('admin.Our_Product.index')->with('success', 'Product deleted!');
    }
}
