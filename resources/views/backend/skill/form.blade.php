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
                        <form id="form"
                            action="{{ isset($skill) ? route('admin.skills.update', $skill->id) : route('admin.skills.store') }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @isset($skill)
                                @method('PUT')
                            @endisset

                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" name="image" class="form-control">
                                @error('image')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                @isset($skill)
                                    <img src="{{ asset($skill->image) }}" width="50px;" alt="">
                                @endisset
                            </div>

                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" name="title" class="form-control"
                                    value=" {{ $skill->title ?? '' }}">
                                @error('title')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="subtitle" class="form-label">Sub Title</label>
                                <input id="itemInput" type="text" name="subtitle" class="form-control"
                                    value="{{ $skill->subtitle ?? '' }}">


                                @error('subtitle')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="skill_name_1" class="form-label">Skill name 1</label>
                                <input id="itemInput" type="text" name="skill_name_1" class="form-control"
                                    value="{{ $skill->skill_name_1 ?? '' }}">

                                @error('skill_name_1')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="skill_percent_1" class="form-label">Skill percent 1</label>
                                <input id="itemInput" type="text" name="skill_percent_1" class="form-control"
                                    value="{{ $skill->skill_percent_1 ?? '' }}">

                                @error('skill_percent_1')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="skill_fill_percent_1" class="form-label">skill fill percent 1</label>
                                <input id="itemInput" type="text" name="skill_fill_percent_1" class="form-control"
                                    value="{{ $skill->skill_fill_percent_1 ?? '' }}">

                                @error('skill_fill_percent_1')
                                    skill_fill_percent_1
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>


                            <div class="mb-3">
                                <label for="skill_name_2" class="form-label">Skill name 2</label>
                                <input id="itemInput" type="text" name="skill_name_2" class="form-control"
                                    value="{{ $skill->skill_name_2 ?? '' }}">

                                @error('skill_name_2')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="skill_percent_2" class="form-label">Skill skill percent 2</label>
                                <input id="itemInput" type="text" name="skill_percent_2" class="form-control"
                                    value="{{ $skill->skill_percent_2 ?? '' }}">

                                @error('skill_percent_2')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="skill_fill_percent_2" class="form-label">skill fill percent 2</label>
                                <input id="itemInput" type="text" name="skill_fill_percent_2" class="form-control"
                                    value="{{ $skill->skill_fill_percent_2 ?? '' }}">

                                @error('skill_fill_percent_2')
                                    skill_fill_percent_1
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>


                            <div class="mb-3">
                                <label for="skill_name_3" class="form-label">Skill name 3</label>
                                <input id="itemInput" type="text" name="skill_name_3" class="form-control"
                                    value="{{ $skill->skill_name_3 ?? '' }}">

                                @error('skill_name_3')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="skill_percent_3" class="form-label">Skill skill percent 3</label>
                                <input id="itemInput" type="text" name="skill_percent_3" class="form-control"
                                    value="{{ $skill->skill_percent_3 ?? '' }}">

                                @error('skill_percent_3')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>


                            <div class="mb-3">
                                <label for="skill_fill_percent_3" class="form-label">skill fill percent 3</label>
                                <input id="itemInput" type="text" name="skill_fill_percent_3" class="form-control"
                                    value="{{ $skill->skill_fill_percent_3 ?? '' }}">

                                @error('skill_fill_percent_3')
                                    skill_fill_percent_1
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

