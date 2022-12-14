<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class student extends FormRequest
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
        return [
            'name_ar' => 'required',
            'name_en' => 'required',
            'email' => 'required|email|unique:students,email,'.$this->id,
            'password' => 'required|string|min:6|max:10',
            'gender_id' => 'required',
            'nationalitie_id' => 'required',
            'blood_id' => 'required',
            'Date_Birth' => 'required|date|date_format:Y-m-d',
            'Grade_id' => 'required',
            'Classroom_id' => 'required',
            'section_id' => 'required',
            'parent_id' => 'required',
            'academic_year' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name_ar.required' => trans('validation.required'),
            'name_en.required' => trans('validation.required'),
            'email.required' => trans('validation.required'),
            'email.email'=>trans('validation.email'),
            //'email.unique'=> trans('validation.unique'),
            'password.required' => trans('validation.required'),
            'gender_id.required' => trans('validation.required'),
            'nationalitie_id.required' => trans('validation.required'),
            'blood_id.required' =>trans('validation.required'),
            'Date_Birth.required' =>trans('validation.required'),
            'Date_Birth.date'=> trans('validation.date')  ,
            'Grade_id.required' =>trans('validation.required'),
            'Classroom_id.required' => trans('validation.required'),
            'section_id.required' => trans('validation.required'),
            'parent_id.required' => trans('validation.required'),
            'academic_year.required' => trans('validation.required'),
        ];
    }
}
