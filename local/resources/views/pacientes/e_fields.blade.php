<!-- Nombre Field -->

<h1>Datos del Nuevo Paciente</h1>
<div class="panel panel-default">
    <div class="panel-heading">Datos Obligatorios</div>
 		<div class="panel-body">
			<div class="form-group col-sm-6 col-lg-4">
			    {!! Form::label('nombre', 'Nombre:') !!}
				{!! Form::text('nombre', null, ['class' => 'form-control']) !!}
			</div>
			<!-- Nombre Field -->
			<div class="form-group col-sm-6 col-lg-4">
			    {!! Form::label('apellido_p', 'Apellido Paterno:') !!}
				{!! Form::text('apellido_p', null, ['class' => 'form-control']) !!}
			</div>
			<!-- Nombre Field -->
			<div class="form-group col-sm-6 col-lg-4">
			    {!! Form::label('apellido_m', 'Apellido Materno:') !!}
				{!! Form::text('apellido_m', null, ['class' => 'form-control']) !!}
			</div>
			<!-- Rut Field -->
			<div class="form-group col-sm-6 col-lg-4">
			    {!! Form::label('rut', 'Rut:') !!}
				{!! Form::text('rut', null, ['class' => 'form-control','disabled'=>'disabled']) !!}
				{!! Form::hidden('rut', null, ['class' => 'form-control']) !!}
			</div>
						<!-- Telefono Field -->
			<div class="form-group col-sm-6 col-lg-4">
			    {!! Form::label('telefono', 'Telefono') !!}
				{!! Form::text('telefono', null, ['class' => 'form-control']) !!}
			</div>
		</div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">Datos No Obligatorios</div>
    <div class="panel-body">
		<!-- Email Field -->
		<div class="form-group col-sm-6 col-lg-4">
		    {!! Form::label('email', 'Email:') !!}
			{!! Form::email('email', null, ['class' => 'form-control']) !!}
		</div>
		<!-- Dirección Field -->
		<div class="form-group col-sm-6 col-lg-4">
		    {!! Form::label('direccion', 'Direccion:') !!}
			{!! Form::text('direccion', null, ['class' => 'form-control']) !!}
		</div>
	</div>
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
