@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="card">
                    <div class="card-header py-2">
                        <h4 class="mb-0 cd-title d-flex align-items-center justify-content-between">
                            {{-- {{ $cardheader }} --}}
                        </h4>
                    </div>
                    <div class="card-body">
                        <form id="store_or_update_form" action="{{route('admin.team.update',$team->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" name="image" class="form-control">
                                @error('image')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                @isset($team)
                                <img src="{{ asset($team->image) }}" width="50px;" alt="">
                            @endisset
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" value=" {{ $team->name ?? '' }}">
                                @error('name')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="position" class="form-label">Position</label>
                                <input type="text" name="position" class="form-control" value=" {{ $team->position ?? '' }}">
                                @error('position')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="details" class="form-label">Details</label>
                                <input type="text" name="details" class="form-control" value=" {{ $team->details ?? '' }}">
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
