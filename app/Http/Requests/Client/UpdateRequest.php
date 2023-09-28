<?php

namespace App\Http\Requests\Client;

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
            'name'=>'string|required|max:255',
            'cedula'=>'integer|required|unique:clients,cedula,'.$this->route('client')->id.'|min:8|max:10',
            'adress'=>'string|required|max:255',
            'phone'=>'integer|required|max:10',
            'email'=>'string|required|unique:clients,email,'.$this->route('client')->id.'|max:255',
            'identificationTypeId'=>'integer|required|exists:App\IdentificationType,id',
        ];
    }
    public function message(){
        return[
            'name.required'=>'Por favor, ingrese el nombre del cliente.',
            'name.String'=>'El valor no es correcto.',
            'name.max'=>'El nombre del cliente a ingresar solo permite 255 caracteres.',

            'cedula.required'=>'Por favor, ingrese el número de cédula.',
            'cedula.integer'=>'El valor no es correcto.',
            'cedula.unique'=>'Por favor, ingrese otra cédula la actual está registrada en el sistema.',
            'cedula.min'=>'La cédula a ingresar solo permite mínimo 8 caracteres.',
            'cedula.max'=>'La cédula a ingresar solo permite máximo 10 caracteres.',
            
            'adress.required'=>'Por favor, ingrese la dirección.',
            'adress.String'=>'El valor no es correcto.',
            
            'phone.required'=>'Por favor, ingrese el número de contacto.',
            'phone.integer'=>'El valor no es correcto.',
            'phone.max'=>'El número de contacto  a ingresar solo permite máximo 10 caracteres.',

            'email.required'=>'Por favor, ingrese su correo electrónico.',
            'email.String'=>'El valor no es correcto.',
            'email.unique'=>'Por favor, ingrese otro correo electrónico, la actual está registrada en el sistema.',

            'identificationTypeId.required'=>'Por favor, ingrese el tipo de identificación.',
            'identificationTypeId.Integer'=>'El valor no es correcto.',
            'identificationTypeId.exists'=>'El tipo de identificación  no existe en el sistema.',

        ];
    }
}
