@extends('layouts.app')

@section('title','検索結果-馬を探す | サラブレッドマーケット')

@section('content')

  <div class="container">
    <div class="row">

    <aside class="col-md-3">
      <section class="side"> 

        <h2 class="my-5">検索条件</h2>
   
@include('layouts.search')

        <h3 class="my-5">絞り込み</h3>
      
        <button type="button" class="btn btn-outline-secondary btn-lg m-2">生産年</button>
        <button type="button" class="btn btn-outline-secondary btn-lg m-2">性別</button>
        <button type="button" class="btn btn-outline-secondary btn-lg m-2">父名</button>
        <button type="button" class="btn btn-outline-secondary btn-lg m-2">母父名</button>
        <button type="button" class="btn btn-outline-secondary btn-lg m-2">生産牧場</button>
        <button type="button" class="btn btn-outline-secondary btn-lg m-2">価格</button>

    </section>
    </aside>

    <main class="col-md-9">
      <div class="main">
        <section> 
          <h2 class="my-5">検索結果</h2>
  
          <p>
            検索頭数は、{{-- $horses->count() --}}頭です。
            
            並び替え
            <input type="checkbox" name="riyu" value="2">募集馬のみ表示
         </p>
  
  
  
        </section>
      
      <!--お役立ち情報  ここまで -->
      
      @if(!isset($horses[0]))
      該当馬がいませんでした。別の条件で検索してください。
      @else
      
       @foreach ($horses as $horse)
       
          <div class="card">
          <a href="{{ url('/horse/'.$horse->breed_id) }}">  
              <div class="card-header">
                {{ $horse->horse_name }} {{ $horse->gender }}・{{ $horse->color }}
                <button type="button" class="btn btn-warning">お気に入り登録</button>
              </div>
            <div class="card mb-3">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img src="https://picsum.photos/300/250" alt="" class="img-thumbnail">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    @if(isset($horse->price))
                       価格  {{ $horse->price }}万円<br>
                    @endif
                    父  {{ $horse->sire }}<br>
                    母 {{ $horse->dam }}<br>
                    （{{ $horse->broodmare_sire }}）<br>
                    生産者 {{ $horse->breeding_farm }}<br>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
    
      @endforeach
  
    @endif
  
      </div>
  </div>

  
@endsection


