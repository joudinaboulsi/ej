@extends('layouts.admin')

@section('page_name') Review Section  @endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
   
    <div class="card">
        <div class="card-header">
            <a href="{{route('cms_review_create')}}" class="btn btn-primary">Add </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="client_table"  class="table table-striped">
                    <thead>
                        <tr>
                            
                            <th>Review</th>
                           
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($reviews as $review)
                        <tr>
                        
                            <td>{!! $review->text !!}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('cms_review_edit', $review->id) }}" class="btn btn-outline-success me-2">Edit</a>
                                    <form action="{{ route('cms_review_delete', $review->id) }}" method="POST">
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
