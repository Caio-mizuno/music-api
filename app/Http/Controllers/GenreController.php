<?php

namespace App\Http\Controllers;

use App\Models\Gerne as Genre;
use App\Http\Resources\Genre as GenreResource;

use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $genre = Genre::paginate(15);
        return GenreResource::collection($genre);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Genre $genre)
    {
        //
        if($genre->save()){
            return new GenreResource($genre);
        }
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
        $genre = new Genre;
        $genre->name = $request->input('name');
        return $this->create($genre);

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
        $genre = Genre::findOrFail( $id );
        return new GenreResource( $genre );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Genre $genre
     * @return \Illuminate\Http\Response
     */
    public function edit(Genre $genre)
    {
        //
        

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $genre = Genre::findOrFail( $request->$id );
        $genre->name = $request->input('name');
        return $this->create($genre);
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
        $genre = Genre::findOrFail( $id );
        if( $genre->delete() ){
            return new GenreResource( $genre );
        }
    }
}
