<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    public function index ()
    {
        $categories = Category::latest()->paginate(6);
        return view('backend.category.index', compact('categories'));
    }

    public function create ()
    {
        return view('backend.category.create');
    }

    public function store ()
    {
        $validator = Validator::make(request()->all(), [
            'name' => 'required|string|max:200',
            'slug' => 'required|string|max:255|unique:categories,slug',
            'description' => 'required|string',
            'status'    => ['required', Rule::in(['draft', 'published'])],
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->errors(),
            ]);
        }

        $category = new Category();
        $category->name = request('name');
        $category->slug = Str::slug(request('slug'));
        $category->description = request('description');
        $category->status = request('status');

        if (request()->hasFile('image')) {
            $image = request()->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/category'), $image_name);
            $category->image = $image_name;
        } else {
            $category->image = null;
        }

        $category->save();

        return response()->json([
            'status' => 200,
            'message' => 'Category Created Successfully',
        ]);

    }

    public function show ()
    {
        $categories = Category::all();
        return response()->json([
            'status' => 200,
            'data' => $categories
        ]);
    }

    public function edit ($id)
    {
        $category = Category::find($id);
        return response()->json([
            'status' => 200,
            'data' => $category
        ]);
    }

}
