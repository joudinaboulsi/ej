@extends('layouts.admin')

@section('page_name') Contact Section  @endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
      
        <div class="card-body">
            <form action="{{route('cms_contact_store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                
                   <div class="pb-4">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$contact->title}}" />
                    </div>
        
                    <div class="pb-4">
                        <label for="text" class="form-label">Text</label>
                        <textarea class="form-control" id="text" name="text">{!!$contact->text!!}</textarea>
                    </div>
             
            
                    <div class="pb-4">
                   <button type="submit" class="btn btn-primary">Save</button>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection
