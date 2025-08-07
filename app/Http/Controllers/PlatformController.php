<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Platform;
use App\Http\Controllers\Controller;

class PlatformController extends Controller
{
     public function platformform(Request $request)
     {
         return view('admin/addplatform');
     }

     public function insert(Request $request)
     {
          $request->validate([
             'name' => 'required|string|max:255',
             'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          ]);


          $iconname=null;
          if($request->hasFile('icon')){
             $photo=$request->file('icon');
             $iconname=time() . '_' . $photo->getClientOriginalName();
             $photo->move('uploads',$iconname);
          }

          Platform::create([
            'name'=>$request->name,
            'icon'=>$iconname
          ]);

        return redirect('platforms')->with('success', 'Brand created successfully.');
     }

         public function list(Request $request)
        {
            $platforms = Platform::all();

            return view('admin/platformlist', ['platforms' => $platforms]);
        }

          public function edit($id)
        {
            $platform = Platform::findOrFail($id);
            return view('admin/editplatform', compact('platform'));
        }


        public function update(Request $request, $id)
        {
            $request->validate([
                'name' => 'required|string|max:255',
                'icon' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
            ]);

            $platform = Platform::findOrFail($id);

            $iconName = $platform->icon;

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

            $platform->update([
                'name' => $request->name,
                'icon' => $iconName,
            ]);

            return redirect('platforms')->with('success', 'Brand updated successfully.');
        }

         public function platformDelete(Request $request)
        {
            $ids = $request->input('platform_ids'); // Array of selected checkboxes

            if (!$ids || !is_array($ids)) {
                return back()->with('error', 'No platforms selected for deletion.');
            }

            foreach ($ids as $id) {
                $platform = \App\Models\Platform::find($id);

                if ($platform) {
                    // Delete the icon file if it exists
                    if ($platform->icon && file_exists('uploads/' . $platform->icon)) {
                        unlink('uploads/' . $platform->icon);
                    }

                    $platform->delete();
                }
            }

            return back()->with('success', 'Selected platforms deleted successfully.');
        }

}
