@extends('layouts.app')

@section('content')
<div class="container-fluid">

    @include('common.errors')

    {!! Form::model($pacientes, ['route' => ['pacientes.update', $pacientes->id], 'method' => 'patch']) !!}

        @include('pacientes.e_fields')

    {!! Form::close() !!}
</div>
@endsection
