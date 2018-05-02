<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $prints->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Назва:') !!}
    <p>{!! $prints->name !!}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Фото:') !!}
    <p>{!! $prints->image !!}</p>
    <img class="tt" src="{{ asset('img/templates/') }}/{!! $prints->image !!}">
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Створено:') !!}
    <p>{!! $prints->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Оновлено:') !!}
    <p>{!! $prints->updated_at !!}</p>
</div>

