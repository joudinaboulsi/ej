<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;

class ReviewController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index(){
  
        $reviews = Review::all();
        return view('cms.reviews.index',compact('reviews'));
    }  
    
    public function create()
    {
        return view('cms.reviews.create');
    }
    
    
    public function store(Request $request)
    {
      
        Review::create([
    
            'text' => $request->text,
       ]);
    
        toastr()->success('Data has been saved successfully!');
        return redirect()->route('cms_reviews');
    }
    
    public function edit($id)
    {
        $review = Review::find($id);
        return view('cms.reviews.edit', compact('review'));
    }
    
    public function update(Request $request, $id)
    {

        Review::find($id)->update([
            'text' => $request->text,
        ]);
    
        toastr()->success('Data has been saved successfully!');
        return redirect()->route('cms_reviews');
    }
    
    public function delete($id)
    {
        Review::find($id)->delete();
        toastr()->success('Data has been deleted successfully!');
        return redirect()->route('cms_reviews');
    }
}
