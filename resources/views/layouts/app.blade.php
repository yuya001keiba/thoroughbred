<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')サラブレッドマーケット</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <!-- ヘッダー ここから-->
    <header>
      <nav class="navbar navbar-expand-md navbar-light bg-light">
        <a class="navbar-brand" href="/">サラブレッドマーケット</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" style="order:2">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">
          <ul class="navbar-nav ">
            <li class="nav-item active">
              <a class="nav-link" href="/search">馬を探す</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">馬を売る</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">ニュース</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">お役立ち情報</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">データ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">お問い合わせ</a>
            </li>
          </ul>
        </div>

          <form class="form-inline" style="order:1">
            <button class="btn btn-sm btn-outline-secondary" type="button">お気に入り馬</button>
            <button class="btn btn-sm btn-outline-secondary" type="button">閲覧履歴</button>
          </form>
        
      </nav>
    </header>

    

    <!-- ヘッダー ここまで-->
    
    
    @yield('content')




  
  
  <div class="container">
    <footer class="pt-4 my-md-5 pt-md-5 border-top">
      <div class="row">
        <div class="col-6 col-md">
          <h5>カテゴリ</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">馬を探す</a></li>
            <li><a class="text-muted" href="#">馬を売る</a></li>
            <li><a class="text-muted" href="#">ニュース・特集</a></li>
            <li><a class="text-muted" href="#">お役立ち情報</a></li>
            <li><a class="text-muted" href="#">お知らせ</a></li>
            <li><a class="text-muted" href="#">よくある質問</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>サラブレッドマーケットについて</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">事業の目的</a></li>
            <li><a class="text-muted" href="#">会社概要</a></li>
            <li><a class="text-muted" href="#">あいさつ</a></li>
            <li><a class="text-muted" href="#">利用規約</a></li>
            <li><a class="text-muted" href="#">プライバシーポリシー</a></li>
            <li><a class="text-muted" href="#">サイトマップ</a></li>
          </ul>
        </div>
      </div>

      <div id="rights" class="text-center text-small">
        Copyright © サラブレッドマーケット. All Rights Reserved.
      </div>
      
    </footer>
  </div>
    <!-- ヘッダー ここまで -->


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  </html>