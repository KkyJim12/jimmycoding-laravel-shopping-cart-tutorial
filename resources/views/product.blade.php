@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @if(session('message'))
        <div class="col-md-12">
            <div class="alert alert-danger" role="alert">
                {{session('message')}}
            </div>
        </div>
        @endif
        <div class="col-md-6">
            <img class="w-100" src="{{$product->image}}" alt="product-img">
        </div>
        <div class="col-md-6">
            <h1>Name: {{$product->name}}</h1>
            <h3>Category: {{$product->category->name}}</h3>
            <hr />
            <h5>Price: {{$product->price}}</h5>
            <h5>Stocks: {{$product->quantity}}</h5>
            <hr />
            <h5>Detail</h5>
            <p>{{$product->description}}</p>
            <form method="post" action="{{route('product.store')}}">
                @csrf
                <input type="hidden" name="product_id" value="{{$product->id}}">
                <button type="submit" class="btn btn-primary w-100">Add Whistlist</button>
            </form>
        </div>
    </div>
</div>
@endsection