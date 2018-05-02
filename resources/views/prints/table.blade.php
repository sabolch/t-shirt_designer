<style>
    .tt{
        width: 100px;
        max-width: 100px;
        max-height: 100px;
    }
</style>
<table class="table table-responsive"  id="dataTable">
    <thead>
        <tr>
        <th>Фото</th>
            <th>Дія</th>
        </tr>
    </thead>
    <tbody>
    @foreach($prints as $prints)
        <tr>
            <td>
                <img class="tt" src="{{ asset('img/templates/') }}/{!! $prints->image !!}">
            </td>
            <td>
                {!! Form::open(['route' => ['prints.destroy', $prints->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('prints.show', [$prints->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>