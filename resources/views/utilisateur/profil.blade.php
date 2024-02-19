@extends('utilisateur.layouts.app')
@section('barre')
<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
    <!--begin::Page title-->
    <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
        <!--begin::Title-->
        <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Profil</h1> 
        <span class="h-20px border-gray-200 border-start mx-4"></span>
       
    </div>
    
    
</div>
@endsection
@section('content')
<div class="card mb-5 mb-xl-10">
<div class="card-body pt-9 pb-0">
<div class="d-flex flex-wrap flex-sm-nowrap mb-3">
    <div class="me-7 mb-4">
        <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
            <img src="{{url('assets_template/media/avatars/150-26.jpg') }}" alt="image">
             <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-white h-20px w-20px"></div>
        </div> 
    </div>
    <div class="flex-grow-1">
        <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
            <div class="d-flex flex-column">
            <div class="d-flex align-items-center mb-2">
            <span class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1">{{ session('utilisateur')->nom }}</span>
            </div>
            <div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
            <span class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
             <span class="svg-icon svg-icon-4 me-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <path d="M11.575,21.2 C6.175,21.2 2.85,17.4 2.85,12.575 C2.85,6.875 7.375,3.05 12.525,3.05 C17.45,3.05 21.125,6.075 21.125,10.85 C21.125,15.2 18.825,16.925 16.525,16.925 C15.4,16.925 14.475,16.4 14.075,15.65 C13.3,16.4 12.125,16.875 11,16.875 C8.25,16.875 6.85,14.925 6.85,12.575 C6.85,9.55 9.05,7.1 12.275,7.1 C13.2,7.1 13.95,7.35 14.525,7.775 L14.625,7.35 L17,7.35 L15.825,12.85 C15.6,13.95 15.85,14.825 16.925,14.825 C18.25,14.825 19.025,13.725 19.025,10.8 C19.025,6.9 15.95,5.075 12.5,5.075 C8.625,5.075 5.05,7.75 5.05,12.575 C5.05,16.525 7.575,19.1 11.575,19.1 C13.075,19.1 14.625,18.775 15.975,18.075 L16.8,20.1 C15.25,20.8 13.2,21.2 11.575,21.2 Z M11.4,14.525 C12.05,14.525 12.7,14.35 13.225,13.825 L14.025,10.125 C13.575,9.65 12.925,9.425 12.3,9.425 C10.65,9.425 9.45,10.7 9.45,12.375 C9.45,13.675 10.075,14.525 11.4,14.525 Z" fill="#000000"></path>
                </svg>
              </span> <span>{{ session('utilisateur')->email }}</span>
            </span>
                                                        
        </div>
        </div> 
   </div>  
</div>  
</div>
</div>
</div>
<div class="col-12 mb-7 d-flex">
<div class=" col-6 card mb-5 mb-xl-10 me-4" id="kt_profile_details_view">
<div class="card-header cursor-pointer">
 <div class="card-title m-0">
    <h3 class="fw-bolder m-0">Detail du Profil</h3>
 </div>
 
 </div>
 <div class="card-body p-9">
  <div class="row mb-7">
    <label class="col-6 fw-bold text-muted ">Nom</label>
     <div class="col-6 fv-row">
      <span class="fw-bolder text-gray-800 fs-6">{{session('utilisateur')->nom}}</span>
     </div>
  </div>
  <div class="row mb-7">
    <label class="col-6 fw-bold text-muted ">Email</label>
     <div class="col-6 fv-row">
      <span class="fw-bolder text-gray-800 fs-6">{{session('utilisateur')->email}}</span>
     </div>
  </div>
  <div class="row mb-7">
    <label class="col-6 fw-bold text-muted">Telephone</label>
     <div class="col-6 fv-row">
      <span class="fw-bolder text-gray-800 fs-6">{{session('utilisateur')->telephone}}</span>
     </div>
  </div>
</div>
</div>
<div class=" col-6 card mb-5 mb-xl-10 ms-1 " id="kt_profile_details_view">
<div class="card-header cursor-pointer">
 <div class="card-title m-0">
    <h3 class="fw-bolder m-0">Editer profil</h3>
 </div>
 
 </div>
 {{ Form::open(['url' => route('modifprofiladmin',session('utilisateur')->slug), 'method' => 'PUT','enctype'=>'multipart/form-data']) }}
 <div class="card-body p-9">
  <div class="row mb-7">
  <div class="col-3 fv-row">
 {!! Form::label('nom','Nom' ,['class'=>'required form-label', 'form-label'=>' form-label fs-6 fw-bolder text-dark']) !!} 
  </div>
  <div class="col-9 fv-row">
 {!! Form::text ('nom',session('utilisateur')->nom,['class'=>$errors->has('nom') ? 'is-invalid form-control' : 'form-control form-control-lg form-control ']) !!}
 </div>
 </div>
<div class="row mb-7">
  <div class="col-3 fv-row">
 {!! Form::label('email','Email' ,['class'=>'required form-label', 'form-label'=>' form-label fs-6 fw-bolder text-dark']) !!} 
  </div>
  <div class="col-9 fv-row">
 {!! Form::text ('email',session('utilisateur')->email,['class'=>$errors->has('nom') ? 'is-invalid form-control' : 'form-control form-control-lg form-control ']) !!}
 </div>
 </div>
 <div class="row mb-7">
  <div class="col-3 fv-row">
 {!! Form::label('login','Identifiant' ,['class'=>'required form-label', 'form-label'=>' form-label fs-6 fw-bolder text-dark']) !!} 
  </div>
  <div class="col-9 fv-row">
 {!! Form::text ('login',session('utilisateur')->login,['class'=>$errors->has('nom') ? 'is-invalid form-control' : 'form-control form-control-lg form-control ']) !!}
 </div>
 </div>
 <div class="row mb-7">
  <div class="col-3 fv-row">
 {!! Form::label('telephone','Telephone' ,['class'=>'required form-label', 'form-label'=>' form-label fs-6 fw-bolder text-dark']) !!} 
  </div>
  <div class="col-9 fv-row">
 {!! Form::text ('telephone',session('utilisateur')->telephone,['class'=>$errors->has('nom') ? 'is-invalid form-control' : 'form-control form-control-lg form-control ']) !!}
 </div>
 </div>
 <div class="row mb-7">
  <div class="col-3 fv-row">
 {!! Form::label('password','Mot de passe' ,['form-label'=>' form-label fs-6 fw-bolder text-dark']) !!} 
  </div>
  <div class="col-9 fv-row">
 {!! Form::password ('password',['class'=>$errors->has('password') ? 'is-invalid form-control' : 'form-control form-control-lg form-control ']) !!}
 </div>
 </div>
 <div class="row mb-7">
  <div class="col-3 fv-row">
 {!! Form::label('password_confirmation','Confirmation de mot de passe' ,['form-label'=>' form-label fs-6 fw-bolder text-dark']) !!} 
  </div>
  <div class="col-9 fv-row">
 {!! Form::password ('password_confirmation',['class'=>$errors->has('password_confirmation') ? 'is-invalid form-control' : 'form-control form-control-lg form-control ']) !!}
 </div>
 </div>
 <div class="card-footer d-flex justify-content-end bg-white"style="
   margin-left: -2.3rem;margin-right: -2.3rem;margin-bottom: -2.3rem;">
 {!! Form::submit('Enregistrer',['class'=>'btn btn-secondary']) !!}
 </div>
</div>
{{ Form::close() }}
</div>
</div>
@endsection