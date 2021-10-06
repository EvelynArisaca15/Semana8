@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Usuarios <i class="fa fa-users" aria-hidden="true"></i></h1>
                    
                </div>
                <div class="col-sm-6">
                    
                    <a class=" float-right"
                    
                       href="{{ route('usuarios.create') }}">
                     
                       <button type="button" class="btn btn-outline-success">Agregar <i class="fa fa-user" aria-hidden="true"></i></button> 
                       
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">
    
        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                
                @include('usuarios.table')

                <div class="card-footer clearfix float-right">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

