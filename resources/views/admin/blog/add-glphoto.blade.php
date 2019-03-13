@extends('admin.master')

@section('body')
<div class="card card-warning">
        <div class="card-header">
          <h3 class="card-title">Add gallery multiple photos </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <form action="{{route('insert-glphoto')}}" method="POST" role="form" enctype="multipart/form-data">
            @csrf

            
            <div class="form-group">
              <label>Post ID</label>
              <input name="post_id"  type="text" class="form-control" value="{{$post_id}}">
            </div>

            <div class="form-group">
                    <label>Image</label>
                    <input name="img[]" type="file" class="form-control" multiple>
            </div>
            
            <div class="form-group" >
                <label class="col-md-3 " style="margin-top: 20px"> Publication Status</label>
                <div class="col-md-9 " style="margin-top: 20px">
                    <input type="radio" name="status" value="1" checked>Published
                    <input type="radio" name="status" value="0">Unpublished
                </div>
            </div>
            <button name="btn" class="btn btn-primary" type="submit">Save</button>
          </form>
        </div>
        <!-- /.card-body -->
      </div>
@endsection