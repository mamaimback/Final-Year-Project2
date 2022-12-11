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
      <a href="{{url('doctor/dochome')}}"><img src="/uploads/others/logo.png" alt="logo" style="width:100px;height:45px;"></a>
      </ul>
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        
          <li class="nav-item active">
            <a class="nav-link" href="{{url('doctor/docappointment')}}"> My patient appointment &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://127.0.0.1:5000"> Heart disease prediction module  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('doctor/docreporthist')}}"> My patient report &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; </a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
</header>


<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
             <h4 class="">Upload report</h4>

        </div>

        <div class="card-body">

        @if($errors->any())
            <div class="alert alert-danger">
                 @foreach ($errors->all() as $error)
                 <div>{{$error}}</div>
                 @endforeach
             </div> 
        @endif

        <form action="{{ url('doctor/docconfirmupload')}}" method="POST" enctype="multipart/form-data"> <!--{{ url('user/addconfirmedbooking')}}-->
            @csrf
            
            

            <div class= "mb-3">
                <label for="">Patient Name</label>
                <input type="text" name="patientName" value ="{{$bookingHistory->patientName}}" class="form-control"  readonly="readonly">
            </div>

            <div class= "mb-3">
                <label for="">Patient Email</label>
                <input type="text" name="patientEmail" value="{{$bookingHistory->patientEmail}}" class="form-control" readonly="readonly">
            </div>

            <div class= "mb-3">
                <label for="">Patient phone number</label>
                <input type="text" name="patientPhone" value="{{$bookingHistory->patientPhone}}" class="form-control" readonly="readonly">
            </div>

            <div class= "mb-3">
                <label for="">Gender</label>
                <input type="text" name="patientGender" value="{{$bookingHistory->patientGender}}" class="form-control" readonly="readonly">
            </div>

            <div class= "mb-3">
                <label for="">Booking Date</label></br>
                <input type="date" id="bookingDate" name="bookingDate" value="{{$bookingHistory->bookingDate}}" readonly="readonly">
            </div>

            <div class= "mb-3">
                <label for="">Booking Time</label>
                <input type="text" name="bookingTime"  value="{{$bookingHistory->bookingTime}}" class="form-control" readonly="readonly">
            </div>

            <div class= "mb-3">
                <label for="">Venue</label>
                <!-- <input type="text" name="foodCategories" class="form-control"> -->
                <input type="text" name="venue"  value="{{$bookingHistory->venue}}" class="form-control" readonly="readonly">
            </div>

            <div class= "mb-3">
                <label for="">Report (pdf format)</label>
                <input type="file" name="reportpdf" class="form-control">
            </div>

            </br>
            <div class="col-md 6">
                <button type="submit" class="btn btn-primary">Upload report</button>
            </div>

        </form>

        </div>

     </div>
</div>


<footer class="footer">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © made by:
    <a class="text-dark" href="WWW.heartcenter.com">Heart center healthcare providers</a>
  </div>
  <!-- Copyright -->
</footer>
@endsection