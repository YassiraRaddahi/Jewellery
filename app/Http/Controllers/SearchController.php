<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function search(Request $request)
    {
        // $searchBar = true;
        // $searchResults = null;

        // return view('views.home', [
        //      'searchBar' => $searchBar,
        //    'searchResults' => $searchResults,
        //  'searchTerm' => null
        //]);
        if ($request->has('search')) {
            $users = User::search($request->input('search'));
        } else {
            $users = User::query()->get();
        }

        return view('views.home', [
            'searchBar' => true,
            'searchResults' => $users,
            'searchTerm' => $request->input('search', '')
        ]);
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
        $user = User::findOrFail($id);
        return view('users.show', [
            'user' => $user,
        ]);
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
