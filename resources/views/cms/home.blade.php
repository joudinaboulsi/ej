@extends('layouts.admin')

@section('page_name') Home Page  @endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
      
        <div class="card-body">
            <form action="{{route('cms_home_store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                
                   <div class="pb-4">
                        <label for="title_service" class="form-label">Title Service</label>
                        <input type="text" class="form-control" id="title_service" name="title_service" value="{{$home->title_service}}" />
                    </div>

                    <div class="pb-4">
                        <label for="title_project" class="form-label">Title Project</label>
                        <input type="text" class="form-control" id="title_project" name="title_project" value="{{$home->title_project}}" />
                    </div>

                    <div class="pb-4">
                        <label for="title_review" class="form-label">Title Review</label>
                        <input type="text" class="form-control" id="title_review" name="title_review" value="{{$home->title_review}}" />
                    </div>
                    <div class="pb-4">
                        <label for="title_team" class="form-label">Title Team</label>
                        <input type="text" class="form-control" id="title_team" name="title_team" value="{{$home->title_team}}" />
                    </div>

                    <div class="pb-4">
                        <label for="title_comp1" class="form-label">Title Component 1</label>
                        <input type="text" class="form-control" id="title_comp1" name="title_comp1" value="{{$home->title_comp1}}" />
                    </div>

                    <div class="pb-4">
                        <label for="href_comp2" class="form-label">Link  Component 1</label>
                        <input type="text" class="form-control" id="href_comp1" name="href_comp1" value="{{$home->href_comp1}}" />
                    </div>

                    <div class="pb-4">
                        <label for="title_comp2" class="form-label">Title Component 2</label>
                        <input type="text" class="form-control" id="title_comp2" name="title_comp2" value="{{$home->title_comp2}}" />
                    </div>

                    <div class="pb-4">
                        <label for="href_comp2" class="form-label">Link  Component 2</label>
                        <input type="text" class="form-control" id="href_comp2" name="href_comp2" value="{{$home->href_comp2}}" />
                    </div>

                    <div class="pb-4">
                        <label for="title_comp3" class="form-label">Title Component 3</label>
                        <input type="text" class="form-control" id="title_comp3" name="title_comp3" value="{{$home->title_comp3}}" />
                    </div>

                    <div class="pb-4">
                        <label for="href_comp3" class="form-label">Link  Component 2</label>
                        <input type="text" class="form-control" id="href_comp3" name="href_comp3" value="{{$home->href_comp3}}" />
                    </div>
    
            
                    <div class="pb-4">
                   <button type="submit" class="btn btn-primary">Save</button>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection
