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
                    <form action="/update-rs" method="post">
                        @csrf
                        <div class="field">
                            <label>Nama Rumah Sakit</label>
                            <input type="text" name="namaRS" required placeholder="enter hospital name">
                        </div>
                        <div class="field">
                            <label>Alamat Rumah Sakit</label>
                            <input type="text" name="alamatRS" required placeholder="enter hospital address">
                        </div>
                        <div class="field">
                            <label>Nomor Telephone Rumah Sakit</label>
                            <input type="text" name="telponRS" required placeholder="enter hosplital phone">
                        </div>
                        <div class="field">
                            <label>Deskripsi Rumah Sakit</label>
                            <input type="text" name="deskripsiRS" required placeholder="enter hosplital description">
                        </div>
                        <label>Unggah foto profile Rumah Sakit</label>
                        <input type="text" name="fotoRS">
                        <input type="submit" name="submit" value="Update RS" class="form-btn" />
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>