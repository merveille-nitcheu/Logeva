<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\location;
use App\Bien;
use App\PeriodePaiement;
use App\MoyenPaiement;
use App\Locataire;
use App\LocataireBien;

class LocationController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index($SlugBien)
  {  $bien = Bien::where('slug',$SlugBien)->first();
     $location = Location::where('id_bien',$bien->id)->first();
     $periodePaiement = PeriodePaiement::pluck('libelle','id');
     $moyenPaiement = MoyenPaiement::pluck('libelle','id');
     $locataire = Locataire::pluck('nom','id');
     $locataireBiens = LocataireBien::where('id_location',$location->id)->get();
     return view('proprietaire.biens.contrat',compact('location','moyenPaiement','periodePaiement','locataire','locataireBiens'));
  }

  public function updateLoc($SlugBien,Request $request)
  {
    
      $bien = Bien::where('slug',$SlugBien)->first();
      $location = Location::where('id_bien',$bien->id)->first(); 
      $location->update(array_merge($request->all(), ['valider_automatiquement_paiement'=>$request->valider_automatiquement_paiement??'non','envoyer_automatiquement_cheance'=>$request->envoyer_automatiquement_cheance??'non','envoyer_automatiquement_quittance'=>$request->envoyer_automatiquement_quittance??'non','rappeler_automatiquement_revision_loyer'=>$request->rappeler_automatiquement_revision_loyer??'non']));
      return redirect()->Back()->with('Message','le contrat a bien ete modifié');
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
    $location = $request->except('_token');
    $data = Location::firstOrCreate($location);
    return redirect()->Back()->with('Message','Le contrat a bien été crée');
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
  public function update($id, Request $request)
  {
    $location = Location::findOrFail($id);
    //dd($request->envoyer_automatiquement_cheance);
    $location->update($request->all());
     return redirect()->Back()->with('Message','le contrat de bail a bien été modifié avec succes');
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
  public function assignerloc($SlugBien,Request $request)
  {   
     $bien = Bien::where('slug',$SlugBien)->first();
     $location = Location::where('id_bien',$bien->id)->first();
     LocataireBien::firstOrCreate([
       'id_locataire'=> $request->id_locataire,
        'id_location'=> $location->id,]);
     return redirect()->Back()->with('Message','le contrat a bien été assigné');
  }
  public function ajoutloc($SlugBien,Request $request)
  {  
     $bien = Bien::where('slug',$SlugBien)->first();
     $location = Location::where('id_bien',$bien->id)->first();
     $locataire = Locataire::firstOrCreate([
      'nom'=> $request->nom,
      'email'=> $request->email,
      'login'=> $request->login,
      'telephone'=> $request->telephone,
      'password'=> Hash::make('12345678'),
      'etat'=> 0,
      ]);
     LocataireBien::firstOrCreate([
       'id_locataire'=> $locataire->id,
        'id_location'=> $location->id,]);
     return redirect()->Back()->with('Message','le contrat a bien été assigné');
  }
  public function supplocB($idloc)
  {  
    $locataire = Locataire::where('id',$idloc)->first();
    $locataireBien = LocataireBien::where('id_locataire',$locataire->id)->delete();   
     return redirect()->Back()->with('Message','l assignation a bien été supprimée');
  }
 
  
}

?>