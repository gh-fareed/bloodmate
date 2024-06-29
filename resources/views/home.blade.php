@include('layouts.websiteheader')

<!-- Blood Drive -->
<div class="container-fluid bg-danger p-2">
    <div class="row">
        <div class="col-md-2"><span style="font-size:20px;color:blue;font-weight: bold;">Blood Drive:</span></div>
        <div class="col-md-10">
            <marquee style="color:white;">
                @forelse($lastRecord as $rec)
                <strong>Title:</strong>&nbsp;&nbsp;{{$rec->blooddrivetitle}} &nbsp;&nbsp;<strong>Date:</strong>&nbsp;&nbsp;{{$rec->blooddrivedate}}
                &nbsp;&nbsp;<strong>Time:</strong>&nbsp;&nbsp;{{$rec->blooddrivetime}}
                &nbsp;&nbsp;<strong>Location:</strong>&nbsp;&nbsp;{{$rec->blooddrivelocation}}
                &nbsp;&nbsp;<strong>Purpose:</strong>&nbsp;&nbsp;{{$rec->blooddrivedescription}}
                &nbsp;&nbsp;<strong>Blood Type:</strong>&nbsp;&nbsp;{{$rec->blooddrivetype}}
                @empty
                @endforelse
            </marquee>
        </div>
    </div>
</div>
    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{asset('assets/tempimg/blood5.jpg')}}" alt="Image" style="height: 600px;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase">Blood Consultancy</h5>
                            <h1 class="display-1 text-white mb-md-4">Safe Life And Donate Blood</h1>
                            @if(Session::has("uid"))
                            
                            @else
                            <a href="/login" class="btn btn-primary py-md-3 px-md-5 me-3 rounded-pill">Login</a>
                            <a href="/register" class="btn btn-secondary py-md-3 px-md-5 rounded-pill">Sign Up</a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{asset('assets/tempimg/blood4.jpg')}}" alt="Image" style="height: 600px;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase">Blood Consultancy</h5>
                            <h1 class="display-1 text-white mb-md-4">Don't Just Take, Give Aswell!</h1>
                            @if(Session::has("uid"))
                           
                            @else
                            <a href="/login" class="btn btn-primary py-md-3 px-md-5 me-3 rounded-pill">Login</a>
                            <a href="/register" class="btn btn-secondary py-md-3 px-md-5 rounded-pill">Sign Up</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


   
    <!-- About Start -->
    <div class="container-fluid bg-secondary p-0">
        <div class="row g-0">
            <div class="col-lg-6 py-6 px-5">
                <h1 class="display-5 mb-4">Welcome To <span class="text-primary">BloodMate</span></h1>
                <h4 class="text-primary mb-4">Your Partner in Saving Lives</h4>
                <p class="mb-4">Blood Mate's main goal is to make sure that anyone who needs blood can get it quickly and reliably. We want to ensure that no one has to wait for a blood transfusion and that hospitals always have the blood they need. Our mission is to make giving blood easier and better for donors, and to make sure there is always enough blood available for hospitals and patients. We work hard to connect donors with those who need blood, making sure every donation helps someone in need efficiently.</p>
                <a href="" class="btn btn-primary py-md-3 px-md-5 rounded-pill">Find Blood</a>
            </div>
            <div class="col-lg-6">
                <div class="h-100 d-flex flex-column justify-content-center bg-primary p-5">
                    <div class="d-flex text-white mb-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px;">
                            <i class="fa fa-user-tie fs-4"></i>
                        </div>
                        <div class="ps-4">
                            <h3>Blood Bank</h3>
                            <p class="mb-0">Blood Mate invites blood banks to become a part of a transformative journey. Our platform is designed to enable blood banks to register, manage their blood inventory effectively, and extend their crucial services to those in dire need. By joining Blood Mate, blood banks gain access to a network that is committed to saving lives through efficient blood distribution.</p>
                        </div>
                    </div>
                    <div class="d-flex text-white mb-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px;">
                            <i class="fa fa-chart-line fs-4"></i>
                        </div>
                        <div class="ps-4">
                            <h3>Blood Donor</h3>
                            <p class="mb-0">Your donation can be the reason someone survives a medical emergency.<br>At Blood Mate, we invite individuals to step forward and become heroes in someone’s life. As a registered blood donor on our platform, you have the power to make a significant difference. Whether it's donating to someone in immediate need or contributing to your nearest blood bank, your donation can save lives.</p>
                        </div>
                    </div>
                    <div class="d-flex text-white">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px;">
                            <i class="fa fa-balance-scale fs-4"></i>
                        </div>
                        <div class="ps-4">
                            <h3>Blood Recipient</h3>
                            <p class="mb-0">At Blood Mate, we understand the criticality and urgency that blood recipients often face. Our platform is specifically designed to ensure that individuals in need of blood can quickly and efficiently obtain it from the nearest blood banks or donors. In emergency situations, our unique auto-call feature can instantly connect recipients to a network of nearby donors and blood banks, maximizing the chances of obtaining blood in time.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    

    <!-- Services Start -->
    <div class="container-fluid pt-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 mb-0">How To Donate</h1>
            <hr class="w-25 mx-auto bg-primary">
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                        <i class="fa fa-user-tie fa-2x"></i>
                    </div>
                    <h3 class="mb-3"><a href="/stepone">What to do if you are new</a></h3>
                    <p class="mb-0">"First-Time Donor Guide: Getting Started with Blood Mate"</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                        <i class="fa fa-chart-pie fa-2x"></i>
                    </div>
                    <h3 class="mb-3"><a href="/steptwo">Prepare/Aftercare</a></h3>
                    <p class="mb-0">"Ensuring a Smooth Donation Process"</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                        <i class="fa fa-chart-line fa-2x"></i>
                    </div>
                    <h3 class="mb-3"><a href="/stepthree">Feeling Faint</a></h3>
                    <p class="mb-0">"Feeling faint can happen to the best of us, but being armed with information could help you avoid it at your next donation. Here's how we keep you safe."</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                        <i class="fa fa-chart-area fa-2x"></i>
                    </div>
                    <h3 class="mb-3"><a href="/stepfour">Donate As a Group</a></h3>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor ipsum amet eos erat ipsum lorem et sit sed stet lorem</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                        <i class="fa fa-balance-scale fa-2x"></i>
                    </div>
                    <h3 class="mb-3"><a href="/stepfive">Risks</a></h3>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor ipsum amet eos erat ipsum lorem et sit sed stet lorem</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                        <i class="fa fa-house-damage fa-2x"></i>
                    </div>
                    <h3 class="mb-3"><a href="/stepsix">Tips To Relax</a></h3>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor ipsum amet eos erat ipsum lorem et sit sed stet lorem</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Features Start -->
    <div class="container-fluid py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 mb-0">Why Choose Us!!!</h1>
            <hr class="w-25 mx-auto bg-primary">
        </div>
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-cubes fs-4 text-white"></i>
                        </div>
                        <h3>Best In Industry</h3>
                        <p class="mb-0">Joining Blood Mate means becoming part of a vast network of donors, recipients, and medical professionals. Our platform fosters a sense of community and collaboration, working towards the common goal of saving lives and supporting those in need.</p>
                    </div><br>
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-percent fs-4 text-white"></i>
                        </div>
                        <h3>Unmatched Reliability:</h3>
                        <p class="mb-0">At Blood Mate, reliability is our cornerstone. We ensure that our platform is consistently available and functional, providing a dependable service for donors, recipients, and blood banks. Our commitment to reliability means you can trust us to be there when it matters most.</p>
                    </div>
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-award fs-4 text-white"></i>
                        </div>
                        <h3>Education and Awareness</h3>
                        <p class="mb-0">We believe in empowering our users through education. Blood Mate provides comprehensive resources about blood donation, including the benefits, processes, and how each donation can save lives. Our goal is to increase awareness and encourage more people to become life-saving donors.

</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-block bg-primary h-100 text-center">
                    <img class="img-fluid" src="img/feature.jpg" alt="">
                    <div class="p-4">
                        <p class="text-white mb-4">Join us at Blood Mate, where we combine reliability, innovation, safety, community, education, and personalized experiences to create a platform that stands out in the field of blood donation. Your choice to join Blood Mate is a step towards saving lives and strengthening communities.</p>
                        <a href="" class="btn btn-light py-md-3 px-md-5 rounded-pill mb-2">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="far fa-smile-beam fs-4 text-white"></i>
                        </div>
                        <h3>Safety Protocols:</h3>
                        <p class="mb-0">Safety is paramount at Blood Mate. We adhere to strict safety standards for every donation and ensure that all blood products are thoroughly screened and handled with the utmost care. Our rigorous safety protocols protect both donors and recipients, ensuring the highest quality of service.</p>
                    </div>
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-user-tie fs-4 text-white"></i>
                        </div>
                        <h3>Community Impact</h3>
                        <p class="mb-0">Blood Mate is more than a platform; it's a community dedicated to making a difference. By connecting donors, recipients, and blood banks, we create a powerful network that has a real impact on lives. Our users are part of a community that values compassion, generosity, and action.</p>
                    </div>
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-headset fs-4 text-white"></i>
                        </div>
                        <h3>24/7 Customer Support</h3>
                        <p class="mb-0">Blood Mate offers 24/7 customer support to ensure constant and reliable assistance for donors, recipients, and blood banks. Our dedicated team is always ready to help with any questions or needs, providing prompt support at any time of day. With Blood Mate, you're always supported throughout your journey.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Start -->


    <!-- Team Start -->
    <div class="container-fluid py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 mb-0">Our Team Members</h1>
            <hr class="w-25 mx-auto bg-primary">
        </div>
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="{{asset('assets/tempimg/team-1.jpg')}}" alt="">
                    <div class="team-text w-100 position-absolute top-50 text-center bg-primary p-4">
                        <h3 class="text-white">Full Name</h3>
                        <p class="text-white text-uppercase mb-0">Designation</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="{{asset('assets/tempimg/team-2.jpg')}}" alt="">
                    <div class="team-text w-100 position-absolute top-50 text-center bg-primary p-4">
                        <h3 class="text-white">Full Name</h3>
                        <p class="text-white text-uppercase mb-0">Designation</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="{{asset('assets/tempimg/team-3.jpg')}}" alt="">
                    <div class="team-text w-100 position-absolute top-50 text-center bg-primary p-4">
                        <h3 class="text-white">Full Name</h3>
                        <p class="text-white text-uppercase mb-0">Designation</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    

    <!-- Blog Start -->
    <div class="container-fluid py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 mb-0">Latest Blog Post</h1>
            <hr class="w-25 mx-auto bg-primary">
        </div>
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="blog-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="{{asset('assets/tempimg/blog-1.jpg')}}" alt="">
                    </div>
                    <div class="bg-secondary d-flex">
                        <div class="flex-shrink-0 d-flex flex-column justify-content-center text-center bg-primary text-white px-4">
                            <span>01</span>
                            <h5 class="text-uppercase m-0">Jan</h5>
                            <span>2024</span>
                        </div>
                        <div class="d-flex flex-column justify-content-center py-3 px-4">
                            <div class="d-flex mb-2">
                                <small class="text-uppercase me-3"><i class="bi bi-person me-2"></i>Abdul Raffay</small>
                                <small class="text-uppercase me-3"><i class="bi bi-bookmarks me-2"></i>Blood Drive</small>
                            </div>
                            <a class="h4" href="">Tips and Tricks for Organizing a Successful Blood Drive</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="{{asset('assets/tempimg/blog-2.jpg')}}" alt="">
                    </div>
                    <div class="bg-secondary d-flex">
                        <div class="flex-shrink-0 d-flex flex-column justify-content-center text-center bg-primary text-white px-4">
                            <span>20</span>
                            <h5 class="text-uppercase m-0">Dec</h5>
                            <span>2023</span>
                        </div>
                        <div class="d-flex flex-column justify-content-center py-3 px-4">
                            <div class="d-flex mb-2">
                                <small class="text-uppercase me-3"><i class="bi bi-person me-2"></i>Abdullah</small>
                                <small class="text-uppercase me-3"><i class="bi bi-bookmarks me-2"></i>Saving Lives Everyday</small>
                            </div>
                            <a class="h4" href="">The Importance of Regular Blood Donations </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="{{asset('assets/tempimg/blog-3.jpg')}}" alt="">
                    </div>
                    <div class="bg-secondary d-flex">
                        <div class="flex-shrink-0 d-flex flex-column justify-content-center text-center bg-primary text-white px-4">
                            <span>10</span>
                            <h5 class="text-uppercase m-0">Dec</h5>
                            <span>2023</span>
                        </div>
                        <div class="d-flex flex-column justify-content-center py-3 px-4">
                            <div class="d-flex mb-2">
                                <small class="text-uppercase me-3"><i class="bi bi-person me-2"></i>Ahmed Abbasi</small>
                                <small class="text-uppercase me-3"><i class="bi bi-bookmarks me-2"></i>Blood Donation and Public Health</small>
                            </div>
                            <a class="h4" href="">The Broader Impact on Communities</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->
    
@include('layouts.websitefooter')
</body>

</html>