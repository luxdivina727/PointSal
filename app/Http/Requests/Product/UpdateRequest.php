<?php

namespace App\Http\Requests\Product;

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
            'name'=>'string|required|unique:products,name,'.$this->route('product')->id.'|max:255',
            'image'=>'required|dimensions:min_width=100,min_height=200',
            'sell_price'=>'required|',
            'providerId'=>'integer|required|exists:App\Provider,id',
            'categoryId'=>'integer|required|exists:App\Category,id',
        ];
    }
    public function message(){
        return[
            'name.required'=>'Por favor, ingrese el nombre del producto.',
            'name.String'=>'El valor no es correcto.',
            'name.max'=>'El nombre del producto a ingresar solo permite 255 caracteres.',
            'name.unique'=>'El nombre del producto está registrado en el sistema.',

            'image.required'=>'Por favor, ingrese la una imagen al producto.',
            'image.dimensions'=>'Se permite imágenes de 100x200 px.',

            'sell_price.required'=>'El valor del producto es requerido.',
            
            'providerId.required'=>'Por favor, ingrese el proveedor.',
            'providerId.Integer'=>'El valor no es correcto.',
            'providerId.exists'=>'El proveedor no existe en el sistema.',

            'categoryId.required'=>'Por favor, ingrese la categoría.',
            'categoryId.Integer'=>'El valor no es correcto.',
            'categoryId.exists'=>'La categoría  no existe en el sistema.',
            
        ];
    }
}
