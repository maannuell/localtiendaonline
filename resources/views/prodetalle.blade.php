@extends('template')



    @section('contenido')
     <section id="aa-product-details">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-product-details-area">
            <div class="aa-product-details-content">
              <div class="row">
       <div class="col-md-5 col-sm-5 col-xs-12">                              
                  <div class="aa-product-view-slider">                                
                    <div id="demo-1" class="simpleLens-gallery-container">
                      <div class="simpleLens-container">
                        <div class="simpleLens-big-image-container"><a data-lens-image="{{asset("imgart/$articulo->imagen")}}" class="simpleLens-lens-image"><img src="{{asset("imgart/$articulo->imagen")}}" class="simpleLens-big-image"></a></div>
                      </div>
                     
                    </div>
                  </div>
                </div>
                <!-- Modal view content -->
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <div class="aa-product-view-content">
                    <h3>{{$articulo->nombre}}</h3>
                    <div class="aa-price-block">
                      <span class="aa-product-view-price">${{number_format($articulo->precio-($articulo->precio*$articulo->promo), 2, '.', ',' )}}</span>
                      <p class="aa-product-avilability">Avilability: <span>{{$articulo->existencia}}</span></p>
                    </div>
                    <p>{{$articulo->descripcion}}</p>
                  
                   
                    <div class="aa-prod-quantity">
                      <form action="">
                        <select id="" name="">
                          <option selected="1" value="0">1</option>
                          <option value="1">2</option>
                          <option value="2">3</option>
                          <option value="3">4</option>
                          <option value="4">5</option>
                          <option value="5">6</option>
                        </select>
                      </form>
                      
                    </div>
                    <div class="aa-prod-view-bottom">
                      <a class="aa-add-to-cart-btn" href="{{url("/agregarcarrdetalle")}}/{{$articulo->id}}">Añadir Al carrito</a>
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="aa-product-details-bottom">
              <ul class="nav nav-tabs" id="myTab2">
                   

                   
                <li><a href="#review" data-toggle="tab">Comentarios</a></li> 
                             
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
               
                <div class="tab-pane fade " id="review">
                 <div class="aa-product-review-area">
                   <h4>{{$count}} Comentarios para {{$articulo->nombre}}</h4> 
                   <ul class="aa-review-nav">
                     <li>
                     @foreach($comentario as $c)
                        <div class="media">
                          <div class="media-left">
                            <a href="#">
                              <img class="media-object" src="{{asset("imguser/$c->imagen")}}" alt="girl image">
                            </a>
                          </div>
                          
                          <div class="media-body">
                            <h4 class="media-heading"><strong>{{$c->name}}</strong> - <span>{{$c->created_at}}</span></h4>                       
                            <p>{{$c->descripcion}}</p>
                          </div>
                          @endforeach
                        </div>
                      </li>
                  
                   </ul>

                   @if (Auth::guest())
                   
                    @else 
                   <h4>Añadir comentario</h4>
                  
                   <!-- review form -->
                  
                   <form action="{{url("/guardacomentario")}}/{{$articulo->id}}" method="POST" class="aa-review-form">
                   <input type="hidden" name="_token" value="{{csrf_token()}}">
                      <div class="form-group">
                        <label for="descripcion">Comentario</label>
                        <textarea class="form-control" rows="3" id="descripcion" name="descripcion" required></textarea>
                      </div>
                      
                      <button type="submit" class="btn btn-default aa-review-submit">Enviar</button>
                   </form>
                     @endif
                 </div>
                </div>            
              </div>
            </div>
           
            </div>  
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / product category -->


 @stop