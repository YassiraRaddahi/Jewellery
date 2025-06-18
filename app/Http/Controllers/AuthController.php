<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use League\CommonMark\Reference\Reference;
use App\Models\User;

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
            'general' => 'The email address or password does not match our records.',
        ])->onlyInput('email');

    }


    public function registerForm()
    {

        if(Auth::check())
        {
            return redirect()->route('users.accountpage');
        }

        return view('auth.register');
    }

  
    public function register(Request $request)
    {
        // Validates the registration form
        $data = $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'infix' => ['nullable', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],         
        ]);

        try{

            // Creates a new user
            $user = User::create([
                'first_name' => $data['first_name'],
                'infix' => $data['infix'],
                'last_name' => $data['last_name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);

        } 
        catch (\Exception $e) {

            // Redirects back with an error message if user creation fails
            return back()->withErrors([
                'general' => 'An error occurred while creating your account. Please try again.',
            ])->withInput();

        }

        // Logs in the user
        Auth::login($user);

        // Regenerates the session to prevent session fixation
        $request->session()->regenerate();

        // Redirects to the account page
        return redirect()->route('users.accountpage')->with('success', 'Your account has been created successfully!');
    }

    public function logout(Request $request)
    {
        // Logs out the user
        Auth::logout();

        // Invalidates the session
        $request->session()->invalidate();

        // Regenerates the CSRF token
        $request->session()->regenerateToken();

        // Redirects to the home page
        return redirect()->route('home');
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
