@extends('layouts.app')

@section('content')
<div class="container-fluid">

    @include('common.errors')

    {!! Form::model($acciones, ['route' => ['acciones.update', $acciones->id], 'method' => 'patch']) !!}

        @include('acciones.fields')

    {!! Form::close() !!}
</div>
@endsection
