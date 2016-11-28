@extends('admin')

@section('encabezado')
<div class="box box-primary col-xs-12">
                
                <div class="box-header">
                  <h3 class="box-title">Administrador de Comentarios</h3>
                </div><!-- /.box-header -->


@stop

@section('contenido')
  <table class="table table-hover">
      <thead>
      <tr>
          
          <th>Usuario</th>
          <th>Articulo</th>
          <th>Comentario</th>
          <th>Correo</th>
      </tr>
      </thead>
      <tbody>
          @foreach($comentario as $c)
              <tr>
                 
                  <td>{{$c->name}}</td>
                  <td>{{$c->nombre}}</td>
                  <td>{{$c->descripcion}}</td>
                    <td>
                        

                        <a href="{{url('/eliminarcomentario')}}/{{$c->id}}" class="btn btn-danger btn-xs"><span
                                    class="glyphicon glyphicon-remove" aria-hidden="true">Eliminar</span> </a>
                    </td>
              </tr>
              @endforeach
      </tbody>
  </table>

@stop


