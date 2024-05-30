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
                    <form id="store_or_update_form" action="{{ isset($hero) ? route('admin.hero.update',$hero->id) : route('admin.hero.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($hero)
                        @method('PUT')
                        @endisset

                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" value=" {{ $hero->title ?? '' }}">
                            @error('title')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="subtitle" class="form-label">Sub-title</label>
                            <input type="text" name="subtitle" class="form-control"  value="{{ $hero->subtitle ?? '' }}">
                            @error('subtitle')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="url" class="form-label">Video url</label>
                            <input type="text" name="url" class="form-control" value="{{ $hero->url ?? '' }}">
                            @error('url')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                         
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" name="image" class="form-control" >
                            @error('image')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                            @isset($hero)
                                <img src="{{ asset($hero->image) }}" width="50px;" alt="">
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