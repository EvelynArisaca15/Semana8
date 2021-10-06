@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Cita Detalles<i class="fa fa-check-square" aria-hidden="true"></i></h1>
                </div>
                <div class="col-sm-6">
                    <a class=" float-right"
                       href="{{ route('citaDetalles.create') }}">
                       <button type="button" class="btn btn-outline-dark">Agregar <i class="fa fa-calendar" aria-hidden="true"></i></button>
                        
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
                @include('cita_detalles.table')

                <div class="card-footer clearfix float-right">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

