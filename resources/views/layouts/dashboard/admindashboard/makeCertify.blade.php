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
          <li>
            <a href="/adminDashboard">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
        <li class="active">
            <a href="/makeCertify">
              <i class="bi bi-patch-check"></i>
              <p>Certified User</p>
            </a>
        </li>
        <li class="active">
            <a href="/adminblooddrives">
              <i class="bi bi-patch-check"></i>
              <p>Blood Drives</p>
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
            <a class="navbar-brand" href="javascript:;">Admin</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">

            <ul class="navbar-nav">

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
      <div class="content">
        <div class="row">
          <div class="col-md-10 container mt-5">
          <table id="example" class="display">
    <thead>
        <tr>
            <th>User Name</th>
            <th>Status</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($myusers as $muser)
        <tr>
            <td>{{$muser->username}}</td>
            <td>{{$muser->status}}</td>
            <!-- <td>{{$muser->image}}</td> -->
            <td class="column">
            @if($muser->image)
                <img src="{{asset('certificate')}}/{{$muser->image}}" alt="{{$muser->image}}" style="width:50px; height:50px;" onclick="myFunction(event);">
                {{$muser->image}}
            @endif
            </td>
        @if($muser->verification=='Verified')
                    <td colspan="2"><a href="/dodisapproved/{{$muser->id}}" class="btn btn-danger">Disapprove</a></td>
        @else
                    <td><a href="/doapproved/{{$muser->id}}" class="btn btn-primary">Approve</a></td>
        @endif

        </tr>
    @endforeach
            <!-- The Modal -->
            <div id="myModal" class="modal">
                <span class="closebtn" onclick="closeModal(event)">&times;</span>
                <img class="modal-content" id="expandedImg">
            </div>
    </tbody>
</table>

        </div>
      </div>

@include('layouts.dashboard.footerDashboard');
