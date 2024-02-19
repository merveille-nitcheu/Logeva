<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Proprietaire\storeProprietaireRequest;
use App\Proprietaire;
use App\Bien;
use App\Location;
use App\Locataire;
use App\LocataireBien;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Validator;
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
    return view("utilisateur.proprietaire.index",compact('proprietaires'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view("utilisateur.proprietaire.create");
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(storeProprietaireRequest $request)
  {
      $data = $request->except('_token','password_confirmation');
      
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
    $proprietaire->password = "12345678";
    $proprietaire->save();
    return redirect()->Back()->with('Message','Le mot de passe du proprietaire a bien été reinitialisé');
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
    return redirect()->Back()->with('Message','Le proprietaire a bien été desactivé');
  }




 public function dashboard()
       
  {
    return view('proprietaire.dashboard');
    
}
public function stockerbienprop(Request $request)
  {
    $bien = ['id_proprietaire'=> session('utilisateur')->id];
    $bien += $request->except('_token','pictures');
       
    $data = Bien::firstOrCreate($bien);
    $pictures = request("pictures");
    if($pictures!=[]){
    foreach ($pictures as $picture) {
      Galerie::create([
        'slug'=>Str::random(10),
        'id_bien'=>$data->id,
        'photo'=>$picture->store('photos_biens','public'),
      ]);
      
    }


  }

    $proprietaire = Proprietaire::find(session('utilisateur')->id);
    session()->put('utilisateur',$proprietaire);
    
    
    return Redirect(route('afficherbienprop'));
}


public function afficherbienprop(){

 return view('proprietaire.biens.index');

}
public function afficherlocprop(){
    
$locataires = Locataire::whereHas('locataireBien.location.bien',function($query){
    $query->where('id_proprietaire',session('utilisateur')->id);
})->get();
 return view('proprietaire.locataire.index',compact('locataires'));

//   $locataireBien = array();
//   $i=0;
//   foreach(session('utilisateur')->bien as $bien){
//        foreach($bien->location as $location){
//           $locataireBien[$i]= LocataireBien::where('id_location',$location->id)->get(); 
//      $i++;      
//   }
     
// }
//  dd(Collect($locataireBien[0][0]->locataire));
   

}
 public function show1($id)
  {
    $bien = Bien::findSlug($id);
    return view('proprietaire.bien.show',compact('bien'));
    
  }
 public function valuescheck($mot )

{
   
 }
} 





?>