<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'name'=>'required|string|max:30',
            'documento' =>'required|string|unique:users',
            'telefono' =>'required|min:8|max:11',
            'direccion' =>'required|string|max:30',
            'pais' =>'required|string|max:10',
            'cuidad' =>'required|string|max:10',
            'edad' =>'required|date|max:10',
            'email'=>'required|string|email|max:60|unique:users',
            'password'=>'required|string|min:7|confirmed',
        ];
    }
}
