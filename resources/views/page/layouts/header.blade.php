
    <div class="fondo d-none d-md-block">
  				<div class="container ">	
  						<div class="row">
	  						<div class="col-12 col-md-8  d-flex justify-content-start ">
                <div class="linea ">	
                <i class="icono fas fa-map-marker-alt text-white " style="color: #484E91"></i>
                @foreach($contactos as $c)
                  <a href="https://goo.gl/maps/vpJwm8Q8NXBrhTty6"  target="_blank" class="enlace ">{{$c->direccion}}</a>	
                  @endforeach
                </div>
								<div class="linea ">

									<i class="icono far fa-envelope text-white "></i>
                  @foreach($contactos as $c)
									<a class="enlace" href="mailto:{{$c->correo}}">{{$c->correo}}</a>
                  @endforeach
								</div>
								<div class="linea">	
  									<i class="icono fas fa-phone-alt text-white"></i>
                     @foreach($contactos as $c)
                    <a class="enlace" href="tel:{{$c->telefono}}">{{$c->telefono}}</a>
									 @endforeach
								</div>

	  						</div>
                            <div class="col-12 col-md-4  d-flex justify-content-end ">             
                                <div class="linea mr-2">
                                  @foreach($redes as $r)
                                  <a href="{{$r->facebook}}" target="_blank">
                                    
                                      <i class="icono fab fa-facebook-f text-white"></i>
                                  </a>
                                  <a href="{{$r->instagram}}" target="_blank">
                                  
                                      <i class="icono fab fa-instagram text-white"></i>
                                  
                                  </a> 
                                  <a href="{{$r->youtube}}" target="_blank">
                                  
                                      <i class="icono fab fa-youtube text-white"></i>
                                    
                                  </a>
                                  <a href="{{$r->twitter}}" target="_blank">
                                    
                                        <i class="icono fab fa-twitter text-white"></i>
                                  </a>
                                  <a href="{{$r->youtube}}" target="_blank">
                                    
                                       <i class="icono fab fa-youtube-f text-white"></i>
                                  </a>
                                   {{--  <i class="icono fas fa-search"></i> --}}
                                  @endforeach
                                </div>
                                

                            </div>  	

  						</div>	
  				</div>	
  	</div>				
    	
    <div class="container ">        
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                 <a class="navbar-brand my-3 p-0" href="{{route('page.inicio')}}">
                    @foreach($logosheader as $l)
                    <img src="{{asset(Storage::url($l->imagen))}}" class="img-fluid " style=" width: 240px;">
                    @endforeach
                </a>
                    <button class="navbar-toggler mb-2 " type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse flex-column"  id="navbarNavAltMarkup">
                         <div class="navbar-nav  d-flex justify-content-between ml-auto mt-3">
                            <div class="col-12 d-block d-md-none">              
                                    <div class="mr-5">
                                        <i class="icono fas fa-phone  text-white mb-1"></i>
                                        <a class="enlace ml-2" href="tel:(+5411)4655-0921">(+5411)4655-0921</a>
                                    </div>

                            </div>  
                            <a class="nav-item nav-link mx-2 {{ $active == 'page.empresa' ? 'active' : ''}}" href="{{route('page.empresa')}}">EMPRESA</a>
                                 <a class="nav-item nav-link mx-2 {{$active == 'page.productos' ? 'active' : ''}}" href="{{route('page.productos')}}">PRODUCTOS</a>
                                 <a class="nav-item nav-link mx-2 {{$active == 'page.aplicaciones' ? 'active' : ''}}" href="{{route('page.aplicaciones')}}">APLICACIONES</a>
                                 <a class="nav-item nav-link mx-2 {{$active == 'page.cartacolores' ? 'active' : ''}}" href="{{route('page.colores')}}">CARTA DE COLORES</a>
                                 <a class="nav-item nav-link mx-2 {{$active == 'page.solicitud' ? 'active' : ''}}" href="">SOLICITUD DE PRESUPUESTO</a>
                                 <a class="nav-item nav-link mx-2 {{$active == 'page.contactos' ? 'active' : ''}}" href="">CONTACTO</a>
                                
                            </div>

                    </div>
            </nav>
        
        </div>  



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->



