@extends('admin.master')

@section('body')
<h3>Categories</h3>
@foreach ($cats as $cat)
    <div class="card">
        <div class="card-body">
                       <h3>{{$cat->cat}} 
                        <a name="" id="" class="btn btn-primary " href="{{route('delete-blog-cate',['id' => $cat->id ])}}" role="button"> <i class="fa fa-trash" aria-hidden="true"></i>Delete  </a>
                    </h3>
        </div>
    </div>
    @endforeach


    <div class="card card-warning">
        <div class="card-header">
          <h3 class="card-title">Add blog Category </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <form action="{{route('insert-blog-cate')}}" method="POST" role="form">
            @csrf

            <!-- text input -->
            <div class="form-group">
              <label>Category</label>
              <input name="cat"  type="text" class="form-control" placeholder="Category">
            </div>
            

          
            
            
            <button name="btn" class="btn btn-primary" type="submit">Save</button>
          </form>
        </div>
        <!-- /.card-body -->
      </div>
@endsection