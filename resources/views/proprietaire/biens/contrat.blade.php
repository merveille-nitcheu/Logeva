@extends('proprietaire.layouts.app')
@section('style')
<link href="{{url('assets_template/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="{{url("assets_template/plugins/select2/css/select2.min.css")}}">
<link rel="stylesheet" href="{{url("assets_template/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css")}}">
<link href="{{url('assets_template/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{url('assets_template/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css"/>
@endsection
@section('barre')
<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
    <!--begin::Page title-->
    <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
        <!--begin::Title-->
        <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1"></h1>
        <!--end::Title-->
        <!--begin::Separator-->
        <span class="h-20px border-gray-200 border-start mx-4"></span>

    </div>

        

</div>
@endsection
@section('content')
<div class="card mt-5 mt-xxl-8">
  
    <div class="card-header card-header-stretch">
                   
        <div class="card-title d-flex align-items-center">
                        
          <h3 class="fw-bolder m-0 text-gray-800">Contrat de Bail du bien  {{$location->bien->nom}}
          </h3>
        </div>
        <div class="card-toolbar m-0">
          <ul class="nav nav-tabs nav-line-tabs nav-stretch fs-6 border-0 fw-bolder">
                        <li class="nav-item">
                          <a class="nav-link justify-content-center text-active-gray-800 active" data-bs-toggle="tab"  href="#afficher_contrat">Afficher</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link justify-content-center text-active-gray-800" data-bs-toggle="tab" href="#modifier_contrat">Modifier</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link justify-content-center text-active-gray-800" data-bs-toggle="tab" href="#affecter_loc">Assigner Loc</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link justify-content-center text-active-gray-800" data-bs-toggle="tab" href="#supprimer_cont">Locataires</a>
                        </li>
          </ul>
        </div> 
    </div>              
    <div class="card-body">
                    
        <div class="tab-content">
            <div class="card-body p-0 tab-pane fade show active" id="afficher_contrat" role="tabpanel">
                <div class="timeline">
                     <div class="timeline-item">
                          <div class="timeline-line w-40px"></div>
                          <div class="timeline-icon symbol symbol-circle symbol-40px me-4">
                              <div class="symbol-label bg-light">
                                <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)"></path>
                                    <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                  </svg>
                                </span>
                                
                              </div>
                          </div>
                          <div class="timeline-content mb-10 mt-n1">
                              <div class="pe-3 mb-5">
                                <div class="fs-3 fw-bold mb-2">Informations Obligatoires</div>
                              </div>
                              <div class="overflow-auto pb-5">
                                <div class="col-12 d-md-flex align-items-center border border-dashed    border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                                   <div class="col-xl-3  pe-3">
                                       <div class="fs-5 text-dark fw-bold w-375px min-w-200px"> Periode de paiement</div>
                                       <div class="d-flex align-items-center mt-1 fs-6">
                                         <div class="text-muted me-2 fs-5">{{$location->periodePaiement->libelle}}</div>
                                       </div>   
                                   </div>
                                   <div class="col-xl-3  pe-3">
                                       <div class="fs-5 text-dark fw-bold w-375px min-w-200px"> Moyen de paiement</div>
                                       <div class="d-flex align-items-center mt-1 fs-6">
                                         <div class="text-muted me-2 fs-5">{{$location->moyenPaiement->libelle}}</div>
                                       </div>   
                                   </div>
                                   <div class="col-xl-3 me-4  ms-6">
                                       <div class="fs-5 text-dark fw-bold w-375px min-w-200px"> Date de debut</div>
                                       <div class="d-flex align-items-center mt-1 fs-6">
                                         <div class="text-muted me-2 fs-5">{{$location->date_debut}}</div>
                                       </div>   
                                   </div>
                                 
                                    <div class="col-xl-3 me-4  pe-3">
                                       <div class="fs-5 text-dark fw-bold w-375px min-w-200px"> Clause de revision du loyer</div>
                                       <div class="d-flex align-items-center mt-1 fs-6">
                                         <div class="text-muted me-2 fs-5">{{$location->clause_revision_loyer}}</div>
                                       </div>   
                                   </div>
                                </div>
                                <div class="col-12 d-md-flex align-items-center border border-dashed    border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                                   <div class="col-xl-3 me-4 pe-3">
                                       <div class="fs-5 text-dark fw-bold w-375px min-w-200px"> Indice de reference</div>
                                       <div class="d-flex align-items-center mt-1 fs-6">
                                         <div class="text-muted me-2 fs-5">{{$location->indice_reference}}</div>
                                       </div>   
                                   </div>
                                   <div class="col-xl-3 me-4 pe-3">
                                       <div class="fs-5 text-dark fw-bold w-375px min-w-200px"> Description du bail</div>
                                       <div class="d-flex align-items-center mt-1 fs-6">
                                         <div class="text-muted me-2 fs-5">{{$location->description_bail}}</div>
                                       </div>   
                                   </div>
                                   <div class="col-xl-3 me-4 ms-6">
                                       <div class="fs-5 text-dark fw-bold w-375px min-w-200px"> Clause particuliere</div>
                                       <div class="d-flex align-items-center mt-1 fs-6">
                                         <div class="text-muted me-2 fs-5">{{$location->clause_particuliere}}</div>
                                       </div>   
                                   </div>
                                 
                                    <div class="col-xl-3 me-4 pe-3">
                                       <div class="fs-5 text-dark fw-bold w-375px min-w-200px"> Garant solidaire</div>
                                       <div class="d-flex align-items-center mt-1 fs-6">
                                         <div class="text-muted me-2 fs-5">{{$location->garant_solidaire}}</div>
                                       </div>   
                                   </div>
                                </div>
                                <div class="col-12 d-md-flex align-items-center border border-dashed    border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                                   <div class="col-xl-3.5 me-4 overflow-auto ms-6">
                                       <div class="fs-5 text-dark fw-bold w-375px min-w-200px"> Type de charge</div>
                                       <div class="d-flex align-items-center mt-1 fs-6">
                                         <div class="text-muted me-2 fs-5">{{$location->type_charge}}</div>
                                       </div>   
                                   </div>
                                 
                                    <div class="col-xl-3.5 me-4 overflow-auto pe-3">
                                       <div class="fs-5 text-dark fw-bold w-375px min-w-200px"> Loyer initial</div>
                                       <div class="d-flex align-items-center mt-1 fs-6">
                                         <div class="text-muted me-2 fs-5">{{$location->loyer_initial}}</div>
                                       </div>   
                                   </div>
                                   <div class="col-xl-3.5 me-4 overflow-auto pe-3">
                                       <div class="fs-5 text-dark fw-bold w-375px min-w-200px"> Jour de paiement</div>
                                       <div class="d-flex align-items-center mt-1 fs-6">
                                         <div class="text-muted me-2 fs-5">{{$location->jour_paiement}}</div>
                                       </div>   
                                   </div>
                                   <div class="col-xl-3.5 me-4 overflow-auto pe-3">
                                       <div class="fs-5 text-dark fw-bold w-375px min-w-200px"> Duree</div>
                                       <div class="d-flex align-items-center mt-1 fs-6">
                                         <div class="text-muted me-2 fs-5">{{$location->duree}}</div>
                                       </div>   
                                   </div>
                                   <div class="col-xl-3.5 me-4 overflow-auto pe-3">
                                       <div class="fs-5 text-dark fw-bold w-375px min-w-200px"> Charge</div>
                                       <div class="d-flex align-items-center mt-1 fs-6">
                                         <div class="text-muted me-2 fs-5">{{$location->charge}}</div>
                                       </div>   
                                   </div>
                                </div>
                                
                              </div>
                              
                            </div>
                           
                          </div>
                     <div class="timeline-item">
                          <div class="timeline-line w-40px"></div>
                          <div class="timeline-icon symbol symbol-circle symbol-40px">
                             <div class="symbol-label bg-light">
                                <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)"></path>
                                    <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                  </svg>
                                </span>
                             </div>
                          </div>
                          <div class="timeline-content mb-10 mt-n2">
                              <div class="pe-3 mb-5">
                                <div class="fs-3 fw-bold mb-2">Informations Facultatives</div>
                              </div>
                              <div class="overflow-auto pb-5">
                                <div class="col-12 d-md-flex align-items-center border border-dashed    border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                                   <div class="col-xl-6 me-4 overflow-auto pe-3">
                                       <div class="fs-5 text-dark fw-bold w-375px min-w-200px"> Valider automatiquement le paiement</div>
                                       <div class="d-flex align-items-center mt-1 fs-6">
                                         <div class="text-muted me-2 fs-5">{{$location->valider_automatiquement_paiement}}</div>
                                       </div>   
                                   </div>
                                   <div class="col-xl-6 me-4 overflow-auto pe-3">
                                       <div class="fs-5 text-dark fw-bold w-375px min-w-200px"> Envoyer automatiquement echeance</div>
                                       <div class="d-flex align-items-center mt-1 fs-6">
                                         <div class="text-muted me-2 fs-5">{{$location->envoyer_automatiquement_cheance}}</div>
                                       </div>   
                                   </div>
                                </div>
                                <div class="col-12 d-md-flex align-items-center border border-dashed    border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                                   <div class="col-xl-6 me-4 overflow-auto ">
                                       <div class="fs-5 text-dark fw-bold w-375px min-w-200px"> Envoyer automatiquement quittance</div>
                                       <div class="d-flex align-items-center mt-1 fs-6">
                                         <div class="text-muted me-2 fs-5">{{$location->envoyer_automatiquement_quittance}}</div>
                                       </div>   
                                   </div>
                                 
                                    <div class="col-xl-6 me-4 overflow-auto pe-3">
                                       <div class="fs-5 text-dark fw-bold w-375px min-w-200px"> Rappeler automatiquement la revision du loyer</div>
                                       <div class="d-flex align-items-center mt-1 fs-6">
                                         <div class="text-muted me-2 fs-5">{{$location->rappeler_automatiquement_revision_loyer}}</div>
                                       </div>   
                                   </div>
                                </div>
                              </div>
                          </div>
                      </div>
                      <div class="timeline-item">
                          <div class="timeline-line w-40px"></div>
                          
                      </div>
                            
                </div>
            </div>
            <div class="card-body p-0 tab-pane fade" id="modifier_contrat"  role="tabpanel">
                      {{ Form::open(['url' => route('modifierloc',$location->bien->slug), 'method' => 'PUT','enctype'=>'multipart/form-data']) }}
                       {!! Form::hidden('id_bien',$location->bien->id ) !!}
                           
                      
                            <div class="row fv-row mb-7 fv-plugins-icon-container">
                               <div class="col-12 d-md-flex">
                                <div class="col-xl-6 me-4"> 
                                 
                    {!! Form::label('id_periodePaiement','Periode de payement' ,['class'=>'required form-label', 'form-label'=>' form-label fs-6 fw-bolder text-dark']) !!}
                     {!! Form::select('id_periodePaiement',$periodePaiement,$location->periodePaiement->id,['class'=>'form-select ', 'data-control'=>'select2', 'data-placeholder'=>'Selectionner une periode de paiement', 'data-allow-clear'=>'true']) !!}
                        <div class="invalid-feedback">
                            {{ $errors->first('periodePaiement') }}
                        </div>
                        </div> 
                          <div class="col-xl-6"> 
                                 
                     {!! Form::label('id_moyenPaiement','Moyen de paiement' ,['class'=>'required form-label', 'form-label'=>' form-label fs-6 fw-bolder text-dark ']) !!}
                     {!! Form::select('id_moyenPaiement',$moyenPaiement,$location->moyenPaiement->id,['class'=>'form-select ', 'data-control'=>'select2', 'data-placeholder'=>'Selectionner un moyen de paiement', 'data-allow-clear'=>'true']) !!}
                        <div class="invalid-feedback">
                            {{ $errors->first('moyenPaiement') }}
                        </div>
                        </div> 
                        </div>
                      </div> 
                      <div class="row fv-row mb-7 fv-plugins-icon-container">
                               <div class="col-12 d-md-flex">
                                <div class="col-xl-6 me-4"> 
                    {!! Form::label('duree','Durée' ,['class'=>'required form-label', 'form-label'=>' form-label fs-6 fw-bolder text-dark']) !!}
                    {!! Form::text ('duree',$location->duree,['class'=>$errors->has('nom') ? 'is-invalid form-control' : 'form-control form-control-lg form-control-solid inputform']) !!}
                        <div class="invalid-feedback">
                            {{$errors->first('durée')}}
                        </div>  
                        </div> 
                          <div class="col-xl-6"> 
                     {!! Form::label('loyer_initial','Loyer initial' ,['class'=>'required form-label', 'form-label'=>' form-label fs-6 fw-bolder text-dark']) !!}
                       {!! Form::number ('loyer_initial',$location->loyer_initial,['class'=>$errors->has('nom') ? 'is-invalid form-control' : 'form-control form-control-lg form-control-solid inputform']) !!}
                        <div class="invalid-feedback">
                            {{$errors->first('loyer_initial')}}
                        </div>
                        </div> 
                        </div>
                      </div> 
                      
                      <div class="row fv-row mb-7 fv-plugins-icon-container">
                               <div class="col-12 d-md-flex">
                                <div class="col-xl-6 me-4">  
                      {!! Form::label('charge','Charge' ,['class'=>'required form-label', 'form-label'=>' form-label fs-6 fw-bolder text-dark']) !!} 
                     {!! Form::text ('charge',$location->charge,['class'=>$errors->has('nom') ? 'is-invalid form-control' : 'form-control form-control-lg form-control-solid inputform']) !!}
                        <div class="invalid-feedback">
                            {{$errors->first('charge')}}
                        </div> 
                        </div> 
                          <div class="col-xl-6">  
                    {!! Form::label('type_charge','Type de charge' ,['class'=>'required form-label', 'form-label'=>' form-label fs-6 fw-bolder text-dark']) !!}
                      {!! Form::text ('type_charge',$location->type_charge,['class'=>$errors->has('nom') ? 'is-invalid form-control' : 'form-control form-control-lg form-control-solid inputform']) !!}
                        <div class="invalid-feedback">
                            {{$errors->first('nom')}}
                        </div>
                        </div> 
                        </div>
                      </div> 
                      
                         <div class="row fv-row mb-7 fv-plugins-icon-container">
                               <div class="col-12 d-md-flex">
                               <div class="col-xl-6 me-4"> 
                     {!! Form::label('date_debut','Date de debut' ,['class'=>'required form-label', 'form-label'=>' form-label fs-6 fw-bolder text-dark']) !!}
                    {!! Form::date ('date_debut',$location->date_debut,['class'=>$errors->has('nom') ? 'is-invalid form-control' : 'form-control form-control-lg form-control-solid inputform']) !!}
                        <div class="invalid-feedback">
                            {{$errors->first('date_debut')}}
                        </div>
                        </div> 
                          <div class="col-xl-6">  
                    {!! Form::label('jour_paiement','Jour du mois de paiement' ,['class'=>'required form-label', 'form-label'=>' form-label fs-6 fw-bolder text-dark']) !!}
                    {!! Form::number('jour_paiement',$location->jour_paiement,['min'=>1,'max'=>31,'class'=>$errors->has('nom') ? 'is-invalid form-control' : 'form-control form-control-lg form-control-solid inputform']) !!}
                        <div class="invalid-feedback">
                            {{$errors->first('jour_paiement')}}
                        </div>
                        </div> 
                        </div>
                      </div> 
                      
                        
                       <div class="row fv-row mb-7 fv-plugins-icon-container">
                               <div class="col-12 d-md-flex">
                                <div class="col-xl-6 me-4">   
                    {!! Form::label('clause_revision_loyer','Clause de revision du loyer' ,['class'=>'required form-label', 'form-label'=>' form-label fs-6 fw-bolder text-dark']) !!}
                   {!! Form::text ('clause_revision_loyer',$location->clause_revision_loyer,['class'=>$errors->has('clause_revision_loyer') ? 'is-invalid form-control' : 'form-control form-control-lg form-control-solid inputform']) !!}
                        <div class="invalid-feedback">
                            {{$errors->first('clause_revision_loyer')}}
                        </div>

                        </div> 
                          <div class="col-xl-6 me-4">  
                    {!! Form::label('indice_reference','Indice de reference' ,['class'=>'required form-label', 'form-label'=>' form-label fs-6 fw-bolder text-dark']) !!}
                     {!! Form::text ('indice_reference',$location->indice_reference,['class'=>$errors->has('nom') ? 'is-invalid form-control' : 'form-control form-control-lg form-control-solid inputform']) !!}
                        <div class="invalid-feedback">
                            {{$errors->first('indice_reference')}}
                        </div>
                        </div> 
                        </div>
                      </div> 
                      
                      <div class="row fv-row mb-7 fv-plugins-icon-container">
                               <div class="col-12 d-md-flex me-2">
                               <div class="col-xl-6 me-4"> 
                   {!! Form::label('description_bail','Description du bail' ,['class'=>'required form-label', 'form-label'=>' form-label fs-6 fw-bolder text-dark']) !!}
                  {!! Form::text ('description_bail',$location->description_bail,['class'=>$errors->has('description_bail') ? 'is-invalid form-control' : 'form-control form-control-lg form-control-solid inputform']) !!}
                        <div class="invalid-feedback">
                            {{$errors->first('description_bail')}}
                        </div>

                        </div> 
                        
                          <div class="col-xl-6 me-6">  
                  {!! Form::label('clause_particuliere','Clause particuliere' ,['class'=>'required form-label', 'form-label'=>' form-label fs-6 fw-bolder text-dark']) !!}      
                  {!! Form::text ('clause_particuliere',$location->clause_particuliere,['class'=>$errors->has('description_bail') ? 'is-invalid form-control' : 'form-control form-control-lg form-control-solid inputform']) !!}
                        <div class="invalid-feedback">
                            {{$errors->first('clause_particuliere')}}
                        </div>
                        </div> 
                        </div>
                      </div> 


                         <div class="row fv-row mb-7 fv-plugins-icon-container">
                               <div class="col-12 d-md-flex me-2">
                               <div class="col-xl-6 me-4"> 
                   {!! Form::label('garant_solidaire','Garant solidaire',['class'=>'required form-label', 'form-label'=>' form-label fs-6 fw-bolder text-dark']) !!}
                  {!! Form::text ('garant_solidaire',$location->garant_solidaire,['class'=>$errors->has('description_bail') ? 'is-invalid form-control' : 'form-control form-control-lg form-control-solid inputform']) !!}
                        <div class="invalid-feedback">
                            {{$errors->first('garant_solidaire')}}
                        </div>

                        </div> 
                        
                          
                        </div>
                      </div>

                      
                    


                         
                          <div class="fv-row mb-7 mt-8 fv-plugins-icon-container">
                           <div class="col-12 d-md-flex">
                                <div class="form-group col-6 d-md-flex me-10 ms-10"> 
                                <div class="form-group col-md-9 me-9">       
                       {!! Form::label('valider_automatiquement_paiement','Valider automatiquement le paiement' ,['form-label'=>' form-label fs-6 fw-bolder text-dark']) !!}
                           </div>
                           <div class="form-group col-md-3 me-7 ">
                           <div class="form-check form-check-custom form-check-solid form-check-inline">

                        {!! Form::checkbox('valider_automatiquement_paiement','oui',($location->valider_automatiquement_paiement =='non')?false:true,['class'=>'form-check-input inputform']) !!}
                            </div> 


                           </div> 
                           </div> 
                         <div class="form-group col-6 d-md-flex me-7"> 
                                <div class="form-group col-md-9 me-2">       
                       {!! Form::label('envoyer_automatiquement_cheance','Envoyer l echeance automatiquement' ,['form-label'=>' form-label fs-6 fw-bolder text-dark']) !!}
                           </div>
                           <div class="form-group col-md-3 me-7">
                            <label class="form-check form-check-custom form-check-solid form-check-inline">
                        {!! Form::checkbox('envoyer_automatiquement_cheance','oui',($location->envoyer_automatiquement_cheance =='non')?false:true,['class'=>'form-check-input inputform']) !!}
                                </label>
                            
                           </div> 
                           </div> 
                           </div>
                         
                         </div>

                         <div class="fv-row mb-7 mt-8 fv-plugins-icon-container">
                           <div class="col-12 d-md-flex">
                                <div class="form-group col-6 d-md-flex me-10 ms-10"> 
                                <div class="form-group col-md-9 me-9">       
                       {!! Form::label('envoyer_automatiquement_quittance','Envoyer automatiquement la quittance' ,['form-label'=>' form-label fs-6 fw-bolder text-dark']) !!}
                           </div>
                           <div class="form-group col-md-3 me-7 ">
                           <label class="form-check form-check-custom form-check-solid form-check-inline">
                        {!! Form::checkbox('envoyer_automatiquement_quittance','oui',($location->envoyer_automatiquement_quittance =='non')?false:true,['class'=>'form-check-input inputform']) !!}
                            </label> 
                           </div> 
                           </div> 
                         <div class="form-group col-6 d-md-flex me-7"> 
                                <div class="form-group col-md-9 me-2">       
                       {!! Form::label('rappeler_automatiquement_revision_loyer','rappeler automatiquement la révision du loyer' ,['form-label'=>' form-label fs-6 fw-bolder text-dark']) !!}
                           </div>
                           <div class="form-group col-md-3 me-7">
                            <label class="form-check form-check-custom form-check-solid form-check-inline">
                        {!! Form::checkbox('rappeler_automatiquement_revision_loyer','oui',($location->rappeler_automatiquement_revision_loyer =='non')?false:true,['class'=>'form-check-input inputform']) !!}
                                </label>
                            
                           </div> 
                           </div> 
                           </div>
                         
                         </div>
             <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Annuler</button>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </div>
            {{ Form::close() }}
            </div>
            <div class="card-body p-0 tab-pane fade" id="affecter_loc"  role="tabpanel">
             <div class="row g-5 g-xl-8"> 
              <div class="col-xl-5">
                {{ Form::open(['url' => route('assignerloc',$location->bien->slug),'method' => 'POST','enctype'=>'multipart/form-data']) }}
                <div class="card card-xl-stretch mb-5 mb-xl-8 border border-1">
                  <div class="card-header border-0">
                  </div>
                  <div class="card-body pt-5">
                   
                    {!! Form::label('id_locataire','Selectionner un locataire existant' ,['class'=>' form-label fs-4 fw-bold text-dark mt-5 mb-5']) !!}
                    {!! Form::select('id_locataire',$locataire,null,['class'=>'form-select form-select-solid', 'data-control'=>'select2', 'data-placeholder'=>'Selectionner un locataire', 'data-allow-clear'=>'true'])!!}
                  <div class="card-footer d-flex justify-content-end bg-light mt-12"style="
                    margin-left: -2.3rem;margin-right: -2.3rem;margin-bottom: -2.3rem;">
                   {!! Form::submit('Assigner ',['class'=>'btn btn-secondary']) !!}
                  </div>
                   
                  </div>
                </div>
                {{ Form::close() }}
              </div>
              <div class="col-xl-7">
                <div class="card card-xl-stretch mb-5 mb-xl-8 border border-1">
                  <div class="card-header border-0">
                  <h3 class="card-title fw-bolder text-dark text-center"> Ajouter un Locataire</h3>
                  </div>
                  <div class="card-body pt-5">
                   {{ Form::open(['url' => route('ajoutloc',$location->bien->slug),'method' => 'POST','enctype'=>'multipart/form-data']) }}
                  <div class="col-xl-12 ms-4 d-md-flex mb-4">
                  <div class="col-xl-3">
                 {!! Form::label('nom','Nom',['class'=>'required form-label']) !!}
                  </div>
                  <div class="col-xl-8">
                 {!! Form::text('nom',old('nom'),['class'=>$errors->has('nom') ? 'is-invalid form-control' : 'form-control','placeholder'=>'Votre nom']) !!}
                  <div class="invalid-feedback">
                    {{$errors->first('nom')}}
                  </div>
                  </div>
                  </div>
                 <div class="col-xl-12 ms-4 d-md-flex mb-4">
                  <div class="col-xl-3">
                 {!! Form::label('email','Adresse email' ,['class'=>'required form-label']) !!}
                  </div>
                  <div class="col-xl-8">
                 {!! Form::email ('email',old("email"),['class'=>$errors->has('email') ? 'is-invalid form-control' : 'form-control','placeholder'=>'Votre adresse email']) !!}
                   <div class="invalid-feedback">
                      {{$errors->first('email')}}
                   </div> 
                  </div>
                  </div>
                 <div class="col-xl-12 ms-4 d-md-flex mb-4">
                  <div class="col-xl-3">
                 {!! Form::label('login','Identifiant' ,['class'=>'required form-label']) !!}
                  </div>
                  <div class="col-xl-8">
                 {!! Form::text('login',old('login'),['class'=>$errors->has('login') ? 'is-invalid form-control' : 'form-control','placeholder'=>'Votre login']) !!}
                  <div class="invalid-feedback">
                    {{$errors->first('login')}}
                  </div>  
                  </div>
                  </div>
                  <div class="col-xl-12 ms-4 d-md-flex mb-4">
                   <div class="col-xl-3">
                 {!! Form::label('telephone','Numero de telephone' ,['class'=>'required form-label']) !!}
                  </div>
                  <div class="col-xl-8">
                 {!! Form::text ('telephone',null,['class'=>$errors->has('telephone') ? 'is-invalid form-control' : 'form-control','placeholder'=>'Votre numero de telephone']) !!}
                  <div class="invalid-feedback">
                      {{$errors->first('telephone')}}
                  </div>  
                  </div>
                  </div>
                  <div class="card-footer d-flex justify-content-end bg-light"style="
                    margin-left: -2.3rem;margin-right: -2.3rem;margin-bottom: -2.3rem;">
                {!! Form::submit('Ajouter',['class'=>'btn btn-secondary']) !!}
                  </div>
                  
                 {{ Form::close() }}
                 </div>
                </div>
              </div>
            </div>
            </div>
            <div class="card-body p-0 tab-pane fade" id="supprimer_cont"  role="tabpanel">
            <div class="timeline">
                       <div class="timeline-item">
                          <div class="timeline-line w-40px"></div>
                          <div class="timeline-icon symbol symbol-circle symbol-40px">
                             <div class="symbol-label bg-light">
                                <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)"></path>
                                    <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                  </svg>
                                </span>
                             </div>
                          </div>
                          <div class="timeline-content mb-10 mt-n2">
                              <div class="pe-3 mb-5">
                                <div class="fs-3 fw-bold mb-2">Les Locataires</div>
                              </div>

                              @foreach($locataireBiens as $locataireBien)
                              <div class="overflow-auto pb-5">
                                <div class="col-12 d-md-flex align-items-center border border-dashed    border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                                   <div class="col-xl-3.8 me-4 overflow-auto pe-3">
                                       <div class="fs-5 text-dark fw-bold w-375px min-w-200px"> Nom</div>
                                       <div class="d-flex align-items-center mt-1 fs-6">
                                         <div class="text-muted me-2 fs-5">{{$locataireBien->locataire->nom}}</div>
                                       </div>   
                                   </div>
                                   <div class="col-xl-3.8 me-4 overflow-auto pe-3">
                                       <div class="fs-5 text-dark fw-bold w-375px min-w-200px"> Email</div>
                                       <div class="d-flex align-items-center mt-1 fs-6 me-6">
                                         <div class="text-muted me-4 fs-5">{{$locataireBien->locataire->email}}</div>
                                       </div>   
                                   </div>
                                   <div class="col-xl-3.8 me-4 overflow-auto pe-3">
                                       <div class="fs-5 text-dark fw-bold w-375px min-w-200px"> Login</div>
                                       <div class="d-flex align-items-center mt-1 fs-6">
                                         <div class="text-muted me-2 fs-5">{{$locataireBien->locataire->login}}</div>
                                       </div>   
                                   </div>
                                   <div class="col-xl-3.8 me-4 overflow-auto pe-3">
                                       <div class="fs-5 text-dark fw-bold w-375px min-w-200px"> Telephone</div>
                                       <div class="d-flex align-items-center mt-1 fs-6">
                                         <div class="text-muted me-2 fs-5">{{$locataireBien->locataire->telephone}}</div>
                                       </div>   
                                   </div>
                                    <div class="col-xl-3.8 overflow-auto pe-3">
                                      <div class="w-375px">  <a href="{{route('supplocB',$locataireBien->locataire->id)}}"class="btn btn-light-primary"> Resigner</a>
                                      </div>
                                          
                                   </div>
                                </div>
                                
                              </div>
                              @endforeach
                          </div>
                      </div>
                      <div class="timeline-item">
                        <div class="timeline-line w-40px"></div>
                          
                      </div>
                            
                </div>
            </div>           
    </div>
     
</div> 
       

@endsection

@section('script')
    <script src="{{url('assets_template/plugins/global/plugins.bundle.js')}}"></script>
    <script>

    </script>
 @endsection
