  <!-- Single Comment -->
 @foreach($comments as $comment)
 <div class="mb-4 display-comment">
     <div class="row mb-4">
         <div class="col-1">
             <img class="mr-3 rounded-circle " src="http://placehold.it/50x50" alt="">
         </div>
         <div class="col media-body">
             <h5 class="mt-0">{{ $comment->user->name}} <small><b>at</b> {{$comment->getPosted()}}</small></h5>
             {{ $comment->content }}
             <br>
             <a href="#" class="reply"> Reply</a>
             <form method="post" action="{{ route('reply.add') }}" style="display: none">
                @csrf
                <div class="form-group form-row">
                    
                    <input type="text" name="content" class="form-control col-md-10" required="" />
                    <input type="hidden" name="post_id" value="{{ $post->id }}" />
                    <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
                    <input type="hidden" name="user_id" value="{{ $user_id }}" />
                    <input type="submit" class="btn btn-success mx-2" value="Reply" />
                </div>
            </form>
         </div>
     </div>
 </div>
 @include('frontend.partials.comment', ['comments' => $comment->replies])
 @endforeach