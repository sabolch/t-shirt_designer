<table class="table table-responsive" id="dataTable">
    <thead>
        <tr>
            <th>Назва</th>
        <th>Колір</th>
            <th>Дія</th>
        </tr>
    </thead>
    <tbody>
    @foreach($colors as $color)
        <tr>
            <td>{!! $color->name !!}</td>
            <td>
                <span style="background-color:{!! $color->color !!}; padding: 5px 12px 5px 12px; "></span>

            </td>
            <td>
                {!! Form::open(['route' => ['colors.destroy', $color->id], 'method' => 'delete']) !!}
                <a href="{!! route('colors.show', [$color->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                <a href="{!! route('colors.edit', [$color->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Ти впевнений?')"]) !!}
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>