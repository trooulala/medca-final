\<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="{{ asset('css\style.css') }}" />
    <script src="main.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detail Rumah Sakit</title>
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
    <div class="jumbotron-rs">
      @foreach ($temps as $temp)
      <h1 class="header-rs">{{$temp->Name_RS}}</h1>
      <h4 class="alamat-rs">{{$temp->Alamat_RS}}</h4>
      <p class="deskripsi-rs">
        {{$temp->Deskripsi_RS}}
      </p>
      @endforeach
    </div>
    <div class="fitur-rs">
      <a href="https://pantirapih.or.id/rspr/kontak-kami/"><button class="cta-fitur-rs">Telepon</button></a>
      <a href="https://pantirapih.or.id/rspr/home-care/"><button class="cta-fitur-rs">Fasilitas</button></a>
      <a href="https://pantirapih.or.id/rspr/jadwal-dokter/"><button class="cta-fitur-rs">Jadwal Praktek</button></a>
    </div>
    <div class="fitur-rs2">
      <a href="http://pantirapih.id/registro/index.php/Kamar/infokamar"><button class="cta-fitur-rs">Kamar Tersedia</button></a>
      <a href="http://pantirapih.id/registro/index.php/Jadwal/dokter"><button class="cta-fitur-rs">Info Dokter</button></a>
      <a href="https://pantirapih.or.id/rspr/ "><button class="cta-fitur-rs">Website Rumah Sakit</button></a>
    </div>
    <div class="footer"><img src="/svg/footer.svg" alt="" /></div>
  </body>
</html>
