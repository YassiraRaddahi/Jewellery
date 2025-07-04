<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\User;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function liveSearch(Request $request)
    {
        $products = Product::with('category')->orderBy('name', 'ASC');
        $searchProducts = [];

        // Check if the request has a search parameter
        //  $autofocus = $request->get('from') === 'searchicon';
        // if ($autofocus) {
        //       $autofocus = true;
        //   } else {
        //       $autofocus = false;
        //   }
        // dd($categories);

        $autofocus = true;

        if (!empty($request->search)) 
        {
            $searchProducts = $products
                ->where('name', 'like', "%{$request->search}%")
                ->orWhereHas('category', function ($query) use ($request) {
                    $query->where('name', 'like', "%{$request->search}%");
                })
                ->orWhere('description', 'like', "%{$request->search}%")->get();
        }
        return view('pages.home', [
            'search' => $request->search,
            'searchResults' => $searchProducts,
            'autofocus' => $autofocus
        ]);
    }
    /**
     * Display a listing of the resource.
     */


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
        //   window.searchFocus = @json($searchFocus ?? false);

        //document.addEventListener('DOMContentLoaded', function () {
        //  if (window.searchFocus) {
        //    const input = document.getElementById('search-input');
        //  if (input) {
        //    input.focus();
        //}
        // }
        //});

    }

    /**
     * Display the specified resource.
     */
    public function show(string $name)
    {
        /* */
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
