<?php

namespace App\Http\Controllers\BackEndController;

use Illuminate\Http\Request;
use App\Http\Requests\PriceRequest;
use App\Http\Controllers\Controller;
use App\Models\Price;
use App\Models\PricePlane;

class PriceController extends Controller
{
    public function index(){
        $cardheader = 'Price Section';
        $priceplane = PricePlane::get();
        $price = Price::get();
        return view('backend.price.index',['cardheader'=>$cardheader,'price'=>$price,'priceplane'=>$priceplane]);
    }

    public function plane(){
        $cardheader = 'Price Section';
        $priceplane = PricePlane::get();
        $price = Price::get();
        return view('backend.price.plane',['cardheader'=>$cardheader,'price'=>$price,'priceplane'=>$priceplane]);
    }

    // public function index(){
    //     $cardheader = 'Price Section';
    //     $price = Price::where('section_name','priceAction')->first();
    //     $priceplane = PricePlane::get();
    //     return view('backend.price.index',['cardheader'=>$cardheader, 'price'=>$price,'priceplane'=>$priceplane]);
    // }


    public function create(){
        $cardheader = 'Add price feature';
        $listheader = 'Feature List';
        $price = Price::get();
        return view('backend.price.form',['cardheader'=>$cardheader,'listheader'=>$listheader,'price'=>$price,]);
    }


    public function store(PriceRequest $request){
        $price = Price::create([
            'item' => $request->item
        ]);

        $price->save();
        return redirect()->back();
    }

    public function edit($id){
        $cardheader = 'Edit Price Section';
        $price = Price::findOrFail($id);
        return view('backend.price.edit',compact('price','cardheader'));
    }

    public function update(PriceRequest $request, $id){
        $price = Price::findOrFail($id);
        $price->update([

            'item' => $request->item
        ]);
        return redirect()->route('admin.price.create');

    }

    public function destroy($id){
        $price = Price::findOrFail($id);
        $price->delete();
        return redirect()->back();
    }
}