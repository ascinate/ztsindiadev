<?php

namespace App\Http\Controllers;

use App\Models\ContentNews;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
     public function newsform(Request $request)
        {
            return view('admin/addnews');
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

            ContentNews::create([
                'title' => $request->title,
                'date' => $request->date,
                'description' => $request->description,
                'image' => $images, // make sure 'images' is a TEXT column in DB
            ]);

             return redirect('contentnews')->with('success', 'news created successfully.');
        }

         public function list(Request $request)
        {
            $contentNews = ContentNews::all();

            return view('admin/newslist', ['contentNews' => $contentNews]);
        }

         public function edit($id)
        {
            $contentNew = ContentNews::findOrFail($id);
            return view('admin/editnews', compact('contentNew'));
        }


        public function update(Request $request, $id)
        {
            $request->validate([
                'title' => 'required|string|max:255',
                'date' => 'required|date',
                'description' => 'nullable|string',
                'image.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            ]);

            $contentNew = ContentNews::findOrFail($id);

            // Keep existing images
            $existingImages = $contentNew->image ? explode(',', $contentNew->image) : [];

            // Handle new uploads
            if ($request->hasFile('image')) {
                foreach ($request->file('image') as $img) {
                    $imageName = time() . '_' . $img->getClientOriginalName();
                    $img->move(('uploads'), $imageName);
                    $existingImages[] = $imageName;
                }
            }

            // Save back all image names
            $contentNew->update([
                'title' => $request->title,
                'date' => $request->date,
                'description' => $request->description,
                'image' => implode(',', $existingImages),
            ]);

            return redirect('contentnews')->with('success', 'news updated successfully.');
        }

          public function newsDelete(Request $request)
        {
            $ids = $request->input('contentNew_ids');

            if (!$ids || !is_array($ids)) {
                return back()->with('error', 'No news items selected for deletion.');
            }

            foreach ($ids as $id) {
                $newsItem = contentNews::find($id);

                if ($newsItem) {
                    // Delete image files from public/uploads
                    if ($newsItem->image) {
                        $imageFiles = explode(',', $newsItem->image);
                        foreach ($imageFiles as $imageFile) {
                            $filePath ='uploads/' . trim($imageFile);
                            if (file_exists($filePath)) {
                                @unlink($filePath);
                            }
                        }
                    }

                    // Delete the database record
                    $newsItem->delete();
                }
            }

            return back()->with('success', 'Selected news items deleted successfully.');
        }

        public function frontendNews(Request $request)
        {
             $newsItems = contentNews::all();
            return view('news', ['newsItems' => $newsItems]);

        }
}
