<?php

namespace  App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blogs.blogList', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blogs.addBlog');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png',
            'description' => 'required|string',
        ]);
    
        $data = $request->only(['title', 'description']);
        $data['slug'] = Str::slug($request->title, '-');

    
        // Handling Image Upload
        if ($file = $request->file('image')) { // Fixed the input name
            $name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('assets/upload/prod'), $name);
            $data['image'] = $name; // Fixed the key to match DB column
        }
    
        Blog::create($data);
    
        return redirect()->route('blogs.create')->with('success', 'Blog created successfully.');
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('admin.blogs.blogEdit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        $data = $request->only(['title', 'description']);
        if ($blog->title !== $request->title) {
            $data['slug'] = Str::slug($request->title, '-');
        }

        // Handling Image Update
        if ($request->hasFile('image')) {
            // Delete Old Image
            if ($blog->image && file_exists(public_path('assets/upload/prod/' . $blog->image))) {
                unlink(public_path('assets/upload/prod/' . $blog->image));
            }

            // Upload New Image
            $file = $request->file('image');
            $name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('assets/upload/prod'), $name);
            $data['image'] = $name;
        }

        $blog->update($data);

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::findOrFail($id);

        // Delete Image from Storage
        if ($blog->image && file_exists(public_path('assets/upload/prod/' . $blog->image))) {
            unlink(public_path('assets/upload/prod/' . $blog->image));
        }
    
        // Delete the blog post
        $blog->delete();
    
        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully.');
    }
}
