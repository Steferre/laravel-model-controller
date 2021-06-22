<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class HomeController extends Controller
{
    public function index() {

        /*per importare i file dal database*/
        /* $dbTotData = Movie::all();
        dump($dbTotData);

        $moviesData = [];

        foreach($dbTotData as $movies) {
            dump($movies);

            $moviesData[] .= $movies;
        } 

        dump($moviesData);

        $moviesList = [
            "movies" => $moviesData
        ];   */

         $moviesList = [
            "movies" => Movie::all()
        ];

        //dump($moviesList);


        return view('homepage', $moviesList);
    }
}
