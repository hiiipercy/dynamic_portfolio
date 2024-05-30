<?php

namespace App\Http\Controllers\BackEndController;

use App\Models\Whyus;
use Illuminate\Http\Request;
use App\Http\Requests\WhyRequest;
use App\Http\Controllers\Controller;

class WhyusController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cardheader = 'Whyus Section';
        
        $whyus = Whyus::where('name_section','whyusSection')->first();
        return view('backend.whyus.form',['cardheader'=>$cardheader,'whyus'=>$whyus]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(WhyRequest $request)
    {   
        $whyus = Whyus::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'name_section' => 'whyusSection',
            'list_title_1' => $request->list_title_1,
            'list_1' => $request->list_1,
            'list_title_2' => $request->list_title_2,
            'list_2' => $request->list_2,
            'list_title_3' => $request->list_title_3,
            'list_3' => $request->list_3,
        ]);
        $whyus->save();
        return redirect()->back();
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(WhyRequest $request,$id)
    {
        $whyus = Whyus::findOrFail($id);

        $whyus->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'list_title_1' => $request->list_title_1,
            'list_1' => $request->list_1,
            'list_title_2' => $request->list_title_2,
            'list_2' => $request->list_2,
            'list_title_3' => $request->list_title_3,
            'list_3' => $request->list_3,
        ]);
        return redirect()->back();
    }
}
