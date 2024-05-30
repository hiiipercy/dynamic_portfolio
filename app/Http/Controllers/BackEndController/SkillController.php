<?php

namespace App\Http\Controllers\BackEndController;

use App\Models\Skill;
use Illuminate\Http\Request;
use App\Http\Requests\SkillRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class SkillController extends Controller
{   
    public function index()
    {
    
    }

    public function create()
    {
        $cardheader = 'Skill Section';
        $skill = Skill::where('name_section','skillSection')->first();
        return view('backend.skill.form',['cardheader'=>$cardheader,'skill'=>$skill]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SkillRequest $request)
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

        $skill = Skill::create([
            'image' => $image,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'name_section' => 'skillSection',
            'skill_name_1'=>$request->skill_name_1,
            'skill_percent_1'=>$request->skill_percent_1,
            'skill_fill_percent_1'=>$request->skill_fill_percent_1,
            'skill_name_2'=>$request->skill_name_2,
            'skill_percent_2'=>$request->skill_percent_2,
            'skill_fill_percent_2'=>$request->skill_fill_percent_2,
            'skill_name_3'=>$request->skill_name_3,
            'skill_percent_3'=>$request->skill_percent_3,
            'skill_fill_percent_3'=>$request->skill_fill_percent_3,
        ]);
        $skill->save();
        return redirect()->back();
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(SkillRequest $request,$id)
    {
        $skill= Skill::findOrFail($id);

        if($request->has('image')){
            $file= $request->file('image');
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $uniqueName = md5(rand().time().$filename).'.'.$extension;
            $path = 'uploads/images/';
            $img = $path.$uniqueName;
            $file->move($path, $uniqueName);

            if(File::exists($skill->image)){
                File::delete($skill->image);
            }
        }else{
            $img = $skill->image;
        }

        $skill->update([
            'image' => $img,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'skill_name_1'=>$request->skill_name_1,
            'skill_percent_1'=>$request->skill_percent_1,
            'skill_fill_percent_1'=>$request->skill_fill_percent_1,
            'skill_name_2'=>$request->skill_name_2,
            'skill_percent_2'=>$request->skill_percent_2,
            'skill_fill_percent_2'=>$request->skill_fill_percent_2,
            'skill_name_3'=>$request->skill_name_3,
            'skill_percent_3'=>$request->skill_percent_3,
            'skill_fill_percent_3'=>$request->skill_fill_percent_3,
        ]);
        return redirect()->back();
    }
}
