<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Validator;
use App\Http\Requests\Utilisateur\storeUtilisateurRequest;
use App\Proprietaire;
use App\Locataire;
use App\Utilisateur;

class ConnexionController extends Controller
{   
      public function connexion(Request $request)

{
    $this->validate($request,
      [  
      'email'=>'required|email|unique:utilisateurs,email,$this->id,id',
      'password'=>'required',
     ]);

   
     $email = $_REQUEST['email'];
     $password = $_REQUEST['password'];
     
    
  if(Proprietaire::where('email',$email)->exists() || Locataire::where('email',$email)->exists())
  {      

     $prop = Proprietaire::where('email', $email)->first();
     $loc = Locataire::where('email',$email)->first();
     if ($prop == null || $loc == null) {

            // $user = $prop ?? $loc;

          if ($prop) {
            $user = $prop;
          }
          else{
            $user = $loc;
          }

           if (Hash::check($password, $user->password))
           { 
                         
             session::put('utilisateur', $user);
               if(session('utilisateur')->getTable() =='proprietaires')
               {
                  return redirect(route('propdashboard'))->with('Message','Bienvenue '.session('utilisateur')->nom);
               }
               else
               {

                  return redirect(route('locdashboard'))->with('Message','Bienvenue '.session('utilisateur')->nom);
                }
           }
                  return redirect()->Back()->with("Error","Le mot de passe est incorrect");
     }
     else{
         //dd(Hash::check($password, $prop->password));
           if (Hash::check($password, $prop->password) == true && Hash::check($password, $loc->password) == true)
           {
              $email = $loc->email;
              return view('connexion2',compact('email'));
           }
           elseif (Hash::check($password, $prop->password))
            { 
                         
              session::put('utilisateur', $prop);
              return redirect(route('propdashboard'))->with('Message','Bienvenue '.session('utilisateur')->nom);
            }elseif(Hash::check($password, $loc->password))
            {
              session::put('utilisateur',$loc);
              return redirect(route('locdashboard'))->with('Message','Bienvenue '.session('utilisateur')->nom);
            }else
            {
              return redirect()->Back()->with("Error","Le mot de passe est incorrect"); 
           }
     }

  }
 return redirect()->Back()->with("Error","L email est incorrect");
  
       
}

   public function connexionform()
   {

    return view('connexion');
   }
   

    public function deconnexion(){
       session()->flush();
    return redirect(route('connexionform'));
    }

    public function connexion2form(){
      return view('connexion2');
    }
    public function connexion2(Request $request){
      $table = $request->table;
      if($table == 'locataire')
      { 
            
             //session::put('utilisateur',$locataire);
             return redirect(route('locdashboard'))->with("Message","Votre compte a ete cree avec succes");
        }
            
        else{
           
           //session::put('utilisateur',$proprietaire);
           return redirect(route('propdashboard'))->with("Message","Votre compte a ete cree avec succes");
      }
      
    }
 public function profil()
 {   
  if(session('utilisateur')->getTable() =='proprietaires')
     {  
        return view('proprietaire.profil');
     }else
     {
       return view('locataire.profil');
     }
      
 }

  public function modifprofilloc($slugLoc,storeUtilisateurRequest $request)
 {   
    
    $locataire = Locataire::where('slug',$slugLoc)->first(); 
    $locataire->update([
      'nom'=>$request->nom,
      'email'=>$request->email,
      'login'=>$request->login,
      'telephone'=>$request->telephone,
      'password'=>$request->password??$locataire->password]);
    
    $locataire = Locataire::where('slug',$slugLoc)->first();
    
    session()->put('utilisateur',$locataire);
    return redirect()->Back()->with('Message','les informations ont bien ete modifiées');
 }

 public function modifprofilprop($slugProp,storeUtilisateurRequest $request)
 {   
    $proprietaire = Proprietaire::where('slug',$slugProp)->first();
    $proprietaire->update([
      'nom'=>$request->nom,
      'email'=>$request->email,
      'login'=>$request->login,
      'telephone'=>$request->telephone,
      'password'=>$request->password??$proprietaire->password]);
     

    $proprietaire = Proprietaire::where('slug',$slugProp)->first();
    session()->put('utilisateur',$proprietaire);
    return redirect()->Back()->with('Message','les informations ont bien ete modifiées');
 }

    
     
}


















































































































































































































































































































































































































































