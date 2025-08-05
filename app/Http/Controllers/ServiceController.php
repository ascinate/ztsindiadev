<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
        public function serviceform(Request $request)
        {
            return view('admin/addservice');
        }


        public function insert(Request $request)
        {
            $request->validate([
                'name' => 'required|string|max:255',
                'price' => 'required|numeric|min:0',
                'short_description' => 'nullable|string|max:2055',
                'description' => 'nullable|string',
                'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $iconName = null;

            if ($request->hasFile('icon')) {
                $image = $request->file('icon');
                $iconName = time() . '_' . $image->getClientOriginalName();
                $image->move(('uploads'), $iconName);
            }

            Service::create([
                'name' => $request->name,
                'price' => $request->price,
                'short_description' => $request->short_description,
                'description' => $request->description,
                'icon' => $iconName,
            ]);

            return back()->with('success', 'Service created successfully.');
        }


        public function list(Request $request)
        {
            $services = Service::all();

            return view('admin/servicelist', ['services' => $services]);
        }

          public function edit($id)
        {
            $service = Service::findOrFail($id);
            return view('admin/editservice', compact('service'));
        }


        public function update(Request $request, $id)
        {
            $request->validate([
                'name' => 'required|string|max:255',
                'price' => 'required|numeric|min:0',
                'short_description' => 'nullable|string|max:255',
                'description' => 'nullable|string',
                'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $service = Service::findOrFail($id);
            $iconName = $service->icon;

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
                'price' => $request->price,
                'short_description' => $request->short_description,
                'description' => $request->description,
                'icon' => $iconName,
            ]);

            return redirect('services')->with('success', 'Service updated successfully.');
        }

}
