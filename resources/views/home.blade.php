@extends('layouts.app')
@section('barre')
<div class="toolbar" id="kt_toolbar">
                            <!--begin::Container-->
                <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                    <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                     </div>
                                
                     <div class="d-flex align-items-center py-1">
                                    
                     <div class="me-4">
                                        
                       <a href="{{route('connexionform')}}" class="btn btn-light-primary"  id="kt_toolbar_primary_button">Se connecter</a>
                     </div>
                                   
                      <a href="{{route(('inscription'))}}" class="btn btn-light-primary"  id="kt_toolbar_primary_button">S'inscrire</a>
                             

   
                     </div>
                               
                    </div>
                            
                    </div>

@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
