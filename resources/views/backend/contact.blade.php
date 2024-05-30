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
                    <form id="store_or_update_form" action="{{ isset($contact) ? route('admin.contact.update',$contact->id) : route('admin.contact.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($contact)
                        @method('PUT')
                        @endisset

                        <div class="mb-3">
                            <label for="subtitle" class="form-label">Sub title</label>
                            <input type="text" name="subtitle" class="form-control" value=" {{ $contact->subtitle ?? '' }}">
                            @error('subtitle')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="addtitle" class="form-label">Add title</label>
                            <input type="text" name="addtitle" class="form-control" value=" {{ $contact->addtitle ?? '' }}">
                            @error('addtitle')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" name="address" class="form-control" value=" {{ $contact->address ?? '' }}">
                            @error('address')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="calltitle" class="form-label">Call title</label>
                            <input type="text" name="calltitle" class="form-control" value=" {{ $contact->calltitle ?? '' }}">
                            @error('calltitle')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="call" class="form-label">Call</label>
                            <input type="text" name="call" class="form-control" value=" {{ $contact->call ?? '' }}">
                            @error('call')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="emailtitle" class="form-label">Email title</label>
                            <input type="text" name="emailtitle" class="form-control" value=" {{ $contact->emailtitle ?? '' }}">
                            @error('emailtitle')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" value=" {{ $contact->email ?? '' }}">
                            @error('email')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="map" class="form-label">Map</label>
                            <input type="text" name="map" class="form-control" value=" {{ $contact->map ?? '' }}">
                            @error('map')
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