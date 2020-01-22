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
                    <form action="addpatient" class="dropzone dropzone-custom needsclick addcourse" method="POST">
                        <input type="hidden" class="form-control" name="_token" value="{{ csrf_token() }}">
                        <!-- <input type="hidden" name="user" value="{{$user_id ?? ''}}"> -->
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label>Code</label>
                                    <input type="text" class="form-control" placeholder="{{$items->code}}" readonly>
                                </div>
                                <div class="form-group">
                                <label>Code</label>
                                    <input type="text" class="form-control" placeholder="{{$items->code}}" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Code</label>
                                    <input type="text" class="form-control" placeholder="{{$items->code}}" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Code</label>
                                    <input type="text" class="form-control" placeholder="{{$items->code}}" readonly>
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label>Code</label>
                                    <input type="text" class="form-control" placeholder="{{$items->code}}" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Code</label>
                                    <input type="text" class="form-control" placeholder="{{$items->code}}" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Code</label>
                                    <input type="text" class="form-control" placeholder="{{$items->code}}" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Code</label>
                                    <input type="text" class="form-control" placeholder="{{$items->code}}" readonly>
                                    
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <a data-dismiss="modal" href="#">Cancel</a>
                </div>
            </div>
                    </div> 
                    
                </div>
            </div>
        <!-- </div> -->
    </div>
</div>
@endsection
