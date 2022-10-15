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
            <a class="nav-link" href="{{url('user/myappointment')}}"> My appointment🗓️   |</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('user/myreport')}}"> My reports🗓️   |</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

  <!-- Navbar -->

  <div class="container-fluid px-4">


    <div class="card mt-4">
         <div class="card-header">
               <h4>Available Booking Timeslots</h4>
         </div>
         <div class="card-body">

         @if (session('message'))
               <div class="alert alert-success">{{ session('message') }}</div>
         @endif

         <table id="myDataTable" class="table table-bordered">
              <thead>
                   <tr>
                        
                        <th>Doctor Name</th>
                        <th>Date of visit</th>
                        <th>Time of visit</th>
                        <th>Venue</th>  
                        <th>Doctor</th>
                        <th>Bookings</th>
                   </tr>

              </thead>

              <tbody>

                @foreach($doctorcategory as $item )

                    <tr>
                         
                         <td>{{$item->doctorName}}</td>
                         <td>{{$item->availableDate}}</td>
                         <td>{{$item->availableTime}}</td>
                         <td>{{$item->venues}}</td>
                         <td>
                              <a href="{{url('user/doctorsdetails')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Doctor details</a>
                         </td>

                         <td> 
                             <a href="{{url('user/patientmakebooking/'.$item->exDoctorID) }}" class="btn btn-warning btn-lg " >Make booking</a>
                         </td>
                    </tr>
                    @endforeach
               
              </tbody>


         </table>

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