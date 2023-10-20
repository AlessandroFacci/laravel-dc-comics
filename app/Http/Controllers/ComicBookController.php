<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ComicBook;
use Illuminate\Support\Facades\Validator;

class ComicBookController extends Controller
{
    /**    
     * Display a listing of the resource.
     *
     * * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = ComicBook::paginate(10);

        $title = 'Comics';
        return view('comics.index', compact('title', 'comics')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        Validator::make(
            $data,
            [
                'title' => 'required|string|max:70',
                'series' => 'required|string|max:100',
                'type' => 'required|string|max:30',
                'sale_date' => 'required|date',
                'price' => 'required|string|max:10',
                'thumb' => 'required|string|url',
                'description'=> 'string'
            ]
        )->validate();

        $comic = new ComicBook();
        $comic->fill($data);
        $comic->save();

        return redirect()->route('comics.show', $comic);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * * @return \Illuminate\Http\Response
     */
    public function show(ComicBook $comic)
    {
        return view('comics.show', compact('comic'));     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * * @return \Illuminate\Http\Response
     */
    public function edit(ComicBook $comic)
    {
         return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ComicBook $comic)
    {
        $data = $request->all();
        $comic->update($data);
        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * * @return \Illuminate\Http\Response
     */
    public function destroy(ComicBook $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index'); 
    }
}