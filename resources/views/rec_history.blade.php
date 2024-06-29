@include('layouts.websiteheader')

    <!-- Page Header Start -->
    <div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="display-4 text-white">Blood Receiving History </h2>
               
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    
    <div class="container mb-5">
     <div class="row">
        <div class="col-md-12">
            <h2 style="margin-left: 20px;font-size: 50px;
                font-style: italic; color: #DE6262;text-align: center;">History</h2>

        <table class="table table-hover">
        <tr>
            <th>Request Type</th>
            <th>Address </th>
            <th> Request Date </th>
            <th> Donor </th>
        </tr>
     	@forelse($history as $h)
     		<tr>
     			<td> {{$h->rectype}}</td>
     			<td> {{$h->address}}</td>
     			<td> {{$h->reqdate}}</td>
                <td> {{$h->fname}} {{$h->lname}}</td>
     		</tr>
     	
     	
     	
     	@empty
     	@endforelse
        </table>
    </div>
     </div>   
    </div>


@include('layouts.websitefooter')
</body>

</html>