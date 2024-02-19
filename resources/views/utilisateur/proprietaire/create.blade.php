@extends('utilisateur.layouts.app')
@section('barre')
<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
    <!--begin::Page title-->
    <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
        <!--begin::Title-->
        <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Ajout Proprietaire</h1>
        <!--end::Title-->
        <!--begin::Separator-->
        <span class="h-20px border-gray-200 border-start mx-4"></span>
       
    </div>
    
    
</div>
@endsection
@section('content')
    <div class="col-12">
        <div class="card card-primary">
            {{ Form::open(['url' => 'proprietaire', 'method' => 'POST']) }}
            
            <div class="card-body bg-light justify-content-center">
                {!! Form::token() !!}
                <div class="col-12 d-md-flex">
                    <div class="form-group col-md-6 me-7">
                        {!! Form::label('nom','Nom',['class'=>'required form-label']) !!}
                        {!! Form::text('nom',old('nom'),['class'=>$errors->has('nom') ? 'is-invalid form-control' : 'form-control','placeholder'=>'Votre nom']) !!}
                        <div class="invalid-feedback">
                            {{$errors->first('nom')}}
                        </div>  
                    </div>
                    <div class="form-group col-md-6 me-7 ">
                        {!! Form::label('email','Adresse email' ,['class'=>'required form-label']) !!}
                        {!! Form::email ('email',old("email"),['class'=>$errors->has('email') ? 'is-invalid form-control' : 'form-control','placeholder'=>'Votre adresse email']) !!}
                        <div class="invalid-feedback">
                            {{$errors->first('email')}}
                        </div>  
                    </div>
                    
                </div>
                <div class="col-12 d-md-flex mt-4">
                    <div class="form-group col-md-6 me-7 ">
                        {!! Form::label('login','Identifiant' ,['class'=>'required form-label']) !!}
                        {!! Form::text('login',old('login'),['class'=>$errors->has('login') ? 'is-invalid form-control' : 'form-control','placeholder'=>'Votre login']) !!}
                        <div class="invalid-feedback">
                            {{$errors->first('login')}}
                        </div>  
                    </div>
                    <div class="form-group col-md-6 me-7">
                        {!! Form::label('telephone','Numero de telephone' ,['class'=>'required form-label']) !!}
                        {!! Form::text ('telephone',null,['class'=>$errors->has('telephone') ? 'is-invalid form-control' : 'form-control','placeholder'=>'Votre numero de telephone']) !!}
                        <div class="invalid-feedback">
                            {{$errors->first('telephone')}}
                        </div>  
                    </div>
                  

                </div>
                <div class="col-12 d-md-flex mt-4">
                    <div class="form-group col-md-6 me-7">
                        {!! Form::label('password','Mot de passe' ,['class'=>'required form-label']) !!}
                        {!! Form::password ('password',['class'=>$errors->has('password') ? 'is-invalid form-control' : 'form-control','placeholder'=>'Votre mot de passe']) !!}
                        <div class="invalid-feedback">
                            {{$errors->first('password')}}
                        </div>  
                    </div>
                    <div class="form-group col-md-6 me-7">
                        {!! Form::label('password_confirmation','Confirmation mot de passe' ,['class'=>'required form-label']) !!}
                        {!! Form::password('password_confirmation',['class'=>$errors->has('password_confirmation') ? 'is-invalid form-control' : 'form-control','placeholder'=>'Veuillez récrire votre mot de passe']) !!}
                        <div class="invalid-feedback">
                            {{$errors->first('password_confirmation')}}
                        </div>  
                    </div>
                    
                </div>
                
            </div>
            <div class="card-footer d-flex justify-content-end bg-light">
                {!! Form::submit('S\'inscrire',['class'=>'btn btn-primary']) !!}
                {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
            </div>
            {{ Form::close() }}
        </div>
    </div>
@endsection
