<?php

namespace App\Http\Controllers;
use App\Models\doctorCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\bookingHistory;
use App\Models\patientReport;

use App\Http\Requests\Patient\BookingHistoryFormRequest;
use Illuminate\Support\Facades\Auth;

class BookingHistoryController extends Controller
{
    
    public function Bkstore(BookingHistoryFormRequest $request) //for validation requests
    {
        
        $data = $request->validated();
        $bookingHistory = new bookingHistory;
        

        $bookingHistory->patientName = $data['patientName'];
        $bookingHistory->patientEmail = $data['patientEmail'];
        $bookingHistory->patientPhone = $data['patientPhone'];
        $bookingHistory->patientGender = $data['patientGender'];
        $bookingHistory->doctorName = $data['doctorName'];
        $bookingHistory->specialist = $data['specialist'];
        $bookingHistory->bookingDate = $data['bookingDate'];
        $bookingHistory->bookingTime = $data['bookingTime'];
        $bookingHistory->venue = $data['venue'];

        $bookingHistory->save();

        $doctorcategory = doctorcategory::where('doctorName', '=',$data['doctorName'])->where('availableDate','=',$data['bookingDate'])->where('availableTime','=',$data['bookingTime'])->update(array('doctor_availability' => '0'));

        
        return redirect('user/myappointment')->with('message','Booking made successfully!');
    }

    public function myapp_index()
    {
        $bookingHistory = bookingHistory::where('patientEmail','=',Auth::user()->email)->get();
        //$doctorcategory = doctorcategory::where('doctor_availability', '=',1)->where('availableDate','>',$currenttime)->get();
        return view('myappointment' ,compact('bookingHistory'));
    }

    public function myreport_index()
    {
        $patientReport = patientReport::where('patientEmail','=',Auth::user()->email)->get();
        return view('myreports',compact('patientReport'));
    }

    public function download(Request $request,$reportpdf)
    {
        return response()->download(public_path('uploads/patientreport/'.$reportpdf));
    }

    public function view($patientreportID)
    {
        $key= patientReport::find($patientreportID);

        return view('doctor.viewreport',compact('key'));
    }
}
