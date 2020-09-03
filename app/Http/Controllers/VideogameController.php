<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Videogame;

class VideogameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videogames = Videogame::all();
        return view('videogames.index', compact('videogames'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('videogames.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data = $request->all();

      $videogameNew = new Videogame;
      $videogameNew->fill($data);
      $saved = $videogameNew->save();

      if($saved){
        $saved_videogame = Videogame::orderBy('id', 'desc')->first();
        return redirect()->route('videogames.show',$saved_videogame);
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Videogame $videogame)
    {
      return view('videogames.show', compact('videogame'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Videogame $videogame)
    {
      return view('videogames.edit', compact('videogame'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Videogame $videogame)
    {
      $data = $request->all();
      $videogame->update($data);

      return redirect()->route('videogames.show',$videogame);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Videogame $videogame)
    {
      $videogame->delete();
      return redirect()->route('videogames.index');
    }
}
