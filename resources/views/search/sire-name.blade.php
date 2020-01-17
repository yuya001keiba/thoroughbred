@extends('layouts.app')

@section('title','サラブレッドマーケット | 競走馬販売情報サイト')

@section('content')

    <div class="container">

       <h1>ア～オから探す</h1>
       
       <form action="/search/siresearch" method="get" >

           @foreach ($horses as $horse)
           
           <input type="checkbox" name="sire" value="{{ $horse->sire }}" />{{ $horse->sire }}　{{ $horse->sire_count }}<br>
        
           @endforeach
           
          <input type="submit"  value="検索" class="btn btn-outline-secondary">
       </form>
　
　</div>
　
@endsection