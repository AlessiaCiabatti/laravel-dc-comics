<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
            'title' => 'required|min:3|max:255',
            'type' => 'required|min:2|max:255',
            'price' => 'required|min:2|max:255',
            'sale_date' => 'required|min:2|max:255',
            'description' => 'required|min:10|max:255',
        ];
    }


    // creao un altro metodo

    public function messages(){
        return[
            'title.required' => 'Il titolo è un campo obbligatorio',
            'title.min' => 'Il titolo deve avere un minimo di :min caratteri',
            'title.max' => 'Il titolo non deve avere più di :max caratteri',

            'type.required' => 'Il type è un campo obbligatorio',
            'type.min' => 'Il campo type deve avere un minimo di :min caratteri',
            'type.max' => 'Il campo type non deve avere più di :max caratteri',

            'price.required' => 'Il price è un campo obbligatorio',
            'price.min' => 'Il campo price deve avere un minimo di :min caratteri',
            'price.max' => 'Il campo price non deve avere più di :max caratteri',

            'sale_date.required' => 'Il sale_date è un campo obbligatorio',
            'sale_date.min' => 'Il campo sale_date deve avere un minimo di :min caratteri',
            'sale_date.max' => 'Il campo sale_date non deve avere più di :max caratteri',

            'description.required' => 'Il description è un campo obbligatorio',
            'description.min' => 'Il campo description deve avere un minimo di :min caratteri',
            'description.max' => 'Il campo description non deve avere più di :max caratteri',
        ];
    }
}
