<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    private const IMG_PATH_IMDB = "https://image.tmdb.org/t/p/w500";
    
    public function apiConn()
    {
        $request = Http::get('https://api.themoviedb.org/3/movie/popular?api_key=6456d2c17f91fa7db023816d864fef2e');
        $response =  $request['results'];
      
        

        foreach ($response as $movie) {
            $movie [] = [
                'id' => $movie['id'],
                'titulo' => $movie['title'],
                'nota' => $movie['vote_average'],
                'thumbnail' => self::IMG_PATH_IMDB . $movie['poster_path']

            ];
        }

        return view ('pages.master',compact('movie'));
    }
}
