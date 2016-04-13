
<body id="p">
<h1 align="center">CARRITO DE COMPRAS</h1>
<br><br><br>

<table border="1" align="center" >
        <thead>
            <tr>
                <th><h4>PRODUCTO</h4></th>
                <th><h4>PRECIO</h4></th>
                <th><h4>CANTIDAD</h4></th>
                <th><h4>TOTAL</h4></th>
            </tr>
        </thead>

<?=form_open("CMC/datosCliente")?>

<?php foreach ($datos->result() as $row) {?>
<tbody>
	 <th><?= $row->nombre_articulo ?></th>
	 <th> <?= $row->precio?> </th>
	 <th> <select name="cantidad"  >
		<option value= "1" >1</option>
		<option value= "2" >2</option>
		<option value= "3" >3</option> 
		</select>
	 </th>
	 <th> <?= ($row->precio); ?></th>

<?php } ?>
</tbody>
</table>
<div class="espacio-der-carro">
	<?=form_label('IMPORTE TOTAL:') ?> 
	<?php $total=0; ?>
	<?php foreach ($datos->result() as $row) {?>
		<?php $total+=$row->precio;?>
	<?php } ?>	
	<?= $total ?>
</div>
<div align="center">
<?= form_submit('','comprar')?>
</div>
<?=form_close()?>
<br><br>

<?=form_open("CMC/deleteCarrito")?>
<div class="matar-carro">
<?= form_submit('','ELIMINAR CARRITO')?>
</div>
<?=form_close()?>
</body>

</html>