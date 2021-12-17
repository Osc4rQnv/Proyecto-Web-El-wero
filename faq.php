<!--=================HEADER=============================-->
<?php
    include "header.php"
?>
	<main>
		<div class="super_container">
		<!--=================FAQ=============================-->
		<h1 class="titulo">Preguntas Frecuentes</h1>
			<div class="categorias" id="categorias">
				<div class="categoria activa" data-categoria="agregar-carrito">
					<img src="https://img.icons8.com/material-outlined/48/000000/fast-cart.png"/>
					<p>Más productos a mi carrito</p>
				</div>
				<div class="categoria" data-categoria="entregas">
					<img src="https://img.icons8.com/material-outlined/48/000000/delivery.png"/>
					<p>Entregas a domicilio</p>
				</div>
				<div class="categoria" data-categoria="metodos-pago">
					<img src="https://img.icons8.com/material-sharp/48/000000/cash-.png"/>
					<p>Métodos de pago</p>
				</div>
				<div class="categoria" data-categoria="extra">
					<img src="https://img.icons8.com/ios/50/000000/ask-question.png"/>
					<p>Espacio Extra</p>
				</div>
			</div>

			<div class="preguntas">

				<!-- Preguntas agregar-carrito -->
				<div class="contenedor-preguntas activo" data-categoria="agregar-carrito">
					<div class="contenedor-pregunta">
						<p class="pregunta">¿Cómo agrego más productos a mi carrito?<img src="./img/suma.svg" alt="Abrir Respuesta" /></p>
						<p class="respuesta">Para agregar correctamente más productos, es necesario hacerlo desde la sección de “carrito”, una vez ahí, en la columna de cantidad se agrega la cantidad deseada de productos.</p>
					</div>
					<div class="contenedor-pregunta">
						<p class="pregunta">¿Pregunta...? <img src="./img/suma.svg" alt="Abrir Respuesta" /></p>
						<p class="respuesta">Texto de prueba.</p>
					</div>
				</div>

				<!-- Preguntas entregas -->
				<div class="contenedor-preguntas" data-categoria="entregas">
					<div class="contenedor-pregunta">
						<p class="pregunta">¿Tienen entregas a domicilio? <img src="./img/suma.svg" alt="Abrir Respuesta" /></p>
						<p class="respuesta">No, los pedidos se realizan desde la página web y se deberá pasar a la tienda por sus productos.</p>
					</div>
					<div class="contenedor-pregunta">
						<p class="pregunta">¿Porque no hacen entregas a domicilio? <img src="./img/suma.svg" alt="Abrir Respuesta" /></p>
						<p class="respuesta">Texto de prueba.</p>
					</div>
				</div>

				<!-- Preguntas metodos-pago -->
				<div class="contenedor-preguntas" data-categoria="metodos-pago">
					<div class="contenedor-pregunta">
						<p class="pregunta">¿Qué metodos de pago ofrecen? <img src="./img/suma.svg" alt="Abrir Respuesta" /></p>
						<p class="respuesta">Texto de prueba.</p>
					</div>
					<div class="contenedor-pregunta">
						<p class="pregunta">¿Pregunta...? <img src="./img/suma.svg" alt="Abrir Respuesta" /></p>
						<p class="respuesta">Texto de prueba.</p>
					</div>
				</div>

				<!-- Preguntas extra2 -->
				<div class="contenedor-preguntas" data-categoria="extra">
					<div class="contenedor-pregunta">
						<p class="pregunta">¿Pregunta...? <img src="./img/suma.svg" alt="Abrir Respuesta" /></p>
						<p class="respuesta">Texto de prueba.</p>
					</div>
					<div class="contenedor-pregunta">
						<p class="pregunta">¿Pregunta...? <img src="./img/suma.svg" alt="Abrir Respuesta" /></p>
						<p class="respuesta">Texto de prueba.</p>
					</div>
				</div>
			</div>

<!--=================Menu Hamburguesa=============================-->
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
	</main>

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
	
	<script src="js/categorias.js"></script>
	<script src="js/preguntasFrecuentes.js"></script>
</body>

</html>