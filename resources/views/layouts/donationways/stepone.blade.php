@include('layouts.websiteheader')

    <!-- Page Header Start -->
    <div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="display-4 text-white">Eager to become a lifesaver?<br>
By donating blood, you step into the role of a life-saving hero for someone in urgent need. </h2>
               
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <div style="width: 50%; margin: 150px auto 50px auto; margin-left: 450px;">
        <div class="form-group">
            <h2 name="q" style="margin-left: 20px;font-size: 50px;
                font-style: italic; color: #DE6262">Q. What can I give?</h2>

        </div>               
    </div>
    <div class="container">
        <p>"Select from options like plasma, whole blood, or platelets. Unsure about your blood type? No problem! Just schedule the type of donation you feel most comfortable with. At your appointment, we'll determine your blood type and discuss the most beneficial donation you can make in the future."
        </p>
        <div class="inner-content d-flex">
            <div class="section col-4">
                <img src="{{asset('assets/images/plasma.png')}}" style="height: 150px; width: 100px;
                margin-bottom: 50px;"/>
                <div class="heading">
                    <h6>Plasma</h6>
                </div>
                <p>"More than half of your blood consists of a vital liquid known as plasma, and donating it can make a significant difference. Plasma donations can be used in 18 different life-saving treatments, ranging from aiding in severe burn recovery to helping those battling cancer.</p>
                <p><strong>How much time does it require?</strong></p>
                <p>The donation process takes about 45 minutes, with the entire appointment lasting up to an hour and a half."</p>
            </div>
            <div class="section col-4">
                <img src="{{asset('assets/images/plasma.png')}}" style="height: 150px; width: 100px;
                margin-bottom: 50px;"/>
                <div class="heading">
                    <h6>Blood</h6>
                </div>
                <p>Pressed for time? Opt for a 'blood' donation and you have the potential to save up to three lives in a quick visit! With the right scheduling, you could even donate during your lunch break and enjoy some complimentary snacks from us.</p>
                <p><strong>How much time does it require?</strong></p>
                <p>The donation itself takes just 10 minutes, with the entire visit taking around 60 minutes.</p>
            </div>
            <div class="section col-4">
                <img src="{{asset('assets/images/plasma.png')}}" style="height: 150px; width: 100px;
                margin-bottom: 50px;"/>
                <div class="heading">
                    <h6>Platelets</h6>
                </div>
                <p>The small 'plates' in your blood, known as platelets, play a crucial role in helping patients with serious illnesses. If you are male and have donated plasma in the last year, consider donating platelets.


                    <br>
                    <br></p>
                <p><strong>How much time does it require?</strong></p>
                <p>It takes about 60 minutes for the platelet donation, with the entire appointment lasting approximately 2 hours.</p>
            </div>
        </div>
        
    </div>


@include('layouts.websitefooter')
</body>

</html>