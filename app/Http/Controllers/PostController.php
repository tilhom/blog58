<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       
        $posts = Post::latest()->filter(request(['month','year']))->paginate(3);              
        return view('frontend.index', compact('posts'));
    }

    public function search(Request $request)
    {
        $query = $request->get('query');
        // dd($request->all());
         $result = Post::where('title', 'like', "%{$query}%")->
        orWhere('description', 'like',"%{$query}%")->
        orWhere('content', 'like', "%{$query}%")->paginate(2);
        dd($result, $query);

        //return redirect()->route('rs',$query);
        return view('frontend.search',compact('result','query'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {

        // $post = Post::find($id);
        $user_id = auth()->user()?auth()->user()->id:'';
        return view('frontend.show', compact('post','user_id'));
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
