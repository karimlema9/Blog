<?php

namespace App\Http\Controllers\dashboard;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostPost;
use App\Post;
use App\PostImage;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function __construct()
    {

        $this->middleware(['auth', 'rol.admin']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts = Post::orderBy('created_at', 'desc')->paginate(10);

        return view("dashboard.post.index",['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorys = Category::pluck('id', 'title');
        return view("dashboard.post.create",['post' => new Post(), 'categorys' => $categorys]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostPost $request)
    {

        Post::create($request->validated());

        return back()->with('status', 'Post creado con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {

            return view('dashboard.post.show', ['post' => $post]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categorys = Category::pluck('id', 'title');
        return view('dashboard.post.edit', ['post' => $post, 'categorys' => $categorys]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePostPost $request, Post $post)
    {
        $post->update($request->validated());

        return back()->with('status', 'Post actualizado con exito!');
    }

    public function image(Request $request, Post $post)
    {

        $request->validate([
           'image' => 'required|mimes:jpeg,bmp,png|max:10240'
        ]);

        $filname = time() . "." . $request->image->extension();

        $request->image->move(public_path('images'),$filname);

        PostImage::create(['image' => $filname, 'post_id' => $post->id]);
        return back()->with('status', 'Imagen cargada con exito!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return back()->with('status', 'Post eliminado con exito!');
    }
}
