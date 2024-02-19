<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Proprietaire\storeProprietaireRequest;
use App\Locataire;
use App\LocataireBien;
use App\Location;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Validator;

class LocataireController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  { 
    $locataires= Locataire::orderByDesc('id')->get();
    return view("utilisateur.locataire.index",compact('locataires'));
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
  public function store(storeProprietaireRequest $request)
  {
     
      $data = $request->except('_token','password_confirmation');
      $data['slug']=str_replace('.','',str_replace(' ','',$data['nom'].$data['email']));
      $data['password'] = Hash::make($data['password']);
      Locataire::firstOrCreate($data);
      return redirect(route('locataire.index'))->with("Message","Votre compte a ete cree avec succes");
    
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
  
  public function dashboard(){

    return view('locataire.dashboard');
  }

  public function ajoutloc(storeProprietaireRequest $request)
  {
     
      $data = $request->except('_token','password_confirmation');
      $data['password'] = ('12345678');
      Locataire::firstOrCreate($data);
      return redirect()->Back()->with("Message","Le locataire a bien été cree avec succes");
    
  }
  public function afficherbienlocat()
  {  
    if(LocataireBien::where('id_locataire',session('utilisateur')->id)->exists())
    {
         $locataireBien = LocataireBien::where('id_locataire',session('utilisateur')->id)->first();
         $location = Location::where('id',$locataireBien->id_location)->first();
          return view('locataire.index',compact('location'));

        

    }
      return view('proprietaire.dashboard');
     
    
  }


  public function deactivateloc($slugLoc)
  {

    $locataire = Locataire::where('slug',$slugLoc)->first();
    if( $locataire->etat = 1){
      $locataire->etat = 0;
    }else{
      $locataire->etat = 1;
    }
    $locataire->save();
    return redirect()->Back()->with('Message','Le locataire a bien été desactivé');
  }
    public function resetpasswordloc($slugLoc)
  {
    $locataire = Locataire::where('slug',$slugLoc)->first();
    $locataire->password = "12345678";
    $locataire->save();
    return redirect()->Back()->with('Message','Le mot de passe du locataire a bien été reinitialisé');
  }


  public function supprimerloc($slugLoc)
 {
  $locataire = Locataire::where('slug',$slugLoc)->delete();
  return redirect()->Back()->with('Message','Le locataire a bien été supprimé');
    
}

}

?>