<div class="fondofooter2" >
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @foreach ($redes as $r)
                
				<div class="circulo mt-2 text-center">
                    <span class="text-white mr-3" style="font-size:13px;">SEGUINOS EN</span> 
				    <a href="{{$r->instagram}}" target="_blank">
                        <i class="iconofooter border  fab fa-instagram text-white" ></i>
                    </a> 
                    <!-- <a href="{{$r->youtube}}" target="_blank">
                        <i class="iconofooter border mx-2 fab fa-youtube text-white" ></i>
                    </a> -->
                    <a href="{{$r->youtube}}" target="_blank">
                        <i class="iconofooter  border fab fa-facebook-f text-white "></i>
                    </a>    
       
                        
                 </div>
                 @endforeach
			</div>
		</div>
	</div> 
</div>

<div class="fondofooterseccion">
	<div class="container p-3">
		<div class="row ">
            <div class="col-md-2 mt-4">	
				<span class="letra  " style="font-size:15px ; color:#A2A8B2">SECCIONES</span>
				<div class="row">
					<div class="col">	
						<a href="{{route('page.empresa')}}" class="letraenlace">Empresa</a><br>
						<a href="{{route('page.productos')}}" class="letraenlace">Productos</a><br>
						<a href="{{route('page.aplicaciones')}}" class="letraenlace">Aplicaciones</a><br>
					</div>		
				</div>	
			</div>
			<div class="col-md-2 mt-2 ">	
				<div class="row">
					<div class="col">
							<p>&nbsp;</p>	
					
					</div>		
				</div>	
			</div>

            <div class="col-md-4 pt-3 mt-2">
                <div class="row">
                    <span class="letra" style="font-size:15px ; color:#A2A8B2">SUSCRIBITE AL NEWSLETTERS</span>

                    <form id="formSubscribirse">
                        @csrf
                        <div class="input-group col-md-12 mt-4 p-0">
                            <input type="email" id="correo_news" name="email" class="form-control newsletter" placeholder="Ingrese un mail" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                    <button type="submit" class="input-group-text newsletter" id="basic-addon2">
                                            <i class="text-white fas fa-paper-plane"></i>    
                                    </button>
                                
                            </div>
                          </div>
                       
                    </form>      

                </div> 
            </div>
		
			   <div class="col-md-4 pt-3 mt-2">
                    <div class="letra " style="font-size:15px ; color:#A2A8B2">COSCIAPLAS</div>
                    <div class="row pt-2">
                        <div class="col-md-12 ">
                            
	                            @foreach ($contactos as $c)
                                

                                    <div class="d-flex">
                                        <i class="fas fa-map-marker-alt" style="color:#A2A8B2;"></i>
                                        <a href="https://goo.gl/maps/vpJwm8Q8NXBrhTty6"  target="_blank" class="letraenlace ml-3">{{$c->direccion}}</a>
                                    </div>
                                    <div class="d-flex mt-3">
                                        <i class="fas fa-phone-alt" style="color:#A2A8B2;"></i>
                                        <a href="https://wa.me/{{$c->telefono}}" class="letraenlace ml-3">{{$c->telefono}}</a>
                                    </div>
                                    <!-- <div class="d-flex mt-3">
                                        <i class="fab fa-whatsapp fa-lg  " style="color: #484E91"></i>
                                        <a  href="tel:{{$c->celular}}" class="letraenlace ml-3">{{$c->celular}}</a>
                                    </div> -->
                                    <div class="d-flex mt-3">
                                        <i class="fas fa-envelope" style="color:#A2A8B2;"></i>
                                        <a href="mailto:{{$c->correo}}" class="letraenlace ml-3">{{$c->correo}}</a>
                                    </div>
                               
	                            
	                            @endforeach
                                
                        </div>
                    </div>
                </div>
            </div>
			
				
		</div>
	</div>

    @section('js')
    
    <script>
        $('#formSubscribirse').on('submit',function(e){
         e.preventDefault();
         let form= new FormData($('#formSubscribirse')[0]);
         var loc = window.location;
       var pathName = loc.pathname.substring(0, loc.pathname.lastIndexOf('/') + 1);
       let miurl= loc.href.substring(0, loc.href.length - ((loc.pathname + loc.search + loc.hash).length - pathName.length));
         $.ajax({
           type: "post",
           url: miurl+'subscribirse',
           data: form,
           processData: false,  // tell jQuery not to process the data
           contentType: false,   // tell jQuery not to set contentType
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           },
           success: function (response) {
               swal("Se ha subscripto correctamente","","success");
               $('#correo_news').val("");
               setTimeout(function(){ location.reload(); }, 1500);
           },
           error: function(response){
               console.log(response);
               swal("Algo salió mal","","error");
           }
         });
        });
      </script>
      
@endsection