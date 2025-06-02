<?php

namespace App\Http\Controllers;

use App\Models\CompanyJourny;

use Illuminate\Http\Request;

class CompanyJournyController extends Controller
{
    public function index()
    {
        $companyJourneys = CompanyJourny::all();
        return view('admin.company_Journey.index', compact('companyJourneys'));
    }

    public function addProduct()
    {
        return view('admin.company_Journey.add');
    }
    public function store(Request $request)
    {
        $request->validate([
            'WhyChooseTitle' => 'required',
            'WhyChooseDescription' => 'required',
            'whyChooseImage' => 'nullable|image',

            'OurMission' => 'required',
            'OurVision' => 'required',

            'OurValuesTitle' => 'required',
            'OurValuesDescription' => 'required',
            'OurValuesImage' => 'nullable|image',

            'OurServicetitle1' => 'required',
            'OurServiceDescription1' => 'required',

            'OurServicetitle2' => 'required',
            'OurServiceDescription2' => 'required',

            'OurServicetitle3' => 'required',
            'OurServiceDescription3' => 'required',
        ]);

        $whyChooseImage = null;
        $ourValuesImage = null;

        // Upload whyChooseImage
        if ($request->hasFile('whyChooseImage')) {
            $image = $request->file('whyChooseImage');
            $filename = time() . '_whychoose.' . $image->extension();
            $image->move('CompanyJourny', $filename);
            $whyChooseImage = $filename;
        }

        // Upload OurValuesImage
        if ($request->hasFile('OurValuesImage')) {
            $image = $request->file('OurValuesImage');
            $filename = time() . '_ourvalues.' . $image->extension();
            $image->move('CompanyJourny', $filename);
            $ourValuesImage = $filename;
        }

        CompanyJourny::create([
            'WhyChooseTitle' => $request->WhyChooseTitle,
            'WhyChooseDescription' => $request->WhyChooseDescription,
            'whyChooseImage' => $whyChooseImage,

            'OurMission' => $request->OurMission,
            'OurVision' => $request->OurVision,

            'OurValuesTitle' => $request->OurValuesTitle,
            'OurValuesDescription' => $request->OurValuesDescription,
            'OurValuesImage' => $ourValuesImage,

            'OurServicetitle1' => $request->OurServicetitle1,
            'OurServiceDescription1' => $request->OurServiceDescription1,

            'OurServicetitle2' => $request->OurServicetitle2,
            'OurServiceDescription2' => $request->OurServiceDescription2,

            'OurServicetitle3' => $request->OurServicetitle3,
            'OurServiceDescription3' => $request->OurServiceDescription3,
        ]);

        return redirect()->route('admin.CompanyJourney.index')->with('success', 'Product added!');
    }



    // for edit
    public function edit($id)
    {
        $companyJourney = CompanyJourny::find($id);
        return view('admin.company_Journey.edit', compact('companyJourney'));
    }

    // for update the data

    public function update(Request $request, $id)
    {
        $request->validate([
            'WhyChooseTitle' => 'required',
            'WhyChooseDescription' => 'required',
            'whyChooseImage' => 'nullable|image',

            'OurMission' => 'required',
            'OurVision' => 'required',

            'OurValuesTitle' => 'required',
            'OurValuesDescription' => 'required',
            'OurValuesImage' => 'nullable|image',

            'OurServicetitle1' => 'required',
            'OurServiceDescription1' => 'required',

            'OurServicetitle2' => 'required',
            'OurServiceDescription2' => 'required',

            'OurServicetitle3' => 'required',
            'OurServiceDescription3' => 'required',
        ]);
        $companyJourney = CompanyJourny::find($id);
        $whyChooseImage = $companyJourney->whyChooseImage;
        $ourValuesImage = $companyJourney->OurValuesImage;

        // Upload whyChooseImage
        if ($request->hasFile('whyChooseImage')) {
            $image = $request->file('whyChooseImage');
            $filename = time() . '_whychoose.' . $image->extension();
            $image->move('CompanyJourny', $filename);
            $whyChooseImage = $filename;
        }


        // Upload OurValuesImage
        if ($request->hasFile('OurValuesImage')) {
            $image = $request->file('OurValuesImage');
            $filename = time() . '_ourvalues.' . $image->extension();
            $image->move('CompanyJourny', $filename);
            $ourValuesImage = $filename;
        }

        $companyJourney->update([
            'WhyChooseTitle' => $request->WhyChooseTitle,
            'WhyChooseDescription' => $request->WhyChooseDescription,
            'whyChooseImage' => $whyChooseImage,

            'OurMission' => $request->OurMission,
            'OurVision' => $request->OurVision,

            'OurValuesTitle' => $request->OurValuesTitle,
            'OurValuesDescription' => $request->OurValuesDescription,
            'OurValuesImage' => $ourValuesImage,

            'OurServicetitle1' => $request->OurServicetitle1,
            'OurServiceDescription1' => $request->OurServiceDescription1,

            'OurServicetitle2' => $request->OurServicetitle2,
            'OurServiceDescription2' => $request->OurServiceDescription2,

            'OurServicetitle3' => $request->OurServicetitle3,
            'OurServiceDescription3' => $request->OurServiceDescription3,
        ]);
        return redirect()->route('admin.CompanyJourney.index')->with('success', 'Company Journey updated
        successfully');
    }


    //for destroy
    public function destroy($id)
    {
        $companyJourney = CompanyJourny::find($id);
        if ($companyJourney) {
            $companyJourney->delete();
            return redirect()->route('admin.CompanyJourney.index')->with('success', 'Product deleted!');
        } else {
            return redirect()->route('admin.CompanyJourney.index')->with('error', 'Product not found!');
        }
    }
}
