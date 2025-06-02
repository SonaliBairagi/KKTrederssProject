<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FrozenPotatoProduct;

class FrozenPotatoController extends Controller
{
    public function index()
    {
        $frozenpotatos = FrozenPotatoProduct::all();
        return view('admin.frozen_Potato.index', compact('frozenpotatos'));
    }

    public function addProduct()
    {
        return view('admin.frozen_Potato.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Pproduct_no' => 'required',
            'Pproduct_name' => 'required',
            'Pproduct_description' => 'required',
            'Pproduct_img' => 'nullable|image',
        ]);

        $imgPath = null;

        if ($request->hasFile('Pproduct_img')) {
            $image = $request->file('Pproduct_img');
            $filename = time() . '.' . $image->extension();
            $image->move('PotatoProducts', $filename);
            $imgPath = $filename;
        }

        FrozenPotatoProduct::create([
            'Pproduct_no' => $request->Pproduct_no,
            'Pproduct_name' => $request->Pproduct_name,
            'Pproduct_description' => $request->Pproduct_description,
            'Pproduct_img' => $imgPath,
        ]);

        return redirect()->route('admin.frozenPotato.index')->with('success', 'Product added!');
    }

    // for edit the records
    public function edit($id)
    {
        $frozenpotato = FrozenPotatoProduct::find($id);
        return view('admin.frozen_Potato.edit', compact('frozenpotato'));
    }

    // for update the records

    public function update(Request $request, $id)
    {
        $request->validate([
            'Pproduct_no' => 'required',
            'Pproduct_name' => 'required',
            'Pproduct_description' => 'required',
            'Pproduct_img' => 'nullable|image',
        ]);

        $frozenpotato = FrozenPotatoProduct::find($id);

        if (!$frozenpotato) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        $frozenpotato->Pproduct_no = $request->Pproduct_no;
        $frozenpotato->Pproduct_name = $request->Pproduct_name;
        $frozenpotato->Pproduct_description = $request->Pproduct_description;

        if ($request->hasFile('Pproduct_img')) {
            $image = $request->file('Pproduct_img');
            $filename = time() . '.' . $image->extension();
            $image->move('PotatoProducts', $filename);
            $frozenpotato->Pproduct_img = $filename;
        }

        $frozenpotato->save();

        return redirect()->route('admin.frozenPotato.index')->with('success', 'Product updated!');
    }



    // for delete the records
    public function destroy($id)
    {
        FrozenPotatoProduct::find($id)->delete();
        return redirect()->route('admin.frozenPotato.index')->with('success', 'Product deleted!');
    }
}
