@extends('layouts.app')

@section('content')

    <div class="container-fluid">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Acciones</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('acciones.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($acciones->isEmpty())
                <div class="well text-center">No Acciones found.</div>
            @else
                @include('acciones.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $acciones])


    </div>
@endsection
