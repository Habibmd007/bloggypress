@extends('admin.master')

@section('body')
<div class="row">


<div class="col-md-6">

        <div class="card">
            <div class="card-header">
                    All tags
            </div>
            <div class="card-body">
              
        <table class="table table-striped table-inverse table-responsive">
            <thead class="thead-inverse">
                <tr>
                    <th>#</th>
                    <th>Tag</th>
                    <th>Slug</th>
                    <th><i class="fa fa-dot-circle-o" aria-hidden="true"></i></th>
                </tr>
            </thead>
            <tbody>
            @foreach ($tags as $tag)
            <tr>
                <td scope="row">{{$tag->id}}</td>
                <td>{{$tag->tag}}</td>
                <td>{{$tag->slug}}</td>
                <td>
                <a name="" id="" class="btn btn-danger mb-3" href="{{route('deletetag',['id' => $tag->id])}}" role="button" onclick="return confirm('Are sure delete this ??? ')"> <i class="fa fa-trash" aria-hidden="true"></i> </a>
                </td>
            </tr>
            @endforeach
            </tbody>
    </table>
</div>
</div>

</div> 
<div class="col-md-6">
        <div class="card">
            <div class="card-header">
                    Creat Tag  
            </div>
        <div class="card-body">
            <form action="{{route('insert-tag')}}" method="post">
                @csrf
                <div class="form-group">
                  <input type="text" class="form-control" name="tag" id="tag" aria-describedby="helpId" placeholder="Tag">
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-info ">Save</button>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>


@endsection