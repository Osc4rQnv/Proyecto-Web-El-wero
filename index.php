<!--=================HEADER=============================-->
<?php
    include "header.php"
 ?>
		<!--=================Menu Hamburguesa=============================-->
		<nav role='navigation'>
			<div id="menuToggle">
			  
			  <input type="checkbox" />
			  
			  <span></span>
			  <span></span>
			  <span></span>
			  
			  <ul id="menu">
				<a id="btmMenu" class="menu_item" href="index.php"><li>Inicio</li></a>
				<a id="btmMenu" class="menu_item" href="#"><li>Productos</li></a>
				<a id="btmMenu" class="menu_item" href="contacto.php"><li>Contacto</li></a>
			  </ul>
			</div>
		</nav>


		<!-- Slider -->
		<div class="main_slider" style="background-image: url(img/cerveza/slider7.png);">
			<div class="container fill_hight">
				<div class="row align-items-center fill_hight">
					<div class="col">
						<div class="main_slider_content">
							<h5>Cerveza Tecate en Descuento</h5>
							<h1>30% de descuento en cervezas</h1>
							<div class="red_button shop_now_button"><a href="a">Compra ahora</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Banner -->
		<div class="banner">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="banner_item align-item-center"
							style="background-image: url(img/cerveza/slider9.png);">
							<div class="banner_category" id="cont">
								<a href="#">Premium</a>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="banner_item align-item-center"
							style="background-image: url(img/cerveza/slider8.png);">
							<div class="banner_category">
								<a href="#">Ultra</a>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="banner_item align-item-center"
							style="background-image: url(img/cerveza/slider10.png);">
							<div class="banner_category">
								<a href="#">Hielera</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- New Arrivals -->
		<!--<div class="new_arrivals">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<div class="section_title new_arrivals_title">
							<h2>Promociones</h2>
						</div>
					</div>
				</div>
			</div>
		</div>-->

		<!-- Deal of the week -->
		<!-- Benefit -->
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
	<!-- Bootstrap JS CDN -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
		integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
		crossorigin="anonymous"></script>
	<!-- jquery JS File -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<!-- Isotope JS File -->
	<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
	<!-- Owl Carousel JS File -->
	<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<!-- Javascript File -->
	<script src="js/custom.js"></script>
</body>

</html>