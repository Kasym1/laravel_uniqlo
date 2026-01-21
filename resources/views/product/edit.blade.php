@extends('layouts.home')
@section('lock')
    <form action="{{route('product.update', $product->id)}}" method="post">
        <div>
            @csrf
            @method('patch')
            <div class="form-group">
                <label for="snikers">Snikers </label>
                <input type="text" name="snikers" class="form-control" id="snikers" placeholder="snikers"
                       value="{{$product->snikers}}">
            </div>
            <div class="form-group">
                <label for="msm">Msm </label>
                <input type="text" name="msm" class="form-control" id="msm" placeholder="msm"
                       value="{{$product->snikers}}">
            </div>
            <div class="form-group">
                <label for="marshmello">Marshmello </label>
                <input type="text" name="marshmello" class="form-control" id="marshmello" placeholder="marshmello"
                       value="{{$product->snikers}}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <div>
                <a href="{{route('product.show', $product->id)}}">Back</a>
            </div>
        </div>
    </form>
@endsection
