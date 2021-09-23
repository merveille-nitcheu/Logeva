@extends('layouts.app')
@section('style')
<!--DataTable Style-->
<link href="{{url('assets_template/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css"/>

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
    <a href="#" class="btn btn-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">Actions 
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
        <img src="{{asset('storage/'.$photo->photo)}}" alt="" class="w-100 rounded"/>
        </div>
        @endforeach
        @else
    
        <img src="{{asset('storage/photos_biens/default.jpg')}}" alt="" class="w-100 rounded" style="height:290px"/>
    
     
     
      @endif
    
        
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


   
    @section('script')
    <script src="{{url('assets_template/plugins/custom/datatables/datatables.bundle.js')}}"></script>
    <script>

      $(".card-toolbar button").click(function () {
       
        $(this).parent().parent().next().slideToggle(400, function () {
           
          })
})
        $(".svg-icon").click(function () {
          $(this).css('transform','rotate(180deg)')
        })


   $("#kt_datatable_example_5").DataTable({
    "language": {
  "lengthMenu": "Show _MENU_",
 },
 
 "dom":
  "<'row'" +
  "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
  "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
  ">" +

  "<'table-responsive'tr>" +

  "<'row'" +
  "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
  "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
  ">"
    })
    </script>
    @endsection
@endsection