@extends('admin')

@section('encabezado')
<div class="box box-primary col-xs-12">
                
                <div class="box-header">
                  <h3 class="box-title">Administrador de Ordenes</h3>
                </div><!-- /.box-header -->


@stop

@section('contenido')
  <table class="table table-hover">
      <thead>
      <tr>
          
          <th>id</th>
          <th>Cliente</th>
          <th>Paqueteria</th>
          <th>Ciudad</th>
          <th>Dirreccion</th>
          <th>Fecha Pedido</th>
          <th>Fecha Entrega</th>
      </tr>
      </thead>
      <tbody>
          @foreach($ordenes as $o)
              <tr>
                 
                  <td>{{$o->o_id}}</td>
                  <td>{{$o->name}}</td>
                  <td>{{$o->nombre_paquete}}</td>
                  <td>{{$o->nombre_ciudad}}</td>
                  <td>{{$o->direnvio}}</td>
                  <td>{{$o->fecha}}</td>
@if($o->estatus==3)
<td>

 <form  action="{{url('/agregarfecha')}}/{{$o->o_id}}" method="POST">
                    <input  type="hidden" name="_token" value="{{csrf_token()}}">
                      <input type="date" step="any" class="" name="fecha_envio" value="{{$o->fecha_envio}}">

                        <input type="submit" value="Añadir" class="btn btn-primary">
                    </form>

                   
                        
</td>
@else 

<td>{{$o->fecha_envio}}</td>

@endif
<td>
  <label class="label-success">{{$o->estatus==3 ? 'En Progreso' : 'Terminado'}}</label>
</td>
<td>
  
      <a href="{{url("/pdfordenes")}}/{{$o->o_id}}" class="btn btn-danger btn-xs"><span
                                    class="glyphicon glyphicon-remove" aria-hidden="true">Pdf</span> </a>
</td>

                     
              </tr>
              @endforeach
      </tbody>
  </table>

@stop


