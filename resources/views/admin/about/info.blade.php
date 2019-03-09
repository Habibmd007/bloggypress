@extends('admin.master')

@section('body')


<!-- Post Author Start -->
<a name="" id="" class="btn btn-primary mb-3" href="{{route('add-info')}}" role="button"> <i class="fa fa-plus" aria-hidden="true"></i> Add Info </a>

    
      
            
        <div class="card">
            <div class="card-body">
                
            
        @foreach ($infos as $info)

        <div class="row" data-trigger="fitrow">
                <div class="col-md-3 col-xs-6 col-xxs-12 pb--60">
                    <!-- Info Block Start -->
                    <div class="info--block text-center">
                        <div class="icon bg-primary">
                            <i class="fa {{$info->font}}"></i>
                        </div>
    
                        <div class="title text-uppercase">
                            <h3 class="h4">{{$info->head}}</h3>
                        </div>
    
                        <div class="desc fs--14">
                            <p>{{$info->text}}</p>
                        </div>
                    </div>
                    <!-- Info Block End -->
                </div>
              
            </div>

        <p class="btn btn-info" role="button">Publication Status : {{ $info->status==1 ?"Published" : "Unpublished"}}</p>
        <a name="" id="" class="btn btn-primary mb-3" href="{{route('edit-info',['id'=> $info->id])}}" role="button"> <i class="fa fa-edit" aria-hidden="true"></i>  </a>
        <a name="" id="" class="btn btn-primary mb-3" href="{{route('delete-info',['id'=> $info->id])}}" role="button"> <i class="fa fa-trash" aria-hidden="true"></i>  </a>
        @endforeach
    </div>
</div>

<!-- Post Author End -->
@endsection