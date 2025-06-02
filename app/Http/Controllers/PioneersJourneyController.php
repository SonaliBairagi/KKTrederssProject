<?php

namespace App\Http\Controllers;

use App\Models\PioneersJourney;


use Illuminate\Http\Request;

class PioneersJourneyController extends Controller
{
    public function index()
    {
        $PioneersJourneys = PioneersJourney::all();
        return view('admin.Pioneers_Journey.index', compact('PioneersJourneys'));
    }

    public function addProduct()
    {
        return view('admin.Pioneers_Journey.add');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title1' => 'required',
            'description1' => 'required',
            'image1' => 'nullable|image',

            'title2' => 'required',
            'description2' => 'required',
            'image2' => 'nullable|image',
        ]);

        $image1 = null;
        $image2 = null;

        $destinationPath = public_path('PioneersJourny');
        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0755, true);
        }

        if ($request->hasFile('image1')) {
            $image = $request->file('image1');
            $filename = uniqid('image1_', true) . '.' . $image->extension();
            $image->move($destinationPath, $filename);
            $image1 = $filename;
        }

        if ($request->hasFile('image2')) {
            $image = $request->file('image2');
            $filename = uniqid('image2_', true) . '.' . $image->extension();
            $image->move($destinationPath, $filename);
            $image2 = $filename;
        }

        PioneersJourney::create([
            'title1' => $request->title1,
            'description1' => $request->description1,
            'image1' => $image1,

            'title2' => $request->title2,
            'description2' => $request->description2,
            'image2' => $image2,
        ]);

        return redirect()->route('admin.Pioneers_Journey.index')->with('success', 'Pioneers Journey added successfully!');
    }


    public function edit($id)
    {
        $PioneersJourney = PioneersJourney::find($id);
        return view('admin.Pioneers_Journey.edit', compact('PioneersJourney'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title1' => 'required',
            'description1' => 'required',
            'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',

            'title2' => 'required',
            'description2' => 'required',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $pioneer = PioneersJourney::findOrFail($id);

        $image1 = $pioneer->image1;
        $image2 = $pioneer->image2;

        // Upload image1 if present
        if ($request->hasFile('image1')) {
            $image = $request->file('image1');
            $filename = time() . '_image1.' . $image->extension();
            $image->move(public_path('PioneersJourny'), $filename);
            $image1 = $filename;
        }

        // Upload image2 if present
        if ($request->hasFile('image2')) {
            $image = $request->file('image2');
            $filename = time() . '_image2.' . $image->extension();
            $image->move(public_path('PioneersJourny'), $filename);
            $image2 = $filename;
        }

        $pioneer->update([
            'title1' => $request->title1,
            'description1' => $request->description1,
            'image1' => $image1,

            'title2' => $request->title2,
            'description2' => $request->description2,
            'image2' => $image2,
        ]);

        return redirect()->route('admin.Pioneers_Journey.index')->with('success', 'Pioneers Journey updated successfully');
    }

    public function destroy($id)
    {
        PioneersJourney::find($id)->delete();
        return redirect()->route('admin.Pioneers_Journey.index')->with('success', 'Product Deleted
        Successfully');
    }
}
