@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="card">
                    <div class="card-header py-2">
                        <h4 class="mb-0 cd-title d-flex align-items-center justify-content-between">
                            {{-- {{ $cardheader }} --}}
                        </h4>
                    </div>
                    <div class="card-body">
                        <form id="store_or_update_form" action="{{ route('admin.price.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <input type="text" name="plane" class="form-control" placeholder="Enter price plane">
                                @error('plane')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <input type="text" name="price" class="form-control" placeholder="Enter price">
                                @error('price')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3 d-flex addColumn">
                                <input type="text" name="item[]"  class="form-control" placeholder="Item name">
                                <button href="javascript:void(0)" type="button" class="btn btn-success btn-sm addRow">+</button>
                                @error('item')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="column">

                            </div>
                            <script>
                                $('.addColumn').on('click','.addRow', function(){
                                    var div='<div class="mb-3 d-flex flex-row">'+
                                                '<input type="text" name="item[]"  class="form-control" placeholder="Item name">'+
                                                '<button href="javascript:void(0)" type="button" class="btn btn-danger btn-sm deleteRow">-</button>'+
                                            '</div>';
                                $('.column').append(div);
                                });
                            
                                $('.column').on ('click','.deleteRow',function(){
                                $(this).parent().remove();
                                });
                            </script>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-sm btn-primary rounded-0" id="save-btn">Add item</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

