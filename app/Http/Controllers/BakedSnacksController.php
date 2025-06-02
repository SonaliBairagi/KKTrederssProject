<?php

namespace App\Http\Controllers;

use App\Models\BakedSnacks;

use Illuminate\Http\Request;

class BakedSnacksController extends Controller
{
    public function index()
    {
        $BakedSnackss = BakedSnacks::all();
        return view('admin.bakedSnacks.index', compact('BakedSnackss'));
    }
    public function addproduct()
    {
        return view('admin.bakedSnacks.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'BSproduct_no' => 'required',
            'BSproduct_name' => 'required',
            'BSproduct_description' => 'required',
            'BSproduct_img' => 'nullable|image',
        ]);

        $imgPath = null;

        if ($request->hasFile('BSproduct_img')) {
            $image = $request->file('BSproduct_img');
            $filename = time() . '.' . $image->extension();
            $image->move('BakedSnacks', $filename);
            $imgPath = $filename;
        }

        BakedSnacks::create([
            'BSproduct_no' => $request->BSproduct_no,
            'BSproduct_name' => $request->BSproduct_name,
            'BSproduct_description' => $request->BSproduct_description,
            'BSproduct_img' => $imgPath,
        ]);

        return redirect()->route('admin.bakedSnacks.index')->with('success', 'Product added!');
    }

    // for edit 
    public function edit($id)
    {

        $BakedSnacks = BakedSnacks::find($id);
        return view('admin.bakedSnacks.edit', compact('BakedSnacks'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'BSproduct_no' => 'required',
            'BSproduct_name' => 'required',
            'BSproduct_description' => 'required',
            'BSproduct_img' => 'nullable|image',
        ]);

        $BakedSnacks = BakedSnacks::find($id);

        if ($BakedSnacks) {
            $imgPath = $BakedSnacks->BSproduct_img;

            if ($request->hasFile('BSproduct_img')) {
                $image = $request->file('BSproduct_img');
                $filename = time() . '.' . $image->extension();
                $image->move('BakedSnacks', $filename);
                $imgPath = $filename;
            }

            $BakedSnacks->update([
                'BSproduct_no' => $request->BSproduct_no,
                'BSproduct_name' => $request->BSproduct_name,
                'BSproduct_description' => $request->BSproduct_description,
                'BSproduct_img' => $imgPath,
            ]);

            return redirect()->route('admin.bakedSnacks.index')->with('success', 'Product updated!');
        } else {

            return redirect()->route('admin.bakedSnacks.index')->with('error', 'Product not found!');
        }
    }

    //for destroy
    public function destroy($id)
    {
        $BakedSnacks = BakedSnacks::find($id);
        $BakedSnacks->delete();
        return redirect()->route('admin.bakedSnacks.index')->with('success', 'Product deleted!');
    }
}
