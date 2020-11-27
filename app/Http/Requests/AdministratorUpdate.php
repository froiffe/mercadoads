<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class AdministratorUpdate extends FormRequest
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
        $params = $this->request->all();

        return [
            'name' => 'required',
            'email' => 'required|unique:administrators,email,' . $params['id'],
            'password' => 'nullable|confirmed|min:6|max:12',
            'role' => 'required'
        ];
    }
}
