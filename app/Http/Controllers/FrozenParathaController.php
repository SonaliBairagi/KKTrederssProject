<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FrozenParathaProduct;

class FrozenParathaController extends Controller
{
    public function index()
    {
        $FrozenParathaProducts = FrozenParathaProduct::all();
        return view('admin.frozen_paratha.create', compact('FrozenParathaProducts'));
    }

    public function addproduct()
    {
        return view('admin.frozen_paratha.add');
    }
    public function store(Request $request)
    {
        $request->validate([
            'product_no' => 'required|integer',
            'product_name' => 'required',
            'product_description' => 'required',
            'product_img' => 'nullable|image',
        ]);

        $imgPath = null;

        if ($request->hasFile('product_img')) {
            $image = $request->file('product_img');
            $filename = time() . '.' . $image->extension();
            $image->move('Parathaproducts', $filename);
            $imgPath = $filename;
        }

        FrozenParathaProduct::create([
            'product_no' => (int) $request->product_no,
            'product_name' => $request->product_name,
            'product_description' => $request->product_description,
            'product_img' => $imgPath,
        ]);

        return redirect()->route('admin.frozenparatha')->with('success', 'Product added!');
    }


    // for edit
    public function edit($id)
    {
        $FrozenParathaProduct = FrozenParathaProduct::find($id);
        return view('admin.frozen_paratha.edit', compact('FrozenParathaProduct'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'product_no' => 'required|integer',
            'product_name' => 'required',
            'product_description' => 'required',
            'product_img' => 'nullable|image',
        ]);

        $parathaProduct = FrozenParathaProduct::find($id);

        if (!$parathaProduct) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        $parathaProduct->product_no = $request->product_no;
        $parathaProduct->product_name = $request->product_name;
        $parathaProduct->product_description = $request->product_description;

        if ($request->hasFile('product_img')) {
            $image = $request->file('product_img');
            $filename = time() . '.' . $image->extension();
            $image->move('Parathaproducts', $filename);
            $parathaProduct->product_img = $filename;
        }

        $parathaProduct->save();

        return redirect()->route('admin.frozenparatha')->with('success', 'Product updated!');
    }


    // for destroy
    public function destroy($id)
    {
        FrozenParathaProduct::destroy($id);
        return redirect()->route('admin.frozenparatha')->with('success', 'Product deleted!');
    }
}
