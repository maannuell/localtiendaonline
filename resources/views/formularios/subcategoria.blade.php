@extends('admin')

@section('encabezado')
<div class="box box-primary col-xs-12">
                
                <div class="box-header">
                  <h3 class="box-title">Nuevo SubCategoria</h3>
                </div><!-- /.box-header -->


@stop

@section('contenido')
<form action="{{url('/guardarSubcategoria')}}" method="POST">
       <input type="hidden" name="_token" value="{{csrf_token()}}">
       <div class="form-grup">
           <label for="subcategoria">Nombre Subcategoria:</label>
           <input name="nombre" class="form-control" placeholder="nombre" type="text"  required >
       </div>
       <div class="form-grup">
           <label for="descripcion">Descripcion:</label>
           <input name="descripcion" type="text" class="form-control" placeholder="Descripcion"  required>
       </div>
       <div class="form-grup">
           <label for="categoria">Categoria:</label>
           <select name="categoria" class="form-control" required>
            @foreach($categoria as $c)
               <option value="{{$c->id}}">{{$c->nombre}}</option>
              
             
                
            @endforeach
               
           </select>
       </div>
       <br>
       <input type="submit" value="registrar" class="btn btn-primary">
       <a href="{{url('consultarUsuarios')}}" class="btn btn-danger">Cancelar</a>
   </form>
</div>
@stop

 