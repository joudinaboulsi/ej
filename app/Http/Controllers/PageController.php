<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\About;
use App\Project;
use App\Review;
use App\Team;
use App\ContactCms;
use App\HomePage;
use App\Service;
use App\Settings;
class PageController extends Controller
{
    //
    public function __construct()
    {
        
        app()->singleton('contact', function () {
            return Settings::findOrFail(1);
        });
    }

    public function home(){
        $homepage = HomePage::where('id',1)->get();
        $sliders= Slider::all();
        $about= About::where('id',1)->get();
        $contact= ContactCms::where('id',1)->get();
        $projects = Project::with('images')->get();
        $reviews= Review::all();
        $team= Team::all();
        $services= Service::all();

        return view('home_page',compact('sliders','about','projects','reviews','team','contact','homepage','services'));
    }
}
