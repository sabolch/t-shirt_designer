<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Назва:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6 image">
    {!! Form::label('image', 'Фото:') !!}
    {!! Form::text('image', null, ['class' => 'form-control image']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Зберети', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('prints.index') !!}" class="btn btn-default">Скасувати</a>
</div>
