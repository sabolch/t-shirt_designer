@extends('layouts.admin')

@section('content')
    <section class="content-header">
        <h1>
            Колір
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($color, ['route' => ['colors.update', $color->id], 'method' => 'patch']) !!}

                        @include('colors.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection