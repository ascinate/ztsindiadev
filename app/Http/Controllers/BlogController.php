<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
        public function blogform(Request $request)
        {
            return view('admin/addblog');
        }

        public function insert(Request $request)
        {
            $request->validate([
                'title' => 'required|string|max:255',
                'date' => 'required|date',
                'description' => 'nullable|string',
                'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            ]);

            $image = '';

            if ($request->hasFile('image')) {
                $imagePaths = [];

                foreach ($request->file('image') as $img) {
                    $imageName = time() . '_' . uniqid() . '.' . $img->getClientOriginalExtension();
                    $img->move('uploads', $imageName);
                    $imagePaths[] = $imageName;
                }

                $images = implode(',', $imagePaths);
            }

            Blog::create([
                'title' => $request->title,
                'date' => $request->date,
                'description' => $request->description,
                'image' => $images, // make sure 'images' is a TEXT column in DB
            ]);

             return redirect('blogs')->with('success', 'Blog created successfully.');
        }

         public function list(Request $request)
        {
            $blogs = Blog::all();

            return view('admin/bloglist', ['blogs' => $blogs]);
        }

         public function edit($id)
        {
            $blog = Blog::findOrFail($id);
            return view('admin/editblog', compact('blog'));
        }


        public function update(Request $request, $id)
        {
            $request->validate([
                'title' => 'required|string|max:255',
                'date' => 'required|date',
                'description' => 'nullable|string',
                'image.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            ]);

            $blog = Blog::findOrFail($id);

            // Keep existing images
            $existingImages = $blog->image ? explode(',', $blog->image) : [];

            // Handle new uploads
            if ($request->hasFile('image')) {
                foreach ($request->file('image') as $img) {
                    $imageName = time() . '_' . $img->getClientOriginalName();
                    $img->move(('uploads'), $imageName);
                    $existingImages[] = $imageName;
                }
            }

            // Save back all image names
            $blog->update([
                'title' => $request->title,
                'date' => $request->date,
                'description' => $request->description,
                'image' => implode(',', $existingImages),
            ]);

            return redirect('blogs')->with('success', 'Blog updated successfully.');
        }
}
