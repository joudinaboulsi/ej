@extends('layouts.admin')

@section('page_name') Settings  @endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
       
        <div class="card-body">
            <form action="{{route('cms_settings_store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                 

                   <div class="pb-4 col-md-6">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{$settings->address}}" />
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="address2" class="form-label">Address 2</label>
                        <input type="text" class="form-control" id="address2" name="address2" value="{{$settings->address2}}" />
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="address3" class="form-label">Address 3</label>
                        <input type="text" class="form-control" id="address3" name="address3" value="{{$settings->address3}}" />
                    </div>


                   <div class="pb-4 col-md-6">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{$settings->phone}}" />
                    </div>
                    <div class="pb-4 col-md-6">
                        <label for="phone_url" class="form-label">Phone Url</label>
                        <input type="text" class="form-control" id="phone_url" name="phone_url" value="{{$settings->phone_url}}" />
                    </div>
                    <div class="pb-4 col-md-6">
                        <label for="subtitle_phone" class="form-label">Phone Subtiltle</label>
                        <input type="text" class="form-control" id="subtitle_phone" name="subtitle_phone" value="{{$settings->subtitle_phone}}" />
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="phone2" class="form-label">Phone Whatsapp</label>
                        <input type="text" class="form-control" id="phone2" name="phone2" value="{{$settings->phone2}}" />
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="phone_url2" class="form-label">Phone Whatsapp Url</label>
                        <input type="text" class="form-control" id="phone_url2" name="phone_url2" value="{{$settings->phone_url2}}" />
                    </div>
                    <div class="pb-4 col-md-6">
                        <label for="subtitle_phone2" class="form-label">Whtsapp Subtiltle</label>
                        <input type="text" class="form-control" id="subtitle_phone2" name="subtitle_phone2" value="{{$settings->subtitle_phone2}}" />
                    </div>

                   
                    
                  

                   <div class="pb-4 col-md-6">
                        <label for="fb" class="form-label">Facebook</label>
                        <input type="text" class="form-control" id="fb" name="fb" value="{{$settings->fb}}" />
                    </div>

                   <div class="pb-4 col-md-6">
                        <label for="insta" class="form-label">Instagram</label>
                        <input type="text" class="form-control" id="insta" name="insta" value="{{$settings->insta}}" />
                    </div>

                   <div class="pb-4 col-md-6">
                        <label for="linkedin" class="form-label">Linkedin</label>
                        <input type="text" class="form-control" id="linkedin" name="linkedin" value="{{$settings->linkedin}}" />
                    </div>
                   <div class="pb-4 col-md-6">
                        <label for="subtitle_contact" class="form-label">Title Contact (sidebar)</label>
                        <input type="text" class="form-control" id="title_contact" name="title_contact" value="{{$settings->title_contact}}" />
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="subtitle_contact" class="form-label">SubTitle Contact (sidebar)</label>
                        <input type="text" class="form-control" id="subtitle_contact" name="subtitle_contact" value="{{$settings->subtitle_contact}}" />
                    </div>


                    <div class="pb-4 col-md-6">
                        @if ($settings->logo)
                            <img src="{{ asset('assets/settings/'.$settings->logo) }}" alt="" height="100" class="d-block">
                        @endif
                        <label for="logo" class="form-label">Logo Header</label>
                        <input type="file" class="form-control" id="logo" name="logo">
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="alt" class="form-label" style="margin-top: 103px;">Alt Logo </label>
                        <input type="text" class="form-control" id="alt" name="alt" value="{{ $settings->alt }}">
                    </div>


                    <div class="pb-4 col-md-6">
                        @if ($settings->logo_dark)
                            <img src="{{ asset('assets/settings/'.$settings->logo_dark) }}" alt="" height="100" class="d-block">
                        @endif
                        <label for="logo_dark" class="form-label">Logo Footer </label>
                        <input type="file" class="form-control" id="logo_dark" name="logo_dark">
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="alt2" class="form-label" style="margin-top: 103px;">Alt 2</label>
                        <input type="text" class="form-control" id="alt2" name="alt2" value="{{ $settings->alt2 }}">
                    </div>

                  

                    <div class="pb-4">
                   <button type="submit" class="btn btn-primary">Save</button>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection
