@extends('layouts.admin')
@section('page_name') Images Sliders @endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">

            <div class="col-12">
                <div class="card mb-4">
                    <h5 class="card-header"> <a href="{{route('cms_projects')}}" class="btn btn-outline-primary">Back to Project </a></h5>
                    <div class="card-body">
                        <div class="demo-inline-spacing">
                            <a href="{{route('cms_project_image_create',$id)}}" class="btn btn-outline-primary">Add </a>
                        </div>
                        <div class="table-responsive text-nowrap">
                            <table class="table">
                                <thead>
                                    <tr>
                                      
                                        <th>Image</th>
                            
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                               @foreach ($sliders as $slider)
                                        <tr>
                                            <td>
                                                @if ($slider->image)
                                                    <img src="../assets/projects/{{ $slider->image }}" width="100">
                                                @endif
                                            </td>
                                            <td>
                                                <a class="btn btn-primary" href="{{ route('cms_project_image_edit', [$id,$slider->id]) }}">Edit</a>
                                                <form action="{{route('cms_project_image_delete',[$id,$slider->id])}}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td> 
                                        </tr>
                                    @endforeach  
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
