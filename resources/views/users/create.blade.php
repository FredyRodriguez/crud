@extends('layout')
@section('title',"Usuario Crear")
@section('content')
<h1>Crear Usuarios</h1>
<p><a href="{{route('user.index')}}" class="btn btn-primary"><b>Regresar</b></a></p>

    {!! Form::open(['url' => 'foo/bar', 'method'=>'POST','file' => true]) !!}
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group form-md-line-input">
                    {!!Form::label('name', 'Nombre')!!}
                    {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre','required','maxlength'=>'30', 'autocomplete' => 'off'])!!}            
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group form-md-line-input">
                    {!!Form::label('documento', 'Numero de Identificación')!!} 
                    {!!Form::number('documento',null,['class'=>'form-control','placeholder'=>'Documento','required','maxlength'=>'10'])!!}            
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group form-md-line-input">
                     {!!Form::label('telefono', 'Telefono')!!} 
                    {!!Form::number('telefono',null,['class'=>'form-control','placeholder'=>'Telefono','required','autocomplete'=>'off'])!!}            
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group form-md-line-input">
                    {!!Form::label('direccion', 'Dirección')!!}
                    {!!Form::text('direccion',null,['class'=>'form-control','placeholder'=>'Dirección','required','maxlength'=>'30'])!!}            
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group form-md-line-input">
                    {!!Form::label('genero', 'Genero')!!}
                    <select name="genero" id="genero" class="form-control">
                        <option value="Femenino">Femenino</option>
                        <option value="Masculini">Masculino</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group form-md-line-input">
                    {!!Form::label('pais', 'Pais')!!}
                    {!!Form::text('pais',null,['class'=>'form-control','placeholder'=>'Pais','required','maxlength'=>'10'])!!}            
                </div>
            </div>
        </div>
         <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group form-md-line-input">
                    {!!Form::label('ciudad', 'Ciudad')!!}
                    {!!Form::text('ciudad',null,['class'=>'form-control','placeholder'=>'Ciudad','required','maxlength'=>'30'])!!}            
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group form-md-line-input">
                    {!!Form::label('fecha', 'Fecha de Nacimiento')!!}
                    {!!Form::date('fecha',null,['class'=>'form-control','required'])!!}            
                </div>
            </div>
        </div> 
        <div class="form-group form-md-line-input">
            {!!Form::label('email', 'Correo')!!}
            {!!Form::text('email',null,['class'=>'form-control','required','placeholder'=>'E-mail', 'autocomplete'=>'off'])!!}            
        </div>   
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group form-md-line-input">
                    {!!Form::label('password', 'Contraseña')!!}
                    {!!Form::password('password',['class'=>'form-control','placeholder'=>'Contraseña','required','maxlength'=>'30'])!!}            
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group form-md-line-input">
                    {!!Form::label('password_confirmation', 'Confirmar Contraseña')!!}
                    {!!Form::password('password_confirmation',['class'=>'form-control','placeholder'=>'Confirmar Contraseña','required','maxlength'=>'30'])!!}            
                </div>
            </div>
        </div>   
        </div>
           <b>{!! Form::submit('Registrar', ['class'=>'btn btn-success']) !!}</b>
        </div> 
    {!! Form::close() !!}       
    
@endsection