@extends('admin')

@section('encabezado')
<div class="box box-primary col-xs-12">
                
                <div class="box-header">
                  <h3 class="box-title">Listado  de Articulos</h3>
                </div><!-- /.box-header -->


@stop

@section('contenido')
  <table class="table table-hover">
      <thead>
      <tr>
          <th>#</th>
          <th>Nombre</th>
          <th>Precio</th>
          <th>Subcategoria</th>
          <th>Marca</th>
          <th>Existencia</th>
          
      </tr>
      </thead>
      <tbody>
          @foreach($articulo as $a)
              <tr>
                  <td>{{$a->id}}</td>
                  <td>{{$a->nombre}}</td>
                  <td>${{number_format($a->precio-($a->precio*$a->promo), 2, '.', ',' )}}</td>
                  <td>{{$a->nombre_subcategoria}}</td>
                  <td>{{$a->nombre_marca}}</td>
                  <td>{{$a->existencia}}</td>
                  
                  <td>
              
                      
                    <form  action="{{url('/agregarinventario')}}/{{$a->id}}" method="POST">
                    <input  type="hidden" name="_token" value="{{csrf_token()}}">
                      <input type="number" step="any" class="" name="existencia" placeholder="Agregar Existencia" >

                        <input type="submit" value="Añadir" class="btn btn-primary">
                    </form>
                    </td>
                   
                    <td>
                       <a href="" class="btn btn-success btn-xs"><span
                                    class="glyphicon glyphicon-folder-open" aria-hidden="true">Editar</span> </a>


                    </td>
              </tr>
              @endforeach
      </tbody>
  </table>

@stop


