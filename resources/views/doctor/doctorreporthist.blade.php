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
            <a class="nav-link" href="http://127.0.0.1:5000"> Heart disease prediction module❤️  |</a>
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
<footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © made by:
    <a class="text-dark" href="WWW.heartcenter.com">Heart center healthcare providers</a>
  </div>
  <!-- Copyright -->
</footer>

@endsection