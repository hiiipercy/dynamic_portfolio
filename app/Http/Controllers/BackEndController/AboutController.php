<?php

namespace App\Http\Controllers\BackEndController;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Requests\AboutRequest;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cardheader = 'About Section';
        $about = About::where('section_name','aboutSection')->first();
        return view('backend.about.form',['cardheader'=>$cardheader,'about'=>$about]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AboutRequest $request)
    {
        $about = About::create([
            'title' => $request->title,
            'section_name' => 'aboutSection',
            'list_1' => $request->list_1,
            'list_2' => $request->list_2,
            'list_3' => $request->list_3,
            'description' => $request->description,
        ]);

        $about->save();
        return redirect()->back();
        
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(AboutRequest $request, $id)
    {   
        $about = About::findOrFail($id);
        $about->update([
            'title' => $request->title,
            'list_1' => $request->list_1,
            'list_2' => $request->list_2,
            'list_3' => $request->list_3,
            'description' => $request->description,
        ]);

        // $about->update();
        return redirect()->back();
    }

}
