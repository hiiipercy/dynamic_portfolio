<?php

namespace App\Http\Controllers\BackEndController;

use App\Http\Controllers\Controller;
use App\Http\Requests\ActionRequest;
use App\Models\Action;
use Illuminate\Http\Request;

class ActionController extends Controller
{
    public function create(){
        $cardheader= 'Action Section';
        $action = Action::where('section_name', 'actionSection')->first();
        return view('backend.action',['cardheader'=> $cardheader,'action'=>$action]);
    }

    public function store(ActionRequest $request){
        $action = Action::create([
            'section_name' => 'actionSection',
            'title'=>$request->title,
            'details'=>$request->details
        ]);
        $action->save();
        return redirect()->back();
    }

    public function update(ActionRequest $request, $id){
        $action = Action::findOrFail($id);

        $action->update([
            'title'=>$request->title,
            'details'=>$request->details
        ]);
        return redirect()->back();
    }
}
