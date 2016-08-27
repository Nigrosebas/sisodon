<!-- Accion Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('accion', 'Accion:') !!}
	{!! Form::text('accion', null, ['class' => 'form-control']) !!}
</div>

<!-- Precio Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('precio', 'Precio:') !!}
	{!! Form::text('precio', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
