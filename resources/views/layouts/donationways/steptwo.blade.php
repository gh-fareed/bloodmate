@include('layouts.websiteheader')

    <!-- Page Header Start -->
    <div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">Ensuring a Smooth Donation Process</h1>
               
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <div style="width: 50%; margin: 150px auto 50px auto; margin-left: 450px;">
        <div class="form-group">
            <h2 name="q" style="margin-left: 20px;font-size: 50px;
                font-style: italic; color: #DE6262">Q. What's the process?</h2>

        </div>               
    </div>

<div class="section">
	<div class="section-holder container">
		<h3 style="color: #f3525a">Before you donate</h3>
	
	</div><br>
    <div class="container d-flex">
        <div class="body-holder-1 ">
            <div class="d-flex">
                <img src="{{asset('assets/images/card.png')}}" style="height:50px; width:50px;"/>
                <div class="heading" style="font-weight: bold; font-size: 16px; margin-top: 10px;"> Get your paperwork together</div>
            </div><br>
                
            <p style="word-wrap: break-word">To ensure a smooth registration process at Blood Mate, please make sure to bring valid identification with you. This can include a driver’s license, passport, or your digital donor card through our Blood Mate app. Feel free to mix and match, as long as you can present any three of the following: </p>
        
            <ul>
                <li>Full name</li>
                <li>Date of birth</li>
                <li>Home addressx</li>
                <li>Signature</li>
                <li>Photo</li>	
            </ul>
            <p>Your cooperation in providing these details will greatly assist us in maintaining accurate and secure donor records. Thank you for your commitment to donating blood and helping save lives through Blood Mate. </p>
            <p>Don’t worry if you’re feeling a bit nervous – it’s completely normal.   </p>

        </div>
        <div class="body-holder-2">
            <div class="d-flex">
                <img src="{{asset('assets/images/hydrated.jpeg')}}" style="height:50px; width:50px;"/>
                <div class="heading" style="font-weight: bold; font-size: 16px; margin-top: 10px;"> Hydrate and eat</div>	
            </div><br>
            <p>Taking good care of your well-being involves prioritizing essential habits, and one of the most crucial practices is ensuring an adequate intake of fluids and nourishing meals. It's imperative to stay well-hydrated and maintain a balanced diet to promote overall health. By making conscious choices to drink plenty of fluids and consume nutritious foods, you contribute significantly to safeguarding and enhancing your personal well-being. </p>
            <div class="d-flex">
            <img src="{{asset('assets/images/time.jpeg')}}" style="height:50px; width:50px;"/>
                <div class="heading" style="font-weight: bold; font-size: 16px; margin-top: 10px;"> The day before</div>
            </div><br>
            <ul>
                <li>FDrink plenty of fluids: Aim for 10 glasses for men or 8 glasses for women.</li>
                <li>Prioritize a good night's sleep for overall well-being.</li>
                <li>Avoid high-fat or fried foods: Excessive fat intake can interfere with plasma collection and laboratory testing.</li>
                
            </ul>
            
            <div class="d-flex">
            <img src="{{asset('assets/images/time.jpeg')}}" style="height:50px; width:50px;"/>
                <div class="heading" style="font-weight: bold; font-size: 16px; margin-top: 10px;"> 3hrs before</div>
            </div><br>
            <ul>
                <li>Consume 750mL of fluids, equivalent to three good-sized glasses.</li>
                <li>Include something savory in your meal.</li>
                <li>Steer clear of strenuous exercise to ensure optimal well-being.</li>
               
            </ul>
            
        </div>
    </div>

	
</div>
<br>
<br>
<br>
<div class="section">
	<div class="section-holder container">
		<h3 style="color: #f3525a">After you donate</h3>
	
	</div><br>
    <div class="container d-flex">
        <div class="body-holder-1 col-4">
            <div class="d-flex">
                <img src="{{asset('assets/images/time.jpeg')}}" style="height:50px; width:50px;"/>
                <div class="heading" style="font-weight: bold; font-size: 16px; margin-top: 10px;"> Right after</div>
            </div><br>
                
            <p style="word-wrap: break-word">Resist the temptation to rush to the refreshments area immediately. Take approximately 5 minutes to rest in the donor chair. </p>
        
            
            <p>Once you feel ready, proceed to the refreshments area for a leisurely 15-20 minute break. Indulge in your favorite snack, sip on a refreshing drink, perhaps even make yourself a cup of tea, and simply enjoy the moment. </p>
            <p>Before leaving, ensure you grab a juice or water to stay well-hydrated. </p>

        </div>
        <div class="body-holder-2 col-4">
            <div class="d-flex">
                <img src="{{asset('assets/images/time.jpeg')}}" style="height:50px; width:50px;"/>
                <div class="heading" style="font-weight: bold; font-size: 16px; margin-top: 10px;"> In the next 8 hours</div>	
            </div><br>
            <p>Consume an additional three glasses of fluids within the first three hours after donation to stay adequately hydrated. </p>
            <p>Give your body the recovery time it needs by taking a seat whenever possible. Avoid prolonged periods of standing to support a smoother recuperation. </p>
            <p>Be cautious not to overheat. Minimize exposure to hot showers, prolonged sun exposure, and hot drinks. Take it easy to avoid unnecessary rushing around. </p>
             <p>Steer clear of alcoholic drinks to ensure a healthy recovery process. </p>
              <p>Sustain your energy levels by eating regular meals. Your body will benefit from the essential nutrients to support recovery. </p>
        </div>
        <div class="body-holder-2 col-4">
            <div class="d-flex">
                <img src="{{asset('assets/images/time.jpeg')}}" style="height:50px; width:50px;"/>
                <div class="heading" style="font-weight: bold; font-size: 16px; margin-top: 10px;"> For at least 12 hours</div>	
            </div><br>
            <p>Refrain from engaging in strenuous exercises such as cycling, jogging, or gym workouts, as well as hazardous activities. This includes tasks or jobs that may impact public safety. It's essential to review your employment or safety requirements. If uncertain, discuss this during your interview. </p>
             <p>While many donors feel fantastic after contributing, if you ever feel unwell at any point, don't hesitate to reach out. Your health and comfort are of utmost importance. Please contact us if you experience any concerns or discomfort. </p>
         </div>
            
    
    

	
</div>

@include('layouts.websitefooter')
</body>

</html>