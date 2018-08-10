@extends('layout')
@section('title',"Usuario Crear")
@section('content')
<h1>Crear Usuarios</h1>
<?php $message = Session::get('message')?>
@if($message == 'store')
    <div class="alert alert-success alert-dismissible fade show" role="alert">        
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
         </button>
        Usuario Creado Correctamente
    </div>
@endif
<p><a href="{{route('user.index')}}" class="btn btn-primary"><b>Regresar</b></a></p>
{!! Form::model($id,['route' =>['user.update',$id], 'method'=>'PUT','file' => true,'enctype'=>'multipart/form-data']) !!}
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
                    {!!Form::number('documento',null,['class'=>'form-control','placeholder'=>'Documento','maxlength'=>'10'])!!}            
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group form-md-line-input">
                     {!!Form::label('telefono', 'Telefono')!!} 
                    {!!Form::number('telefono',null,['class'=>'form-control','placeholder'=>'Telefono','autocomplete'=>'off'])!!}            
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group form-md-line-input">
                    {!!Form::label('direccion', 'Dirección')!!}
                    {!!Form::text('direccion',null,['class'=>'form-control','placeholder'=>'Dirección','maxlength'=>'30'])!!}            
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group form-md-line-input">
                    {!!Form::label('genero', 'Genero')!!}
                    <select name="genero" id="genero" class="form-control">
                        <option value="Femenino">Femenino</option>
                        <option value="Masculino">Masculino</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group form-md-line-input">
                    {!!Form::label('pais', 'Pais')!!}
                    {!!Form::text('pais',null,['class'=>'form-control','placeholder'=>'Pais','maxlength'=>'10'])!!}            
                </div>
            </div>
        </div>
         <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group form-md-line-input">
                    {!!Form::label('ciudad', 'Ciudad')!!}
                    {!!Form::text('ciudad',null,['class'=>'form-control','placeholder'=>'Ciudad','maxlength'=>'30'])!!}            
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group form-md-line-input">
                    {!!Form::label('fecha', 'Fecha de Nacimiento')!!}
                    {!!Form::date('fecha',null,['class'=>'form-control'])!!}            
                </div>
            </div>
        </div> 
        <div class="form-group form-md-line-input">
            {!!Form::label('email', 'Correo')!!}
            {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'E-mail', 'autocomplete'=>'off'])!!}            
        </div>   
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group form-md-line-input">
                    {!!Form::label('password', 'Contraseña')!!}
                    {!!Form::password('password',['class'=>'form-control','placeholder'=>'Contraseña','maxlength'=>'30'])!!}            
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group form-md-line-input">
                    {!!Form::label('password_confirmation', 'Confirmar Contraseña')!!}
                    {!!Form::password('password_confirmation',['class'=>'form-control','placeholder'=>'Confirmar Contraseña','maxlength'=>'30'])!!}            
                </div>
            </div>
        </div>   
        <div class="form-group">
            <label for="">Avatar</label>
            <input type="file" name="avatar" class="form-control">
        </div>
        </div>
           <b>{!! Form::submit('Registrar', ['class'=>'btn btn-success']) !!}</b>
        </div> 
    {!! Form::close() !!}       
    @endsection