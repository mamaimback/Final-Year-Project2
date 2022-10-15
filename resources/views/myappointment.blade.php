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
               <h4>Available Booking Timeslots</h4>
         </div>
         <div class="card-body">

         @if (session('message'))
               <div class="alert alert-success">{{ session('message') }}</div>
         @endif

         <table id="myDataTable" class="table table-bordered">
              <thead>
                   <tr>
                        
                        <th>Booking Name</th>
                        <th>Booking Email</th>
                        <th>Booking phone number</th>
                        <th>Doctor name</th>  
                        <th>Doctor specialised field</th>
                        <th>Booking date</th>
                        <th>Booking time</th>
                        <th>Venue</th>
                   </tr>

              </thead>

              <tbody>

                @foreach($bookingHistory as $item )

                    <tr>
                        
                         <td>{{$item->patientName}}</td>
                         <td>{{$item->patientEmail}}</td>
                         <td>{{$item->patientPhone}}</td>
                         <td>{{$item->doctorName}}</td>
                         <td>{{$item->specialist}}</td>
                         <td>{{$item->bookingDate}}</td>
                         <td>{{$item->bookingTime}}</td>
                         <td>{{$item->venue}}</td>
                         <td>
                              <a href="{{url('user/doctorsdetails')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Doctor details</a>
                         </td>
                         
                    </tr>
                    @endforeach
               
              </tbody>


         </table>

         </div>
    </div>


   

       
</div>

@endsection