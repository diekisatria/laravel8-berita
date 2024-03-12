<?php

namespace App\Http\Controllers;

use App\Models\Category;
use \Cviebrock\EloquentSluggable\Services\SlugService;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.index', [
            'title' =>  'Posts',
            // ambilkan data postingan dengan id user yg lagi login
            'posts'  =>  Post::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            'title'         => 'Create Posts',
            'categories'    =>  Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // nama name inputan wajib sama dengan name column yg di database
        $validatedData = $request->validate([
            'title' =>  'required|max:255',
            'slug'  =>  'required|unique:posts',
            'category_id'   =>  'required',
            'body'  =>  'required'
        ]);

        // mengambil id user sedang login
        $validatedData['user_id']   = auth()->user()->id;

        // mengambil 200 karakter dari body dan jangan pakai tag html nya
        $validatedData['excerpt']   = Str::limit(strip_tags($request->body), 200);

        Post::create($validatedData);
 
        return redirect('/dashboard/posts')->with('success', 'Posts berhasil di upload');
    }
 
    /** 
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.show', [
            'title' =>  'Detail',
            'post'  =>  $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.edit', [
            'title'         =>  'Edit Posts',
            'categories'    =>  Category::all(),
            'post'          =>  $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    // $request data baru dari inputan 
    // $post data yang dari database atau binding
    public function update(Request $request, Post $post)
    {
        $rules = [
            'title'         =>  'required|max:255',
            'category_id'   =>  'required',
            'body'          =>  'required'
        ];

        // cek slug
        if ($request->slug != $post->slug) {
            $rules['slug']  =  'required|unique:posts';
        }

        $validatedData = $request->validate($rules);

        // mengambil id user sedang login
        $validatedData['user_id']   = auth()->user()->id;

        // mengambil 200 karakter dari body dan jangan pakai tag html nya
        $validatedData['excerpt']   = Str::limit(strip_tags($request->body), 200);

        Post::where('id', $post->id)
            ->update($validatedData);

        return redirect('/dashboard/posts')->with('success', 'Posts berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Post::destroy($post->id);
        return redirect('/dashboard/posts')->with('success', 'Data posts berhasil di hapus');
    }

    public function checkSlug(Request $request)
    {
        $slug =   SlugService::createSlug(Post::class, 'slug', $request->title());

        return response()->json(['slug' => $slug]);
    }
}
