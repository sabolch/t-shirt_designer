@extends('layouts.admin')

@section('content')
    <section class="content-header">
        <h1>
            Принти
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($prints, ['route' => ['prints.update', $prints->id], 'method' => 'patch']) !!}

                        @include('prints.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection