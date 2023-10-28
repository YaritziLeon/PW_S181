<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorRegistros extends FormRequest
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
            'txtISBN' => 'required|min:13',
            'txtTitulo' => 'required',
            'txtAutor' => 'required',
            'Paginas' => 'required|numeric',
            'txtEditorial' => 'required',
            'Email' => 'required|email'
        ];
    }
}
