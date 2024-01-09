<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function handleLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return $this->redirectTo();
        }
    }

    public function redirectTo()
    {
        $user = Auth::user();

        if ($user->hasRole('super-admin')) {
            return redirect()->route('admin.admin-dashboard');
        }

        if ($user->hasRole('admin')) {
            return redirect()->route('admin.admin-dashboard');
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
