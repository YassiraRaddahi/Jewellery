<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    public function accountPage()
    {

        $user = Auth::user();

        return view('users.accountpage', [
            'user' => $user,
        ]);
    }

    public function showPersonalData()
    {

        $user = Auth::user();

        return view('users.personal_data', [
            'user' => $user,
        ]);
    }


    public function deleteAccountForm()
    {
        return view('users.account_delete');
    }

     public function deleteAccount(Request $request)
     {
            // Validate the request
            $credentials = $request->validate([
                'email' => ['required', 'email', 'exists:users,email'],
                'password' => ['required', 'string'],
            ]);
        
            // Getting the authenticated user
            $user = Auth::user();

            // Check if the provided credentials match the authenticated user
            if($user->email !== $credentials['email'] || !Hash::check($credentials['password'], $user->password)) {
                return redirect()->back()->withErrors(['general' => 'The provided credentials do not match your account.'])->withInput();
            }
            // Delete the user account
            $user = User::find($user->id);
            $user->delete();
            
            Auth::logout();

            session()->invalidate();

            // Regenerate the CSRF token
            session()->regenerateToken();

            // Redirect to home with a success message
            return redirect()->route('home')->with('success-account-deletion', 'Your account has been deleted successfully.');
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
