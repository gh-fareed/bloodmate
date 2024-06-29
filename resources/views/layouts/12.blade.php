<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Member Eligibility</title>
  <!-- Bootstrap CSS link -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/login.css')}}">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>
<body>

    <section class="login-block">
    <div class="container">
      <div class="row" style="height: 525px;">
        <div class="col-md-4"></div>
        <div class="col-md-4 login-sec">
          <h2 class="text-center">Eligibility Quiz</h2>
          
            <div class="form-group">
              <p name="q" style="margin-left: 20px;font-size: 25px;
           font-style: italic; color: #DE6262">12. Are you taking any regular medication?</p>
              <a href="/faq12" style="color: #DE6262; margin-left: 140px;">More Info</a>
            </div>
            <div class="justify-content-center flex-column" style="display: flex; margin-left: 70px;">
              <a href="/showquiz/12/1" class="btn btn-danger" style="width: 200px; margin-bottom:5px;">Yes</a> <a href="/showquiz/12/0" class="btn btn-danger" 
              style="width: 200px; margin-bottom:5px;">No</a>
                
            </div>
          
          <div class="copy-text"><i class="fa fa-plus"></i> BloodeMate
          </div>
        </div>
        <div class="col-md-4">
          <p class="float-right" style="font-size: 18px;
          font-weight: bold; font-style: italic; color: #DE6262">12/12</p>
        </div>
            
      </div>
    </div>
  </div>

</body>
</html>
