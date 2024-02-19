<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Proprietaire\storeProprietaireRequest;
use App\Proprietaire;
use App\Locataire;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Validator;

class InscriptionController extends Controller
{
    public function inscriptionform(){
       
     return view('inscription');
    }


    public function inscription(storeProprietaireRequest $request){

      $data = $request->except('_token','password_confirmation','table');
     
      $data['password'] = Hash::make($data['password']);
      $data['etat'] = 0;
      $table = $request->table;
      if($table == 'locataire')
      {
         $locataire = Locataire::firstOrCreate($data);
         session::put('utilisateur',$locataire);
            return redirect(route('locdashboard'))->with("Message","Votre compte a ete cree avec succes");
       }else{
           $proprietaire = Proprietaire::firstOrCreate($data);
           session::put('utilisateur',$proprietaire);
           return redirect(route('propdashboard'))->with("Message","Votre compte a ete cree avec succes");
      }
      
    }
}
