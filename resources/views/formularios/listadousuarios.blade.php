@extends('admin')

@section('encabezado')
<div class="box box-primary col-xs-12">
                
                <div class="box-header">
                  <h3 class="box-title">Listado  de Usuarios</h3>
                </div><!-- /.box-header -->


@stop

@section('contenido')
  <table class="table table-hover">
      <thead>
      <tr>
          <th>#</th>
          <th>Nombre</th>
          <th>Email</th>
          <th>Rol</th>
          
      </tr>
      </thead>
      <tbody>
          @foreach($usuarios as $u)
              <tr>
                  <td>{{$u->id}}</td>
                  <td>{{$u->name}}</td>
                  <td>{{$u->email}}</td>
                  <td>{{$u->rol== 1 ? 'Administrador' : 'Usuario'}}</td>
                  
                  <td>
                        <a href="" class="btn btn-danger btn-xs"><span
                                    class="glyphicon glyphicon-remove" aria-hidden="true">Eliminar</span> </a>
                    </td>
              </tr>
              @endforeach
      </tbody>
  </table>

@stop


