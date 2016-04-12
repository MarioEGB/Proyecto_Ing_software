<body id="p">

	<div class="col-md-12 center-block  text-center color-p" >
		<h1>CompuMax</h1>
		<h2 class="h3"><?= $this->uri->segment(2)?></h2>
	</div>

	<div class="center-block text-center " id="b_lateral">
	<div class="imagen-Carrito ">
			<a href="CMC/Carrito" class="texto-carrito">
			Carrito
		</div>
	

		<div class="cont-barra quitar-float">

	<?php foreach ($tablas["datos"]->result() as $opc) {?>
		<ul>
			<div class="img-menu ">
			</div>
				<div>
					<a href=<?= $opc->nombreCategoria ?> class="text-menu">
					<?=$opc->nombreCategoria;?>
					</a>
				</div>
		</ul>
	<?php } ?>

		</div>
			
	</div>

	<div class="col-md-6 productos ">
		
		<?php foreach ($tablas["prod"]->result() as $opc) {?>
		<ul>
			<div>
			</div>
				<div >
					<a href=<?= $opc->idProducto ?> class="color-blanco">
					<img class="imagenes-prod "src=<?= $opc->imagen?>>
					<?=$opc->nombreProducto;?>
					$<?=$opc->precio;?>
					</a>
				</div>
		</ul>
	
	<?php } ?>

	</div>
	<?php echo $this->pagination->create_links();?>

</body>
</html>