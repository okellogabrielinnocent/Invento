@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="modal-body">
            <div class="card">
                <div class="card-header">Items</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="sparkline13-graph">
                    <div class="modal-body">
                    <form method="post" action="{{ route('items.update', $item->id) }}">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label for="item-code">Code</label>
                                    <input type="text" class="form-control" placeholder="Enter Code" name="code" value="{{$item->code}}">
                                </div>
                                <div class="form-group">
                                <label>Size</label>
                                    <input type="text" class="form-control" placeholder="Enter Size" name="size" value="{{$item->size}}">
                                </div>
                                <div class="form-group">
                                    <label>Cost</label>
                                    <input type="text" class="form-control" placeholder="Enter Cost"  name="cost" value="{{$item->cost}}">
                                </div>
                                <div class="form-group">
                                    <label>Saleable</label>
                                    <input type="text" class="form-control" placeholder="Enter Saleable" name="saleable" value="{{$item->saleable}}">
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Name" name="name" value="{{$item->name}}">
                                </div>
                                <div class="form-group">
                                    <label>Quantity</label>
                                    <input type="text" class="form-control" placeholder="Enter Quantity" name="quantity" value="{{$item->quantity}}">
                                </div>
                                <div class="form-group">
                                    <label>Threshold</label>
                                    <input type="text" class="form-control" placeholder="Enter Minimum Quantity" name="minimum_quantity" value="{{$item->minimum_quantity}}">
                                </div>
                                <div class="form-group">
                                    <label>Brand</label>
                                    <input type="text" class="form-control" placeholder="Enter Brand" name="brand" value="{{$item->brand}}">
                                    
                                </div>
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                        <div class="form-group">
                            <input type="submit"  class="btn btn-primary waves-effect waves-light" value="submit">
                        </div>
                        <a data-dismiss="modal"href="{{ route('items.index') }}">Cancel</a>
                    </div>
                    </form>
                    </div>
                </div>
                </div> 
                </div>
            </div>
    </div>
</div>
@endsection
