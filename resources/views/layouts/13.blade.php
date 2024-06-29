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
        p{
            color: #DE6262;
            font-size: 20px;
            font-weight: 7 00;
        }
        .txtarea{
            border-radius: 5px;
            width: 100%;
            height: 150px;
            max-width: 100%;
            
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
          <form action="/quizsubmitted" method="post" id="quizForm">
            @csrf
            
            <div class="termsandconditions">
                <p style="margin-bottom: 0px">Terms and Conditions</p>
                <textarea class="txtarea">description...</textarea>
            </div>
        
            <!-- Add more questions as needed -->
<a href="/quizsubmitted" class="btn btn-danger" style="width: 200px; margin-bottom:5px; margin-left: 70px;">Finish</a>
            <!-- <input type="submit" value="Finish" style="margin-top: 20px;"> -->
    </form>
          
          <div class="copy-text"><i class="fa fa-plus"></i> BloodeMate
          </div>
        </div>
        <div class="col-md-4"></div>
            
      </div>
    </div>
  </div>
   <!--  <h1>Medical Eligibility</h1>

    <form action="/showquiz" method="post" id="quizForm">
        @csrf

        <input type="hidden" name="q" value="2">    
        <div class="question">
            <p>1. Had a Coronavirus vaccination?</p>
            <ul class="options">
                <li><label><input type="radio" name="ans" value="Yes"> Yes</label></li>
                <li><label><input type="radio" name="ans" value="No"> No</label></li>
        </div>
            </ul>

        <input type="submit" value="Next" style="margin-top: 20px;">
    </form>
 -->

</body>
</html>
