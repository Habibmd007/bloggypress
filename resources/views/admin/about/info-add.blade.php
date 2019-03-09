@extends('admin.master')

@section('body')
<div class="card card-warning">
        <div class="card-header">
          <h3 class="card-title">Add Info </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <form action="{{route('insert-info')}}" method="POST" role="form">
            @csrf

            <!-- text input -->
            <div class="form-group">
              <label>Font</label>
              <input name="font"  type="text" class="form-control" placeholder="fa-globe">
            </div>

            <div class="form-group">
              <label>Head</label>
              <input name="head" type="text" class="form-control" placeholder="Head Line">
            </div>

            

            

            <!-- textarea -->
            <div class="form-group">
              <label>Textarea</label>
              <textarea name="text" class="form-control" rows="3" placeholder="Enter ..."></textarea>
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