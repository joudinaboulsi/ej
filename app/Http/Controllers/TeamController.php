<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Helpers\FileUploadHelper;
class TeamController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index(){

        $team = Team::all();
        return view('cms.team.index',compact('team'));
    }

    public function create()
    {
        return view('cms.team.create');
    }


    public function store(Request $request)
    {
        $image = FileUploadHelper::uploadFile($request, 'image', 'assets/team/');
      
        Team::create([
            'name' => $request->name,
            'position' => $request->position,
            'image' => $image,
            'alt' => $request->alt,

        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('cms_team');
    }

    public function edit($id)
    {
        $team = Team::find($id);
        return view('cms.team.edit', compact('team'));
    }

    public function update(Request $request, $id)
    {

        $team = Team::find($id);

        $image = FileUploadHelper::uploadFile($request, 'image', 'assets/team/');
        if($image!=null)
            $team->update(['image' => $image]);

        $team->update([
            'name' => $request->name,
            'position' => $request->position,

            'alt' => $request->alt,
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('cms_team');
    }

    public function delete($id)
    {
        Team::find($id)->delete();
        toastr()->success('Data has been deleted successfully!');
        return redirect()->route('cms_team');
    }
}
