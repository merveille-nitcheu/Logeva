@extends('proprietaire.layouts.app')
@section('style')
<link href="{{url('assets_template/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="{{url("assets_template/plugins/select2/css/select2.min.css")}}">
<link rel="stylesheet" href="{{url("assets_template/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css")}}">
<link href="{{url('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{url('assets_template/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css"/>
@endsection
@section('barre')
<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
    <!--begin::Page title-->
    <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
        <!--begin::Title-->
        <h1 class="d-flex align-items-center text-dark fw-bolder fs-6 my-1">{{$bien->nom}}</h1>
        <!--end::Title-->
        <!--begin::Separator-->
        <span class="h-20px border-gray-200 border-start mx-4"></span>
       
    </div>

    <div class="d-flex align-items-center">
      <a href="#" class="btn btn-light-primary me-9" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">Actions 
      <!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-down.svg-->
      <span class="svg-icon svg-icon-5 m-0">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <polygon points="0 0 24 0 24 24 0 24"></polygon>
            <path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)"></path>
          </g>
        </svg>
      </span>
      <!--end::Svg Icon--></a>

      @if ($bien->location->count() != 0)
          <a href=" {{ route('voircontrat',$bien->slug) }} " class="btn btn-light-primary me-9">Voir contrat</a>
        @else
          <a href="#" class="btn btn-light-primary me-9" data-bs-toggle="modal" data-bs-target="#kt_modal_3">Etablir contrat de bail</a>
        
      @endif                  
 


      <!--begin::Menu-->
      <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 fw-bold fs-7 w-125px py-4" data-kt-menu="true">
        <!--begin::Menu item-->
        <div class="menu-item px-2">
          <a href="{{url('/bien/'.$bien->slug.'/edit')}}" class="btn btn-active-light-primary menu-link px-2">
            <i class="fas fa-redo-alt mr-2"></i> 
            Modifier</a>
        </div>
        <!--end::Menu item-->
        <!--begin::Menu item-->
        
        <div class="menu-item px-2">
          
          <button type="button" class="btn btn-active-light-danger menu-link px-2" data-kt-customer-table-filter="delete_row" data-bs-toggle="modal" data-bs-target="#kt_modal_1">
            <span class="svg-icon svg-icon-6 ms-1">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
              </svg>
           </span>supprimer </button>
          
        </div>
       
        
        <!--end::Menu item-->
      </div>

      </div>
      
</div>

@endsection
@section('content')
<div class="modal fade" tabindex="-1" id="kt_modal_1">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h1 class="modal-title">{{$bien->nom}}</h1>

              <!--begin::Close-->
              
              <!--end::Close-->
          </div>

          <div class="modal-body">
              <p>Etes vous sur de vouloir vraiment supprimer {{$bien->nom}}</p>
          </div>

          <div class="modal-footer">
              <button type="button" class="btn btn-active-light-primary" data-bs-dismiss="modal">Annuler</button>
              {!! Form::open(['url'=> '/bien/'.$bien->id,'method'=> 'DELETE']) !!}
              <button type="submit" class="btn btn-danger">Supprimer</button>
              {!!Form::close()!!}
          </div>
      </div>
  </div>
</div>

<div class="row g-5 g-xl-8">
  <div class="col-xl-6">
    <!--begin::List Widget 7-->
    <div class="card card-xl-stretch mb-xl-8" style="height: auto">
      <!--begin::Header-->
      <div class="card-header align-items-center border-0 mt-4">
        <h3 class="card-title align-items-start flex-column">
          <span class="text-gray-800 fw-boldest fs-3">Informations genérales</span>
          
        </h3>
        <div class="card-toolbar">
          <!--begin::Menu-->
          <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
            <!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks-2.svg-->
            <span class="svg-icon svg-icon-5 m-0">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <polygon points="0 0 24 0 24 24 0 24"></polygon>
                  <path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)"></path>
                </g>
              </svg>
            </span>
            <!--end::Svg Icon-->
          </button>
          <!--begin::Menu 1-->
         
          <!--end::Menu 1-->
          <!--end::Menu-->
        </div>
      </div>
      <!--end::Header-->
      <!--begin::Body-->
      <div class="card-body pt-3">
        <!--begin::Item-->
        <div class="d-flex align-items-sm-center mb-7">
          <!--begin::Symbol-->
          
          <!--end::Symbol-->
          <!--begin::Title-->
          <div class="d-flex flex-row-fluid flex-wrap align-items-center">
            <div class="flex-grow-1 me-2">
              <span class="text-gray-700 fw-boldest fs-6">Nom</span>
              </div>
            <div class="text-end py-lg-0 py-2">
              <span class="text-gray-700 fw-boldest fs-6">{{$bien->nom}}</span>
               </div>
          </div>
          <!--end::Title-->
        </div>
        <!--end::Item-->
        <!--begin::Item-->
        <div class="d-flex align-items-sm-center mb-7">
          <!--begin::Symbol-->
          
          <!--end::Symbol-->
          <!--begin::Title-->
          <div class="d-flex flex-row-fluid flex-wrap align-items-center">
            <div class="flex-grow-1 me-2">
              <span class="text-gray-700 fw-boldest fs-6">Type</span>
              </div>
            <div class="text-end py-lg-0 py-2">
              <span class="text-gray-700 fw-boldest fs-6">{{$bien->typeBien->libelle}}</span>
               </div>
          </div>
          <!--end::Title-->
        </div>
        <!--end::Item-->
        <!--begin::Item-->
        <div class="d-flex align-items-sm-center mb-7">
          <!--begin::Symbol-->
          
          <!--end::Symbol-->
          <!--begin::Title-->
          <div class="d-flex flex-row-fluid flex-wrap align-items-center">
            <div class="flex-grow-1 me-2">
              <span class="text-gray-700 fw-boldest fs-6">Proprietaire</span>
              </div>
            <div class="text-end py-lg-0 py-2">
              <span class="text-gray-700 fw-boldest fs-6">{{$bien->proprietaire->nom}}</span>
               </div>
          </div>
          <!--end::Title-->
        </div>
        <div class="d-flex align-items-sm-center mb-7">
          <!--begin::Symbol-->
          
          <!--end::Symbol-->
          <!--begin::Title-->
          <div class="d-flex flex-row-fluid flex-wrap align-items-center">
            <div class="flex-grow-1 me-2">
              <span class="text-gray-700 fw-boldest fs-6">Surface</span>
              </div>
            <div class="text-end py-lg-0 py-2">
              <span class="text-gray-700 fw-boldest fs-6">{{$bien->surface}}</span>
               </div>
          </div>
          <!--end::Title-->
        </div>
        <!--end::Item-->
        <!--begin::Item-->
        <div class="d-flex align-items-sm-center mb-7">
          <!--begin::Symbol-->
          
          <!--end::Symbol-->
          <!--begin::Title-->
          <div class="d-flex flex-row-fluid flex-wrap align-items-center">
            <div class="flex-grow-1 me-2">
              <span class="text-gray-700 fw-boldest fs-6">Nombre de pieces</span>
              </div>
            <div class="text-end py-lg-0 py-2">
              <span class="text-gray-700 fw-boldest fs-6">{{$bien->nombre_piece}}</span>
               </div>
          </div>
          <!--end::Title-->
        </div>
        <div class="d-flex align-items-sm-center mb-7">
          <!--begin::Symbol-->
          
          <!--end::Symbol-->
          <!--begin::Title-->
          <div class="d-flex flex-row-fluid flex-wrap align-items-center">
            <div class="flex-grow-1 me-2">
              <span class="text-gray-700 fw-boldest fs-6">Adresse</span>
              </div>
            <div class="text-end py-lg-0 py-2">
              <span class="text-gray-700 fw-boldest fs-6">{{$bien->adresse}}</span>
               </div>
          </div>
          <!--end::Title-->
        </div>
        <div class="d-flex align-items-sm-center mb-7">
          <!--begin::Symbol-->
          
          <!--end::Symbol-->
          <!--begin::Title-->
          <div class="d-flex flex-row-fluid flex-wrap align-items-center">
            <div class="flex-grow-1 me-2">
              <span class="text-gray-700 fw-boldest fs-6">Ville</span>
              </div>
            <div class="text-end py-lg-0 py-2">
              <span class="text-gray-700 fw-boldest fs-6">{{$bien->ville}}</span>
               </div>
          </div>
          <!--end::Title-->
        </div>
        <div class="d-flex align-items-sm-center mb-7">
          <!--begin::Symbol-->
          
          <!--end::Symbol-->
          <!--begin::Title-->
          <div class="d-flex flex-row-fluid flex-wrap align-items-center">
            <div class="flex-grow-1 me-2">
              <span class="text-gray-700 fw-boldest fs-6">Pays</span>
              </div>
            <div class="text-end py-lg-0 py-2">
              <span class="text-gray-700 fw-boldest fs-6">{{$bien->pays}}</span>
               </div>
          </div>
          <!--end::Title-->
        </div>
        <div class="d-flex align-items-sm-center mb-7">
          <!--begin::Symbol-->
          
          <!--end::Symbol-->
          <!--begin::Title-->
          <div class="d-flex flex-row-fluid flex-wrap align-items-center">
            <div class="flex-grow-1 me-2">
              <span class="text-gray-700 fw-boldest fs-6">Code Postal</span>
              </div>
            <div class="text-end py-lg-0 py-2">
              <span class="text-gray-700 fw-boldest fs-6">{{$bien->code_postal}}</span>
               </div>
          </div>
          <!--end::Title-->
        </div>
        <div class="d-flex align-items-sm-center mb-7">
          <!--begin::Symbol-->
          
          <!--end::Symbol-->
          <!--begin::Title-->
          <div class="d-flex flex-row-fluid flex-wrap align-items-center">
            <div class="flex-grow-1 me-2">
              <span class="text-gray-700 fw-boldest fs-6">Description</span>
              </div>
            <div class="text-end py-lg-0 py-2">
              <span class="text-gray-700 fw-boldest fs-6">{{$bien->description}}</span>
               </div>
          </div>
          <!--end::Title-->
        </div>
        <div class="d-flex align-items-sm-center">
          <!--begin::Symbol-->
          
          <!--end::Symbol-->
          <!--begin::Title-->
          <div class="d-flex flex-row-fluid flex-wrap align-items-center">
            <div class="flex-grow-1 me-2">
              <span class="text-gray-700 fw-boldest fs-6">Centre d'Imposition</span>
              </div>
            <div class="text-end py-lg-0 py-2">
              <span class="text-gray-700 fw-boldest fs-6">{{$bien->centre_imposition}}</span>
               </div>
          </div>
          <!--end::Title-->
        </div>
        <!--end::Item-->
      </div>
      <!--end::Body-->
    </div>
    <!--end::List Widget 7-->
  </div>
  <div class="col-xl-6">
    <div class="card card-xl-stretch mb-5 mb-xl-8" style="height:auto">
      <!--begin::Header-->
      <div class="card-header align-items-center border-0 mt-4">
        <h3 class="card-title align-items-start flex-column">
          <span class="text-gray-800 fw-boldest fs-3">Gallerie</span>
          
        </h3>
        <div class="card-toolbar">
          <!--begin::Menu-->
          <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
            <!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks-2.svg-->
            <span class="svg-icon svg-icon-5 m-0">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <polygon points="0 0 24 0 24 24 0 24"></polygon>
                  <path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)"></path>
                </g>
              </svg>
            </span>
            <!--end::Svg Icon-->
          </button>
          <!--begin::Menu 3-->
         <!--end::Menu-->
        </div>
      </div>
      <!--end::Header-->
      <!--begin::Body-->
      <div class="card-body pt-3 row d-flex" style="display: none">
        
         
        @if(count($bien->galerie) !=0)
        @foreach ($bien->galerie as $key => $photo)
        <div class="col-xl-6 p-2">
        <div class="card  overlay overflow-hidden">
            <div class="card-body p-0">
                <div class="overlay-wrapper">
        <img src="{{asset('storage/'.$photo->photo)}}" alt="" class="w-100 rounded"/>
        </div>
        </div>
         <div class="overlay-layer bg-dark bg-opacity-25">
                    
                    <a href="{{url('/supprimerphoto/'.$photo->slug)}}"class="btn btn-active-light-primary btn-shadow ms-2">Supprimer</a>
                    
                </div>
            </div>
        </div>

        @endforeach
        @else
        <div class="col-xl-6 p-2">
        <div class="card  overlay overflow-hidden">
            <div class="card-body p-0">
                <div class="overlay-wrapper">
       <img src="{{asset('storage/photos_biens/default.jpg')}}" alt="" class="w-100 rounded" style="height:200px"/>
        </div>
        </div>
         <div class="overlay-layer bg-dark bg-opacity-25">
                    
                    <button type="button" class="btn btn-active-light-primary btn-shadow ms-2">Supprimer</button>
                </div>
            </div>
        </div>
      @endif

      <div class="col-xl-6">      <!--begin::Form-->
      
      
    <div class="fs-row ">
        <!--begin::Dropzone-->
        <div class="dropzone" id="kt_dropzonejs_example_1">
            <!--begin::Message-->
            <div class="dz-message needsclick">
                <!--begin::Icon-->
                <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                <!--end::Icon-->

                <!--begin::Info-->
                <div class="ms-4">
                    <h3 class="fs-5 fw-bolder text-gray-900 mb-8">Ajouter photo</h3>
                    
                </div>
                
                <!--end::Info-->
            </div>
        </div>
        <!--end::Dropzone-->
    </div>
    <!--end::Input group-->
  <a href="{{url('/bien/'.$bien->slug)}}"  class="btn btn-light-primary mt-4" style="float: right;" id="kt_toolbar_primary_button"><i class="fas fa-plus"></i> Soumettre</a>



</div>

<!--end::Form-->
      
        
        <!--end::Item-->
      </div>
      <!--end::Body-->
    </div>
    <!--begin::List Widget 8-->
    <div class="card card-xl-stretch mb-5 mb-xl-8" style="height:auto">
      <!--begin::Header-->
      <div class="card-header align-items-center border-0 mt-4">
        <h3 class="card-title align-items-start flex-column">
          <span class="text-gray-800 fw-boldest fs-3">Informations detaillées</span>
          
        </h3>
        <div class="card-toolbar">
          <!--begin::Menu-->
          <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
            <!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks-2.svg-->
            <span class="svg-icon svg-icon-5 m-0">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <polygon points="0 0 24 0 24 24 0 24"></polygon>
                  <path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)"></path>
                </g>
              </svg>
            </span>
            <!--end::Svg Icon-->
          </button>
          <!--begin::Menu 3-->
          
          <!--end::Menu 3-->
          <!--end::Menu-->
        </div>
      </div>
      <!--end::Header-->
      <!--begin::Body-->
      <div class="card-body pt-3" style="display: none">
        <!--begin::Item-->
        <div class="d-flex align-items-sm-center mb-7">
          <!--begin::Symbol-->
          
          <!--end::Symbol-->
          <!--begin::Title-->
          <div class="d-flex flex-row-fluid flex-wrap align-items-center">
            <div class="flex-grow-1 me-2">
              <span class="text-gray-700 fw-boldest fs-6">Nombre de lots</span>
              </div>
            <div class="text-end py-lg-0 py-2">
              <span class="text-gray-700 fw-boldest fs-6">{{$bien->nombre_lot}}</span>
               </div>
          </div>
          <!--end::Title-->
        </div>
        <!--end::Item-->
        <!--begin::Item-->
        <div class="d-flex align-items-sm-center mb-7">
          <!--begin::Symbol-->
          
          <!--end::Symbol-->
          <!--begin::Title-->
          <div class="d-flex flex-row-fluid flex-wrap align-items-center">
            <div class="flex-grow-1 me-2">
              <span class="text-gray-700 fw-boldest fs-6">Nombre de batiments</span>
              </div>
            <div class="text-end py-lg-0 py-2">
              <span class="text-gray-700 fw-boldest fs-6">{{$bien->nombre_batiment}}</span>
               </div>
          </div>
          <!--end::Title-->
        </div>
        <!--end::Item-->
        <!--begin::Item-->
        <div class="d-flex align-items-sm-center mb-7">
          <!--begin::Symbol-->
          
          <!--end::Symbol-->
          <!--begin::Title-->
          <div class="d-flex flex-row-fluid flex-wrap align-items-center">
            <div class="flex-grow-1 me-2">
              <span class="text-gray-700 fw-boldest fs-6">Nombre d'etages</span>
              </div>
            <div class="text-end py-lg-0 py-2">
              <span class="text-gray-700 fw-boldest fs-6">{{$bien->nombre_etage}}</span>
               </div>
          </div>
          <!--end::Title-->
        </div>
        <!--end::Item-->
        <!--begin::Item-->
        <div class="d-flex align-items-sm-center mb-7">
          <!--begin::Symbol-->
          
          <!--end::Symbol-->
          <!--begin::Title-->
          <div class="d-flex flex-row-fluid flex-wrap align-items-center">
            <div class="flex-grow-1 me-2">
              <span class="text-gray-700 fw-boldest fs-6">Nombre d'escaliers</span>
              </div>
            <div class="text-end py-lg-0 py-2">
              <span class="text-gray-700 fw-boldest fs-6">{{$bien->nombre_escalier}}</span>
               </div>
          </div>
          <!--end::Title-->
        </div>
        <div class="d-flex align-items-sm-center ">
          <!--begin::Symbol-->
          
          <!--end::Symbol-->
          <!--begin::Title-->
          <div class="d-flex flex-row-fluid flex-wrap align-items-center">
            <div class="flex-grow-1 me-2">
              <span class="text-gray-700 fw-boldest fs-6">Numero de porte</span>
              </div>
            <div class="text-end py-lg-0 py-2">
              <span class="text-gray-700 fw-boldest fs-6">{{$bien->numero_porte}}</span>
               </div>
          </div>
          <!--end::Title-->
        </div>
        <!--end::Item-->
      </div>
      <!--end::Body-->
    </div>
    <!--end::List Widget 8-->
  </div>
</div>
<div class="row g-5 g-xl-8">
  <div class="col-xl-6">
    <!--begin::List Widget 7-->
    <div class="card card-xl-stretch mb-xl-8" style="height:auto">
      <!--begin::Header-->
      <div class="card-header align-items-center border-0 mt-4">
        <h3 class="card-title align-items-start flex-column">
          <span class="text-gray-800 fw-boldest fs-3">Dependances</span>
          
        </h3>
        <div class="card-toolbar" >
          <!--begin::Menu-->
          <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
            <!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks-2.svg-->
            <span class="svg-icon svg-icon-5 m-0">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <polygon points="0 0 24 0 24 24 0 24"></polygon>
                  <path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)"></path>
                </g>
              </svg>
            </span>
            <!--end::Svg Icon-->
          </button>
          <!--begin::Menu 1-->
          
          <!--end::Menu 1-->
          <!--end::Menu-->
        </div>
      </div>
      <!--end::Header-->
      <!--begin::Body-->
      <div class="card-body pt-3" style="display: none">
        <!--begin::Item-->
        <div class="d-flex align-items-sm-center mb-7">
          <!--begin::Symbol-->
          
          <!--end::Symbol-->
          <!--begin::Title-->
          <div class="d-flex flex-row-fluid flex-wrap align-items-center">
            <div class="flex-grow-1 me-2">
              <span class="text-gray-700 fw-boldest fs-6">Zone de stationnement</span>
              </div>
            <div class="text-end py-lg-0 py-2">
              <span class="text-gray-700 fw-boldest fs-6">{{$bien->zone_stationnement}}</span>
               </div>
          </div>
          <!--end::Title-->
        </div>
        <!--end::Item-->
        <!--begin::Item-->
        <div class="d-flex align-items-sm-center mb-7">
          <!--begin::Symbol-->
          
          <!--end::Symbol-->
          <!--begin::Title-->
          <div class="d-flex flex-row-fluid flex-wrap align-items-center">
            <div class="flex-grow-1 me-2">
              <span class="text-gray-700 fw-boldest fs-6">Garage</span>
              </div>
            <div class="text-end py-lg-0 py-2">
              <span class="text-gray-700 fw-boldest fs-6">{{$bien->garage}}</span>
               </div>
          </div>
          <!--end::Title-->
        </div>
        <!--end::Item-->
        <!--begin::Item-->
        <div class="d-flex align-items-sm-center mb-7">
          <!--begin::Symbol-->
          
          <!--end::Symbol-->
          <!--begin::Title-->
          <div class="d-flex flex-row-fluid flex-wrap align-items-center">
            <div class="flex-grow-1 me-2">
              <span class="text-gray-700 fw-boldest fs-6">Cave</span>
              </div>
            <div class="text-end py-lg-0 py-2">
              <span class="text-gray-700 fw-boldest fs-6">{{$bien->cave}}</span>
               </div>
          </div>
          <!--end::Title-->
        </div>
        <!--end::Item-->
        <!--begin::Item-->
        
        <div class="d-flex align-items-sm-center">
          <!--begin::Symbol-->
          
          <!--end::Symbol-->
          <!--begin::Title-->
          <div class="d-flex flex-row-fluid flex-wrap align-items-center">
            <div class="flex-grow-1 me-2">
              <span class="text-gray-700 fw-boldest fs-6">Autres Dependances</span>
              </div>
            <div class="text-end py-lg-0 py-2">
              <span class="text-gray-700 fw-boldest fs-6">{{$bien->autres_dependance}}</span>
               </div>
          </div>
          <!--end::Title-->
        </div>
        <!--end::Item-->
      </div>
      <!--end::Body-->
    </div>
    <!--end::List Widget 7-->
  </div>
  <div class="col-xl-6" >
    <!--begin::List Widget 8-->
    <div class="card card-xl-stretch mb-5 mb-xl-8" style="height: auto">
      <!--begin::Header-->
      <div class="card-header align-items-center border-0 mt-4">
        <h3 class="card-title align-items-start flex-column">
          <span class="text-gray-800 fw-boldest fs-3">Parties Communes</span>
          
        </h3>
        <div class="card-toolbar">
          <!--begin::Menu-->
          <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
            <!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks-2.svg-->
            <span class="svg-icon svg-icon-5 m-0">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <polygon points="0 0 24 0 24 24 0 24"></polygon>
                  <path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)"></path>
                </g>
              </svg>
            </span>
            <!--end::Svg Icon-->
          </button>
          <!--begin::Menu 3-->
          
          <!--end::Menu 3-->
          <!--end::Menu-->
        </div>
      </div>
      <!--end::Header-->
      <!--begin::Body-->
      <div class="card-body pt-3" style="display: none">
        <!--begin::Item-->
        <div class="d-flex align-items-sm-center mb-7">
          <!--begin::Symbol-->
          
          <!--end::Symbol-->
          <!--begin::Title-->
          <div class="d-flex flex-row-fluid flex-wrap align-items-center">
            <div class="flex-grow-1 me-2">
              <span class="text-gray-700 fw-boldest fs-6">Gardinnage</span>
              </div>
            <div class="text-end py-lg-0 py-2">
              <span class="text-gray-700 fw-boldest fs-6">{{$bien->gardiennage}}</span>
               </div>
          </div>
          <!--end::Title-->
        </div>
        <!--end::Item-->
        <!--begin::Item-->
        <div class="d-flex align-items-sm-center mb-7">
          <!--begin::Symbol-->
          
          <!--end::Symbol-->
          <!--begin::Title-->
          <div class="d-flex flex-row-fluid flex-wrap align-items-center">
            <div class="flex-grow-1 me-2">
              <span class="text-gray-700 fw-boldest fs-6">Interphone</span>
              </div>
            <div class="text-end py-lg-0 py-2">
              <span class="text-gray-700 fw-boldest fs-6">{{$bien->interphone}}</span>
               </div>
          </div>
          <!--end::Title-->
        </div>
        <!--end::Item-->
        <!--begin::Item-->
        <div class="d-flex align-items-sm-center mb-7">
          <!--begin::Symbol-->
          
          <!--end::Symbol-->
          <!--begin::Title-->
          <div class="d-flex flex-row-fluid flex-wrap align-items-center">
            <div class="flex-grow-1 me-2">
              <span class="text-gray-700 fw-boldest fs-6">Ascenseur</span>
              </div>
            <div class="text-end py-lg-0 py-2">
              <span class="text-gray-700 fw-boldest fs-6">{{$bien->ascenseur}}</span>
               </div>
          </div>
          <!--end::Title-->
        </div>
        <!--end::Item-->
        <!--begin::Item-->
        <div class="d-flex align-items-sm-center mb-7">
          <!--begin::Symbol-->
          
          <!--end::Symbol-->
          <!--begin::Title-->
          <div class="d-flex flex-row-fluid flex-wrap align-items-center">
            <div class="flex-grow-1 me-2">
              <span class="text-gray-700 fw-boldest fs-6">Vides Ordures</span>
              </div>
            <div class="text-end py-lg-0 py-2">
              <span class="text-gray-700 fw-boldest fs-6">{{$bien->vide_ordure}}</span>
               </div>
          </div>
          <!--end::Title-->
        </div>
        <div class="d-flex align-items-sm-center mb-7">
          <!--begin::Symbol-->
          
          <!--end::Symbol-->
          <!--begin::Title-->
          <div class="d-flex flex-row-fluid flex-wrap align-items-center">
            <div class="flex-grow-1 me-2">
              <span class="text-gray-700 fw-boldest fs-6">Espaces Verts</span>
              </div>
            <div class="text-end py-lg-0 py-2">
              <span class="text-gray-700 fw-boldest fs-6">{{$bien->espaces_vert}}</span>
               </div>
          </div>
          <!--end::Title-->
        </div>
        <div class="d-flex align-items-sm-center mb-7">
          <!--begin::Symbol-->
          
          <!--end::Symbol-->
          <!--begin::Title-->
          <div class="d-flex flex-row-fluid flex-wrap align-items-center">
            <div class="flex-grow-1 me-2">
              <span class="text-gray-700 fw-boldest fs-6">Chauffage Collectif</span>
              </div>
            <div class="text-end py-lg-0 py-2">
              <span class="text-gray-700 fw-boldest fs-6">{{$bien->chauffage_collectif}}</span>
               </div>
          </div>
          <!--end::Title-->
        </div>
        <div class="d-flex align-items-sm-center mb-7">
          <!--begin::Symbol-->
          
          <!--end::Symbol-->
          <!--begin::Title-->
          <div class="d-flex flex-row-fluid flex-wrap align-items-center">
            <div class="flex-grow-1 me-2">
              <span class="text-gray-700 fw-boldest fs-6">Eau Chaude collective</span>
              </div>
            <div class="text-end py-lg-0 py-2">
              <span class="text-gray-700 fw-boldest fs-6">{{$bien->eau_chaude_collective}}</span>
               </div>
          </div>
          <!--end::Title-->
        </div>
        <div class="d-flex align-items-sm-center mb-7">
          <!--begin::Symbol-->
          
          <!--end::Symbol-->
          <!--begin::Title-->
          <div class="d-flex flex-row-fluid flex-wrap align-items-center">
            <div class="flex-grow-1 me-2">
              <span class="text-gray-700 fw-boldest fs-6">AntenneTV Collective</span>
              </div>
            <div class="text-end py-lg-0 py-2">
              <span class="text-gray-700 fw-boldest fs-6">{{$bien->antenne_tv_collective}}</span>
               </div>
          </div>
          <!--end::Title-->
        </div>
        <div class="d-flex align-items-sm-center">
          <!--begin::Symbol-->
          
          <!--end::Symbol-->
          <!--begin::Title-->
          <div class="d-flex flex-row-fluid flex-wrap align-items-center">
            <div class="flex-grow-1 me-2">
              <span class="text-gray-700 fw-boldest fs-6">Autres Elements Collectifs</span>
              </div>
            <div class="text-end py-lg-0 py-2">
              <span class="text-gray-700 fw-boldest fs-6">{{$bien->autre_elements_collectif}}</span>
               </div>
          </div>
          <!--end::Title-->
        </div>
        <!--end::Item-->
      </div>
      <!--end::Body-->
    </div>
    <!--end::List Widget 8-->
  </div>
</div>
<div class="modal fade " tabindex="-1" id="kt_modal_3">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Etablir le contrat de bail de {{ $bien->nom }}</h5>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-2x">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
                                  <rect fill="#000000" x="0" y="7" width="16" height="2" rx="1"></rect>
                                  <rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1"></rect>
                                </g>
                              </svg>
                    </span>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
      {{ Form::open(['url' => route('location.store'), 'method' => 'POST','enctype'=>'multipart/form-data']) }}
            {!! Form::hidden('id_bien',$bien->id ) !!}
                           
                      
                            <div class="row fv-row mb-7 fv-plugins-icon-container">
                               <div class="col-12 d-md-flex">
                                <div class="col-xl-6 me-4"> 
                                 
                    {!! Form::label('id_periodePaiement','Periode de payement' ,['class'=>'required form-label', 'form-label'=>' form-label fs-6 fw-bolder text-dark ']) !!}
                     {!! Form::select('id_periodePaiement',$periodePaiement,null,['class'=>'form-select ', 'data-control'=>'select2', 'data-placeholder'=>'Selectionner une periode de paiement', 'data-allow-clear'=>'true']) !!}
                        <div class="invalid-feedback">
                            {{ $errors->first('periodePaiement') }}
                        </div>
                        </div> 
                          <div class="col-xl-6"> 
                                 
                     {!! Form::label('id_moyenPaiement','Moyen de paiement' ,['class'=>'required form-label', 'form-label'=>' form-label fs-6 fw-bolder text-dark ']) !!}
                     {!! Form::select('id_moyenPaiement',$moyenPaiement,null,['class'=>'form-select ', 'data-control'=>'select2', 'data-placeholder'=>'Selectionner un moyen de paiement', 'data-allow-clear'=>'true']) !!}
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
                    {!! Form::text ('duree',old('duree'),['class'=>$errors->has('nom') ? 'is-invalid form-control' : 'form-control form-control-lg form-control-solid inputform']) !!}
                        <div class="invalid-feedback">
                            {{$errors->first('durée')}}
                        </div>  
                        </div> 
                          <div class="col-xl-6"> 
                     {!! Form::label('loyer_initial','Loyer initial' ,['class'=>'required form-label', 'form-label'=>' form-label fs-6 fw-bolder text-dark']) !!}
                       {!! Form::number ('loyer_initial',old('loyer_initial'),['class'=>$errors->has('nom') ? 'is-invalid form-control' : 'form-control form-control-lg form-control-solid inputform']) !!}
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
                     {!! Form::text ('charge',old('charge'),['class'=>$errors->has('nom') ? 'is-invalid form-control' : 'form-control form-control-lg form-control-solid inputform']) !!}
                        <div class="invalid-feedback">
                            {{$errors->first('charge')}}
                        </div> 
                        </div> 
                          <div class="col-xl-6">  
                    {!! Form::label('type_charge','Type de charge' ,['class'=>'required form-label', 'form-label'=>' form-label fs-6 fw-bolder text-dark']) !!}
                      {!! Form::text ('type_charge',old('type_charge'),['class'=>$errors->has('nom') ? 'is-invalid form-control' : 'form-control form-control-lg form-control-solid inputform']) !!}
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
                    {!! Form::date ('date_debut',old('date_debut'),['class'=>$errors->has('nom') ? 'is-invalid form-control' : 'form-control form-control-lg form-control-solid','style'=>'background-color:#9A9FAD']) !!}
                        <div class="invalid-feedback">
                            {{$errors->first('date_debut')}}
                        </div>
                        </div> 
                           <div class="col-xl-6 me-6">  
                  {!! Form::label('jour_paiement','Jour du mois de paiement' ,['class'=>'required form-label', 'form-label'=>' form-label fs-6 fw-bolder text-dark']) !!}      
                  {!! Form::number ('jour_paiement',old('jour_paiement'),['min'=>1,'max'=>31,'class'=>$errors->has('jour_paiement') ? 'is-invalid form-control' : 'form-control form-control-lg form-control-solid inputform']) !!}
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
                   {!! Form::text ('clause_revision_loyer',old('clause_revision_loyer'),['class'=>$errors->has('clause_revision_loyer') ? 'is-invalid form-control' : 'form-control form-control-lg form-control-solid inputform']) !!}
                        <div class="invalid-feedback">
                            {{$errors->first('clause_revision_loyer')}}
                        </div>

                        </div> 
                          <div class="col-xl-6 me-4">  
                    {!! Form::label('indice_reference','Indice de reference' ,['class'=>'required form-label', 'form-label'=>' form-label fs-6 fw-bolder text-dark']) !!}
                     {!! Form::text ('indice_reference',old('indice_reference'),['class'=>$errors->has('nom') ? 'is-invalid form-control' : 'form-control form-control-lg form-control-solid inputform']) !!}
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
                  {!! Form::text ('description_bail',old('description_bail'),['class'=>$errors->has('description_bail') ? 'is-invalid form-control' : 'form-control form-control-lg form-control-solid inputform']) !!}
                        <div class="invalid-feedback">
                            {{$errors->first('description_bail')}}
                        </div>

                        </div> 
                        
                          <div class="col-xl-6 me-6">  
                  {!! Form::label('clause_particuliere','Clause particuliere' ,['class'=>'required form-label', 'form-label'=>' form-label fs-6 fw-bolder text-dark']) !!}      
                  {!! Form::text ('clause_particuliere',old('clause_particuliere'),['class'=>$errors->has('description_bail') ? 'is-invalid form-control' : 'form-control form-control-lg form-control-solid inputform']) !!}
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
                  {!! Form::text ('garant_solidaire',old('garant_solidaire'),['class'=>$errors->has('description_bail') ? 'is-invalid form-control' : 'form-control form-control-lg form-control-solid inputform']) !!}
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
                           
                            {!! Form::checkbox('valider_automatiquement_paiement',null,'oui',['class'=>'form-check-input inputform']) !!}
                            
                           </div> 
                           </div> 
                         <div class="form-group col-6 d-md-flex me-7"> 
                                <div class="form-group col-md-9 me-2">       
                       {!! Form::label('envoyer_automatiquement_cheance','Envoyer l echeance automatiquement' ,['form-label'=>' form-label fs-6 fw-bolder text-dark']) !!}
                           </div>
                           <div class="form-group col-md-3 me-7">
                            
                      {!! Form::checkbox('envoyer_automatiquement_cheance',null,'oui',['class'=>'form-check-input inputform']) !!}
                            
                            
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
                           
                      {!! Form::checkbox('envoyer_automatiquement_quittance',null,'oui',['class'=>'form-check-input inputform']) !!}
                            
                           </div> 
                           </div> 
                         <div class="form-group col-6 d-md-flex me-7"> 
                                <div class="form-group col-md-9 me-2">       
                       {!! Form::label('rappeler_automatiquement_revision_loyer','rappeler automatiquement la révision du loyer' ,['form-label'=>' form-label fs-6 fw-bolder text-dark']) !!}
                           </div>
                           <div class="form-group col-md-3 me-7">
                           
                        {!! Form::checkbox('envoyer_automatiquement_quittance',null,'oui',['class'=>'form-check-input inputform']) !!}
                                
                            
                           </div> 
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
    </div>
</div>

   
    @section('script')
    <script src="{{url('assets_template/plugins/custom/datatables/datatables.bundle.js')}}"></script>
    <script src="{{url('assets_template/plugins/global/plugins.bundle.js')}}"></script>
    <script src="{{url("assets_template/plugins/select2/js/select2.full.min.js")}}"></script>
    <script src="{{url('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script>

    var myDropzone = new Dropzone("#kt_dropzonejs_example_1", {
    url: '{{route('ajouterphoto',$bien->slug)}}', // Set the url for your upload script location
    paramName: "file", // The name that will be used to transfer the file
    maxFiles: 20,
    maxFilesize: 20, // MB
    acceptedFiles: ".jpeg,.jpg,.png,.gif",
    uploadMultiple: true,
    addRemoveLinks: false,
     headers: {'X-CSRF-TOKEN': "{{ csrf_token() }}"},

    


   
    accept: function (file, done) {
          done();
            total_photos_counter++;
            $("#counter").text("# " + total_photos_counter);
        }

    });

  $("#kt_daterangepicker_3").daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        minYear: 2015,
        maxYear: parseInt(moment().format("YYYY"),12)
    }, function(start, end, label) {
        var years = moment().diff(start, "years");
        alert("You are " + years + " years old!");
    }
);
   

      $(".card-toolbar button").click(function () {
       
        $(this).parent().parent().next().slideToggle(400, function () {
           
          })

        })
        $(".svg-icon").click(function () {
          $(this).css('transform','rotate(180deg)')
        })


   
    </script>
    @endsection
@endsection