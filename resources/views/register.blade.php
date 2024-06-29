<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Member Registration</title>
  <!-- Bootstrap CSS link -->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/login.css')}}">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
  <section class="login-block" style="position: relative; height: 100%;">
    <div class="container">
      <div class="row d-flex justify-content-between">
     
        <div class="col-md-7 banner-sec ml-0 px-0">
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="{{asset('assets/images/akram-huseyn-fKC9eWRnlGY-unsplash.jpg')}}" alt="First slide" style="width: 100%; max-height: 680px;">
            </div>
          </div>       
        </div>
        <div class="col-md-5 login-sec ml-0">
          <h2 class="text-center">Register Now</h2>
          @if ($errors->any())
          @foreach ($errors->all() as $error)
            <p class="">{{$error}}</p>
          @endforeach
          @endif
          <form action="/doregister" method="post" class="login-form" style="margin-left: 17px;">
            @csrf
            <div class="form-container d-flex">
              <div class="form-items">
               <div class="form-group">
    <label for="fname" class="text-uppercase">First Name</label>
    <input type="text" class="form-control" id="fname" name="fname" required>
</div>
<div class="form-group">
    <label for="lname" class="text-uppercase">Last Name</label>
    <input type="text" class="form-control" id="lname" name="lname" required>
</div>

                <div class="form-group">
                  <label for="email" class="text-uppercase">Email</label>
                  <input type="text" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                  <label for="city" class="text-uppercase">City</label>
                  <input type="text" class="form-control" id="city" name="city" required>
                </div>
                <div class="form-group">
                <label for="bloodgroup" class="bloodgroup">Blood Type</label>
                <select name="bloodgroup" id="bloodgroup">
                  <option selected>Choose...</option>
                  <option value="A+">A+</option>
                  <option value="A-">A-</option>
                  <option value="B+">B+</option>
                  <option value="B-">B-</option>
                  <option value="O+">O+</option>
                  <option value="O-">O-</option>
                  <option value="AB+">AB+</option>
                  <option value="AB-">AB-</option>
                </select>
                </div>
                
              </div>
              <div class="form-items ml-2">
                <div class="form-group">
                  <label for="username" class="text-uppercase">Username</label>
                  <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="form-group">
                  <label for="password" class="text-uppercase">Password</label>
                  <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="form-group">
                  <label for="rpassword" class="text-uppercase">Repeat Password</label>
                  <input type="password" class="form-control" id="rpassword" name="rpassword" required>
                </div>
                <div class="form-group">
                  
<label for="phno" class="text-uppercase">Phone No.</label>
<input type="text" class="form-control" id="phno" name="phno" required>
                </div>  
              </div>
            </div>
            <div class="status">
                <ul class="options d-flex pl-0" style="list-style: none;">
                    <li><label><input type="radio" name="status" value="Donor"> Donor</label></li>
                    <li><label><input type="radio" name="status" value="Recepient" style="margin-left: 10px; margin-top: 4px;"> Recipient</label></li>
                </ul>
            </div>
  
            <div class="form-check mr-2">
            <button type="submit" class="btn btn-login float-right">Register</button>
            </div>

            <p style="margin-bottom: 0px;">Already have an account?
                <a href="/login" style="color: #DE6262;">Login</a>
            </p>
            <p>To register your Blood Bank Click Here: 
                <a href="/bbregister" style="color: #DE6262;">Blood Bank</a>
            </p>
  
          </form>
          <div class="copy-text"><i class="fa fa-plus"></i> BloodeMate
          </div>
        </div>
</section>
  <!-- <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="registration-container">
          <h2>Blood Bank Registration</h2>
          @if ($errors->any())
          @foreach ($errors->all() as $error)
            <p class="">{{$error}}</p>
          @endforeach
          @endif  
          <form action="/doregister" method="post">
            @csrf
            <div class="form-container">
              <div class="form-items">
                <div class="form-group">
                  <label for="fname" class="d-flex flex-start">First Name</label>
                  <input type="text" class="form-control" id="fname" name="fname" required>
                </div>
                <div class="form-group">
                  <label for="lname" class="d-flex flex-start">Last Name</label>
                  <input type="text" class="form-control" id="lname" name="lname" required>
                </div>
                <div class="form-group">
                  <label for="email" class="d-flex flex-start">Email</label>
                  <input type="text" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                  <label for="city" class="d-flex flex-start">City</label>
                  <input type="text" class="form-control" id="city" name="city" required>
                </div>
                
              </div>
              <div class="form-items ml-2">
                <div class="form-group">
                  <label for="username" class="d-flex flex-start">Username</label>
                  <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="form-group">
                  <label for="password" class="d-flex flex-start">Password</label>
                  <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="form-group">
                  <label for="rpassword" class="d-flex flex-start">Repeat Password</label>
                  <input type="password" class="form-control" id="rpassword" name="rpassword" required>
                </div>
                <div class="form-group">
                  <label for="phno" class="d-flex flex-start">Phone No.</label>
                  <input type="text" class="form-control" id="phno" name="phno" required>
                </div>  
              </div>
            </div>
            <div class="status">
                <ul class="options d-flex pl-0">
                    <li><label><input type="radio" name="status" value="Donor"> Donor</label></li>
                    <li><label><input type="radio" name="status" value="Recipient"> Recipient</label></li>
                </ul>
              </div>
              
            
            <button type="submit" class="btn btn-primary registration-btn">Sign Up</button>

            <p>Already have an account?
                <a href="/">Login</a>
            </p>
          </form>
        </div>
      </div>
    </div>
  </div> -->

  <!-- Bootstrap JS and Popper.js scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.1/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="{{asset('assets/js/main.js')}}"></script>
  <script>
$(document).ready(function() {
       $('#phno').on('keypress', function(event) {
        var allowedChars = /[0-9]/;
        var keyCode = event.which || event.keyCode;
        var char = String.fromCharCode(keyCode);

        // Allow only numeric characters and control keys (backspace, delete, arrows)
        if (!allowedChars.test(char) && keyCode !== 8 && keyCode !== 46 && (keyCode < 37 || keyCode > 40)) {
            event.preventDefault();
        }

        // Check if the length of the input value is 11 characters
        if ($(this).val().length >= 11 && keyCode !== 8 && keyCode !== 46) {
            event.preventDefault();
        }
    });
});
</script>

</body>
</html>