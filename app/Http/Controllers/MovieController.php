<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Genre;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function show(){
        $movies = Movie::all();
        return view('welcome', compact('movies'));
    }

    public function create(){
        $genres = Genre::all();
        return view('createMovie', compact('genres'));
    }

    public function store(Request $request){

        $request->validate([
            'title'=> 'required|max:50',
            'releaseDate'=> 'required|date', 
            'runningTime'=> 'required|min:4', 
            'director'=> 'required|min:5', 
            'producer'=> 'required|max:100', 
            'actor'=> 'required|max:100',
            'image'=> 'required|mimes:png,jpg'
        ]);

        $fileName = $request->title . '-' . $request->author . '-' . $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('/public/image',$fileName);
       
        Movie::create([
            'title'=> $request->title,
            'releaseDate'=> $request->releaseDate, 
            'runningTime'=> $request->runningTime, 
            'director'=> $request->director, 
            'producer'=> $request->producer, 
            'actor'=> $request->actor,
            'image'=> $fileName,
            'genreId'=> $request->genre
        ]);
        return redirect(route('show'));
    }

    public function edit($id){
        $genres = Genre::all();
        return view('createMovie', compact('genres'));
        
       $movie = Movie::findOrFail($id);
       return view('editMovie', compact('movie'));
    }

    public function update(Request $request, $id){
        $movie = Movie::findOrFail($id);
        
        $movie->update([
            'title'=> $request->title,
            'releaseDate'=> $request->releaseDate, 
            'runningTime'=> $request->runningTime, 
            'director'=> $request->director, 
            'producer'=> $request->producer, 
            'actor'=> $request->actor
        ]);
        return redirect(route('show'));
    }

    public function delete($id){
        Movie::destroy($id);
        return redirect(route('show'));
    }
}
