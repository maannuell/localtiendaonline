@extends('admin')

@section('encabezado')
<div class="box box-primary col-xs-12">
                
                <div class="box-header">
                  <h3 class="box-title">Nueva Marca</h3>
                </div><!-- /.box-header -->

                @if(session()->has('si'))
                <script>alertify
                .alert("Guardados Correctamente", function(){
                
                });</script>        
 
                @elseif(session()->has('no'))
                <script>alertify
                .alert("Eror Al guardar", function(){
                
                });</script>    
                @endif


@stop

@section('contenido')




   <form action="{{url('/guardarMarca')}}" method="POST">
       <input type="hidden" name="_token" value="{{csrf_token()}}">
 <fieldset>
    <div class="form-group">
      <label for="nombre" class="col-lg-2 control-label">Nombre Marca</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="nombre" placeholder="Nombre Marca" required> 
      </div>
    </div>
    <hr>
   <div class="form-group">
      <label for="descripcion" class="col-lg-2 control-label">Descripcion</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" name="descripcion" required></textarea>
        <span class="help-block">Descripcion a detalle de la Marca.</span>
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