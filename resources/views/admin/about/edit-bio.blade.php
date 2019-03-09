@extends('admin.master')

@section('body')
<div class="card card-warning">
        <div class="card-header">
          <h3 class="card-title">Edit Bio</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <form action="{{route('update-bio')}}" method="POST" role="form" enctype="multipart/form-data">
            @csrf

            <!-- text input -->
            <div class="form-group">
              <label>Name</label>
              <input name="name"  type="text" class="form-control" value="{{$bio->name}}">
              <input name="id"  type="hidden" class="form-control" value="{{$bio->id}}">
            </div>

            <div class="form-group">
              <label>Designation</label>
              <input name="desig" type="text" class="form-control" value="{{$bio->desig}}">
            </div>

            

            

            <!-- textarea -->
            <div class="form-group">
              <label>Textarea</label>
              <textarea name="text" class="form-control" rows="3">{{$bio->text}}</textarea>
            </div>

            <div class="form-group">
                    <label>Image</label>
                    <input name="img" type="file" class="form-control">
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