@extends('layouts.admin')
@section('page_name') Edit image  @endsection

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <h5 class="card-header">Edit Image</h5>
                    <div class="card-body">
                        <form method="POST" action="{{route('cms_project_image_update',[$slider->id, $project->id])}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                <div class="col-12">
                                    <div class="mb-3 mt-3">
                                        @if ($slider->image)
                                        <img src="{{ asset('assets/projects/'.$slider->image) }}" height="100" class="d-block">
                                      @endif
                                        <label for="image" class="form-label">Image</label>
                                        <input class="form-control" type="file" name="image" id="image" />
                                    </div>
                                </div>
                             
                            </div>
                                <div class="col-12">
                                    <div class="mb-3 mt-3">
                                        <button type="submit" class="btn btn-outline-primary">Save</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection
