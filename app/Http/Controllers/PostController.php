<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

use App\Category;
use App\Tag;


class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Post::orderBy('id','desc')->paginate(10);
        $title = "Post";
        
        return view('admin.post.table')->with(
                ['posts'=>$data,'title' => $title]
            );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = "Create New Post";
        $data['categories'] = Category::all();
        $data['tags'] = Tag::all();

        return view('admin.post.add',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = Post::create($request->all());

        $post->type = 'post';
        $post->save();

        $post->tags()->attach($request->tags);

        return redirect('post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $data = Post::where('slug',$slug)->first();
        
        return view('admin.post.show')->with(['data'=>$data]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        
        $data['title'] = "Update Post";
        $data['post'] = $post;
        $data['categories'] = Category::all();
        
        
        $data['tags'] = Tag::all(); 
        $data['tags_terpilih'] =$post->tags;      

     
        return view('admin.post.edit',$data);
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
        $post = Post::find($id);        
        
        $post->update($request->all());

        $post->tags()->sync($request->tags);
        // $post->tags()->detach($request->tags);

        return redirect('post');
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
