<?php

namespace App\Http\Controllers\BackEndController;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{

    public function create()
    {
        $cardheader = 'Contact Section';
        $contact = Contact::where('section_name','contactSection')->first();
        return view('backend.contact',['cardheader'=>$cardheader, 'contact'=>$contact]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContactRequest $request)
    {
        $contact = Contact::create([
            'section_name'=> 'contactSection',
            'subtitle'=>$request->subtitle,
            'addtitle'=>$request->addtitle,
            'address'=>$request->address,
            'calltitle'=>$request->calltitle,
            'call'=>$request->call,
            'emailtitle'=>$request->emailtitle,
            'email'=>$request->email,
            'map'=>$request->map,
        ]);

        $contact->save();
        return redirect()->back();
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(ContactRequest $request, $id)
    {   

        $contact= Contact::findOrFail($id);
        $contact->update([
            'section_name'=> 'contactSection',
            'subtitle'=>$request->subtitle,
            'addtitle'=>$request->addtitle,
            'address'=>$request->address,
            'calltitle'=>$request->calltitle,
            'call'=>$request->call,
            'emailtitle'=>$request->emailtitle,
            'email'=>$request->email,
            'map'=>$request->map,
        ]);

        return redirect()->back();
    }

}
