<?php

namespace App\Http\Controllers\BackEndController;

use App\Models\Faq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\FaqRequest;

class FaqController extends Controller
{
    public function index()
    {
        $faq = Faq::get();
        return view('backend.faq.index', ['faq' => $faq]);
    }

    public function create()
    {
        $cardheader = 'Faq Section';
        return view('backend.faq.form', compact('cardheader'));
    }

    public function store(FaqRequest $request)
    {

        $faq = Faq::create([
            'question' => $request->question,
            'answer' => $request->answer
        ]);
        $faq->save();
        return redirect()->back();
    }

    public function edit($id)
    {
        $faq = Faq::findOrFail($id);
        return view('backend.faq.edit', compact('faq'));
    }

    public function update(FaqRequest $request, $id)
    {
        $faq = Faq::findOrFail($id);
    

        $faq->update([
            'question' => $request->question,
            'answer' => $request->answer
        ]);

        return redirect()->back();
    }

    public function destroy($id)
    {
        $faq = Faq::findOrFail($id);
        $path = public_path($faq->image);
        if (file_exists($path)) {
            unlink($path);
        }
        $faq->delete();
        return redirect()->back();
    }
}