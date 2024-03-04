@extends('layouts.admin')

@section('page_name') Team Section  @endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
   
    <div class="card">
        <div class="card-header">
            <a href="{{route('cms_team_create')}}" class="btn btn-primary">Add </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="client_table"  class="table table-striped">
                    <thead>
                        <tr>
                            
                            <th>Name</th>
                            <th>Position</th>
                            <th>Alt</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($team as $t)
                        <tr>
                        
                            <td>{{ $t->name}}</td>
                            <td>{{ $t->position}}</td>
                            <td>{{ $t->alt}}</td>
                            <td>
                            @if ($t->image)
                                  <img src="{{asset('assets/team/'.$t->image)}}" height="100">
                                @endif
                            </td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('cms_team_edit', $t->id) }}" class="btn btn-outline-success me-2">Edit</a>
                                    <form action="{{ route('cms_team_delete', $t->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete this data?')">Delete</button>
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
