@extends('layouts.app')


@section('content')
<header>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
        data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false"
        aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="{{url('doctor/dochome')}}">Home🏠   |</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('doctor/docappointment')}}"> My patient appointment📅   |</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"> Heart disease prediction module❤️  |</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('doctor/docreporthist')}}"> Uploaded patient report📖   |</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->
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


<footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © made by:
    <a class="text-dark" href="WWW.heartcenter.com">Heart center healthcare providers</a>
  </div>
  <!-- Copyright -->
</footer>
@endsection