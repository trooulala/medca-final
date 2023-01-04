<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <link rel="stylesheet" href="{{ asset('css\adminRS.css') }}" />
    <link rel="stylesheet" href="{{ asset('css\style.css') }}" />
    <script src="main.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Article</title>
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
                <header>Admin Artikel</header>
                <div class="rs-details">
                    @foreach ($article as $temp)
                    <div class="field">
                        <label>Judul Artikel</label>
                        <p>{{$temp->Judul}}</p>
                    </div>
                    <div class="field">
                        <label>Kategori Artikel</label>
                        <p>{{$temp->Kategori}}</p>
                    </div>
                    <div class="field">
                        <label>Deskripsi Artikel</label>
                        <p>{{$temp->Paragraf}}</p>
                    </div>
                    <div class="field-image">
                        <img height="150px" width="120px" src='{{$temp->Cover_Article}}' alt="">
                    </div>
                    <div class="wrap-button-edit">
                        <a href="/admin-delete-article/{{$temp->Judul}}"><button class="button-delete">Delete</button></a>
                    </div>
                    @endforeach
                    <div class="tmbh-artikel">
                        <div class="bttn-tambah">
                            <a href="/admin-add-article"><button class="buttn-tambah">Tambah Artikel</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    
</body>
</html>