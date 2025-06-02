<?php

namespace App\Http\Controllers;

use App\Models\HomeAboutUs;

use Illuminate\Http\Request;

class HomeAboutUsController extends Controller
{
    public function index()
    {
        $homeaboutuss = HomeAboutUs::all();
        return view('admin.Home_about_us.index', compact('homeaboutuss'));
    }


    public function addproduct()
    {
        return view('admin.Home_about_us.add');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title1' => 'required',
            'title2' => 'required',
            'title3' => 'required',
            'description1' => 'required',
            'description2' => 'required',
            'image' => 'nullable|image',
        ]);

        $imgPath = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->extension();
            $image->move('HomeAboutUs', $filename);
            $imgPath = $filename;
        }

        HomeAboutUs::create([
            'title1' => $request->title1,
            'title2' => $request->title2,
            'title3' => $request->title3,
            'description1' => $request->description1,
            'description2' => $request->description2,
            'image' => $imgPath,

        ]);

        return redirect()->route('admin.Home_about_us.index')->with('success', 'Product added!');
    }
    // for destroy
    public function destroy($id)
    {
        $homeaboutus = HomeAboutUs::find($id);
        $homeaboutus->delete();
        return redirect()->route('admin.Home_about_us.index')->with('success', 'Product deleted!');
    }


    public function edit($id)
    {
        $homeaboutus = HomeAboutUs::find($id);
        return view('admin.Home_about_us.edit', compact('homeaboutus'));
    }

    // for update
    public function update(Request $request, $id)
    {
        $request->validate([
            'title1' => 'required',
            'title2' => 'required',
            'title3' => 'required',
            'description1' => 'required',
            'description2' => 'required',
            'image' => 'nullable',
        ]);
        $homeaboutus = HomeAboutUs::find($id);
        $imgPath = $homeaboutus->image;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->extension();
            $image->move('HomeAboutUs', $filename);
            $imgPath = $filename;
        }
        $homeaboutus->update([
            'title1' => $request->title1,
            'title2' => $request->title2,
            'title3' => $request->title3,
            'description1' => $request->description1,
            'description2' => $request->description2,
            'image' => $imgPath,
        ]);
        return redirect()->route('admin.Home_about_us.index')->with('success', 'Product updated!');
    }
}
