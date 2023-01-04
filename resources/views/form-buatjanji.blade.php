<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="{{ asset('css\style.css') }}" />
    <script src="main.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pilih Jadwal</title>
  </head>
  <style>
    body {
      height: 100vh;
      width: 100%;
      background: linear-gradient(180deg, #ffb9b9 0%, #f5dbdb 100%);
    }
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
    <div class="buatjanji">
      <div class="logo-medca-dokter"></div>
      <h2 class="header-buatjanji">Pilih Jadwal</h2>
        <!--  -->
    </div>
    <div class="pilih-dokter">
      @foreach ($doks as $list)
      <form action="/ajukan" method="post">
        @csrf
        
        
        <div class="dokter-1">
          <img class="foto-dokter" src="{{$list->Foto_Dok}}" alt="" />
          <div class="wrap-dokter">
            <h2 class="nama-dokter" name="namaDok">{{$list->Name_Dok}}</h2>
            <input type="hidden" name="email_dok" value="{{ $list->Email_Dok }}">
            <input type="hidden" name="nama_dok" value="{{ $list->Name_Dok }}">
            <input type="hidden" name="id_dok" value="{{ $list->Dokter_ID }}">
            <!-- <h3 class="email-dokter" name="emailDok" value="emailDok">{{$list->Email_Dok}}</h3> -->
            <h6 class="spesialisasi">{{$list->Spesialisasi}}</h6>
            <h6 class="infoRs">{{$list->Tempat_RS}}</h6>
          </div>
          <div class="wrap-rating">
            <h3 class="rating-text">Rating Dokter</h2>
            <h5 style="text-align:center">{{$list->Rating}}</h5>
            <input type="text" name="keluhan" required placeholder="masukkan keluhan anda">
            <div class="button-ajukan">
              <button type ="submit" style="border-radius:10px"class="button-ajukan">Ajukan</button>
            </div>
          </div>
          
        </div>
        
      </div>
      
    </form>
    @endforeach
  </body>
</html>
