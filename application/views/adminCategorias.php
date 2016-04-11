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


<?php foreach ($cat->result() as $opc) {?>
<?php $i=1;?>
<?php
$cookie = array(
    'name'   => $i,
    'value'  => $i,
    'expire' => '86500'
);
$this->input->set_cookie($cookie);
?>
<?= form_open("/CMC/updateCategoria",$i) ?>
<?PHP	$nombre2 = array('name' => 'nombre' ,'placeholder' => 'Escribe categoria a modificar','value'=> $opc->nombreCategoria);?>
 <?= form_input($nombre2);?>	
 <?= form_submit($i,'Modificar') ?>
 <?php $i=$i+1;?>
 <br><br>
 <?= form_close() ?>
<?php } ?>

<?= form_open("/CMC/deleteCategoria",$i) ?>
<?php
$i=1;
foreach ($cat->result() as $opc) {
$options[$i] = array('categoria'=> $opc->nombreCategoria);
$i=$i+1;
}
echo form_dropdown('', $options,$opc->nombreCategoria);
?>
<?= form_submit('','Eliminar') ?>
<?= form_close() ?>

</body>

</html>