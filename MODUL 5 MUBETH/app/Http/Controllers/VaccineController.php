<?php

namespace App\Http\Controllers;

use App\Models\vaccine;
use Illuminate\Http\Request;

class VaccineController extends Controller
{
    public function index()
    {
        $vaccines = vaccine::get();
        return view('vaccine', compact('vaccines'));
    }

    public function store()
    {
        $attr = request()->validate([
            'name' => 'required',
            'price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'description' => 'required'
        ]);

        if (request()->file('image')) {
            $attr['image'] = request()->file('image')->store('img-vaccine');
        }
        vaccine::create($attr);
        return redirect()->back()->with('success', 'Success add vaccine.');
    }

    public function update(vaccine $vaccine)
    {
        $attr = request()->validate([
            'name' => 'required',
            'price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'description' => 'required'
        ]);

        if (request()->file('image')) {
            \Storage::delete($vaccine->image);
            $updateimg = request()->file('image')->store('img-vaccine');
        } else {
            $updateimg = $vaccine->image;
        }

        $attr['image'] = $updateimg;
        $vaccine->update($attr);
        return redirect()->back()->with('success', 'Success update vaccine.');
    }

    public function destroy(vaccine $vaccine)
    {
        \Storage::delete($vaccine->image);
        $vaccine->patient()->delete();
        $vaccine->delete();
        return redirect()->back()->with('success', 'Success delete vaccine.');
    }
}
