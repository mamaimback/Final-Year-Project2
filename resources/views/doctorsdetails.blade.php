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
    background-image: url('https://images.pexels.com/photos/263402/pexels-photo-263402.jpeg?auto=compress&cs=tinysrgb&w=1600');
    height: 400px;
  ">

    <div class="d-flex justify-content-center align-items-center h-100">
      <div class="text-white">
        <h1 class="mb-3"> Meet our doctors! </h1>
        <h4 class="mb-3">They are very nice</h4>
        
      </div>
    </div>
  </div>
</div>
<!-- Hero -->
<div class="row">
@foreach($doctorcategory as $item )

<div style="width: 18rem; margin-left: 30px;">
      <div class="card md-4 box-shadow">
        <img class="card-img-top" src="{{ asset('uploads/doctorcategory/'.$item->image_profile) }}" alt="Card image cap" width = "100px" height="220px" >
  <div class="card-body" >
    <h5 class="card-title" style="text-align: left; font-family: serif;">Doctor Details</h5> <hr>
    <p class="card-text" style="text-align: left; font-family: sans-serif;"><b>Name </b> : {{$item->doctorName}}</p>
    <p class="card-text" style="text-align: left; font-family: sans-serif;"><b>Description </b> : {{$item->doctordescription}}</p>
    <p class="card-text" style="text-align: left; font-family: sans-serif;"><b>Preferred Language</b> :English</p>
    <p class="card-text" style="text-align: left; font-family: sans-serif;"><b>Specialist:</b> {{$item->Specialist}}</p> 
    <a href="http://127.0.0.1:8000/user/patientbookapp" class="btn btn-primary">Book Appointment</a>
  </div>
</div>
    </div>
    @endforeach
</div>

<br>
<br>
<br>
<footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © made by:
    <a class="text-dark" href="WWW.heartcenter.com">Heart center healthcare providers</a>
  </div>
  <!-- Copyright -->
</footer>
@endsection

