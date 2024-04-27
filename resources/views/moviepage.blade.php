<!-- resources/views/home.blade.php -->
@props(["movieid"])

@extends('layouts.app')

@section('title', 'Movie page')

@section('content')


    <main>
        <div class="container">
        <x-moviepage  :movie="$movie" />
        
        </div>
        <x-datecontainer  :datetime="$datetimearray" />
        
    </main>

    <x-footer />
@endsection

<style>
    .container{
    width:100% ;
    height:100%  ;
    
    }  
   
  </style>