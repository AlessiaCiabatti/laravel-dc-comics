<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    // rotta che riceverà elenco di tutti i comics
    {
        $products = Comic::all();
        // dd($products);
        return view('comics.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    // rotta che riceve in get la chiamata per aere la visualizzazione del form
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    // il form in post invia a questa rotta
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    // riceve in get avendo l'id mostro il singolo elemento del comics
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