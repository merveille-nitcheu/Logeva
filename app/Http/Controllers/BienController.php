<?php 

namespace App\Http\Controllers;

use App\Http\Requests\bien\storeBienRequest;
use App\Bien;
use App\Galerie;
use App\TypeBien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class BienController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $biens = Bien::orderByDesc('id')->get();
    return view('bien.index',compact('biens'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    $type_biens = TypeBien::pluck('libelle','id');
    return view('bien.create',compact('type_biens'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(storeBienRequest $request)
  {
    
    $bien = $request->except('_token','pictures');
       
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
    
    
    return Redirect('/bien');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    $bien = Bien::findSlug($id);
    return view('bien.show',compact('bien'));
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $typeBien = TypeBien::pluck('libelle','id');
    $bien = Bien::findSlug($id);
    return view('bien.edit',compact('bien','typeBien'));

  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id , storeBienRequest $request)
  {
    
    $bien = Bien::findSlug($id);
    $bien->update($request->all());
    $pictures = request("pictures");
    if($pictures!=[]){
    foreach ($pictures as $picture) {
      Galerie::create([
        'slug'=>Str::random(10),
        'id_bien'=>$bien->id,
        'photo'=>$picture->store('photos_biens','public'),
      ]);
      
    }
  }
  return redirect('/bien/'.$bien->slug)->with('Message','le bien a été modifié avec succes');
    

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
    $bien = Bien::findOrFail($id);
    Bien::destroy($bien->id);
    return redirect('/bien')->with('Message','Le Bien a bien été supprimé');
  }
  
}

?>