@extends('layouts.admin')

@section('content')
    <section class="content-header">
        <h1>
            Футболки
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('clothes.show_fields')
                    <a href="{!! route('clothes.index') !!}" class="btn btn-default">Назад</a>
                </div>
            </div>
        </div>
    </div>
@endsection
