<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\bookingHistory;

class DoctorHomeController extends Controller
{
    public function doc_home()
    {
        $doc_name=Auth::user()->name;
        return view('doctor.doctorhome',compact('doc_name'));
    }

    public function doc_appointment_index()
    {
        $bookingHistory = bookingHistory::where('doctorName', '=',Auth::user()->name)->get(); //afterwards where the status is == 'pending' only
        return view('doctor.doctorpatientappointment',compact('bookingHistory'));
    }

    public function doc_upload_index($bookingHistory_bookinghistID)
    {
        //$doctorcategory =doctorcategory::find($doctorcategory_exDoctorID);
        $bookingHistory = bookingHistory::find($bookingHistory_bookinghistID);
        return view('doctor.docuploadreport',compact('bookingHistory'));

    }
}
