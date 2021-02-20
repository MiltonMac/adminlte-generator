<div class="table-responsive">
    <table class="table" id="docentes-table">
        <thead>
            <tr>
                <th>Cedula</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Correo</th>
        <th>Celular</th>
        <th>Estado</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($docentes as $docentes)
            <tr>
                <td>{{ $docentes->cedula }}</td>
            <td>{{ $docentes->nombre }}</td>
            <td>{{ $docentes->apellido }}</td>
            <td>{{ $docentes->correo }}</td>
            <td>{{ $docentes->celular }}</td>
            <td>{{ $docentes->estado }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['docentes.destroy', $docentes->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        @can('view_docentes')
                        <a href="{{ route('docentes.show', [$docentes->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        @endcan

                        @can('edit_docentes')
                        <a href="{{ route('docentes.edit', [$docentes->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        @endcan

                        <!-- {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!} -->
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
