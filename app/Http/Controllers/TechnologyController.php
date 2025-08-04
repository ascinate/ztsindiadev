<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Technology;
use App\Http\Controllers\Controller;

class TechnologyController extends Controller
{
        public function technologyform(Request $request)
        {
            return view('admin/addtechnology');
        }


        public function insert(Request $request)
        {
            $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'nullable|string',
                'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $iconName = null;

            if ($request->hasFile('icon')) {
                $image = $request->file('icon');
                $iconName = time() . '_' . $image->getClientOriginalName();
                $image->move(('uploads'), $iconName);
            }

            Technology::create([
                'name' => $request->name,
                'description' => $request->description,
                'icon' => $iconName,
            ]);

            return redirect('technologies')->with('success', 'Service updated successfully.');
        }


        public function list(Request $request)
        {
            $technologies = Technology::all();

            return view('admin/technologylist', ['technologies' => $technologies]);
        }

          public function edit($id)
        {
            $technology = Technology::findOrFail($id);
            return view('admin/edittechnology', compact('technology'));
        }


        public function update(Request $request, $id)
        {
            $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'nullable|string',
                'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $technology = Technology::findOrFail($id);
            $iconName = $technology->icon;

            if ($request->hasFile('icon')) {
                if ($iconName && file_exists(('uploads/' . $iconName))) {
                    unlink(('uploads/' . $iconName));
                }

                $image = $request->file('icon');
                $iconName = time() . '_' . $image->getClientOriginalName();
                $image->move(('uploads'), $iconName);
            }

            $technology->update([
                'name' => $request->name,
                'description' => $request->description,
                'icon' => $iconName,
            ]);

            return redirect('technologies')->with('success', 'Service updated successfully.');
        }
}
