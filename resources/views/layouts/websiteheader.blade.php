<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BloodMate</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <!-- Libraries Stylesheet -->
    <link href="{{asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('assets/css/spa.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/spafaq.css')}}" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js">
    </script>
</head>

<div>
    <!-- Topbar Start -->
    <div class="container-fluid bg-secondary ps-5 pe-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body py-2 pe-3 border-end" href="/faqbasic"><small>FAQs</small></a>
                    <a class="text-body py-2 px-3 border-end" href=""><small>Support</small></a>
                    <a class="text-body py-2 px-3 border-end" href=""><small>Privacy</small></a>
                    <a class="text-body py-2 px-3 border-end" href=""><small>Policy</small></a>
                    <a class="text-body py-2 ps-3" href=""><small>Career</small></a>
                </div>
            </div>
<div class="col-md-2 mb-2 mb-lg-0 pt-2 bg-primary text-white text-center" style="font-weight: bold;border-radius: 25px;">Hello! : 
@if(Session::has('username'))
{{Session::get('username')}} ({{Session::get('who')}})
@else
Guest 
@endif
</div>
            <div class="col-md-4 text-center text-lg-end">
                <div class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape px-5">
                    <div class="me-3 pe-3 border-end py-2">
                        <p class="m-0"><i class="fa fa-envelope-open me-2"></i>info@example.com</p>
                    </div>
                    <div class="py-2">
                        <p class="m-0"><i class="fa fa-phone-alt me-2"></i>+012 345 6789</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="/" class="navbar-brand p-0">
            <h1 class="m-0 text-uppercase text-primary"><img src="{{asset('assets/images/bloodmate_prev_ui.png')}}" style="height:80px;width:80px;"/></i>BloodMate</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 me-n3">
                <a href="/" class="nav-item nav-link">Home</a>
                
                @if(Session::has("isrecipient"))
                <a href="/stories" class="nav-item nav-link">Stories</a>
                <a href="/findblood" class="nav-item nav-link">Find Blood</a>
                <a href="/becomedonor" class="nav-item nav-link">Become Donor</a>
                <a href="/rec_requests" class="nav-item nav-link">Requests</a>
                <a href="/rec_history" class="nav-item nav-link">History</a>
                @elseif(Session::has("isdonor"))
                <a href="/becomerecepient" class="nav-item nav-link">Become Recepient</a>
                <a href="/donorDashboard" class="nav-item nav-link">Dashboard</a>
                <a href="/donor_history" class="nav-item nav-link">History</a>

                @elseif(Session::has("isadmin"))
                <a href="/adminDashboard" class="nav-item nav-link">Dashboard</a>
                @elseif(Session::has("isbb"))
                <a href="/bbDashboard" class="nav-item nav-link">Dashboard</a>
                    @endif
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Info</a>
                    <div class="dropdown-menu m-0">
                        <a href="/stepone"class="dropdown-item">What to do if you are new</a>
                        <a href="/steptwo" class="dropdown-item">Prepare/Aftercare</a>
                        <a href="/stepthree" class="dropdown-item">Feeling Faint</a>
                        <a href="/steptfour" class="dropdown-item">Donate As a Group</a>
                        <a href="/stepfive" class="dropdown-item">Risks</a>
                        <a href="/stepsix" class="dropdown-item">Tips To Relax</a>
                    </div>
                </div>
                @if(Session::has('uid'))
                <a href="/logout" class="nav-item nav-link">Logout</a>
                @else
                <a href="/login" class="nav-item nav-link">Login</a>
                @endif
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
