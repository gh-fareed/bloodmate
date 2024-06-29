@include('layouts.dashboard.headerDashboard')
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
      <div class="content">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-globe text-warning"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Blood Group<br/>A+</p>
                      <p class="card-title">{{$d1[0]->d1}}<p>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
          <!-- A- -->
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-globe text-warning"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Blood Group<br/>A-</p>
                      @if($d2[0]->d2==null)
                      <p class="card-title">0<p>
                        @else
                      <p class="card-title">{{$d2[0]->d2}}<p>
                      @endif

                      
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
<!-- B+ -->
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-globe text-warning"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Blood Group<br/>B+</p>
                      @if($d3[0]->d3==null)
                      <p class="card-title">0<p>
                        @else
                      <p class="card-title">{{$d3[0]->d3}}<p>
                      @endif
                    
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
<div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-globe text-warning"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Blood Group<br/>B-</p>
                      @if($d4[0]->d4==null)
                      <p class="card-title">0<p>
                        @else
                      <p class="card-title">{{$d4[0]->d4}}<p>
                      @endif

                      
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>

<div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-globe text-warning"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Blood Group<br/>O+</p>
                      @if($d5[0]->d5==null)
                      <p class="card-title">0<p>
                        @else
                      <p class="card-title">{{$d5[0]->d5}}<p>
                      @endif

                      
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
<div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-globe text-warning"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Blood Group<br/>O-</p>
                      @if($d6[0]->d6==null)
                      <p class="card-title">0<p>
                        @else
                      <p class="card-title">{{$d6[0]->d6}}<p>
                      @endif

                      
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>

<div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-globe text-warning"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Blood Group<br/>AB+</p>
                      @if($d7[0]->d7==null)
                      <p class="card-title">0<p>
                        @else
                      <p class="card-title">{{$d7[0]->d7}}<p>
                      @endif

                      
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
          </div>
<div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-money-coins text-success"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Health Tracker</p>
                      <p class="card-title">0<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-calendar-o"></i>
                  Last day
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-vector text-danger"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category"> 
                    <p class="card-category">Community Engagement</p>
                      <p class="card-title">0</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-clock-o"></i>
                  In the last hour
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-favourite-28 text-primary"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Rewards and Recognition</p>
                      <p class="card-title">0<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-refresh"></i>
                  Update now
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Donation Summary</h5>
                <p class="card-category">24 Hours performance</p>
              </div>
              <div class="card-body ">
                <!-- <canvas id=chartHours width="400" height="100"></canvas> -->
                  <table class="table table-hover" id="example">
                 <!--  @php
                 print_r($dondata);

// Display all session data

                  @endphp -->
                    <thead>
                      <tr>
                        <th> Date </th>
                        <th> Donor </th>
                        <th> Purpose </th>
                        <th> Time Slot </th>
                       <th> Status </th>
                       <th> Donated </th>
                      </tr>
                    </thead>
                    <tbody>
                    @forelse($dondata as $data)
                    @foreach($bbdata as $bb)
                    
                    @if($bb->id ==session('uid') )
                    <tr>
                      <td> {{$data->date}} </td>
                      <td> {{$data->fname ." " . $data->lname}} </td>
                      <td> {{$data->purpose}} </td>
                      <td> {{$data->timeslot}} </td>
                      <td> {{$data->rstatus}} </td>
                      @if($data->rstatus=='Accepted')
                      <td> <a href="/donordonated/{{$data->did}}" class="btn btn-primary">Donated</a></td>
                      @elseif(($data->rstatus=='Donated'))
                      <td><p class="alert alert-primary p-2">Donated</p> </td>
                      @else
                      <td> </td>
                      @endif
                    </tr>
                    @endif
                    @endforeach
                    @empty
                    <tr> 
                      <td colspan="5" class="text-center"> Empty </td>
                      
                    </tr>
                    @endforelse
                  </tbody>
                  </table>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-history"></i> Updated 3 minutes ago
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Blood Requests</h5>
              </div>
              <div class="card-body ">
                <canvas id="chartEmail"></canvas>
              </div>
              <div class="card-footer ">
                <div class="legend">
                  <i class="fa fa-circle text-primary"></i> Opened
                  <i class="fa fa-circle text-gray"></i> Unopened
                </div>
                <hr>
                <div class="stats">
                  <i class="fa fa-calendar"></i> Total blood requests
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-title">Wellness Tips</h5>
                <p class="card-category"></p>
              </div>
              <div class="card-body">
                <canvas id="speedChart" width="400" height="100"></canvas>
              </div>
              <div class="card-footer">
                <div class="chart-legend">
                  <i class="fa fa-circle text-info"></i> 
                  <i class="fa fa-circle text-warning"></i> 
                </div>
                <hr />
                <div class="card-stats">
                  <i class="fa fa-check"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@include('layouts.dashboard.footerDashboard');
