
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
                <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-30">
                    
                    <!--end::Logo-->
                    <!--begin::Wrapper-->
                    <div class="w-lg-600px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                        <!--begin::Form-->
                        
                            {{ Form::open(['url' => route('connexion2'), 'method' => 'POST']) }}
                            <!--begin::Heading-->
                            <div class="text-center mb-10">
                                <!--begin::Title-->
                                <h1 class="text-dark mb-3">Se connecter à Logeva</h1>
                                <!--end::Title-->
                                <!--begin::Link-->
                                <div class="text-gray-400 fw-bold fs-4">Nouveau? 
                                <a href="{{route(('inscriptionform'))}}" class="link-primary fw-bolder">Creer un compte</a></div>
                                <!--end::Link-->
                            </div>
                            
                            <!--begin::Separator-->
                            <div class="d-flex align-items-center mb-10">
                                <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                                <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                            </div>
                            <!--end::Separator-->
                            <!--begin::Input group-->
                       
                                <!--end::Col-->
                            
                            <!--end::Input group-->
                            <!--begin::Input group-->
               

               
             
                            

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

                    <input class="form-check-input" type="hidden" name="email" value="{{$email}}">   
                    
                               
                            <div class="fv-plugins-message-container invalid-feedback"></div></div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="text-center">
                                <button type="submit" id="kt_sign_up_submit" class="btn btn-lg btn-primary">
                                    <span class="indicator-label">Se Connecter</span>
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
