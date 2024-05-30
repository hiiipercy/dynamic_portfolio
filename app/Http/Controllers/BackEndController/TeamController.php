<?php

namespace App\Http\Controllers\BackEndController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TeamRequest;
use App\Models\Team;
use Illuminate\Support\Facades\File;
use PDO;

class TeamController extends Controller
{
    public function index(){
        $cardheader= 'Team Section';
        $team = Team::get();
        return view('backend.team.index',['cardheader'=>$cardheader,'team'=>$team]);
    }

    public function create(){
        $cardheader= 'Team Section';
        return view('backend.team.form',['cardheader'=>$cardheader]);
    }

    public function store(TeamRequest $request){
        if($request->has('image')){
            $file = $request->file('image');
            $filename= $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $unique= md5(rand().time().$filename).'.'.$extension;
            $path = 'assets/img/clients/';
            $file->move($path,$unique);
            $image=$path.$unique;
        }

        $team=Team::create([
            'image'=>$image,
            'name'=>$request->name,
            'position'=>$request->position,
            'details'=>$request->details,
        ]); 

        $team->save();
        return redirect()->back();
    }

    public function edit($id){
        $team = Team::findOrFail($id);
        return view('backend.team.edit',compact('team'));
    }

    public function update(TeamRequest $request, $id){
        $team = Team::find($id);
        if($request->has('image')){
            $file= $request->file('image');
            $filename = $file->getClientOriginalName();
            $extension= $file->getClientOriginalExtension();
            $unique= md5(rand().time().$filename).'.'.$extension;
            $path = 'assets/img/clients/';
            $file->move($path,$unique);
            $image=$path.$unique;

            if(File::exists($team->image)){
                File::delete($team->image);
            }
        }else{
            $image= $team->image;
        }

        $team->update([
            'image'=>$image,
            'name'=>$request->name,
            'position'=>$request->position,
            'details'=>$request->details,
        ]);
        return redirect()->back();
    }

    public function destroy($id){
        $team = Team::findOrFail($id);
        $path = public_path($team->image);
        if(file_exists($path)){
            unlink($path);
        }
        $team->delete();

        return redirect()->back();
    }
}
