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
                    </div>
                    @endif
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                <div id="toolbar">
                                    <button class="btn btn-primary" data-toggle="modal"
                                            data-target="#AddItemToService" >Add Item to Service
                                    </button>
                                </div>
                                <div class="modal-body">
                                <form method="post" action="{{ route('items.store') }}">
                                @csrf
                                    <div class="row" id="temp_sr_results">

                                <table class="table">
                                    <tr>
                                        <td>Name</td>
                                        <td>Quantity</td>
                                        <td>Unit of measure </td>
                                        <td>Action</td>
                                    </tr>

                                   

                                    <tr  >
                                    <td>
                                        <input type="text" class="form-control" value="" name="name_item_code" readonly="">
                                    </td>

                                    <td>
                                        <input type="text" class="form-control"  name="qty_item_code" required="" placeholder="Quantity" value="">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control"  name="uom_item_code" required="" placeholder="Unit Of Measure" value="">
                                    </td>
                                    <td>
                                        <form action="" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                    </td>
                                    </tr> 
                                </table>                        
                                </div> 
                                <div class="col-md-6 form-group">
                                    <button type="submit" class="btn btn-primary block">Generate Service</button>
                                </div> 
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div id="AddItemToService" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
            <div class="modal-dialog" style="width: 1000px;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Select Item </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-12">
                            <input type="text" name="q" id="q" class="form-control" placeholder="Search...." onkeyup="getitem(this.value)">
                        </div>
                        <div class="col-md-12" id="q_results">
                        
                        </div>
                    </div>
                    <div class="modal-footer">
                    <a data-dismiss="modal"href="{{ route('items.index') }}">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
