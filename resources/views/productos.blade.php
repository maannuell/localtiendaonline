@extends('template')



    @section('contenido')

  <!-- product category -->
  <section id="aa-product-category" ng-controller="ProductoController" ng-app="productosmodulo">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-8 col-md-push-3">
          <div class="aa-product-catg-content">
            <div class="aa-product-catg-head">
              
              <div class="aa-product-catg-head-right">
                <a id="grid-catg" href="#"><span class="fa fa-th"></span></a>
                <a id="list-catg" href="#"><span class="fa fa-list"></span></a>
              </div>
            </div>
            <div class="aa-product-catg-body">
              <ul class="aa-product-catg">
                <!-- start single product item -->
                @foreach($articulo as $a)
                <li>
                  <figure>
                    <a class="aa-product-img" href="{{url("/detaproducto")}}/{{$a->id}}"><img src="{{asset("imgart/$a->imagen")}}" width="280" height="300" alt="polo shirt img"></a>
                    <a class="aa-add-card-btn" href="{{url("/agregarcarrito")}}/{{$a->id}}"><span class="fa fa-shopping-cart"></span>Agregar a Carrito</a>
                    <figcaption>
                      <h4 class="aa-product-title"><a href="#">{{$a->nombre}}</a></h4>
                      @if($a->promo>0)
                      <span class="aa-product-price">${{number_format($a->precio-($a->precio*$a->promo), 2, '.', ',' )}}</span><span class="aa-product-price"><del>${{number_format( $a->precio, 2, '.', ',' )}}</del></span>
                      <span class="aa-badge aa-sale" href="#">{{$a->promo*100}}%</span>
                      @else
                       <span class="aa-product-price">${{number_format( $a->precio, 2, '.', ',' )}}</span>
                       @endif
                      <p class="aa-product-descrip">{{$a->descripcion}}.</p>
                    </figcaption>
                  </figure>                         
                  <div class="aa-product-hvr-content">

                   
                    <a name="prueba"  data-toggle2="tooltip" data-placement="top" title="Vista Rapida" ><span class="fa fa-search" ng-click="toggle('add', {{$a->id}})"></span></a>                               
                  
                  </div>
                  <!-- product badge -->
                
                </li>
                <!-- start single product item -->
                   <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">                      
                    <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <div class="row">
                        <!-- Modal view slider -->
                        <div class="col-md-6 col-sm-6 col-xs-12">                              
                          <div class="aa-product-view-slider">                                
                            <div class="simpleLens-gallery-container" id="demo-1">
                              <div class="simpleLens-container">
                                  <div class="simpleLens-big-image-container">
                                      <a>
                                      <a class="simpleLens-lens-image" data-lens-image="{{asset("imgart/<% imagen %>")}}">
                                          <img id="imagen" src="{{asset("imgart/<% imagen %>")}}" class="simpleLens-big-image">
                                      </a>
                                  </div>
                              </div>
                            
                            </div>
                          </div>
                        </div>
                        <!-- Modal view content -->
                      
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="aa-product-view-content">
                            <h4><% nombre %></h4>
                            <div class="aa-price-block">
                              <div id="precio" class="aa-product-view-price"><% precio | currency %></div>
                              <p class="aa-product-avilability">Existencia: <span id="existencia"> <% existencia %> </span></p>
                            </div>
                            <p></p>
                           
                            <div class="aa-prod-quantity">
                              <h4> <% descripcion %> </h4>
                              <p class="aa-prod-category">
                               
                            </div>
                            <div class="aa-prod-view-bottom">
                              <a href="{{url("/agregarcarrdetalle")}}/<% nuevo %>" class="aa-add-to-cart-btn"><span class="fa fa-shopping-cart"></span>A Carrito</a>
                              <a id="irdetalle" href="{{url("/detaproducto")}}/<% nuevo %>" class="aa-add-to-cart-btn">Ver detalle</a>


                            </div>
                          </div>
                        </div>
                        
                      </div>
                    </div>                        
                  </div><!-- /.modal-content -->
                </div><!-- /.-dialog -->
              </div>
                    @endforeach      
              </ul>

              <!-- quick view modal -->                  
             

              <!-- / quick view modal -->   
            </div>
            <div class="aa-product-catg-pagination">
              <nav>
               {{ $articulo->links() }}
              </nav>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-md-pull-9">
          <aside class="aa-sidebar">
            <!-- single sidebar -->
            
            <!-- single sidebar -->
            
            <!-- single sidebar -->
           
            <!-- single sidebar -->
            
            <!-- single sidebar -->
         
            <div class="aa-sidebar-widget">
              <h3>Populares</h3>
              <div class="aa-recently-views">
                <ul>
                   @foreach($artvisitas As $a)
                  <li>
                    <a href="{{url("/detaproducto")}}/{{$a->id}}" class="aa-cartbox-img"><img alt="img" src="{{asset("imgart/$a->imagen")}}"></a>
                    <div class="aa-cartbox-info">
                      <h4><a href="{{url("/detaproducto")}}/{{$a->id}}">{{$a->nombre}}</a></h4>
                      <p>${{number_format($a->precio-($a->precio*$a->promo), 2, '.', ',')}}</p>
                      <hr>
                    </div>                    
                  </li>
                  
            @endforeach      
                                                   
                </ul>
              </div>                            
            </div>
            </div>
            
            <!-- single sidebar -->
          
          </aside>
        </div>
       
      </div>
    </div>
  </section>
  <!-- / product category -->





  @stop


  
 