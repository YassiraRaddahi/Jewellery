<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use League\CommonMark\Reference\Reference;

class AuthController extends Controller
{
    public function loginForm()
    {

        if(Auth::check())
        {
            return redirect()->route('users.accountpage');
        }

        return view('auth.login');
    }

    public function login(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        // Tries to log in the user
        if(Auth::attempt($credentials)) {

            // Regenerates session to prevent session fixation
            $request->session()->regenerate();

            // Redirects to the intended page, otherwise to the accountpage
            return redirect()->intended(route('users.accountpage'));
        }

        // Redirects back with an error message and repopulates the email input
        return back()->withErrors([
            'general' => 'The email address or password does not match our records',
        ])->onlyInput('email');

    }


    public function registerForm()
    {
        return view('auth.register');
    }

  
    public function register()
    {
       
    }


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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
