@extends('admin')

@section('encabezado')
<div class="box box-primary col-xs-12">
                
                <div class="box-header">
                  <h3 class="box-title">Nuevo Articulo</h3>
                </div><!-- /.box-header -->


@if(session()->has('si'))
                <script>alertify
                .alert("Guardado Correctamente", function(){
                
                });</script>        
 
                @elseif(session()->has('no'))
                <script>alertify
                .alert("Error Al Guardar", function(){
                
                });</script>    
                @endif



@stop

@section('contenido')



<form class="form-horizontal" action="{{url('/guardarArticulo')}}" method="POST" enctype="multipart/form-data">
       <input type="hidden" name="_token" value="{{csrf_token()}}">
  <fieldset>
    <div class="form-group">
      <label for="nombre" class="col-lg-2 control-label">Nombre</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="nombre" placeholder="Nombre Articulo" required> 
      </div>
    </div>
   <div class="form-group">
      <label for="descripcion" class="col-lg-2 control-label">Descripcion</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" name="descripcion" required></textarea>
        <span class="help-block">Descripcion a detalle del articulo.</span>
      </div>
    </div>
     <div class="form-group">
      <label for="precio" class="col-lg-2 control-label">Precio</label>
      <div class="col-lg-10">
        <input type="number" step="any" class="form-control" name="precio" placeholder="Precio Articulo" required>
      </div>
    </div>
    

    <div class="form-group">
      <label for="subcategoria" class="col-lg-2 control-label">Categoria</label>
      <div class="col-lg-10">
        <select class="form-control" name="categoria" id="categoria">
        <option selected>Seleccione una Categoria</option>
         @foreach($categoria as $c)
        <option value="{{$c->id}}">{{$c->nombre}}</option>
              
             
                
        @endforeach
        </select>
      
      </div>
      </div>
    <div class="form-group">
      <label for="subcategoria" class="col-lg-2 control-label">Subcategoria</label>
      <div class="col-lg-10">
        <select class="form-control" name="subcategoria" id="subcategoria">
      
        </select>
      
      </div>
      </div>
       <div class="form-group">
      <label for="marca" class="col-lg-2 control-label">Marca</label>
      <div class="col-lg-10">
        <select class="form-control" name="marca">
        @foreach($marca as $m)
        <option value="{{$m->id}}">{{$m->nombre}}</option>
              
             
                
        @endforeach
        </select>
      
      </div>
      </div>
       <div class="form-group">
              <label class="col-lg-2 control-label">Imagen Articulo</label>
              <div class="col-lg-10">
                <input type="file" class="form-control" name="file" >
              </div>
            </div>

             <div class="form-group">
      <label for="existencia" class="col-lg-2 control-label">Existencia</label>
      <div class="col-lg-10">
        <input type="number" step="any" class="form-control" name="existencia" placeholder="Existencia de Articulo" required>
      </div>
    </div>
     <div class="form-group">
      <label for="promo" class="col-lg-2 control-label">Descuento</label>
      <div class="col-lg-10">
        <select class="form-control" name="promo">
        <option value="0" selected>0%</option>
        <option value="0.04">4%</option>
        <option value="0.10">10%</option>
        <option value="0.20">20%</option>
        <option value="0.30">30%</option>
        <option value="0.40">40%</option>
        <option value="0.50">50%</option>
              
             
              
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

<script type="text/javascript">
    $('select#categoria').change(function(){
        var catId = $(this).val();
       // $subcategoriasitems = $('.subcategoriasItems').remove();
        $.get('/proyectoTienda4/public/sele/'+catId, function(data){
               $('select#subcategoria').empty();
              
              $.each(data, function( key, value ) {               
                $('select#subcategoria').append('<option value="'+value.id+'" class="categoriaItems">'+value.nombre+'</option>');
          });
       
    });
});
</script>

@stop


