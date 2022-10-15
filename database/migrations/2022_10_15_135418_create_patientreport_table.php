<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientreportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patientreport', function (Blueprint $table) {
            $table->bigIncrements('patientreportID', 20);
            $table->string('patientName',50);
            $table->string('patientEmail',50);
            $table->string('patientGender');
            $table->date('bookingDate');
            $table->string('bookingTime');
            $table->String('venue', 15); 
            $table->string('reportpdf', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patientreport');
    }
}
