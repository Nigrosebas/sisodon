@extends('layouts.app')

@section('content')
<div class="container-fluid">

    @include('common.errors')

    {!! Form::open(['route' => 'pacientes.store']) !!}

        @include('pacientes.fields')

    {!! Form::close() !!}
</div>
@endsection
