<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Member Login</title>
  <!-- Bootstrap CSS link -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/login.css')}}">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
  <section class="login-block" style="height: 100%;">
    <div class="container">
      <div class="row" style="height: 600px;">
        <div class="col-md-4 login-sec">
          <h2 class="text-center">Login Now</h2>
          @if(session()->exists("message"))
          <p class="alert alert-success text-center"> {{session()->get("message")}}</p>
          @endif
          <form action="/dologin" method="post" class="login-form">
            @csrf
            <div class="form-group">
              <label for="username" class="text-uppercase">Username</label>
              <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
              <label for="password" class="text-uppercase">Password</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
  
            <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
              <small>Remember Me</small>
            </label>
            <button type="submit" class="btn btn-login float-right">Login</button>
            </div>
            <p>Do you have an  account?
                <a href="/register" style="color: #DE6262;">Register</a>
            </p>
  
          </form>
          <div class="copy-text"><i class="fa fa-plus"></i> BloodeMate
          </div>
        </div>
        <div class="col-md-8 banner-sec pr-0">
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="{{asset('assets/images/blood3.jpg')}}" alt="First slide" style="width: 100%; height: 600px;">
            </div>
        </div>     
      </div>
    </div>
  </div>
</section>
  
  <!-- Bootstrap JS and Popper.js scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.1/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>