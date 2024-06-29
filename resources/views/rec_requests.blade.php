@include('layouts.websiteheader')

    <!-- Page Header Start -->
    <div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="display-4 text-white">Requests Status</h2>
               
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    
    <div class="container-fluid mt-5">
        <div class="row mb-3">
            <div class="col-md-12" align="right">
                <a href="/deleterequests/{{Session::get('uid')}}" class="btn btn-primary"> Delete All Requests pending for 48 Hours </a>
            </div>
        </div>
    </div>
        @if(Session::has("message"))
        <h3 aling="center">{{Session::get("message")}}</h3>
        @endif
    <div class="container-fluid">
     <div class="row">
         <div class="col-md-6 bg-success p-1" align="center"><font size="5" color="white">Accepted</font></div>
         <div class="col-md-6 bg-danger p-1" align="center"><font size="5" color="white">In-Process</font></div>
     </div>
     <div class="row">
         <div class="col-md-3 bg-info  p-1" align="center"><font color="white"><strong>Emerency</strong></font></div>
         <div class="col-md-3 bg-warning  p-1" align="center"><font color="white"><strong>Schedule</strong></font></div>
         <div class="col-md-3 bg-dark  p-1" align="center"><font color="white"><strong>Emerency</strong></font></div>
         <div class="col-md-3 bg-info  p-1" align="center"><font color="white"><strong>Schedule</strong></font></div>
     </div>
</div>
<div class="container-fluid">
     <div class="row">
            <!-- Accepted Emergency -->
        <div class="col-md-3">
        @forelse($requests as $req)
        @forelse($users as $user)
        @if($user->id==$req->dbid)
        @if($req->rstatus=="Accepted" && $req->rectype=="Emergency")
        <div class="row">
            <div class="col-12" style="border:2px solid black;">
                <p class="alert"><strong>Requested to:{{$user->fname}} {{$user->lname}}</strong><br/>
            <font color='green'>Request Type:{{$req->rectype}}</font><br/>
            <font color='green'>Requested Date:{{$req->reqdate}}</font><br/>
            <font color='green'>Request Status:{{$req->rstatus}}</font><br/>
            <font color='green'>Location:{{$req->hospitals}}</font><br/>
            <font color='green'>Time Slot:{{$req->start}} to {{$req->end}} </font><br/>

            <font color='green'>
                @if($user->rating!=0)
                Rating Points:{{round($user->rating / $user->repeat_no)}}</font><br/>
                @else
                 Raiting Points: 0
                @endif
                

        </p>
       @if($req->done==1)
        <p class="alert alert-warning text-black text-center"> Received Blood </p>
        @else
        <a href="/received/{{$req->brid}}" class="btn btn-warning btn-block">Received</a>
        @endif
       
        <div style="float:left">
        <a href="/userprofiledisplay/{{$user->id}}" class="btn btn-success btn-sm" style="color: white;"><i class="bi bi-person" style="color: white;"></i>View Profile</a>
       </div>
       <div div style="float:right">
      <form class="form-inline" method="post" action="/rating">
      @csrf
      <input type="hidden" value="{{$user->id}}" name="uid">
      <div class="form-group mx-sm-3 mb-2">
        <label for="rate">Rate:&nbsp;&nbsp;</label>
        <select name="rate" class="form-control">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>

       </div>
         <button type="submit" class="btn btn-primary mb-2">Rate</button>
         </form>
        </div>


            </div>
        </div>
        @endif
        @endif
    @empty
    @endforelse
    @empty
    @endforelse
        </div>

            <!-- Accepted Schedule -->
        <div class="col-md-3">
        @forelse($requests as $req)
        @forelse($users as $user)
        @if($user->id==$req->dbid)
        @if($req->rstatus=="Accepted" && $req->rectype=="Schedule")
        <div class="row">
            <div class="col-12" style="border:2px solid black;">
                <p class="alert"><strong>Requested to:{{$user->fname}} {{$user->lname}}</strong><br/>
            <font color='green'>Request Type:{{$req->rectype}}</font><br/>
            <font color='green'>Requested Date:{{$req->reqdate}}</font><br/>
            <font color='green'>Request Status:{{$req->rstatus}}</font><br/>
            <font color='green'>Location:{{$req->hospitals}}</font><br/>
            <font color='green'>Time Slot:{{$req->start}} to {{$req->end}} </font><br/>
            <font color='green'>
                @if($user->repeat_no != 0)
                Rating points: {{ round($user->rating / $user->repeat_no)  }}
                @else
                Rating points: {{ $user->rating}}
                @endif
                
</font><br/>

        </p>
        @if($req->done==1)
        <p class="alert alert-warning text-black text-center"> Received Blood </p>
        @else
        <a href="/received/{{$req->brid}}" class="btn btn-warning btn-block mb-4">Received</a>
        @endif
        <div style="float:left">
        <a href="/userprofiledisplay/{{$user->id}}" class="btn btn-success btn-sm" style="color: white;"><i class="bi bi-person" style="color: white;"></i>View Profile</a>
       </div>
       <div div style="float:right">
      <form class="form-inline" method="post" action="/rating">
      @csrf
      <input type="hidden" value="{{$user->id}}" name="uid">
      <div class="form-group mx-sm-3 mb-2">
        <label for="rate">Rate:&nbsp;&nbsp;</label>
        <select name="rate" class="form-control">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>

       </div>
         <button type="submit" class="btn btn-primary mb-2">Rate</button>
         </form>
        </div>


            </div>
        </div>
        @endif
        @endif
    @empty
    @endforelse
    @empty
    @endforelse
        </div>


<!-- Requested Emergency -->
        <div class="col-md-3">
        @forelse($requests as $req)
        @forelse($users as $user)
        @if($user->id==$req->dbid)
        @if($req->rstatus=="Requested" && $req->rectype=="Emergency")
        <div class="row">
            <div class="col-12" style="border:2px solid black;">
                <p class="alert"><strong>Requested to:{{$user->fname}} {{$user->lname}}</strong><br/>
            <font color='green'>Request Type:{{$req->rectype}}</font><br/>
            <font color='green'>Requested Date:{{$req->reqdate}}</font><br/>
            <font color='green'>Request Status:{{$req->rstatus}}</font><br/>
            <font color='green'>Location:{{$req->hospitals}}</font><br/>
            <font color='green'>Time Slot:{{$req->start}} to {{$req->end}} </font><br/>
            <font color='green'>Rating Points:{{$user->rating}}</font><br/>
<!-- Cancel -->
<a href="#" class="btn btn-danger openModal1" data-recid="{{$req->brid}}" style="color: white;"><i class="bi bi-person" style="color: white;"></i>Cancel</a>
<!-- <a href="/deleterequest/{{$req->brid}}" class="btn btn-primary"> Cancel </a> -->
</p>
        
        </div>
        </div>
        @endif
        @endif
    @empty
    @endforelse
    @empty
    @endforelse
        </div>
     
<!-- Requested Schedule -->
        <div class="col-md-3">
        @forelse($requests as $req)
        @forelse($users as $user)
        @if($user->id==$req->dbid)
        @if($req->rstatus=="Requested" && $req->rectype=="Schedule")
        <div class="row">
            <div class="col-12" style="border:2px solid black;">
                <p class="alert"><strong>Requested to:{{$user->fname}} {{$user->lname}}</strong><br/>
            <font color='green'>Request Type:{{$req->rectype}}</font><br/>
            <font color='green'>Requested Date:{{$req->reqdate}}</font><br/>
            <font color='green'>Request Status:{{$req->rstatus}}</font><br/>
            <font color='green'>Location:{{$req->hospitals}}</font><br/>
            <font color='green'>Time Slot:{{$req->start}} to {{$req->end}} </font><br/>
            <font color='green'>Rating Points:{{$user->rating}}</font><br/>
<!-- Cancel -->
<a href="#" class="btn btn-danger openModal1" data-recid="{{$req->brid}}" style="color: white;"><i class="bi bi-person" style="color: white;"></i>Cancel</a>
        </p>
        
        </div>
        </div>
        @endif
        @endif
    @empty
    <p> <strong> No Data Found </strong></p>
    @endforelse

    @empty
   
    @endforelse
        </div>
     
            


     </div><!-- End of Row -->

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
@include('layouts.websitefooter')
<script>
    $(document).ready(function(){
    $('.openModal1').click(function(e){
    e.preventDefault();
     recid = $(this).data('recid');
   
    // Show the modal
    $('#myModal1').modal('show');
  });

$("#btnyes").click(function()
{
    window.location="/deleterequest/" + recid;
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
});
</script>
</body>

</html>