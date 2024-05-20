<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use App\Function\Helper;

// importo
use App\Http\Requests\ComicRequest;
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
    public function store(ComicRequest $request)
    // il form in post invia a questa rotta
    {

    // validazione senza classe Custam ComicRequest
        // // validazione,
        // $request->validate([
        //     // required = richiesto
        //     // e posso mettere altri parametri di seguito e devono essere in relazione con gli elementi  della migrazione
        //     'title' => 'required|min:3|max:255',
        //     'type' => 'required|min:2|max:255',
        //     'price' => 'required|min:2|max:255',
        //     'sale_date' => 'required|min:2|max:255',
        //     'description' => 'required|min:10|max:255',
        // ],
        // [
        //     'title.required' => 'Il titolo è un campo obbligatorio',
        //     'title.min' => 'Il titolo deve avere un minimo di :min caratteri',
        //     'title.max' => 'Il titolo non deve avere più di :max caratteri',

        //     'type.required' => 'Il type è un campo obbligatorio',
        //     'type.min' => 'Il campo type deve avere un minimo di :min caratteri',
        //     'type.max' => 'Il campo type non deve avere più di :max caratteri',

        //     'price.required' => 'Il price è un campo obbligatorio',
        //     'price.min' => 'Il campo price deve avere un minimo di :min caratteri',
        //     'price.max' => 'Il campo price non deve avere più di :max caratteri',

        //     'sale_date.required' => 'Il sale_date è un campo obbligatorio',
        //     'sale_date.min' => 'Il campo sale_date deve avere un minimo di :min caratteri',
        //     'sale_date.max' => 'Il campo sale_date non deve avere più di :max caratteri',

        //     'description.required' => 'Il description è un campo obbligatorio',
        //     'description.min' => 'Il campo description deve avere un minimo di :min caratteri',
        //     'description.max' => 'Il campo description non deve avere più di :max caratteri',
        // ]);

        // riceve la $request che sono tutti i dati contenuti nel form
        // prendo tutti i dati provenienti dal form
        $form_data = $request->all();

        //  ///// creare nuova istanza senza fillable
        $new_comic = new Comic();


        // $new_comic = new Comic();
        // $new_comic->title = $form_data['title'];
        // $new_comic->slug = Helper::generateSlug($new_comic->title, new Comic());
        // $new_comic->description = $form_data['description'];
        // $new_comic->thumb = $form_data['thumb'];
        // $new_comic->price = $form_data['price'];
        // $new_comic->series = $form_data['series'];
        // $new_comic->sale_date = $form_data['sale_date'];
        // $new_comic->type = $form_data['type'];
        // // con la funzione implode() convertiamo gli array di artisti e scrittori in stringhe separate da virgole
        // $new_comic->artists = json_encode($new_comic['artists']);
        // $new_comic->artists = json_encode($new_comic['writers']);
        // $new_comic->save();
        // // dd($new_comic);

        // ///////// istanza con fillable
        $form_data['slug'] = Helper::generateSlug($form_data['title'], new Comic());
        $new_comic->fill($form_data);
        // in form_data non è presente lo slug e quindi lo devo aggiungere
        $new_comic->save();

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
    public function edit(Comic $comic)
    {
        //restituisco il form dell'edit
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        /*

            1 valido i dati (TOTO)
            2 salvo i dati del form in $form_data
            3 genero lo slug se necessario
            4 aggiorno i dati nel db
            5 redirect alla show

        */
        $form_data = $request->all();

        // genero un nuovo slug solo se il nuovo è diverso dal vecchio
        if($form_data['title'] === $comic->title){
            $form_data['slug'] = $comic->slug;
        }else{
            $form_data['slug'] = Helper::generateSlug($form_data['title'], new Comic);
        }

        //efffettua il fill dei dati e li salva aggiornando il db
        $comic->update($form_data);

        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        //eliminzaione elemento e reindirizzo alla index con un messaggio in sessione dell'avvenuta eliminazione
        $comic->delete();

        // ->with('ciave_varicbile_di _sessione', 'valore variabile di sessione nome arbitrario')
        return redirect()->route('comics.index')->with('deleted', 'Your comic book' . $comic->title . 'was deleted correctly');
    }
}
