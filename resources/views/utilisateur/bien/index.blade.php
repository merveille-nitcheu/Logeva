@extends('utilisateur.layouts.app')
@section('style')
<!--DataTable Style-->
<link href="{{url('assets_template/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css"/>

@endsection
@section('barre')
<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
    <!--begin::Page title-->
    <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
        <!--begin::Title-->
        <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Biens</h1>
        <!--end::Title-->
        <!--begin::Separator-->
        <span class="h-20px border-gray-200 border-start mx-4"></span>
       
    </div>
    
      
</div>
@endsection

@section('content')
<section class="col-12">
<div class="col-12 d-flex flex-wrap">
   @foreach ($biens as $bien)
  <div class="col-xl-3 p-2">
     <!--begin::Mixed Widget 1-->
     <div class="card card-xl-stretch mb-xl-8">
       <!--begin::Body-->
       <div class="card-body p-0">
          <!--begin::Header-->
         
      
           <!--begin::Heading-->
           @if(count($bien->galerie) !=0)
           @foreach ($bien->galerie as $key => $photo)
       
        
            @if($key<1)
           <img src="{{asset('storage/'.$photo->photo)}}" alt="" class="w-100 rounded"/>
            @endif
           @endforeach
           @else
       
           <img src="{{asset('storage/photos_biens/default.jpg')}}" alt="" class="w-100 rounded" style="height:200px"/>
       
        
        
         @endif
         
        <!--end::Heading-->
        <!--begin::Balance-->
        
      
      
      <!--end::Header-->
      <!--begin::Items-->
      <div class="bg-body shadow-sm card-rounded mx-9 mb-9 px-6 py-9 position-relative z-index-1" style="margin-top: -100px">
        <!--begin::Item-->
        <div class="d-flex align-items-center mb-6">
          <!--begin::Symbol-->
          <div class="symbol symbol-30px w-20px me-5">
            <span class="symbol-label bg-lighten">
              <!--begin::Svg Icon | path: icons/duotone/Home/Globe.svg-->
              <span class="svg-icon svg-icon-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-union" viewBox="0 0 16 16">
                  <path d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2z"/>
                </svg>
              </span>
              <!--end::Svg Icon-->
            </span>
          </div>
          <!--end::Symbol-->
          <!--begin::Description-->
          <div class="d-flex align-items-center flex-wrap w-100">
            <!--begin::Title-->
            <div class="mb-1 pe-3 flex-grow-1">
              <a href="#" class="fs-6 text-gray-800  fw-bolder">Nom</a>
              <div class="text-gray-600 fw-bold fs-6">{{$bien->nom}}</div>
            </div>
            <!--end::Title-->
            <!--begin::Label-->
            
            <!--end::Label-->
          </div>
          <!--end::Description-->
        </div>
        <!--end::Item-->
        <!--begin::Item-->
        <div class="d-flex align-items-center mb-6">
          <!--begin::Symbol-->
          <div class="symbol symbol-30px w-20px me-5">
            <span class="symbol-label bg-lighten">
              <!--begin::Svg Icon | path: icons/duotone/Home/Globe.svg-->
              <span class="svg-icon svg-icon-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-diamond-fill" viewBox="0 0 16 16">
                  <path d="M9.05.435c-.58-.58-1.52-.58-2.1 0L4.047 3.339 8 7.293l3.954-3.954L9.049.435zm3.61 3.611L8.708 8l3.954 3.954 2.904-2.905c.58-.58.58-1.519 0-2.098l-2.904-2.905zm-.706 8.614L8 8.708l-3.954 3.954 2.905 2.904c.58.58 1.519.58 2.098 0l2.905-2.904zm-8.614-.706L7.292 8 3.339 4.046.435 6.951c-.58.58-.58 1.519 0 2.098l2.904 2.905z"/>
                </svg>
              </span>
              <!--end::Svg Icon-->
            </span>
          </div>
          <!--end::Symbol-->
          <!--begin::Description-->
          <div class="d-flex align-items-center flex-wrap w-100">
            <!--begin::Title-->
            <div class="mb-1 pe-3 flex-grow-1">
              <a href="#" class="fs-6 text-gray-800  fw-bolder">Type de Bien </a>
              <div class="text-gray-600 fw-bold fs-6">{{$bien->typeBien->libelle}}</div>
            </div>
            <!--end::Title-->
            <!--begin::Label-->
            
            <!--end::Label-->
          </div>
          <!--end::Description-->
        </div>
        <!--end::Item-->
        <!--begin::Item-->
        <div class="d-flex align-items-center mb-6">
          <!--begin::Symbol-->
          <div class="symbol symbol-30px w-20px me-5">
            <span class="symbol-label bg-lighten">
              <!--begin::Svg Icon | path: icons/duotone/Home/Globe.svg-->
              <span class="svg-icon svg-icon-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                   <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg>
              </span>
              <!--end::Svg Icon-->
            </span>
          </div>
          <!--end::Symbol-->
          <!--begin::Description-->
          <div class="d-flex align-items-center flex-wrap w-100">
            <!--begin::Title-->
            <div class="mb-1 pe-3 flex-grow-1">
              <a href="#" class="fs-6 text-gray-800  fw-bolder">Ville</a>
              <div class="text-gray-600 fw-bold fs-6">{{$bien->ville}}</div>
            </div>
            <!--end::Title-->
            <!--begin::Label-->
            
            <!--end::Label-->
          </div>
          <!--end::Description-->
        </div>
            <div class="d-flex align-items-center mb-6">
          <!--begin::Symbol-->
          <div class="symbol symbol-30px w-20px me-5">
            <span class="symbol-label bg-lighten">
              <!--begin::Svg Icon | path: icons/duotone/Home/Globe.svg-->
               <span class="svg-icon svg-icon-3">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>
                                            </span>
              <!--end::Svg Icon-->
            </span>
          </div>
          <!--end::Symbol-->
          <!--begin::Description-->
          <div class="d-flex align-items-center flex-wrap w-100">
            <!--begin::Title-->
            <div class="mb-1 pe-3 flex-grow-1"> 
              <a href="#" class="fs-6 text-gray-800  fw-bolder">Nom du proprietaire</a>
              <div class="text-gray-600 fw-bold fs-6">
              
                {{$bien->proprietaire->nom}}</div>
            </div>
            <!--end::Title-->
            <!--begin::Label-->
            
            <!--end::Label-->
          </div>
          <!--end::Description-->
        </div>
        <div class="d-flex align-items-center mb-6">
          <!--begin::Symbol-->
          <div class="symbol symbol-30px w-20px justify-content-center ms-15">
            <a href="{{url('/bien/'.$bien->slug)}}" class= "btn btn-sm btn-secondary" id="kt_toolbar_secondary_button">Details</a>
          </div>
          <!--end::Symbol-->
          <!--begin::Description-->
          
          <!--end::Description-->
        </div>
        <!--end::Item-->
        <!--begin::Item-->
        
        <!--end::Item-->
      </div>
      <!--end::Items-->
    </div>
    <!--end::Body-->
  </div>
 </div>
  @endforeach  <!--end::Mixed Widget 1-->

</div>
</section>
    
   
    @section('script')
    <script src="{{url('assets_template/plugins/custom/datatables/datatables.bundle.js')}}"></script>
    <script>
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