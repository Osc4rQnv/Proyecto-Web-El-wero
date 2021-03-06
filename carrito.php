<!--=================HEADER=============================-->
<?php
    include "header.php"
?>

		<!--Menu Hamburguesa-->
		<nav role='navigation'>
			<div id="menuToggle">
			  
			  <input type="checkbox" />
			  
			  <span></span>
			  <span></span>
			  <span></span>
			  
			  <ul id="menu">
				<a id="btmMenu" class="menu_item" href="index.html"><li>Inicio</li></a>
				<a id="btmMenu" class="menu_item" href="#"><li>Productos</li></a>
				<a id="btmMenu" class="menu_item" href="contacto.html"><li>Contacto</li></a>
			  </ul>
			</div>
		</nav>

		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<div class="posicion-titulo">
			<h2>Carrito de Compras</h2>
		</div>
        <!--Carrito de Compras-->
        <div class="cart-box-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-main table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Imagenes</th>
                                        <th>Nombre del Producto</th>
                                        <th>Precio</th>
                                        <th>Cantidad</th>
                                        <th>Total</th>
                                        <th>Remover</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="thumbnail-img">
                                            <a href="#">
                                        <img class="img-fluid" src="img/carrito/Heineken.jpg" alt="">
                                    </a>
                                        </td>
                                        <td class="name-pr">
                                            <a href="#">
                                        Cerveza Heineken
                                    </a>
                                        </td>
                                        <td class="price-pr">
                                            <p>$ 80.0</p>
                                        </td>
                                        <td class="quantity-box"><input type="number" size="4" value="1" min="0" step="1" class="c-input-text qty text"></td>
                                        <td class="total-pr">
                                            <p>$ 80.0</p>
                                        </td>
                                        <td class="remove-pr">
                                            <a href="#">
                                        <i class="fas fa-times"></i>
                                    </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="thumbnail-img">
                                            <a href="#">
                                        <img class="img-fluid" src="img/carrito/sabritones.jpg" alt="" />
                                    </a>
                                        </td>
                                        <td class="name-pr">
                                            <a href="#">
                                        Bolsa de papas Sabritones
                                    </a>
                                        </td>
                                        <td class="price-pr">
                                            <p>$ 60.0</p>
                                        </td>
                                        <td class="quantity-box"><input type="number" size="4" value="1" min="0" step="1" class="c-input-text qty text"></td>
                                        <td class="total-pr">
                                            <p>$ 80.0</p>
                                        </td>
                                        <td class="remove-pr">
                                            <a href="#">
                                        <i class="fas fa-times"></i>
                                    </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="thumbnail-img">
                                            <a href="#">
                                        <img class="img-fluid" src="img/carrito/salsa.png" alt="" />
                                    </a>
                                        </td>
                                        <td class="name-pr">
                                            <a href="#">
                                        Salsa para papas botanera
                                    </a>
                                        </td>
                                        <td class="price-pr">
                                            <p>$ 30.0</p>
                                        </td>
                                        <td class="quantity-box"><input type="number" size="4" value="1" min="0" step="1" class="c-input-text qty text"></td>
                                        <td class="total-pr">
                                            <p>$ 80.0</p>
                                        </td>
                                        <td class="remove-pr">
                                            <a href="#">
										<i class="fa fa-times" aria-hidden="true"></i>
                                    </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
    
                <!--<div class="row my-5">
                    <div class="col-lg-6 col-sm-6">
                        <div class="coupon-box">
                            <div class="input-group input-group-sm">
                                <input class="form-control" placeholder="Pon tu codigo del Cupon" aria-label="Coupon code" type="text">
                                <div class="input-group-append">
                                    <button class="btn btn-theme" type="button">Canjear Cupon</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="update-box">
                            <input value="Actualizar Carrito" type="submit">
                        </div>
                    </div>
                </div>-->
    
                <div class="row my-5">
                    <div class="col-lg-8 col-sm-12"></div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="order-box">
                            <h3>Total de la Orden</h3>
                            <div class="d-flex">
                                <h4>Sub Total</h4>
                                <div class="ml-auto font-weight-bold"> $ 130 </div>
                            </div>
                            <!--<div class="d-flex">
                                <h4>Descuento</h4>
                                <div class="ml-auto font-weight-bold"> $ 40 </div>
                            </div>-->
                            <hr class="my-1">
                            <!--<div class="d-flex">
                                <h4>Cupon de Descuento</h4>
                                <div class="ml-auto font-weight-bold"> $ 10 </div>
                            </div>-->
                            <div class="d-flex">
                                <h4>IVA</h4>
                                <div class="ml-auto font-weight-bold"> $ 2 </div>
                            </div>
                            <!--<div class="d-flex">
                                <h4>Costo del Envio</h4>
                                <div class="ml-auto font-weight-bold"> Gratis </div>
                            </div>-->
                            <hr>
                            <div class="d-flex gr-total">
                                <h5>Costo Total</h5>
                                <div class="ml-auto h5"> $ 388 </div>
                            </div>
                            <hr> </div>
                    </div>
                    <!--<div class="col-12 d-flex shopping-box"><a href="#" class="ml-auto btn hvr-hover">Total</a> </div>-->
                </div>
    
            </div>
        </div>
		
		<!-- Benefit -->
		<div class="benefit">
			<div class="container">
			 <div class="row benefit_row">
		 
			  <div class="col-lg-3 benefit_col">
			   <div class="benefit_item d-flex flex-row align-items-center">
				<div class="benefit_icon">
				 <i class="fa fa-thumbs-o-up" aria-hidden="true"></i> <!-- Icono -->
				</div>  
				<div class="benefit_content">
					 <h6>realiza tu pedido facil y rapido</h6>
					 <p>c:</p>   
				</div>
			   </div>
			  </div>
		 
		 
			  <div class="col-lg-3 benefit_col">
			   <div class="benefit_item d-flex flex-row align-items-center">
				<div class="benefit_icon">
				 <i class="fa fa-flag" aria-hidden="true"></i>
		 
				 </div>  
				 <div class="benefit_content">
					 <h6>40 minutos para recoger tus productos</h6>
					 <p>Se puntual, solo se apartaran por 40 minutos</p>   
				</div>
			   </div>
			  </div>
		 
			  <div class="col-lg-3 benefit_col">
			   <div class="benefit_item d-flex flex-row align-items-center">
				<div class="benefit_icon">
				 <i class="fa fa-money" aria-hidden="true"></i>
		 
				 </div>  
				 <div class="benefit_content">
					 <h6>pagar en local</h6>
					 <p>Aparta tus productos directamente en la pagina antes que todos</p>   
				</div>
			   </div>
			  </div>
		 
			  <div class="col-lg-3 benefit_col">
			   <div class="benefit_item d-flex flex-row align-items-center">
				<div class="benefit_icon">
				 <i class="fa fa-clock-o" aria-hidden="true"></i>
		 
				 </div>  
				 <div class="benefit_content">
					 <h6>abierto toda la semana</h6>
					 <p>lunes a sabados 9AM - 10PM <br> domingos 9AM - 5PM</p1>  
				</div>
			   </div>
			  </div>
		 
			 </div>
			</div>
		</div>

		<!-- Blogs -->
		

		<!-- Newsletter -->
		<div class="newsletter">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="newsletter_text d-flex flex-column justify-content-center
						align-items-lg-start align-items-md-center text-center">
							<h4>Noticias</h4>
							<p>Enterate primero que nadie de ofertas, novedades y mas</p>
						</div>
					</div>
					<div class="col-lg-6">
						<form action="post">
							<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column 
							align-items-center justify-content-lg-end justify-content-center">
							<input id="newsletter_email" type="email" placeholder="Correo electronico" required="required"
							data-error="valid email is required.">
							<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300"
							value="submit">Suscribete</button>
							</div>
						</form>
					</div>


				</div>	
			</div>   
	   </div>
		
		<!-- FOOTER -->
    <?php
         include "footer.php"
    ?>
	</div>
	<!-- jquery JS File -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<!-- Bootstrap JS CDN -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
		integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
		crossorigin="anonymous"></script>
	<!-- Isotope JS File -->
	<script src="plugging/Isotope/isotope.pkgd.min.js"></script>
	<!-- Owl Carousel JS File -->
	<script src="plugging/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<!-- Javascript File -->
	<script src="js/script.js"></script>
</body>

</html>