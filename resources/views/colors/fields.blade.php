<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Назва:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Color Field -->
<div class="form-group col-sm-6">
    {!! Form::label('color', 'Колір:') !!}
    {!! Form::color('color', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Зберегти', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('colors.index') !!}" class="btn btn-default">Скасувати</a>
</div>
