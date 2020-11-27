<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class ContactCreate extends FormRequest
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
            'name' => 'required',
            'lastname' => '',
            'email' => 'required|email',
            'area_code' => '',
            'telephone' => '',
            'business' => 'required',
            'business_type' => '',
            'country' => '',
            'industry_type' => '',
            'investment' => 'required',
            'message' => '',
        ];
    }

    public function attributes()
    {
        return [
            'name' => trans('contact/general.form-names.name'),
            'lastname' => trans('contact/general.form-names.lastname'),
            'email' => trans('contact/general.form-names.email'),
            'area_code' => trans('contact/general.form-names.area_code'),
            'telephone' => trans('contact/general.form-names.telephone'),
            'business' => trans('contact/general.form-names.business'),
            'business_type' => trans('contact/general.form-names.business_type'),
            'country' => trans('contact/general.form-names.country'),
            'industry_type' => trans('contact/general.form-names.industry_type'),
            'investment' => trans('contact/general.form-names.investment'),
            'message' => trans('contact/general.form-names.message'),
        ];
    }
}
