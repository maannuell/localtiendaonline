<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Tripe "B | Home</title>
    
    <!-- Font awesome -->
    <link href="{{asset("css/font-awesome.css")}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset("css/bootstrap.css")}}" rel="stylesheet">   
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="{{asset("css/jquery.smartmenus.bootstrap.css")}}" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="{{asset("css/jquery.simpleLens.css")}}">    
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="{{asset("css/slick.css")}}">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="{{asset("css/nouislider.css")}}">
    <!-- Theme color -->
    <link id="switcher" href="{{asset("css/theme-color/default-theme.css")}}" rel="stylesheet">
    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->

    <!-- Main style sheet -->
    <link href="{{asset("css/style.css")}}" rel="stylesheet">    

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body> 
   <!-- wpf loader Two -->
    <div id="wpf-loader-two">          
      <div class="wpf-loader-two-inner">
        <span>Loading</span>
      </div>
    </div> 
    <!-- / wpf loader Two -->       
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->


  <!-- Start header section -->
  <header id="aa-header">
    <!-- start header top  -->
    <div class="aa-header-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-top-area">
              <!-- start header top left -->
              <div class="aa-header-top-left">
                <!-- start language -->
                <div class="aa-language">
                  <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <img src="{{asset("img/flag/españa.PNG")}}" alt="english flag">Español
              
                    </a>
                 
                  </div>
                </div>
                <!-- / language -->

                <!-- start currency -->
                <div class="aa-currency">
                  <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <i class="fa fa-usd"></i>PESOS
                      <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="#"><i class="fa fa-usd"></i>PESOS</a></li>
                      <li><a href="#"><i class="fa fa-usd"></i>USD</a></li>
                    </ul>
                  </div>
                </div>
                <!-- / currency -->
                <!-- start cellphone -->
                <div class="cellphone hidden-xs">
                  <p><span class="fa fa-phone"></span>00-62-658-658</p>
                </div>
                <!-- / cellphone -->
              </div>
              <!-- / header top left -->
              <div class="aa-header-top-right">
                <ul class="aa-head-top-nav-right">
                  <li><a href="account.html">Mi Cuenta</a></li>
                  <li class="hidden-xs"><a href="wishlist.html">Deseos</a></li>
                  <li class="hidden-xs"><a href="cart.html">Mi Carrito</a></li>
                  <li class="hidden-xs"><a href="checkout.html">Revision</a></li>
                  <li><a href="" data-toggle="modal" data-target="#login-modal">Iniciar</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header top  -->

    <!-- start header bottom  -->
    <div class="aa-header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-bottom-area">
              <!-- logo  -->
              <div class="aa-logo">
                <!-- Text based logo -->
                <a href="index.html">
                  <span class="fa fa-shopping-cart"></span>
                  <p>Triple<strong>"B"</strong> <span>Su Comercializadora</span></p>
                </a>
                <!-- img based logo -->
                <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
              </div>
              <!-- / logo  -->
               <!-- cart box -->
              <div class="aa-cartbox">
                <a class="aa-cart-link" href="#">
                  <span class="fa fa-shopping-cart"></span>
                  <span class="aa-cart-title">Carrito</span>
                  <span class="aa-cart-notify">2</span>
                </a>
                <div class="aa-cartbox-summary">
                  <ul>
                    <li>
                      <a class="aa-cartbox-img" href="#"><img src="img/woman-small-2.jpg" alt="img"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#">Product Name</a></h4>
                        <p>1 x $250</p>
                      </div>
                      <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                    </li>
                    <li>
                      <a class="aa-cartbox-img" href="#"><img src="img/woman-small-1.jpg" alt="img"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#">Product Name</a></h4>
                        <p>1 x $250</p>
                      </div>
                      <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                    </li>                    
                    <li>
                      <span class="aa-cartbox-total-title">
                        Total
                      </span>
                      <span class="aa-cartbox-total-price">
                        $500
                      </span>
                    </li>
                  </ul>
                  <a class="aa-cartbox-checkout aa-primary-btn" href="checkout.html">Checkout</a>
                </div>
              </div>
              <!-- / cart box -->
              <!-- search box -->
              <div class="aa-search-box">
                <form action="">
                  <input type="text" name="" id="" placeholder="Buscar">
                  <button type="submit"><span class="fa fa-search"></span></button>
                </form>
              </div>
              <!-- / search box -->             
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header bottom  -->
  </header>
  <!-- / header section -->
  <!-- menu -->
  <section id="menu">
    <div class="container">
      <div class="menu-area">
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>          
          </div>
          <div class="navbar-collapse collapse">
            <!-- Left nav -->
            <ul class="nav navbar-nav">
              <li><a href="index.html">Inicio</a></li>
              <li><a href="#">Computadoras<span class="caret"></span></a>
                <ul class="dropdown-menu">                
                  <li><a href="#">Computadoras<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                      <li><a href="#">All In One</a></li>
                      <li><a href="#">iMac</a></li>
                      <li><a href="#">iPad</a></li>
                      <li><a href="#">Laptops</a></li>
                      <li><a href="#">Mac Pro</a></li>
                      <li><a href="#">Macbook</a></li>
                      <li><a href="#">PCs de Escritorio</a></li>
                      <li><a href="#">Tabletas</a></li>                                     
                    </ul>
                  </li>
                  <li><a href="#">Gaming<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                      <li><a href="#">Laptop</a></li>
                      <li><a href="#">Monitor</a></li>
                      <li><a href="#">PC de Escritorio</a></li>
                      </ul>
                  </li>
                  <li><a href="#">Workstations<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                  <li><a href="#">Workstations de Escritorio</a></li>
                  <li><a href="#">Workstations Moviles</a></li>
                  </ul>
                  </li>
                  <li><a href="#">Servidores<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                      <li><a href="#">Almacenamiento</a></li>
                      <li><a href="#">Servidor de Rack</a></li>
                      <li><a href="#">Servidores</a></li>
                      <li><a href="#">Torre</a></li>
                      </ul>
                  </li>                                                                      
                </ul>
              </li>
              <li><a href="#">Componentes<span class="caret"></span></a>
                <ul class="dropdown-menu">  
                  <li><a href="#">Ensamble<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                  <li><a href="#">Enfriamiento y Ventilacion</a></li>              
                  <li><a href="#">Fuentes de Poder</a></li>
                  <li><a href="#">Gabinetes Para Computadoras</a></li>              
                  <li><a href="#">Lectores de Memorias</a></li>
                  <li><a href="#">Microprocesadores</a></li>              
                  <li><a href="#">Monitores</a></li>
                  <li><a href="#">Motherboards</a></li>              
                  <li><a href="#">Opticos</a></li>
                  </ul>
                  </li>                                                                
                  <li><a href="#">Tarjetas<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                  <li><a href="#">Tarjetas de Expansion</a></li>              
                  <li><a href="#">Tarjetas de Sonido</a></li>
                  <li><a href="#">Tarjetas de Video</a></li>              
                  <li><a href="#">Tarjetas FireWire</a></li>
                  <li><a href="#">Tarjetas Paralelas</a></li>              
                  <li><a href="#">Tarjetas Seriales</a></li>
                  </ul>
                  </li>              
                  <li><a href="#">Almacenamiento<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                  <li><a href="#">Discos Duros</a></li>
                  <li><a href="#">Memorias Ram</a></li>              
                  <li><a href="#">SSD</a></li>
                  </ul>
                  </li>
                 
                  
                </ul>
              </li>
              <li><a href="#">Impresoras<span class="caret"></span></a>
                <ul class="dropdown-menu">                
                  <li><a href="#">Impresion<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                  <li><a href="#">Duplicadores</a></li>
                  <li><a href="#">Impresoras</a></li>
                  <li><a href="#">Maquinas de Escribir</a></li>
                  <li><a href="#">Multifuncionales</a></li>
                  <li><a href="#">Plotters</a></li>
                  <li><a href="#">Rotuladores</a></li>
                  </ul>
                  </li>
                  <li><a href="#">Consumibles<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                  <li><a href="#">Cabezales</a></li>
                  <li><a href="#">Cartuchos</a></li>
                  <li><a href="#">Cintas</a></li>
                  <li><a href="#">Papeleria</a></li>
                  <li><a href="#">Peliculas</a></li>
                  <li><a href="#">Refacciones</a></li>
                  <li><a href="#">Toners</a></li>
                  </ul>
                  </li> 
                  <li><a href="#">Digitalizacion de Imagenes<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                  <li><a href="#">Copiadoras</a></li>
                  <li><a href="#">Escaner</a></li>
                  <li><a href="#">Fax</a></li>
                  </ul>
                  </li>
                 
                  
                </ul>
              </li>
              <li><a href="#">Electronica<span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li><a href="#">Electronica<span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li><a href="#">Camaras</a></li>
              <li><a href="#">Celulares</a></li>
              <li><a href="#">DVD y Blu Ray</a></li>
              <li><a href="#">Proyectores</a></li>
              </ul>
              </li>
              <li><a href="#">Audio<span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li><a href="#">Bocinas</a></li>
              <li><a href="#">Home Theaters</a></li>
              <li><a href="#">iPod</a></li>
              <li><a href="#">Microfonos</a></li>
              </ul>
              </li>
              <li><a href="#">Almacenamiento Portatil<span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li><a href="#">DD Externo</a></li>
              <li><a href="#">Gabinetes Para DD</a></li>
              <li><a href="#">Memorias Flash</a></li>
              <li><a href="#">Memorias Usb</a></li>
              </ul>
              </li>

              </ul>
              </li>
             <li><a href="#">Conectividad <span class="caret"></span></a>
                <ul class="dropdown-menu">                
                  <li><a href="#">Red Activa<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                  <li><a href="#">Access Points</a></li>
                  <li><a href="#">Extensores de Red</a></li>
                  <li><a href="#">Routers</a></li>
                  <li><a href="#">Switches</a></li>
                  </ul>
                  </li>
                  <li><a href="#">Cables<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                  <li><a href="#">Bobinas</a></li>
                  <li><a href="#">Cables Coaxial</a></li>
                  <li><a href="#">Cables de Audio</a></li>
                  <li><a href="#">Cables de Red</a></li>
                  <li><a href="#">Cables de Video</a></li>
                  <li><a href="#">Cables FireWire</a></li>
                  <li><a href="#">Cables USB</a></li>
                  <li><a href="#">Jacks</a></li>
                  </ul>
                  </li>
                  <li><a href="#">Telefonia<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                  <li><a href="#">Conmutadores</a></li>
                  <li><a href="#">Frentes de Portero</a></li>
                  <li><a href="#">Kit Telefonico</a></li>
                  <li><a href="#">Telefonos Analogicos</a></li>
                  <li><a href="#">Telefonos Digitales</a></li>
                  <li><a href="#">Telefonos IP</a></li>
                  </ul>
                  </li>                                                
                  <li><a href="#">Video Vigilancia<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                  <li><a href="#">Camaras de Video</a></li>
                  <li><a href="#">Control de Acceso</a></li>
                  <li><a href="#">Grabadoras Digitales</a></li>
                  <li><a href="#">Kits Videovigilancia</a></li>

                  </ul>
                  </li>                
                </ul>
              </li>
                        
              
              <li><a href="contact.html">Contacto</a></li>
            
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>       
    </div>
  </section>
  <!-- / menu -->

  
       
     <div class="container">
            @yield('contenido')
        </div>
 
  
  <!-- / slider -->
  <!-- Start Promo section -->
 
  <!-- / Promo section -->
  <!-- Products section -->
 
  <!-- / Products section -->
  <!-- banner section -->
  
  
  <!-- Support section -->
  <section id="aa-support">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-support-area">
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-truck"></span>
                <h4>ENVIO GRATIS</h4>
                <P>A cualquier Parte del Pais</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-clock-o"></span>
                <h4>DINERO EN 30 DIAS</h4>
                <P>si su Articulo no lo satsfacio le regresamos su dinero antes de 30 dias</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-phone"></span>
                <h4>SOPORTE 24/7</h4>
                <P>Soporte en linea todo el dia</P>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Support section -->
  <!-- Testimonial -->
 
  <!-- / Testimonial -->

  <!-- Latest Blog -->
  
  <!-- / Latest Blog -->

  <!-- Client Brand -->
  <section id="aa-client-brand">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-client-brand-area">
            <ul class="aa-client-brand-slider">
              <li><a href="#"><img src="{{asset("img/cisco.jpg")}}" alt="cisco img" ></a></li>
              <li><a href="#"><img src="{{asset("img/HP.jpg")}}" alt="hp img"></a></li>
              <li><a href="#"><img src="{{asset("img/kingston.png")}}" alt="kingston img"></a></li>
              <li><a href="#"><img src="{{asset("img/lg.jpg")}}" alt="lg img"></a></li>
              <li><a href="#"><img src="{{asset("img/samsung.jpg")}}" alt="samsung img"></a></li>
              <li><a href="#"><img src="{{asset("img/adata.png")}}" alt="adata img"></a></li>
              <li><a href="#"><img src="{{asset("img/asus.png")}}" alt="asus img" height="60"></a></li>
              <li><a href="#"><img src="{{asset("img/dell2.png")}}" alt="dell img"  height="60"></a></li>
              <li><a href="#"><img src="{{asset("img/TP-LINK.jpg")}}" alt="TP-LINK img" height="60"></a></li>
              <li><a href="#"><img src="{{asset("img/sony.png")}}" alt="sony img" height="60"></a></li>
              <li><a href="#"><img src="{{asset("img/vorago.jpg")}}" alt="vorago img" height="60"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Client Brand -->

  <!-- Subscribe section -->
  <section id="aa-subscribe">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-subscribe-area">
            <h3>Suscribete a Nuestro Boletin</h3>
            <p>Suscribete Y Enterate de Todas Nuestras Promociones</p>
            <form action="" class="aa-subscribe-form">
              <input type="email" name="" id="" placeholder="Ingrese Email">
              <input type="submit" value="Subcribirme">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Subscribe section -->

  <!-- footer -->  
  <footer id="aa-footer">
    <!-- footer bottom -->
    <div class="aa-footer-top">
     <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-top-area">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <h3>Menu</h3>
                  <ul class="aa-footer-nav">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Productos</a></li>
                    <li><a href="#">Acerca De</a></li>
                    <li><a href="#">Contacto</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Conocimiento</h3>
                    <ul class="aa-footer-nav">
                      <li><a href="#">Entregas</a></li>
                      <li><a href="#">Devoluciones</a></li>
                      <li><a href="#">Servicios</a></li>
                      <li><a href="#">Descuentos</a></li>
                      <li><a href="#">Ofertas Especiales</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Enlaces Utiles</h3>
                    <ul class="aa-footer-nav">
                      <li><a href="#">Mapa del Sitio</a></li>
                      <li><a href="#">Buscar</a></li>
                      <li><a href="#">Busqueda Avanzada</a></li>
                      <li><a href="#">Provedores</a></li>
                      <li><a href="#">Preguntas</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Contactanos</h3>
                    <address>
                      <p> 25 Astor Pl, NY 10003, USA</p>
                      <p><span class="fa fa-phone"></span>+1 212-982-4589</p>
                      <p><span class="fa fa-envelope"></span>tripleB@gmail.com</p>
                    </address>
                    <div class="aa-footer-social">
                      <a href="#"><span class="fa fa-facebook"></span></a>
                      <a href="#"><span class="fa fa-twitter"></span></a>
                      <a href="#"><span class="fa fa-google-plus"></span></a>
                      <a href="#"><span class="fa fa-youtube"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     </div>
    </div>
    <!-- footer-bottom -->
    <div class="aa-footer-bottom">
      <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-bottom-area">
            <p>Diseño<a>.Manuel Meza</a></p>
            <div class="aa-footer-payment">
              <span class="fa fa-cc-mastercard"></span>
              <span class="fa fa-cc-visa"></span>
              <span class="fa fa-paypal"></span>
              <span class="fa fa-cc-discover"></span>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </footer>
  <!-- / footer -->

  <!-- Login Modal -->  
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">                      
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4>Iniciar seccion o Registrarse</h4>
          <form class="aa-login-form" action="">
            <label for="">Usuario O Email<span>*</span></label>
            <input type="text" placeholder="Usuario o Email">
            <label for="">Contraseña<span>*</span></label>
            <input type="password" placeholder="Contraseña">
            <button class="aa-browse-btn" type="submit">Iniciar</button>
            <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Recordarme </label>
            <p class="aa-lost-password"><a href="#">Contraseña Olvidada?</a></p>
            <div class="aa-register-now">
              No tiene Una Cuenta?<a href="account.html">Registrese Ahora!</a>
            </div>
          </form>
        </div>                        
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>    

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.js"></script>  
  <!-- SmartMenus jQuery plugin -->
  <script type="text/javascript" src="js/jquery.smartmenus.js"></script>
  <!-- SmartMenus jQuery Bootstrap Addon -->
  <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script>  
  <!-- Product view slider -->
  <script type="text/javascript" src="js/jquery.simpleGallery.js"></script>
  <script type="text/javascript" src="js/jquery.simpleLens.js"></script>
  <!-- slick slider -->
  <script type="text/javascript" src="js/slick.js"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="js/nouislider.js"></script>
  <!-- Custom js -->
  <script src="js/custom.js"></script> 

  </body>
</html>