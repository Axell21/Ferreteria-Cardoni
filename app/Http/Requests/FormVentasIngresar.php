<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormVentasIngresar extends FormRequest
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
            'idcodventa' => 'required',
            'nombreventa' => 'different:0',
            'iddireccion'=> 'required',
            'nombreproducto'=> 'required',
            'idcantidad'=> 'required',

            
            
        ];
    }

    public function messages()
    {
        return [
            'idcodventa.required' => 'El Codigo de pedido no puede estar vacio',
            'nombreventa.different' => 'Se debe seleccionar Un Cliente',
            'iddireccion.required' => 'El Campo Dirección es obligatorio',          
            'nombreproducto.required' => 'Sleccione uno o varios Productos',
            'idcantidad.required' => 'Defina una cantidad superior a 0',
            
        ];
    }
}
