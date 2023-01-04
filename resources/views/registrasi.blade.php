<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="{{ asset('css\style.css') }}" />
    <!-- <link rel="stylesheet" href="{{ asset('css\register-style.css') }}" /> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registrasi</title>
  </head>
  
  <body>
    <div class="background">
      <div class="form-container">
        <div class="logo"></div>
        <h3>Register Now</h3>
        <form action="/registrasi" method="post">
          @csrf
          <h4>Email</h4>
          <input type="email" id="email" name="email" required placeholder="enter your email">
          <h5>Password</h5>
          <input type="password" name="password" required placeholder="enter your password" />
          <h5>Name</h5>
          <input type="text" name="nama" require placeholder="enter your name">
          <h5>Username</h5>
          <input type="text" name="username" require placeholder="enter your username">
          
          <!-- <h5>Alamat</h5> -->
          <!-- <input type="text" name="alamat"require placeholder="enter your address"> -->
          <input type="submit" name="submit" value="Register" class="form-btn" />
        </form>
        
        <p>Sudah punya akun? <a href="/login"> login </a></p>
      </div>
      
    </div>
  </body>
</html>

