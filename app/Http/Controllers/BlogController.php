<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function Blog()
    {
        $posts = BlogPost::all();

        // Pass the correct variable name to the view
        return view('blog', ['posts' => $posts]);
    }

    public function store()
    {
        $newblog = new BlogPost([
            'title' => request()->get('title'),
            'description' => request()->get('description'),
        ]);
        $newblog->save();

        
        return redirect()->route('blog')->with('success', 'Blog post created successfully!');
    }
}
