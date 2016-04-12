<body id="p">
<h1 class="text-center espacio-arriba2">DATOS CLIENTE</h1>
<?= form_open("CMC/datosEnvio");?>
<?php $nombre=array('name'=>'nombre', 'placeholder' => 'Escribe tu nombre completo', 'size' => '40');
$apellido=array('name'=>'apellido', 'placeholder' => 'Escribe tus apellidos','size' => '40');
$telefono=array('name'=>'telefono', 'placeholder' => 'Escribe tu telefono','size' => '40');
$numero_tarjeta=array('name'=>'numero_tarjeta', 'placeholder' => 'Escribe el numero de tu tarjeta','size' => '40');
?>
<br><br>
<div class="text-center" >
<?=form_label('Nombre:  ')?>
<?= form_input($nombre)?>
<br><br>
<?=form_label('Apellidos:  ')?>
<?= form_input($apellido)?>
<br><br>
<?=form_label('Telefono:  ')?>
<?= form_input($telefono)?>
<br><br>
<?=form_label('numero de tarjeta:  ')?>
<?= form_input($numero_tarjeta)?>
<br><br>
<?=form_submit('','Pagar');?>
<?= form_close();?>	
<br><br>
<?= form_open("CMC/Carrito");?>
<?=form_submit('','Regresar');?>
<?= form_close();?>	
</div>
</body>
</html>