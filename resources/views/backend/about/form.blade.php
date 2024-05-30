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
                    <form id="listForm" action="{{ isset($about) ? route('admin.about.update',$about->id) : route('admin.about.store') }}" method="POST">
                        @csrf
                        @isset($about)
                        @method('PUT')
                        @endisset

                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" value=" {{ $about->title ?? '' }}">
                            @error('title')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="list_1" class="form-label">List 1</label>
                            <input id="itemInput" type="text" name="list_1" class="form-control"  value="{{ $about->list_1 ?? '' }}">


                            @error('list_1')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="list_2" class="form-label">List 2</label>
                            <input id="itemInput" type="text" name="list_2" class="form-control"  value="{{ $about->list_2 ?? '' }}">

                            @error('list_2')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="list_3" class="form-label">List 3</label>
                            <input id="itemInput" type="text" name="list_3" class="form-control"  value="{{ $about->list_3 ?? '' }}">

                            @error('list_3')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                                <textarea type="text" name="description" class="form-control">{{ $about->description ?? '' }}</textarea>
                            @error('description')
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

{{-- <script>
    function addItem() {
        var itemInput = document.getElementById('itemInput');
        var newItem = itemInput.value;
        var itemList = document.getElementById('itemList');

        // Add the new item to the list
        itemList.innerHTML += '<li>' + newItem + '</li>';

        // Clear the input field
        itemInput.value = '';
    }

    // Additional JavaScript functions for submitting the list to Laravel
</script> --}}