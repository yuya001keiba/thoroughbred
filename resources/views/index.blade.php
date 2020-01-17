@extends('layouts.app')

@section('title','サラブレッドマーケット | 競走馬販売情報サイト')

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
@include('layouts.search')
@include('layouts.newsalehorse')



    <!-- メイン-馬を探す ここまで -->

    <!--ニュース  ここから -->
<div class="container">
  <section id='news'>
    <h2  class="my-5">ニュース</h2>

      <div class="row">
        <div class="col-lg-3 col-6 mb-2">
          <div class="card">
            <img src="http://via.placeholder.com/300x250" class="img-fluid" alt="...">
            <div class="card-body">
              <div class="card-body">
                <p class="card-text">ジェイエス冬季繁殖馬セールが1月22日(水)に開催!.</p>
                <div class="">
                  <small class="text-muted">2019.07.30</small>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6 mb-2">
          <div class="card">
            <img src="http://via.placeholder.com/300x250" class="img-fluid" alt="...">
            <div class="card-body">
              <div class="card-body">
                <p class="card-text">ダービー馬ロジャーバローズが浅屈腱炎で引退、種牡馬入り</p>
                <div class="">
                  <small class="text-muted">2019.07.30</small>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6 mb-2">
          <div class="card">
            <img src="http://via.placeholder.com/300x250" class="img-fluid" alt="...">
            <div class="card-body">
              <div class="card-body">
                <p class="card-text">2019年優駿スタリオンステーション繋養種牡馬の種付料</p>
                <div class="">
                  <small class="text-muted">2019.07.30</small>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6 mb-2">
          <div class="card" >
            <img src="http://via.placeholder.com/300x250" class="img-fluid" alt="...">
            <div class="card-body">
              <div class="card-body">
                <p class="card-text">ディープインパクトが急死　無敗で三冠を制すなど活躍</p>
                <div class="">
                  <small class="text-muted">2019.07.30</small>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

    <div class="text-right m-3">
      <button type="button" class="btn btn-primary">もっと見る</button>
    </div>
  </section>
  </div>

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
          <div class="col">
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
