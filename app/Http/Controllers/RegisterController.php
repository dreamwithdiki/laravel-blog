<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        // return request()->all();

        $validationData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
        ]);

        // $validationData['password'] = bcrypt($validationData['password']);
        $validationData['password'] = Hash::make($validationData['password']);

        User::create($validationData);

        // $request->session()->flash('success', 'Registration successful! Please Login');

        return redirect('/login')->with('success', 'Registration successful! Please Login');
    }
}
