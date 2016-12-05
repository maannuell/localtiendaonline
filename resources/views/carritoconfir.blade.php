@extends('template')



    @section('contenido')

 <!-- Cart view section -->
 <section id="checkout">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="checkout-area">
          <form action="{{url('/terminarorden')}}/{{$idorden}}" method="POST" >
          <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="row">
              <div class="col-md-8">
                <div class="checkout-left">
                  <div class="panel-group" id="accordion">
                    <!-- Coupon section -->
                   
                    <!-- Login section -->
                    
                    <!-- Billing Details -->
                    <div class="panel panel-default aa-checkout-billaddress">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                            Direccion de Envio
                          </a>
                        </h4>
                      </div>
                      <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <textarea cols="8" rows="3" placeholder="Direccion" name="direccion" id="direccion" required></textarea>
                              </div>                             
                            </div>                            
                          </div>   
                          
                          
                          
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <select name="estado" id="estado" required>
                                  <option selected>Seleccion Estado</option>
                                  @foreach($estados as $e)
                                  <option value="{{$e->id}}">{{$e->nombre}}</option>
                                  
                                @endforeach
                                </select> 
             
                

        
                              </div>                             
                            </div>                            
                          </div> <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <select name="ciudad" id="ciudad" required>
                                 <option selected>Selecciona Ciudad</option>
                                 
                                </select> 
                              </div>                             
                            </div>                            
                          </div>
                          
                                               
                        </div>
                      </div>
                    </div>
                    <!-- Shipping Address -->
                    <div class="panel panel-default aa-checkout-billaddress">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                            Paqueteria
                          </a>
                        </h4>
                      </div>
                      <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                         <div class="row">
                            
                            
                          </div> 
                          
                          <div class="row">
                            
                           
                          </div> 
                         
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                 <select name="paqueteria" id="paqueteria" required>
                                 <option selected>Selecciona Paqueteria</option>
                                  @foreach($paqueteria as $p)
                                  <option value="{{$p->id}}">{{$p->nombre}}</option>
                                  
                                @endforeach
                                </select> 
                              </div>                             
                            </div>                            
                          </div>
                          <div class="row">
                            
                            
                          </div>   
                          <div class="row">
                            
                            
                          </div> 
                           <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <textarea cols="8" rows="3" placeholder="Notas"></textarea>
                              </div>                             
                            </div>                            
                          </div>              
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="checkout-right">
                  <h4>Detalle Orden</h4>
                  <div class="aa-order-summary-area">
                    <table class="table table-responsive">
                      
                      <thead>
                        <tr>
                          <th>Product</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      @foreach($ordendetalle As $o)
                      <tbody>
                        <tr>
                          <td>{{$o->nombre}} <strong> x {{$o->cantidad}}</strong></td>
                          <td>${{number_format($o->preciouni, 2, '.', ',' )}}</td>
                        </tr>
                      
                        
                      </tbody>
                      @endforeach
                      <tfoot>
                       
                       
                         <tr>
                          <th>Total</th>
                          <td>${{number_format($sumtotal->sumtotal, 2, '.', ',' )}}</td>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                  <h4>Metodo de Pago</h4>
                  <div class="aa-payment-method">                    
                    
                    <label for="paypal"><input type="radio" id="paypal" name="optionsRadios" checked> Via Paypal </label>
                    <img src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_mc_vs_dc_ae.jpg" border="0" alt="PayPal Acceptance Mark">    
                    <input type="submit" value="Terminar Pedido" class="aa-browse-btn">                
                  </div>
                </div>
              </div>
            </div>
          </form>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Cart view section -->

 <script type="text/javascript">
    $('select#estado').change(function(){
        var catId = $(this).val();
       // $subcategoriasitems = $('.subcategoriasItems').remove();
        $.get('/proyectoTienda5/public/seleciudad/'+catId, function(data){
               $('select#ciudad').empty();
              
              $.each(data, function( key, value ) {               
                $('select#ciudad').append('<option value="'+value.id+'" class="categoriaItems">'+value.nombre+'</option>');
          });
       
    });
});
</script>

@stop