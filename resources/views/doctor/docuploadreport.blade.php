@extends('layouts.app')


@section('content')



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
@endsection