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
            <a class="nav-link" aria-current="page" href="{{url('doctor/dochome')}}"> Home🏠    |</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('doctor/docappointment')}}"> My patient appointment📅   |</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"> Heart disease prediction module❤️    |</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('doctor/docreporthist')}}"> Uploaded patient report📖   |</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->

  <div class="container" style="margin-top :60px;">
  <div class="card border-danger mb-3 mx-auto">
    <iframe height="1000" width ="1000"src="/uploads/patientreport/{{$key->reportpdf}}" class="card-img-top" alt="..."></iframe>
    </div>
  

  </div>
  
@endsection