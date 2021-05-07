@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>Whistlist</h1>
        </div>
        <div class="col-md-6 text-right">
            <form method="post" action="{{route('whistlist.destroy')}}">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">
                    Clear Whistlist
                </button>
            </form>
        </div>
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <td>#</td>
                    <td>Name</td>
                    <td>Price</td>
                </thead>
                @foreach($items as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->price}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection