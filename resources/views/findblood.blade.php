@include('layouts.websiteheader')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<body>

<div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">Find Blood</h1>

            </div>
        </div>
    </div>
    <form action="/findblood" method="post">
        @csrf
        <div class="container d-flex mt-5 pl-0">
            <div class="input-group mb-3 col-2 pl-0">
                <div class="input-group-prepend" style="height: 38px;">
                    <label class="input-group-text" for="inputGroupSelect01">Identity</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name="identity">
                    <option selected>Choose...</option>
                    <option value="BloodBank">Blood Bank</option>
                    <option value="Donor">Blood Donor</option>
                </select>
            </div>
            <div class="input-group mb-3 col-2">
                <div class="input-group-prepend" style="height: 38px;">
                    <label class="input-group-text" for="inputGroupSelect01">City</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name="city">
                    <option>Choose...</option>
                    <option>Lahore</option>
                    <option>Islamabad</option>
                    <option>Karachi</option>
                </select>
            </div>
            <div class="input-group mb-3 col-2">
                <div class="input-group-prepend" style="height: 38px;">
                    <label class="input-group-text" for="inputGroupSelect01">Blood Type</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name="bloodgroup">
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
            <div class="input-group mb-3 col-2 pr-0" style="width:120px;">

                    <button type="submit" class="btn btn-primary" style="height: 38px;" data-mdb-ripple-init>
                        <i class="fas fa-search"></i> Search
                    </button>
            </div>
        </form>
        <div class="input-group mb-3 col-4">
            <a href="/findblood" class="btn btn-primary">
                                View All
            </a>
        </div>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 pt-2"><strong>Time Passed after Broadcast :{{$dhour}}:{{$dminutes}}::{{$dseconds}}</strong></div>
            <div class="col-md-1"><button type="button" class="btn btn-primary" id="brefresh">Refresh</button>

             
            </div>
            <div class="col-md-1">
                <a href="{{url('/reset-timer')}}" class="btn btn-success " style="color: white;">Reset</a>
            </div>
            <div class="col-md-7" align="right">
                
                    @if(Session::has("breq"))
                    <span class="alert alert-danger mr-1 p-1">{{Session::get('breq')}}</span>
                    @endif
                
                <a href="#" class="btn btn-success openModal1 p-1" data-recid="{{Session::get('uid')}}" style="color: white;"><i class="bi bi-person" style="color: white;"></i>Broadcast Request</a>
            </div>
        </div>
    </div>

    <!-- Your Blade content goes here -->
    <div class="container" style="margin-top: 20px; margin-bottom: 20px;padding: 10px; border: 1px solid lightgrey; border-radius: 5px;">
    <table id="example" class="table" style="width: 100%; border-radius:5px;">
    	<thead>

        </thead>
        <tbody>
            @foreach ($myusers as $muser)
            @if($muser->status=='Admin')
            @else
            @if($muser->verification=="Verified")
            <tr class="card mb-1" style="background-color: #e6e6e6;border-radius: 5px;">
                @else
                <tr class="card mb-1" style="background-color: #fee6e4;border-radius: 5px">
                    @endif

                    <td class="d-flex">
                    @if($muser->status=="Donor" || $muser->status="BloodBank")
                        <div class="col-4">

                            <b>{{$muser->fname}} {{$muser->lname}} ({{$muser->username}})</b><br/><small>Identity: {{$muser->status}}</small><br /><small>City: {{$muser->city}}</small><br />
                            <small>Blood Group: {{$muser->blood}}</small><br/>

                             @if($muser->repeat_no != 0)
                <small>Rating points: {{ round($muser->rating / $muser->repeat_no)  }}</small><br />
                @else
                <small>Rating points: {{ $muser->rating}}</small><br />
                @endif
                            @if($muser->verification=="Verified")
                            <small style="font-style: italic; color:teal;"><b>{{$muser->verification}}<i class="bi bi-check2-circle"></i></b></small>
                            @else
                                <small style="font-style: italic; color:red;"><b>{{$muser->verification}}<i class="bi bi-x"></i></b></small>

                            @endif

                        </div>
                        <div class="col-8" align="right">
                    <div class="row">
                        <div class="col-12">
                            
                            <a href="#" class="btn btn-success openModal" data-id="{{$muser->id}}" data-recid="{{Session::get('uid')}}" style="color: white;"><i class="bi bi-person" style="color: white;"></i>Blood Request</a>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12" align="height">
                            

                                




                                <!-- <a href="/requestblood/{{$muser->id}}" class="btn btn-primary mt-2" style="color: white;">Request Blood</a>-->
                                </div> 
                            </div>
                            </div>
                          </div>
                            @else
                          @endif
                    </td>

                </tr>
            @endif
            @endforeach
        </tbody>
    </table>
</div>
@include('layouts.websitefooter')
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Blood Request</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<!-- Tabs -->
<ul class="nav nav-tabs" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active icon-tab-0" id="icon-tab-0" data-bs-toggle="tab" href="#icon-tabpanel-0" role="tab" aria-controls="icon-tabpanel-0" aria-selected="true"><i class="fa-solid fa-clipboard-list"></i> Schedule</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link icon-tab-1" id="icon-tab-1" data-bs-toggle="tab" href="#icon-tabpanel-1" role="tab" aria-controls="icon-tabpanel-1" aria-selected="false"><i class="fa-solid fa-hospital"></i> Emergency</a>
  </li>
  
</ul>
<div class="tab-content pt-1" id="tab-content">
<!-- Schedule Tab -->
  <div class="tab-pane active" id="icon-tabpanel-0" role="tabpanel" aria-labelledby="icon-tab-0">

<form action="/requestblood" method="post">
@csrf
<input type="hidden" name="did" id="did">
<input type="hidden" name="recid" id="recid">
<input type="hidden" name="type" value="Schedule">
<div class="form-group mx-sm-3 mb-2">
<label> Address: </label>
<input type="text" class="form-control"  placeholder="Address" name="address" required>
</div>
<div class="form-group mx-sm-3 mb-2">
<label>Date </label>
<input type="date" class="form-control" name="bdate"  id="bdate" required>
</div>
<div class="form-group mx-sm-3 mb-2">
<label>List of Hospitals </label>
<select name="hospitals" class="form-control">
    <option>Shoukat Khanum</option>
    <option>Sheikh Zayed</option>
    <option>Adil Rasheed</option>
    <option>Cavelary Ground</option>
</select>
</div>
<div class="mb-3 mx-sm-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Start:</label>
    <div class="col-sm-4">
      <input type="time"  class="form-control"  name="start"  id="start" required>
    </div>
    <label for="staticEmail" class="col-sm-2 col-form-label">End:</label>
    <div class="col-sm-4">
      <input type="time"  class="form-control"  name="end"  id="end" required>
    </div>
  </div>

<button type="submit" class="btn btn-primary mb-2">Request Blood</button>
</form>



  </div>
<!-- End of Schedule Tab -->
<!-- Emergency Tab -->
  <div class="tab-pane" id="icon-tabpanel-1" role="tabpanel" aria-labelledby="icon-tab-1">
  <form action="/requestblood" method="post">
@csrf
<input type="hidden" name="did" id="dide">
<input type="hidden" name="recid" id="recide">
<input type="hidden" name="type" value="Emergency">
<div class="form-group mx-sm-3 mb-2">
<label> Address: </label>
<input type="text" class="form-control"  placeholder="Address" name="address" required>
</div>
<!-- <div class="form-group mx-sm-3 mb-2">
<label>Date </label>
<input type="date" class="form-control" name="bdate"  id="bdate">
</div> -->
<div class="form-group mx-sm-3 mb-2">
<label>List of Hospitals </label>
<select name="hospitals" class="form-control">
    <option>Shoukat Khanum</option>
    <option>Sheikh Zayed</option>
    <option>Adil Rasheed</option>
    <option>Cavelary Ground</option>
</select>
</div>
<!-- <div class="mb-3 mx-sm-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Start:</label>
    <div class="col-sm-4">
      <input type="time"  class="form-control"  name="start"  id="start">
    </div>
    <label for="staticEmail" class="col-sm-2 col-form-label">End:</label>
    <div class="col-sm-4">
      <input type="time"  class="form-control"  name="end"  id="end">
    </div>
  </div>
 -->
<button type="submit" class="btn btn-primary mb-2">Request Blood</button>
</form>
    
  </div>
  <!-- end of Emergency Tab -->
  
</div>
<!-- End of Tabs -->


        <p id="modalData"></p>
      </div>
      
    </div>
  </div>
</div>

<!-- confirm modal -->
<div class="modal fade" id="myModal1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Are You Sure ?</h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <div class="modal-footer">
        <button type="button" id="btnyes" class="btn btn-success" data-bs-dismiss="modal">Yes</button>
        <button type="button" class="btn btn-success" id="btnno">No</button>
      </div>
      
    </div>
  </div>
</div>
<script>
    


    $(document).ready(function(){
    var id;
    var dbid;
        //   $("#btype").change(function()
        //   {
        //     if($(this).val()=="Schedule")
        //     {
        //        $("#bdate").removeAttr("disabled");
        //        $("#start").removeAttr("disabled");
        //        $("#end").removeAttr("disabled");

        //     }
        //     else
        //     {
        //         $("#bdate").attr("disabled","disabled");
        //         $("#start").attr("disabled","disabled");
        //         $("#end").attr("disabled","disabled");

        //     }
        // })

  // Event listener for clicking on the link
  $('.openModal').click(function(e){
    e.preventDefault();
    id = $(this).data('id');
    recid = $(this).data('recid');
    // var name = $(this).data('name');
    
    // Set data in the modal
    $("#did").val(id);
    $("#recid").val(recid);
    // $('#modalData').text('ID: ' + id + ' recid:' + recid);
    
    // Show the modal
    $('#myModal').modal('show');
  });

$(".icon-tab-1").click(function(){
    // alert("Emergency" + id + ":" + recid);

$("#dide").val(id);
$("#recide").val(recid);
});

  $('.openModal1').click(function(e){
    e.preventDefault();
    
     recid = $(this).data('recid');
    // var name = $(this).data('name');
    
    // Set data in the modal
    
    // $("#recid").val(recid);
    // $('#modalData').text('ID: ' + id + ' recid:' + recid);
    
    // Show the modal
    $('#myModal1').modal('show');
  });

$("#btnyes").click(function()
{
    window.location="/emergencyrequest";
    $('#myModal1').modal('hide');
})
$("#btnno").click(function()
{
    $('#myModal1').modal('hide');
})







// Event listener for closing the modal
  $('.close').on('click', function () {
    // Clear modal data when the modal is closed
    $('#myModal').modal('hide');
  });
$('#brefresh').click(function(){
    location.reload();
})
});
</script>





</body>
</html>
