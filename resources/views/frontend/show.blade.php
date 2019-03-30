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

<hr>

<!-- Comments Form -->
@include('frontend.partials.comment')
@endsection