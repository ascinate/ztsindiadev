<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultation;
use App\Http\Controllers\Controller;

class ConsultationController extends Controller
{
         public function list(Request $request)
        {
            $consultations = Consultation::all();

            return view('admin/consultationlist', ['consultations' => $consultations]);
        }

        public function insert(Request $request)
        {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:20',
                'services' => 'nullable|string|max:255',
                'message' => 'nullable|string',
            ]);

            Consultation::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'services' => $request->input('services'),
                'message' => $request->input('message'),
            ]);

            return redirect()->back()->with('success', 'Consultation submitted successfully.');
        }

            public function ConsultationDelete(Request $request)
            {
                $ids = $request->input('consultation_ids');

                if (!$ids || !is_array($ids)) {
                    return back()->with('error', 'No consultations selected for deletion.');
                }

                Consultation::whereIn('id', $ids)->delete();

                return back()->with('success', 'Selected consultations deleted successfully.');
            }

}
