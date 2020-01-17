@extends('layouts.app')

@section('title',' | サラブレッドマーケット')

@section('content')

  <div class="container">
      
    <h1 class="my-4">{{ $horses->horse_name }}</h1>
    {{ $horses->gender }}・2歳・{{ $horses->color }}
        <button type="button" class="btn btn-warning">お気に入り登録</button>

    <div class="row">
      <aside class="col-md-6">
    <div class="imag">
      <img src="https://picsum.photos/500/250" alt="" class="img-fluid my-3">
    </div>

   @if(isset($salehorses->video))
    <div class="embed-responsive embed-responsive-16by9">
      <iframe class="embed-responsive-item" src="{{ $salehorses->video }}" allowfullscreen></iframe>
    </div>
   @endif
      
    </aside>



    <main class="col-md-6">
      <table class="table">
      @if(isset($salehorses->price))
        <tr>
          <th>価格</th>
          <td>{{ $salehorses->price }}万円</td>
        </tr>
      @endif
        
        <tr>
          <th>父名</th>
          <td>{{ $horses->sire }}</td>
        </tr>
        <tr>
          <th>母名</th>
          <td>{{ $horses->dam }}</td>
        </tr>
        <tr>
          <th>母父名</th>
          <td>{{ $horses->broodmare_sire }}</td>
        </tr>
        <tr>
          <th>生年月日</th>
          <td>{{ $horses->birthday }}</td>
        </tr>
        <tr>
          <th>生産牧場</th>
          <td>{{ $horses->breeding_farm }}</td>
        </tr>
        
        @if(isset($salehorses->applicant))
        <tr>
          <th>販売申込者</th>
          <td>{{ $salehorses->applicant }}</td>
        </tr>
        @endif
        
        @if(isset($salehorses->tel))
        <tr>
          <th>連絡先</th>
          <td>{{ $salehorses->tel }}<br>午前9時～午後18時まで  ※土日祝日を除く</td>
        </tr>
        @endif
        
      </table>

      <h4 class="my-3">馬体情報</h4>

      <h4 class="my-3">ブラッドタイプ</h4>


    </main>
  </div>
  
  @if(isset($salehorses->point))
  <h2 class="my-5">おすすめポイント</h2>
  <p>{{ $salehorses->point }}</p>
  @endif

<h2 class="my-5">血統</h2 class="my-5">

<table>
  <tr height="30">
    <td bgcolor="#f2fdff" width="315" rowspan="4" class="normal_top_cell">&nbsp;&nbsp;<br>&nbsp;ダイワメジャー<br><br><span style="padding-left:150px;">2001年</span></td>
    <td bgcolor="#f2fdff" width="315" rowspan="2" class="normal_top_cell">&nbsp;サンデーサイレンス<br><span style="padding-left:150px;">1986年</td>
    <td bgcolor="#f2fdff" width="315" class="normal_top_cell">&nbsp;Halo</td>
    </tr>
    <tr height="30">
    <td bgcolor="#fff8f8">&nbsp;Wishing Well</td>
    </tr>
    <tr height="30">
    <td bgcolor="#fff8f8" rowspan="2">&nbsp;スカーレットブーケ<br><span style="padding-left:150px;">1988年</td>
    <td bgcolor="#f2fdff">&nbsp;ノーザンテースト</td>
    </tr>
    <tr height="30">
    <td bgcolor="#fff8f8">&nbsp;スカーレツトインク</td>
    </tr>
    <tr height="30">
    <td bgcolor="#fff8f8" rowspan="4">&nbsp;&nbsp;<br>&nbsp;アシュレイリバー<br><br><span style="padding-left:150px;">2004年</span></td>
    <td bgcolor="#f2fdff" rowspan="2">&nbsp;Mr. Greeley<br><span style="padding-left:150px;">1992年</td>
    <td bgcolor="#f2fdff">&nbsp;Gone West</td>
    </tr>
    <tr height="30">
    <td bgcolor="#fff8f8">&nbsp;Long Legend</td>
    </tr>
    <tr height="30">
    <td bgcolor="#fff8f8" rowspan="2">&nbsp;チャールストンハーバー<br><span style="padding-left:150px;">1998年</td>
    <td bgcolor="#f2fdff">&nbsp;Grindstone</td>
    </tr>
    <tr height="30">
    <td bgcolor="#fff8f8">&nbsp;Penny's Valentine</td>
    </tr>
 </table>

 <h2 class="my-5">兄弟</h2 class="my-5">

 <div class="table-scroll">
 <table>
 <table class="table">
  <thead>
   <tr height="40">
    <th width="40">齢</th>
    <th width="55">生年</th>
    <th width="180">馬名</th>
    <th width="40">性</th>
    <th width="180">父名</th>
    <th width="450">成績</th>
   </tr>
  </thead>
   <tbody>
   <tr height="50">
    <td class="text_center">6</td>
    <td class="text_center">2004</td>
    <td class="text_left"><b>アシュレイリバー</b></td>
    <td class="text_center">牝</td>
    <td class="text_left">Mr. Greeley</td>
    <td class="text_left">[JRA] 22戦 1勝 【8,820,000円】<br>[厩舎](栗)橋口弘次⇒(栗)吉田直弘&nbsp;[馬体重]476～510<br>[生産]早来町/ノーザンファーム</td>
   </tr>
  </tbody>
   <tbody>
   <tr height="50">
    <td class="text_center">7</td>
    <td class="text_center">2005</td>
    <td class="text_left">グレースチャーチ</td>
    <td class="text_center">牝</td>
    <td class="text_left">タイキシャトル</td>
    <td class="text_left">[JRA] 4戦 未勝利 【0円】<br>[NAR] 5戦 1勝<br>[厩舎](栗)松元茂樹⇒(美)大竹正博&nbsp;[馬体重]454～476<br>[生産]早来町/ノーザンファーム</td>
   </tr>
  </tbody>
   <tbody>
   <tr height="50">
    <td class="text_center">9</td>
    <td class="text_center">2007</td>
    <td class="text_left">アドマイヤキャロル</td>
    <td class="text_center">牝</td>
    <td class="text_left">スペシャルウィーク</td>
    <td class="text_left">[JRA] 17戦 未勝利、入着 【9,910,000円】<br>[NAR] 6戦 2勝、早苗月特別[D1800]<br>[厩舎](美)戸田博文&nbsp;[馬体重]470～500<br>[生産]安平町/ノーザンファーム</td>
   </tr>
  </tbody>
   <tbody>
   <tr height="50">
    <td class="text_center">10</td>
    <td class="text_center">2008</td>
    <td class="text_left">カレンデイムーン</td>
    <td class="text_center">牡</td>
    <td class="text_left">タニノギムレット</td>
    <td class="text_left">[JRA] 22戦 2勝 【21,906,000円】<br>[厩舎](栗)安田隆行⇒(栗)鈴木孝志&nbsp;[馬体重]454～484<br>[生産]安平町/ノーザンファーム</td>
   </tr>
  </tbody>
   <tbody>
   <tr height="50">
    <td class="text_center">11</td>
    <td class="text_center">2009</td>
    <td class="text_left">カレンブラックヒル</td>
    <td class="text_center">牡</td>
    <td class="text_left">ダイワメジャー</td>
    <td class="text_left"><span class="spView">[JRA] 22戦 7勝、ＮＨＫマイルカップ[G1-T1600]、</span><span class="spView">毎日王冠[G2-T1800]、ニュージーランドトロフィー[G2-T1600]、</span><span class="spView">小倉大賞典[G3-T1800]、ダービー卿チャレンジトロフィー[G3-T1600]、</span>こぶし賞[500万下-T1600] 【332,847,000円】<br>[厩舎](栗)平田修&nbsp;[馬体重]460～488<br>[生産]安平町/ノーザンファーム</td>
   </tr>
  </tbody>
   <tbody>
   <tr height="50">
    <td class="text_center">12</td>
    <td class="text_center">2010</td>
    <td class="text_left">レッドセイリング</td>
    <td class="text_center">牝</td>
    <td class="text_left">ゼンノロブロイ</td>
    <td class="text_left">[JRA] 12戦 2勝 【13,500,000円】<br>[厩舎](栗)藤原英昭&nbsp;[馬体重]480～510<br>[生産]安平町/ノーザンファーム</td>
   </tr>
  </tbody>
   <tbody>
   <tr height="50">
    <td class="text_center">13</td>
    <td class="text_center">2011</td>
    <td class="text_left">レッドアルヴィス</td>
    <td class="text_center">牡</td>
    <td class="text_left">ゴールドアリュール</td>
    <td class="text_left"><span class="spView">[JRA] 18戦 5勝、ユニコーンステークス[G3-D1600]、</span>すばるステークス[オープン-D1400]、欅ステークス[オープン-D1400] 【114,942,000円】<br>[厩舎](栗)安田隆行&nbsp;[馬体重]486～512<br>[生産]安平町/ノーザンファーム</td>
   </tr>
  </tbody>
   <tbody>
   <tr height="50">
    <td class="text_center">14</td>
    <td class="text_center">2012</td>
    <td class="text_left">プエルト</td>
    <td class="text_center">セ</td>
    <td class="text_left">メイショウサムソン</td>
    <td class="text_left">[JRA] 24戦 2勝 【27,850,000円】<br>[NAR] 4戦 未勝利<br>[厩舎](美)大竹正博&nbsp;[馬体重]522～544<br>[生産]洞爺湖町/レイクヴィラファーム</td>
   </tr>
  </tbody>
   <tbody>
   <tr height="50">
    <td class="text_center">15</td>
    <td class="text_center">2013</td>
    <td class="text_left">モーゼス</td>
    <td class="text_center">牡</td>
    <td class="text_left">ダイワメジャー</td>
    <td class="text_left">[JRA] 17戦 1勝 【11,740,000円】<br>[厩舎](美)大江原哲&nbsp;[馬体重]500～526<br>[生産]洞爺湖町/レイクヴィラファーム</td>
   </tr>
  </tbody>
  </table>
  
</div>

@endsection