@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header py-2">
                    <h4 class="mb-0 cd-title d-flex align-items-center justify-content-between">
                            {{ $cardheader }}
                    </h4>
                </div>
                <div class="card-body">
                    <form id="store_or_update_form" action="{{ isset($action) ? route('admin.action.update',$action->id) : route('admin.action.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($action)
                        @method('PUT')
                        @endisset

                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" value=" {{ $action->title ?? '' }}">
                            @error('title')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="details" class="form-label">Description</label>
                            <input type="text" name="details" class="form-control"  value="{{ $action->details ?? '' }}">
                            @error('details')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                        <button type="submit" class="btn btn-sm btn-primary rounded-0" id="save-btn">save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection