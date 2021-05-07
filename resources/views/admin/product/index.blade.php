@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>Product List</h1>
        </div>
        <div class="col-md-6 text-right">
            <a href="{{route('admin.product.create')}}" class="btn btn-success">Create Product</a>
        </div>
        <div class="col-md-12">
            <table class="table" id="dataTable">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Product Image</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Description</th>
                        <th scope="col">edit</th>
                        <th scope="col">delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td><img style="width:70px;" src="/storage/{{$product->image}}" /></td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->category->name}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>{{$product->description}}</td>
                        <td><a href="{{route('admin.product.edit',[$product->id])}}" class="btn btn-warning">edit</a></td>
                        <td>
                            <form method="post" action="{{route('admin.product.destroy',[$product->id])}}">
                                <button type="submit" class="btn btn-danger">delete</button>
                                @method('delete')
                                @csrf
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-12 text-right">
            {{ $products->links() }}
        </div>
    </div>
</div>
@endsection

@section('js')
@endsection