
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <title></title>



<!--DataTable Style-->
<link href="{{url('assets_template/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{url('assets_template/css/style.bundle.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{url('assets_template/media/logos/favicon.ico')}}" rel="shortcut icon" type="text/css"/>
</head>


<body id="kt_body" class="bg-light">
<div class="d-flex flex-column flex-root">
            <!--begin::Authentication - Sign-up -->
            <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(../../../assets/media/illustrations/development-hd.png)">
                <!--begin::Content-->
                <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                    
                    <!--end::Logo-->
                    <!--begin::Wrapper-->
                    <div class="w-lg-600px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                        <!--begin::Form-->
                        
                            {{ Form::open(['url' => route('inscription'), 'method' => 'POST']) }}
                            <!--begin::Heading-->
                            <div class="mb-10 text-center">
                                <!--begin::Title-->
                                <h1 class="text-dark mb-3">Creer un compte</h1>
                            
                                <div class="text-gray-400 fw-bold fs-4">compte deja existant? 
                                <a href="{{ route('connexionform') }}" class="link-primary fw-bolder">Se connecter ici</a></div>
                                <!--end::Link-->
                            </div>
                            
                            <!--begin::Separator-->
                            <div class="d-flex align-items-center mb-10">
                                <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                                <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                            </div>
                            <!--end::Separator-->
                            <!--begin::Input group-->
                            <div class="row fv-row mb-7 fv-plugins-icon-container">
                                <!--begin::Col-->
                                  
                    {!! Form::label('nom','Nom' ,['class'=>'required form-label', 'form-label'=>' form-label fs-6 fw-bolder text-dark']) !!}
                     {!! Form::text ('nom',old("nom"),['class'=>$errors->has('nom') ? 'is-invalid form-control' : 'form-control form-control-lg form-control-solid']) !!}
                        <div class="invalid-feedback">
                            {{$errors->first('nom')}}
                        </div> 
                      </div> 
                                <!--end::Col-->
                            
                            <!--end::Input group-->
                            <!--begin::Input group-->
                <div class="fv-row mb-7 fv-plugins-icon-container">
                                  
                    {!! Form::label('email','Adresse email' ,['class'=>'required form-label', 'form-label'=>' form-label fs-6 fw-bolder text-dark']) !!}
                     {!! Form::email ('email',old("email"),['class'=>$errors->has('email') ? 'is-invalid form-control' : 'form-control form-control-lg form-control-solid']) !!}
                        <div class="invalid-feedback">
                            {{$errors->first('email')}}
                        </div> 
                </div> 

                 <div class="fv-row mb-7 fv-plugins-icon-container">
                                  
                    {!! Form::label('login','Identifiant' ,['class'=>'required form-label', 'form-label'=>' form-label fs-6 fw-bolder text-dark']) !!}
                    {!! Form::text('login',old('login'),['class'=>$errors->has('login') ? 'is-invalid form-control' : 'form-control form-control-lg form-control-solid']) !!}
                        <div class="invalid-feedback">
                            {{$errors->first('login')}}
                        </div> 
                </div> 
                <div class="fv-row mb-7 fv-plugins-icon-container">
                                  
                     {!! Form::label('telephone','Numero de telephone' ,['class'=>'required form-label', 'form-label'=>' form-label fs-6 fw-bolder text-dark']) !!}
                     {!! Form::text ('telephone',null,['class'=>$errors->has('telephone') ? 'is-invalid form-control' : 'form-control form-control-lg form-control-solid']) !!}
                        <div class="invalid-feedback">
                            {{$errors->first('telephone')}}
                        </div>  
                </div> 
                            
                            <div class="mb-10 fv-row fv-plugins-icon-container" data-kt-password-meter="true">
                                <!--begin::Wrapper-->
                                <div class="mb-1">
                                    {!! Form::label('password','Mot de passe' ,['class'=>'required form-label', 'form-label'=>' form-label fs-6 fw-bolder text-dark']) !!}
                                    <!--end::Label-->
                                    <!--begin::Input wrapper-->
                                    <div class="position-relative mb-3">
                                        {!! Form::password ('password',['class'=>$errors->has('password') ? 'is-invalid form-control' : 'form-control form-control-lg form-control-solid']) !!}
                                    <div class="invalid-feedback">
                                        {{$errors->first('password')}}
                                    </div> 
                                         <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                            data-kt-password-meter-control="visibility">
                                               
 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-slash-fill fs-2 d-none" viewBox="0 0 16 16">
  <path d="m10.79 12.912-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
  <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829zm3.171 6-12-12 .708-.708 12 12-.708.708z"/>
</svg>

                                               
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill fs-2" viewBox="0 0 16 16">
  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
  <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
</svg>
                                            </span>
                                    </div>
                                    <!--end::Input wrapper-->
                                    <!--begin::Meter-->
                                   
                                    <!--end::Meter-->
                                </div>
                                
                                <!--end::Hint-->
                            <div class="fv-plugins-message-container invalid-feedback"></div></div>
                            <!--end::Input group=-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-5 fv-plugins-icon-container">
                                {!! Form::label('password_confirmation','Confirmation mot de passe' ,['class'=>'required form-label', 'form-label'=>' form-label fs-6 fw-bolder text-dark']) !!}
                                {!! Form::password ('password_confirmation',['class'=>$errors->has('password_confirmation') ? 'is-invalid form-control' : 'form-control form-control-lg form-control-solid']) !!}
                                    <div class="invalid-feedback">
                                        {{$errors->first('password_confirmation')}}
                                    </div> 
                              <div class="fv-plugins-message-container invalid-feedback"></div>
                           </div>

                          <div class="fv-row mb-7 mt-8 fv-plugins-icon-container">
                           <div class="col-12 d-md-flex">
                                <div class="form-group col-6 d-md-flex me-10 ms-10"> 
                                <div class="form-group col-md-3 me-20">       
                       {!! Form::label('proprietaire','Proprietaire' ,['form-label'=>' form-label fs-6 fw-bolder text-dark']) !!}
                           </div>
                           <div class="form-group col-md-3 me-7 ">
                           <label class="form-check form-check-custom form-check-solid form-check-inline">
                            <input class="form-check-input" type="radio" name="table" value="proprietaire" id="proprietaire">
                            </label> 
                           </div> 
                           </div> 
                         <div class="form-group col-6 d-md-flex me-7"> 
                                <div class="form-group col-md-3 me-10">       
                       {!! Form::label('locataire','Locataire' ,['form-label'=>' form-label fs-6 fw-bolder text-dark']) !!}
                           </div>
                           <div class="form-group col-md-3 me-7">
                            <label class="form-check form-check-custom form-check-solid form-check-inline">
                        <input class="form-check-input" type="radio" name="table" value="locataire" id="locataire">
                                </label>
                            
                           </div> 
                           </div> 
                           </div>
                         
                         </div> 
                             <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-10 fv-plugins-icon-container">
                               
                            <div class="fv-plugins-message-container invalid-feedback"></div></div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="text-center">
                                <button type="submit" id="kt_sign_up_submit" class="btn btn-lg btn-primary">
                                    <span class="indicator-label">S'inscrire</span>
                                    <span class="indicator-progress">Please wait... 
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
                            <!--end::Actions-->
                        <div>
                            
                        </div>
                         {{ Form::close() }}
                        <!--end::Form-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Content-->
                <!--begin::Footer-->
                
                <!--end::Footer-->
            </div>
            <!--end::Authentication - Sign-up-->
        </div>
<script src="{{url('assets_template/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{url('assets_template/js/scripts.bundle.js')}}"></script>
<script src="{{url('assets_template/js/custom/authentication/sign-up/general.js')}}"></script>
<script>
    


 


</script>
</body>


</html>
