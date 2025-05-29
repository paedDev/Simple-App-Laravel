<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("auth.login");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userValidate = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);
        if (!Auth::attempt($userValidate)) {
            throw ValidationException::withMessages([
                'email' => 'Sorry, those credentials do not match'
            ]);
        }
        request()->session()->regenerate();
        return redirect("/company");
    }

    public function destroy()
    {
        Auth::logout();
        return redirect('/login');
    }
}
