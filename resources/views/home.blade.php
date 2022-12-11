@extends('layouts.app')

@section('content')

<header>
  <!-- Navbar -->
  <p> <img src="/uploads/others/24-hours.png" alt="logo" style="width:19px;height:15px;"> &nbsp; Emergency Call : +60-123212999 &nbsp; &nbsp; &nbsp; <img src="/uploads/others/telephone.png" alt="logo" style="width:14px;height:15px;">&nbsp; Hotlink : +60-4252999 &nbsp; &nbsp; &nbsp;</p>
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
        data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false"
        aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarExample01">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <a href="{{url('user/home')}}"><img src="/uploads/others/logo.png" alt="logo" style="width:100px;height:45px;"></a>
      </ul>
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        
          <li class="nav-item active">
            <a class="nav-link" href="{{url('user/patientbookapp')}}"> Book appointment &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('user/doctorsdetails')}}"> Doctors on-call  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('user/myappointment')}}"> My appointment &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('user/myreport')}}"> My reports &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
  <!-- Navbar -->

  <!-- Hero -->
<div class="p-5 text-center bg-image rounded-3" style="
    background-image: url('https://images.pexels.com/photos/2080544/pexels-photo-2080544.jpeg?auto=compress&cs=tinysrgb&w=1600');
    height: 400px;
  ">

    <div class="d-flex justify-content-center align-items-center h-100">
      <div class="text-white">
        <h1 class="mb-3"> Consult us </h1>
        <h4 class="mb-3">before it's too late</h4>
        <a class="btn btn-outline-light btn-lg" href="{{url('user/patientbookapp')}}" role="button">Book appoinment now!</a>
      </div>
    </div>
  </div>
</div>
<!-- Hero -->
</header>

<div class="container">
<div class="row row-cols-1 row-cols-md-3 g-4 ">
<div class="col">
<div class="card border-primary mb-3 mx-auto" style="width: 18rem;">
  <img src="https://images.pexels.com/photos/9162030/pexels-photo-9162030.jpeg?auto=compress&cs=tinysrgb&w=1600" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Cardiovascular</h5>
    <p class="card-text" style="text-align:justify;" >What are the risk factors for cardiovascular disease? </p>
    <a href="https://www.who.int/news-room/fact-sheets/detail/cardiovascular-diseases-(cvds)" class="btn btn-primary">More Information</a>
  </div>
  </div>
</div>
<div class="col">
<div class="card border-danger mb-3 mx-auto" style="width: 18rem;">
  <img src="https://images.pexels.com/photos/887349/pexels-photo-887349.jpeg?auto=compress&cs=tinysrgb&w=1600" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Covid-19</h5>
    <p class="card-text" style="text-align:justify;">What is the long-term health effects of Covid-19?</p>
    <a href="https://www.gavi.org/vaccineswork/long-term-health-effects-covid-19?gclid=CjwKCAjwzY2bBhB6EiwAPpUpZlDz_c_dVXxxSdCd7HSil5eTFl1cB0Fy6ej0fDITskEbXc8s4YFXFxoCiWIQAvD_BwE" class="btn btn-primary">More Information</a>
  </div>
  </div>
</div>
<div class="col">
<div class="card border-info mb-3 mx-auto" style="width: 18rem;">
  <img src="https://images.pexels.com/photos/3786166/pexels-photo-3786166.jpeg?auto=compress&cs=tinysrgb&w=1600" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Attention SPAN</h5>
    <p class="card-text" style="text-align:justify;">Is your child always fidgeting and facing difficulty to complete his/her task?</p>
    <a href="https://www.healthline.com/health/fidgeting#causes" class="btn btn-primary">More Information</a>
  </div>
  </div>
</div>
</div>


<section class="projects-section bg-light" id="projects" style="padding-top: 0;">

            <h3 style="text-align: center; font-weight: bold; padding-top: 40px; margin: 0px 0px 30px 0px;">Latest Event & News </h3>
            <div class="container px-4 px-lg-5">
                <!-- Featured Project Row-->
                <!--                <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/bg-masthead.jpg" alt="..." /></div>
                                    <div class="col-xl-4 col-lg-5">
                                        <div class="featured-text text-center text-lg-left">
                                            <h4>Shoreline</h4>
                                            <p class="text-black-50 mb-0">Grayscale is open source and MIT licensed. This means you can use it for any project - even commercial projects! Download it, customize it, and publish your website!</p>
                                        </div>
                                    </div>
                                </div>-->
                <!-- Project One Row-->
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="{{asset('uploads/others/car2.jpg')}}" alt="..."  style="width:600px;height:400px;"/></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Treatmen plan</h4>
                                    <p class="mb-0 text-white-50" style="text-align:justify;">&nbsp;It starts by scheduling an annual physical exam with your personal physician. Your doctor can recommend a  &nbsp;  &nbsp;customized program of diet, exercise and other lifestyle changes to reduce your risk of heart disease. 
                                    </br></br> &nbsp;If further tests are required, our hospital has the expertise and the technology to give your heart a thorough&nbsp;  &nbsp;examination. What make our cardiovascular services so unique is that we are the first hospital who are using&nbsp; &nbsp;<b>Machine Learning</b> to predict heart disease which can produce the result is high quality and efficiency, we have&nbsp;  &nbsp;the resources you need when it comes to investigating how to best care for your heart.</p>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Two Row-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="{{asset('uploads/others/car3.jpg')}}" alt="..." style="width:600px;height:400px;" /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Cardiovascular diseases </h4>
                                    <p class="mb-0 text-white-50" style="text-align:justify;">&nbsp;Cardiovascular diseases (CVDs) are the leading cause of death globally, taking an estimated 17.9 million lives&nbsp; &nbsp;each year. CVDs are a group of disorders of the heart and blood vessels and include coronary heart disease&nbsp; &nbsp;cerebrovascular disease, rheumatic heart disease and other conditions. More than four out of five CVD deaths&nbsp; &nbsp;are due to heart attacks and strokes, and one third of these deaths occur prematurely in people under 70 years&nbsp; &nbsp;of age.
                                    </br> </br>&nbsp;The most important behavioural risk factors of heart disease and stroke are unhealthy diet, physical inactivity, &nbsp;tobacco use and harmful use of alcohol. The effects of behavioural risk factors may show up in individuals as&nbsp; &nbsp;raised blood glucose, raised blood lipids, and overweight and obesity. These “intermediate risks factors” can be&nbsp; &nbsp;measured in primary care facilities and indicate an increased risk of heart attack, stroke, heart failure and other&nbsp; &nbsp;complications.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project One Row-->
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="{{asset('uploads/others/car4.png')}}" alt="..." /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Event Day</h4>
                                    <p class="mb-0 text-white-50" style="text-align:justify;">&nbsp;We will held the heart disease talk event on the platform Facebook or Google Meet in order to&nbsp; &nbsp;spread the awareness and share the experience from our three professional who is <b>Safura&nbsp; &nbsp;Mohari</b>, <b>Dr.SurenThurlasingham </b> and the last&nbsp; professional will be the&nbsp;<b>Dr.Al Fasir Omar </b>. All&nbsp; &nbsp;of these doctor are the specialist in the area of Cardiology.</p>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                    <p class="mb-0 text-white-50" style="text-align:justify;"></br>
                                    &nbsp;Date : 17th June 2022</br>
                                    &nbsp;Time: 5:00pm  – 6:00pm</br>
                                    &nbsp;Link : <a href="https://meet.google.com/vmo-xygc-whs">Click Here<a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
                        
            </div>
        </section>


</div>

<div class="container" style="margin-top :40px;">
    <div class="text-center"><h5>Plan your visit📍</h5></div>
    <div class="mapouter mx-auto"><div class="gmap_canvas"><iframe width="1080" height="513" id="gmap_canvas" src="https://maps.google.com/maps?q=inti%20penang&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://putlocker-is.org"></a><br><style>.mapouter{position:relative;text-align:right;height:513px;width:1080px;}</style><a href="https://www.embedgooglemap.net">embedded google search</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:513px;width:1080px;}</style>
    </div>
</div>    
</div>
    </div>
    </br>
    </br>
    
<footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © made by:
    <a class="text-dark">Heart center healthcare providers</a>
  </div>
  <!-- Copyright -->
</footer>
@endsection
