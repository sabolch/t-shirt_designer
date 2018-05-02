<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $color->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Назва:') !!}
    <p>{!! $color->name !!}</p>
</div>

<!-- Color Field -->
<div class="form-group">
    {!! Form::label('color', 'Колір:') !!}
    <p>{!! $color->color !!}</p>
    <span style="background-color:{!! $color->color !!}; padding: 5px 12px 5px 12px; "></span>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Створено:') !!}
    <p>{!! $color->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Оновлено:') !!}
    <p>{!! $color->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Вилучено:') !!}
    <p>{!! $color->deleted_at !!}</p>
</div>

