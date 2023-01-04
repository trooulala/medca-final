<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css\adminRS.css') }}">
    <link rel="stylesheet" href="{{ asset('css\style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Document</title>
</head>
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
    <div class="card-info-rs">
        <div class="wrapper">
            <div class="form-detail-rs">
                <header>Info Rumah Sakit</header>
                <div class="rs-details">
                    @foreach ($temps as $temp)
                    <div class="field">
                        <label>Nama Rumah Sakit</label>
                        <p>{{$temp->Name_RS}}</p>
                    </div>
                    <div class="field">
                        <label>Alamat Rumah Sakit</label>
                        <p>{{$temp->Alamat_RS}}</p>
                    </div>
                    <div class="field">
                        <label>Nomor Telephone Rumah Sakit</label>
                        <p>{{$temp->Telpon_RS}}</p>
                    </div>
                    <div class="field-image">
                        <img height="150px" width="120px" src='{{$temp->Foto_RS}}' alt="">
                    </div>
                    @endforeach
                    <div class="wrap-button-edit">
                        <a href="/admin-edit-info-rs"><button class="button-edit">Edit</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <div class="card-info-rs">
        <div class="wrapper">
            <div class="form-detail-rs">
                <header>Info Dokter</header>
                @foreach ($doks as $dok)
                <div class="rs-details">
                    
                    <div class="field">
                        <label>Nama Dokter</label>
                        <p>{{$dok->Name_Dok}}</p>
                    </div>
                    <div class="field">
                        <label>NIP</label>
                        <p>{{$dok->NIP}}</p>
                    </div>
                    <div class="field">
                        <label>Spesialisasi</label>
                        <p>{{$dok->Spesialisasi}}</p>
                    </div>
                    <div class="field">
                        <label>Bekerja di</label>
                        <p>{{$dok->Tempat_RS}}</p>
                    </div>
                    <div class="field">
                        <label>Rating</label>
                        <p>{{$dok->Rating}}</p>
                    </div>
                    <div class="field-image">
                        <img height="200px" width="200px" src='{{$dok->Foto_Dok}}' alt="">
                    </div>
                    
                    <div class="wrap-button-edit">
                        <a href="/admin-delete/{{$dok->Name_Dok}}"><button class="button-delete">Hapus</button></a>
                    </div>
                </div>
                @endforeach
                <div class="wrap-button-edit">
                    <a href="/admin-edit-info-dokter"><button class="button-edit">Tambah</button></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>