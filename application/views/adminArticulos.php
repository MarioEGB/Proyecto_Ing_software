<body id="p">
<h1 align="center" class="color-blanco">ADMINISTRACION DE ARTICULOS</h1>
<hr>

<div align="center">
	<h2 class='color-blanco'>AGREGAR</h2>
<hr>
<?= form_open("/CMC/addProducto") ?>
<?PHP
$nombre = array('name' => 'nombre' ,'placeholder' => 'Escribe nombre producto nuevo');
$Descripcion = array('name' => 'descripcion' ,'placeholder' => 'Escribe descripcion producto nuevor');
$precio = array('name' => 'precio' ,'placeholder' => 'Escribe precio producto');
$imagen = array('name' => 'imagen' ,'placeholder' => 'Escribe ruta imagen');
$categoria = array('name' => 'categoria' ,'placeholder' => 'Escribe categoria');

?>	
<?= form_input($nombre) ?>
<?= form_input($Descripcion);?>
 <?= form_input($precio);?>
 <?= form_input($imagen);?>
 <?= form_input($categoria);?>	
<?= form_submit('','Agregar') ?>
<br><br>
<?= form_close() ?>

</div>



<div align="center">
<h2 class='color-blanco'>MODIFICAR</h2>
<hr>
<div class="color-blanco" >NOMBRE ARTICULO  &nbsp&nbsp&nbsp&nbsp&nbsp DESCRIPCION ARTICULO&nbsp&nbsp&nbsp&nbsp PRECIO  ARTICULO&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp RUTA DE IMAGEN &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp CATEGORIAS &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</div>
<br>
<?php $i=1;?>
<?php foreach ($art->result() as $opc) {?>

<?= form_open("/CMC/updateProducto") ?>
<?PHP $nombre = array('name' => 'nombre' ,'placeholder' => 'Escribe nombre producto a modificar','value'=> $opc->nombreProducto);

	$Descripcion = array('name' => 'descripcion' ,'placeholder' => 'Escribe descripcion a modificar','value'=> $opc->descripcion);

	$precio = array('name' => 'precio' ,'placeholder' => 'Escribe precio a modificar','value'=> $opc->precio);

	$imagen = array('name' => 'imagen' ,'placeholder' => 'Escribe ruta imagen a modificar','value'=> $opc->imagen);

	$categoria = array('name' => 'categoria' ,'placeholder' => 'Escribe categoria a modificar','value'=> $opc->Categoria_idCategoria);

$datos=array('name'=> $i,'value'=> 'Modificar')
?>
<?php $i=$i+1;?>
 <?= form_input($nombre);?>
 <?= form_input($Descripcion);?>
 <?= form_input($precio);?>
 <?= form_input($imagen);?>
 <?= form_input($categoria);?>	
 <?= form_submit($datos) ?>
 <br><br>
 <?= form_close() ?>
<?php } ?>
<hr>
</div>

<div align="center">
	<h2 class="color-blanco">BORRAR PRODUCTO</h2>
	<hr>
	<?= form_open("/CMC/deleteProducto") ?>
<?php $i=1;?>
<select name="borrar">
<option></option>
<?php foreach($art->result() as $opc){?>
<option value= "<?php echo $i; ?>" > <?php echo $opc->nombreProducto; ?> </option> 
<?php $i+=1;
}?>
</select>
<?= form_submit('','Eliminar') ?>
<?= form_close() ?>
</div>
<hr>
</body>
</html>