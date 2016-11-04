@extends('admin')

@section('encabezado')
<div class="box box-primary col-xs-12">
                
                <div class="box-header">
                  <h3 class="box-title">Nueva Categoria</h3>
                </div><!-- /.box-header -->


@stop

@section('contenido')




   <form action="{{url('/guardarUsuario')}}" method="POST">
       <input type="hidden" name="_token" value="{{csrf_token()}}">
<div class="box-body col-xs-12">
<div class="form-group col-xs-6">
                      <label>Nombre Categoria</label>
                      <input type="text" class="form-control" id="nomcate" name="nomcate" placeholder="Nombre SubCategoria" >
</div>
<div class="form-group col-xs-6">
                      <label>Descripcion</label>
                      <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion Categoria" >
</div>





                 <input type="submit" value="registrar" class="btn btn-primary">
                 <a href="{{url('/')}}" class="btn btn-danger">Cancelar</a>



</form>

</div>
@stop