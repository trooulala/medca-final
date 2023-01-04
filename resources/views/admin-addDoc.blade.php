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
    </nav>
    
    <div class="card-info-rs">
        <div class="wrapper">
            <div class="form-detail-rs">
                <form action="/add-dokter" method="post">
                @csrf
                <header>Tambah Dokter</header>
                <div class="rs-details">
                    <div class="error-txt">This is an error message!</div>
                    <div class="field">
                        <label>Nama Dokter</label>
                        <input type="text" name="namaDok">
                    </div>
                    <div class="field">
                        <label>NIP</label>
                        <input type="text" name="nip">
                    </div>
                    <div class="field">
                        <label>Spesialisasi</label>
                        <input type="text" name="spesialisasi">
                    </div>
                    <div class="field">
                        <label>Bekerja di</label>
                        <input type="text" name="tempat_rs">
                    </div>
                    <div class="field">
                        <label>Rating</label>
                        <input type="text" name="rating">
                    </div>
                    <div class="field">
                        <label>Email Dokter</label>
                        <input type="text" name="email_dok">
                    </div>
                    <div class="field">
                        <label>Password Dokter</label>
                        <input type="text" name="pass_dok">
                    </div>
                    <div class="field">
                        <label>Unggah foto profile Dokter</label>
                        <input type="text" name="foto_dok">
                    </div>
                    <input type="submit" name="submit" value="Update Dokter">
                </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>