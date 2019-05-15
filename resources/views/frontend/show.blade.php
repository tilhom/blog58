@extends('frontend.layouts.main')
@section('css')
 <link href="{{asset('css/blog-post.css')}}" rel="stylesheet">
@endsection
@section('content')

<!-- Title -->
<h1 class="mt-4">{{$post->title}}</h1>

<!-- Author -->
<p class="lead">
	by
	<a href="#">{{$post->user->name}}</a>
</p>

<hr>

<!-- Date/Time -->
<p>Posted on {{$post->created_at->format('d/m/Y H:i:s')}}</p>

<hr>

<!-- Preview Image -->
<img class="img-fluid rounded" src="/storage/images/{{$post->cover_img}}" alt="{{$post->title}}" title="{{$post->title}}">

<hr>

<!-- Post Content -->
<p class="lead">
	{{$post->description}}
</p>

<p>
	{{$post->content}}
</p>

<!-- Comments Form -->
<div class="card my-4" id="comments">
     <h5 class="card-header">Leave a Comment:</h5>
     <div class="card-body">

         <form method="post" action="{{ route('comment.add') }}">
             @csrf
             <input type="hidden" name="post_id" value="{{ $post->id }}" />
             <input type="hidden" name="user_id" value="{{ $user_id }}" />
             <div class="form-group">
                 <textarea class="form-control" name="content" rows="3"></textarea>
             </div>
             <button type="submit" class="btn btn-primary">Submit</button>
         </form>
     </div>
 </div>
<hr>

@include('frontend.partials.comment',['comments' => $post->comments])
@endsection