@extends('layouts.app')

@section('content')
<div class="container-fluid">

    @include('common.errors')

    {!! Form::open(['route' => 'acciones.store']) !!}

        @include('acciones.fields')

    {!! Form::close() !!}
</div>
@endsection
