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

    <style>
        
        h3{
            color: #DE6262;
            }
        img{
        	height: 100px;
        	width: 100px;
        	margin-top: 20px;
        	margin-left: 120px;
        }    
    </style>
</head>
<body>

    <section class="login-block">
    <div class="container">
      <div class="row" style="height: 525px;">
        <div class="col-md-4"></div>
        <div class="col-md-4 login-sec">
          <h2 class="text-center">Eligibility Quiz</h2>
          
            <h3>SORRY! You are ineligible to register as Donor...</h3>

            <img src="{{asset('assets/images/cross.png')}}">
          
          <div class="copy-text"><i class="fa fa-plus"></i> BloodeMate
          </div>
        </div>
        <div class="col-md-4"></div>
            
      </div>
    </div>
  </div>

</body>
</html>
