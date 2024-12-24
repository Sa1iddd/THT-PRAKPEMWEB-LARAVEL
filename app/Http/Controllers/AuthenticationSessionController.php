<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;


class AuthenticationSessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
        if (!Auth::attempt($credentials, $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => __('These credentials do not match our records.'),
            ]);
        }

        $request->session()->regenerate();
    }

    public function processLogin(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($request->email == 'user@example.com' && $request->password == 'password') {
            return redirect()->route('blog');
        }

        return back()->withErrors(['Invalid credentials']);
    }

    public function index(){
        return view('auth.index');
    }

    public function showBlog()
    {
        return view('auth.blog');
    }
}
