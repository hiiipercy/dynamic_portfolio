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
                    <form id="listForm" action="{{route('admin.service.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="ser_title" class="form-label">Service Box Title</label>
                            <input type="text" name="ser_title" class="form-control">
                            @error('ser_title')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="ser_details" class="form-label">Service Box details</label>
                            <input type="text" name="ser_details" class="form-control">
                            @error('ser_details')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" name="image" class="form-control" >
                            @error('image')
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

<script>
    document.getElementById('addInput').addEventListener('click', function () {
        var inputContainer = document.createElement('div');
        inputContainer.className = 'form-group';
        var inputField = document.createElement('input');
        inputField.type = 'text';
        inputField.name = 'inputs[]';
        inputField.className = 'form-control';
        inputField.placeholder = 'Enter value';
        inputContainer.appendChild(inputField);
        document.querySelector('form').insertBefore(inputContainer, this);
    });
</script>