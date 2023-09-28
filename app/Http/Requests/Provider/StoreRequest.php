<?php

namespace App\Http\Requests\Provider;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'providersName'=>'required|string|max:255',
            'providersNit'=>'required|integer|max:10|unique:providers',
            'providersEmail'=>'required|string|max:150|unique:providers,',
            'providersPhone'=>'required|integer|max:10|unique:providers',
        ];
    }
    public function message(){
        return[
            'providersName.required'=>'Por favor, ingrese el nombre del proveedor.',
            'providersName.String'=>'El valor no es correcto.',
            'providersName.max'=>'El nombre del proveedor  a ingresar solo permite 255 caracteres.',
            'providersNit.required'=>'Por favor, ingrese el nit.',
            'providersNit.max'=>'El campo NIT  solo permite un máximo de 10 caracteres.',
            'providersNit.unique'=>'El NIT  se encuentra registrado en el sistema.',
            'providersEmail.required'=>'Por favor, ingrese el email del proveedor.',
            'providersEmail.String'=>'El valor no es correcto.',
            'providersEmail.max'=>'El campo correo   solo permite 150 caracteres.',
            'providersPhone.required'=>'Por favor, ingrese el número de contacto.',
            'providersPhone.max'=>'El campo teléfono solo permite un máximo de 10 caracteres.',
            'providersPhone.unique'=>'El número de contacto se encuentra registrado en el sistema.',

        ];
    }
}
