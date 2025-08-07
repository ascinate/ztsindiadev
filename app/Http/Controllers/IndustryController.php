<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Industry;
use App\Http\Controllers\Controller;

class IndustryController extends Controller
{
        public function industryform(Request $request)
        {
            return view('admin/addindustry');
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

            Industry::create([
                'name' => $request->name,
                'description' => $request->description,
                'icon' => $iconName,
            ]);

            return redirect('industries')->with('success', 'Service updated successfully.');
        }


        public function list(Request $request)
        {
            $industries = Industry::all();

            return view('admin/industrylist', ['industries' => $industries]);
        }

          public function edit($id)
        {
            $industry = Industry::findOrFail($id);
            return view('admin/editindustry', compact('industry'));
        }


        public function update(Request $request, $id)
        {
            $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'nullable|string',
                'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $industry = Industry::findOrFail($id);
            $iconName = $industry->icon;

            if ($request->hasFile('icon')) {
                if ($iconName && file_exists(('uploads/' . $iconName))) {
                    unlink(('uploads/' . $iconName));
                }

                $image = $request->file('icon');
                $iconName = time() . '_' . $image->getClientOriginalName();
                $image->move(('uploads'), $iconName);
            }

            $service->update([
                'name' => $request->name,
                'description' => $request->description,
                'icon' => $iconName,
            ]);

            return redirect('industries')->with('success', 'Service updated successfully.');
        }

        public function industryDelete(Request $request)
        {
            $ids = $request->input('industry_ids'); // from form checkbox names

            if (!$ids || !is_array($ids)) {
                return back()->with('error', 'No industries selected for deletion.');
            }

            foreach ($ids as $id) {
                $industry = \App\Models\Industry::find($id);

                if ($industry) {
                    // Delete icon file if it exists
                    if ($industry->icon && file_exists('uploads/' . $industry->icon)) {
                        unlink('uploads/' . $industry->icon);
                    }

                    $industry->delete();
                }
            }

            return back()->with('success', 'Selected industries deleted successfully.');
        }

}
