@include('layouts.websiteheader')
<body>

<div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">Blood Banks</h1>

            </div>
        </div>
    </div>
    
        

    </div>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12" align="right">
                
                    @if(Session::has("breq"))
                    <span class="alert alert-success mr-3">{{Session::get('breq')}}</span>
                    @endif
                
                <!-- <a href="/emergencyrequest" class="btn btn-danger">Emergency Request</a> -->
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
            @if($muser->verification=="Verified")
            <tr class="card mb-1" style="background-color: #e6e6e6;border-radius: 5px;">
                @else
                <tr class="card mb-1" style="background-color: #fee6e4;border-radius: 5px">
                    @endif

                    <td class="d-flex">
                    @if($muser->status=="Donor" || $muser->status="BloodBank")
                        <div class="col-4">

                            <b>{{$muser->fname}} {{$muser->lname}}</b><br/><small>Identity: {{$muser->status}}</small><br /><small>City: {{$muser->city}}</small><br />
                            <small>Blood Group: {{$muser->blood}}</small><br/>
                            @if($muser->verification=="Verified")
                            <small style="font-style: italic; color:teal;"><b>{{$muser->verification}}<i class="bi bi-check2-circle"></i></b></small>
                            @else
                                <small style="font-style: italic; color:red;"><b>{{$muser->verification}}<i class="bi bi-x"></i></b></small>

                            @endif
                        </div>
                        <div class="col-8" align="right">
                    <div class="row">
                        <div class="col-12">
                            
                            <a href="#" class="btn btn-success openModal" data-id="{{$muser->id}}" data-recid="{{Session::get('uid')}}" style="color: white;"><i class="bi bi-person" style="color: white;"></i>Appointment Request</a>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12" align="height">
                        </div> 
                            </div>
                            </div>
                          </div>
                            @else
                          @endif
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@include('layouts.websitefooter')
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Appointment Request</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                                    <form action="/dodonationlocations" method="post">
                                        @csrf
                                    <input type="hidden" name="did" id="did">
                                    <input type="hidden" name="recid" id="recid">
                                    
                                    <div class="form-group mx-sm-3 mb-2">
                                    <label>Purpose </label>
                                    <select name="purpose" class="form-control">
                                        <option>Blood</option>
                                        <option>Plazma</option>
                                        <option>Platelets</option>

                                    </select>
                                    </div>

                                    <div class="form-group mx-sm-3 mb-2">
                                    <label>Date </label>
                                    <input type="date" class="form-control" name="bdate"  id="bdate" required>
                                    </div>
                                    <div class="form-group mx-sm-3 mb-2">
                                        <label>Time Slot:</label>
                                        <select class="form-control" name="timeslot">
                                            <option>Morning (8AM - 01PM)</option>
                                            <option>Afternoon (01PM - 08PM)</option>
                                            <option> Evening (08PM - 08AM)</option>
                                        </select>
                                    </div> 
                                    <button type="submit" class="btn btn-primary mb-2">Request Appointment</button>
                                    </form>

        <p id="modalData"></p>
      </div>
      
    </div>
  </div>
</div>
<script>
    


    $(document).ready(function(){
          

  // Event listener for clicking on the link
  $('.openModal').click(function(e){
    e.preventDefault();
    var id = $(this).data('id');
    var recid = $(this).data('recid');
    // var name = $(this).data('name');
    
    // Set data in the modal
    $("#did").val(id);
    $("#recid").val(recid);
    // $('#modalData').text('ID: ' + id + ' recid:' + recid);
    
    // Show the modal
    $('#myModal').modal('show');
  });
// Event listener for closing the modal
  $('.close').on('click', function () {
    // Clear modal data when the modal is closed
    $('#myModal').modal('hide');
  });
});
</script>





</body>
</html>
