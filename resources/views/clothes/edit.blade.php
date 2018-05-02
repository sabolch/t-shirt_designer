@extends('layouts.admin')

@section('content')
    <section class="content-header">
        <h1>
            Футболки
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($clothes, ['route' => ['clothes.update', $clothes->id], 'method' => 'patch']) !!}

                        @include('clothes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection