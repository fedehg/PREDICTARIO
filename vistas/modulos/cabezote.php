<header class=""> 

	<!--=============================================
AQUI EL LOGOTIPO , lepuse la conexion como en menu ya que no logor conectarla por el metodo get
=============================================-->

<a href="index.php?ruta=inicio" class="logo">
	
<!-- AQUI VAMOS A COLOCAR UN LOGO MINI -->
<span class="logo-mini" >
	
     <img  src="vistas/img/plantilla/blanco.png " width='40'height='45' class="img-responsive"
       style="padding:10px">

</span>

<!-- AQUI VAMOS A COLOCAR UN LOGO NORMAL --> 

<span class="logo-lg">
	
     <img src="vistas/img/plantilla/blanco-lineal.png" class="img-responsive"
      style="padding:10px 0px">
</a>

<!--=============================================
BARRA DE NAVEGACION
=============================================-->
<nav class="navbar navbar-static-top" role="navigation">
<!-- BOTON DE NAVEGACION-->

	<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">

	  <span class="sr-only">Toggle navigation</span>
		
	</a>
	<!-- PERFIL DE NAVEHGACION-->
	<div class="navbar-custom-menu">
		
     <ul class="nav navbar-nav">
     	<li class="dropdown user-menu">

         <a href="#" class="dropdown-toggle" data-toggle="dropdown">

         	<?php 
               
               if($_SESSION["foto"] != "") {
                   
                   echo '<img src="'.$_SESSION["foto"].'" class="user-image">';


               }else{

               echo '<img src="vistas/img/usuarios/default/anonymous.png" class="user-image">';
            

               }

         	?>
         	
         	
         	<span class="hidden-xs"><?php echo $_SESSION["nombre"] ?></span>
         </a>

     <!-- DROPDOWN TOGGLE O CAJA QUE SE ABRE-->
	<ul class="dropdown-menu">
		<li class="user-body"> 
			<div class="pull-right">
				<a href="salir" class="btn btn-default btn-flat">Salir</a>
			</div>
     	</li>	
     </ul>

	</div>
	
		</li>

	</ul>
</nav>

</header>