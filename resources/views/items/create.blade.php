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
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                    @endif
                    <div class="sparkline13-graph">
                    <div class="modal-body">
                    <form method="post" action="{{ route('items.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label for="code">Code</label>
                                    <input type="text" class="form-control" placeholder="Enter Code" name="code">
                                </div>
                                <div class="form-group">
                                <label>Size</label>
                                    <input type="text" class="form-control" placeholder="Item Size" name="size">
                                </div>
                                <div class="form-group">
                                    <label for="cost">Cost</label>
                                    <input type="text" class="form-control" placeholder="Item Cost" name="cost">
                                </div>
                                <div class="form-group">
                                    <label for="saleable">Saleable</label>
                                    <input type="text" class="form-control" placeholder="Saleable" name="saleable">
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" placeholder="Item Name" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="quantity">Quantity</label>
                                    <input type="text" class="form-control" placeholder="Item Qauntity" name="quantity">
                                </div>
                                <div class="form-group">
                                    <label for="minimum_quantity">Minimum Quantity</label>
                                    <input type="integer" class="form-control" placeholder="Minimum Quantity" name="minimum_quantity">
                                </div>
                                <div class="form-group">
                                    <label for="brand">Brand</label>
                                    <input type="text" class="form-control" placeholder="Item Brand" name="brand">
                                    
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
