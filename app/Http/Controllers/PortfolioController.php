<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Portfolio;
use App\Project;
use App\Helpers\FileUploadHelper;

class PortfolioController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
    
        $sliders = Portfolio::with('project')->where('project_id',$id)->get();

       return view('cms.portfolio_projects.index',compact('sliders','id'));
    }

    public function create($id)
    {
        $project= Project::find($id);
        return view('cms.portfolio_projects.create',['id' => $id]);
    }

     
    public function store(Request $request,$id)
    {
    
        $project_id = Project::find($id);
        $image = FileUploadHelper::uploadFile($request, 'image', 'assets/projects/');
        Portfolio::create([
            'alt_image' => $request->alt_image,
            'image' => $image,
            'project_id'=> $project_id->id,
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('cms_project_images',['id' => $id]);
    }

    public function edit($id,$image_id)
    {
        $project = Project::find($id);
        $slider= Portfolio::where('id',$image_id)->first();
    
        return view('cms.portfolio_projects.edit',compact('image_id','slider','project'));
    }


    public function update(Request $request,$id, $project_id)
    {
    //    dd($id);
        $project = Project::find($project_id);
        $slider= Portfolio::find($id);
        
        $image = FileUploadHelper::uploadFile($request, 'image', 'assets/projects/');
        if($image!=null)
        $slider->update(['image' => $image]);

        $slider->update([
            'alt_image' => $request->alt_image,
            'project_id'=> $project->id,
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('cms_project_images',['id' => $project_id]);
    }

    public function delete($project_id,$id)
    {
        // dd($id);
        Portfolio::find($id)->delete();
        toastr()->success('Data has been deleted successfully!');
        return redirect()->route('cms_project_images',['id' => $project_id]);
    }
}
