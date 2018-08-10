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

    <form action="{{route('user.store')}}" class="form-group" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
       <div class=row>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <label for="">Nombre</label>
            <input type="text" name="name" class="form-control" placeholder="Nombre" autocomplete="off">
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <label for="">Cedula</label>
            <input type="number" name="documento" class="form-control" placeholder="Cedula" autocomplete="off">
        </div>
       </div>
       <div class=row>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <label for="">Telefono</label>
            <input type="number" name="telefono" class="form-control" placeholder="Telefono" autocomplete="off">
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <label for="">Direccion</label>
            <input type="text" name="direccion" class="form-control" placeholder="Direccion" autocomplete="off">
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
                    <label for="">Pais</label>
                    <input type="text" name="pais" class="form-control" placeholder="Pais"/>            
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group form-md-line-input">
                    <label for="">Cuidad</label>
                    <input type="text" name="ciudad" class="form-control" placeholder="Ciudad"/>            
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group form-md-line-input">
                    <label for="">Fecha Nacimiento</label>
                    <input type="date" name="fecha" class="form-control"/>            
                </div>
            </div>
        </div>
        <div class="form-group form-md-line-input">
            <label for="">Correo</label>
            <input type="email" name="email" class="form-control" placeholder="Email"/>            
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group form-md-line-input">
                    <label for="">Contraseña</label>
                    <input type="password" name="password" class="form-control" placeholder="Contraseña"/>            
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group form-md-line-input">
                    <label for="">Confirmar Contraseña</label>
                    <input type="password" name="password_confirmar" class="form-control" placeholder="Confirmar Contraseña"/>            
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <label for="">Avatar</label>
            <input type="file" name="avatar" >
        </div>
       <button type="submit" class="btn btn-success">Registrar</button>
    </form>
    
    
@endsection