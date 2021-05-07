@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>{{$category->name}}</h1>
            <hr />
        </div>

        @if($products->count() == 0)
        <div class="col-md-12">
            <h1>No Products.</h1>
        </div>

        @else

        @foreach($products as $product)
        <div class="col-md-3 p-3">
            <div class="card" style="width: 18rem;">
                <img src="{{$product->image}}" class="card-img-top" alt="product-image">
                <div class="card-body">
                    <h5 class="card-title">{{$product->name}}</h5>
                    <p class="card-text">{{$product->category->name}}</p>
                    <a href="{{route('product',[$product->id])}}" class="btn btn-primary">Detail</a>
                </div>
            </div>
        </div>
        @endforeach

        @endif
    </div>
</div>
@endsection