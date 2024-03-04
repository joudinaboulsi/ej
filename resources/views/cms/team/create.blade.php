@extends('layouts.admin')

@section('page_name') Create Team   @endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-body">
            <form action="{{route('cms_team_store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                
                    <div class="pb-4">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" />
                    </div>

                    <div class="pb-4">
                        <label for="position" class="form-label">Position</label>
                        <input type="text" class="form-control" id="position" name="position" />
                    </div>

                    <div class="pb-4">
                        <label for="alt" class="form-label">Alt</label>
                        <input type="text" class="form-control" id="alt" name="alt" />
                    </div>

                    
                    <div class="pb-4">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image" />
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
