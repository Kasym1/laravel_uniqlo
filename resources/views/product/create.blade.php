@extends('layouts.home')
@section('lock')
    <div>
        <form action="{{route('product.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="snikers">Snikers </label>
                <input type="text" name="snikers" class="form-control" id="snikers" placeholder="snikers">
            </div>
            <div class="form-group">
                <label for="msm">Msm </label>
                <input type="text" name="msm" class="form-control" id="msm" placeholder="msm">
            </div>
            <div class="form-group">
                <label for="marshmello">Marshmello </label>
                <input type="text" name="marshmello" class="form-control" id="marshmello" placeholder="marshmello">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
