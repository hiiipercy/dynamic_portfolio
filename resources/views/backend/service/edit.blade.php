@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="card">
                    <div class="card-header py-2">
                        <h4 class="mb-0 cd-title d-flex align-items-center justify-content-between">
                            {{ $service->ser_title }}
                        </h4>
                    </div>
                    <div class="card-body">
                        <form id="store_or_update_form" action="{{ route('admin.service.update', $service->id) }}"
                            method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            <div class="mb-3">
                                <label for="ser_title" class="form-label">Service Title</label>
                                <input type="text" name="ser_title" class="form-control" value="{{ $service->ser_title }}">
                                @error('ser_title')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="ser_details" class="form-label">Service Details</label>
                                <input type="text" name="ser_details" class="form-control" value="{{ $service->ser_details }}">
                                @error('ser_details')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" name="image" class="form-control">
                                @error('image')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                @isset($service)
                                    <img src="{{ asset($service->image) }}" width="50px;" alt="">
                                @endisset
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
