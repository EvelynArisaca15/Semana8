@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Doctors <i class="fa fa-user-md" aria-hidden="true"></i></h1>
                </div>
                <div class="col-sm-6">
                    <a class=" float-right"
                       href="{{ route('doctors.create') }}">
                       <button type="button" class="btn btn-outline-danger">Agregar  <i class="fa fa-user-md" aria-hidden="true"></i></button>
                      
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
                @include('doctors.table')

                <div class="card-footer clearfix float-right">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

