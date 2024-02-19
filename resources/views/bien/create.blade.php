@extends('utilisateur.layouts.app')
@section('style')
<link rel="stylesheet" href="{{url("assets_template/plugins/select2/css/select2.min.css")}}">
<link rel="stylesheet" href="{{url("assets_template/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css")}}">
<link rel="stylesheet" href="{{url("assets_template/plugins/dropzone/min/dropzone.min.css")}}">
@endsection
@section('barre')
<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
    <!--begin::Page title-->
    <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
        <!--begin::Title-->
        <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Ajout Bien</h1>
        <!--end::Title-->
        <!--begin::Separator-->
        <span class="h-20px border-gray-200 border-start mx-4"></span>
       
    </div>
    
    
</div>
@endsection
@section('content')
    <div class="col-12">
        <div class="card card-primary">
            {{ Form::open(['url' => 'bien', 'method' => 'POST','enctype'=>'multipart/form-data']) }}
           
            <div class="card-body bg-light justify-content-center">
                {!! Form::token() !!}
                <div class="col-12 d-md-flex mb-5">
                    <div class="form-group col-md-6 me-7">
                        {!! Form::label('nom', 'Nom ',['class'=>'required form-label']) !!}
                        {{ Form::text('nom', old('nom'), ['class' => $errors->has('nom') ? 'is-invalid form-control' : 'form-control']) }}
                        <div class="invalid-feedback">
                            {{ $errors->first('nom') }}
                        </div>
                    </div>
                    <div class="form-group col-md-6 me-7  pe-2">
                        {!! Form::label('id_typeBien', 'Type de bien ' ,['class'=>'required form-label']) !!}
                        {!! Form::select('id_typeBien',$type_biens,null,['class'=>'form-select ', 'data-control'=>'select2', 'data-placeholder'=>'Selectionner un type', 'data-allow-clear'=>'true']) !!}
                        <div class="invalid-feedback">
                            {{ $errors->first('type') }}
                        </div>
                    </div>

                </div>
                <div class="col-12 d-md-flex mb-5">
                    <div class="form-group col-md-3 me-4">
                        {!! Form::label('nombre_piece', 'Nombre de pieces' ,['class'=>'required form-label']) !!}
                        {{ Form::number('nombre_piece', old('nombre_pieces') !== null ? old('nombre_pieces') : '0', ['class' => $errors->has('nombre_pieces') ? 'is-invalid form-control' : 'form-control']) }}
                        <div class="invalid-feedback">
                            {{ $errors->first('nombre_pieces') }}
                        </div>
                    </div>
                    <div class="form-group col-md-3 me-4">
                        {!! Form::label('surface', 'Surface(metre carre)' ,['class'=>'required form-label']) !!}
                        {!! Form::number('surface', old('nombre_pieces') !== null ? old('nombre_pieces') : '0', ['class' => $errors->has('nom') ? 'is-invalid form-control' : 'form-control']) !!}
                        <div class="invalid-feedback">
                            {{ $errors->first('surface') }}
                        </div>
                    </div>
                    <div class="form-group col-md-6 me-4  pe-2">
                        {!! Form::label('adresse', 'Adresse(localisation)' ,['class'=>'required form-label']) !!}
                        {!! Form::text('adresse', old('adresse'), ['class' => $errors->has('nom') ? 'is-invalid form-control' : 'form-control']) !!}
                        <div class="invalid-feedback">
                            {{ $errors->first('adresse') }}
                        </div>
                    </div>
                </div>
                <div class="col-12 d-md-flex mb-5">
                    <div class="form-group col-md-6 me-7">
                        {!! Form::label('pays', 'Pays' ,['class'=>'required form-label']) !!}
                        {!! Form::text('pays', null, ['class' => $errors->has('pays') ? 'is-invalid form-control' : 'form-control']) !!}
                        <div class="invalid-feedback">
                            {{ $errors->first('pays') }}
                        </div>
                    </div>
                    <div class="form-group col-md-6 me-7 pe-2">
                        {!! Form::label('ville', 'Ville ',['class'=>'required form-label'] )!!}
                        {!! Form::text('ville', old('ville'), ['class' => $errors->has('nom') ? 'is-invalid form-control' : 'form-control']) !!}
                        <div class="invalid-feedback">
                            {{ $errors->first('ville') }}
                        </div>
                    </div>
                    

                </div>
                <div class="col-12 d-md-flex mb-5">
                    <div class="form-group col-md-6 me-7">
                        {!! Form::label('code_postal', 'Code Postal') !!}
                        {!! Form::text('code_postal', old('code_postal'), ['class' => $errors->has('code_postal') ? 'is-invalid form-control' : 'form-control']) !!}
                        <div class="invalid-feedback">
                            {{ $errors->first('code_postal') }}
                        </div>
                    </div>
                    <div class="form-group col-md-6 me-7 pe-2 ">
                        {!! Form::label('centre_imposition', 'Centre d\'imposition') !!}
                        {!! Form::text('centre_imposition', null, ['class' => $errors->has('centre_imposition') ? 'is-invalid form-control' : 'form-control']) !!}
                        <div class="invalid-feedback">
                            {{ $errors->first('centre_imposition') }}
                        </div>
                    </div>
                </div>
                <div class="col-12 d-md-flex mb-5">
                    <div class="form-group col-md-3 me-3 ">
                        {!! Form::label('nombre_lot', 'Nombre de lots') !!}
                        {!! Form::number('nombre_lot', old('nombre_lot  ') !== null ? old('nombre_lots') : '0', ['class' => $errors->has('nombre_lots') ? 'is-invalid form-control' : 'form-control']) !!}
                        <div class="invalid-feedback">
                            {{ $errors->first('nombre_lots') }}
                        </div>
                    </div>
                    <div class="form-group col-md-3 me-3 ">
                        {!! Form::label('nombre_batiment', 'Nombre de batiments') !!}
                        {!! Form::number('nombre_batiment', old('nombre_batiment') !== null ? old('nombre_batiments') : '0', ['class' => $errors->has('nombre_batiments') ? 'is-invalid form-control' : 'form-control']) !!}
                        <div class="invalid-feedback">
                            {{ $errors->first('nombre_batiments') }}
                        </div>
                    </div>
                    <div class="form-group col-md-3 me-3 ">
                        {!! Form::label('nombre_etage', 'Nombre d\'etages') !!}
                        {!! Form::number('nombre_etage', old('nombre_etage') !== null ? old('nombre_etages') : '0', ['class' => $errors->has('nombre_etages') ? 'is-invalid form-control' : 'form-control', 'placeholder' => 'Votre mot de passe']) !!}
                        <div class="invalid-feedback">
                            {{ $errors->first('nombre_etages') }}
                        </div>
                    </div>
                    <div class="form-group col-md-3 me-7 pe-2 ">
                        {!! Form::label('nombre_escalier', 'Nombre d\'escalires') !!}
                        {!! Form::number('nombre_escalier', old('nombre_escalier') !== null ? old('nombre_escaliers') : '0', ['class' => $errors->has('nombre_escaliers') ? 'is-invalid form-control' : 'form-control', 'placeholder' => 'Veuillez récrire votre mot de passe']) !!}
                        <div class="invalid-feedback">
                            {{ $errors->first('nombre_escaliers') }}
                        </div>
                    </div>
                </div>
                <div class="col-12 d-md-flex mb-5">
                    <div class="form-group col-md-6 me-7">
                        {!! Form::label('numero_porte', 'Numero de porte') !!}
                        {{ Form::number('numero_porte', old('nombre_porte') !== null ? old('nombre_portes') : '0', ['class' => $errors->has('nombre_portes') ? 'is-invalid form-control' : 'form-control']) }}
                        <div class="invalid-feedback">
                            {{ $errors->first('nombre_portes') }}
                        </div>
                    </div>
                </div>
                <div class="col-12 d-md-flex mb-5">
                    <div class="form-check form-switch form-check-custom form-check-solid justify-content-between">
                        {!! Form::label('zone_stationnement', 'Zone de stationement') !!}
                        {!! Form::checkbox('zone_stationnement', null, 'zone_stationnement', ['class' => 'form-check-input h-25px w-35px me-10 ms-15']) !!}
                        <div class="invalid-feedback">
                            {{ $errors->first('zone_stationement') }}
                        </div>
                    </div>
                    <div class="form-check form-switch form-check-custom form-check-solid justify-content-between">
                        {!! Form::label('garage', 'Garage') !!}
                        {!! Form::checkbox('garage', null, 'garage', ['class' => 'form-check-input h-25px w-35px me-10 ms-15']) !!}
                        
                        <div class="invalid-feedback">
                            {{ $errors->first('garage') }}
                        </div>
                    </div>
                    <div class="form-check form-switch form-check-custom form-check-solid justify-content-between">
                        {!! Form::label('cave', 'Cave') !!}
                        {!! Form::checkbox('cave', null, 'cave', ['class' => 'form-check-input h-25px w-35px me-10 ms-15']) !!}
                        <div class="invalid-feedback">
                            {{ $errors->first('cave') }}
                        </div>
                    </div>                  
                    <div class="form-check form-switch form-check-custom form-check-solid justify-content-between">
                        {!! Form::label('gardiennage', 'Gardinage') !!}
                        {!! Form::checkbox('gardiennage', null, 'gardiennage', ['class' => 'form-check-input h-25px w-35px me-10 ms-15']) !!}
                        <div class="invalid-feedback">
                            {{ $errors->first('gardiennage') }}
                        </div>
                    </div>
                    <div class="form-check form-switch form-check-custom form-check-solid justify-content-between">
                        {!! Form::label('interphone', 'Interphone') !!}
                        {!! Form::checkbox('interphone', null, 'interphone', ['class' => 'form-check-input h-25px w-35px me-10 ms-15']) !!}
                        <div class="invalid-feedback">
                            {{ $errors->first('interphone') }}
                        </div>
                    </div>
                    <div class="form-check form-switch form-check-custom form-check-solid justify-content-between">
                        {!! Form::label('ascenseur', 'Ascenseur') !!}
                        {!! Form::checkbox('ascenseur', null, 'ascenseur', ['class' => 'form-check-input h-25px w-35px me-10 ms-15']) !!}
                        <div class="invalid-feedback">
                            {{ $errors->first('ascenseur') }}
                        </div>
                    </div>
                </div>
                <div class="col-12 d-md-flex mb-5">
                    
                    <div class="form-check form-switch form-check-custom form-check-solid justify-content-between me-5">
                        {!! Form::label('vide_ordure', 'Vide ordures', ['class' =>  'col-6']) !!}
                        {!! Form::checkbox('vide_ordure', null, 'vide_ordure', ['class' => 'form-check-input h-25px w-35px me-10 ms-15']) !!}
                        <div class="invalid-feedback">
                            {{ $errors->first('vide_ordure') }}
                        </div>
                    </div>
                    <div class="form-check form-switch form-check-custom form-check-solid justify-content-between me-5">
                        {!! Form::label('espaces_vert', 'Espace verts', ['class' =>  'col-6']) !!}
                        {!! Form::checkbox('espaces_vert', null, 'espaces_vert', ['class' => 'form-check-input h-25px w-35px me-10 ms-15']) !!}
                        <div class="invalid-feedback">
                            {{ $errors->first('espace_verts') }}
                        </div>
                    </div>
                    <div class="form-check form-switch form-check-custom form-check-solid justify-content-between">
                        {!! Form::label('chauffage_collectif', 'Chauffage collectif') !!}
                        {!! Form::checkbox('chauffage_collectif', null,'chauffage_collectif', ['class' => 'form-check-input h-25px w-35px me-10 ms-15']) !!}
                        <div class="invalid-feedback">
                            {{ $errors->first('chauffage_collectif') }}
                        </div>
                    </div>
                    <div class="form-check form-switch form-check-custom form-check-solid justify-content-between">
                        {!! Form::label('eau_chaude_collective', 'Eau chaude collective') !!}
                        {!! Form::checkbox('eau_chaude_collective', null, 'eau_chaude_collective', ['class' => 'form-check-input h-25px w-35px me-10 ms-15']) !!}
                        <div class="invalid-feedback">
                            {{ $errors->first('eau_chaude_collective') }}
                        </div>
                    </div>
                    <div class="form-check form-switch form-check-custom form-check-solid justify-content-between">
                        {!! Form::label('antenne_tv_collective', 'Antenne TV collective') !!}
                        {!! Form::checkbox('antenne_tv_collective', null, 'antenne_tv_collective', ['class' => 'form-check-input h-25px w-35px me-10 ms-15']) !!}
                        <div class="invalid-feedback">
                            {{ $errors->first('antenne_tv_collective') }}
                        </div>
                    </div>
                </div>
                <div class="col-12 d-flex mb-5">
                    <div class="form-group col-md-6 me-7">
                        {!! Form::label('autre_elements_collectif', 'Autres elements collectif') !!}
                        {!! Form::text('autre_elements_collectif', old('autre_elements_collectif'), ['class' => $errors->has('nom') ? 'is-invalid form-control' : 'form-control',]) !!}
                        <div class="invalid-feedback">
                            {{ $errors->first('autre_elements_collectif') }}
                        </div>
                    </div>
                    <div class="form-group col-md-6 me-7 pe-2">
                        {!! Form::label('autres_dependance', 'Autres dependence') !!}
                        {{ Form::text('autres_dependance', old('autres_dependance'), ['class' => $errors->has('autre_dependance') ? 'is-invalid form-control' : 'form-control',]) }}
                        <div class="invalid-feedback">
                            {{ $errors->first('autre_dependance') }}
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group px-2">
                        {!! Form::label('description', 'Description') !!}
                        {!! Form::textarea('description', old('description'), ['class' => $errors->has('nom') ? 'is-invalid form-control' : 'form-control', 'placeholder' => 'Decrivez votre bien en quelques lignes']) !!}
                        <div class="invalid-feedback">
                            {{ $errors->first('description') }}
                        </div>
                    </div>
                </div>
            
            <div class="col-12 d-flex justify-content-center mb-3 pt-5" >
                <div class="rounded p-2 col-11 border zone-larguage fileinput-button overflow-auto align-items-center text-center ">
                  <div id="images" class="col-12 d-flex flex-wrap justify-content-around" >
                  </div>
                  <input type="file" name="pictures[]" multiple id="photos" style="cursor:pointer;opacity:0;position:absolute;left:40%"> 

                  <i class="fas fa-plus"></i> Ajouter une photo 

                </div>
            </div>
        </div>
            <div class="card-footer d-flex justify-content-end">
                {!! Form::submit('Inscrire', ['class' => 'btn btn-primary']) !!}
                {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
            </div>
            {{ Form::close() }}
        </div>
    </div>
@endsection
@section('script')
<script src="{{url("assets_template/plugins/bootstrap-switch/js/bootstrap-switch.min.js")}}"></script>
<script src="{{url("assets_template/plugins/select2/js/select2.full.min.js")}}"></script>
<script src="{{url("assets_template/plugins/dropzone/min/dropzone.min.js")}}"></script>


    <script>
        
        $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
      
    })
    $(".switch").addClass("d-flex justify-content-between");
    $(".switch").addClass("pr-4");
    $('.select2').select2();

    $('#photos').change(function() {
    for (index = 0; index < this.files.length; index++) {
        $("#images").append('<div class="col-3 d-flex flex-column align-items-center justify-content-center py-2 border rounded m-2"><i class="far fa-times-circle remove-picture" style="font-size: 225%;position: absolute;top: -10px;right: -10px;background-color: white;color: #aeaeae;cursor: pointer;" :hover="color:red"></i> <img src="'+window.URL.createObjectURL(this.files[index])+'" id="img'+index+'" alt="" width="100px">'+this.files[index].name+'</div>');
        
    }
    
    
    $(".remove-picture").on('click',function (photos) {
        $(this).parent().remove();
        document.getElementById('photos').files=null;
        
    })
    });
    $(document).ready(function () {
        $('input[type=checkbox]').attr('style','background-color:rgb(176, 191, 236)!important');  
    }) 
   
        
    $('input[type=checkbox]').on('click',function () {
        console.log('ghgvghvg')
            if ($(this).prop('checked')) {
                $(this).attr('style','background-color:slategray!important');
            }else{
                $(this).attr('style','background-color:rgb(176, 191, 236)!important');
            }
        })
   


    // DropzoneJS Demo Code Start
 
    </script>
@endsection