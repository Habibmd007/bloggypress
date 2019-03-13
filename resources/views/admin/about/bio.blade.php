@extends('admin.master')

@section('body')


<!-- Post Author Start -->
<a name="" id="" class="btn btn-primary mb-3" href="{{route('add-bio')}}" role="button"> <i class="fa fa-plus" aria-hidden="true"></i> Add Bio </a>
    
        @foreach ($bios as $item)
            
        <div class="card">
            <div class="card-body">
                <div class="post--author clearfix pb--50">
                    <div class="img float--left">
                        <img src="{{$item->img}}" alt="" class="img-circle" height="100">
                    </div>
        
                    <div class="info ov--h">
                        <div class="header clearfix">
                            <h2 class="name h6">{{$item->name}}</h2>
        
                            <p class="role float--left">{{$item->desig}}</p>
        
                            <div class="social float--right">
                                <ul class="nav">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
        
                        <div class="bio">
                            <p>{{$item->text}}</p>
                        </div>
                        <p class="btn btn-info" role="button">Publication Status : {{ $item->status==1 ?"Published" : "Unpublished"}}</p>
                    </div>
                </div>
                <a name="" id="" class="btn btn-primary mb-3" href="{{route('edit-bio',['id' => $item->id ])}}" role="button"> <i class="fa fa-edit" aria-hidden="true"></i>  </a>
                <a name="" id="" class="btn btn-primary mb-3" href="{{route('bio-delete',['id' => $item->id ])}}" role="button"> <i class="fa fa-trash" aria-hidden="true"></i>  </a>
            </div>
        </div>
        @endforeach

<!-- Post Author End -->
@endsection