<!-- resources/views/home.blade.php -->

@extends('layouts.app')

@section('title', 'reservation page')

@section('content')


    <main>
        <div class="container">
       
        <x-reservationpage movieid={{$id}} date="{{ $date }}" hour="{{ $hour }}"/>
        </div>
        
        
    </main>

    <x-footer />
@endsection

<style>
    .container{
    width:100% ;
    height:100%  ;
    
    }  
   
  </style>