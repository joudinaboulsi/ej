<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\FileUploadHelper;
use App\Project;

class ProjectController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
        $projects = Project::all();
        return view('cms.projects.index',compact('projects'));
    }

    public function create(){
        return view('cms.projects.create');
    }

    public function store(Request $request)
    {
        // dd($request);
      
        $image  = FileUploadHelper::uploadFile($request, 'image', 'assets/project/');
        $image_url  = FileUploadHelper::uploadFile($request, 'image_url', 'assets/project/');

       
       $project= Project::create([

            'name' => $request->name,
            'alt' => $request->alt,
            'image_url' => $image_url,
            'image' => $image,

        ]);
     
        toastr()->success('Data has been saved successfully!');
        return redirect()->route('cms_projects');
    }

    public function edit($id)
    {
       
        $project = Project::find($id);
        // dd($project);
        return view('cms.projects.edit', compact('project'));
    }


    public function update(Request $request, $id)
    {
    
        $project = Project::find($id);
        $image_url = FileUploadHelper::uploadFile($request, 'image_url', 'assets/project/');
            if($image_url!=null)
                $project->update(['image_url' => $image_url]);


        $image = FileUploadHelper::uploadFile($request, 'image', 'assets/project/');
        if($image!=null)
            $project->update(['image' => $image]);

        $project->update([
            'name' => $request->name,
            'alt' => $request->alt,  
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('cms_projects');
    }

    public function delete($id)
    {
        Project::where('id',$id)->delete();
        toastr()->success('Data has been deleted successfully!');
        return redirect()->route('cms_projects');
    }

}
