@extends('locataire.layouts.app')
@section('barre')
<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
    <!--begin::Page title-->
    <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
        <!--begin::Title-->
        <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1"> Mon contrat</h1>
        <!--end::Title-->
        <!--begin::Separator-->
        <span class="h-20px border-gray-200 border-start mx-4"></span>
       
    </div>
    
    
</div>
@endsection
@section('content')

<div class="flex-column flex-lg-row-auto mb-10 order-1 order-lg-2">
                  
 <div class="card card-flush mb-0" data-kt-sticky="true" data-kt-sticky-name="subscription-summary" data-kt-sticky-offset="{default: false, lg: '200px'}" data-kt-sticky-width="{lg: '250px', xl: '300px'}" data-kt-sticky-left="auto" data-kt-sticky-top="150px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
    <div class="card-header">
        <div class="card-title">
            <h2>Mon contrat de Bail du bien {{ $location->bien->nom }}</h2>
            </div></div>
        <div class="card-body pt-0 fs-6">
            <div class="separator separator-dashed mb-7"></div>
                <div class="mb-7 col-12 d-md-flex align-items-center ms-3">
                    <div class="col-xl-3 pe-3">
                        <div class="fs-5 text-dark fw-bold w-375px min-w-200px"> Periode de paiement</div>
                         <div class="d-flex align-items-center mt-1 fs-6">
                         <div class="text-muted me-2 fs-5">{{$location->periodePaiement->libelle}}</div>
                                       </div>   
                      </div>
                      <div class="col-xl-3 pe-3">
                       <div class="fs-5 text-dark fw-bold w-375px min-w-200px"> Moyen de paiement</div>
                       <div class="d-flex align-items-center mt-1 fs-6">
                        <div class="text-muted me-2 fs-5">{{$location->moyenPaiement->libelle}}</div>
                        </div>   
                        </div>                      
                        <div class="col-xl-3 pe-3">
                         <div class="fs-5 text-dark fw-bold w-375px min-w-200px"> Date de debut</div>
                         <div class="d-flex align-items-center mt-1 fs-6">
                         <div class="text-muted me-2 fs-5">{{$location->date_debut}}</div>
                         </div>    
                      </div>
                      <div class="col-xl-3 pe-3">
                        <div class="fs-5 text-dark fw-bold w-375px min-w-200px"> Clause de revision du loyer</div>
                        <div class="d-flex align-items-center mt-1 fs-6">
                        <div class="text-muted me-2 fs-5">{{$location->clause_revision_loyer}}</div>
                        </div>  
                      </div>
                 </div>
                 <div class="separator separator-dashed mb-7"></div>
                 <div class="mb-7 col-12 d-md-flex align-items-center ms-3">
                    <div class="col-xl-3 pe-3">
                        <div class="fs-5 text-dark fw-bold w-375px min-w-200px"> Indice de reference</div>
                         <div class="d-flex align-items-center mt-1 fs-6">
                         <div class="text-muted me-2 fs-5">{{$location->indice_reference}}</div>
                                       </div>   
                      </div>
                      <div class="col-xl-3 pe-3">
                       <div class="fs-5 text-dark fw-bold w-375px min-w-200px"> Description du bail</div>
                       <div class="d-flex align-items-center mt-1 fs-6">
                        <div class="text-muted me-2 fs-5">{{$location->description_bail}}</div>
                        </div>   
                        </div>                      
                        <div class="col-xl-3 pe-3">
                         <div class="fs-5 text-dark fw-bold w-375px min-w-200px"> Clause particuliere</div>
                         <div class="d-flex align-items-center mt-1 fs-6">
                         <div class="text-muted me-2 fs-5">{{$location->clause_particuliere}}</div>
                         </div>    
                      </div>
                      <div class="col-xl-3 pe-3">
                        <div class="fs-5 text-dark fw-bold w-375px min-w-200px"> Garant solidaire</div>
                        <div class="d-flex align-items-center mt-1 fs-6">
                        <div class="text-muted me-2 fs-5">{{$location->garant_solidaire}}</div>
                        </div>  
                      </div>
                 </div>
                        <div class="separator separator-dashed mb-7"></div>
                <div class="mb-7 col-12 d-md-flex align-items-center ms-3">
                        <div class="col-xl-2 pe-3">
                        <div class="fs-5 text-dark fw-bold w-375px min-w-200px">Type de charge</div>
                         <div class="d-flex align-items-center mt-1 fs-6">
                         <div class="text-muted me-2 fs-5">{{$location->type_charge}}</div>
                        </div>   
                      </div>
                      <div class="col-xl-2 ms-12 pe-3">
                     <div class="fs-5 text-dark fw-bold w-375px min-w-200px">Loyer initial</div>
                       <div class="d-flex align-items-center mt-1 fs-6">
                        <div class="text-muted me-2 fs-5">{{$location->loyer_initial}}</div>
                        </div>   
                        </div>                      
                        <div class="col-xl-2 ms-12 pe-3">
                         <div class="fs-5 text-dark fw-bold w-375px min-w-200px">Jour de paiement</div>
                         <div class="d-flex align-items-center mt-1 fs-6">
                         <div class="text-muted me-2 fs-5">{{$location->jour_paiement}}</div>
                         </div>    
                      </div>
                      <div class="col-xl-2 ms-12 pe-3">
                        <div class="fs-5 text-dark fw-bold w-375px min-w-200px">Duree</div>
                        <div class="d-flex align-items-center mt-1 fs-6">
                        <div class="text-muted me-2 fs-5">{{$location->duree}}</div>
                        </div>  
                      </div>
                      <div class="col-xl-2 ms-12 pe-3">
                        <div class="fs-5 text-dark fw-bold w-375px min-w-200px">Charge</div>
                        <div class="d-flex align-items-center mt-1 fs-6">
                        <div class="text-muted me-2 fs-5">{{$location->charge}}</div>
                        </div>  
                      </div>
                 </div>
                       <div class="separator separator-dashed mb-7"></div>
                <div class="mb-7 col-12 d-md-flex align-items-center ms-3">
                        <div class="col-xl-6 pe-3">
                        <div class="fs-5 text-dark fw-bold w-375px min-w-200px">Valider automatiquement le paiement</div>
                         <div class="d-flex align-items-center mt-1 fs-6">
                         <div class="text-muted me-2 fs-5">{{$location->valider_automatiquement_paiement}}</div>
                        </div>   
                      </div>
                      <div class="col-xl-6 ms-12 pe-3">
                     <div class="fs-5 text-dark fw-bold w-375px min-w-200px">Envoyer automatiquement echeance</div>
                       <div class="d-flex align-items-center mt-1 fs-6">
                        <div class="text-muted me-2 fs-5">{{$location->envoyer_automatiquement_cheance}}</div>
                        </div>   
                        </div>                      
                 </div>       
                   <div class="separator separator-dashed mb-7"></div>
                <div class="mb-7 col-12 d-md-flex align-items-center ms-3">
                        <div class="col-xl-6 pe-3">
                        <div class="fs-5 text-dark fw-bold w-375px min-w-200px">Envoyer automatiquement quittance</div>
                         <div class="d-flex align-items-center mt-1 fs-6">
                         <div class="text-muted me-2 fs-5">{{$location->envoyer_automatiquement_quittance}}</div>
                        </div>   
                      </div>
                      <div class="col-xl-6 ms-12 pe-3">
                     <div class="fs-5 text-dark fw-bold w-375px min-w-200px">Rappeler automatiquement la revision du loyer</div>
                       <div class="d-flex align-items-center mt-1 fs-6">
                        <div class="text-muted me-2 fs-5">{{$location->rappeler_automatiquement_revision_loyer}}</div>
                        </div>   
                        </div>                      
                 </div>      
    </div>
                      
 </div>
                   
</div>
@endsection