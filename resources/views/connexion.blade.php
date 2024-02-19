<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <title></title>



<!--DataTable Style-->
<link href="{{url('assets_template/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{url('assets_template/css/style.bundle.css')}}" rel="stylesheet" type="text/css"/>
</head>


<body id="kt_body" class="bg-light">
<div class="d-flex flex-column flex-root">
            <!--begin::Authentication - Sign-in -->
            <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(../../../assets/media/illustrations/development-hd.png)">
                <!--begin::Content-->
                <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-30">
                    
                    <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                        <!--begin::Form-->
                        {{ Form::open(['url' => route('connexion'), 'method' => 'POST'])}}

                            <div class="text-center mb-10">
                                <!--begin::Title-->
                                <h1 class="text-dark mb-3">Se connecter à Logeva</h1>
                                <!--end::Title-->
                                <!--begin::Link-->
                                <div class="text-gray-400 fw-bold fs-4">Nouveau? 
                                <a href="{{route(('inscriptionform'))}}" class="link-primary fw-bolder">Creer un compte</a></div>
                                <!--end::Link-->
                            </div>
                            <!--begin::Heading-->
                            <!--begin::Input group-->
                <div class="fv-row mb-10 fv-plugins-icon-container">
                    {!! Form::label('email','Adresse email' ,['class'=>'required form-label', 'form-label'=>' form-label fs-6 fw-bolder text-dark']) !!}
                     {!! Form::email ('email',old("email"),['class'=>$errors->has('email') ? 'is-invalid form-control' : 'form-control form-control-lg form-control-solid']) !!}
                        <div class="invalid-feedback">
                            {{$errors->first('email')}}
                        </div> 
                </div> 
                            
                            
                            
              <div class="fv-row mb-10 fv-plugins-icon-container">
                                <div class="d-flex flex-stack mb-2">
                            {!! Form::label('password','Mot de passe' ,['class'=>'required form-label', 'form-label'=>' form-label fs-6 fw-bolder text-dark']) !!}
                                    <!--end::Label-->
                                    <!--begin::Link-->
                                    
                                </div>
                            {!! Form::password ('password',['class'=>$errors->has('password') ? 'is-invalid form-control' : 'form-control form-control-lg form-control-solid']) !!}
                        <div class="invalid-feedback">
                            {{$errors->first('password')}}
                        </div> 
             </div> 
            <div class="fv-row mb-10 fv-plugins-icon-container">        
                         <div class="text-center">
                                <!--begin::Submit button-->
                            <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
                                <span class="indicator-label">Continuer</span>
                                <span class="indicator-progress">Please wait... 
                                <span class="spinner-border spinner-border-sm align-middle ms-2">
                                        
                                    </span></span>
                                </button>
                                
                                  @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Mot de passe oublié?') }}
                                    </a>
                                @endif
                                
                            </div>
                        </div> 
                            <!--end::Actions-->
                        
                         {{ Form::close() }}
                     
                        
                    </div>
                    <!--end::Wrapper-->
                </div>
                
            </div>
            <!--end::Authentication - Sign-in-->
        </div>
<script src="{{url('assets_template/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{url('assets_template/js/scripts.bundle.js')}}"></script>
<script src="{{url('assets_template/js/custom/authentication/sign-in/general.js')}}"></script>

    <script>

toastr.options = {
  "closeButton": false,
  "debug": false,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
};
@if(Session::has('Message'))
    toastr.success("{{session('Message')}}"); 
@endif  

@if(Session::has('Error'))
    toastr.error("{{session('Error')}}"); 
@endif  
        </script>
</body>


</html>





