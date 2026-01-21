@extends('layouts.home')
@section('lock')
    <div>
        <a href="{{route("product.create")}}" class="btn btn-primary mb-3"> Add</a>
    </div>
    <div>
        @foreach($products as $product)
            <div><a href="{{route('product.show', $product->id)}}">{{$product->id}}. {{$product->snikers}}</a></div>
        @endforeach
    </div>
@endsection
