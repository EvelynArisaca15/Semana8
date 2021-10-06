@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Crear Doctor</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::open(['route' => 'doctors.store']) !!}

            <div class="card-body">

                <div class="row">
                    @include('doctors.fields')
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit('Guardar', ['class' => 'btn btn-outline-danger']) !!}
                <a href="{{ route('doctors.index') }}" class="btn btn-outline-dark">Cancelar</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
