<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Proprietaire\storeProprietaireRequest;
use App\Http\Requests\Utilisateur\storeUtilisateurRequest;
use App\Utilisateur;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Validator;


class UtilisateurController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }

  public function connexionadmin(Request $request){

  $this->validate($request,
      [  
      'email'=>'required|email|',
      'password'=>'required',
     ]);

   
     $email = $_REQUEST['email'];
     $password = $_REQUEST['password'];
      if(Utilisateur::where('email',$email)->exists())
      {
          $admin = Utilisateur::where('email',$email)->first();
            if (Hash::check($password, $admin->password))
            {
                session::put('utilisateur',$admin);
              return redirect(route('admindashboard'))->with('Message','Bienvenue '.session('utilisateur')->nom);
            }
            return redirect()->Back()->with("Error","Le mot de passe est incorrect");
      }
        return redirect()->Back()->with("Error","L email est incorrect");
  }
  public function connexionformadmin(){

    return view('utilisateur.Authentification.connexion');
  }
  public function inscriptionform(){

    return view('utilisateur.Authentification.inscriptionformadmin');
  }
  public function inscriptionadmin(storeProprietaireRequest $request){

   $data = $request->except('_token','password_confirmation');
   $data['password'] = Hash::make($data['password']);
   Utilisateur::firstOrCreate($data);
   return redirect(route('admindashboard'))->with("Message","Votre compte a ete cree avec succes");
  }

   
  public function dashboard(){

    return view('utilisateur.dashboard');
  }

  public function deconnexion()
  {
       session()->flush();
    return view('utilisateur.Authentification.connexion');
  }
  public function profiladmin()
  {
       
    return view('utilisateur.profil');
  }
  public function modifprofiladmin($SlugAdmin,storeUtilisateurRequest $request)
  { 
    $admin = Utilisateur::where('slug',$SlugAdmin)->first(); 
    // dd($request);
    $admin->update([
      'nom'=>$request->nom,
      'email'=>$request->email,
      'login'=>$request->login,
      'telephone'=>$request->telephone,
      'password'=>$request->password??$admin->password]);
    $admin = Utilisateur::where('slug',$SlugAdmin)->first();
    session()->put('utilisateur',$admin);
    return redirect()->Back()->with('Message','les informations ont bien ete modifiées');
  }


}

?>