<?php

namespace App\Http\Controllers\BackEndController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PricePlaneRequest;
use App\Models\PricePlane;

class PricePlaneController extends Controller
{
    public function create(){
        $cardheader='Price Plane Section';
        $formheader='Add Price Plane';
        $priceplane= PricePlane::get();
        return view('backend.price.formplane',['cardheader'=>$cardheader, 'priceplane'=>$priceplane, 'formheader'=>$formheader]);
    }


    public function store(PricePlaneRequest $request){
        $priceplane = PricePlane::create([
            'plane' => $request->plane,
            'price' => $request->price,
        ]);
        $priceplane->save();
        return redirect()->back();
    }

    public function editplane($id){
        $cardheader = 'Edit Price Section';
        $priceplane = PricePlane::findOrFail($id);
        return view('backend.price.editplane',compact('priceplane','cardheader'));
    }

    public function update(PricePlaneRequest $request, $id){
        $priceplane = PricePlane::findOrFail($id);
        $priceplane->update([
            'plane' => $request->plane,
            'price' => $request->price,
        ]);
        return redirect()->back();
    }

    public function destroy($id){
        $priceplane = PricePlane::findOrFail($id);
        $priceplane->delete();
        return redirect()->back();
    }
}