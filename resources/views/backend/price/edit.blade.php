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
                        <form id="store_or_update_form" action="{{ route('admin.price.update', $price->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <input type="text" name="plane" class="form-control" placeholder="Enter price plane"
                                    value="{{ $price->plane }}">
                                @error('plane')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <input type="text" name="price" class="form-control" placeholder="Enter price"
                                    value="{{ $price->price }}">
                                @error('price')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            @php
                                $data = explode(',', $price->item);
                            @endphp
                            @php
                                $items = json_decode($price->item);
                            @endphp
                             
                            @foreach ($items as $list)
                                    <div class="mb-3 addColumn  d-flex justify-content-between">
                                        <input type="text" name="item[]" class="form-control" placeholder="Item name"
                                            value="{{ $list }}">
                                        @if ($loop->first)
                                            <button href="javascript:void(0)" type="button"
                                                class="btn btn-success btn-sm addRow">+</button>
                                        @else
                                            <button href="javascript:void(0)" type="button"
                                                class="btn btn-danger btn-sm deleteRow">-</button>
                                        @endif
                                        @error('item')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                
                            @endforeach
                            <div class="mb-3 column">
                            </div>
                            <script>
                                $('.addColumn').on('click','.addRow', function(){
                                    var div='<div class="mb-3 d-flex flex-row">'+
                                                '<input type="text" name="item[]"  class="form-control" placeholder="Item name">'+
                                                '<button href="javascript:void(0)" type="button" class="btn btn-danger btn-sm deleteRow">-</button>'+
                                            '</div>';
                                $('.column').append(div);
                                });
                            
                                $('.column,.addColumn').on ('click','.deleteRow',function(){
                                $(this).parent().remove();
                                });
                            </script>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-sm btn-primary rounded-0" id="save-btn">Update
                                    item</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
