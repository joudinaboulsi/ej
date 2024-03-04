<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Helpers\FileUploadHelper;

class SliderController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index(){

        $sliders = Slider::all();
        return view('cms.sliders.index',compact('sliders'));
    }

    public function create()
    {
        return view('cms.sliders.create');
    }


    public function store(Request $request)
    {
        $bg = FileUploadHelper::uploadFile($request, 'bg', 'assets/slider/');
      
        Slider::create([
            'title' => $request->title,
            'desc' => $request->desc,
            'bg' => $bg,
            'link' => $request->link,
            'link_href' => $request->link_href,
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('cms_sliders');
    }

    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('cms.sliders.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {

        $slider = Slider::find($id);

        $bg = FileUploadHelper::uploadFile($request, 'bg', 'assets/slider/');
        if($bg!=null)
            $slider->update(['bg' => $bg]);

        $slider->update([
            'title' => $request->title,
            'desc' => $request->desc,
            'link' => $request->link,
            'link_href' => $request->link_href,
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('cms_sliders');
    }

    public function delete($id)
    {
        Slider::find($id)->delete();
        toastr()->success('Data has been deleted successfully!');
        return redirect()->route('cms_sliders');
    }
}
