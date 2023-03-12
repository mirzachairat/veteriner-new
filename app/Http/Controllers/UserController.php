<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Providers\RouteServiceProvider;


class UserController extends Controller
{

    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect(RouteServiceProvider::HOME);
        }

        return back()->withErrors([
            'message' => 'email atau password salah',
        ])->onlyInput('message');
    }
    public function create_user(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => ['required','unique:users','email'],
            'password' => 'required'
        ]);

        $user = User::create([
            'name' => trim($request->input('name')),
            'email' => strtolower($request->input('email')),
            'password' => bcrypt($request->input('password')),
            'no_hp' => $request->input('no_hp'),
            'jabatan_id' => 1,
            'longitude' => $request->input('longitude'),
            'latitude' => $request->input('latitude')
        ]);

        session()->flash('message', 'Your account is created');

        return redirect()->route('login');
    }
}