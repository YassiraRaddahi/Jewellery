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
        // where id -> 5
        $searchProducts = Product::orderBy('name', 'ASC');
        
     if(request()->has('search')) {
        $searchProducts = $searchProducts->where('name', 'like', '%', request()->get('search'). '%');
           
     }

        return view('views.home', [
            'search' => $searchProducts->paginate(10),
            'title' => 'Search Results'
        ]);
    
    }
   //  return view('views.home', [
    //'title' => 'Search Results',
    //'products' => $products, // or your product list
    //'searchBar' => true,
    //'searchResults' => $products,
    //'searchTerm' => $request->input('search', '')
//]);



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
    public function show(string $name)
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
