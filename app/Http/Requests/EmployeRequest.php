<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeRequest extends FormRequest
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
            'name' =>'required',
            'position'=>'required',
            'email'=>'required|email|unique:empolyes,email',
            'phone'=>'required | size:11',
            'salary'=>'required|min:4|max:6',
            'address'=>'required',
            'image'=>'required|image',
        ];
    }
    protected function formatErrors(Validator $validator)
    {
        Toastr::error('Your Error Message', 'failed');

        return $validator->errors()->all();
    }
}
