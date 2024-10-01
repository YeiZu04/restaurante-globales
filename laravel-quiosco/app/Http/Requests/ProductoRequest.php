<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'nombre' => 'required',
            'precio' => 'required',
            'imagen' => 'required',
            'categoria_id' => 'required',
            'disponible' => 'required|boolean',
        ];

    }

    public function messages(){
        return [
            'nombre.required' => 'El nombre es requerido',
            'precio.required' => 'El precio es requerido',
            'imagen.required' => 'La imagen es requerida',
            'categoria_id.required' => 'La categoria es requerida',
            'disponible.required' => 'La disponibilidad es requerida',
        ];
    }
}
