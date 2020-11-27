<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class SuccessStoryUpdate extends FormRequest
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
            'title_es' => '',
            'title_pt' => '',
            'description_es' => '',
            'description_pt' => '',
            'content_es' => '',
            'content_pt' => '',
            'brand_es' => '',
            'brand_pt' => '',
            'desktop_banner_image_es' => '',
            'mobile_banner_image_es' => '',
            'desktop_banner_image_pt' => '',
            'mobile_banner_image_pt' => '',
        ];
    }

    public function attributes()
    {
        return [
            'title_es' => 'Título en español',
            'title_pt' => 'Título en portugués',
            'description_es' => 'Descripción en español',
            'description_pt' => 'Descripción en portugués',
            'content_es' => 'Contenido en español',
            'content_pt' => 'Contenido en portugués',
            'desktop_banner_image_es' => 'Imagen banner desktop en español',
            'mobile_banner_image_es' => 'Imagen banner mobile en español',
            'desktop_banner_image_pt' => 'Imagen banner desktop en portugués',
            'mobile_banner_image_pt' => 'Imagen banner mobile en portugués',
            'is_highlight_es' => 'Destacado en la página de listado en español',
            'is_highlight_pt' => 'Destacado en la página de listado en portugués',
            'brand_es' => 'Marca en español',
            'brand_pt' => 'Marca en portugués',
        ];
    }

    public function messages()
    {
        return [
            'required_if' => 'El campo :attribute es obligatorio cuando :other está seleccionado'
        ];
    }
}
