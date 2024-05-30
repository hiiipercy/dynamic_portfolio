<?php

namespace App\Http\Controllers\BackEndController;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Requests\ServiceRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    public function index(){
        $cardheader = 'Service Section';
        $service = Service::get();
        return view('backend.service.index',['cardheader'=>$cardheader, 'service'=>$service]);
    }

    public function create(){
        $cardheader = 'Service Section';
        $service = Service::get();
        return view('backend.service.form',['cardheader'=>$cardheader, 'service'=>$service]);
    }

    public function store(ServiceRequest $request){
        if($request->has('image')){
            $file = $request->file('image');
            $filename=$file->getClientOriginalName();
            $extention = $file->getClientOriginalExtension();
            $uniqueName = md5(rand().time().$filename).'.'.$extention;
            $path = 'uploads/images/';
            $file->move($path, $uniqueName);
            $image = $path.$uniqueName;
        }

        $service = Service::create([
            'image'=>$image,
            'ser_title'=>$request->ser_title,
            'ser_details'=>$request->ser_details,
        ]);

        $service->save();
        return redirect()->back();
    }

    public function edit_data($id){
        $service = Service::find($id);
        return view('backend.service.edit',compact('service'));

    }

    public function update(ServiceRequest $request, $id){
        $service = Service::findOrFail($id);
        
        if($request->has('image')){
            $file= $request->file('image');
            $filename = $file->getClientOriginalName();
            $extention = $file->getClientOriginalExtension();
            $uniqueName = md5(rand().time().$filename).'.'.$extention;
            $path = 'uploads/images/';
            $image = $path.$uniqueName;
            $file->move($path,$uniqueName);
           if(File::exists($service->image)){
            File::delete($service->image);
           }
        }else{
            $image = $service->image;
           }

        $service->update([
            'image'=>$image,
            'ser_title'=>$request->ser_title,
            'ser_details'=>$request->ser_details,
        ]);

        return redirect()->back();
    }

    
    public function destroy($id){
        $service = Service::find($id);
        $path = public_path($service->image);
        if(file_exists($path)){
            unlink($path);
        }
        $service->delete();

        return redirect()->route('admin.service.index');
    }
}


