@extends('template')



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

 Esperando fecha

                   
                        
</td>
@else 

<td>{{$o->fecha_envio}}</td>

@endif

<td>
  
      <a href="{{url("/pdfordenes")}}/{{$o->o_id}}" class="btn btn-danger btn-xs"><span
                                    class="glyphicon glyphicon-remove" aria-hidden="true">Pdf</span> </a>
</td>

                     
              </tr>
              @endforeach
      </tbody>
  </table>


@stop