<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Settings;
use App\Helpers\FileUploadHelper;


class SettingsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $settings = Settings::find(1);
        return view('cms.settings',compact('settings'));
      
    }

    // Section Settings
    public function store(Request $request){
        $settings = Settings::find(1);

        $logo= FileUploadHelper::uploadFile($request, 'logo', 'assets/settings/');
        if($logo!=null)
        $settings->update(['logo' => $logo]);

        $logo_dark= FileUploadHelper::uploadFile($request, 'logo_dark', 'assets/settings/');
        if($logo_dark!=null)
        $settings->update(['logo_dark' => $logo_dark]);

        $settings->update([

            'alt'=> $request->alt,
            'alt2'=> $request->alt2,
            'address'=> $request->address,
            'address2'=> $request->address2,
            'address3'=> $request->address3,
            'phone'=> $request->phone,
            'phone_url'=> $request->phone_url,
            'subtitle_phone'=> $request->subtitle_phone,
            'phone2'=> $request->phone2,
            'phone_url2'=> $request->phone_url2,
            'subtitle_phone2'=> $request->subtitle_phone2,
            'fb'=> $request->fb,
            'insta'=> $request->insta,
            'linkedin'=> $request->linkedin,
            'title_contact'=> $request->title_contact,
            'subtitle_contact'=> $request->subtitle_contact,
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('cms_settings');
        
    }
}
