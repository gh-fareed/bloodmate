@include('layouts.websiteheader')

    <!-- Page Header Start -->
    <div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">Frequently Asked Question</h1>
               
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
        <p>Choose between plasma, blood or platelets. If you dont know your blood type, book the donation that best suits you. We can tell you your blood type and talk about the best donation for you to give next time.
        </p>
        <div class="inner-content d-flex">
            <div class="section col-4">
                <img src="{{asset('assets/images/plasma.png')}}" style="height: 150px; width: 100px;
                margin-bottom: 50px;"/>
                <div class="heading">
                    <h6>Plasma</h6>
                </div>
                <p>Over half of your blood is a liquid called plasma – and donating it is a game-changer. Your plasma can help in 18 life-giving ways, from treating serious burns to cancer.</p>
                <p><strong>How long d   oes it take?</strong></p>
                <p>45 minutes to donate, up to 1.5 hours for the whole appointment.</p>
            </div>
            <div class="section col-4">
                <img src="{{asset('assets/images/plasma.png')}}" style="height: 150px; width: 100px;
                margin-bottom: 50px;"/>
                <div class="heading">
                    <h6>Plasma</h6>
                </div>
                <p>Over half of your blood is a liquid called plasma – and donating it is a game-changer. Your plasma can help in 18 life-giving ways, from treating serious burns to cancer.</p>
                <p><strong>How long d   oes it take?</strong></p>
                <p>45 minutes to donate, up to 1.5 hours for the whole appointment.</p>
            </div>
            <div class="section col-4">
                <img src="{{asset('assets/images/plasma.png')}}" style="height: 150px; width: 100px;
                margin-bottom: 50px;"/>
                <div class="heading">
                    <h6>Plasma</h6>
                </div>
                <p>Over half of your blood is a liquid called plasma – and donating it is a game-changer. Your plasma can help in 18 life-giving ways, from treating serious burns to cancer.</p>
                <p><strong>How long d   oes it take?</strong></p>
                <p>45 minutes to donate, up to 1.5 hours for the whole appointment.</p>
            </div>
        </div>
        
    </div>


@include('layouts.websitefooter')
</body>

</html>