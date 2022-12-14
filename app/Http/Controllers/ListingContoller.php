<?php

namespace App\Http\Controllers;

use App\Models\Listing;

class ListingContoller extends Controller
{
    // Show all listings
    public function index()
    {
        return view('listings.index', [
            'listings' => Listing::all(),
        ]);
    }

    // Show single listing
    public function show(Listing $listing)
    {
        return view('listings.show', [
            'listing' => $listing,
        ]);

    }
}
