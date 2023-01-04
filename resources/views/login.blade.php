<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="{{ asset('css\style.css') }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
  </head>
  <body>
    <div class="background">
      <div class="form-container">
        <div class="logo"></div>
        <h3>Login Now</h3>
        @if(Session::has('alert'))
          <h4>
            ERORR
          </h4>
        @endif
        <form action="/login" method="get">
          <h4>Email</h4>
          <input type="text" name="email" required placeholder="enter your email" />
          <h4>Password</h4>
          <input type="password" name="password" required placeholder="enter your password" />
          <input type="submit" name="submit" value="Login" class="form-btn" />
        </form>
        
        <p>Belum punya akun? <a href="/registrasi"> register </a></p>

        <div class="ornament_1"></div>
        <div class="ornament_2"></div>
      </div>
    </div>
  </body>
</html>
