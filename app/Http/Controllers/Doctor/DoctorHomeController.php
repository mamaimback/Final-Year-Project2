<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Stroage;
use Illuminate\Support\Facades\Auth;
use App\Models\bookingHistory;
use App\Models\patientReport;
use App\Http\Requests\Doctor\UploadReportFormRequest;

class DoctorHomeController extends Controller
{
    public function doc_home()
    {
        $doc_name=Auth::user()->name;
        return view('doctor.doctorhome',compact('doc_name'));
    }

    public function doc_appointment_index()
    {
        $bookingHistory = bookingHistory::where('doctorName', '=',Auth::user()->name)->where('upload_status','=','pending')->get(); //afterwards where the status is == 'pending' only
        return view('doctor.doctorpatientappointment',compact('bookingHistory'));
    }

    public function doc_upload_index($bookingHistory_bookinghistID)
    {
        //$doctorcategory =doctorcategory::find($doctorcategory_exDoctorID);
        $bookingHistory = bookingHistory::find($bookingHistory_bookinghistID);
        return view('doctor.docuploadreport',compact('bookingHistory'));

    }

    public function upload_store(UploadReportFormRequest $request)
    {
        $data = $request->validated();
        $patientReport = new patientReport;

        $patientReport->patientName = $data['patientName'];
        $patientReport->patientEmail = $data['patientEmail'];
        $patientReport->patientGender = $data['patientGender'];
        $patientReport->bookingDate = $data['bookingDate'];
        $patientReport->bookingTime = $data['bookingTime'];
        $patientReport->venue = $data['venue'];
        if($request->hasfile('reportpdf')){
            $file = $request->file('reportpdf');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/patientreport/', $filename );
            $patientReport->reportpdf= $filename;
        }
        $patientReport->uploader = Auth::user()->name;
        $patientReport->save();
        //change status
        $bookingHistory = bookingHistory::where('doctorName', '=', Auth::user()->name)->where('bookingDate','=',$data['bookingDate'])->where('bookingTime','=',$data['bookingTime'])->update(array('upload_status' => 'complete'));
        return redirect('doctor/docappointment')->with('message','Report uploaded successfully');
    }

    public function report_index()
    {
        $patientReport = patientReport::where('uploader','=',Auth::user()->name)->get();
        return view('doctor.doctorreporthist',compact('patientReport'));
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
