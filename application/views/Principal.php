<body id="p">

	<div class="col-md-12 center-block  text-center color-p" >
		<h1>CompuMax</h1>
		<h2>Bienvenido aqui encontraras los mejores precios</h2>
	</div>

	<div class="center-block text-center " id="b_lateral">
	<div class="imagen-Carrito ">
			<a href="CMC/Carrito" class="texto-carrito">
			Carrito
		</div>
	

		<div class="cont-barra quitar-float">

	<?php foreach ($datos->result() as $opc) {?>
		<ul>
			<div class="img-menu ">
			</div>
				<div>
					<a href=<?= "CMC/".$opc->nombreCategoria ?> class="text-menu">
					<?=$opc->nombreCategoria;?>
					</a>
				</div>
		</ul>
	<?php } ?>

	<div><img src="/CompuMax/assets/imagenes/logo.png" class="logo"></div>


</body>
</html>