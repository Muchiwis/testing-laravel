<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProfesor extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */

    //menssages por defecto, aqui se reemplazo el Request $request
    public function rules(): array
    {
        return [
                'nombre' => 'required',
                'dni' => ['required','max:8'],
        ];
    }

    //para personalizar mensajes en caso sucede un error
    public function messages() : array 
    {
        return [
            'nombre.required' => 'El nombre es obligatorio',
        ];
    }

    //para cambiar los atributos, si queremos que sea mas personalizado
    public function attributes() : array
    {
        return [
            'dni' => 'dni del profesor',
        ];
    }
}
