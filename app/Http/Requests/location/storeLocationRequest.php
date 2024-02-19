<?php

namespace App\Http\Requests\Proprietaire;

use Illuminate\Foundation\Http\FormRequest;

class storeProprietaireRequest extends FormRequest
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
            'duree'=>'required',
            'date_debut'=>'required',
            'loyer_initial'=>'required',
           'charge'=>'required',
            'type_charge'=>'required',
            'jour_paiement'=>'required',
            'clause_revision_loyer'=>'required',
            'indice_reference'=>'required',
           'description_bail'=>'required',
            'clause_particuliere'=>'required',
            'garant_solidaire'=>'required',
            
            
            
        ];
    }
}
