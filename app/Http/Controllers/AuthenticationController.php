<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;

class AuthenticationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard()
    {
        if(Auth::check()) {
            return view('home');
        }

        return redirect('/login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function login(Request $request)
    {        
        $validated_data = $request->validate([
            "username" => 'required|max:255',
            "password" => 'required|min:5|max:255'
        ]);
        

        if(Auth::attempt($validated_data)){
            $request->session()->regenerate();
            return redirect('/')->with('pesan', 'Berhasil Login');
        }

        return back()->with('login_failed', 'Username atau Password salah')->onlyInput('username');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'username' => 'required|max:255|unique:users',
            'password' => 'required|min:5|max:255',
            're_password' => 'required|min:5|max:255|same:password',
        ]);

        User::create([
            'username' => $validated_data['username'],
            'password' => $validated_data['password']
        ]);

        return redirect('/login')->with('pesan', 'Register Berhasil! Silahkan Login')->onlyInput('username');
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('pesan', 'You have Loged Out Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}