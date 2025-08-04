<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
        public function adminlogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $admin = DB::table('admins')
            ->where('email', $request->email)
            ->where('password', $request->password)
            ->first();

        if ($admin) {
            $request->session()->put('adminuser', $admin->email);
            return redirect('dashboard');
        } else {
            return back()->with('error', 'Login Failed');
        }
    }

        public function dashboard(Request $request)
        {
            return view('admin/dashboard');
        }

     public function logout(Request $request)
    {
        $request->session()->forget('adminuser');
        return redirect('/admin')->with('success', 'Logged out successfully.');
    }
}
