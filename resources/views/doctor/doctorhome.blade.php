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
</header>
<!-- Hero -->
<div class="p-5 text-center bg-image rounded-3" style="
    background-image: url('https://images.pexels.com/photos/1692693/pexels-photo-1692693.jpeg?auto=compress&cs=tinysrgb&w=1600');
    height: 400px;
  ">

    <div class="d-flex justify-content-center align-items-center h-100">
      <div class="text-white">
        <h1 class="mb-3"> Welcome DR. {{$doc_name}} </h1>
        <h4 class="mb-3">Hope you are having a great day</h4>
        <a class="btn btn-outline-light btn-lg" href="#" role="button">View your appointments here</a>
      </div>
    </div>
  </div>
</div>
<!-- Hero -->
</header>





<footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © made by:
    <a class="text-dark" href="WWW.heartcenter.com">Heart center healthcare providers</a>
  </div>
  <!-- Copyright -->
</footer>
@endsection