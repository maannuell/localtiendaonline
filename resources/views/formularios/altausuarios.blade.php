@extends('admin')

@section('encabezado')
<div class="box box-primary col-xs-12">
                
                <div class="box-header">
                  <h3 class="box-title">Nueva Categoria</h3>
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




   <form action="{{url('/guardarusuario')}}" method="POST">
       <input type="hidden" name="_token" value="{{csrf_token()}}">

 <fieldset>
    <div class="form-group">
      <label for="name" class="col-lg-2 control-label">Nombre</label>
      <div class="col-lg-10">
        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
         @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
      </div>
    </div>
       
    <div class="form-group">
      <label for="email" class="col-lg-2 control-label">Correo Electronico</label>
      <div class="col-lg-10">
         <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
       @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
      </div>
    </div>
      <hr>
      <div class="form-group">
      <label for="contraseña" class="col-lg-2 control-label">Contraseña</label>
      <div class="col-lg-10">
        <input id="password" type="password" class="form-control" name="password" required>

      @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
      </div>
    </div>
  <br>
    <div class="form-group">
      <label for="contraseña" class="col-lg-2 control-label"> Confirmar Contraseña</label>
      <div class="col-lg-10">
         <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

    
      </div>
    </div>
    <hr>
    <div class="form-group">
      <label for="rol" class="col-lg-2 control-label">Rol</label>
      <div class="col-lg-10">
        <select class="form-control" name="rol" id="rol">
        
         
        <option value="1" selected>Administrador</option>
        <option value="2">Usuario</option>      
             
                
        
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

</div>
@stop

