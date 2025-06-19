<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
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

    public function updateDataForm(string $sortData)
    {

        $validRouteParams = ['personal-information', 'login-information', 'address-details'];

        // Validate the sortData parameter
        if (!in_array($sortData, $validRouteParams, true)) {
            abort(404);
        }
        
        $sortDataToUpdate = ucwords(str_replace('-', ' ',$sortData));
        $title = 'Update ' . $sortDataToUpdate;
        $updateUserDataForm = 'users_components.update_' . str_replace('-', '_', $sortData) . '_form';


        $user = Auth::user();

        return view('users.update_data', [
            'user' => $user,
            'sortDataToUpdate' => $sortDataToUpdate,
            'title' => $title,
            'updateUserDataForm' => $updateUserDataForm,
        ]);
    }

    public function updatePersonalInformation(Request $request)
    {
        $dataToUpdate = $request->validate([
            'first-name' => ['required', 'string', 'max:255'],
            'infix' => ['nullable', 'string', 'max:255'],
            'last-name' => ['required', 'string', 'max:255'],
            'phone-number' => ['nullable', 'string', 'regex:/^\+?[1-9][0-9]{6,14}$/' ],
        ],
[
            'phone-number.regex' => 'Please enter a valid phone number of 7 to 15 digits with no spaces or special characters. It may start with "+" followed by a digit other than 0.' 
        ]);

        try
        {

            $user = Auth::user();
            $user->fill([
                'first_name' => ucwords($dataToUpdate['first-name']),
                'infix' => $dataToUpdate['infix'] !== null ? strtolower($dataToUpdate['infix']) : null,
                'last_name' => ucwords($dataToUpdate['last-name']),
                'phone' => $dataToUpdate['phone-number'] ?? null,
            ]);

            // Checks whether any data has changed
            if($user->isDirty())
            {
                $user->save();
                return redirect()->route('users.personaldata')->with('success', 'Your personal information has been updated successfully.');
            }
        } 
        catch (\Exception $e) 
        {

            // Redirects back with an error message if update fails
            return back()->withErrors([
                'general' => 'An error occurred while updating your personal information. Please try again.',
            ])->withInput();

        }

        return redirect()->route('users.personaldata');

    }

    public function updateLoginInformation(Request $request)
    {
        $dataToUpdate = $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . Auth::id()],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
        ]); 

        try
        {
            $user = Auth::user();
            $user->email = strtolower($dataToUpdate['email']);

            if(!empty($dataToUpdate['password']))
            {
                 $user->password = Hash::make($dataToUpdate['password']);
            }

            // Checks whether any data has changed
            if($user->isDirty())
            {
                $user->save();
                return redirect()->route('users.personaldata')->with('success', 'Your login information has been updated successfully.');
            }
        }
        catch(\Exception $e)
        {
            return back()->withErrors([
                'general' => 'An error occurred while updating your personal information. Please try again.'
                ])->withInput();
        }

        return redirect()->route('users.personaldata');
    
    }

    public function deleteAccountForm()
    {
        return view('users.delete_account');
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
        if($user->email !== strtolower($credentials['email']) || !Hash::check($credentials['password'], $user->password)) {
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
        return redirect()->route('home')->with('success', 'Your account has been deleted successfully.');
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
