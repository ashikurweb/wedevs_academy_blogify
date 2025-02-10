<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    public function index ()
    {
        $categories = Category::where('status', 'published')->get();
        $blogs      = Blog::latest()->paginate(6);
        return view('backend.blog.index', compact('categories', 'blogs'));
    }

    public function store ()
    {
        dd(request()->all());
        
        $validator = Validator::make(request()->all(), [

        ]);
    }
}
