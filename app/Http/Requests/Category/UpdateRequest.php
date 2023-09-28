<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'categoryName'=>'required|string|max:255',
            'categoryDescription'=>'nullable|string|max:255',
        ];
    }
    public function message(){
        return[
            'categoryName.required'=>'Por favor, ingrese el nombre de la categoría.',
            'categoryName.String'=>'El valor no es correcto.',
            'categoryName.max'=>'El nombre de la categoría a ingresar solo permite 255 caracteres.',
            'categoryDescription.required'=>'Por favor, ingrese la descripción de la categoría.',
            'categoryDescription.String'=>'El valor no es correcto.',
            'categoryDescription.max'=>'La descripción de la categoría a ingresar solo permite un máximo de 255 caracteres.',
        ];
    }
}
