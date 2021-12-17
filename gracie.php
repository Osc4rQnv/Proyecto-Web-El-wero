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

        <!--===============================Contacto================================-->
        <section class="contact1">
            <div class="content1">
                <h2>Contacta con nosotros</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente porro voluptas quibusdam fugit enim,
                    explicabo laboriosam libero. Accusamus sint praesentium sunt, eaque ipsa sed et deleniti.</p>
            </div>
            <div class="container1" >
                <div class="contactInfo1">
                    <div class="box1">
                        <a href="https://goo.gl/maps/v9oqZ5vaFC1a9Vz16" target="_blank"><div class="icon1"><i class="fa fa-map-marker" aria-hidden="true"></i></a>
                        </div>
                        <div class="text1">
                           <a href="https://goo.gl/maps/v9oqZ5vaFC1a9Vz16" target="_blank"><h3 class="her">Direccion</h3></a>
                            <a href="https://goo.gl/maps/v9oqZ5vaFC1a9Vz16" target="_blank"><p class="per">Estaño 116 Ciudad Industrial,<br>Durango, durango</p></a>
                        </div>
                    </div>
                    <div class="box1">
                        <div class="icon1"><i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="text1">
                            <h3>Telefono</h3>
                            <p>618-835-45-69</p>
                        </div>    
                    </div>
                    <div class="box1">
                        <div class="icon1"><i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="text1">
                            <h3>Correo electronico</h3>
                            <p>elwerosuper@gmail.com</p>
                        </div>    
                    </div>
                </div>
                <div class="contactForm">
                    <form class="myform" action="mail.php" method="post">
                        <h2>Gracias por escribirnos, nuestro equipo se pondra en contacto.</h2>
                    </form>
                </div> 
            </div> 
        </section>

        

        <!--====================================FOOTER====================================-->

<?php
    include "footer.php"
 ?>

    </div>
</body>
</html>