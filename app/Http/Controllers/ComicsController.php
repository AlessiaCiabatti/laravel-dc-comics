<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use App\Function\Helper;
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
        // qui stampo il form di creazione dei comics
        // rotta get-> le posso raggiungere con un link
        // le latre rotte ho bisogno di un form
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    // il form in post invia a questa rotta
    {
        // riceve la $request che sono tutti i dati contenuti nel form
        // prendo tutti i dati provenienti dal form
        $form_data = $request->all();

        $new_comic = new Comic();
        $new_comic->title = $form_data['title'];
        $new_comic->slug = Helper::generateSlug($new_comic->title, new Comic());
        $new_comic->description = $form_data['description'];
        $new_comic->thumb = $form_data['thumb'];
        $new_comic->price = $form_data['price'];
        $new_comic->series = $form_data['series'];
        $new_comic->sale_date = $form_data['sale_date'];
        $new_comic->type = $form_data['type'];
        // con la funzione implode() convertiamo gli array di artisti e scrittori in stringhe separate da virgole
        $new_comic->artists = json_encode($new_comic['artists']);
        $new_comic->artists = json_encode($new_comic['writers']);
        $new_comic->save();
        // dd($new_comic);
        return redirect()->route('comics.show', $new_comic);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    // riceve in get avendo l'id mostro il singolo elemento del comics
    {
        //$prodotto = Comic::find($id);
        return view('comics.show', compact('comic'));
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
