<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PortfolioController extends Controller
{
        public function portfolioform(Request $request)
        {
            return view('admin/addportfolio');
        }

        public function insert(Request $request)
        {
            $request->validate([
                'title' => 'required|string|max:255',
                'date' => 'required|date',
                'description' => 'nullable|string',
                'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            ]);

            $images = '';

            if ($request->hasFile('images')) {
                $imagePaths = [];

                foreach ($request->file('images') as $image) {
                    $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                    $image->move('uploads', $imageName);
                    $imagePaths[] = $imageName;
                }

                $images = implode(',', $imagePaths);
            }

            Portfolio::create([
                'title' => $request->title,
                'date' => $request->date,
                'description' => $request->description,
                'images' => $images, // make sure 'images' is a TEXT column in DB
            ]);

             return redirect('portfolios')->with('success', 'Portfolio created successfully.');
        }



         public function list(Request $request)
        {
            $portfolios = Portfolio::all();

            return view('admin/portfoliolist', ['portfolios' => $portfolios]);
        }

          public function edit($id)
        {
            $portfolio = Portfolio::findOrFail($id);
            return view('admin/editportfolio', compact('portfolio'));
        }


        public function update(Request $request, $id)
        {
            $request->validate([
                'title' => 'required|string|max:255',
                'date' => 'required|date',
                'description' => 'nullable|string',
                'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            ]);

            $portfolio = Portfolio::findOrFail($id);

            // Keep existing images
            $existingImages = $portfolio->images ? explode(',', $portfolio->images) : [];

            // Handle new uploads
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $imageName = time() . '_' . $image->getClientOriginalName();
                    $image->move(('uploads'), $imageName);
                    $existingImages[] = $imageName;
                }
            }

            // Save back all image names
            $portfolio->update([
                'title' => $request->title,
                'date' => $request->date,
                'description' => $request->description,
                'images' => implode(',', $existingImages),
            ]);

            return redirect('portfolios')->with('success', 'Portfolio updated successfully.');
        }



}
