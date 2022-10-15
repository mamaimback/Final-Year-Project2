@extends('layouts.master')

@section('content')

<div class="modal fade" id="deleteReserveModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
         <form action="{{url('admin/delete-reservation')}}" method="POST">
          @csrf
               <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Delete Doctor Profile</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
               </button>
               </div>
               <div class="modal-body">
                    <input type="hidden" name="reservation_delete_id" id="reserve_id">
               <h5>Are you sure do you want to delete this appointment?</h5>
               </div>
               <div class="modal-footer">
               <button type="submit" class="btn btn-danger">Yes, Delete</button>
               </div>
      </form>
    </div>
  </div>
</div>

<div class="container-fluid px-4">


<div class="card mt-4">
     <div class="card-header">
           <h4>All Reservations📅</h4>
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
                    <th>Action</th>
                    
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
                     <td><button type="button" class="btn btn-danger deleteReserveBtn" value="{{$item->bookinghistID}} ">Delete Appointment</button></td>
                </tr>
                @endforeach
           
          </tbody>


     </table>

     </div>
</div>

@endsection

@section('scripts')
     <script>
     $(document).ready(function(){
          $('.deleteReserveBtn').click(function(e){
               e.preventDefault();
               
              var reservation_id = $(this).val();
              $('#reserve_id').val(reservation_id);
              $('#deleteReserveModal').modal('show');
          });
     });
     </script>
@endsection