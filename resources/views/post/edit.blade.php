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
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tags">Tags</label>
                <select multiple class="form-control" id="tags" name="tags[]">
                    @foreach($tags as $tag)
                        <option
                            @foreach($post->tags as $postTag)
                                {{$tag->id === $postTag->id ? 'selected' : ''}}
                                value="{{$tag->id}}">{{$tag->title}}</option>
                    @endforeach
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
@endsection
