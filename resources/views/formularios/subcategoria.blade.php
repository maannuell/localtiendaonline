@extends('admin')

@section('encabezado')
<div class="box box-primary col-xs-12">
                
                <div class="box-header">
                  <h3 class="box-title">Nuevo SubCategoria</h3>
                </div><!-- /.box-header -->


@stop

@section('contenido')
<form class="form-horizontal" action="{{url('/guardarSubcategoria')}}" method="POST">
       <input type="hidden" name="_token" value="{{csrf_token()}}">
      <fieldset>
    <div class="form-group">
      <label for="nombre" class="col-lg-2 control-label">Nombre Subcategoria</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="nombre" placeholder="Nombre Subcategoria" required> 
      </div>
    </div>
   <div class="form-group">
      <label for="descripcion" class="col-lg-2 control-label">Descripcion</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" name="descripcion" required></textarea>
        <span class="help-block">Descripcion a detalle de la Subcategoria.</span>
      </div>
    </div>

       <div class="form-group">
      <label for="marca" class="col-lg-2 control-label">Categoria</label>
      <div class="col-lg-10">
        <select class="form-control" name="categoria">
        @foreach($categoria as $c)
        <option value="{{$c->id}}">{{$c->nombre}}</option>
              
             
                
        @endforeach
        </select>
      
      </div>
      </div>

      
       <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
       <input type="submit" value="registrar" class="btn btn-primary">
       <a href="{{url('/')}}" class="btn btn-danger">Cancelar</a>
      </div>
    </div>
  </fieldset>
</form>
@stop

 