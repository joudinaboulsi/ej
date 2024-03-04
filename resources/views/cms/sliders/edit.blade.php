@extends('layouts.admin')

@section('page_name') Edit Slider  @endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-body">
            <form action="{{route('cms_slider_update',$slider->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="pb-4">
                        <label for="title" class="form-label">Title </label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$slider->title}}"/>
                    </div>

                    <div class="pb-4">
                        <label for="desc" class="form-label">Description </label>
                        <input type="text" class="form-control" id="desc" name="desc" value="{{$slider->desc}}"/> 
                    </div>
                
                    <div class="pb-4">
                        @if ($slider->bg)
                            <img src="{{asset('assets/slider/'.$slider->bg)}}" height="100">
                        @endif
                    </div>
                    <div class="pb-4">
                        <label for="bg" class="form-label">Image</label>
                        <input type="file" class="form-control" id="bg" name="bg" />
                    </div>

                    <div class="pb-4">
                        <label for="link" class="form-label">Link</label>
                        <input type="text" class="form-control" id="link" name="link" value="{{$slider->link}}" />
                    </div>

                    <div class="pb-4">
                        <label for="link_href" class="form-label">Link Url</label>
                        <input type="text" class="form-control" id="link_href" name="link_href" value="{{$slider->link_href}}" />
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
