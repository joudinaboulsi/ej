@extends('layouts.admin')

@section('page_name') Services Section @endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">


    <div class="card">
        <div class="card-header">
            <a href="{{route('cms_service_create')}}" class="btn btn-primary">Add Service</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="client_table"  class="table table-striped">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Desc</th>
                            <th>Image</th>
                            <th>Icon</th>
                            <th>Icon White</th>
                            <th>Alt</th>
                            
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($services as $service)
                        <tr  class="gradeX">
                            <td>{{ $service->title }}</td>
                            <td>{!! $service->text !!}</td>
            
                            <td>
                                @if ($service->image)
                                  <img src="{{asset('assets/service/'.$service->image)}}" height="100">
                                @endif
                            </td>
                            <td>
                                @if ($service->icon)
                                  <img src="{{asset('assets/service/'.$service->icon)}}" height="100">
                                @endif
                            </td>
                            <td style="background-color:black;width:150px;height:150px">
                                @if ($service->icon_dark)
                                  <img src="{{asset('assets/service/'.$service->icon_dark)}}" height="100">
                                @endif
                            </td>
                            <td>{{ $service->alt}}</td>
                            
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('cms_service_edit', $service->id) }}" class="btn btn-outline-success me-2">Edit</a>
                                    <form action="{{ route('cms_service_delete', $service->id) }}" method="POST">
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
