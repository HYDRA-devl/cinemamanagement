<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\ProjectionFilm;

use App\Models\Utilisateur;

class moviecontroller extends Controller
{
public function fetshMovies() {    
$movies= Movie::all()->toArray();
return view('home', ['movies' => $movies]);

}

public function fetshMovie($id){
    $movie = Movie::with('projections')->findOrFail($id)->toArray();
    $MovieProjection=$movie["projections"];
    $dates=[];
    foreach($MovieProjection as $projection){
        $dates[]=$projection["projection_datetime"];
    }
    
    $result = [];

    foreach ($dates as $dateTime) {
        
        [$date, $time] = explode(' ', $dateTime);
        
        if (!isset($result[$date])) {
            $result[$date] = []; 
        }
        
       
        $result[$date][] = $time;
    }
    
    return view('moviepage',["movie"=>$movie,"datetimearray"=>$result]);
 
}

public function register(Request $request){
    
    return view('registration');
}

public function signin(){
    return view('signin');

}


}
