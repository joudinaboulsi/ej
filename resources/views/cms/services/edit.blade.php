@extends('layouts.admin')

@section('page_name') Edit Service  @endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-body">
            <form action="{{route('cms_service_update',$service->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="pb-4">
                        <label for="title" class="form-label">Title </label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$service->title}}"/>
                    </div>

                    <div class="pb-4">
                        <label for="text" class="form-label">Description </label>
                        <textarea  class="form-control" id="text" name="text">{!!$service->text!!}</textarea>
                    </div>
                
                    <div class="pb-4">
                        @if ($service->image)
                            <img src="{{asset('assets/service/'.$service->image)}}" height="100">
                        @endif
                    </div>
                    <div class="pb-4">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image" />
                    </div>

                    <div class="pb-4">
                        @if ($service->icon)
                            <img src="{{asset('assets/service/'.$service->icon)}}" height="100">
                        @endif
                    </div>
                    <div class="pb-4">
                        <label for="icon" class="form-label">Icon</label>
                        <input type="file" class="form-control" id="icon" name="icon" />
                    </div>

                    <div class="pb-4">
                        <label for="alt" class="form-label">Alt</label>
                        <input type="text" class="form-control" id="alt" name="alt" value="{{$service->alt}}" />
                    </div>
                    <div class="pb-4" style="background-color:black;width:150px;height:150px">
                        @if ($service->icon_dark)
                            <img src="{{asset('assets/service/'.$service->icon_dark)}}" height="100">
                        @endif
                    </div>
                    <div class="pb-4">
                        <label for="icon_dark" class="form-label">Icon White</label>
                        <input type="file" class="form-control" id="icon_dark" name="icon_dark" />
                    </div>

                 


                    <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Save</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>

@endsection
