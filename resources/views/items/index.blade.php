@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="modal-body">
            <div class="card">
                <div class="card-header">Items</div>
                
                <div class="col-lg-10 margin-tb">
                    <div class="pull-left">
                        <a class="btn btn-primary"href="{{ route('items.create') }}">Create Item</a>
                    </div>
                </div>
                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="sparkline13-graph">

                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>code</th>
                                        <th>Name</th>
                                        <th>size</th>
                                        <th>cost</th>
                                        <th>quantity</th>
                                        <th>brand</th>
                                        <th>Created On</th>
                                        <th>Action</th>
                                        <th></th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i = 1;?>
                                    @foreach($items as $item)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$item->code}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->size}}</td>
                                            <td>{{$item->cost}}</td>
                                            <td>{{$item->quantity}}</td>
                                            <td>{{$item->brand}}</td>
                                            <td>{{$item->created_at}}</td>
                                            <td>
                                                <button class="btn btn-primary"  $status title="View Item" onclick="location.href='/items/{{$item->id}}'">view
                                                </button>
                                                <button class="btn btn-success" $status  title="Edit Item " onclick="location.href='/items/{{$item->id}}/edit'">Edit
                                                </button>

                                                <td>                
                                                <form action="{{ route('items.destroy', $item->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit">Delete</button>
                                                </form>
                                                </td>
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
