@extends('layouts.app')

@section('content')


    <!-- カルーセル ここから -->
    
    <div class="bd-example">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://picsum.photos/900/400" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://picsum.photos/900/400" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="http://via.placeholder.com/900x400" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <!-- カルーセル ここまで -->

    <!-- メイン-馬を探す -->
  <div class="container">
    <section>
   
    <h2 class="col-md-6 my-5">馬を探す</h2>
    <div class="input-group col-md-6 my-4">
      <input type="text" class="form-control">
      <span class="input-group-btn">
        <button type="button" class="btn btn-outline-secondary">検索</button>
      </span>
    </div>
      
    <button type="button" class="btn btn-outline-secondary btn-lg">セリ</button>
    <button type="button" class="btn btn-outline-secondary btn-lg">種牡馬</button>
    <button type="button" class="btn btn-outline-secondary btn-lg">母父名</button>
    <button type="button" class="btn btn-outline-secondary btn-lg">母馬名</button>
    <button type="button" class="btn btn-outline-secondary btn-lg">生産牧場</button>
    <button type="button" class="btn btn-outline-secondary btn-lg">金額</button>
    

    <h3 class="col-md-6 my-5">カテゴリから探す</h3>

    <button type="button" class="btn btn-outline-secondary btn-lg">当歳</button>
    <button type="button" class="btn btn-outline-secondary btn-lg">1歳</button>
    <button type="button" class="btn btn-outline-secondary btn-lg">2歳</button>
    <button type="button" class="btn btn-outline-secondary btn-lg">現役馬</button>
    <button type="button" class="btn btn-outline-secondary btn-lg">繁殖牝馬</button>
    <button type="button" class="btn btn-outline-secondary btn-lg">種牡馬</button>
    <button type="button" class="btn btn-outline-secondary btn-lg">クラブ馬</button>
    <button type="button" class="btn btn-outline-secondary btn-lg">乗馬</button>

    <h3 class="col-md-6 my-5">新着販売情報</h3>

    <div class="card-deck">
      <div class="card">
        <img src="https://picsum.photos/300/250" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">ドリーフォンテインの2019</h5>
          <p class="card-text">父名  ルーラーシップ</p>
          <p class="card-text">母名  ドリーフォンテイン</p>
          <p class="card-text">生産牧場  社台ファーム</p>
          <p class="card-text">価格  1500万円</p>
        </div>
      </div>
      <div class="card">
        <img src="https://picsum.photos/300/250" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">ドリーフォンテインの2019</h5>
          <p class="card-text">父名  ルーラーシップ</p>
          <p class="card-text">母名  ドリーフォンテイン</p>
          <p class="card-text">生産牧場  社台ファーム</p>
          <p class="card-text">価格  1500万円</p>
        </div>
      </div>
      <div class="card">
        <img src="https://picsum.photos/300/250" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">ドリーフォンテインの2019</h5>
          <p class="card-text">父名  ルーラーシップ</p>
          <p class="card-text">母名  ドリーフォンテイン</p>
          <p class="card-text">生産牧場  社台ファーム</p>
          <p class="card-text">価格  1500万円</p>
        </div>
      </div>
      <div class="card">
        <img src="https://picsum.photos/300/250" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">ドリーフォンテインの2019</h5>
          <p class="card-text">父名  ルーラーシップ</p>
          <p class="card-text">母名  ドリーフォンテイン</p>
          <p class="card-text">生産牧場  社台ファーム</p>
          <p class="card-text">価格  1500万円</p>
        </div>

      </section>

    <button type="button" class="btn btn-outline-primary">もっと見る</button>


    <!-- メイン-馬を探す ここまで -->

    <!--ニュース  ここから -->
  <section id='news'>
    <h2  class="my-5">ニュース</h2>

    <div class="row">
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
          <div class="card-body">
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
              </div>
              <small class="text-muted">9 mins</small>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
          <div class="card-body">
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
              </div>
              <small class="text-muted">9 mins</small>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
          <div class="card-body">
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
              </div>
              <small class="text-muted">9 mins</small>
            </div>
          </div>
        </div>
      </div>

      <button type="button" class="btn btn-outline-primary">もっと見る</button>
    </section>
    <!--ニュース  ここまで -->

    <!--お役立ち情報  ここから -->
    <!--お役立ち情報  ここまで -->

    <!--データ  ここから -->
    <!--データ  ここまで -->

    <!--サイトからのお知らせ  ここから -->

    <section id="info">
      <div class="container">
        <h2 class="my-5">お知らせ</h2>
        <div class="row">
          <div class="col-sm-offset-2 col-sm-8">
            <table class="table">
              <tbody>
                <tr>
                  <td class="pull-right"></td>
                  <td><time datetime="2016-08-01">2016/08/01</time></td>
                  <td>Cafe KiRAMEKIのWebサイトがオープンしました！</td>
                </tr>
                <tr>
                  <td class="pull-right"></td>
                  <td><time datetime="2016-07-15">2016/07/15</time></td>
                  <td>Cafe KiRAMEKIがTV取材されました！</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
    <!--サイトからのお知らせ  ここまで -->
@endsection
