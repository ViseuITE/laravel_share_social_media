<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SocialShareButtonsController extends Controller
{
    public function ShareWidget()
    {
        $shareComponent = \Share::page(
            'https://www.positronx.io/create-autocomplete-search-in-laravel-with-typeahead-js/',
            'Your share text comes here',
        )
        ->facebook()
        ->twitter()
        ->linkedin()
        ->telegram()
        ->whatsapp()        
        ->reddit();
        
        // return view('posts', compact('shareComponent'));

        $products = Product::get();
  
        return view('posts', compact('shareComponent', 'products'));
    }
}
