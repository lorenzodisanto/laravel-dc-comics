<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        //recupero dati dal database
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        //rotta per restituire il form
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //salvataggio nuovo comic inserito
        $new_data = $request->all();
        $comic = new Comic;
        $comic->fill($new_data);
        $comic->save();

        // dopo il salvataggio redirect alla rotta show
        return redirect()->route('comics.show', $comic);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     */
    public function show(Comic $comic)
    {
        //metodo show per dettaglio singola risorsa
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     */
    public function edit(Comic $comic)
    {
        //ritorno la vista del form di modifica
        return view('comics.edit', compact('comic'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     */
    public function update(Request $request, Comic $comic)
    {   
        // salvataggio modifica
        $new_data = $request->all();
        $comic->update($new_data);

        // dopo il salvataggio redirect alla rotta show
        return redirect()->route('comics.show', $comic);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     */
    public function destroy(Comic $comic)
    {
        // cancello fumetto
        $comic->delete();
        // ritorno alla lista 
        return redirect()->route('comics.index');
    }
}
