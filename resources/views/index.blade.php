<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css\style.css') }}">
    <script src="{{ asset('js\script.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Homepage medCa</title>
</head>
<script>
    function updateClock() {
        var currentTime = new Date();
        var currentHours = currentTime.getHours();
        var currentMinutes = currentTime.getMinutes();
        var currentSeconds = currentTime.getSeconds();
    

        currentMinutes = (currentMinutes < 10 ? "0" : "") + currentMinutes;
        currentSeconds = (currentSeconds < 10 ? "0" : "") + currentSeconds;
    

        var timeOfDay = (currentHours < 12) ? "AM" : "PM";
    

        currentHours = (currentHours > 12) ? currentHours - 12 : currentHours;
    

        currentHours = (currentHours == 0) ? 12 : currentHours;
    

        var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + timeOfDay;
    

        document.getElementById("clock").innerHTML = currentTimeString;
    }
    
    // Call the function repeatedly at a 1-second interval
    setInterval(updateClock, 1000);
</script>
<style>
    body{
        overflow-x: hidden;
    }

    .footer{
        position: relative;
        left: 0px;
        top: 0;
    }
    button.submit-button{
        margin-left: 10px;
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
    <div class="jumbotron">
        <div class="logo"></div>
        <h1 class="display-4">Solusi yang tepat untuk kesehatan anda</h1>
        <p>Chat dokter, kunjungi rumah sakit dan update informasi seputar kesehatan, semua bisa di medCa!</p>
    </div>

    <div id="OverlayReminder" class="hide">
        <span class="closebtn" onclick="closeReminder()"title="Close Reminder"> &#215</span>
        <div class="wrap">
            <div class="Title"><h2> Reminder </h2></div>
            <div class="container-list-reminder">
                <ul class="list-reminder">
                    <!-- Enter a list of reminder -->
                </ul>
            </div>
            <div class="cta-addReminder">
                <button id="newReminder" onclick="openBottom()">Tambah Reminder</button>
                <button class="submit-button"title="submit"onclick="closeReminder()">Submit</button>
            </div>
        </div>
        <div id="addBottom" class="hide-addReminder">
            <div class="wrap">
                <form id="newReminder">
                    <h3>Judul</h3>
                    <input id="judulRemind"type="text" placeholder="Masukkan Judul"onblur="getVal()">
                    <h3>Tanggal Dan waktu</h3>
                    <input type="datetime-local" id="reminderDateTime" name="reminderDateTime">
                    <h3>Ulangi</h3>
                    <select name="repeatQuestion" id="repeatQuestion">
                        <option selected disabled>Pilih Opsi</option>
                        <option value="setiap_hari">Setiap Hari</option>
                        <option value="senen">Senin</option>
                        <option value="selasa">Selasa</option>
                        <option value="rabu">Rabu</option>
                        <option value="kamis">Kamis</option>
                        <option value="jumat">Jumat</Jption>
                        <option value="sabtu">Sabtu</option>
                        <option value="minggu">Minggu</option>
                      </select>
                      <div class="button-submit">
                        <span class="submitButton"  onclick="submit()"title="Submit"> Submit</span>
                      </div>  
                    </div>      
                </form>
            </div>
            <script src="main.js" defer></script>
        </div>
    </div>
    <div class="jumbotron-fitur">
        <button class="cta-fitur-reminder" onclick="openReminder()"></button>
        <a href="/buat janji"><button class="cta-fitur-buatjanji"></button></a>
        <a href="/rumah-sakit"><button class="cta-fitur-rumahSakit"></button></a>
    </div>
    <div class="container-clock"><div id="clock" class="clock" onload="updateClock()"></div></div>
    <div class="artikel">
        <h3>Baca Artikel Menarik tentang Kesehatan </h3>
        
        <!-- <div class="artikel-picture">  -->
        <div class="row row-cols-4">
            @foreach ($articles as $artikel)
            @if ($loop->index < 3)
            <div class="card mb-3">
                <a href="/isi/{{$artikel->Judul}}/{{$artikel->Kategori}}"><img class="card-img-top" src="{{$artikel->Cover_Article}}" alt="Card image cap"></a>
                <div class="card-body">
                    <h5 class="card-title">{{$artikel->Judul}}</h5>
                    <p class="card-text">{{$artikel->Kategori}}</p>
                    <p class="card-text"><small class="text-muted">Last updated {{$artikel->updated_at}}</small></p>
                </div>
            </div>
            @endif
            @endforeach
        </div>
       
    </div>
    <div class="footer"><img src="/svg/footer.svg" alt=""></div>
</body>
</html>