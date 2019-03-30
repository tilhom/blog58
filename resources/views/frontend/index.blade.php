@extends('frontend.layouts.main')
@section('css')
 <link href="{{asset('css/blog-home.css')}}" rel="stylesheet">
@endsection
@section('content')
<h1 class="my-4">Page Heading
	<small>Secondary Text</small>
</h1>

@if(count($posts))
@foreach($posts as $post)
<!-- Blog Post -->
<div class="card mb-4">
	<img class="card-img-top" src="/storage/images/{{$post->cover_img}}" alt="Card image cap">
	<div class="card-body">
		<h2 class="card-title">{{$post->title}}</h2>
		<p class="card-text">
			{{$post->description}}
		</p>
		<a href="{{route('post.show',$post->id)}}" class="btn btn-primary">Read More &rarr;</a>
	</div>
	<div class="card-footer text-muted">
		Posted on {{$post->created_at->format('d/m/Y H:i:s')}} by
		<a href="#">{{$post->user->name}}</a> in category <a href="#">{{$post->category->name}}</a>
	</div>
</div>
@endforeach
@else
	<h1>No posts yet..</h1>
@endif

<!-- Pagination -->
<!-- <ul class="pagination justify-content-center mb-4">
	<li class="page-item">
		<a class="page-link" href="#">&larr; Older</a>
	</li>
	<li class="page-item disabled">
		<a class="page-link" href="#">Newer &rarr;</a>
	</li>
</ul> -->
{{$posts->links()}}
@endsection