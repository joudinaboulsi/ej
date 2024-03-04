@extends('layouts.admin')

@section('page_name') About Section  @endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
      
        <div class="card-body">
            <form action="{{route('cms_about_store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">

            
                   <div class="pb-4">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$about->title}}" />
                    </div>

                   <div class="pb-4">
                        <label for="subtitle" class="form-label">Subtitle</label>
                        <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{$about->subtitle}}" />
                    </div>
                   
        
                    <div class="pb-4">
                        <label for="text" class="form-label">Text</label>
                        <textarea class="form-control" id="text" name="text">{!!$about->text!!}</textarea>
                    </div>
             
                    <div class="pb-4">
                        @if ($about->image)
                            <img src="{{ asset('assets/about/'.$about->image) }}" alt="" width="100">
                        @endif
                    </div>
                    <div class="pb-4">

                        <label for="image" class="form-label">Image </label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>

                    <div class="pb-4">
                        <label for="alt" class="form-label">Alt  </label>
                        <input type="text" class="form-control" id="alt" name="alt" value="{{ $about->alt }}">
                    </div>
             

            
                    <div class="pb-4">
                   <button type="submit" class="btn btn-primary">Save</button>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection
