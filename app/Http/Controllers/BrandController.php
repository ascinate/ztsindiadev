<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;


class BrandController extends Controller
{
        public function brandform(Request $request)
        {
            return view('admin/addbrand');
        }


        public function insert(Request $request)
        {
            $request->validate([
                'title' => 'required|string|max:255',
                'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $iconName = null;

            if ($request->hasFile('icon')) {
                $image = $request->file('icon');
                $iconName = time() . '_' . $image->getClientOriginalName();
                $image->move(('uploads'), $iconName);
            }

            Brand::create([
                'title' => $request->title,
                'icon' => $iconName,
            ]);

            return back()->with('success', 'Brand created successfully.');
        }

        public function list(Request $request)
        {
            $brands = Brand::all();

            return view('admin/brandlist', ['brands' => $brands]);
        }

          public function edit($id)
        {
            $brand = Brand::findOrFail($id);
            return view('admin/editbrand', compact('brand'));
        }


        public function update(Request $request, $id)
        {
            $request->validate([
                'title' => 'required|string|max:255',
                'icon' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
            ]);

            $brand = Brand::findOrFail($id);

            $iconName = $brand->icon;

            if ($request->hasFile('icon')) {
                // Delete old icon if exists
                if ($iconName && file_exists(('uploads/' . $iconName))) {
                    unlink(('uploads/' . $iconName));
                }

                // Upload new icon
                $image = $request->file('icon');
                $iconName = time() . '_' . $image->getClientOriginalName();
                $image->move(('uploads/'), $iconName);
            }

            $brand->update([
                'title' => $request->title,
                'icon' => $iconName,
            ]);

            return redirect('brands')->with('success', 'Brand updated successfully.');
        }
}
