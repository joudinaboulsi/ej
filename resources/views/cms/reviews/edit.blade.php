@extends('layouts.admin')

@section('page_name') Edit Review  @endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-body">
            <form action="{{route('cms_review_update',$review->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                
                    <div class="pb-4">
                        <label for="text" class="form-label">Text</label>
                        <textarea class="form-control" id="text" name="text">{!!$review->text!!}</textarea>

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
