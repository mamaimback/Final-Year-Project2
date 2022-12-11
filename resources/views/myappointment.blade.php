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

  <div class="container-fluid px-4">


    <div class="card mt-4">
         <div class="card-header">
               <h4>My appointments</h4>
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
                              <a href="{{url('user/doctorsdetails')}}" class="btn btn-primary " role="button" aria-pressed="true">Doctor details</a>
                         </td>
                         
                    </tr>
                    @endforeach
               
              </tbody>


         </table>

         </div>
    </div>


   

       
</div>

<footer class="footer ">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © made by:
    <a class="text-dark" href="WWW.heartcenter.com">Heart center healthcare providers</a>
  </div>
  <!-- Copyright -->
</footer>

@endsection


