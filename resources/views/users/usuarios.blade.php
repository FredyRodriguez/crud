@extends('layout')
@section('title',"Usiario")
@section('content')
            <h1>Usuarios</h1>    
            <div>
                <a href="{{url('usuario/create')}}" class="btn btn-success">
                     <i class="fa fa-plus"></i>
                     <b>Crear Usuarios</b>
                </a>
            </div><br>
             @foreach($users as $user)
             <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="images/{{$user->avatar}}" alt="">
                        <div class="card-body">
                            <h5 class="card-title">{{$user->name}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                     </div>  
                </div>
             </div>                
            @endforeach  




          {{--  <div class="table-responsive-md">
                <table id="data" class="table table-striped">
                    <thead>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Documento</th>
                        <th class="text-center">Telefono</th>
                        <th class="text-center">Dirección</th>
                        <th class="text-center">Genero</th>
                        <th class="text-center">Pais</th>
                        <th class="text-center">Ciudad</th>
                        <th class="text-center">Fecha Nacimiento</th>
                        <th class="text-center">E-mail</th>
                        <th class="text-center">Editar</th>
                        <th class="text-center">Eliminar</th>
                        
                    </thead>

                    <tbody>
                      @foreach($users as $user)
                        <tr  class="text-center">
                            <td>{{$user->name}}</td>
                            <td>{{$user->documento}}</td>
                            <td>{{$user->telefono}}</td>
                            <td>{{$user->direccion}}</td>
                            <td>{{$user->genero}}</td>
                            <td>{{$user->pais}}</td>
                            <td>{{$user->ciudad}}</td>
                            <td>{{$user->fecha}}</td>                            
                            <td>{{$user->email}}</td>
                            <td><a href="" class="btn btn-warning"><b>Editar</b></a></td>
                            <td>
                                {!!Form::open(['method' => 'DELETE', 'route' => ['user.delete',$user->id]])!!}
                                    {{ Form::button('Eliminar', ['type' => 'submit', 'class' => 'btn btn-danger'] )  }}
                                {!!Form::close()!!}
                            </td>
                        @endforeach
                    </tbody> 
                </table>
            </div>--}}
@endsection