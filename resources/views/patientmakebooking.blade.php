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
  <!-- Navbar -->



<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
             <h4 class="">Make booking</h4>

        </div>

        <div class="card-body">

        @if($errors->any())
            <div class="alert alert-danger">
                 @foreach ($errors->all() as $error)
                 <div>{{$error}}</div>
                 @endforeach
             </div> 
        @endif

        <form action="{{ url('user/addconfirmedbooking')}}" method="POST" enctype="multipart/form-data"> 
            @csrf
            
            

            <div class= "mb-3">
                <label for="">Your name</label>
                <input type="text" name="patientName" class="form-control">
            </div>

            <div class= "mb-3">
                <label for="">Your email</label>
                <input type="text" name="patientEmail" value="{{$ori_email}}" class="form-control" readonly="readonly">
            </div>

            <div class= "mb-3">
                <label for="">Your phone number</label>
                <input type="text" name="patientPhone" class="form-control">
            </div>

            <div class= "mb-3">
                <label for="">Gender</label>
                <!-- <input type="text" name="foodCategories" class="form-control"> -->
                <select name="patientGender" class="form-control" >
                <option value="M">Male</option>
                <option value="F">Female</option>
                </select>
            </div>

            <div class= "mb-3">
                <label for="">Doctor name</label>
                <input type="text" name="doctorName" value="{{$doctorcategory->doctorName}}" class="form-control" readonly="readonly">
            </div>
           
              <div class= "mb-3" >
              <label for="">Specialized field</label>
                <input type="text" name="specialist"  value="{{$doctorcategory->Specialist}}" class="form-control" readonly="readonly">
            </div>

            <div class= "mb-3">
                <label for="">Booking Date</label></br>
                <input type="date" id="bookingDate" name="bookingDate" value="{{$doctorcategory->availableDate}}" readonly="readonly">
            </div>

            <div class= "mb-3">
                <label for="">Booking Time</label>
                <input type="text" name="bookingTime"  value="{{$doctorcategory->availableTime}}" class="form-control" readonly="readonly">
            </div>

            <div class= "mb-3">
                <label for="">Venue</label>
                <!-- <input type="text" name="foodCategories" class="form-control"> -->
                <input type="text" name="venue"  value="{{$doctorcategory->venues}}" class="form-control" readonly="readonly">
            </div>

        

            </br>
            </br>
            <div class="col-md 6">
                <button type="submit" class="btn btn-primary">Make booking</button>
            </div>

        </form>

        </div>

     </div>
</div>

</br>
</br>
</br>
</br>
</br>
<footer class="footer2">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © made by:
    <a class="text-dark">Heart center healthcare providers</a>
  </div>
  <!-- Copyright -->
</footer>
@endsection