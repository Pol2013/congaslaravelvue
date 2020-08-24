<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
    
use App\Movies as Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $movies = Movie::all(); 
    return \View::make('list',compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return \View::make('new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    $movie = new Movie;
    $movie->name = $request->name;
    $movie->description = $request->description;
    $movie->save();
    return redirect('movie');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $movie = Movie::find($id);
                return \View::make('update',compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $movie = Movie::find($request->id);
                $movie->name = $request->name;
                $movie->description = $request->description;
 $movie->save();
                return redirect('movie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         $movie = Movie::find($id);
         $movie->delete();
        return redirect()->back();
    }
    public function search(Request $request){
         $movies = Movie::where('name','like','%'.$request->name.'%')->get();
         return \View::make('list', compact('movies'));
    }
}
