<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function change()
    {
        return view('change-passowrd');
    }

    public function validateLogin(Request $request)
    {
        $validation = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $admin = json_decode(file_get_contents(storage_path('admin.json')), true);

        if ($validation["email"] == $admin["email"] && $validation["password"] == $admin["password"]) {
            session(['is_admin' => true]);
            return redirect()->route('admin');
        } else {
            return redirect()->route('login')->with('error', 'Invalid email or password.');
        }
    }
    
    public function logout()
    {
        session()->forget('is_admin');
        return redirect()->route('home');
    }

    public function changePassword(Request $request)
    {
        $validation = $request->validate([
            'old_password' => 'required|min:6',
            'new_password' => 'required|min:6|confirmed',
            'new_password_confirmation' => 'required',
        ]);

        $admin = json_decode(file_get_contents(storage_path('admin.json')), true);

        if ($validation["old_password"] == $admin["password"]) {
            $admin["password"] = $validation["new_password"];
            file_put_contents(storage_path('admin.json'), json_encode($admin));
            return redirect()->route('admin')->with('success', 'Password changed successfully.');
        } else {
            return redirect()->route('change')->with('error', 'Old password is incorrect.');
        }
    }
}
