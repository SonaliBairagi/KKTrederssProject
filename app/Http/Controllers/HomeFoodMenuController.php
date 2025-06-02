<?php

namespace App\Http\Controllers;

use App\Models\HomeFoodMenuProduct;

use Illuminate\Http\Request;

class HomeFoodMenuController extends Controller
{
    // public function index()
    // {
    //     return view('admin.Home_food_menu.index');
    // }


    public function index()
    {
        $HomeFoodMenuProducts = HomeFoodMenuProduct::all();
        return view('admin.Home_food_menu.index', compact('HomeFoodMenuProducts'));
    }
    public function addProduct()
    {
        return view('admin.Home_food_menu.add');
    }
    //for store the data
    public function store(Request $request)
    {
        $request->validate([

            'FoodMenuImage' => 'nullable|image',
        ]);

        $imgPath = null;

        if ($request->hasFile('FoodMenuImage')) {
            $image = $request->file('FoodMenuImage');
            $filename = time() . '.' . $image->extension();
            $image->move('HomeFoodProducts', $filename);
            $imgPath = $filename;
        }

        HomeFoodMenuProduct::create([

            'FoodMenuImage' => $imgPath,
        ]);

        return redirect()->route('admin.Home_food_menu.index')->with('success', 'Product added!');
    }

    // for edit
    public function edit($id)
    {
        $HomeFoodMenuProduct = HomeFoodMenuProduct::find($id);
        return view('admin.Home_food_menu.edit', compact('HomeFoodMenuProduct'));
    }

    // for upddate
    public function update(Request $request, $id)
    {
        $HomeFoodMenuProduct = HomeFoodMenuProduct::find($id);

        $request->validate([
            'FoodMenuImage' => 'nullable|image',
        ]);

        $imgPath = $HomeFoodMenuProduct->FoodMenuImage; // Use correct column name

        if ($request->hasFile('FoodMenuImage')) {
            $image = $request->file('FoodMenuImage');
            $filename = time() . '.' . $image->extension();
            $image->move('HomeFoodProducts', $filename);
            $imgPath = $filename;
        }

        $HomeFoodMenuProduct->update([
            'FoodMenuImage' => $imgPath,
        ]);

        return redirect()->route('admin.Home_food_menu.index')->with('success', 'Product updated!');
    }


    // for destroy the records
    public function destroy($id)
    {
        $HomeFoodMenuProduct = HomeFoodMenuProduct::find($id);
        $HomeFoodMenuProduct->delete();
        return redirect()->route('admin.Home_food_menu.index')->with('success', 'Product deleted!');
    }
}
