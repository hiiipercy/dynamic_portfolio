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
                        <form id="store_or_update_form" action="{{route('admin.client.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" name="image" class="form-control">
                                @error('image')
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
