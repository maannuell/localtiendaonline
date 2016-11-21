@extends('admin')

@section('encabezado')
<div class="box box-primary col-xs-12">
                
                <div class="box-header">
                  <h3 class="box-title">Nuevo Articulo</h3>
                </div><!-- /.box-header -->


@stop

@section('contenido')
<li><a href="{{url("/")}}">
 <div  class="info-box bg-yellow">
               
                <span  class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Inventory</span>
                  <span class="info-box-number">5,200</span>
                  
                  <span class="progress-description">
                    Inventario De Articulos
                  </span>
                </div><!-- /.info-box-content -->
               
              </div><!-- /.info-box -->
            </a>
            </li> 
            <li><a href="{{url("/consultacomentario")}}">
               <div class="info-box bg-blue">
                <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Comentarios</span>
                  
                  <span class="progress-description">
                    Editor de Comentarios
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
</a>
</li>
@stop


