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

    <title>Isi Artikel</title>
</head>

<style>

</style>


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
    <div class="logo-medca-news"><img src="/svg/MedCa_News.svg" alt=""></div>
      <div class="content-bar">
          <div class="bg-content">
              <ul class="content-in-bar">
                  <li><a href="">Covid 19</a></li>
                  <li><a href="">Lambung</a></li>
                  <li><a href="">Jantung</a></li>
                  <li><a href="">Mata</a></li>
                  <li class="search-artikel"><input type="text" name="search-artikel" value="Cari Artikel"></li>
          </ul>
        </div>
      </div>
      <div class="wrap-isi-artikel">
        <div class="heading-artikel">
          <h1>{{$artikel->Judul}}</h1>
          <h5>medca News - 13/11/2022, 10:45 WIB</h5>
        </div>

        <div class="foto-artikel"><img src="{{$artikel->Cover_Article}}" alt=""></div>
        <!-- <div class="rekomendasi-berita">
          <h3>Rekomendasi Berita</h3>
        </div>
        <div class="list-rekomendasi-berita">
          
        </div> -->
        <div class="isi-artikel">
          <p>
            {{$artikel->Paragraf}}
          </p>
        </div>
      </div>
      
      
      

</body>
</html>