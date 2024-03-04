@extends('layouts.admin')

@section('page_name') projects  @endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
   
    <div class="card">
        <div class="card-header">
            <a href="{{route('cms_project_create')}}" class="btn btn-primary">Add</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="client_table"  class="table table-striped">
                    <thead>
                        <tr>
                            <th>Project Name</th>
                            <th>Image</th>
                            <th>Alt</th>
                           
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($projects as $project)
                        <tr>
                            <td>{{ $project->name}}</td>
                            <td>  
                                 @if ($project->image)
                                    <img src="../assets/project/{{ $project->image }}" width="50">
                                @endif</td>
                            
                            <td>  <a class="btn btn-primary" href="{{ route('cms_project_images', $project->id) }}">Show</a></td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('cms_project_edit', $project->id) }}" class="btn btn-success me-2">Edit</a>
                                    <form action="{{ route('cms_project_delete',$project->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this data?')">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
