<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Hero;
use App\Models\Team;
use App\Models\About;
use App\Models\Price;
use App\Models\Skill;
use App\Models\Whyus;
use App\Models\Action;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        $hero = Hero::where('section_name','heroSection')->first();
        $client= Client::get();
        $about = About::where('section_name','aboutSection')->first();
        $whyus = Whyus::where('name_section','whyusSection')->first();
        $skill = Skill::where('name_section','skillSection')->first();
        $action = Action::where('section_name', 'actionSection')->first();
        $service =  Service::get();
        $team = Team::get();
        $price = Price::get();
        $testimonial = Testimonial::get();
        $faq = Faq::get();
        $contact = Contact::where('section_name','contactSection')->first();
        return view('layouts.frontend', compact('hero','client','about','whyus','skill','service','action','team','price','testimonial','faq','contact'));
    }

    public function hero(){
        
        return view('frontend.pages.hero');
    }


    public function about(){
        return view('frontend.pages.about');
    }

    public function services(){
        return view('frontend.pages.services');
    }

    public function portfolio(){
        return view('frontend.pages.portfolio');
    }

    public function team(){
        return view('frontend.pages.team');
    }

    public function price(){
        return view('frontend.pages.price');
    }

    public function contact(){
        return view('frontend.pages.contact');
    }
}
