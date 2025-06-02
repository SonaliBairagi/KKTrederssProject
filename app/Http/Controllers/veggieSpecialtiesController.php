<?php

namespace App\Http\Controllers;

use App\Models\veggieSpecialties;


use Illuminate\Http\Request;

class veggieSpecialtiesController extends Controller
{
    public function index()
    {
        $veggieSpecialtiess = veggieSpecialties::all();
        return view('admin.Veggie_specialties.index', compact('veggieSpecialtiess'));
    }
    public function addproduct()
    {
        return view('admin.Veggie_specialties.add');
    }
    public function store(Request $request)
    {
        $request->validate([
            'VSproduct_no' => 'required',
            'VSproduct_name' => 'required',
            'VSproduct_description' => 'required',
            'VSproduct_img' => 'nullable|image',
        ]);

        $imgPath = null;

        if ($request->hasFile('VSproduct_img')) {
            $image = $request->file('VSproduct_img');
            $filename = time() . '.' . $image->extension();
            $image->move('veggieSpecialties', $filename);
            $imgPath = $filename;
        }

        veggieSpecialties::create([
            'VSproduct_no' => $request->VSproduct_no,
            'VSproduct_name' => $request->VSproduct_name,
            'VSproduct_description' => $request->VSproduct_description,
            'VSproduct_img' => $imgPath,
        ]);

        return redirect()->route('admin.Veggie_specialties.index')->with('success', 'Product added!');
    }

    //for edit 
    public function edit($id)
    {

        $veggieSpecialties = veggieSpecialties::find($id);
        return view('admin.Veggie_specialties.edit', compact('veggieSpecialties'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'VSproduct_no' => 'required',
            'VSproduct_name' => 'required',
            'VSproduct_description' => 'required',
            'VSproduct_img' => 'nullable|image',
        ]);

        $veggieSpecialties = veggieSpecialties::find($id);

        if ($veggieSpecialties) {
            $imgPath = $veggieSpecialties->VSproduct_img;

            if ($request->hasFile('VSproduct_img')) {
                $image = $request->file('VSproduct_img');
                $filename = time() . '.' . $image->extension();
                $image->move('veggieSpecialties', $filename);
                $imgPath = $filename;
            }

            $veggieSpecialties->update([
                'VSproduct_no' => $request->VSproduct_no,
                'VSproduct_name' => $request->VSproduct_name,
                'VSproduct_description' => $request->VSproduct_description,
                'VSproduct_img' => $imgPath,
            ]);

            return redirect()->route('admin.Veggie_specialties.index')->with('success', 'Product updated!');
        } else {

            return redirect()->route('admin.Veggie_specialties.index')->with('error', 'Product not found!');
        }
    }

    //for destoy 
    public function destroy($id)
    {
        $veggieSpecialties = veggieSpecialties::find($id);
        if ($veggieSpecialties) {
            $veggieSpecialties->delete();
            return redirect()->route('admin.Veggie_specialties.index')->with('success', 'Product deleted!');
        } else {
            return redirect()->route('admin.Veggie_specialties.index')->with('error', 'Product not found!');
        }
    }
}
