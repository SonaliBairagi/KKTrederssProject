<?php

namespace App\Http\Controllers;

use App\Models\FrozenFriesProduct;


use Illuminate\Http\Request;

class FrozenFrizeController extends Controller
{
    public function index()
    {
        $Fproducts = FrozenFriesProduct::all();
        return view('admin.frozen_fries.create', compact('Fproducts'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function addproduct(Request $request)
    {
        return view('admin.frozen_fries.add');
    }

    public function store(Request $request)
    {

        $request->validate([
            'product_no' => 'required',
            'product_name' => 'required',
            'product_description' => 'required',
            'product_img' => 'nullable|image',
        ]);

        $imgPath = null;

        // Use manual image upload logic
        if ($request->hasFile('product_img')) {
            $image = $request->file('product_img');
            $filename = time() . '.' . $image->extension(); // create a unique filename
            $image->move('Fproducts', $filename); // move to /public/Fproducts
            $imgPath = $filename; // save filename to DB
        } else {
            $imgPath = 'null'; // optional fallback
        }

        FrozenFriesProduct::create([
            'product_no' => $request->product_no,
            'product_name' => $request->product_name,
            'product_description' => $request->product_description,
            'product_img' => $imgPath,
        ]);

        return redirect()->route('admin.frozefries')->with('success', 'Product added!');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // return view('frozen_fries.edit', compact('frozenFries'));
        $Fproducts = FrozenFriesProduct::find($id);
        return view('admin.frozen_fries.edit', compact('Fproducts'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, string $id)
    {
        $request->validate([
            'product_no' => 'required',
            'product_name' => 'required',
            'product_description' => 'required',
            'product_img' => 'nullable|image',
        ]);

        $Fproduct = FrozenFriesProduct::findOrFail($id);

        $Fproduct->product_no = $request->product_no;
        $Fproduct->product_name = $request->product_name;
        $Fproduct->product_description = $request->product_description;

        if ($request->hasFile('product_img')) {

            if ($Fproduct->product_img && file_exists('Fproducts/' . $Fproduct->product_img)) {
                unlink('Fproducts/' . $Fproduct->product_img);
            }

            $image = $request->file('product_img');
            $imageName = time() . '.' . $image->extension();
            $image->move('Fproducts', $imageName);
            $Fproduct->product_img = $imageName;
        }

        $Fproduct->save();

        return redirect()->route('admin.frozefries')->with('success', 'Product updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Fproducts = FrozenFriesProduct::find($id);
        $Fproducts->delete();
        return redirect()->route('admin.frozefries')->with('success', 'About deleted successfully.');
    }
}
