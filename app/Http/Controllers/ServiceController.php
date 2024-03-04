<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Helpers\FileUploadHelper;


class ServiceController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index(){

        $services = Service::all();
        return view('cms.services.index',compact('services'));
    }

    public function create()
    {
        return view('cms.services.create');
    }


    public function store(Request $request)
    {
        $image = FileUploadHelper::uploadFile($request, 'image', 'assets/service/');
        $icon = FileUploadHelper::uploadFile($request, 'icon', 'assets/service/');
        $icon_dark = FileUploadHelper::uploadFile($request, 'icon_dark', 'assets/service/');
      
        Service::create([
            'title' => $request->title,
            'text' => $request->text,
            'alt' => $request->alt,
            'image' => $image,
            'icon' => $icon,
            'icon_dark' => $icon_dark,
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('cms_services');
    }

    public function edit($id)
    {
        $service = Service::find($id);
        return view('cms.services.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {

        $service = Service::find($id);

        $image = FileUploadHelper::uploadFile($request, 'image', 'assets/service/');
        if($image!=null)
            $service->update(['image' => $image]);

        $icon = FileUploadHelper::uploadFile($request, 'icon', 'assets/service/');
        if($icon!=null)
            $service->update(['icon' => $icon]);

        $icon_dark = FileUploadHelper::uploadFile($request, 'ico$icon_dark', 'assets/service/');
        if($icon_dark!=null)
            $service->update(['ico$icon_dark' => $icon_dark]);

        $service->update([
            'title' => $request->title,
            'text' => $request->text,
            'alt' => $request->alt,
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('cms_services');
    }

    public function delete($id)
    {
        Service::find($id)->delete();
        toastr()->success('Data has been deleted successfully!');
        return redirect()->route('cms_services');
    }
}
