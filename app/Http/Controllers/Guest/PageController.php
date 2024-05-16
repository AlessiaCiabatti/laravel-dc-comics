<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class PageController extends Controller
{
    public function index(){
        // salvo in una variabile il numero prodotti dell'array
                    // è uguale al mio model
        $num_products = Comic::count();
        return view('home', compact('num_products'));
    }

    public function products(){
        return view('products');
    }
}
