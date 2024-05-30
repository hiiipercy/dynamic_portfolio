<?php

namespace App\Http\Controllers\BackEndController;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\TestimonialRequest;

class TestimonialController extends Controller
{
    public function index()
    {

        $testimonial = Testimonial::get();
        return view('backend.testimonial.index', ['testimonial' => $testimonial]);
    }

    public function create()
    {
        $cardheader = 'Testimonial Section';
        return view('backend.testimonial.form', compact('cardheader'));
    }

    public function store(TestimonialRequest $request)
    {

        if ($request->has('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $exten = $file->getClientOriginalExtension();
            $uniquename = md5(rand() . time() . $filename) . '.' . $exten;
            $path = 'uploads/images/';
            $file->move($path,$uniquename);
            $img = $path . $uniquename;
        }
        $testimonial = Testimonial::create([
            'image' => $img,
            'name' => $request->name,
            'position' => $request->position,
            'star' => $request->star,
            'comment' => $request->comment,
        ]);
        $testimonial->save();
        return redirect()->back();
    }

    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('backend.testimonial.edit', compact('testimonial'));
    }

    public function update(TestimonialRequest $request, $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        if ($request->has('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $exten = $file->getClientOriginalExtension();
            $uniquename = md5(rand() . time() . $filename) . '.' . $exten;
            $path = 'uploads/images/';
            $file->move($path,$uniquename);
            $img = $path . $uniquename;
            if (File::exists($testimonial->image)) {
                File::delete($testimonial->image);
            }
        } else {
            $img = $testimonial->image;
        }

        $testimonial->update([
            'image' => $img,
            'name' => $request->name,
            'position' => $request->position,
            'star' => $request->star,
            'comment' => $request->comment,
        ]);

        return redirect()->back();
    }

    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $path = public_path($testimonial->image);
        if (file_exists($path)) {
            unlink($path);
        }
        $testimonial->delete();
        return redirect()->back();
    }
}
