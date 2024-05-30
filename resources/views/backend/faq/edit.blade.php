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
                        <form action="{{ route('admin.faq.update', $faq->id) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            <div class="mb-3">
                                <label for="question" class="form-label">question</label>
                                <input type="text" name="question" class="form-control" value="{{ $faq->question }}">
                                @error('question')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="answer" class="form-label">Answer</label>
                                <input type="text" name="answer" class="form-control" value="{{ $faq->answer }}">
                                @error('answer')
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
