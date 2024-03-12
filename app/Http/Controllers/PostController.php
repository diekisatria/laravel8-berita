<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{
    
    public function index()
    {
        $title = '';

        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' In ' . $category->name;
        }

        // if(request('user')){ 
        //     $user = User::firstWhere('username', request('user'));
        //     $title = ' By ' . $user->name;
        // } 

        return view('pages.posts', [
            'title' => 'All Posts' . $title,
            'posts' =>  Post::latest()->filter(request(['search', 'category']))->paginate(3)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('pages.detail', [
            'title' =>  'Tips Programing',
            'post'  =>  $post
        ]);
    }

}
