<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::prefix('user')->middleware(['auth','isUser'])->group(function() { 

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

    Route::get('/patientbookapp',[App\Http\Controllers\HomeController::class, 'p_index']);

    Route::get('/patientmakebooking/{doctorCategory_exDoctorID}',[App\Http\Controllers\HomeController::class, 'p_make_index']);

    Route::get('/doctorsdetails',[App\Http\Controllers\HomeController::class, 'doc_detail_index']);

    Route::post('/addconfirmedbooking',[App\Http\Controllers\BookingHistoryController::class, 'Bkstore']);

    Route::get('/myappointment',[App\Http\Controllers\BookingHistoryController::class, 'myapp_index']);

    Route::get('/myreport',[App\Http\Controllers\BookingHistoryController::class, 'myreport_index']);

    Route::get('download/{reportpdf}',[App\Http\Controllers\BookingHistoryController::class, 'download']);
    
    Route::get('view/{patientreportID}',[App\Http\Controllers\BookingHistoryController::class, 'view']);

//Route::get('/testing',[App\Http\Controllers\HomeController::class, 'testing'])->name('testing');
});

//Route::get('/model',[])

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function() { //calls laravel built in Auth with middleware to let only admin to access dashboard , isAdmin checks user roles

    //admin dashboard page
    Route::get('/dashboard',[App\Http\Controllers\Admin\DashboardController::class,'index']);

    //booking time slot page
    Route::get('bktimeslotcategory',[App\Http\Controllers\Admin\DoctorController::class, 'index2']);

    Route::get('edit-doctor/{doctorCategory_exDoctorID}',[App\Http\Controllers\Admin\DoctorController::class,'edit']);

    Route::put('update_status/{doctorCategory_exDoctorID}',[App\Http\Controllers\Admin\DoctorController::class,'update_status']); //???

    Route::put('update-doctor/{doctorCategory_exDoctorID}',[App\Http\Controllers\Admin\DoctorController::class,'update']);

    Route::post('delete-doctor',[App\Http\Controllers\Admin\DoctorController::class, 'destroy']);

    //doctor page
    Route::get('doctorcategory',[App\Http\Controllers\Admin\DoctorController::class, 'index']);

    Route::get('add-doctor',[App\Http\Controllers\Admin\DoctorController::class, 'create']);
    
    Route::post('add-doctor',[App\Http\Controllers\Admin\DoctorController::class, 'store']);

    Route::get('edit-doctor/{doctorCategory_exDoctorID}',[App\Http\Controllers\Admin\DoctorController::class,'editBk']);

    Route::put('update-doctor/{doctorCategory_exDoctorID}',[App\Http\Controllers\Admin\DoctorController::class,'updateBk']);

    Route::post('delete-doctor',[App\Http\Controllers\Admin\DoctorController::class, 'destroy']);

    //user page 
    Route::get('users',[App\Http\Controllers\Admin\UserController::class,'index']); 

    Route::get('edit-user/{userCategory_id}',[App\Http\Controllers\Admin\UserController::class, 'edit']);

    Route::put('update-user/{user_id}',[App\Http\Controllers\Admin\UserController::class,'update']);

    Route::post('delete-user',[App\Http\Controllers\Admin\UserController::class, 'destroy']);

});

Route::prefix('doctor')->middleware(['auth','isDoctor'])->group(function() { 

    Route::get('dochome ',[App\Http\Controllers\Doctor\DoctorHomeController::class,'doc_home']);

    Route::get('docappointment ',[App\Http\Controllers\Doctor\DoctorHomeController::class,'doc_appointment_index']);

    Route::get('docupload/{bookingHistory_bookinghistID}',[App\Http\Controllers\Doctor\DoctorHomeController::class,'doc_upload_index']);

    Route::post('docconfirmupload',[App\Http\Controllers\Doctor\DoctorHomeController::class, 'upload_store']);

    Route::get('docreporthist',[App\Http\Controllers\Doctor\DoctorHomeController::class, 'report_index']);

    Route::get('download/{reportpdf}',[App\Http\Controllers\Doctor\DoctorHomeController::class, 'download']);
    
    Route::get('view/{patientreportID}',[App\Http\Controllers\Doctor\DoctorHomeController::class, 'view']);


});