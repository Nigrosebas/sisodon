<table class="table" id="acciones">
    <thead>
			<th>Accion</th>
			<th>Precio</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($acciones as $acciones)
        <tr>
			<td>{!! $acciones->accion !!}</td>
			<td>{!! $acciones->precio !!}</td>
            <td>
                <a href="{!! route('acciones.edit', [$acciones->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('acciones.delete', [$acciones->id]) !!}" onclick="return confirm('Are you sure wants to delete this Acciones?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<link rel="stylesheet" href="{!! asset('packages/js/jquery.dataTable.css')!!}" >
<script type="text/javascript" src="{!! asset('packages/js/jquery.dataTable.js')!!}"></script>
<script type="text/javascript">
    $(document).ready(function () {
    $('#acciones').dataTable({
        "fnInitComplete": function (oSettings, json) {
            $('#pacientes').show();
        }
    });
})
</script>

