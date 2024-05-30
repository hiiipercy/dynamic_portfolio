@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="card">
                    <div class="card-header py-2">
                        <h4 class="mb-0 cd-title d-flex align-items-center justify-content-between">
                          {{ $cardheader }}
                            <a href="{{ route('admin.price.create') }}" class="btn btn-sm btn-primary rounded-0">+Add
                                </a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderless w-100 table-sm table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Plane</th>
                                    <th>Price</th>
                                    <th>Item</th>
                                    <th>Action</th>
                                </tr>
                                
                            </thead>
                            <tbody>
                                @foreach ($price as $value)
                                    <tr>
                                        <td>{{ $value->id }}</td>
                                        <td>
                                            {{ $value->plane }}
                                        </td>
                                        <td>
                                            {{ $value->price }}
                                        </td>
                                        <td>
                                            @foreach (json_decode($value->item) as $key=>$item)
                                                {{ $item }},
                                            @endforeach
                                        </td>
                                        <td>
                                            <div class="col-sm">
                                                <a href="{{ route('admin.price.edit', $value->id) }}"
                                                    class="btn btn-primary btn-sm">Edit</a>
                                            </div>
                                            <div class="col-sm">
                                                <form action="{{ route('admin.price.destroy', $value->id) }}"
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
