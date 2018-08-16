<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            //
            'name'=>'required|min:3',
            'description'=>'required|max:200',
            'price'=>'required|numeric|min:0',
        ];
    }
    public function messages()
    {
        return[
            'name.required'=>'Es necesario ingresar un nombre para el producto.',
            'name.min'=>'El nombre del producto debe tener almenos 3 caracteres.',
            'description.rquired'=>'La descripción corta es un campo obligatorio.',
            'description.max'=>'La descripción corta solo admite hasta 200 caracteres.',
            'price.required'=>'Es obligatorio definir un precio para el producto.',
            'price.numeric'=>"Ingrese un precio válido.",
            'price.min'=>'No se admiten valores negativos.',

        ];
    }
}
