<!-- resources/views/home.blade.php -->

@extends('layouts.app')

@section('title', 'Home Page')

@section('content')

    <main>
        <div class="container">
        <x-homepage/>
        </div>
        
        <x-movielist :moviearray="$movies" />
        <x-commingmovies/>
    
    </main>

    <x-footer />
@endsection

<style>
    .container{
    width:100% ;
    height:100%  ;
    
    }  
   
  </style>