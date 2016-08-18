@extends('layouts.app')

@section('content')

    <div class="container-fluid">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Pacientes</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('pacientes.create') !!}">Añadir Nuevo</a>
        </div>

        <div class="row">
            @if($pacientes->isEmpty())
                <div class="well text-center">No se encontraron Pacientes.</div>
            @else
                @include('pacientes.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $pacientes])


    </div>
@endsection
