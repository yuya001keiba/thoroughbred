@extends('layouts.app')

@section('title','サラブレッドマーケット | 競走馬販売情報サイト')

@section('content')


       @foreach ($horses as $horse)
       
       {{ $horse->id }}
       {{ $horse->price }}
       {{ $horse->category_name }}
       {{ $horse->category_name }}
           父  {{ $horse->sire }}<br>
           母 {{ $horse->dam }}<br>
           （{{ $horse->broodmare_sire }}）<br>
           生産者 {{ $horse->breeding_farm }}<br>



       
    
       @endforeach

@endsection