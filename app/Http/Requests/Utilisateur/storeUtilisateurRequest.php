<?php

namespace App\Http\Requests\Utilisateur;

use Illuminate\Foundation\Http\FormRequest;

class storeUtilisateurRequest extends FormRequest
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
            'nom'=>'required',
            'login'=>'required',
            'email'=>'required|email',
            'telephone'=>'required|min:9|numeric',
            'password'=>'nullable|min:6|confirmed',
            
        ];
    }
}