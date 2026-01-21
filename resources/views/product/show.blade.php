@extends('layouts.home')
@section('lock')
    <div>
        <div>{{$product->id}}. {{$product->snikers}}</div>
        <div>{{$product->msm}}</div>
        <div>{{$product->marshmello}}</div>
        <div>{{$product->nutella}}</div>
        <div>{{$product->mars}}</div>
    </div>
    <div>
        <a href="{{route('product.index')}}">Back</a>
    </div>
    <div>
        <form action="{{route('product.delete', $product->id)}}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Delete">
        </form>
    </div>
    <div>
        <a href="{{route('product.edit', $product->id)}}">Edit</a>
    </div>
@endsection
