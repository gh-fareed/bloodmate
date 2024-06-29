@include('layouts.dashboard.headerDashboard');
<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="{{asset('dashboardAssets/img/logo-small.png')}}">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
                @if(Session::has('dashboardName'))
            <!-- dd(Session::get('dashboardName')); -->
            {{Session()->get('dashboardName')}}
            @else
            echo 'Admin'
            @endif
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active">
            <a href="/bbDashboard">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a class="nav-link" href="/bbprofile">
              <i class="nc-icon nc-single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
          <li>
            <a class="nav-link" href="/certifybb">
              <i class="bi bi-patch-check"></i>
              <p>Certified User</p>
            </a>
          </li>
          <li class="">
            <a href="/bbprofilepicture">
              <i class="bi bi-patch-check"></i>
              <p>Profile Picture</p>
            </a>
        </li>
        <li class="">
            <a href="/bbbloodrequests">
              <i class="bi bi-patch-check"></i>
              <p>Blood Requests</p>
            </a>
        </li>
        <li class="">
            <a href="/bbappointmentrequests">
              <i class="bi bi-patch-check"></i>
              <p>Appointment Requests</p>
            </a>
        </li>
        <li class="">
            <a href="/bbstories">
              <i class="bi bi-patch-check"></i>
              <p>Add Story</p>
            </a>
        </li>
        <li class="">
            <a href="/addinventory">
              <i class="bi bi-patch-check"></i>
              <p>Add Inventory</p>
            </a>
        </li>
        <li class="">
            <a href="/inventory">
              <i class="bi bi-patch-check"></i>
              <p>Show Inventory</p>
            </a>
        </li>
        <li class="">
            <a href="/blooddrive">
              <i class="bi bi-patch-check"></i>
              <p>Blood Drive</p>
            </a>
        </li>
        </ul>
    </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">Blood Bank</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">

            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="btn btn-secondary" href="/">
                    Home
                </a>
              </li>
              <li class="nav-item">
                <a class="btn btn-secondary" href="/logout">
                    Logout
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
  
      <!-- End Navbar -->
      <!-- Your Blade content goes here -->
    <div class="container" style="margin-top: 120px; margin-bottom: 20px;padding: 10px; border: 1px solid lightgrey; border-radius: 5px;">
    	<div class="row">
    		<div class="col-md-5">
          @if(Session::has("message"))
          <p class="alert alert-success">{{Session::get("message")}}
          @endif
   <form action="/saveblooddrive" method="post">
   	@csrf
   	
   	<div class="form-group">
   		<label> <strong>Blood Drive Title:</strong> </label>
   		<input type="text" name="blooddrivetitle" class="form-control form-control-lg">
   	</div>
   	<div class="form-group">
   		<label> <strong>Blood Drive Date:</strong> </label>
   		<input type="date" name="blooddrivedate" class="form-control">
   	</div>
   	<div class="form-group">
   		<label> <strong>Blood Drive Time:</strong> </label>
   		<input type="time" name="blooddrivetime" class="form-control">
   	</div>
   	<div class="form-group">
   		<label> <strong>Blood Drive Location:</strong> </label>
   		<input type="text" name="blooddrivelocation" class="form-control form-control-lg">
   	</div>
   	<div class="form-group">
   		<label> <strong>Description:</strong> </label>
   		<textarea  name="Blooddrivedescription" rows="10" cols="55"></textarea>
   	</div>
   	<div class="form-group">
   		<label> <strong>Type of Blood:</strong> </label>
   		<input type="text" name="blooddrivetype" class="form-control form-control-lg">
   	</div>
   	<button class="btn btn-danger btn-lg" type="submit">Add Blood Drive</button>
   </form>
</div>
</div>
</div>
      
@include('layouts.dashboard.footerDashboard');
