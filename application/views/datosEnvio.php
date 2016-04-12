 

<body id="p">
	
<h1 align ="center">DATOS DE ENVIO</h1>
<hr>

<?= form_open("CMC/datosEnvio");?>
<?php $direccion=array('name'=>'direccion', 'placeholder' => 'Escribe tu direccion', 'size' => '40');
$colonia=array('name'=>'colonia', 'placeholder' => 'Escribe tu colonia','size' => '40');
$ciudad=array('name'=>'ciudad', 'placeholder' => 'Escribe tu ciudad','size' => '40');
$codigo=array('name'=>'codigo', 'placeholder' => 'Escribe tus codigo','size' => '40');	
?>
<br><br>
<div class="text-center" >
<?=form_label('Direccion:  ')?>
<?= form_input($direccion)?>
<br><br>
<?=form_label('Colonia:  ')?>
<?= form_input($colonia)?>
<br><br>
<?=form_label('Ciudad:  ')?>
<?= form_input($ciudad)?>
<br><br>
<?=form_label('Pais:  ')?>
<select name="Pais">
<option></option>
<option>Mexico</option>
</select>
<br><br>
<?=form_label('Estado:  ')?>
<select name="estado">
<option></option>
<option>Estado de Mexico</option>
</select>
<br><br>
<?=form_label('Codigo postal:  ')?>
<?= form_input($codigo)?>
<?=form_submit('','Enviar');?>
<?= form_close();?>	
<br><br>
<?= form_open("CMC/datosCliente");?>
<?=form_submit('','Regresar');?>
<?= form_close();?>

</body>
</html>
