@extends('layouts.main')
@section('content')
    <form action="{{route('post.update', $post->id)}}" method="post">
        <div>
            @csrf
            @method('patch')
            <div class="form-group">
                <label for="title">Title </label>
                <input type="text" name="title" class="form-control" id="title" placeholder="title"
                       value="{{$post->title}}">
            </div>
            <div class="form-group">
                <label for="content">Content </label>
                <input type="text" name="content" class="form-control" id="content" placeholder="content"
                       value="{{$post->title}}">
            </div>
            <div class="form-group">
                <label for="image">Image </label>
                <input type="text" name="image" class="form-control" id="image" placeholder="image"
                       value="{{$post->title}}">
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select class="form-control" id="category" name="category_id">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}"
                            @selected($category->id == $post->category_id)>
                            {{ $category->title }}
                        value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
            </select>
        </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
@endsection
