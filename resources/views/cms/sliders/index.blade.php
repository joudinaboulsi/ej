@extends('layouts.admin')

@section('page_name') Sliders  @endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">


    <div class="card">
        <div class="card-header">
            <a href="{{route('cms_slider_create')}}" class="btn btn-primary">Add Slider</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="client_table"  class="table table-striped">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Desc</th>
                            <th>Image</th>
                            <th>Link</th>
                            <th>link Url</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($sliders as $slider)
                        <tr  class="gradeX">
                            <td>{{ $slider->title }}</td>
                            <td>{{ $slider->desc }}</td>
            
                            <td>
                                @if ($slider->bg)
                                  <img src="{{asset('assets/slider/'.$slider->bg)}}" height="100">
                                @endif
                            </td>
                            <td>{{ $slider->link}}</td>
                            <td>{{ $slider->link_href}}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('cms_slider_edit', $slider->id) }}" class="btn btn-outline-success me-2">Edit</a>
                                    <form action="{{ route('cms_slider_delete', $slider->id) }}" method="POST">
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
