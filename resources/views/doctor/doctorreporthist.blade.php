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
            <a class="nav-link" aria-current="page" href="{{url('user/home')}}">Home🏠   |</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('user/patientbookapp')}}"> Book appointment📅   |</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('user/doctorsdetails')}}"> Doctors on-call🧑‍⚕️   |</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"> My appointment🗓️   |</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->

  <div class="container-fluid px-4">


    <div class="card mt-4">
         <div class="card-header">
               <h4>Patient report history📖</h4>
         </div>
         <div class="card-body">

         @if (session('message'))
               <div class="alert alert-success">{{ session('message') }}</div>
         @endif

         <table id="myDataTable" class="table table-bordered">
              <thead>
                   <tr>
                        
                        <th>Patient Name</th>
                        <th>Patient Email</th>
                        <th>Patient Gender</th>
                        <th>Patient booking date</th>  
                        <th>Patient booking time</th>
                        <th>Booking venue</th>
                        <th>Report result</th>
                        <th>View</th>
                        <th>Download</th>
                        
                   </tr>

              </thead>

              <tbody>

                @foreach($patientReport as $item )

                    <tr>
                        
                         <td>{{$item->patientName}}</td>
                         <td>{{$item->patientEmail}}</td>
                         <td>{{$item->patientGender}}</td>
                         <td>{{$item->bookingDate}}</td>
                         <td>{{$item->bookingTime}}</td>
                         <td>{{$item->venue}}</td>
                         <td>{{$item->reportpdf}}</td>
                         <td><a href="{{url('doctor/view/'.$item->patientreportID)}}">View</a></td>
                         <td><a href="{{url('doctor/download/'.$item->reportpdf)}}">Download</a></td>
                         
                         
                         
                         
                         
                    </tr>
                    @endforeach
               
              </tbody>


         </table>

         </div>
    </div>


   

       
</div>

@endsection