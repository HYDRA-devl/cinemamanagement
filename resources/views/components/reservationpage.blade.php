@props(['movieid', 'date', 'hour'])
@php
    $movies = include(base_path('resources/views/components/movieData.php'));

include_once(base_path('app/helpers.php'));
$movie=findMovieById($movies,$movieid);

@endphp


<div style="width: 100% ;height: 100%;display: flex ;justify-content: start">
<x-sidecard imageurl="{{ $movie['background_image'] }}" date="{{$date}}" seance="{{$hour}}" nomfilm="{{ $movie['title'] }}" nomcinema="ENSIAS CINEMA" />
<x-seatreservation/>

</div>