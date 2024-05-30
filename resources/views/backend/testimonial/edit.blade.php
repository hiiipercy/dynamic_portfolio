@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="card">
                    <div class="card-header py-2">
                        <h4 class="mb-0 cd-title d-flex align-items-center justify-content-between"> 
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.testimonial.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" name="image" class="form-control">
                                @error('image')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                @isset($testimonial)
                                    <img src="{{ asset($testimonial->image  ?? '') }}" width="50px;" alt="">
                                @endisset
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $testimonial->name  ?? ''}}">
                                @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="position" class="form-label">Position</label>
                                <input type="text" name="position" class="form-control"
                                    value="{{ $testimonial->position }}">
                                @error('position')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="star" class="form-label">Star</label>
                                <input type="text" name="star" class="form-control" value="{{ $testimonial->star }}">
                                @error('star')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="comment" class="form-label">Comment</label>
                                <input type="text" name="comment" class="form-control"
                                    value="{{ $testimonial->comment }}">
                                @error('comment')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-sm btn-primary rounded-0" id="save-btn">Update
                                    Item</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
