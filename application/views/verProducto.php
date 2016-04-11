<body id="p">

<div class="color-blanco centrar espacio-arriba2 letra-grande">
	<div>
		<img class="imagen "src=<?= $datos->result()[0]->imagen?>>
	</div>
	<?php echo $datos->result()[0]->nombreProducto;?>
	<div>
		<?php echo "precio $".$datos->result()[0]->precio;?>
	</div>
		<?php echo "Descripcion: ".$datos->result()[0]->descripcion;?>
	
</div>
<br><br><br>

	<div class="productos ">
		<?= form_open("/CMC/agregarCarrito") ?>
<?= form_submit('','Agregar al carrito') ?>
<?= form_close() ?>	
	</div>

	<div class="espacio-izq ">
		<?= form_open("/CMC") ?>
<?= form_submit('','Regresar') ?>
<?= form_close() ?>
	</div>


</body>


</html>