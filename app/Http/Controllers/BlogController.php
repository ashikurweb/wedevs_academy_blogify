<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

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
        $validator = Validator::make(request()->all(), [
            'title'       => 'required|string|max:255',
            'author'      => 'required|string|max:255',
            'content'     => 'required|string',
            'short_description' => 'nullable|string|max:500',
            'published_at' => 'required|date',
            'tags'        => 'required|string|max:255',
            'status'    => ['required', Rule::in(['draft', 'published'])],
            'category_id'   => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->errors(),
            ]);
        }

        $tags = explode(',', request('tags'));
        $tags = array_filter($tags);

        if (count($tags) > 5) {
            return response()->json([
                'status' => 400,
                'errors' => ['tags' => 'You can only add up to 5 tags.'],
            ]);
        }

        $blog = new Blog();
        $blog->title = request('title');
        $blog->author = request('author');
        $blog->content = request('content');
        $blog->short_description = request('short_description');
        $blog->published_at = request('published_at');
        $blog->tags = request('tags');
        $blog->status = request('status');
        $blog->category_id = request('category_id');
        $blog->user_id = Auth::id();

        if (request()->hasFile('image')) {
            $image = request()->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/blog'), $image_name);
            $blog->image = $image_name;
        } else {
            $blog->image = null;
        }

        $blog->save();

        return response()->json([
            'status' => 200,
            'message' => 'Blog Created Successfully',
        ]);
    }

    public function show ()
    {
        $blogs = Blog::all();
        return response()->json([
            'status' => 200,
            'data' => $blogs,
        ]);
    }

    public function edit ($id)
    {
        $blog = Blog::find($id);
        return response()->json([
            'status' => 200,
            'data' => $blog
        ]);
    }

}
