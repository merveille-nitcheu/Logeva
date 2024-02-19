@extends('proprietaire.layouts.app')

@section('barre')
<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
    <!--begin::Page title-->
    <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
        <!--begin::Title-->
        <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Dashboard</h1>
        <!--end::Title-->
        <!--begin::Separator-->
        <span class="h-20px border-gray-200 border-start mx-4"></span>
       
    </div>
    
    
</div>
@endsection
@section('content')
{{ Form::open(['url' => route('valuescheck',$mot), 'method' => 'POST','enctype'=>'multipart/form-data']) }}
                   <div class="form-group col-md-6 me-7">
                    {!! Form::label('mot', 'entrez le mot',['class'=>'required form-label']) !!}
                    {{ Form::text('mot', old('mot'), ['class' => $errors->has('nom') ? 'is-invalid form-control' : 'form-control']) }}
                        <div class="invalid-feedback">
                            {{ $errors->first('mot') }}
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                {!! Form::submit('entrer', ['class' => 'btn btn-primary']) !!}
                {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
            </div>
            {{ Form::close() }}
bienvenue
@endsection