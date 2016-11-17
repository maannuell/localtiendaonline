@extends('admin')

@section('encabezado')
<div class="box box-primary col-xs-12">
                
                <div class="box-header">
                  <h3 class="box-title">Nuevo Articulo</h3>
                </div><!-- /.box-header -->


@stop

@section('contenido')




<form class="form-horizontal" action="{{url('/importExcel')}}" method="POST" enctype="multipart/form-data">
       <input type="hidden" name="_token" value="{{csrf_token()}}">
  <fieldset>
   
       <div class="form-group">
              <label class="col-lg-2 control-label">Archivo Excel</label>
              <div class="col-lg-10">
                <input type="file" class="form-control" name="import_file" >
                
              </div>
            </div>

             <div class="form-group">
     
   
    
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
       <input type="submit" value="Importar" class="btn btn-primary">
       <a href="{{url('/')}}" class="btn btn-danger">Cancelar</a>
      </div>
    </div>
  </fieldset>
</form>



@stop


