<table class="table" id="pacientes">
    <thead>
    <th>Nombre</th>
			<th>Apellido M</th>
			<th>Apellido P</th>
			<th>Rut</th>
			<th>Sexo</th>
			<th>Direccion</th>
			<th>Telefono</th>
			<th>Email</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($pacientes as $pacientes)
        <tr>
            <td>{!! $pacientes->nombre !!}</td>
			<td>{!! $pacientes->apellido_m !!}</td>
			<td>{!! $pacientes->apellido_p !!}</td>
			<td>{!! $pacientes->rut !!}</td>
			<td>{!! $pacientes->sexo !!}</td>
			<td>{!! $pacientes->direccion !!}</td>
			<td>{!! $pacientes->telefono !!}</td>
			<td>{!! $pacientes->email !!}</td>
            <td>
                <a href="{!! route('pacientes.edit', [$pacientes->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('pacientes.delete', [$pacientes->id]) !!}" onclick="return confirm('Are you sure wants to delete this Pacientes?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<link rel="stylesheet" href="{!! asset('packages/js/jquery.dataTable.css')!!}" >
<script type="text/javascript" src="{!! asset('packages/js/jquery.dataTable.js')!!}"></script>
<script type="text/javascript">
    $(document).ready(function () {
    $('#pacientes').dataTable({
        "fnInitComplete": function (oSettings, json) {
            $('#pacientes').show();
        }
    });
})
</script>
