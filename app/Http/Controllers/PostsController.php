<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
   
    public function __construct() {

            $this->middleware('auth')->except(['index', 'show']);
        }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->get();

        return View('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        /*  I możliowść walidacji */
        $this->validate($request , [
            'title' => 'required',
            'body' => 'required'
            ]);



      /*  I możliowść dodania do bazy

        $post = new Post;

        $post->title = $request->title;
        $post->body = $request->body;

        $post->save();
    

        II możliowść dodania do bazy
    
        Post::create([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => auth()->id()
            ]);

        III możliowść dodania do bazy
    */
        auth()->user()->publish(
            new Post(request(['title', 'body']))
        );
    
        return redirect('/');
    }

    /**
     * Displ()ay the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            $post = POST::find($id);

            return View('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
