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
                    <form  class="dropzone dropzone-custom needsclick addcourse" method="POST">
                    {{ csrf_field() }}
                        <input type="hidden" class="form-control" name="_method" value="post">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label>Code</label>
                                    <input type="text" class="form-control" placeholder="{{$items->code}}" readonly>
                                </div>
                                <div class="form-group">
                                <label>Size</label>
                                    <input type="text" class="form-control" placeholder="{{$items->size}}" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Cost</label>
                                    <input type="text" class="form-control" placeholder="{{$items->cost}}" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Saleable</label>
                                    <input type="text" class="form-control" placeholder="{{$items->saleable}}" readonly>
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="{{$items->name}}" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Quantity</label>
                                    <input type="text" class="form-control" placeholder="{{$items->quantity}}" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Threshold</label>
                                    <input type="text" class="form-control" placeholder="{{$items->minimum_quantity}}" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Brand</label>
                                    <input type="text" class="form-control" placeholder="{{$items->brand}}" readonly>
                                    
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                <a data-dismiss="modal"href="{{ route('items.index') }}">Cancel</a>
                </div>
            </div>
                    </div> 
                    
                </div>
            </div>
        <!-- </div> -->
    </div>
</div>
@endsection
