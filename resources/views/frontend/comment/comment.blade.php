<div id="comments" class="post--comments pt--40">
    <div class="post--comments-title text-uppercase text-center">
        <h2 class="h5">{{$blogpost->comments->count() + $ttlrep}} Comments</h2>
    </div>

    <!-- Comment Items Start -->
    <ul class="comment--items">


        @foreach ($blogpost->comments as $comment)
            
        <li>
            <!-- Comment Item Start -->
            <div class="comment--item clearfix">
                <div class="comment--img float--left">
                    <img src="{{asset($comment->user->image)}}" alt="" class="img-circle">
                </div>

                <div class="comment--info ov--h">
                <form action="{{route('reply')}}" method="post">
                    @csrf
                    <div class="comment--header clearfix">
                        <button type="submit" class="reply btn-link float--right">Reply</button>

                        <h3 class="name h5">{{$comment->user->name}}</h3>

                        <p class="date">{{$comment->created_at}}</p>
                    </div>

                    <div class="comment--content">
                        <p>
                            {{$comment->comment}}
                            @if ( Auth::user() && $comment->user->id == Auth::user()->id)
                            <a  class="btn btn-info " data-toggle="modal" data-target="#exampleModalCenter" href="" role="button"> <i class="fa fa-edit" aria-hidden="true"></i> </a>
                            <a  class="btn btn-info" href="{{route('delete-comment',['id'=>$comment->id ])}}" role="button"> <i class="fa fa-trash" aria-hidden="true"></i> </a>
                            @endif
                        </p>
                    </div>
                    @if (Auth::user())
                    <div class="comment--content form-group">
                        <input type="hidden" name="comment_id" value="{{$comment->id}}">
                        <input type="hidden" name="blogpost_id" value="{{$blogpost->id}}">
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                        <textarea name="reply" placeholder="Your Reply" class="form-control" required></textarea>
                    </div>
                    @endif
                    </form>
                </div>
            </div>
            <!-- Comment Item End -->




            {{-- edit comment Modal start --}}
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit comment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="{{route('edit-comment')}}" method="post">
                      @csrf
                  <div class="modal-body">
                        <input name="id" type="hidden" value="{{$comment->id}}">
                        <textarea name="comment" id="" class="form-control" required >{{$comment->comment}}</textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
                </div>
              </div>
            </div>
            {{-- edit comment Modal end --}}

            




            <!-- Reply Items Start -->
            <ul class="comment--items">
                @foreach ($comment->reply as $reply)
                <li>
                    <!-- Reply Item Start -->
                    <div class="comment--item clearfix">
                        <div class="comment--img float--left">
                            <img src="{{$reply->user->image}}" alt="" class="img-circle">
                        </div>

                        <div class="comment--info ov--h">
                            <div class="comment--header clearfix">
                                {{-- <a href="#" class="reply btn-link float--right">Reply</a> --}}

                                <h3 class="name h5">{{$reply->user->name}}</h3>

                                <p class="date">{{$reply->created_at}}</p>
                            </div>
                                
                            <div class="comment--content">
                                <p>
                                    {{$reply->reply}}
                                    @if (Auth::user() && $reply->user->id == Auth::user()->id)
                                    <a  class="btn btn-info " data-toggle="modal" data-target="#editReply" href="" role="button"> <i class="fa fa-edit" aria-hidden="true"></i> </a>
                                    <a  class="btn btn-info" href="{{route('delete-reply',['id'=>$comment->id ])}}" role="button"> <i class="fa fa-trash" aria-hidden="true"></i> </a>
                                    @endif

                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Reply Item End -->

                    
                    {{-- edit reply Modal start --}}
                    <!-- Modal -->
                    <div class="modal fade" id="editReply" tabindex="-1" role="dialog" aria-labelledby="editReply" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Edit reply</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{route('edit-reply')}}" method="post">
                            @csrf
                        <div class="modal-body">
                                <input name="id" type="hidden" value="{{$comment->id}}">
                                <textarea name="reply" class="form-control" required >{{$reply->reply}}</textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                        </div>
                    </div>
                    </div>
                    {{-- edit reply Modal end --}}
                </li>
                @endforeach
            </ul>
            <!-- Comment Items End -->
        </li>
        @endforeach

        
        
        
        
        
        
        

    </ul>
    <!-- Comment Items End -->
</div>
<!-- Post Comments End -->

<!-- Post Comment Form Start -->
<div class="post--comment-form pt--40">
    <!-- Comment Respond Start -->
    <div class="comment--respond">
        <div class="comment--respond-title text-uppercase text-center">
            <h2 class="h5">Leave Comments</h2>
        </div>
       @if (Auth::check())
           
       <form action="{{route('insert-comment')}}" method="POST" data-form="validate">
           @csrf
           <div class="form-group">
               <textarea name="comment" placeholder="Your Comment" class="form-control" required></textarea>
           </div>
           <div class="form-group">
                <input type="hidden" name="blog_post_id" id="" value="{{$blogpost->id}}">
                <input type="hidden" name="user_id" id="" value="{{Auth::user()->id}}">
            </div>

        
         


           <button type="submit" class="btn btn-default">Post Comment</button>
        </form>
        @else
        <a href="{{route('login')}}" class="btn btn-default">Log-in to Comment</a>
           
       @endif
    </div>
    <!-- Comment Respond End -->
</div>