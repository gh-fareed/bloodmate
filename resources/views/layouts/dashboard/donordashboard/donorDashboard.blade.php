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
            <a href="/donorDashboard">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a class="nav-link" href="/donorProfile">
              <i class="nc-icon nc-single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
          <li>
            <a class="nav-link" href="/certifyuser">
              <i class="bi bi-patch-check"></i>
              <p>Certified User</p>
            </a>
          </li>
          <li class="">
            <a href="/profilepicture">
              <i class="bi bi-patch-check"></i>
              <p>Profile Picture</p>
            </a>
        </li>
        <li class="">
            <a href="/bloodrequests">
              <i class="bi bi-patch-check"></i>
              <p>Blood Requests</p>
            </a>
        </li>
        <li class="">
            <a href="/donorstory">
              <i class="bi bi-patch-check"></i>
              <p>Add Story</p>
            </a>
        </li>
        <li class="">
            <a href="/donoravailable">
              <i class="bi bi-patch-check"></i>
              <p>Donor Availability</p>
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
            <a class="navbar-brand" href="javascript:;">Donor</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
<!-- data-id="{{--$muser->id--}}" data-recid="{{--Session::get('uid')--}}" -->
            <ul class="navbar-nav">
            <li class="nav-item">
                  <a href="#" class="btn btn-danger btn-lg openModal"  style="color: white;"><i class="bi bi-person" style="color: white;"></i>DONATE NOW</a>

              </li>
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
                      <p class="card-category">Appointment Scheduler</p>
                      <p class="card-title"><p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-refresh"></i>
                  Update Now
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
                      <i class="nc-icon nc-money-coins text-success"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Health Tracker</p>
                      <p class="card-title"><p>
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
                      <p class="card-category">Community Engagement</p>
                      <p class="card-title">23<p>
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
                      
                      @if(session('record'))
                        @if(session('record')>=2)
                        
                          <img src="{{asset('assets/images/rookie.png')}}">
                          @elseif(session('record')>=7)
                          <img src="{{asset('assets/images/silver.jpg')}}">
                          @endelseif
                       @elseif(session('record')>=10)
                          <img src="{{asset('assets/images/gold.jpg')}}">
                          @endelseif
                          @elseif(session('record')>=15)
                          <img src="{{asset('assets/images/plat.jpg')}}">
                          @endelseif
                      
                      @endif
                      @endif
                      
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Rewards and Recognition</p>
                      <p class="card-title"><p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                 <a href="/rank"> <i class="fa fa-refresh"></i>
                  Earn Rewards</a>
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
              </div>
              <div class="card-body ">
                
                  <table class="table table-hover" id="example">
                    <thead>
                      <tr>
                        <th> Date </th>
                        <th> Blood Bank </th>
                        <th> Purpose </th>
                        <th> Time Slot </th>
                       <th> Status </th>
                       <th> Donated </th>
                      </tr>
                    </thead>
                    <tbody>
                    @forelse($dondata as $data)
                    @foreach($bbdata as $bb)
                    @if($data->bbid==$bb->id)
                    <tr>
                      <td> {{$data->date}} </td>
                      <td> {{$bb->fname}} </td>
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
                  <i class="fa fa-circle text-danger"></i> Rejected
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
                
                <hr />
                <div class="card-stats">
                  <i class="fa fa-history"></i> Updated 10 minutes ago
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<div class="modal fade" id="myModal" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="z-index:9999999">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Find Locations</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  <form action="/donationlocations" method="get">
 @csrf
 <input type="hidden" name="did" id="did">
<!-- <input type="hidden" name="recid" id="recid"> -->
  <div class="form-group">
  <lable>City Name:</lable>
<input type="text" class="form-control"  placeholder="Address" name="city">
</div>
                                    <button type="submit" class="btn btn-primary mb-2">Find Location</button>
                                    </form>

        <p id="modalData"></p>
      </div>
      
    </div>
  </div>
</div>
@include('layouts.dashboard.footerDashboard');
<script>
   $(document).ready(function(){
     
  // Event listener for clicking on the link
  $('.openModal').click(function(e){
    e.preventDefault();
       $('#myModal').modal('show');
  });
// Event listener for closing the modal
  $('.close').on('click', function(){
    // Clear modal data when the modal is closed
    $('#myModal').modal('hide');
  });
});
</script>