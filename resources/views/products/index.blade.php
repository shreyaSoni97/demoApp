@extends('products.layout')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}" style="float: right;margin-bottom: 20px;"> Create New Product</a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    <table class="table table-bordered datatable">
        <thead>
            <tr>
                <th>No</th>
                <th>Image</th>
                <th>Name</th>
                <th>Details</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td><a href="{{url('')}}/image/{{$product->image}}" target="_blank"><image src="{{url('')}}/image/{{$product->image}}" width="100px"></image></a></td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->detail}}</td>
                    <td><a class="btn btn-info" href="{{route('products.show',$product->id)}}">Show</a>
                    <a class="btn btn-primary" href="{{route('products.edit',$product->id)}}">Edit</a>
                    <form action="{{route('products.destroy',$product->id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger" style="margin-left:128px;margin-top:-39px;">Delete</button>
                    </form>
                </td>
            @endforeach
        </tbody>
    </table>
    
   
        
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
    $( document ).ready(function() {
        $(function () {
            
            var table = $('.datatable').DataTable();
            
        });
    });
</script>