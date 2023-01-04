<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="{{ asset('css\style.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Article</title>
  </head>
  <body>
  <header>
        <div class="nav-container">
            <nav>
                <a href="/selamat-datang"><div class="logo"></div></a>
                <ul class="nav__links">
                    <li><a href="/selamat-datang">Home</a></li>
                    <li><a href="/article">Artikel</a></li>
                    <li><a href="#contact">Contact</a></li>                
                </ul>
                @if(Session::has('account'))
                    <a href = "/logout" class="cta"><button class="login">Log Out</button></a>
                @else
                    <a href = "/login" class="cta"><button class="login">Log In</button></a>
                @endif
            </nav>
        </div>
    </header>
    <div class="jumbotron-news">
      <!-- <img src="" alt=""> -->
      <div class="medca-news">
        <div class="logo-medca-news"><img src="/svg/MedCa_News.svg" alt=""></div>
        @foreach ($articles as $article)
        @if ($loop->first)
        <img class="background_article" src="{{$article->Cover_Article}}" alt="">
        <ul class="list-news">
          <li><a href="">Covid</a></li>
          <li><a href="">Covid</a></li>
          <li><a href="">Covid</a></li>
          <li><a href="">Covid</a></li>
          <li><a href="">Covid</a></li>
          <li><input type="search" name="Search" /></li>
          <li><i class="bi bi-search"></i></li>
        </ul>
        
        <h5>🔴Hot News</h5>
        <h1>{{$article->Judul}}</h1>
        <dl class="time-more">
          <dd>
            <p>Dibuat pada {{$article->updated_at}}</p>
            <a href="/isi/{{$article->Judul}}/{{$article->Kategori}}">Selengkapnya</a>
          </dd>
        
          <!-- <dd><a href="">Selengkapnya</a></dd> -->
        </dl>
      </div>
      @endif
      @endforeach 
    </div>
    <div class="quote">
      <h1>COVID varian baru, XBB, itu sudah 2 kasus warga Kabupaten Bogor</h1>
    </div>
    <div class="breaking-news">
      <h3>Breaking News</h3>
    </div>
    <div class="container text-center">
      <div class="blank"></div>
      <div class="row row-cols-3">
        @foreach ($articles as $article)
        @if ($loop->index > 0)
        <div class="card" style="width: 18rem;">
          <img src="{{$article->Cover_Article}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$article->Judul}}</h5>
            <p class="card-text">{{$article->Kategori}}</p>
            <a href="/isi/{{$article->Judul}}/{{$article->Kategori}}" class="btn btn-primary">Selengkapnya</a>
          </div>
        </div>
        @endif
        @endforeach
      </div>
    </div>
    <div class="footer"><img src="asset/footer.svg" alt="" /></div>
  </body>
</html>
