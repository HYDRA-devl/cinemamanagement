<?php

    function findMovieById($movies, $theid) {
    foreach ($movies as $movie) {
        if ($movie['id'] == $theid) {
            return $movie;
        }
    }
    return null; 
    
}




?>