@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="card">
                    <div class="card-header py-2">
                        <h4 class="mb-0 cd-title d-flex align-items-center justify-content-between">
                          {{-- @if ($client)
                                Edit
                            @else
                            {{ $cardheader }}
                            @endif --}}
                            <a href="{{ route('admin.team.create') }}" class="btn btn-sm btn-primary rounded-0">+Add
                                Team member</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderless w-100 table-sm table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Details</th>
                                    <th>Action</th>
                                </tr>
                                
                            </thead>
                            <tbody>
                                @foreach ($team as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>
                                            <img src="{{ asset($item->image) }}" width="100" height="100"
                                                alt="image">
                                        </td>
                                        <td>
                                            {{ $item->name }}
                                        </td>
                                        <td>
                                            {{ $item->position }}
                                        </td>
                                        <td>
                                            {{ $item->details }}
                                        </td>
                                        <td>
                                            <div class="col-sm">
                                                <a href="{{ route('admin.team.edit', $item->id) }}"
                                                    class="btn btn-primary btn-sm">Edit</a>
                                            </div>
                                            <div class="col-sm">
                                                <form action="{{ route('admin.team.destroy', $item->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection