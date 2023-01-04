<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css\userDokter.css') }}">
    <link rel="stylesheet" href="{{ asset('css\style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>

</style>
<body>
    <header>
        <div class="nav-container">
            <nav>
                <div class="logo"></div>
                @if(Session::has('account'))
                    <a href = "/logout" class="cta"><button class="login">Log Out</button></a>
                @else
                    <a href = "/login" class="cta"><button class="login">Log In</button></a>
                @endif
            </nav>
        </div>
    </header>
    
    <div class="wrapper-content">
        <div class="wrap-recap-dokter">
                    <div class="profile-dokter">
                        <!-- <img src="{{session('account')->Foto_Dok}}" alt="" width="150px" height="150px"> -->
                        <img src="{{session('account')->Foto_Dok}}" class="rounded float-end" alt="Avatar Dokter" width="150px" height="150px">
                        <div class="box-txt-wrap-bio">
                            <h1>{{session('account')->Name_Dok}}</h1>
                        </div>
                    </div>
        </div>
        <div class="wrap-list-pasien">
            <header>Pengajuan Chat Dokter</header>
            <div class="list-pasien">
                @foreach ($keluhan_pasien as $antrean)
                @if ($antrean->Email_Dokter == session('account')->Email_Dok)
                    <div class="card-pasien-1">
                        <div class="wrap-pasien">
                            <div class="box-txt">
                                <img src="/svg/pasien-1.svg" alt="">
                                <p>Keluhan:</p>
                                <p>{{$antrean->Keluhan}}</p>
                            </div>
                        <div class="wrap-h4">
                            <h4>{{$antrean->Nama_Pasien}}</h4>
                        </div>
                        <div class="wrap-btn">
                            <form action="/dokter-delete-antrean/{{$antrean->Nama_Pasien}}" method="get">
                                <button class="terima-btn" type="submit">Terima</button>
                            </form> 
                            
                            <button class="tolak-btn">Tolak</button>
                        </div>
                    </div>
                @endif
                @endforeach
                </div>
            </div>
            
        </div>
        
    </div>

</body>
</html>