@extends('admin.master')

@section('body')
<form action="{{route('tagto-post')}}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label>Tags </label>
        <select name="tag[]" class="form-control" multiple >
            @foreach ($tags as $tag)
            <option class="form-control" value="{{$tag->id}}">{{$tag->tag}}</option>
            @endforeach
        </select>
        <input name="post_id" type="hidden" value="{{$post_id}}">
    </div>
    <button class="btn btn-success" type="submit">Save</button>
</form>

@endsection