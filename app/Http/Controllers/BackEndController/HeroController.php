<?php

namespace App\Http\Controllers\BackEndController;

use App\Models\Hero;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\HeroRequest;
use App\Http\Requests\UpdateRequest;
use Illuminate\Support\Facades\File;


class HeroController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function main()
     {
         return view('layouts.master');
     }


    public function index()
    {
        return view('layouts.backend');
    }

    public function create()
    {   $cardheader = 'Hero Section';
        $hero = Hero::where('section_name','heroSection')->first();
        return view('backend.hero', ['cardheader'=>$cardheader], compact('hero'));
    }

    public function store_data(HeroRequest $request)
    {
        if ($request->has('image')) {
            // $image = $this->imageUpload($request->image, 'uploads/hero/');
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $uniqueName = md5(rand() . time() . $filename) . '.' . $extension;
            $path = 'uploads/images/';
            $file->move($path, $uniqueName);
            $image = $path . $uniqueName;
        }

        $hero = Hero::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'url' => $request->url,
            'section_name' => 'heroSection',
            'image' => $image,
        ]);

        $hero->save();
        return redirect()->back();
    }



    public function update_data(UpdateRequest $request, $id)
    {   
        $hero= Hero::findOrFail($id);

        if($request->has('image')){
            $file= $request->file('image');
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $uniqueName = md5(rand().time().$filename).'.'.$extension;
            $path = 'uploads/images/';
            $img = $path.$uniqueName;
            $file->move($path, $uniqueName);

            if(File::exists($hero->image)){
                File::delete($hero->image);
            }
        }else{
            $img = $hero->image;
        }

        $hero->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'url' => $request->url,
            'image'=>$img,
        ]);

        // $hero->update();
        return redirect()->back();
    }

}
