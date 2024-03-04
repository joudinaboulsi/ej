<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactCms;
use App\About;
use App\homepage;
use App\Helpers\FileUploadHelper;

class HomePageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Section HomePage
    public function homepage(){

        $home = HomePage::find(1);
        return view('cms.home',compact('home'));
      
    }

    // Section HomePage
    public function storeHomePage(Request $request){
        $home = HomePage::find(1);

        $home->update([
            'title_service'=> $request->title_service,
            'title_project'=> $request->title_project,
            'title_review'=> $request->title_review,
            'title_team'=> $request->title_team,
            'title_comp1'=> $request->title_comp1,
            'href_comp1'=> $request->href_comp1,
            'title_comp2'=> $request->title_comp2,
            'href_comp2'=> $request->href_comp2,
            'title_comp3'=> $request->title_comp3,
            'href_comp3'=> $request->href_comp3,
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('cms_home');
        
    }

    // Section About
    public function about(){
        $about = About::find(1);
        return view('cms.about',compact('about','page'));
      
    }

    // Section About
    public function storeAbout(Request $request){
        $about = About::find(1);

        $image= FileUploadHelper::uploadFile($request, 'image', 'assets/about/');
        if($image!=null)
        $about->update(['image' => $image]);

        $about->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'text' => $request->text,
            'alt'=> $request->alt,
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('cms_about');
        
    }
    
    // Section Contact
    public function contact(){
       
        $contact = ContactCms::find(1);
        return view('cms.contact',compact('contact','page'));
        
    }

    // Section Contact
    public function storeContact(Request $request){
        $contact = ContactCms::find(1);
       
        $contact->update([
            'title' => $request->title,
            'text'=> $request->text,
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('cms_contact');
    }
    
}
