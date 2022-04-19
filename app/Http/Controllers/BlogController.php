<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Http\Controllers\BlogController;
use Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Blog::all();
        return view('blogs.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogs.create_blog')->with('posts', Blog::all())->with('users', User::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'required|exists:users,id',
            'blog_message' => 'required|text|max:255',
        ]);        
        $findPost = Blog::where(['user_id' => $request->user_id])->exists();
        if (!$findPost) {
            $post = new Blog();
            $post->user_id = $request->user_id;
            $post->blog_message = $request->blog_message;
            $post->save();
            return redirect()->action([BlogController::class, 'index']);
        } else {
            $error = "Error: You have reviewed for this product before";
            return redirect("blog/create")->with('error', $error);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Blog::find($id);
        return view('blogs.edit_blog')->with('post', $post)->with('users', User::all());
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
        $this->validate($request, [
            'user_id' => 'required|exists:users,id',
            'blog_message' => 'required|text|max:255',  
        ]);
        
        $post = Blog::find($id);
        $post->user_id = $request->user_id;
        $post->blog_message = $request->blog_message;
        $post->save();

        return redirect()->action([BlogController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Blog::find($id);
        $post->delete();

        return redirect()->action([BlogController::class, 'index']);
    }
}
