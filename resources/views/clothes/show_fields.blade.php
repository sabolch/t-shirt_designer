<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $clothes->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Назва:') !!}
    <p>{!! $clothes->name !!}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Фото:') !!}
    <p>{!! $clothes->image !!}</p>
    <img class="cloth" src="{{asset('img/')}}/t-shirts/{!! $clothes->image !!}_front.png">
    <img class="cloth" src="{{asset('img/')}}/t-shirts/{!! $clothes->image !!}_back.png">
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Створено:') !!}
    <p>{!! $clothes->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Оновлено:') !!}
    <p>{!! $clothes->updated_at !!}</p>
</div>

