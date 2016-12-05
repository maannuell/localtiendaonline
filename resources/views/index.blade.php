@extends('template')



 

               


    @section('contenido')
   
    <!-- Start slider -->
  <section id="aa-slider" >
    <div class="aa-slider-area">
      <div id="sequence" class="seq">
         <ul class="seq-canvas">
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="{{asset("imagenes/slider/1.jpg")}}" alt="Men slide img" width="700"  height="550" />
              </div>
              <div class="seq-title">
               <span data-seq>Ahora Hasta Un 30%</span>                
                <h2 data-seq>Laptop HP</h2>                
                <p data-seq>Solo modelos Participantes</p>
                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">Comprar Ahora</a>
              </div>
            </li>
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="{{asset("imagenes/slider/2.jpg")}}" alt="Wristwatch slide img" width="700" height="550" />
              </div>
              <div class="seq-title">
                <span data-seq>Ahora Hasta Un 20%</span>                
                <h2 data-seq>Laptop Dell</h2>                
                <p data-seq>Solo Modelos Participantes</p>
                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">Comprar Ahora</a>
              </div>
            </li>
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="{{asset("imagenes/slider/3.jpg")}}" alt="Women Jeans slide img"  width="700" height="550" />
              </div>
              <div class="seq-title">
                <span data-seq>Ahora Hasta Un 10%</span>                
                <h2 data-seq>Laptop Accer</h2>                
                <p data-seq>Solo Modelos Participantes</p>
                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">Comprar Ahora</a>
              </div>
            </li>
            <!-- single slide item -->           
            <li>
              <div class="seq-model">
                <img data-seq src="{{asset("imagenes/slider/4.jpg")}}" alt="Shoes slide img" width="700" height="550" />
              </div>
              <div class="seq-title">
                <span data-seq>Ahora Hasta un 5%</span>                
                <h2 data-seq>Laptop Asus</h2>                
                <p data-seq>Solo Modelos Participantes</p>
                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">Comprar Ahora</a>
              </div>
            </li>
            <!-- single slide item -->  
             <li>
              <div class="seq-model">
                <img data-seq src="{{asset("imagenes/slider/5.jpg")}}" alt="Male Female slide img"  width="700" height="550" />
              </div>
              <div class="seq-title">
                <span data-seq>Ahora Hasta un 35%</span>                
                <h2 data-seq>Laptop Lenovo</h2>                
                <p data-seq>Solo Modelos Participantes</p>
                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">Comprar Ahora</a>
              </div>
            </li>                   
          </ul>
        <!-- slider navigation btn -->
<!--
        <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
          <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
          <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
        </fieldset>
-->
      </div>
    </div>
  </section>
   <!-- popular section -->
  
  <section id="aa-popular-category" ng-controller="ProductoController" ng-app="productosmodulo">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-popular-category-area">
              <!-- start prduct navigation -->
             <ul class="nav nav-tabs aa-products-tab">
                <li class="active"><a href="#promocion" data-toggle="tab">Promociones</a></li>
                <li><a href="#popular" data-toggle="tab">Populares</a></li>
                <li><a href="#latest" data-toggle="tab">Recientes</a></li>                    
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <!-- Start men popular category -->
                <div class="tab-pane fade in active" id="promocion">
                  <ul class="aa-product-catg aa-popular-slider">
                    <!-- start single product item -->
                    @foreach($artdescuento As $a)
                    <li>
                      <figure>
                        <a class="aa-product-img" href="{{url("/detaproducto")}}/{{$a->id}}"><img src="{{asset("imgart/$a->imagen")}}" height="300" width="280" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn" href="{{url("/agregarcarrdetalle")}}/{{$a->id}}"><span class="fa fa-shopping-cart"></span>A Carrito</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">{{$a->nombre}}</a></h4>
                          @if($a->promo>0)
                      <span class="aa-product-price">${{number_format($a->precio-($a->precio*$a->promo), 2, '.', ',' )}}</span><span class="aa-product-price"><del>${{number_format( $a->precio, 2, '.', ',' )}}</del></span>
                      <span class="aa-badge aa-sale" href="#">{{$a->promo*100}}%</span>
                      @else
                       <span class="aa-product-price">${{number_format( $a->precio, 2, '.', ',' )}}</span>
                       @endif
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                       <a name="prueba"  data-toggle2="tooltip" data-placement="top" title="Quick View" ><span class="fa fa-search" ng-click="toggle('add', {{$a->id}})"></span></a>                              
                      </div>
                      <!-- product badge -->
                    
                    </li>
                    @endforeach
                     <!-- start single product item -->
               
                    <!-- start single product item -->
                    <
                    <!-- start single product item -->
                    
                    <!-- start single product item -->
                    
                      
                    <!-- start single product item -->
                    
                    <!-- start single product item -->
                                                                                       
                  </ul>
                
                </div>
                <!-- / popular product category -->
                
                <!-- start featured product category -->
                <div class="tab-pane fade" id="popular">
                 <ul class="aa-product-catg aa-featured-slider">
                    <!-- start single product item -->
                    @foreach($artvisitas As $a)
                    <li>
                      <figure>
                        <a class="aa-product-img" href="{{url("/detaproducto")}}/{{$a->id}}"><img src="{{asset("imgart/$a->imagen")}}" height="300" width="280" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn" href="{{url("/agregarcarrdetalle")}}/{{$a->id}}"><span class="fa fa-shopping-cart"></span>A Carrito</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">{{$a->nombre}}</a></h4>
                          @if($a->promo>0)
                      <span class="aa-product-price">${{number_format($a->precio-($a->precio*$a->promo), 2, '.', ',' )}}</span><span class="aa-product-price"><del>${{number_format( $a->precio, 2, '.', ',' )}}</del></span>
                      <span class="aa-badge aa-sale" href="#">{{$a->promo*100}}%</span>
                      @else
                       <span class="aa-product-price">${{number_format( $a->precio, 2, '.', ',' )}}</span>
                       @endif
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                            
                      </div>
                      <!-- product badge -->
                    
                    </li>
                    @endforeach
                     <!-- start single product item -->
                   
                    <!-- start single product item -->
                    
                    <!-- start single product item -->
                    
                    <!-- start single product item -->
                    
                    <!-- start single product item -->
                   
                    <!-- start single product item -->
                    
                    <!-- start single product item -->
                                                                                         
                  </ul>
                 
                </div>
                <!-- / featured product category -->

                <!-- start latest product category -->
                <div class="tab-pane fade" id="latest">
                  <ul class="aa-product-catg aa-latest-slider">
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-2.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                          <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                            
                      </div>
                      <!-- product badge -->
                      <span class="aa-badge aa-sale" href="#">SALE!</span>
                    </li>
                     <!-- start single product item -->
                    
                    <!-- start single product item -->
                    
                    <!-- start single product item -->
                    
                    <!-- start single product item -->
                   
                    <!-- start single product item -->
                    
                    <!-- start single product item -->
                   
                    <!-- start single product item -->
                                                                                            
                  </ul>
                   <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                </div>
                <!-- / latest product category -->  
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
                              <div id="precio" class="aa-product-view-price">$ <% precio %> </div>
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
              </div>
            </div>
          </div> 
        </div>
      </div>
    </div>
  </section>
  
  <!-- / popular section -->
    @stop