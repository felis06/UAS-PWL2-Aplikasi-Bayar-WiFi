<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('auth.login');
    }


    public function login(Request $request)
    {
        // var_dump($request);
        // die();
        // Validate the form data
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('app')
                ->withSuccess('You have successfully logged in!');
            // return redirect()->route('app.index');
        }

        return redirect()->route('auth.login')->withErrors('Invalid credentials');
    }

    public function registerPage()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:users',
            'password' => 'required|min:8',
            'pin' => 'required',
            'telp' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'pin' => $request->pin,
            'saldo' => 5000000,
            'telp' => $request->telp,
        ]);

        return redirect()->route('auth.login')
            ->withSuccess('You have successfully registered');
    }

    public function appPage()
    {
        if (Auth::check()) {
            $user = Auth::user();
            return view('app.index', compact('user'));
        }

        return redirect()->route('auth.login')
            ->withErrors([
                'message' => 'Please login to use the app.',
            ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')
            ->withSuccess('You have logged out successfully!');;
    }

    public function profilePage()
    {
        if (Auth::check()) {
            $user = Auth::user();
            return view('app.profile.index', compact('user'));
        }

        return redirect()->route('auth.login')
            ->withErrors([
                'message' => 'Please login to use the app.',
            ])->onlyInput('email');
    }

    public function detailProfilePage()
    {
        if (Auth::check()) {
            $user = Auth::user();
            return view('app.profile.detail', compact('user'));
        }

        return redirect()->route('auth.login')
            ->withErrors([
                'message' => 'Please login to use the app.',
            ])->onlyInput('email');
    }

    public function settingPage()
    {
        if (Auth::check()) {
            return view('app.profile.setting');
        }

        return redirect()->route('auth.login')
            ->withErrors([
                'message' => 'Please login to use the app.',
            ])->onlyInput('email');
    }
}
