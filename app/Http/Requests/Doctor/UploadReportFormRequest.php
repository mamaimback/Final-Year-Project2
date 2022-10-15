<?php

namespace App\Http\Requests\Doctor;

use Illuminate\Foundation\Http\FormRequest;

class UploadReportFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules= [

            'patientName' => [
                'required',
                'string',
            ],
            'patientEmail' => [
                'required',
                'string',
            ],
            'patientGender' => [
                'required',
                'string',
            ],
            'bookingDate' => [
                'required',
                'string',
            ],
            'bookingTime' => [
                'required',
                'string',
            ],
            'venue' => [
                'required',
                'string',
            ],
            'reportpdf' => [
                'required',
                'mimes:pdf',
                'max:10000',
            ]

        ];

        return $rules;
    }
}
