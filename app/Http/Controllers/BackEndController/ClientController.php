<?php

namespace App\Http\Controllers\BackEndController;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Requests\ImageRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\ClientRequest;
use Illuminate\Support\Facades\File;

class ClientController extends Controller
{
    public function index(){
        $client = Client::get();
        $cardheader = 'Client Section';
        return view('backend.client.index',['cardheader'=>$cardheader,'client'=>$client]);
    }

    public function create(){
        $cardheader = 'Add new Image';
        $client = Client::where('section_name','clientSection')->get();
        return view('backend.client.form',['cardheader'=>$cardheader],compact('client'));
    }

    public function store_data(ClientRequest $request){
        if ($request->has('image')) {
            // $image = $this->imageUpload($request->image, 'uploads/hero/');
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $uniqueName = md5(rand() . time() . $filename) . '.' . $extension;
            $path = 'assets/img/clients/';
            $file->move($path, $uniqueName);
            $image = $path . $uniqueName;
        }

        $client = Client::create([
            'section_name' => 'clientSection',
            'image' =>$image,
        ]);

        $client->save();
        return back();
    }

    public function edit_data($id){
        $client= Client::find($id);
        return view('backend.client.edit', compact('client'));
    }

    public function update_data(ImageRequest $request, $id)
    {   
        $client= Client::findOrFail($id);

        if($request->has('image')){
            $file= $request->file('image');
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $uniqueName = md5(rand().time().$filename).'.'.$extension;
            $path = 'assets/img/clients/';
            $image = $path.$uniqueName;
            $file->move($path, $uniqueName);

            if(File::exists($client->image)){
                File::delete($client->image);
            }
        }else{
            $image = $client->image;
        }

        $client->update([
            'image'=>$image,
        ]);

        // $hero->update();
        return redirect()->back();
    }

    public function destroy($id){
        $client = Client::find($id);
        $path = public_path($client->image);
        if(file_exists($path)){
            unlink($path);
        }
        $client->delete();

        return redirect()->route('admin.client.index');
    }
}
