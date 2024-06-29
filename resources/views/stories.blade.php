@include('layouts.websiteheader')

    <!-- Page Header Start -->
    <div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="display-4 text-white">Stories from Donors and Blood Banks </h2>
               
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <div style="width: 50%; margin: 50px auto 50px auto; margin-left: 450px;">
        <div class="form-group">
            <h2 name="q" style="margin-left: 20px;font-size: 50px;
                font-style: italic; color: #DE6262">Stories</h2>


        </div>               
    </div>
    <div class="container">
     <div class="row">
     	@forelse($stories as $story)
     	<div class="col-md-6">
     	<h3 class="alert alert-danger">{{$story->storytitle}}</h3>
     	<table width="100%">
     		<tr>
     			<td> {{$story->date}}</td>
     			<td> {{$story->fname}}</td>
     			<td> {{$story->status}}</td>
     		</tr>
     	</table>
     	<p class="mt-3">{{$story->story}}</p>
     	</div>
     	@empty
     	@endforelse
     </div>   
    </div>


@include('layouts.websitefooter')
</body>

</html>