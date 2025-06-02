<?php

namespace App\Http\Controllers;

use App\Models\HomeCarousal;

use Illuminate\Http\Request;

class HomeCarousalController extends Controller
{
    public function index()
    {
        $home_carousals = HomeCarousal::all();
        return view('admin.home_carousal.index', compact('home_carousals'));
    }
    public function addproduct()
    {
        return view('admin.home_carousal.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title1' => 'required',
            'title2' => 'required',
            'title3' => 'required',
            'description' => 'required',
            'image' => 'nullable|image',
        ]);

        $imgPath = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->extension();
            $image->move('HomeCarousal', $filename);
            $imgPath = $filename;
        }

        HomeCarousal::create([
            'title1' => $request->title1,
            'title2' => $request->title2,
            'title3' => $request->title3,
            'description' => $request->description,
            'image' => $imgPath,

        ]);

        return redirect()->route('admin.Home_carousal.index')->with('success', 'Product added!');
    }
    // for destroy
    public function destroy($id)
    {
        $home_carousal = HomeCarousal::find($id);
        $home_carousal->delete();
        return redirect()->route('admin.Home_carousal.index')->with('success', 'Product deleted!');
    }

    public function edit($id)
    {
        $home_carousal = HomeCarousal::find($id);
        return view('admin.home_carousal.edit', compact('home_carousal'));
    }

    // for update
    public function update(Request $request, $id)
    {
        $request->validate([
            'title1' => 'required',
            'title2' => 'required',
            'title3' => 'required',
            'description' => 'required',
            'image' => 'nullable|image',
        ]);
        $home_carousal = HomeCarousal::find($id);
        $imgPath = $home_carousal->image;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->extension();
            $image->move('HomeCarousal', $filename);
            $imgPath = $filename;
        }
        $home_carousal->update([
            'title1' => $request->title1,
            'title2' => $request->title2,
            'title3' => $request->title3,
            'description' => $request->description,

            'image' => $imgPath,
        ]);
        return redirect()->route('admin.Home_carousal.index')->with('success', 'Product updated!');
    }
}
