@extends('admin.master')

@section('body')


<div class="card card-warning">
        <div class="card-header">
          <h3 class="card-title">Add Blog Post </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            
          <form action="{{route('insert-blogpost')}}" method="POST" role="form" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
              <label>Heading</label>
              <input name="head"  type="text" class="form-control" placeholder="Head Line" required>
              <input name="user_id"  type="hidden" class="form-control" value="{{Auth::user()->id}}">
            </div>
            
            <div class="form-group">
              <label>Category</label>
              <select name="cat_id" id="my-input" class="form-control" required>
                  <option>Select</option>
                  @foreach ($cat as $cats)
                  <option value="{{$cats->id}}">{{$cats->cat}}</option>
                        
                  @endforeach
                </select>
            </div>
            
            <!-- Short textarea -->
            <div class="form-group">
              <label>Post short discretion </label>
              <textarea name="post_short" id="" class="form-control ckeditor " rows="3" required></textarea>
            </div>
            <div class="form-group">
              <label>Photo gallery text</label>
              <textarea name="photo_gallery_text" id="" class="form-control ckeditor " rows="3" placeholder="Optional" ></textarea>
            </div>
           
            <!-- Qoute textarea -->
            <div class="form-group">
              <label>Post Qoute </label>
              <textarea name="post_qoute"  class="form-control" rows="3" ></textarea>
            </div>
           
            <!-- Post details textarea -->
            <div class="form-group">
              <label>Post Details </label>
              <textarea name="post_details" id="" class="form-control ckeditor" rows="3" required></textarea>
            </div>
            
            
            <div class="form-group">
              <label>Media </label>
              <input name="media"  type="text" class="form-control" placeholder="Optional">
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