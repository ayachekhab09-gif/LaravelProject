<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        if ($email === 'admin@example.com' && $password === '123456') {
            session([
                'is_logged_in' => true,
                'role' => 'admin',
                'name' => 'Admin User'
            ]);

            return redirect('/admin/dashboard');
        }

        return back()->with('error', 'Invalid email or password');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function logout()
    {
        session()->flush();
        return redirect('/login');
    }
}