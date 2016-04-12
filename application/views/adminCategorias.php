<body id="p" class="ad_categ">
<h1 class="centrar color-blanco" >Administracion de Categorias</h1>
<hr>
<?= form_open("/CMC/addCategoria") ?>
<?PHP
$nombre = array('name' => 'nombre' ,'placeholder' => 'Escribe categoria nueva');
?>	
<?= form_input($nombre) ?>
<?= form_submit('','Agregar') ?>
<br><br>
<?= form_close() ?>

<?php $i=1;?>
<?php foreach ($cat->result() as $opc) {?>

<?= form_open("/CMC/updateCategoria") ?>
<?PHP $nombre2 = array('name' => 'nombre' ,'placeholder' => 'Escribe categoria a modificar','value'=> $opc->nombreCategoria);
$datos=array('name'=> $i,'value'=> 'Modificar')
?>
<?php $i=$i+1;?>
 <?= form_input($nombre2);?>	
 <?= form_submit($datos) ?>
 
 <br><br>
 <?= form_close() ?>
<?php } ?>



<?= form_open("/CMC/deleteCategoria") ?>
<?php $i=1;?>
<select name="borrar">
<option></option>
<?php foreach($cat->result() as $opc){?>
<option value= "<?php echo $i; ?>" > <?php echo $opc->nombreCategoria; ?> </option> 
<?php $i+=1;
}?>
</select>
<?= form_submit('','Eliminar') ?>
<?= form_close() ?>

</body>

</html>