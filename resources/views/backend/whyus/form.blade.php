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
                    <form id="listForm" action="{{ isset($whyus) ? route('admin.whyus.update',$whyus->id) : route('admin.whyus.store') }}" method="POST">
                        @csrf
                        @isset($whyus)
                        @method('PUT')
                        @endisset

                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" value=" {{ $whyus->title ?? '' }}">
                            @error('title')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label for="subtitle" class="form-label">Sub title</label>
                            <input type="text" name="subtitle" class="form-control" value=" {{ $whyus->subtitle ?? '' }}">
                            @error('subtitle')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="list_title_1" class="form-label">List Title 1</label>
                            <input id="itemInput" type="text" name="list_title_1" class="form-control"  value="{{ $whyus->list_title_1 ?? '' }}">
                            @error('list_title_1')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="list_1" class="form-label">List 1</label>
                            <input id="itemInput" type="text" name="list_1" class="form-control"  value="{{ $whyus->list_1 ?? '' }}">
                            @error('list_1')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        
                        <div class="mb-3">
                            <label for="list_title_2" class="form-label">List Title 2</label>
                            <input id="itemInput" type="text" name="list_title_2" class="form-control"  value="{{ $whyus->list_title_2 ?? '' }}">
                            @error('list_title_2')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>



                        <div class="mb-3">
                            <label for="list_2" class="form-label">List 2</label>
                            <input id="itemInput" type="text" name="list_2" class="form-control"  value="{{ $whyus->list_2 ?? '' }}">
                            @error('list_2')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label for="list_title_3" class="form-label">List Title 3</label>
                            <input id="itemInput" type="text" name="list_title_3" class="form-control"  value="{{ $whyus->list_title_3 ?? '' }}">
                            @error('list_title_3')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="list_3" class="form-label">List 3</label>
                            <input id="itemInput" type="text" name="list_3" class="form-control"  value="{{ $whyus->list_3 ?? '' }}">
                            @error('list_3')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                       
                        
                        <div class="mb-3">
                        <button type="submit" class="btn btn-sm btn-primary rounded-0" id="save-btn">save
                        </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection