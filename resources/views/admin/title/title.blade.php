@extends('admin.master')

@section('body')
<div class="row">


<div class="col-md-6">

    <div class="card">
        <div class="card-header">
            Favicon.png only
        </div>

        <div class="card-body">
            <div class="img-circle">
                <img src="{{asset($title->favicon)}}" alt="" height="100">
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Logo
        </div>

        <div class="card-body">
            <div class="img-circle">
                <img src="{{asset($title->img)}}" alt="" height="100">
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            title
        </div>

        <div class="card-body">
            <div class="img-circle">
                <p>{{$title->title}}</p>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Sub title
        </div>

        <div class="card-body">
            <div class="img-circle">
                <p>{{$title->sub}}</p>
            </div>
        </div>
    </div>

   


</div> 


<div class="col-md-6">
        <div class="card">
                <div class="card-body">
                
                <form action="{{route('insert-favicon')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="Logo">favicon</label>
                      <input type="file" class="form-control" name="img" id="tag" aria-describedby="helpId" >
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-info ">Save</button>
                    </div>
                </form>
    
            </div>
            </div>
        <div class="card">
                <div class="card-body">
                
                <form action="{{route('insert-logo')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="Logo">Logo</label>
                      <input type="file" class="form-control" name="img" id="tag" aria-describedby="helpId">
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-info ">Save</button>
                    </div>
                </form>
    
            </div>
            </div>


        <div class="card">
            <div class="card-header">
                    Blog title  
            </div>

        <div class="card-body">

            <form action="{{route('insert-title')}}" method="post">
                @csrf
                <div class="form-group">
                  <input type="text" class="form-control" name="title" id="tag" aria-describedby="helpId" placeholder="Title">
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-info ">Save</button>
                </div>
            </form>
        </div>
    </div>
        
    <div class="card">
        <div class="card-body">
            
            
            <form action="{{route('insert-sub')}}" method="post">
                @csrf
                <div class="form-group">
                  <input type="text" class="form-control" name="sub" id="tag" aria-describedby="helpId" placeholder="Sub-Title">
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