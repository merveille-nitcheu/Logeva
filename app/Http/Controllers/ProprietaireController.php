<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Proprietaire\storeProprietaireRequest;
use App\Proprietaire;
use Illuminate\Support\Facades\Hash;

class ProprietaireController extends Controller 
{
/**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $proprietaires = Proprietaire::orderByDesc('id')->get();
    return view("proprietaire.index",compact('proprietaires'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view("proprietaire.create");
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
      Proprietaire::firstOrCreate($data);
       // dd($request);
       //Proprietaire::firstOrCreate(['slug'=>"merveille",'nom'=>$request->nom,'email'=>$request->email,'password'=>Hash::make($request->password),'login'=>$request->login,'nickname'=>$request->nickname]);
      return redirect('/proprietaire')->with("Message","Votre compte a ete cree avec succes");
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
    $proprietaire = Proprietaire::findOrFail($id);
    Proprietaire::destroy($proprietaire->id);
    return redirect()->Back()->with('Message','Le proprietaire a bien été supprimé');
  }  
  
  public function reset($id)

  {
    $proprietaire = Proprietaire::findOrFail($id);
    $proprietaire->password = $proprietaire->email.$proprietaire->login;
    $proprietaire->save();
    return redirect('/proprietaire')->with('Message','Le mot de passe du proprietaire a bien été reinitialisé');
  }
   
   public function deactivate($id)
  {
    $proprietaire = Proprietaire::findOrFail($id);
    if( $proprietaire->etat = "actif"){
      $proprietaire->etat = "inactif";
    }else{
      $proprietaire->etat = "actif";
    }
    $proprietaire->save();
    return redirect('/proprietaire')->with('Message','Le proprietaire a bien été desactivé');
  }
}
  




?>