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

         public function technologyDelete(Request $request)
        {
            $ids = $request->input('technology_ids'); // Checkbox values from form

            if (!$ids || !is_array($ids)) {
                return back()->with('error', 'No technologies selected for deletion.');
            }

            foreach ($ids as $id) {
                $technology = \App\Models\Technology::find($id);

                if ($technology) {
                    // Delete the icon file if it exists
                    if ($technology->icon && file_exists('uploads/' . $technology->icon)) {
                        unlink('uploads/' . $technology->icon);
                    }

                    $technology->delete();
                }
            }

            return back()->with('success', 'Selected technologies deleted successfully.');
        }
}
