@extends('template')



    @section('contenido')

 <!-- Cart view section -->
 <section id="cart-view">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="cart-view-area">
           <div class="cart-view-table">
             <form action="">
               <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th></th>
                        <th></th>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($articuloscar As $a)
                      <tr>
                        <td><a class="remove" href="#"><fa class="fa fa-close"></fa></a></td>
                        <td><a href="#"><img src="{{asset("imgart/$a->imagen")}}" alt="img"></a></td>
                        <td><a class="aa-cart-title" href="#">{{$a->nombre}}</a></td>
                        <td>${{number_format($a->precio-($a->precio*$a->promo), 2, '.', ',' )}}</td>
                        <input type="hidden" name="precio2{{$a->id}}" value="{{$a->precio-($a->precio*$a->promo)}}">
                        
                        <td><select class="form-control" name="cantidad{{$a->id}}">
        <option  selected>{{$a->cantidad}}</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
              
             
              
        </select></td>
                        <td><input type="number"  name="subtotal{{$a->id}}" id="subtotal" value="{{($a->precio-($a->precio*$a->promo))*$a->cantidad}}" readonly></td>
                      </tr>
                      @endforeach
                      
                      </tbody>
                  </table>
                </div>
             </form>
             <!-- Cart Total view -->
             <div class="cart-view-total">
               
               
               <a href="{{url("/continuarcompra")}}" class="aa-cart-view-btn">Continuar con la compra</a>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>

 
<script type="text/javascript">
$(document).ready(function(){
  importe_total = 0;
 @foreach($articuloscar As $a)
  $("select[name=cantidad{{$a->id}}]").change(function(){
    var cant = $("select[name=cantidad{{$a->id}}]").val();
            $('select[name=cantidad{{$a->id}}]').val()
           
            $('input[name=subtotal{{$a->id}}]').val($('input[name=precio2{{$a->id}}]').val()*$('select[name=cantidad{{$a->id}}]').val());
            
       $.get('/proyectoTienda5/public/cant/'+cant+'/{{$a->id}}'); 

        });
  @endforeach

  });
</script>
 
 @stop