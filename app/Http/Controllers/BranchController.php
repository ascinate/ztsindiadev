<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;
use App\Http\Controllers\Controller;

class BranchController extends Controller
{
        public function branchform(Request $request)
        {
            return view('admin/addbranch');
        }

        public function insert(Request $request)
        {
            $request->validate([
                'name' => 'required|string|max:255',
                'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'address' => 'required|string|max:255',
                'phone' => 'required|string|max:20',
                'email' => 'required|email|max:255',
            ]);

            $photoName = null;

            if ($request->hasFile('photo')) {
                $image = $request->file('photo');
                $photoName = time() . '_' . $image->getClientOriginalName();
                $image->move('uploads', $photoName);
            }

            Branch::create([
                'name' => $request->name,
                'photo' => $photoName,
                'address' => $request->address,
                'phone' => $request->phone,
                'email' => $request->email,
            ]);

            return back()->with('success', 'Branch created successfully.');
        }

         public function list(Request $request)
        {
            $branches = Branch::all();

            return view('admin/branchlist', ['branches' => $branches]);
        }
         public function edit($id)
        {
            $branch = Branch::findOrFail($id);
            return view('admin/editbranch', compact('branch'));
        }




        public function update(Request $request, $id)
        {
            
            $request->validate([
                'name' => 'required|string|max:255',
                'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
                'address' => 'required|string|max:255',
                'phone' => 'required|string|max:20',
                'email' => 'required|email|max:255',
            ]);
            

            $branch = Branch::findOrFail($id);
            $photoName = $branch->photo;

            if ($request->hasFile('photo')) {
                if ($photoName && file_exists('uploads/' . $photoName)) {
                    unlink('uploads/' . $photoName);
                }

                $image = $request->file('photo');
                $photoName = time() . '_' . $image->getClientOriginalName();
                $image->move('uploads', $photoName);
            }

            $branch->update([
                'name' => $request->name,
                'photo' => $photoName,
                'address' => $request->address,
                'phone' => $request->phone,
                'email' => $request->email,
            ]);

            return redirect('branches')->with('success', 'Branch updated successfully.');
        }


}
