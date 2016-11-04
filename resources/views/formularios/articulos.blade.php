@extends('admin')

@section('encabezado')
<div class="box box-primary col-xs-12">
                
                <div class="box-header">
                  <h3 class="box-title">Nuevo Articulo</h3>
                </div><!-- /.box-header -->


@stop

@section('contenido')




<form  id="f_nuevo_usuario"  method="post"  action="agregar_nuevo_usuario" class="form-horizontal form_entrada" >                
  
  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">              


<div class="box-body col-xs-12">
<div class="form-group col-xs-6">
                      <label for="descripcion">Descripcion</label>
                      <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion Articulo" >
</div>
<div class="form-group col-xs-6">
                      <label for="precio">Precio</label>
                      <input type="text" class="form-control" id="precio" name="precio" placeholder="Precio Articulo" >
</div>


 <div class="form-group col-xs-6">
                    <label>Categoria</label>
                    <select class="form-control select2">
                      <option selected="selected">Laptop</option>
                      <option value="">Laptop</option>
                      <option value="">PC</option>
                      <option>Delaware</option>
                      <option>Tennessee</option>
                      <option>Texas</option>
                      <option>Washington</option>
                    </select>
                  </div>


 <div class="form-group col-xs-6">
                    <label>Marca</label>
                    <select class="form-control select2">
                      <option selected="selected">HP</option>
                      <option value="">HP</option>
                      <option value="">Dell</option>
                      <option>Delaware</option>
                      <option>Tennessee</option>
                      <option>Texas</option>
                      <option>Washington</option>
                    </select>
                  </div>




                     <input type="submit" value="registrar" class="btn btn-primary">
                 <a href="{{url('/')}}" class="btn btn-danger">Cancelar</a>



</form>

</div>
@stop